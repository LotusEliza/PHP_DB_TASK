<?php

include 'config.php';
include 'FileRead.php';


$findline= new FileRead(1,1);

$result1=$findline->find_line();
$result2=$findline->find_symbol();

echo "<hr>";
$findline->printbyline();
echo "<hr>";
$findline->printbysymbol();

$array1=$findline->setLine(0,"TEST LINE");
$array2=$findline->set_symbol(2,3, "7");


include 'templates/index.php';
