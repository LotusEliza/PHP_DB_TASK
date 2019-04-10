<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Task1</title>
    <link href="css/style.css" rel="stylesheet">
</head>
<body>

<!--------------------------Upload form--------------------------------------------->
<div class="form">
    <form  method="post" action="index.php" enctype="multipart/form-data">
        <h3>Select file to upload:</h3><br>
        <input type="file" name="fileToUpload" id="fileToUpload">
        <br>
        <br>
        <input type="submit" value="Upload File" name="submit">
    </form>
    <br>
    <br>
</div>

<!--------------------------Table with files--------------------------------------------->

<form method="post" action="index.php">
<?php
    if (count($files) > 0):
        ?>
        <table align="center">
            <thead>
            <tr>
                <th><?php echo implode('</th><th>', array_keys(current($files))); ?></th>
                <th>delete</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($files as $row): array_map('htmlentities', $row); ?>
                <tr>
                    <td><?php echo implode('</td><td>', $row); ?></td>
                    <td>
                        <input type="submit" value="Delete">
                        <input type="hidden" name="name" value="<?php echo $row['name'];?>">
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>

    <?php endif; ?>
<br>
</form>

<p><?php echo $result; ?></p>

</body>
</html>
