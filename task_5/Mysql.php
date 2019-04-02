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

    function connect()
    {
        $db = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
        return $db;
    }

    public function saveData($key, $val){
        $this->val = $val;
        $db=$this->connect();
        $query = "INSERT INTO try ($key) VALUES (?)";
        $stmt = $db->prepare($query);
        $stmt->bind_param("s", $val);
        $result = $stmt->execute();
        $db->close();

        if ($result === TRUE) {
            return ITEM_INS;
        } else {
            return ERROR_INS;
        }
    }

    public function getData($key){
        $db=$this->connect();
        $query = "SELECT * FROM try WHERE $key='$this->val'";
        $result = $db->query($query);

        $array_result=[];
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $array_result[] = array('id'=>$row["id"], 'name'=>$row["name"]);
            }
        } else {
            echo "0 results";
        }

        $db->close();
        return $array_result;
    }

    public function deleteData($key){
        $db=$this->connect();
        $query = "DELETE FROM try WHERE $key='$this->val'";
        $result = $db->query($query);
        $db->close();

        if ($result === TRUE) {
            return ITEM_REM;
        } else {
            return ERROR_REM;
        }
    }
}