<?php

include("libs/Calc.php");

$first = new Calc();

$first->setNum1(1);
$first->setNum2(2);

$result = $first-> addition();
$result1 = $first -> subtraction();
$result2 = $first -> multiplication();
$result3 = $first -> division();
$result4 = $first -> squareRoot();
$result5 = $first -> power();
$result6 = $first -> memoryAdd();
$result7 = $first -> memoryAdd();
$result8 = $first -> getMemory();
$result9 = $first -> memorySubstruct();
$result10 = $first -> getMemory();
$result11 = $first -> memoryClear();
$result12 = $first -> getMemory();

$num1 = $first->getNum1();
$num2 = $first->getNum2();


include("templates/index.php");



