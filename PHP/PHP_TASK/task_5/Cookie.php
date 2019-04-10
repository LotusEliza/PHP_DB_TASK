<?php
/**
 * Created by PhpStorm.
 * User: lotus
 * Date: 3/31/19
 * Time: 12:18 PM
 */

class Cookie implements iWorkData
{
    public function saveData($key, $val){
        setcookie($key, $val, time() + (86400 * 30), "/");
        if(!isset($_COOKIE[$key])) {
            return ERROR_COOK_SET;
        }else{
            return COOK_SET . $_COOKIE[$key];
        }
    }

    public function getData($key){
        return "Get Cookie: " . $_COOKIE[$key];
    }

    public function deleteData($key){
        unset($_COOKIE[$key]);
        return COOK_UNSET;
    }

}