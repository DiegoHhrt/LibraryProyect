<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Reportes de contenido</title>
    </head>
    <body>
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