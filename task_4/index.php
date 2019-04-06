<?php

include 'config.php';
include 'libs/SQL.php';
include 'libs/Mysql.php';
include 'libs/Postgresql.php';

//$first = new SQL();

//$first = new Mysql();
$first = new Postgresql();

$first->__set_field('`name`');
$first->__set_field('`age`');
$first->__set_field('`city`');

$first->__set_value('\'Met\'');
$first->__set_value('\'29\'');
$first->__set_value('\'Niko\'');

$first->__set_where('`name` = \'liza\'');
//$first->__set_where('age = 29');
//$first->__set_where('city = Niko');

//$first->__set_table('test_table');
$first->__set_table('user3');
//$mysql1 = $first->f_insert();
$mysql2 = $first->f_select();
//$mysql3 = $first->f_update();
//$mysql4 = $first->f_delete();

var_dump($mysql2);




include 'templates/index.php';
