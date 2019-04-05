<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Task1</title>
</head>
<body>

<p><?=$mysql1;?></p>

<?php
foreach($mysql2 as $key=>$item) {
echo 'name - '. $item['name'] . ", city - " . $item['city'] . ", age - " . $item['age'] ."<br>";
}
?>

<p><?=$mysql3;?></p>
<p><?=$mysql4;?></p>
</body>
</html>