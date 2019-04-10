<?php

include 'config.php';
include 'functions.php';

    if(isset($_POST["submit"]))
    {
        $result = upload_file();
    }

    if (isset($_POST['name'])){
        $result = remove($_POST['name']);
    }

        $files=info_file();


include 'templates/index.php';
