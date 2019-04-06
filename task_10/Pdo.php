<?php

class PdoCl extends Sql{

protected $dbh;

    public function __construct(){
        $this->dbh = new PDO('mysql:host=localhost;dbname=user3', DB_USER, DB_PASS);
    }

    public function exec(){
        var_dump($this->query);
        $stmt = $this->dbh->query($this->query);
        while ($row = $stmt->fetch()) {
            echo $row['name']."<br />\n";
        }
    }

}