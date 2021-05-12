<?php
require_once("./inSessionValidation.php");
validateSession();
echo "<!DOCTYPE html>
<html>
<meta charset= 'utf 8'>
<head>
<title> Contenido </title>
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
        </form>";
 
 $titulo=$_POST["titulo"];
 $autor=$_POST["autor"];


if(isset($_FILES['portada'])){
  $portada= $_FILES['portada'];
  $titulo= $_FILES['portada']['tmp_name'];
  $nombrearch= explode(".", $_FILES["portada"]["titulo"]);
  rename($titulo, "./statics/".$tutulo. "$".$autor. "$&".  $nombrearch[1]);
  //
  echo "<i> Al equipo de coyolectores le complace brindarle un buen servicio </i>";
    echo " <h1 style='font-family: Verdana; font-size: 30pt' align= 'center'> COYO LECTORES </h1> ";

  $ruta_carpeta="./statics";
  $carpeta = opendir($ruta_carpeta);
  $archivos = array();
  $Sihayarchivos = true;
  while($Sihayarchivos)
  {
    $portada =  readdir($carpeta);
    if($portada !== false)
    {
      $ext = pathinfo($archivo, PATHINFO_EXTENSION);
      if($archivo != "." && $archivo != "..")
      {
        if($ext == 'jpg' || $ext=='png' || $ext=='jpeg')
        {
          array_push($archivos, $portada);
        }
      }
    }
    else
    {
      $Sihayarchivos =false;
    }
  }


  foreach ($archivos as $key => $value) {


    echo "<table>";
    echo "<tbody>";
    echo "<tr>";
    echo "<td>";
    echo "<img src='statics/$value'>";
//
        echo " <ul> <li> $titulo </li> <br>
        <li> $autor </li> </ul> </td>";

        echo "</tr>";
    echo "</tbody>";
    echo "</table>";
  }
}
else {
  echo "<h1> Ahora mismo no hay libros en la biblioteca UnU  </h1>";
}


?>
<div id="center_button"><button onclick="location.href='_____'"> Ir a favoritos  </button></div>
</body>
</html>
