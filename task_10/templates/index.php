<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Task10</title>
    <link href="../css/style.css" rel="stylesheet">
</head>
<body>

<main>
    <h3>PDO results:</h3>
    <hr>
    <p>1. INSERT: <?=$res_ins;?></p>
    <div>
        <p>2. JOIN: <?=$tabl_join;?></p>
        <p>3. HAVING: <?=$tabl_hav;?></p>
        <p>4. GROUP BY: <?=$tabl_group;?></p>
        <p>5. ORDER BY: <?=$tabl_ord;?></p>
        <p>6. UPDATE: <?=$res_upd;?></p>
        <p>7. DELETE: <?=$res_del;?></p>
    </div>
</main>

</body>
</html>