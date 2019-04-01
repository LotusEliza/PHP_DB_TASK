<?php

class Calc{

    private $num1;
    private $num2;
    private $memory;

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

    public function __getNum1(){
        // TODO: Implement __get() method.
        return $this->num1;
    }

    public function __getNum2(){
        // TODO: Implement __get() method.
        return $this->num2;
    }

    public function getMemory(){
        // TODO: Implement __get() method.
        return $this->memory;
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

     public function memoryAdd(){
    //       if($this->num1 != MY_NAN){
         $this->memory+=$this->num1;
         return true;
    //        } else {
    //            return MY_NAN;
    //        }
     }
     public function memorySubstruct(){
    //        if($this->firstVar != MY_NAN){
         $this->memory-=$this->num1;
         return true;
    //        } else {
    //            return MY_NAN;
    //        }
     }

     public function memoryClear(){
         $this->memory = NULL;
         return true;
     }



}

