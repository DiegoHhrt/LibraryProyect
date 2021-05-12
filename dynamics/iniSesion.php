<?php
    session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Inicio de sesión</title>
    </head>
    <body>
        <form action="./Index.php"  method="POST">
            <fieldset style="width:350px">
                <legend><h2>Inicio de sesión</h2></legend>
                Correo electrónico: <input type="email" name="correo" placeholder="ejemplo@comunidad.unam"><br><br>
                Contraseña: <input type="password" name="contra"><br><br>
                <input type="submit" name="ini" value="Entrar">
            </fieldset>
        </form>
    </body>
</html>