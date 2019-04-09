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
$objPdo->__set_table2('customers');

$objPdo->__set_field('customerID');
$objPdo->__set_field('description');
$objPdo->__set_value('3');
$objPdo->__set_value('ball');

//_________CHOOSE THE JOIN TYPE ____________________________________________
$objPdo->__set_join('left');//(inner, right, left, natural, cross)

$objPdo->__set_onfield('customerID');//...ON field
$objPdo->__set_onfield2('customerID');
$objPdo->__set_field2('customerName');

//______________GROUP BY, ORDER BY, HAVING clauses__________________________
$objPdo->__set_group('customerID, description');
$objPdo->__set_order('description');
$objPdo->__set_having('customerID = 1');

//______________WHERE clause__________________________
$objPdo->__set_where_f('customerID');
$objPdo->__set_where_v(3);


//_______________UNCOMMENT THE QUERY THAT YOU NEED TO EXECUTE_____________________
//$res_ins = $objPdo->f_insert()->exec_insert();
//$res_join = $objPdo->f_select2()->f_from()->f_join()->exec_select();
//$res_hav = $objPdo->f_select()->f_from()->group_by()->having()->exec_select();
//$res_order = $objPdo->f_select()->f_from()->order_by()->exec_select();
//$res_upd = $objPdo->f_update()->f_where()->exec_update();
//$res_del = $objPdo->f_delete()->f_where()->exec_delete();

$tabl_join = Helper::createTable($res_join);
$tabl_hav = Helper::createTable($res_hav);
$tabl_ord = Helper::createTable($res_order);


include 'templates/index.php';