<?php
include 'Test.php';
include 'config.php';

ini_set('max_execution_time', 300);

$test = new Test();
echo $test->insert_test();
