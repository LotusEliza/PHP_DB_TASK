<?php
/**
 * Created by PhpStorm.
 * User: lotus
 * Date: 3/27/19
 * Time: 10:14 AM
 */

class FileRead
{
    protected $file;

    public function __construct()
    {
        $this->file = file(FILE);
    }

    public function find_line($line)
    {
        $array = $this->file;
        $fline = $array[$line];
        return $fline;
    }

    public function find_symbol($symbol)
    {
        $array = $this->file;
        $line = $array[$symbol+1];
        return $line{$symbol};
    }

    public function print_by_line()
    {
        return $array=$this->file;
    }

    public function print_by_symbol()
    {
        $array=$this->file;
        $count = count($array);

        for ($i = 0; $i < $count; $i++){
            $line = htmlspecialchars($array[$i]);
            $farray = str_split($line);
            foreach ($farray as $item){
                echo $item;
            }
        }
    }

    public function set_line($line, $newline)
    {
        $array=$this->file;
        $array[$line+1]= $newline;
        $this->save_to_file($array);
        return $array;
    }

    public function set_symbol($line, $symbol, $newsymbol)
    {
        $array=$this->file;
        $array[$line+1][$symbol+1] = $newsymbol;
        $this->save_to_file($array);
        return $array;
    }

    public function save_to_file($array)
    {
        foreach ($array as $line){
            file_put_contents("wfile.txt", print_r($line, true), FILE_APPEND);
        }
    }


    public function __destruct()
    {
        // TODO: Implement __destruct() method.
    }
}
