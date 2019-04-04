<?php

class Helper{

    static function createTable($files) {
        if (count($files) > 0):
            ?>
            <table align="center">
                <thead>
                <tr>
                    <th><?php echo implode('</th><th>', array_keys(current($files))); ?></th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($files as $row): array_map('htmlentities', $row); ?>
                    <tr>
                        <td><?php echo implode('</td><td>', $row); ?></td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        <?php endif;
     }

     static function arrayForm($file){
        $array = json_decode(file_get_contents("$file"), true);
        return $array;
     }

     static function addHeader($logo, $class){
         ?>
          <header class="<?=$class;?>">
          <h2><?php echo $logo; ?></h2>
          </header>
          <?php
     }

     static function addFooter($text, $class){
        ?>
         <footer class="<?=$class; ?>">
            <p><?php echo $text; ?></p>
         </footer>
         <?php
    }

    static function checkBox($array)
    {
        foreach ($array as $key => $item) {
            echo "<input type = \"checkbox\" name = \"vehicle1\" value = \"" . $key . "\" >" . $item . "<br>";
        }
    }

    static function multiSelect($class, $array){
        echo "<form method=\"POST\" action=\"\">";
        echo "<select name=\"flower[ ]\" multiple class=\" . $class  . \">";
        foreach($array as $key=>$item){
            echo "<option value=\"" . $key . "\">" . $item . "</option>";
        }
        echo "</select> <br>";
        echo "<input type=\"submit\" name=\"submit\" value=Submit>";
        echo "</form>";
    }

    static function radioButton($class, $array){
        echo "<form action=\"\" class='" . $class . "'>";
        foreach ($array as $key => $item) {
            echo "<input type=\"radio\" name=\"gender\" value=\"" . $key . "\">" . $item . "<br>";
        }
        echo "</form>";
    }

    static function f_list($class, $ulol, $array){
        echo "<" . $ulol .">";
        foreach ($array as $item){
            echo "<li  class='" . $class . "'>" . $item . "</li>";
        }
        echo "</" . $ulol . ">";
    }

    static function descriptionList($class, $array){
        echo "<dl class=\"" . $class . "\">";
            foreach ($array as $row => $value){
                    echo "<dt>" . $row . "</dt>";
                    echo "<dd>" . $value . "</dd>";
            }
        echo "</dl>";
    }
}

// https://stackoverflow.com/questions/2407284/how-to-get-multiple-selected-values-of-select-box-in-php
