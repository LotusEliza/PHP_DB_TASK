<?php
/**
 * Created by PhpStorm.
 * User: lotus
 * Date: 3/27/19
 * Time: 10:14 AM
 */

class FileRead
{
    public $file;
    public $line;
    public $symbol;

    public function __construct($line, $symbol){
        $this->file = file(FILE);
        $this->line = $line;
        $this->symbol = $symbol-1;
    }

    public function find_line(){
        $array =$this->file;
        $line=$array[$this->line];
        return $line;
    }

    public function find_symbol(){
        $array =$this->file;
        $line = $array[$this->line];
        return $line{$this->symbol};
    }

    public function printbyline(){
        $arr=$this->file;
        $count = count($arr);
        for ($i = 0; $i < $count; $i++) {
            echo $arr[$i];
        }
    }

    public function printbysymbol(){
        $arr=$this->file;
        $count = count($arr);
        for ($i = 0; $i < $count; $i++) {
            $line = htmlspecialchars($arr[$i]);
            $arr1 = str_split($line);
            foreach ($arr1 as $key=>$item){
                echo $item;
            }
        }
    }

    public function setLine($numofline, $newline)
    {
        $array=$this->file;
        for ($i = 0; $i < count($array); $i++) {
            if($i==$numofline){
                $array[$i]=$newline;
//                var_dump($array[$i]);
                return $array;
            }
        }
    }

    public function set_symbol($line, $symbol, $newsymbol)
    {
        $array=$this->file;
        for ($i = 0; $i < count($array); $i++) {
            if($i==$line){
                $fline=$array[$i];
                $array=str_split($fline);
                for ($i = 0; $i < count($array); $i++) {
                    if($i==$symbol){
                        $array[$i]=$newsymbol;
                        return $array;
                    }
                }

            }
        }
    }

}
