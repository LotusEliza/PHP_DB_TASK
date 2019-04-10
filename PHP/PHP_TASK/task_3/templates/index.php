<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Task1</title>
    <link href="css/style.css" rel="stylesheet">
</head>
<body>

<div>
    <h3>Print by line:</h3>
    <p>
        <?php
        foreach ($array as $item){
            echo $item;
        }
        ?>
    </p>
    <hr>
    <h3>Find line:</h3>
    <p><?php echo $result2; ?></p>
    <hr>
    <h3>Find symbol:</h3>
    <p><?php echo $result1; ?></p>
    <hr>
    <h3>Change Line:</h3>
    <p>
        <?php
        foreach ($array1 as $item){
            echo $item;
        }
        ?>
    </p>
    <hr>
    <h3>Change Symbol in line:</h3>
    <p>
        <?php
        foreach ($array2 as $item){
            echo $item;
        }
        ?>
    </p>


</div>

</body>
</html>