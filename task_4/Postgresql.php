<?php
/**
 * Created by PhpStorm.
 * User: lotus
 * Date: 3/31/19
 * Time: 7:12 PM
 */

class Postgresql extends SQL
{
    protected $link;

    function __construct()
    {
        $this->link = pg_connect("host=DB_HOST port=5432 dbname=DB_NAME user=DB_USER password=DB_PASS")or die('connection failed');
    }

    public function f_select(){
        parent::f_select();
        $result = pg_query($this->link,"$this->query");

        if (!$result) {
            return ERROR_PG;
        }else{
            $array_result=[];
            while ($row = pg_fetch_assoc($result)) {
                $array_result[] = array('name'=>$row["name"], 'city'=>$row["city"], 'age'=>$row["age"]);
            }
            return  $array_result;
        }
    }

    public function f_update(){
        parent::f_update();
        $result = pg_query($this->link,"$this->query");

        if ($result === TRUE) {
            return ITEM_UPD;
        } else {
            return ERROR_UPD;
        }
    }

    public function f_insert(){
        parent::f_insert();
        $result = pg_query($this->link,"$this->query");

        if ($result === TRUE) {
            return ITEM_INS;
        } else {
            return ERROR_INS;
        }
    }

    public function f_delete(){
        parent::f_delete();
        $result = pg_query($this->link,"$this->query");

        if ($result === TRUE) {
            return ITEM_REM;
        } else {
            return ERROR_REM;
        }
    }

}

// CREATE TABLE test_table(
//     id INT PRIMARY KEY     NOT NULL,
//     name           TEXT    NOT NULL,
//     city           TEXT    NOT NULL,
//     age            INT     NOT NULL,
//  );