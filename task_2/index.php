<?php

include("libs/Calc.php");

$first = new Calc();

$first->__setNum1(4);
$first->__setNum2(3);

$result = $first-> addition();
$result1 = $first -> subtraction();
$result2 = $first -> multiplication();
$result3 = $first -> division();
$result4 = $first -> squareRoot();
$result5 = $first -> power();



include("templates/index.php");



