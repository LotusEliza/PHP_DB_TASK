<?php
include 'iWorkData.php';
class Session implements iWorkData{

    public function saveData($key, $val){
        if(isset($_SESSION[$key]) && !empty($_SESSION[$key])) {
            return SES_EXIST;
        }else{
            $_SESSION[$key] = $val;
            return SES_SET . $_SESSION[$key];
        }
    }

    public function getData($key){
        return "Get session: " . $_SESSION['4'];
    }

    public function deleteData($key){
        unset($_SESSION[$key]);
        return SES_UNSET;
    }
    
    // public function saveData($key, $val){
    //     echo $_SESSION[$key] = $val;
    //     // return SETSES;
    // }

} 