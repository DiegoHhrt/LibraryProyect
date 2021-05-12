<?php
  require_once("./inSessionValidation.php");
  validateSession();
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
      <td><strong>Titulo:</strong> El principito</td>
    </tr>
    <tr>
      <td><strong>ID del libro:</strong> Salamandra</td>
    </tr>
    <tr>
      <td><strong>Datos extra:</strong> Lo que sea</td>
    </tr>
  </tbody>
</table>
<form action="">
  <label for=""><br><br>
    <input type="submit" value="Regresar">
  </label>
  </form>
</body>
</html>