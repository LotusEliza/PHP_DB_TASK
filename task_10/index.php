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


include 'Sql.php';
include 'Pdo.php';
include 'config.php';

$objPdo = new PdoCl();


// $first = new Mysql();
$objPdo->__set_field('`name`');
$objPdo->__set_field('`age`');
$objPdo->__set_field('`city`');

$objPdo->__set_value('liza');
$objPdo->__set_value('29');
$objPdo->__set_value('Niko');

$objPdo->__set_where('`name` = \'liza\'');
// $objPdo->__set_innerjoin();
// $objPdo->__set_where('age = 29');
// $objPdo->__set_where('city = Niko');


$objPdo->__set_table('test_table');

$result = $objPdo->f_select()->f_from()->f_where()->exec();
// var_dump($result);
// $result = $objPdo->f_select()->f_from()->f_where()->exec();

// $result = $objPdo->f_select()->f_from()->f_where();





include 'templates/index.php';
