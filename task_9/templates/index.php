<!DOCTYPE html>
<html>
<head>
	<title>%TITLE%</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<body>

<?php Helper::addHeader($logo, $class);?>
<div class="container">
    <div class="row">
        <div class="col-10">
            <?php Helper::createTable($array['items']);?>
        </div>
        <div class="col-2">
            <?php Helper::checkBox($flowers);?>
        </div>
        </div>

        <div class="row">
            <div class="col"><?php Helper::multiSelect($class, $flowers);?></div>
            <div class="col"><?php Helper::descriptionList($class, $flowers); ?></div>
            <div class="col"><?php Helper::radioButton($class, $flowers); ?></div>
            <div class="col"><?php Helper::f_list($class, $ulol, $flowers); ?></div>
        </div>
    </div>
<?php Helper::addFooter($text, $class); ?>

</body>
</html>