<?php

 class Test{

  public $link;

  function __construct()
    {
        $this->link = mysql_connect(DB_HOST, DB_USER, DB_PASS)
        or die("Could not connect: " . mysql_error());
        mysql_select_db(DB_NAME) or die(mysql_error());
    }

    public function insert_test(){
      $total_rows = 900000;
      $query = "INSERT INTO task2 (id, name, description) VALUES ";
      $values = '';
      $name = '';
      $desc = '';
      $length = 250;
      $insert_limit = 10; 

      for($i = 1; $i <= $total_rows; $i++){
        // Create string with random characters
        $name = $this->random_password($length);
        $desc = $name.$name.$name;
        $values = "('$i','$name', '$desc')";
          $insert_query = $query . $values;
          $result = mysql_query($insert_query, $this->link);
          if (!$result){
            return ERROR_MYSQL . mysql_error();

        }
      }
    }

      public function random_password($length) {
        $chars = "Loremipsumdolorsitamet,consecteturadipiscingelit,
                  seddoeiusmodtemporincididuntutlaboreetdoloremagnaaliqua.
                  Utenimadminimveniam,quisnostrudexercitationullamcolaborisn
                  isiutaliquipexeacommodoconsequat.Duisauteiruredolorinrepreh
                  enderitinvodolorinreprehenda";
        $name = substr( str_shuffle( $chars ), 0, $length );
        return $name;
      }
    }
    



      // for($i = 1; $i <= $total_rows; $i++){
      //   // Create string with random characters
      //   $name = $this->random_password($length);
      //   $desc = $name.$name.$name;
      //   $values .= "('$i',$name', '$desc'),";
        
      //   if($i % $insert_limit == 0) {
      //     $values = substr($values, 0, strlen($values) - 1);
      //     $insert_query = $query . $values;
      //     // $this->db->query($insert_query);
      //     $values = '';  
      //   }
      // }

      // $values = substr($values, 0, strlen($values) - 1);
      // $this->link->query($query);
  

    // public function bulk(){
    //   for($i = 1; $i <= $total_rows; $i++){
    //     $name = $this->random_password($length);
    //     $desc = $name.$name.$name;
    //     echo $values .= "( '$id', '$name', '$desc'),";
    //   }  
    // }

  



    // for($i = 1; $i <= $total_rows; $i++){
    //   // Create string with random characters
    //   $coupon_code = echo chr(rand(65,90)) . chr(rand(65,90)) . chr(rand(65,90)) . chr(rand(65,90)) . chr(rand(65,90)); 
    //   $values .= "('$batch_id', '$coupon_code'),";
      
    //   if($i % $insert_limit == 0) {
    //     $values = substr($values, 0, strlen($values) - 1);
    //     $insert_query = $query . $values;
    //     $this->db->query($insert_query);
    //     $values = '';  
    //   }
    // }
    // $values = substr($values, 0, strlen($values) - 1);
    // $this->db->query($query);



//  for($i = 1; $i <= $total_rows; $i++){
   
//    // $values = substr($values, 0, strlen($values) - 1);
//    $this->db->query($query);
//  }  















  //     $insert_query = $query . $values;
  //     $this->db->query($insert_query);
  //     $values = '';  
  //   }
  // }

 

//   INSERT INTO example
// VALUES
//   (100, 'Name 1', 'Value 1', 'Other 1'),
//   (101, 'Name 2', 'Value 2', 'Other 2'),
//   (102, 'Name 3', 'Value 3', 'Other 3'),
//   (103, 'Name 4', 'Value 4', 'Other 4');

// <?php
// $conn = mysql_connect(...);
// $num = 100000;

// $sql = 'INSERT INTO `table` (`col1`, `col2`, ...) VALUES ';
// for ($i = 0; $i < $num; $i++) {
//   mysql_query($sql . generate_test_values($i));
// }

// <!-- // $i=0;
// // $query="insert into test_table('name','country','age')  values('name$i','country$i',rand ( 19,88))";
// // for($i=1;$i<20000;$i++){
// //     $query.=",(('name$i','country$i',rand ( 19,88)))";
// // }
// // mysql_query($query,$con);
