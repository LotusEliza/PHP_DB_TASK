<?php

include 'config.php';
include 'SQL.php';
include 'Mysql.php';

//$first = new SQL();
$first = new Mysql();
$first->__set_field('`name`');
$first->__set_field('`age`');
$first->__set_field('`city`');

$first->__set_value('liza');
$first->__set_value('29');
$first->__set_value('Niko');

$first->__set_where('`name` = \'liza\'');
//$first->__set_where('age = 29');
//$first->__set_where('city = Niko');

$first->__set_table('test_table');
$first->f_select();


include 'templates/index.php';
