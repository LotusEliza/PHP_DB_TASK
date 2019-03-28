<?php

class Calc{

    private $num1;
    private $num2;
    private $mem;

     function __construct()
     {

     }

     public function __setNum1($num1){
         // TODO: Implement __set() method.
         $this->num1=$num1;
     }

    public function __setNum2($num2){
        // TODO: Implement __set() method.
        $this->num2=$num2;
    }

     public function addition(){
         return $this->num1+$this->num2;
     }

     public function subtraction(){
         return $this->num1-$this->num2;
     }

     public function multiplication(){
         return $this->num1*$this->num2;
     }

     public function division(){
         if($this->num2==0){
             return ERRORDIV;
         }else{
             return $this->num1/$this->num2;
         }
     }

     public function squareRoot(){
         return sqrt($this->num1);
     }

     public function power(){
         return pow($this->num1, $this->num2);
     }

     public function clear(){
         $this->num1=NULL;
         $this->num2=NULL;
     }
}

