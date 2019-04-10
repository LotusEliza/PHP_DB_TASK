<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Task4</title>
</head>
<body>

<main>
    <div>
        <h3>MySQL:</h3>
        <p><?=$my_insert;?></p>
        <?php
        foreach($my_select as $key=>$item) {
            echo 'name - '. $item['name'] . ", city - " . $item['city'] . ", age - " . $item['age'] ."<br>";
        }
        ?>
        <p><?=$my_update;?></p>
        <p><?=$my_delete;?></p>
    </div>

    <div>
        <h3>Postgresql:</h3>
        <p><?=$pg_insert;?></p>
        <?php
        foreach($pg_select as $key=>$item) {
            echo 'name - '. $item['name'] . ", city - " . $item['city'] . ", age - " . $item['age'] ."<br>";
        }
        ?>
        <p><?=$pg_update;?></p>
        <p><?=$pg_delete;?></p>
    </div>
</main>

</body>
</html>