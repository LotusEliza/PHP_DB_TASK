<?php
/**
 * Created by PhpStorm.
 * User: lotus
 * Date: 4/1/19
 * Time: 11:22 AM
 */
include 'iBand.php';

class Band implements iBand
{
    protected $name;
    protected $genre;
    protected $musicians=[];

    public function setName($name){
        $this->name = $name;
    }

    public function setGenre($genre){
        $this->genre = $genre;
    }

    public function getName(){
        return $this->name;
    }

    public function getGenre(){
        return $this->genre;
    }

    public function addMusician(iMusician $obj){
        $this->musicians[] = $obj;

//        $instrument = $obj->getInstrument();
//        $type = $obj->getMusicianType();
//        $musician=array("instrument" => "$instrument", "musician_type" => "$type");
//        var_dump($musician);
    }

    public function getMusician(){
        $array = $this->musicians;
        return $array;
    }

}