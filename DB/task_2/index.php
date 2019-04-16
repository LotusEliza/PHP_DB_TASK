<?php
session_start();
ini_set('max_execution_time', 300);

include 'Mysql.php';
include 'PG.php';
include 'config.php';

//
//$test = new Mysql();
//$test->insert_test();

$test = new PG();
echo $test->insert_test();
