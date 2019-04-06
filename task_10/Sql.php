<?php

class SQL
{
    protected $values=[];
    protected $fields=[];
    protected $where=[];
    protected $table;
    protected $table2;
    protected $query;

    public function __set_field($field){
        array_push($this->fields,"$field");
    }

    public function __set_table($table){
        $this->table = $table;
    }

    public function __set_value($values){
        array_push($this->values,"$values");
//        var_dump($this->values);
    }

    public function __set_where($where){
        array_push($this->where,"$where");
//        var_dump($this->where);
    }

    // public function f_innerjoin(){
    //     $query = "INNER JOIN $this->table2 ON $this->table.";
    // }

    public function __set_table2($table2){
        $this->table2 = $table2;
    }

    public function f_select(){
        $fields_str = implode(", ", $this->fields);
       
        $this->query .= "SELECT $fields_str";
        // $this->query = $query;
        return $this;
    }

    public function f_from(){
        $this->query .= "FROM `$this->table`";
        return $this;
    }

    public function f_where(){
        $where_str = implode(" AND ", $this->where);
        $this->query .= "WHERE $where_str";
        return $this;
    }
    


    // public function f_select(){
    //     $fields_str = implode(", ", $this->fields);
    //     $where_str = implode(" AND ", $this->where);

    //     $query = "SELECT $fields_str FROM `$this->table` WHERE $where_str";
    //     $this->query = $query;
    // }

    public function f_update(){
//        $query="UPDATE $table SET $field=$value"
    }

    public function f_insert(){
    }

    public function f_delete(){
    }
}