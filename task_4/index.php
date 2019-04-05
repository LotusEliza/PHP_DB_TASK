<?php

include 'config.php';
include 'SQL.php';
include 'Mysql.php';

//$first = new SQL();


//
$first = new Mysql();
$first->__set_field('`name`');
$first->__set_field('`age`');
$first->__set_field('`city`');

$first->__set_value('\'Met\'');
$first->__set_value('\'29\'');
$first->__set_value('\'Niko\'');

$first->__set_where('`name` = \'liza\'');
//$first->__set_where('age = 29');
//$first->__set_where('city = Niko');

$first->__set_table('test_table');
$mysql1 = $first->f_insert();
$mysql2 = $first->f_select();
$mysql3 = $first->f_update();
$mysql4 = $first->f_delete();

include 'templates/index.php';
