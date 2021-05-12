<?php
    //Función que en caso de no tener una sesión activa, no te deja acceder a las vistas
    session_name("register");
    session_start();
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
    //Función que no te permite acceder a ciertas vistas si no tienes el permiso adecuado
    function validatePermissions($permit)
    {
        if($permit!='all')
        {
            if($permit=='biblio')
            {
                if($_SESSION["tipoUsuario"]=='lec')
                {
                    header("location: ./Index.php");
                }
            }
            elseif($permit=='Admin')
            {
                if($_SESSION["tipoUsuario"]=='lec'||$_SESSION["tipoUsuario"]=='bibl')
                {
                    header("location: ./Index.php");
                }
            }
        }
        
    } 
    function destroySession()
    {
        session_unset();
        session_destroy();
    }    

?>