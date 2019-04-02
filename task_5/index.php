<?php

    session_start();
    include 'config.php';
    include 'Session.php';
    include 'Cookie.php';
    include 'Json.php';
    include 'Mysql.php';
    include 'Ini.php';

    function add(iWorkData $obj){
        $key="name";
        $val="Test";
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

    $objIni = new Ini;
    $ini1=add($objIni);
    $ini2=read($objIni);
    $ini3=remove($objIni);

    $objMysql = new Mysql;
    $mysql1=add($objMysql);
    $mysql2=read($objMysql);
    $mysql3=remove($objMysql);

    $objSes = new Session;
    $ses1=add($objSes);
    $ses2=read($objSes);
    $ses3=remove($objSes);

    $objCook = new Cookie;
    $cook1=add($objCook);
    $cook2=read($objCook);
    $cook3=remove($objCook);

    $objJson =new Json;
    $json1=add($objJson);
    $json2=read($objJson);
    $json3=remove($objJson);

include 'templates/index.php';
