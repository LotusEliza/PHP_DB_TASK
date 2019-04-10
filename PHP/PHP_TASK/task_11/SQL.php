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
    protected $update=[];
    protected $query;

    public function __set_field($field){
        array_push($this->fields,"$field");
    }

    public function __set_table($table){
        $this->table = $table;
    }

    public function __set_value($values){
        array_push($this->values,"$values");
    }

    public function __set_where($where){
        array_push($this->where,"$where");
    }

    public function f_select(){
        $fields_str = implode(", ", $this->fields);
        $where_str = implode(" AND ", $this->where);
        $query = "SELECT $fields_str FROM `$this->table` WHERE $where_str";
        $this->query = $query;
    }

    public function f_update(){
        foreach (array_combine($this->fields, $this->values) as $field => $value) {
        array_push($this->update,"$field=$value");
        }
        $str = implode(", ", $this->update);
        $where_str = implode(" AND ", $this->where);
        $query = "UPDATE $this->table SET $str WHERE $where_str;";
        $this->query = $query;
    }

    public function f_insert(){
        $fields_str = implode(", ", $this->fields);
        $values_str = implode(", ", $this->values);
        $query = "INSERT INTO $this->table ($fields_str) VALUES ($values_str);";
        $this->query = $query;
    }

    public function f_delete(){
        $where_str = implode("=", $this->where);
        $query = "DELETE FROM $this->table WHERE $where_str ;";
    }
}