<?php
include 'iWorkData.php';

class Session implements iWorkData{

    public function saveData($key, $val){
            $_SESSION[$key] = $val;
            return SES_SET . $_SESSION[$key];
    }

    public function getData($key){
        return "Get session: " . $_SESSION[$key];
    }

    public function deleteData($key){
        unset($_SESSION[$key]);
        return SES_UNSET;
    }

} 