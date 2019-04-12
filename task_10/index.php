<?php

include 'config.php';
include 'autoload.php';


$objPdo = new PdoCl();

$objPdo->set_table('orders');
$objPdo->set_table2('customers');

$objPdo->set_field('customerID');
$objPdo->set_field('description');
$objPdo->set_value('2');
$objPdo->set_value('cat');

$objPdo->set_upvalue('3');// UPDATE field
$objPdo->set_upvalue('dog');

//_________CHOOSE THE JOIN TYPE ____________________________________________
$objPdo->set_join('right_outer');//(inner, right_outer, left_outer, natural, cross)

$objPdo->set_onfield('customerID');//...ON field
$objPdo->set_onfield2('customerID');
$objPdo->set_field2('customerName');

//______________GROUP BY, ORDER BY, HAVING clauses__________________________
$objPdo->set_group('customerID, description');
$objPdo->set_order('description');
$objPdo->set_having('customerID = 1');

//______________WHERE clause__________________________
$objPdo->set_where_f('customerID');
$objPdo->set_where_v(2);


$res_ins = $objPdo->f_insert()->exec_insert();
$res_join = $objPdo->f_select2()->f_from()->f_join()->exec_select();
$res_hav = $objPdo->f_select()->f_from()->group_by()->having()->exec_select();
$res_order = $objPdo->f_select()->f_from()->order_by()->exec_select();
$res_upd = $objPdo->f_update()->f_where()->exec_update();
$res_del = $objPdo->f_delete()->f_where()->exec_delete();

$tabl_join = Helper::createTable($res_join);
$tabl_hav = Helper::createTable($res_hav);
$tabl_ord = Helper::createTable($res_order);

include 'templates/index.php';