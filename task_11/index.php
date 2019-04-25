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
$obj->setDescription('Very onteresting book.');
$result1 = $obj->save();
$obj->setDescription('Updated.');
$result2 = $obj->save();

$result3 = $obj->find(1);
$result5 = $obj::_delete(1);
$result = Helper::createTable($result3);

include 'templates/index.php';