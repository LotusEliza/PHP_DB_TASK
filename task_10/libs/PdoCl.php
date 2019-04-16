<?php


class PdoCl extends Sql{

protected $con;

    public function __construct()
    {
        $this->con = Connection::getInstance();
    }

    public function exec_select(){
        $stm = $this->con->prepare($this->query);
        var_dump($this->query);
        $stm->execute();
        $result = $stm->fetchAll(PDO::FETCH_ASSOC);
        $this->query = NULL;

        if (!$result){
            return ERROR_SEL;
        }else{
            return $result;
        }
    }

    public function exec_insert(){
        $stm = $this->con->prepare($this->query);
        var_dump($this->query);
        foreach ($this->values as $key => &$value){
            $stm->bindParam(':'.$key, $value, PDO::PARAM_STR);
        }
        $stm->execute();
        $this->query = NULL;
        $count = $stm->rowCount();

        if($count){
            return ITEM_INS;
        }else{
            return ERROR_INS;
        }
    }

    public function exec_update(){
        $stm = $this->con->prepare($this->query);
        var_dump($this->query);
        foreach ($this->upvalues as $key => &$value){
            $stm->bindParam(':'.$key, $value, PDO::PARAM_STR);
        }
        foreach ($this->where_v as $key => &$value){
            $stm->bindParam(':'.$key, $value, PDO::PARAM_STR);
        }
        $stm->execute();
        $this->query = NULL;
        $count = $stm->rowCount();

        if($count){
            return ITEM_UPD;
        }else{
            return ERROR_UPD;
        }
    }

    public function exec_delete(){
        $stm = $this->con->prepare($this->query);
        var_dump($this->query);
        foreach ($this->where_v as $key => &$value){
            $stm->bindParam(':'.$key, $value, PDO::PARAM_STR);
        }
        $stm->execute();
        $this->query = NULL;
        $count = $stm->rowCount();

        if($count){
            return ITEM_REM;
        }else{
            return ERROR_REM;
        }
    }

    public function __destruct()
    {
        try {
            $this->con = null;
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
}