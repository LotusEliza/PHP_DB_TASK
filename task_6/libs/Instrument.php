<?php
/**
 * Created by PhpStorm.
 * User: lotus
 * Date: 4/1/19
 * Time: 11:20 AM
 */

include 'iInstrument.php';

class Instrument implements iInstrument
{
    protected $name;
    protected $category;

    public function setName($name){
        $this->name = $name;
    }

    public function setCategory($category){
        $this->category = $category;
    }

    public function getName(){
        return $this->name;
    }

    public function getCategory(){
        return $this->category;
    }
}