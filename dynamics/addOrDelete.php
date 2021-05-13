<?php
    require_once('./inSessionValidation.php');
    require_once("./config.php");
    validateSession();
    validatePermissions('Admin');
    $con=dataBaseConection();

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
            </table> <hr>";
            if((isset($_POST['borrar'])))
            {
                $toDelete=(isset($_POST['delUser']) && $_POST['delUser'] != '')? $_POST['delUser']:"0";
                $deleteUser="DELETE FROM Usuario WHERE Id_usuario='".$toDelete."'";

                $erase=mysqli_query($con, $deleteUser);
                if($erase)
                {
                    echo "<h1>El usuario ha sido eliminado con éxito</h1>
                    <form action='./addOrDelete.php'>
                        <button type='submit'>Regresar a la vista de usuarios</button>
                    </form>";
                }
                else
                {
                    echo "fail";
                }
            }
            else
            {

            echo "
            <form action='./Index.php'>
                <button type='submit'>Regresar</button>
            </form>
            <h2>Gestión de usuarios de la biblioteca</h2>
            <hr>";
                $countId="SELECT COUNT(Id_usuario) FROM usuario";
                $r=mysqli_query($con,$countId);
                $count=mysqli_fetch_array($r, MYSQLI_NUM);

                $limit=$count[0];
                $y=0;
                $c=0;
                $x=0;
                echo "<form action='adminUserInfo.php' method='post'>";
                while($y<$limit)
                {
                    $x=$y+1;
                    echo "<label for='user'>";
                        echo "<button type='submit' name='user' value='".$y."'>Usuario ".$x."</button>";
                    echo "</label>";
                    if($c>9)
                    {
                        $c=0;
                        echo "<br>";
                    }
                    $c++;
                    $y++;
                }
                echo "</form>";
                exit();
            echo" 
            <hr>
        </body>
    </html>";
}
?>