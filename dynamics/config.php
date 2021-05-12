<?php
    require_once("./inSessionValidation.php");
    define("USER", "root");
    define("HOST", "localhost");
    define("PASSWORD", "");
    define("DATABASE", "Biblioteca");
    
    function dataBaseConection()
    {
        $conection=mysqli_connect(HOST, USER, PASSWORD, DATABASE);
        if(!$conection)
        {
            mysqli_connect_error();
            mysqli_connect_errno();
            echo "Failed conection to db";
        }
        return $conection;
    }
    //exit();
?>