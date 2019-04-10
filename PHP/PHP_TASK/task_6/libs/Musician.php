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
    protected $band_name;

    public function addInstrument(iInstrument $obj){
        $this->instrument = $obj->getName();
        $this->musician_type = $obj->getCategory();
    }

    public function getInstrument(){
        return $this->instrument;
    }

    public function assingToBand(iBand $band){
        $this->band_name = $band->getName();
    }

    public function getMusicianType(){
        return $this->musician_type;
    }

}