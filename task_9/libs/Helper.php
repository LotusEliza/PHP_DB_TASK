<?php

class Helper{

    static function createTable($files) {
        if (count($files) > 0):

            $result = "<table align=\"center\"><thead><tr>";
            $result .= "<th>";
            $result .= implode('</th><th>', array_keys(current($files)));
            $result .= "</th>";
            $result .= "</tr></thead><tbody>";
                foreach ($files as $row): array_map('htmlentities', $row);
                    $result .= "<tr><td>";
                    $result .= implode('</td><td>', $row);
                    $result .= "</td></tr>";
                endforeach;
                $result .= "</tbody></table>";
         endif;
         return $result;
     }

     static function arrayForm($file){
        $array = json_decode(file_get_contents("$file"), true);
        return $array;
     }


    static function checkBox($array, $name)
    {
        $result="";
        foreach ($array as $key => $item) {
            $result .= "<input type = \"checkbox\" name = $name value = \"" . $key . "\" >" . $item . "<br>";
        }
        return $result;
    }

    static function multiSelect($class, $array, $name){

        $result = "<form method=\"POST\" action=\"\">";
        $result .= "<select name=\"".$name."[ ]\" multiple class=\" . $class  . \">";
        foreach($array as $key=>$item){
            $result .= "<option value=\"" . $key . "\">" . $item . "</option>";
        }
        $result .= "</select> <br>";
        $result .= "</form>";
        return $result;
    }

    static function radioButton($class, $array, $name){
        $result = "<form action=\"\" class='" . $class . "'>";
        foreach ($array as $key => $item) {
            $result .= "<input type=\"radio\" name=$name value=\"" . $key . "\">" . $item . "<br>";
        }
        $result .= "</form>";
        return $result;
    }

    static function f_list($class, $ulol, $array){
        $result =  "<" . $ulol .">";
        foreach ($array as $item){
            $result .= "<li  class='" . $class . "'>" . $item . "</li>";
        }
        $result .= "</" . $ulol . ">";
        return $result;
    }

    static function descriptionList($class, $array){
        $result = "<dl class=\"" . $class . "\">";
            foreach ($array as $row => $value){
                $result .= "<dt>" . $row . "</dt>";
                $result .= "<dd>" . $value . "</dd>";
            }
        $result .= "</dl>";
        return $result;
    }
}