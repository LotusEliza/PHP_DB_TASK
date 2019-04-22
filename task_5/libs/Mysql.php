<?php
/**
 * Created by PhpStorm.
 * User: lotus
 * Date: 3/31/19
 * Time: 2:20 PM
 */

class Mysql implements iWorkData
{
    protected $val;
    protected $link;

    function __construct()
    {
        $this->link = mysql_connect(DB_HOST, DB_USER, DB_PASS)
        or die("Could not connect: " . mysql_error());
        mysql_select_db(DB_NAME) or die(mysql_error());
    }

    public function saveData($key, $val){
        $this->val = $val;
        $query = "INSERT INTO try ($key) VALUES ('$val')";
        $result = mysql_query($query, $this->link);


        if ($result === TRUE) {
            return ITEM_INS;
        } else {
            return ERROR_INS;
        }
    }

    public function getData($key){
        $query = "SELECT * FROM try WHERE $key='$this->val'";
        $result = mysql_query($query, $this->link);

        if (!$result){
            return ERROR_MYSQL . mysql_error();

        }else{
            $array_result=[];
            while ($row = mysql_fetch_assoc($result)) {
                $array_result[] = array('id'=>$row["id"], 'name'=>$row["name"]);
            }
            return $array_result;
        }
    }

    public function deleteData($key){
        $query = "DELETE FROM try WHERE $key='$this->val'";
        $result = mysql_query($query, $this->link);

        if ($result === TRUE) {
            return ITEM_REM;
        } else {
            return ERROR_REM;
        }
    }
}
