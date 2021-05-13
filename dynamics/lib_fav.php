<?php
    require_once("./inSessionValidation.php");
    validateSession();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Document</title>
    </head>
    <body>
        <table>
            <tr>
                <td><img src="../statics/EscudoEnp6.jpg" alt="P6" height="100"></td>
                <td> <h1>Coyo Lectores</h1></td>
            </tr>
        </table><hr>
        <form action="./Index.php">
        <button type="submit">Regresar</button>
    </form>
        <?php
            //session_start();
            //V1: validación de cuenta y consultar datos de libros de la base de datos, link en función del id del libro
            $us = _$SESSION["identificacion"];
            include "./config.php";
            $conect = dataBaseConection();
            $lib = "SELECT nombre FROM autor";
            echo "<h1>Libros favoritos</h1><br><br>";
            echo "<form action='./lib_fav.php' method='POST'><input type='submit' name='elim' value='Quitar de favoritos'></form>";
            echo "<form action='./vista_det.php' method='POST'><input type='submit' name='vist' value='Vista detallada'></form>";
        ?>
    </body>
</html>
