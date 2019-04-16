<?php
/**
 * Created by PhpStorm.
 * User: lotus
 * Date: 4/12/19
 * Time: 12:01 PM
 */

 class PG{

     public $link;
     public $id;
     public $length = 250;
     public $total_rows = 900000; //change total rows when testing 5,10...



     function __construct()
     {
        $this->link = pg_connect("host=localhost port=5432 dbname=user3 user=user3 password=user3")
        or die('connection failed');
     }


     public function insert_test(){

         for($i = 1; $i <= $this->total_rows; $i++){
             $name = $this->random_string($this->length);
             $desc = $name.$name.$name;
             $values = "($i,'".$name."', '".$desc."')";
             $query = "INSERT INTO task2 (id, name, description) VALUES ";
             $insert_query = $query . $values;
             pg_query($this->link, $insert_query);
         }
     }

     public function random_string($length) {
         $chars = "0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyzdssdfgdsghegh";
         $name = substr( str_shuffle( $chars ), 0, $length );
         return $name;
     }

 }
