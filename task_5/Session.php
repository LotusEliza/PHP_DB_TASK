<?php
include 'iWorkData.php';

class Session implements iWorkData{


    public function saveData($key, $val){
        $_SESSION[$key] = $val;
        return SESSET;
    }
    public function getData($key){
        return $_SESSION[$key];
    }
    public function deleteData($key){
        unset($_SESSION[$key]);
        return SESDEL;
    }
    
    // public function saveData($key, $val){
    //     echo $_SESSION[$key] = $val;
    //     // return SETSES;
    // }

} 