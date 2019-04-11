<?php
/**
 * Created by PhpStorm.
 * User: lotus
 * Date: 3/26/19
 * Time: 11:39 AM
 */

// //------------CONNECT MySQL HOME------------
// define('DB_USER', 'phpmyadmin');
// define('DB_PASS', '12122');
// define('DB_NAME', 'user3');
// define('DB_HOST', 'localhost');
// define('DB_PORT', '3306');
// //------------CONNECT PG HOME---------------
// define('PG_USER', 'user3');
// define('PG_PASS', '12122');
// define('PG_NAME', 'user3');
// define('PG_HOST', 'localhost');
// define('PG_PORT', '5432');

//------------CONNECT MySQL CLASS---------------
define('DB_USER', 'user3');
define('DB_PASS', 'user3');
define('DB_NAME', 'user3');
define('DB_HOST', 'localhost');
//------------CONNECT PG CLASS---------------
define('PG_USER', 'user3');
define('PG_PASS', 'user3');
define('PG_NAME', 'user3');
define('PG_HOST', 'localhost');


//--------------CHOOSE DB TO USE--------
//define('DB', 'pgsql');
define('DB', 'mysql');

//----------ERROR CONNECT DB--------------
define("ERROR_MYSQL", "DB Error, could not query the database\n MySQL Error: ");
define("ERROR_PG", "DB Error, could not query the database PG");

define("ITEM_INS", "Created!");
define("ERROR_INS", "Error while insertion!");
define("ITEM_REM", "Removed!");
define("ERROR_REM", "Error while removing!");
define("ITEM_UPD", "Updated!");
define("ERROR_UPD", "Error while updating!");
define("ERROR_FLD", "Error can't set field to * or num!");
define('ERROR_SEL', 'No such records!');
define('ERROR_JOIN', 'No such join type!');





