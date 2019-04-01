<?php
session_start();
include 'config.php';
include 'Session.php';
include 'Cookie.php';
include 'Json.php';
include 'Mysql.php';
// include 'iWorkData.php';

$objSes = new Session;
 $objCook = new Cookie;
// $objIni = new Ini;
 $objJson =new Json;
 $objMysql = new Mysql;


function add(iWorkData $obj){
    $key=4;
    $val=6;
    return $obj->saveData($key, $val);
}

function read(iWorkData $obj){
    $key=4;
    return $obj->getData($key);
}

function remove(iWorkData $obj){
    $key=4;
    return $obj->deleteData($key);
}

//$mysql1=add($objMysql);
//$mysql2=read($objMysql);
//var_dump($mysql2);
//$mysql3=remove($objMysql);


$ses1=add($objSes);
$ses2=read($objSes);
$ses3=remove($objSes);

$cook1=add($objCook);
$cook2=read($objCook);
$cook3=remove($objCook);

$json1=add($objJson);
$json2=read($objJson);
$json3=remove($objJson);


include 'templates/index.php';
