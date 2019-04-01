<?php
/**
 * Created by PhpStorm.
 * User: lotus
 * Date: 3/31/19
 * Time: 7:12 PM
 */

class Mysql extends SQL
{

    protected $conn;

    public function __construct()
    {
//        parent::__construct();
        $conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        $this->conn = $conn;
    }

    public function f_select(){
        parent::f_select();
        $query = $this->query;

        $result = $this->conn->query($query);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "name: " . $row["name"]. " - Age: " . $row["age"]. " - City: " .  $row["city"]. "<br>";
            }
        } else {
            echo "0 results";
        }

//        $this->conn->close();
//        mysql_connect('localhost','phpmyadmin', '12122') or die("Could not connect to Mysql server!");
//        mysql_select_db('test') or die("Could not select database!");
//        $result = mysql_query($query);
//        mysql_close();
    }

    public function f_update(){


    }

    public function f_insert(){

    }



    public function f_delete(){

    }

}