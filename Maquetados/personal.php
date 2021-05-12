<!DOCTYPE html>
<html>
    <head>
        <meta charset='UTF-8'>
        <title>Información personal </title>
    </head>
    <table>
    <tr>
        <td><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/f/ff/Escudo_prepa_6_enp_6.jpg/240px-Escudo_prepa_6_enp_6.jpg" alt="P6" width="80" height="80"></td>
        <td> <h1>Coyo Lectores</h1></td>
    </tr>
    </table>
        <hr><br>
        <h2>Información personal</h2>
        <fieldset>
            <legend><h3>Datos personales</h3></legend>
            <?php
            echo "<strong>" ."Nombre:"."</strong>".$_POST["name"]."<br>" . "<br>";
            echo "<strong>" ."Apellido paterno: "."</strong>".$_POST["apellidoPat"]."<br>". "<br>";
            echo "<strong>" ."Apellido paterno: "."</strong>".$_POST["apellidoMat"]."<br>". "<br>";
            echo "<strong>" ."Número de cuenta: "."</strong>".$_POST["identification"]."<br>". "<br>";
            echo "<strong>" ."Correo institucional: "."</strong>".$_POST["mail"]."<br>". "<br>";
            echo "<strong>" ."Tipo de cuenta: "."</strong>".$_POST["range"]."<br>". "<br>";
            echo "<strong>" ."Fecha de nacimiento: "."</strong>".$_POST["birth"]."<br>". "<br>";
            echo "<strong>" ."Contraseña: "."</strong>".$_POST["psswd"]."<br>". "<br>";
            ?>
            <form action="busqueda.html" method="POST">
            <label for=""><br><br>
                <input type="submit" name="actauliza" value="Actualizar datos">
            </label>
            <label for="">
                <input type="submit" name="borrar" value="Eliminar cuenta">
            </label>
            </form>
        </fieldset>

 
    <body>
        </html>

