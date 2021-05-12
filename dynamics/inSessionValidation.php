<?php
    //Función que en caso de no tener una sesión activa, no te deja acceder a las vistas
    function validateSession()
    {
        if(!(isset($_SESSION["init"])))
        {
            header("location: ./iniSesion.php");
        }
        return false;
    }
    //Función que en caso de tener una sesión activa no te deja crear una nueva cuenta o iniciar una nueva sesión
    function validateNotSession()
    {
        if((isset($_SESSION["init"])))
        {
            header("location: ./Index.php");
        }
        return true;
    }


?>