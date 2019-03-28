<?php
session_start();
include 'config.php';
include 'Session.php';
// include 'iWorkData.php';

$objSes = new Session;
// $objCook = new Cookies;
// $objIni = new Ini;
// $objJson =new Json;
// $objMysql = new Mysql;

// $key=4;
// $val=6;

function add(iWorkData $obj){
    return $obj->saveData($key, $val);
}

function read(iWorkData $obj){
    return $obj->deleteData($key);
}

function remove(iWorkData $obj){
    return $obj->getData($key);
}




$ses1=add($objSes);
$ses2=read($objSes);
$ses2=remove($objSes);

include 'templates/index.php';
