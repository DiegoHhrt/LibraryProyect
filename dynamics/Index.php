<?php
    $sessionIn=(isset ($_POST["registred"]) && $_POST["registred"] !="") ?$_POST["registred"]: false;

if($sessionIn)
{
    echo "
    <!DOCTYPE html>
        <html>
            <head>
                <meta charset='UTF-8'>
                <title>Biblioteca </title>
            </head>
            <body>
                <h1>¡Bienvenid@ a la biblioteca '' de la prepa 6!</h1>
                <form action='./accountCreation.php' method='POST'>
                    <label for='sessionInit'>
                        <button type='submit' value='sessionInit'>Cerrar sesión</button>
                    </label>
                </form>
            </body>
        </html>";
}
else
{
    header("location: ./accountCreation.php");
}
?>