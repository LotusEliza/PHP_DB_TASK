<?php

require_once('DB.php');


class PdoCl extends Sql{

protected $db;

    public function __construct()
    {
        try {
            $this->db = DB::getInstance();
            DB::setCharsetEncoding();
        } catch (Exception $e) {
            print $e->getMessage();
        }
    }

    public function exec_select(){
        $stm = $this->db->prepare($this->query);
        $stm->execute();
        $result = $stm->fetchAll(PDO::FETCH_ASSOC);
        if (!$result){
            return ERROR_SEL;
        }else{
            return $result;
        }
    }

    public function exec_insert(){
        $stm = $this->db->prepare($this->query);
        foreach ($this->values as $key => &$value){
            $stm->bindParam(':'.$key, $value, PDO::PARAM_STR);
        }
        $stm->execute();
        $count = $stm->rowCount();

        if($count){
            return ITEM_INS;
        }else{
            return ERROR_INS;
        }
    }

    public function exec_update(){
        $stm = $this->db->prepare($this->query);
        foreach ($this->values as $key => &$value){
            $stm->bindParam(':'.$key, $value, PDO::PARAM_STR);
        }
        $stm->execute();
        $count = $stm->rowCount();

        if($count){
            return ITEM_UPD;
        }else{
            return ERROR_UPD;
        }
    }

    public function exec_delete(){
        $stm = $this->db->prepare($this->query);
        foreach ($this->where_v as $key => &$value){
            $stm->bindParam(':'.$key, $value, PDO::PARAM_STR);
        }
        $stm->execute();
        $count = $stm->rowCount();

        if($count){
            return ITEM_REM;
        }else{
            return ERROR_REM;
        }
    }







//    public function f_where(){
//        $keys = $this->prep_bind($this->where);
//        var_dump($keys);
//        $where_str = implode(" AND ", $this->where);
//        $this->query .= " WHERE $where_str";
//        return $this;
//    }




//    public function exec(){
//
//        $stm = $this->db->prepare($this->query);
//        $stm->execute();
////        if (strpos($this->query, 'SELECT') !== false){
////            $result = $stm->fetchAll(PDO::FETCH_ASSOC);
////            if (!$result){
////                return ERROR_SEL;
////            }else{
////                return $result;
////            }
//        }elseif (strpos($this->query, 'UPDATE') !== false){
////            $sql = "UPDATE movies SET filmName = :filmName,
////            filmDescription = :filmDescription,
////            filmImage = :filmImage,
////            filmPrice = :filmPrice,
////            filmReview = :filmReview
////            WHERE filmID = :filmID";
////            $stmt = $pdo->prepare($sql);
////            $stmt->bindParam(':filmName', $_POST['filmName'], PDO::PARAM_STR);
////            $stmt->bindParam(':filmDescription', $_POST['$filmDescription'], PDO::PARAM_STR);
////            $stmt->bindParam(':filmImage', $_POST['filmImage'], PDO::PARAM_STR);
////// use PARAM_STR although a number
////            $stmt->bindParam(':filmPrice', $_POST['filmPrice'], PDO::PARAM_STR);
////            $stmt->bindParam(':filmReview', $_POST['filmReview'], PDO::PARAM_STR);
////            $stmt->bindParam(':filmID', $_POST['filmID'], PDO::PARAM_INT);
////            $stmt->execute();
//
//        }elseif (strpos($this->query, 'INSERT') !== false){
////            $sql = "INSERT INTO movies(filmName,
////            filmDescription,
////            filmImage,
////            filmPrice,
////            filmReview) VALUES (
////            :filmName,
////            :filmDescription,
////            :filmImage,
////            :filmPrice,
////            :filmReview)";
////
////            $stmt = $pdo->prepare($sql);
////
////            $stmt->bindParam(':filmName', $_POST['filmName'], PDO::PARAM_STR);
////            $stmt->bindParam(':filmDescription', $_POST['filmDescription'], PDO::PARAM_STR);
////            $stmt->bindParam(':filmImage', $_POST['filmImage'], PDO::PARAM_STR);
////// use PARAM_STR although a number
////            $stmt->bindParam(':filmPrice', $_POST['filmPrice'], PDO::PARAM_STR);
////            $stmt->bindParam(':filmReview', $_POST['filmReview'], PDO::PARAM_STR);
////
////            $stmt->execute();
//        }elseif (strpos($this->query, 'DELETE') !== false){
////            $sql = "DELETE FROM movies WHERE filmID =  :filmID";
////            $stmt = $pdo->prepare($sql);
////            $stmt->bindParam(':filmID', $_POST['filmID'], PDO::PARAM_INT);
////            $stmt->execute();
//        }else{
//            return NULL;
//        }
//    }


//    public function __construct(){
//        $this->dbh = new PDO('mysql:host=localhost;dbname=user3', DB_USER, DB_PASS);
//    }
//
//    public function exec(){
//        var_dump($this->query);
//        $stmt = $this->dbh->query($this->query);
//        while ($row = $stmt->fetch()) {
//            echo $row['name']."<br />\n";
//        }
//    }

}

//public function f_update(){
////    $update=[];
////    foreach (array_combine($this->fields, $this->values) as $field => $value) {
////        array_push($update,"$field=$value");
////    }
////    $values_str = $this->prep_bind($update);
//////        $str = $this->implode_dot($update);
////    $this->query .= "UPDATE $this->table SET $values_str";
////    var_dump($this->query);
////    return $this;
//}
//
//public function f_insert(){
//    $fields_str = $this->implode_dot($this->fields);
//    $values_str = $this->prep_bind($this->values);
//
//    $this->query .= "INSERT INTO $this->table ($fields_str) VALUES ($values_str)";
//    return $this;
//}

//public function prep_bind(){
//    $keys = array_keys($this->values);
//    foreach ($keys as &$value) {
//        $value = ':'.$value;
//    }
//    return $values_str = $this->implode_dot($keys);
//}