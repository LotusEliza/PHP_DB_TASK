<?php
include 'Helper.php';

//сделать класс Html Helper реализующий select-multi, table, ul-ol, dl-dt-dd, radiobuttons-group, checkboxes

    $logo="Hello World";
    $text = "Footer text";
    $ulol = "ul"; //choose ol or ul list
    $class="test1"; //*test1 , *test2, *test3

    $flowers = array("flower1"=>"rose", "flower2"=>"lilac", "flower3"=>"pansy", "flower4"=>"poppy", "flower5"=>"iris");
    $array = Helper::arrayForm("db.json");



include 'templates/index.php';

