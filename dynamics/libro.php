<?php
  $conexion=mysqli_connect('localhost', 'root', '', 'Biblioteca');
  require_once("./inSessionValidation.php");
  validateSession();

  $datos="SELECT * FROM libro";
  $result = mysqli_query($conexion, $datos);

  while($mostrar=mysqli_fetch_array($result)){
    
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Resultados de busqueda</title>
    </head>
  
<body>
<table>
    <tr>
        <td><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/f/ff/Escudo_prepa_6_enp_6.jpg/240px-Escudo_prepa_6_enp_6.jpg" alt="P6" width="80" height="80"></td>
        <td> <h1>Coyo Lectores</h1></td>
    </tr>
</table><hr>
<form action="./Index.php">
        <button type="submit">Regresar</button>
    </form>
<h2>Datos del libro</h2>
<table border="1">
  <thead>
  <th colspan="2"><h3>Datos</strong></h3>
  </thead>
  <tbody>
    <tr>
      <td rowspan="3"><img src="https://imagessl4.casadellibro.com/a/l/t7/94/9788478887194.jpg" width="400" height="600" alt="Imagen de prueba"></td>
      <td><strong>Titulo:</strong><?php echo $mostrar['Titulo'];?></td>
    </tr>
    <tr>
      <td><strong><?php echo $mostrar['Isbn'] . "<br>"; echo $mostar['id_autor'] . "<br>"; echo $mostrar['id_editorial']; ?></strong> </td>
    </tr>
    <tr>
      <td><strong><?php echo $mostrar['Descripcion'] . "<br>"; echo $mostrar['Edicion'] . "<br>"; }?></strong></td>
    </tr>
  </tbody>
</table>
<form action="./Index.php">
  <label for=""><br><br>
    <input type="submit" value="Regresar">
  </label>
  </form>
</body>
</html>