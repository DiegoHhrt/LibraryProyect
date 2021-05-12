<?php
    require_once('./inSessionValidation.php');
    validateSession();
    validatePermissions('Admin');

echo "
<!DOCTYPE html>
<html>
    <head>
        <meta charset='UTF-8'>
        <title>Vista de usuarios</title>
    </head>
    <body>
        <table>
            <tr>
                <td><img src='../statics/EscudoEnp6.jpg' alt='P6' height='100'></td>
                <td> <h1>Coyo Lectores</h1></td>
            </tr>
        </table> <hr>
        <form action='./Index.php'>
            <button type='submit'>Regresar</button>
        </form>
        <h2>Gestión de usuarios de la biblioteca</h2>
        <hr>";
            // $x=0;
            // while($x<10)
            // {
            //     $y=$x+1;
            //     echo '<a href=''>Usuario'.$y.'</a><br><br>';
            //     $x++;
            // }
        echo" 
        <hr>
    </body>
</html>";
?>