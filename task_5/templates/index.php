<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Task1</title>
</head>
<body>

<h1>Session: </h1>
<p><?php echo $ses1; ?></p>
<p><?php echo $ses2; ?></p>
<p><?php echo $ses3; ?></p>

<h1>Cookie: </h1>
<p><?php echo $cook1; ?></p>
<p><?php echo $cook2; ?></p>
<p><?php echo $cook3; ?></p>

<h1>Json: </h1>
<p><?php echo $json1; ?></p>


<p>
    <?php
     foreach ($json2 as $item){
         echo 'Get Json: ' . $item;
     }
    ?>
</p>
<p><?php echo $json3; ?></p>

<h1>Mysql: </h1>
<p><?php echo $mysql1; ?></p>
<p>
    <?php
    foreach($mysql2 as $key=>$item) {
        echo 'id - ' . $item['id'], ' , name - ', $item['name'], "<br>";
    }
    ?>
</p>
<p><?php echo $mysql3; ?></p>





<!--foreach($mysql2 as $key=>$item) {-->
<!--echo 'id - ' . $item['id'], ' , name - ', $item['name'], "<br>";-->
<!--}-->

<!--//echo $json1;-->
<!--//echo "</br>";-->
<!--//echo $json2;-->
<!--//echo "</br>";-->
<!--//echo  $json3;-->

<!--//-->
<!--//echo $cook1;-->
<!--//echo "</br>";-->
<!--//echo $cook2;-->
<!--//echo "</br>";-->
<!--//echo  $cook3;-->
<!---->
<!---->




<!--//echo "</br>";-->
<!--//echo $ses2;-->
<!--//echo "</br>";-->
<!--//echo  $ses3;-->



<!---->
<!--echo $mysql1;-->
<!--echo "</br>";-->
<!--echo $mysql3;-->
<!--echo $mysql2;-->











<?php //echo $ses1; ?>
<!--<br>-->
<!---->
<?php //echo $ses2; ?>
<!--<br>-->
<?php //echo $ses3; ?>
<!--<br>-->
<!--</p>-->


</body>
</html>