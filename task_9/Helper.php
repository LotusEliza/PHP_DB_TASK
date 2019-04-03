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


     static function addHeader($logo,$color, $bgcol){
         ?>
         <style>
            header {
            background-color: <?php echo $bgcol; ?>;
            padding: 30px;
            text-align: center;
            font-size: 35px;
            color: <?php echo $color; ?>;
          }
          </style>
          <header>
          <h2><?php echo $logo; ?></h2>
          </header>
          <?php
     }

     static function addFooter($text,$color, $bgcol){
        ?>
        <style>
           /* Style the footer */
            footer {
            background-color: <?php echo $bgcol;?>;
            padding: 10px;
            text-align: center;
            color: <?php echo $color;?>;
            }
         }
         </style>
         <footer>
            <p><?php echo $text; ?></p>
         </footer>
         <?php
    }

    static function multiSelect($class, $names, $array){
        ?>
                <form method="post" action="value.php">
                        <select name="flower[ ]" multiple class="<?php echo $class; ?>">
                        <?php
                        foreach($array as $item){
                        ?>
                            <option value="flower"> <?php echo $item; ?></option>
                        <?php
                        }
                        ?>
                        </select>
                        <input type="submit" name="submit" value=Submit>
                </form>
<?php
    }

}
// https://stackoverflow.com/questions/2407284/how-to-get-multiple-selected-values-of-select-box-in-php
// <?php
// foreach ($_POST['flower'] as $names)
// {
//         print "You are selected $names<br/>";
// }

//

    //  static function removeCol($code){
    //      var_dump($code);
    //     $code = preg_replace( '/(<tr.*)(<td.*)(<\\/tr.*)/is', '\\1\\3', $code );   
    //  }
}