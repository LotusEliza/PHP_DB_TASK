<?php
/**
 * Created by PhpStorm.
 * User: lotus
 * Date: 3/31/19
 * Time: 7:12 PM
 */

class Mysql extends SQL
{
    protected $link;

    function __construct()
    {
        $this->link = mysql_connect(DB_HOST, DB_USER, DB_PASS)
        or die("Could not connect: " . mysql_error());
        mysql_select_db(DB_NAME) or die(mysql_error());
    }

    public function f_select(){
        parent::f_select();
        $result = mysql_query($this->query, $this->link);

        if (!$result){
            return ERROR_MYSQL . mysql_error();

        }else{
            $array_result=[];
            while ($row = mysql_fetch_assoc($result)) {
                $array_result[] = array('name'=>$row["name"], 'city'=>$row["city"], 'age'=>$row["age"]);
            }
            return $array_result;
        }
    }

    public function f_update(){
        parent::f_update();
        $result = mysql_query($this->query, $this->link);

        if ($result === TRUE) {
            return ITEM_UPD;
        } else {
            return ERROR_UPD;
        }
    }

    public function f_insert(){
        parent::f_insert();
        $result = mysql_query($this->query, $this->link);

        if ($result === TRUE) {
            return ITEM_INS;
        } else {
            return ERROR_INS;
        }
    }

    public function f_delete(){
        parent::f_delete();
        $result = mysql_query($this->query, $this->link);

        if ($result === TRUE) {
            return ITEM_REM;
        } else {
            return ERROR_REM;
        }
    }
}