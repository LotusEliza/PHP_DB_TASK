<?php

include 'config.php';
include 'autoload.php';


function insert(iData $obj){
    return $obj->f_insert();
}

function select(iData $obj){
    return $obj->f_select();
}

function update(iData $obj){
    return $obj->f_update();
}

function delete(iData $obj){
    return $obj->f_delete();
}

$objMysql = new Mysql();
$objMysql->set_table('user3');
$objMysql->set_limit("2");

$objMysql->set_field('name');
$objMysql->set_field('age');
$objMysql->set_field('city');

$objMysql->set_value('\'Suzy\'');
$objMysql->set_value('\'15\'');
$objMysql->set_value('\'Niko\'');

$objMysql->set_where('name = \'Suzy\'');
$objMysql->set_where('age = 15');

//--------------MySQL RESULTS-----------------
$my_insert = insert($objMysql);
$my_select = select($objMysql);
$my_update = update($objMysql);
$my_delete = delete($objMysql);

//$my_insert = $objMysql->f_insert();
//$my_select = $objMysql->f_select();
//$my_update = $objMysql->f_update();
//$my_delete = $objMysql->f_delete();

$objPostgr = new Postgresql();
$objPostgr->set_table('user3');
$objPostgr->set_limit("2");

$objPostgr->set_field('name');
$objPostgr->set_field('age');
$objPostgr->set_field('city');

$objPostgr->set_value('\'Suzy\'');
$objPostgr->set_value('\'15\'');
$objPostgr->set_value('\'Niko\'');

$objPostgr->set_where('name = \'Suzy\'');
$objPostgr->set_where('age = 15');

//--------------PG RESULTS-----------------
$pg_insert = insert($objPostgr);
$pg_select = select($objPostgr);
$pg_update = update($objPostgr);
$pg_delete = delete($objPostgr);

//$pg_insert = $objPostgr->f_insert();
//$pg_select = $objPostgr->f_select();
//$pg_update = $objPostgr->f_update();
//$pg_delete = $objPostgr->f_delete();


include 'templates/index.php';
