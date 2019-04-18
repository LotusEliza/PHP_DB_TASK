<?php

include 'config.php';
include 'autoload.php';


$objPdo = new PdoCl();

$objPdo->setTable('orders');
$objPdo->setTable2('customers');

$objPdo->setField('customerID');
$objPdo->setField('description');
$objPdo->setValue('2');
$objPdo->setValue('cat');

$objPdo->setUpValue('3');// UPDATE field
$objPdo->setUpValue('dog');

//_________CHOOSE THE JOIN TYPE ____________________________________________
$objPdo->setJoin('rightOuter');//(inner, rightOuter, leftOuter, natural, cross)

$objPdo->setOnField('customerID');//...ON field
$objPdo->setOnField2('customerID');
$objPdo->setField2('customerName');

//______________GROUP BY, ORDER BY, HAVING clauses__________________________
$objPdo->setGroup('customerID, description');
$objPdo->setOrder('description');
$objPdo->setHaving('customerID = 1');

//______________WHERE clause__________________________
$objPdo->setWhereF('customerID');
$objPdo->setWhereV(2);


$resIns = $objPdo->f_insert()->execInsert();
$resJoin = $objPdo->f_select2()->f_from()->f_join()->execSelect();
$resHav = $objPdo->f_select()->f_from()->groupBy()->having()->execSelect();
$resOrder = $objPdo->f_select()->f_from()->orderBy()->execSelect();
$resUpd = $objPdo->f_update()->f_where()->execUpdate();
$resDel = $objPdo->f_delete()->f_where()->execDelete();

$tablJoin = Helper::createTable($resJoin);
$tablHav = Helper::createTable($resHav);
$tablOrd = Helper::createTable($resOrder);

include 'templates/index.php';