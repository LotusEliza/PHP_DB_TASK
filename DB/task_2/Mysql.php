<?php

 class Mysql{

     public $link;
     public $id;
     public $length = 250;
     public $total_rows = 300; //change total rows when testing 5,10...


     public function __construct(){
        $this->link = mysql_connect(DB_HOST, DB_USER, DB_PASS)
        or die("Could not connect: " . mysql_error());
        mysql_select_db(DB_NAME) or die(mysql_error());
    }

    public function insert_test(){

      $query = "INSERT INTO task2 (id, name, description) VALUES ";
      $this->check_session();

      for($i = $this->id; $i <= $this->total_rows;$i++){
          $name = $this->random_string($this->length);
          $desc = $name.$name.$name;
          $values = "(LAST_INSERT_ID($i),'$name', '$desc')";
          $insert_query = $query . $values;
          $result = mysql_query($insert_query, $this->link);

          if (!$result){
            return ERROR_MYSQL . mysql_error();
        }
          $this->id = $this->last_id();
          $_SESSION["last_id"] = $this->last_id();
      }
//        unset($_SESSION['last_id']);// uncomment when need to test
    }

    public  function check_session(){
        if(!$_SESSION["last_id"]){
            $this->id = 1;
        }else{
            $this->id = $_SESSION["last_id"]+1;
        }
    }

    public function random_string($length) {
        $chars = "Loremipsumdolorsitamet,consecteturadipiscingelit,
                  seddoeiusmodtemporincididuntutlaboreetdoloremagnaaliqua.
                  Utenimadminimveniam,quisnostrudexercitationullamcolaborisn
                  isiutaliquipexeacommodoconsequat.Duisauteiruredolorinrepreh
                  enderitinvodolorinreprehenda";
        $name = substr( str_shuffle( $chars ), 0, $length );
        return $name;
     }

      public function last_id(){
      return $last_id = mysql_insert_id();
      }
    }
