<?php
/**
 * Created by PhpStorm.
 * User: lotus
 * Date: 3/31/19
 * Time: 7:12 PM
 */

class SQL
{
    protected $table;
    protected $fields=[];
    protected $values=[];
    protected $where=[];
    protected $update=[];
    protected $limit;
    protected $query;

    public function set_field($field){
        if(is_numeric($field) || $field == "*"){
           echo ERROR_FLD;
        }else{
            $field = trim($field);
            array_push($this->fields,"$field");
        }
    }

    public function set_table($table){
        $this->table = trim($table);
    }

    public function set_value($values){
        $values = trim($values);
        array_push($this->values,"$values");
    }

    public function set_where($where){
        $where = trim($where);
        array_push($this->where,"$where");
    }

    public function set_limit($limit){
        $limit = trim($limit);
        $this->limit = $limit;
    }

    public function f_select(){
        $fields_str = $this->implode_dot($this->fields);
        $where_str  = $this->implode_and($this->where);

        if($this->limit){
            $this->query = "SELECT $fields_str FROM $this->table WHERE $where_str LIMIT $this->limit";
        }else{
            $this->query = "SELECT $fields_str FROM $this->table WHERE $where_str";
        }
    }

    public function f_update(){
        $update=[];
        foreach (array_combine($this->fields, $this->values) as $field => $value) {
        array_push($update,"$field=$value");
        }
        $str = $this->implode_dot($update);
        $where_str  = $this->implode_and($this->where);
        $this->query = "UPDATE $this->table SET $str WHERE $where_str;";
    }

    public function f_insert(){
        $fields_str = $this->implode_dot($this->fields);
        $values_str = $this->implode_dot($this->values);
        $this->query = "INSERT INTO $this->table ($fields_str) VALUES ($values_str);";
    }

    public function f_delete(){
        $where_str  = $this->implode_and($this->where);
        $this->query = "DELETE FROM $this->table WHERE $where_str;";
    }

    public function implode_dot($str){
        return $result = implode(", ", $str);
    }

    public function implode_and($str){
        return $result = implode(" AND ", $str);
    }
}