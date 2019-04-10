<?php
/**
 * Created by PhpStorm.
 * User: lotus
 * Date: 3/31/19
 * Time: 1:03 PM
 */

class Json implements iWorkData
{
    protected $json;

    public function saveData($key, $val){
        $myArr = array($key=>$val);
        $myJSON = json_encode($myArr);
        $this->json = $myJSON;
        return JSON_SET . $this->json ;
    }

    public function getData($key){
        $array = json_decode($this->json, true);
        return $array;
    }

    public function deleteData($key){
        $array = json_decode($this->json, true);
        unset($array[$key]);
        $myJSON = json_encode($array);
        $this->json = $myJSON;
        return JSON_DEL;
    }

}