<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Vista de usuarios</title>
    </head>
    <body>
        <h2>Gestión de usuarios de la biblioteca</h2>
        <hr>
        <?php
            $x=0;
            while($x<10)
            {
                $y=$x+1;
                echo "<a href=''>Usuario".$y."</a><br><br>";
                $x++;
            }
        ?>    
        <hr>
    </body>
</html>