<?php
/**
 * Created by PhpStorm.
 * User: lotus
 * Date: 4/1/19
 * Time: 11:21 AM
 */
include 'iMusician.php';

class Musician implements iMusician
{
    protected $instrument;
    protected $musician_type;

    public function addInstrument(iInstrument $obj){
        $this->instrument = $obj->getName();
    }

    public function getInstrument(){
        return $this->instrument;
    }

    public function assingToBand(iBand $nameBand){
        $nameBand->addMusician($this);
        var_dump($this);
    }

    public function getMusicianType(){

    }

}