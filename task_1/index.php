<?php

include 'config.php';
include 'functions.php';


    if(isset($_POST["submit"]))
    {
        $result = upload_file();
      //  header("Location: ".$_SERVER['PHP_SELF']);

    }

    if (isset($_POST['name'])){
        $result = remove($_POST['name']);
    }

        $files=info_file();


include 'templates/index.php';
