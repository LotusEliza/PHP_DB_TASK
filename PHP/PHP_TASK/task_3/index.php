<?php

include 'config.php';
include 'FileRead.php';

$find= new FileRead();
$result1 = $find->find_symbol(3);
$result2 = $find->find_line(3);
$find->print_by_symbol();
$array = $find->print_by_line();
$array1 = $find->set_line(0,"TEST LINE");
$array2=$find->set_symbol(1,1, "9");

include 'templates/index.php';
