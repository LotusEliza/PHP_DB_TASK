<?php
/**
 * Created by PhpStorm.
 * User: lotus
 * Date: 4/7/19
 * Time: 5:08 PM
 */

class DB
{
    protected static $instance;
    protected function __construct() {}
    public static function getInstance() {
        if(empty(self::$instance)) {
            try {
                $mysql = "mysql"; //change DB type in config file
                $pgsql = "pgsql";
                if(DB == $mysql){
                    self::$instance = new PDO("mysql:host=".DB_HOST.';port='.DB_PORT.';dbname='.DB_NAME, DB_USER, DB_PASS);
                }elseif(DB == $pgsql){
                    self::$instance = new PDO("pgsql:host=".PG_HOST.';port='.PG_PORT.';dbname='.PG_NAME, PG_USER, PG_PASS);
                }
                self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_SILENT);
                self::$instance->query('SET NAMES utf8');
                self::$instance->query('SET CHARACTER SET utf8');
            } catch(PDOException $error) {
                echo $error->getMessage();
            }
        }
        return self::$instance;
    }
}