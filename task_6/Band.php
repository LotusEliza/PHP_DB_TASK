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

    public function getName(){

    }

    public function getGenre(){

    }

    public function addMusician(iMusician $obj){

        $this->musicians[] = $obj;
//        array_push($this->musicians[], "$obj");
        var_dump($this->musicians);
    }

    public function getMusician(){

    }

}