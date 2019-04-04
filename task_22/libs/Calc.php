<?php

class Calc{

    private $num1;
    private $num2;
    private $memory;

     function __construct()
     {
         $this->num1=NULL;
         $this->num2=NULL;
         $this->memory=NULL;
     }

     public function __setNum1($num1){
         // TODO: Implement __set() method.
         if (is_numeric($num1)) {
             $this->num1=(int)$num1;
         }
     }

    public function __setNum2($num2){
        // TODO: Implement __set() method.
        if (is_numeric($num2)) {
            $this->num2=(int)$num2;
        }
    }
    private function setA($a){
        $this->num1 = $a;
    }
    public function getA(){
        return $this->num1;
    }
    private function setB($a){
        $this->num2 = $a;
    }
    public function getB(){
        return $this->num2;
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

     public function addition($a , $b){
        $this->setA($a);
        $this->setB($b);


        return $this->getA() + $this->getB();
        
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
         $this->memory+=$this->num1;
         return true;
     }
     public function memorySubstruct(){
         $this->memory-=$this->num1;
         return true;
     }

     public function memoryClear(){
         $this->memory = NULL;
         return true;
     }
}

