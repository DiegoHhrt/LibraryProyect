<?php
    require_once("./inSessionValidation.php");
    validateSession();
    if(isset($_POST["vist"]))
    {
        include "./config.php";
        $cone = dataBaseConection();
        $data = "SELECT * FROM Id_libro";

    }
    else
    {
        header("location: ./index.php");
    }
?>