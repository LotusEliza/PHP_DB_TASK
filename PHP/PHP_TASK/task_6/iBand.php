<?php
/**
 * Created by PhpStorm.
 * User: lotus
 * Date: 4/1/19
 * Time: 11:18 AM
 */

interface iBand
{
    public function getName();
    public function getGenre();
    public function addMusician(iMusician $obj);
    public function getMusician();
}