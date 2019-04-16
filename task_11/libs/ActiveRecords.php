<?php
/**
 * Created by PhpStorm.
 * User: lotus
 * Date: 4/15/19
 * Time: 2:59 PM
 */

class ActiveRecords
{

    private $id;
    private $title;
    private $price;
    private $description;


    public static function newEmptyInstance() {
        return new self();
    }

    private function __construct() {
    }

    public function getId() {
        return $this->id;
    }

    public function setTitle($aTitle) {
        $this->title = $aTitle;
    }

    public function getTitle() {
        return $this->title;
    }

    public function setPrice($aPrice) {
        $this->price = $aPrice;
    }

    public function getPrice() {
        return $this->price;
    }

    public function setDescription($aDescription) {
        $this->description = $aDescription;
    }

    public function getDescription() {
        return $this->description;
    }

    public function save() {
        if (isset($this->id)) {
            return $this->_update();
        } else {
            return $this->_insert();
        }
    }

    private function _update() {
        $con = Connection::getInstance();
        $query = "UPDATE `products` SET `title`='{$this->title}', " . "`price`='{$this->price}',".
            "`description`='{$this->description}' WHERE `id`={$this->id}";
        $result = $con->exec($query);
        if($result){
            return ITEM_UPD;
        }else{
            return ERROR_UPD;
        }
        
    }

    private function _insert() {
        $con = Connection::getInstance();
        $query = "INSERT INTO `products` (`title`, `price`, `description`)"
            . " VALUES ('{$this->title}', '{$this->price}', '{$this->description}')";
        $result = $con->exec($query);
        $new_id = $con->lastInsertId();
        $this->id = $new_id;
        if($result){
            return ITEM_INS;
        }else{
            return ERROR_INS;
        }
    }

    public static function _delete($aId) {
        $lId = (int) $aId;
        if ($lId < 0 || $lId > PHP_INT_MAX) {
            return false;
        }
        $con = Connection::getInstance();
        $query = "DELETE FROM `products` WHERE `id`=" . $lId;
        $result = $con->exec($query);
        if($result){
            return ITEM_REM;
        }else{
            return ERROR_REM;
        }
    }



    public static function find($aCount, $aOptFrom = null) {
        $lFrom = is_null($aOptFrom) ? '' : (int) $aOptFrom . ', ';
        $query = "SELECT * FROM `products` LIMIT {$lFrom}{$aCount}";
        $con = Connection::getInstance();
        $stm = $con->prepare($query);
        $stm->execute();
        $result = $stm->fetchAll(PDO::FETCH_ASSOC);

        if (!$result){
            return ERROR_SEL;
        }else{
            return $result;
        }
    }

    public static function newInstance($aId) {
        $lId = (int) $aId;
        if ($lId < 0 || $lId > PHP_INT_MAX) {
            return false;
        }
        $query = "SELECT * FROM `products` WHERE `id`=" . $lId . " LIMIT 1";
        $con = Connection::getInstance();
        $stm = $con->prepare($query);
        $stm->execute();
        $result = $stm->fetchAll(PDO::FETCH_ASSOC);

        if ($result !== false) {
            foreach ($result as $item)
            $product = new self();
            $product->id = $item['id'];
            $product->title = $item['title'];
            $product->price = $item['price'];
            $product->description = $item['description'];
            return $product;
        } else {
            return false;
        }
    }

}