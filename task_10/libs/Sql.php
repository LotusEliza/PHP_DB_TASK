<?php

class SQL
{
//Task10: Расширить свой Sql класс, что бы он смог работать c Distinct, Join, Group, Having, Order, Limit
//Join::
//join(): добавляет к запросу INNER JOIN.
//leftJoin(): добавляет к запросу LEFT OUTER JOIN.
//rightJoin(): добавляет к запросу RIGHT OUTER JOIN.
//crossJoin(): добавляет к запросу CROSS JOIN.
//naturalJoin(): добавляет к запросу NATURAL JOIN.
//Практика - сделать класс для MySQL/PostgreSQL на PDO c применением “Текучего Интерфейса”
//(должно быть использование prepare, execute, bindParam для безопасного выполнения SQL)

    protected $values=[];
    protected $values2=[];
    protected $fields=[];
    protected $fields2=[];
    protected $onfield;
    protected $onfield2;
    protected $where=[];
    protected $where_f=[];
    protected $where_v=[];
    protected $table;
    protected $table2;
    protected $query;
    protected $join;
    protected $order;
    protected $group;
    protected $having=[];
    protected $keys;


    public function __set_table($table){
        $this->table = $table;
    }

    public function __set_table2($table2){
        $this->table2 = $table2;
    }

    public function __set_field($field){
        array_push($this->fields,"$field");
    }

    public function __set_field2($field2){
        array_push($this->fields2,"$field2");
    }

    public function __set_onfield($onfield){
        $this->onfield = $onfield;
    }

    public function __set_onfield2($onfield2){
        $this->onfield2 = $onfield2;
    }

    public function __set_order($order){
        $this->order = $order;
    }

    public function __set_group($group){
        $this->group = $group;
    }

    public function __set_having($having){
        $this->having = $having;
    }

    public function __set_value($value){
        array_push($this->values,"$value");
//        var_dump($this->values);
    }

    public function __set_value2($value2){
        array_push($this->values2,"$value2");
//        var_dump($this->values);
    }

//    public function __set_where($where){
//        array_push($this->where,"$where");
////        var_dump($this->where);
//    }

    public function __set_join($type){
        $this->join = $type;
    }

    public function __set_where_f($field){
        array_push($this->where_f,"$field");
    }

    public function __set_where_v($value){
        array_push($this->where_v,"$value");
    }



    public function f_select(){
           $fields_str = implode(", ", $this->fields);
           var_dump($fields_str);
           $this->query .= "SELECT $fields_str";
           return $this;
    }

//    public function f_select(){
//        if(!$this->table2){
//            $fields_str = implode(", ", $this->fields);
//            $this->query .= "SELECT $fields_str";
//            return $this;
//        }else{
//            $array = $this->tabl_field($this->fields, $this->table);
//            $array2 = $this->tabl_field($this->fields2, $this->table2);
//            $fields_str = implode(", ", $array);
//            $fields_str2 = implode(", ", $array2);
//
//            $this->query .= "SELECT $fields_str, $fields_str2 ";
//            return $this;
//        }
//    }

    public function f_select2(){

            $array = $this->tabl_field($this->fields, $this->table);
            $array2 = $this->tabl_field($this->fields2, $this->table2);
            $fields_str = implode(", ", $array);
            $fields_str2 = implode(", ", $array2);

            $this->query .= "SELECT $fields_str, $fields_str2 ";
            return $this;
    }

     public function f_join(){
         $fields_str = $this->table.".".$this->onfield;
         $fields_str2 = $this->table2.".".$this->onfield2;

         if($this->join == "inner"){
             $this->query .= " INNER JOIN $this->table2 ON $fields_str=$fields_str2";
             return $this;
         }elseif ($this->join == "left"){
             $this->query .= " LEFT JOIN $this->table2 ON $fields_str=$fields_str2";
             return $this;
         }elseif ($this->join == "right"){
             $this->query .= " RIGHT JOIN $this->table2 ON $fields_str=$fields_str2";
             return $this;
         }elseif ($this->join == "cross"){
             $this->query .= " CROSS JOIN $this->table2";
             return $this;
         }elseif ($this->join == "natural"){
             $this->query .= " NATURAL JOIN $this->table2";
             return $this;
         }else{
             return NULL;
         }
     }

    public function tabl_field($array, $table){
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
        $keys = $this->prep_bind($this->where_v);
        foreach (array_combine($this->where_f, $keys) as $field => $value) {
            array_push($array,"$field=$value");
        }
        $where_str = implode(" AND ", $array);
        $this->query .= " WHERE $where_str";
        return $this;
    }

    public function order_by(){
        $this->query .= " ORDER BY $this->order";
        return $this;
    }

    public function group_by(){
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
        $keys = $this->prep_bind($this->values);
        foreach (array_combine($this->fields, $keys) as $field => $value) {
            array_push($update,"$field=$value");
        }
        $str = $this->implode_dot($update);
        $this->query .= "UPDATE $this->table SET $str";
        return $this;
    }

    public function f_insert(){
        $fields_str = $this->implode_dot($this->fields);
        $keys = array_keys($this->values);
        foreach ($keys as &$value) {
            $value = ':'.$value;
        }
        $values_str = $this->implode_dot($keys);

        $this->query .= "INSERT INTO $this->table ($fields_str) VALUES ($values_str)";
        return $this;
    }

        public function prep_bind($values){
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

    public function implode_dot($str){
        return $result = implode(", ", $str);
    }

    public function implode_and($str){
        return $result = implode(" AND ", $str);
    }
}

//    public function f_leftjoin(){
//        $fields_str = $this->table.".".$this->onfield;
//        $fields_str2 = $this->table2.".".$this->onfield2;
//
//        $this->query .= " LEFT JOIN $this->table2 ON $fields_str=$fields_str2";
//        return $this;
//    }


// public function f_select(){
//     $fields_str = implode(", ", $this->fields);
//     $where_str = implode(" AND ", $this->where);

//     $query = "SELECT $fields_str FROM `$this->table` WHERE $where_str";
//     $this->query = $query;
// }


//    public function f_select(){
//        $fields_str = implode(", ", $this->fields);
//
//        $this->query .= "SELECT $fields_str";
//        // $this->query = $query;
//        return $this;
//    }


