<?php
/**
 * Created by PhpStorm.
 * User: lotus
 * Date: 4/1/19
 * Time: 11:18 AM
 */

interface iMusician
{
    public function addInstrument(iInstrument $obj);
    public function getInstrument();
    public function assingToBand(iBand $nameBand);
    public function getMusicianType();
}