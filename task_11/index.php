<?php
/**
 * Created by PhpStorm.
 * User: lotus
 * Date: 4/15/19
 * Time: 3:12 PM
 */

include 'config.php';
include 'autoload.php';


$obj = ActiveRecords::newEmptyInstance();
$obj->setTitle('Pirates of the Caribbean');
$obj->setPrice('22');
$obj->setDescription('very onteresting book.');
$result1 = $obj->save();
$obj->setDescription('Updated.');
$result2 = $obj->save();

$result3 = $obj->find(1);
//var_dump($result3);
//$result4 = $obj::newInstance(2);
//echo $obj->getId();
$result5 = $obj::_delete(1);


//$obj1 = ActiveRecords::newEmptyInstance();
//$result = $obj1::newInstance(5);
//var_dump($result);
//echo $obj1->getId();
//echo $obj->getId();

$result = Helper::createTable($result3);

include 'templates/index.php';
