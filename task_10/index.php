<?php
// Task10: Расширить свой Sql класс, что бы он смог работать c Distinct, Join, Group, Having, Order, Limit
// Join::
// join(): добавляет к запросу INNER JOIN.
// leftJoin(): добавляет к запросу LEFT OUTER JOIN.
// rightJoin(): добавляет к запросу RIGHT OUTER JOIN.
// crossJoin(): добавляет к запросу CROSS JOIN.
// naturalJoin(): добавляет к запросу NATURAL JOIN.
// Практика - сделать класс для MySQL/PostgreSQL на PDO c применением “Текучего Интерфейса”
// (должно быть использование prepare, execute, bindParam для безопасного выполнения SQL)

include 'config.php';
include 'autoload.php';


$objPdo = new PdoCl();
$objPdo->__set_table('orders');
//$objPdo->__set_table2('customers');


$objPdo->__set_field('`customerID`');
$objPdo->__set_field('`description`');
$objPdo->__set_field2('`customerName`');
$objPdo->__set_onfield('`customerID`');
$objPdo->__set_onfield2('`customerID`');

$objPdo->__set_join('cross');
$objPdo->__set_group('`orderID`');
$objPdo->__set_order('`description`');

$objPdo->__set_value('3');
$objPdo->__set_value('ball');
$objPdo->__set_where_f('`customerID`');
$objPdo->__set_where_v(4);
$objPdo->__set_having('`customerID` = 3');



//$result = $objPdo->f_select()->f_from()->f_join()->exec_select();
//$result = $objPdo->f_select()->f_from()->having()->exec_select();
//$result = $objPdo->f_select()->f_from()->group_by()->exec_select();
//$result = $objPdo->f_select()->f_from()->order_by()->exec_select();
//$result = $objPdo->f_update()->f_where()->exec_update();
$result = $objPdo->f_delete()->f_where()->exec_delete();
//$result = $objPdo->f_insert()->exec_insert();

var_dump($result);

include 'templates/index.php';



























//$objPdo->__set_field('`city`');
//$objPdo->__set_value('Liza');
//$objPdo->__set_value('29');
//$objPdo->__set_value('Niko');
//$objPdo->__set_where('`city` = \'Niko\'');
// $objPdo->__set_where('age = 29');
// $objPdo->__set_where('city = Niko');


//$result = $objPdo->f_select()->f_from()->f_where()->exec();


// $result = $objPdo->f_select()->f_from()->f_where()->exec();
// $result = $objPdo->f_select()->f_from()->f_where();






//$objPdo = new PdoCl();
//$objPdo->__set_table('user3');
//
//// $first = new Mysql();
//$objPdo->__set_field('`name`');
//$objPdo->__set_field('`age`');
//$objPdo->__set_field('`city`');
//
//$objPdo->__set_value('Liza');
//$objPdo->__set_value('29');
//$objPdo->__set_value('Niko');
//
//$objPdo->__set_where('`city` = \'Niko\'');

