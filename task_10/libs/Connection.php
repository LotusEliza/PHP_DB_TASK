<?php
/**
 * Created by PhpStorm.
 * User: lotus
 * Date: 4/7/19
 * Time: 5:08 PM
 */

class Connection {

    protected static $instance;

    private function __construct() {
        try {
            $mysql = "mysql"; //change DB type in config file
            $pgsql = "pgsql";
            if(DB == $mysql){
                self::$instance = new PDO("mysql:host=".DB_HOST.';port='.DB_PORT.';dbname='.DB_NAME, DB_USER, DB_PASS);
            }elseif(DB == $pgsql){
                self::$instance = new PDO("pgsql:host=".PG_HOST.';port='.PG_PORT.';dbname='.PG_NAME, PG_USER, PG_PASS);
            }

        } catch (PDOException $e) {
            echo "MySql Connection Error: " . $e->getMessage();
        }
    }

    public static function getInstance() {
        if (!self::$instance) {
            new Connection();
        }

        return self::$instance;
    }

}