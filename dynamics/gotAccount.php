<?php
    require_once('./inSessionValidation.php');
    validateNotSession();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Cuenta duplicada</title>
    </head>
    <body>
       <table>
            <tr>
                <td><img src='../statics/EscudoEnp6.jpg' alt='LogoP6' height='100'></td>
                <td><h1>Coyo Lectores ENP 6</h1></td>
            </tr>
        </table><hr>
        <h1>Lo sentimos, esa identificación o correo ya cuenta con un usuario, por favor inicia sesión</h1>
        <br>
        <a href="./iniSesion.php">Iniciar sesión</a>
    </body>
</html>