<?php
/**
 * Created by PhpStorm.
 * User: lotus
 * Date: 3/31/19
 * Time: 7:12 PM
 */

class Postgresql extends SQL implements iData
{
    protected $link;

    function __construct()
    {
        $this->link = pg_connect("host=localhost port=5432 dbname=user3 user=user3 password=user3")
        or die('connection failed');
    }

    public function f_select(){
        parent::f_select();
        $result = pg_query($this->link,"$this->query");

        if (!$result){
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
        $aff_rows = pg_affected_rows($result);

        if($aff_rows){
            return ITEM_UPD;
        }else{
            return ERROR_UPD;
        }
    }

    public function f_insert(){
        parent::f_insert();
        $result = pg_query($this->link,"$this->query");
        $aff_rows = pg_affected_rows($result);

        if($aff_rows){
            return ITEM_INS;
        }else{
            return ERROR_INS;
        }
    }

    public function f_delete(){
        parent::f_delete();
        $result = pg_query($this->link,"$this->query");
        $aff_rows = pg_affected_rows($result);

        if($aff_rows){
            return ITEM_REM;
        }else{
            return ERROR_REM;
        }
    }

    public function __destruct()
    {
        pg_close($this->link);
    }
}