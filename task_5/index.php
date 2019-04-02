<?php
session_start();
include 'config.php';
include 'Session.php';
include 'Cookie.php';
include 'Json.php';
include 'Mysql.php';
include 'Ini.php';
// include 'iWorkData.php';

$objSes = new Session;
 $objCook = new Cookie;
// $objIni = new Ini;
 $objJson =new Json;
 $objMysql = new Mysql;
 $objIni = new Ini;


function add(iWorkData $obj){
    $key="name";
    $val="Liza";
    return $obj->saveData($key, $val);
}

function read(iWorkData $obj){
    $key="name";
    return $obj->getData($key);
}

function remove(iWorkData $obj){
    $key="name";
    return $obj->deleteData($key);
}
//
$ini1=add($objIni);
$ini2=read($objIni);
$ini3=remove($objIni);
//phpinfo();
$mysql1=add($objMysql);
$mysql2=read($objMysql);
$mysql3=remove($objMysql);


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
