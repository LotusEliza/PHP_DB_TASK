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

<h1>Ini: </h1>
<p><?php echo $ini1; ?></p>
<p><?php echo $ini2; ?></p>
<p><?php echo $ini3; ?></p>

</body>
</html>