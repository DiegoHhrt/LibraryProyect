<?php
    require_once("./inSessionValidation.php");
    validateNotSession();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Inicio de sesión</title>
    </head>
    <body>
        <table>
            <tr>
                <td><img src="../statics/EscudoEnp6.jpg" alt="P6" height="100"></td>
                <td> <h1>Coyo Lectores</h1></td>
            </tr>
        </table> <hr>
        <form action="./Index.php"  method="POST">
            <fieldset style="width:350px">
                <legend><h2>Inicio de sesión</h2></legend>
                <label for="correo">
                    Correo electrónico: <input type="email" name="correo" placeholder="ejemplo@comunidad.unam"><br><br>
                </label>
                <label for="contra">
                    Contraseña: <input type="password" name="contra" max_lenght="255"><br><br>
                </label>
                <label for="ini">
                    <input type="submit" name="ini" value="Entrar">
                </label>
                <label for="ini_sesion">
                    <input type="hidden" name="ini_sesion">
                </label>
            </fieldset>
        </form>
        ¿No tienes una cuenta? <a href="accountCreation.php">Crea una aquí</a>
    </body>
</html>