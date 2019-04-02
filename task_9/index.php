<?php
include 'Helper.php';

$color="blue";
$logo="Hello World";
$bgcol="green";
$text = "Footer text";
$received = Helper::addHeader($logo, $color, $bgcol);


$array = Helper::arrayForm("db.json");
$received = Helper::createTable($array['items']);

$received = Helper::addFooter($text, $color, $bgcol);


include 'templates/index.php';

