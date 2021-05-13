<?php
  require_once('./inSessionValidation.php');
  require_once("./config.php");
  validateSession();
  validatePermissions("biblio");
  $con=dataBaseConection();

  echo"
<!DOCTYPE html>
<html>
    <head>
        <meta charset='UTF-8'>
        <title>Reportes de contenido</title>
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
        <h2>Historial de reportes de contenido inadecuado.</h2>
        ";
            $countReport="SELECT COUNT(Id_Reporte) FROM reporte";
                $r=mysqli_query($con,$countReport);
                $count=mysqli_fetch_array($r, MYSQLI_NUM);

                $limit=$count[0];
                if($limit==0)
                {
                    echo "<h3>Aún no existen reportes de contenido en la biblioteca</h3>";
                }
                else
                {
                    $y=0;
                    $c=0;
                    $x=0;
                    echo "<form action='reportView.php' method='post'>";
                    while($y<$limit)
                    {
                        $x=$y+1;
                        echo "<label for='rep'>";
                            echo "<button type='submit' name='rep' value='".$y."'>Reporte ".$x."</button>";
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
                }

        echo"                        
        <hr>
    </body>
</html>";
?>