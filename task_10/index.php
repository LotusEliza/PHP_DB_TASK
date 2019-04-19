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


$resIns = $objPdo->insert()->execInsert();
$resJoin = $objPdo->select2()->from()->join()->execSelect();
$resHav = $objPdo->select()->from()->groupBy()->having()->execSelect();
$resOrder = $objPdo->select()->from()->orderBy()->execSelect();
$resUpd = $objPdo->update()->where()->execUpdate();
$resDel = $objPdo->delete()->where()->execDelete();

$tablJoin = Helper::createTable($resJoin);
$tablHav = Helper::createTable($resHav);
$tablOrd = Helper::createTable($resOrder);

include 'templates/index.php';