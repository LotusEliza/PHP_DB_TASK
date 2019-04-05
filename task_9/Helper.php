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


    static function checkBox($array)
    {
        $result="";
        foreach ($array as $key => $item) {
            $result .= "<input type = \"checkbox\" name = \"vehicle1\" value = \"" . $key . "\" >" . $item . "<br>";
        }
        return $result;
    }

    static function multiSelect($class, $array){

        $result = "<form method=\"POST\" action=\"\">";
        $result .= "<select name=\"flower[ ]\" multiple class=\" . $class  . \">";
        foreach($array as $key=>$item){
            $result .= "<option value=\"" . $key . "\">" . $item . "</option>";
        }
        $result .= "</select> <br>";
        $result .= "<input type=\"submit\" name=\"submit\" value=Submit>";
        $result .= "</form>";
        return $result;
    }

    static function radioButton($class, $array){
        $result = "<form action=\"\" class='" . $class . "'>";
        foreach ($array as $key => $item) {
            $result .= "<input type=\"radio\" name=\"gender\" value=\"" . $key . "\">" . $item . "<br>";
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

// https://stackoverflow.com/questions/2407284/how-to-get-multiple-selected-values-of-select-box-in-php
