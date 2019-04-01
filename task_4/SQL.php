<?php
/**
 * Created by PhpStorm.
 * User: lotus
 * Date: 3/31/19
 * Time: 7:12 PM
 */

class SQL
{
    protected $values=[];
    protected $fields=[];
    protected $where=[];
    protected $table;
    protected $query;

    public function __set_field($field){
        array_push($this->fields,"$field");
//        var_dump($this->fields);
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

    public function f_select(){
        $fields_str = implode(", ", $this->fields);
        $where_str = implode(" AND ", $this->where);

//        var_dump($where_str);
//        $query = "SELECT `name`, `age` FROM `$this->table` WHERE `age`='0'";
        $query = "SELECT $fields_str FROM `$this->table` WHERE $where_str";
        $this->query = $query;
//        var_dump($query);
    }

    public function f_update(){


//        $query="UPDATE $table SET $field=$value"
    }

    public function f_insert(){

    }



    public function f_delete(){

    }


}