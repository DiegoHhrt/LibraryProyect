<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Reportes de contenido</title>
    </head>
    <body>
        <table>
            <tr>
                <td><img src="../statics/EscudoEnp6.jpg" alt="P6" height="100"></td>
                <td> <h1>Coyo Lectores</h1></td>
            </tr>
        </table> <hr>
        <form action="./Index.php">
            <button type="submit">Regresar</button>
        </form>
        <h2>Historial de reportes de contenido inadecuado.</h2>
        <hr>
        <?php
            $x=0;
            while($x<10)
            {
                $y=$x+1;
                echo "<a href=''>Reporte".$y."</a><br><br>";
                $x++;
            }            
        ?>   
        <hr>
    </body>
</html>