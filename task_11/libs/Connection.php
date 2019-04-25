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
                self::$instance = new PDO("mysql:host=".DB_HOST.';port='.DB_PORT.';dbname='.DB_NAME, DB_USER, DB_PASS);

        } catch (PDOException $e) {
            echo "Connection Error: " . $e->getMessage();
        }
    }

    public static function getInstance() {
        if (!self::$instance) {
            new Connection();
        }
        return self::$instance;
    }
}