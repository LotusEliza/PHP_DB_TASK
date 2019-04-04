<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Task6</title>
</head>
<body>

<div>
    <h1><?php echo $bandname; ?></h1>
    <h4>Genre: <?php echo $bandgenre; ?></h4>
    <?php foreach ($array_music as $musician){
        echo "<hr>";
        echo "This musician plays on " . $musician->getInstrument() . ".<br>";
        echo "Musician type: " . $musician->getMusicianType() . ".<br>";
    }?>
</div>



</body>
</html>