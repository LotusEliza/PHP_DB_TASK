<?php

include("libs/Calc.php");

$first = new Calc(3, 3);

$result = $first-> add();
$result1 = $first -> sub();
$result2 = $first -> mul();
$result3 = $first -> div();
$result4 = $first -> sqr();


include("templates/index.php");



