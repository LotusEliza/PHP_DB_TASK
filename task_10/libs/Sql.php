<?php

class SQL
{
    protected $values=[];
    protected $values2=[];
    protected $upValues=[];
    protected $fields=[];
    protected $fields2=[];
    protected $onField;
    protected $onField2;
    protected $where=[];
    protected $whereF=[];
    protected $whereV=[];
    protected $table;
    protected $table2;
    protected $query;
    protected $join;
    protected $order;
    protected $group;
    protected $having=[];
    protected $keys;

    public function setTable($table){
        $this->table = $table;
    }

    public function setTable2($table2){
        $this->table2 = $table2;
    }

    public function setField($field){
        array_push($this->fields,"$field");
    }

    public function setField2($field2){
        array_push($this->fields2,"$field2");
    }

    public function setOnField($onField){
        $this->onField = $onField;
    }

    public function setOnField2($onField2){
        $this->onField2 = $onField2;
    }

    public function setOrder($order){
        $this->order = $order;
    }

    public function setGroup($group){
        $this->group = $group;
    }

    public function setHaving($having){
        $this->having = $having;
    }

    public function setValue($value){
        array_push($this->values,"$value");
    }

    public function setValue2($value2){
        array_push($this->values2,"$value2");
    }

    public function setUpValue($value){
        array_push($this->upValues,"$value");
    }

    public function setJoin($type){
        $this->join = $type;
    }

    public function setWhereF($field){
        array_push($this->whereF,"$field");
    }

    public function setWhereV($value){
        array_push($this->whereV,"$value");
    }

    public function f_select(){
           $fieldsStr = implode(", ", $this->fields);
           $this->query .= "SELECT $fieldsStr";
           return $this;
    }

    public function f_select2(){

            $array = $this->tablField($this->fields, $this->table);
            $array2 = $this->tablField($this->fields2, $this->table2);
            $fieldsStr = implode(", ", $array);
            $fieldsStr2 = implode(", ", $array2);

            $this->query .= "SELECT $fieldsStr, $fieldsStr2 ";
            return $this;
    }

     public function f_join(){
         $fieldsStr = $this->table.".".$this->onField;
         $fieldsStr2 = $this->table2.".".$this->onField2;
         $inner ="inner";
         $leftOuter ="leftOuter";
         $rightOuter ="rightOuter";
         $cross = "cross";
         $natural = "natural";

         if($this->join == $inner){
             $this->query .= " INNER JOIN $this->table2 ON $fieldsStr=$fieldsStr2";
             return $this;
         }elseif ($this->join ==  $leftOuter){
             $this->query .= " LEFT OUTER JOIN $this->table2 ON $fieldsStr=$fieldsStr2";
             return $this;
         }elseif ($this->join == $rightOuter){
             $this->query .= " RIGHT OUTER JOIN $this->table2 ON $fieldsStr=$fieldsStr2";
             return $this;
         }elseif ($this->join == $cross){
             $this->query .= " CROSS JOIN $this->table2";
             return $this;
         }elseif ($this->join == $natural){
             $this->query .= " NATURAL JOIN $this->table2";
             return $this;
         }else{
             return ERROR_JOIN;
         }
     }

    public function tablField($array, $table){
        foreach ($array as &$item) {
            $item = $table.".".$item;
        }
        return $array;
    }

    public function f_from(){
        $this->query .= " FROM $this->table";
        return $this;
    }

    public function f_where(){
        $array=[];
        $keys = $this->prepBind($this->whereV);
        foreach (array_combine($this->whereF, $keys) as $field => $value) {
            array_push($array,"$field=$value");
        }
        $where_str = implode(" AND ", $array);
        $this->query .= " WHERE $where_str";
        return $this;
    }

    public function orderBy(){
        $this->query .= " ORDER BY $this->order";
        return $this;
    }

    public function groupBy(){
        $this->query .= " GROUP BY $this->group";
        return $this;
    }

    public function having(){
        $this->query .= " HAVING $this->having";
        return $this;
    }

    public function f_update(){
        $update=[];
        $this->values;
        $keys = $this->prepBind($this->values);
        foreach (array_combine($this->fields, $keys) as $field => $value) {
            array_push($update,"$field=$value");
        }
        $str = $this->implodeDot($update);
        $this->query .= "UPDATE $this->table SET $str";
        return $this;
    }

    public function f_insert(){
        $fields_str = $this->implodeDot($this->fields);
        $keys = array_keys($this->values);
        foreach ($keys as &$value) {
            $value = ':'.$value;
        }
        $values_str = $this->implodeDot($keys);

        $this->query .= "INSERT INTO $this->table ($fields_str) VALUES ($values_str)";
        return $this;
    }

        public function prepBind($values){
        $keys = array_keys($values);
        foreach ($keys as &$value) {
            $value = ':'.$value;
        }
        return $keys;
    }

    public function f_delete(){
        $this->query .= "DELETE FROM $this->table";
        return $this;
    }

    public function implodeDot($str){
        return $result = implode(", ", $str);
    }

    public function implodeAnd($str){
        return $result = implode(" AND ", $str);
    }

}