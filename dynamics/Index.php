<?php
    $sessionIn=(isset ($_POST["registred"]) && $_POST["registred"] !="") ?$_POST["registred"]: false;

if($sessionIn)
{
    echo "
    <!DOCTYPE html>
        <html>
            <head>
                <meta charset='UTF-8'>
                <title>Coyo Lectores</title>
            </head>
            <body>
                <table>
                    <tr>
                        <td><img src='../statics/EscudoEnp6.jpg' alt='LogoP6' height='100'></td>
                        <td><h1>Coyo Lectores ENP 6</h1></td>
                    </tr>
                </table>
                <table align='right'>
                    <tr>
                        <td>
                            <form action='./accountCreation.php' method='POST'>
                                <label for='sessionInit'>
                                    <button type='submit' value='sessionClose'>Cerrar sesión</button>
                                </label>
                            </form>
                        </td>
                    </tr>
                </table>
                <hr>
                libros
                <hr>
                <p>Equipo de desarrollo: ''</p>
                <p>Integrantes: </p>
                <br>
            </body>
        </html>";
}
else
{
    header("location: ./accountCreation.php");
}
?>