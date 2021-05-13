<?php
  require_once('./inSessionValidation.php');
  require_once("./config.php");
  validateSession();
  validatePermissions("biblio");
  $con=dataBaseConection();

  $stop=(isset($_POST['rep']) && $_POST['rep'] != '')? $_POST['rep']:'0';

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
        <form action='./reports.php'>
            <button type='submit'>Regresar</button>
        </form>";
        $con=dataBaseConection();
        $reportsToShow='SELECT Id_reporte FROM reporte';
        $preReport=mysqli_query($con, $reportsToShow);
        $m=0;
        while($fullReports=mysqli_fetch_array($preReport, MYSQLI_ASSOC))
        {           
            if($stop==$m)
            {
                $select=$fullReports;
            }
            
            $m++;
        }
        $selectedReport=$select['Id_usuario'];
        $dataRequest="SELECT * FROM reporte WHERE Id_reporte='".$selectedReport."'";

        $preSelecReport=mysqli_query($con, $dataRequest);
        $fullSelecReport=mysqli_fetch_array($preSelecReport, MYSQLI_ASSOC);

        echo "
        <form action='./addOrDelete.php'>
            <button type='submit'>Regresar</button>
        </form>
        <fieldset style= 'width:450px'>
            <legend><h3>Datos del usuario</h3></legend>";

            echo '<strong>' .'Libro reportado (ISBN):'.'</strong>'.$fullSelecReport["Id_libro"].'<br>' . '<br>';
            echo '<strong>' .''."Número de reporte".': '.'</strong>'.$fullSelecReport["Id_usuario"].'<br>'. '<br>';
            echo '<strong>' .'CUsuario que efectuó el reporte: '.'</strong>'.$fullSelecReport["Id_Usuario"].'<br>'. '<br>';
            echo '<strong>' .'Razones: '.'</strong>'.$fullSelecReport["Motivo"].'<br>'. '<br>';
       
            echo"<form action='./libro.php' method='POST'>
            <label for='check'>
                <input type='submit' name='check' value='inspeccionar Libro'>
            </label>
            </form>
        </fieldset>            
    </body>
</html>";
?>