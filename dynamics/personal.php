<?php
    require_once("./inSessionValidation.php");
    validateSession();
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset='UTF-8'>
        <title>Información personal </title>
    </head>
    <body>
        <table>
            <tr>
                <td><img src="../statics/EscudoEnp6.jpg" alt="P6" height="100"></td>
                <td> <h1>Coyo Lectores</h1></td>
            </tr>
        </table>
        <hr><br>
        <form action="./Index.php">
            <button type="submit">Regresar</button>
        </form>
        <h2>Información personal</h2>
        <fieldset>
            <legend><h3>Datos personales</h3></legend>
            <?php

            if($_SESSION["tipoUsuario"]=='lec')
            {
                $tipoUser="Lector";
                $tipoId="Numero de cuenta/RFC";
            }
            elseif($_SESSION["tipoUsuario"]=='bibl')
            {
                $tipoUser="Bibliotecario";
                $tipoId="RFC";
            }
            elseif($_SESSION["tipoUsuario"]=='admon')
            {
                $tipoUser="Administrador";
                $tipoId="RFC";
            }

            echo "<strong>" ."Nombre:"."</strong>".$_SESSION['nombre']."<br>" . "<br>";
            echo "<strong>" ."Apellidos: "."</strong>".$_SESSION['apellido']."<br>". "<br>";
            echo "<strong>" ."".$tipoId.": "."</strong>".$_SESSION['identificacion']."<br>". "<br>";
            echo "<strong>" ."Correo institucional: "."</strong>".$_SESSION['email']."<br>". "<br>";
            echo "<strong>" ."Tipo de cuenta: "."</strong>".$tipoUser."<br>". "<br>";
            echo "<strong>" ."Fecha de nacimiento: "."</strong>".$_SESSION['cumple']."<br>". "<br>";
            echo "<strong>" ."Contraseña: "."</strong>".$_SESSION['psswd']."<br>". "<br>";
            ?>
            <form action="busqueda.html" method="POST">
            <label for=""><br><br>
                <input type="submit" name="actauliza" value="Actualizar datos">
            </label>
            <label for="">
                <input type="submit" name="borrar" value="Eliminar cuenta">
            </label>
            </form>
            <form action="./Index.php" method='POST'>
            <label for='closeS'>
                <button type='submit' name='closeS' value='sessionClose'>Cerrar sesión</button>
            </label>
            </form>
        </fieldset>
        
 
    </body>
</html>

