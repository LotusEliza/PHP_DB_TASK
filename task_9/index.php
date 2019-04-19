<?php
include 'libs/Helper.php';

    $ulol = "ul"; //choose ol or ul list
    $class="test3"; //*test1 , *test2, *test3

    $flowers = array("flower1"=>"rose", "flower2"=>"lilac", "flower3"=>"pansy", "flower4"=>"poppy", "flower5"=>"iris");
    $name = 'flowers';
    $array = Helper::arrayForm("db.json");

    $table = Helper::createTable($array['items']);
    $checkbox = Helper::checkBox($flowers, $name);
    $desclist = Helper::descriptionList($class, $flowers);
    $list = Helper::f_list($class, $ulol, $flowers);
    $radio = Helper::radioButton($class, $flowers, $name);
    $multi = Helper::multiSelect($class, $flowers, $name);


include 'templates/index.php';