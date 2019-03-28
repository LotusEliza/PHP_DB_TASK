<?php

class Calc{

private $a;
private $b;

 function __construct($a, $b)
 {
    $this->a= $a;
    $this->b = $b;
 }

function add(){
  echo "Summation = ". ($this->a+$this->b)."<br>";
 }

 function sub(){
  echo "Subtraction = ".($this->a-$this->b)."<br>";
 }

 function mul(){
  echo "Multiplication = ".($this->a*$this->b)."<br>";
 }

 function div(){
  echo "Division = ".($this->a/$this->b)."<br>";
 }

 function sqr(){
 echo "SQRT = ".sqrt($this->a);
 }


}

