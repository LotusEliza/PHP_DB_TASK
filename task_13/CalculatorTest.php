<?php

require 'libs/Calc.php';

class CalculatorTests extends PHPUnit_Framework_TestCase
//class CalculatorTests extends PHPUnit\Framework\TestCase
{
    private $calculator;

    public function setUp()
    {
        $this->calculator = new Calc();
    }
 
    protected function tearDown()
    {
        $this->calculator = NULL;
    }

    public function testSetNum1()
    {
        $this->calculator->setNum1(1);
        $result = $this->calculator->getNum1();
        $this->assertEquals(1, $result);
    }

    public function testSetNum2()
    {
        $this->calculator->setNum2(2);
        $result = $this->calculator->getNum2();
        $this->assertEquals(2, $result);
    }

    public function testAdd()
    {
        $this->calculator->setNum1(1);
        $this->calculator->setNum2(2);
        $result = $this->calculator->addition();
        $this->assertEquals(3, $result);
    }

    public function testSubtraction()
    {
        $this->calculator->setNum1(3);
        $this->calculator->setNum2(2);
        $result = $this->calculator->subtraction();
        $this->assertEquals(1, $result);
    }

    public function testMultiplication(){
        $this->calculator->setNum1(2);
        $this->calculator->setNum2(2);
        $result = $this->calculator->multiplication();
        $this->assertEquals(4, $result);
    }

    public function testDivision(){
        $this->calculator->setNum1(4);
        $this->calculator->setNum2(2);
        $result = $this->calculator->division();
        $this->assertEquals(2, $result);
    }

    public function testSquareRoot(){
        $this->calculator->setNum1(4);
        $result = $this->calculator->squareRoot();
        $this->assertEquals(2, $result);
    }

    public function testPower(){
        $this->calculator->setNum1(2);
        $this->calculator->setNum2(2);
        $result = $this->calculator->power();
        $this->assertEquals(4, $result);
    }

    public function testClear(){
        $this->calculator->setNum1(2);
        $this->calculator->setNum2(2);
        $this->calculator->clear();
        $result = $this->calculator->getNum1() + $this->calculator->getNum2();

        $this->assertEquals(NULL, $result);
    }

    public function testMemoryAdd(){
        $this->calculator->setNum1(2);
        $this->calculator->memoryAdd();
        $result = $this->calculator->getMemory();

        $this->assertEquals(2, $result);
    }

    public function testMemorySubstruct(){
        $this->calculator->setNum1(4);
        $this->calculator->memoryAdd();
        $this->calculator->setNum1(2);
        $this->calculator->memorySubstruct();
        $result = $this->calculator->getMemory();

        $this->assertEquals(2, $result);
    }

    public function testMemoryClear(){
        $this->calculator->setNum1(2);
        $this->calculator->memoryAdd();
        $this->calculator->memoryClear();
        $result = $this->calculator->getMemory();

        $this->assertEquals(NULL, $result);
    }

}
