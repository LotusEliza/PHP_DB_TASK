<?php
session_start();
ini_set('max_execution_time', 300);

include 'Test.php';
include 'config.php';


$test = new Test();
$test->insert_test();
