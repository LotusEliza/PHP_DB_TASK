<?php
include 'Helper.php';

//сделать класс Html Helper реализующий select-multi, table, ul-ol, dl-dt-dd, radiobuttons-group, checkboxes

    $ulol = "ul"; //choose ol or ul list
    $class="test3"; //*test1 , *test2, *test3

    $flowers = array("flower1"=>"rose", "flower2"=>"lilac", "flower3"=>"pansy", "flower4"=>"poppy", "flower5"=>"iris");
    $array = Helper::arrayForm("db.json");


    $table = Helper::createTable($array['items']);
    $checkbox = Helper::checkBox($flowers);
    $desclist = Helper::descriptionList($class, $flowers);
    $list = Helper::f_list($class, $ulol, $flowers);
    $radio = Helper::radioButton($class, $flowers);
    $multi = Helper::multiSelect($class, $flowers);


include 'templates/index.php';

