<?php
/**
 * Created by PhpStorm.
 * User: lotus
 * Date: 4/2/19
 * Time: 9:42 AM
 */

class Ini implements iWorkData
{
    protected $ini_array;

    public function __construct()
    {
        $this->ini_array = parse_ini_file(INI_FILE);
        var_dump( $this->ini_array);
    }

    public function saveData($key, $val){
        $this->ini_array=array_merge($this->ini_array, array($key=>$val));
        return INI_ADD .  $this->ini_array[$key];
    }

    public function getData($key){
        return $this->ini_array[$key];
    }

    public function deleteData($key){
        unset($this->ini_array[$key]);
        $this->save_ini_file($this->ini_array, INI_FILE);
        return INI_DEL;
    }

    function array_to_ini($array,$out="")
    {
        $t="";
        $q=false;
        foreach($array as $c=>$d){
            if(is_array($d))$t.=$this->array_to_ini($d,$c);
            else{
                if($c===intval($c)){
                    if(!empty($out)){
                        $t.="\r\n".$out." = \"".$d."\"";
                        if($q!=2)$q=true;
                    }else $t.="\r\n".$d;
                }else{
                    $t.="\r\n".$c." = \"".$d."\"";
                    $q=2;
                }
            }
        }
        if($q!=true && !empty($out)) return "[".$out."]\r\n".$t;
        if(!empty($out)) return  $t;
        return trim($t);
    }

    function save_ini_file($array,$file)
    {
        $a=$this->array_to_ini($array);
        $ffl=fopen($file,"w");
        fwrite($ffl,$a);
        fclose($ffl);
    }



    public function __destruct()
    {
        // TODO: Implement __destruct() method.

    }
}