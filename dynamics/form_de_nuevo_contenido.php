<?php
    require_once("./inSessionValidation.php");
    validateSession();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Registro </title>
<!-- Sólo bibliotecarios y admin -->
</head>
 <body>
   <h1 style="font-family: Verdana; font-size: 30pt" align= 'center'> COYO LECTORES </h1>
   <hr>
  <h1 style="font-family: Fantasy; font-size: 30pt" align= 'center'> Añadir Nuevo Contenido </h1>
  <hr>
  <form action="./Index.php">
      <button type="submit">Regresar</button>
  </form>
  <table  cellpadding= '7px'>
  <tr>
  <td>
<form action="./vista_de_registro.php" method="post" enctype="multipart/form-data" name= "registro">
 <fieldset style= "width:450px">
  <!-- DATOS -->
  <legend> <h2> Datos del libro </h2> </legend>
<label> Ingrese el título del libro: <input type= "text" name="titulo"  required> </label>
  <br>
    <br>
     <label> Ingrese el autor del libro: <input type= "text" name="autor"  required> </label>
       <br>
       <br>
      <label> Ingrese el año de publicación del libro: <input type= "number" name="age"  required> </label>
    <br>
  <br>
 <label> Ingrese la editorial del libro: <input type= "text" name="editorial"  required> </label>
</td>
 <!-- ARCHIVOS -->
   <td align= 'center' colspan='3'>
     <legend> <h2> Archivos a subir: </h2> </legend>
       <br>
           <hr>
         <br>
   <label> Ingrese la portada del libro: <input type= "file" name= "portada" required> </label>
     <br>
       <br>
         <br>
     <label> Ingrese el libro: <input type= "file" name= "libro" required> </label>
   <br>
    <br>
<hr>
    </td>
  <!-- RESEÑA -->
  <td align= 'center' rowspan='6'>
    <legend> <h2> Capture la reseña del libro </h2> </legend>
      <br>
          <hr>
        <br>
        <textarea name= "reseña" rows= "22" cols= "40"> </textarea>
      </label>
  </td>
  </tr>


 <!-- GÉNEROS -->
   <tr>
      <td align= 'center' >
        <h3> Seleccione los géneros a los que pertenece el libro: </h3>
         </td>
        </tr>
       <tr>
         <td>

         </td>
    <td>
     Romance <input type= "checkbox" value="Romance">
      </td>
       <td>
         Ciencia ficción <input type= "checkbox" value="ScienceF">
       </td>
      <td>
     Cienctíficos <input type= "checkbox" value="Science">
   </td>
 </tr>
     <tr>
         <td>
       </td>
      <td>
       Novelístico <input type= "checkbox" value="Novel">
     </td>
    <td>
        Poesía <input type= "checkbox" value="Poe">
      </td>
     <td>
      Distopías <input type= "checkbox" value="Distop">
    </td>
  </tr>
      <tr>
        <td>

        </td>
       <td>
         Arte <input type= "checkbox" value="Arte">
       </td>
      <td>
          Filosofía <input type= "checkbox" value="Filo">
        </td>
       <td>
      Psicología <input type= "checkbox" value="Psico">
   </td>
 </tr>
     <tr>
       <td>

       </td>
      <td>
       Terror <input type= "checkbox" value="Terror">
     </td>
    <td>
        Históricos <input type= "checkbox" value="Histo">
      </td>
     <td>
      Mangas <input type= "checkbox" value="Manga">
  </label>
   </td>
 </tr>

 </label>
</td>
<!-- AÑADIR A LA BASE DE DATOS -->
<tr>
  <td align= 'center' colspan= "4">
    <br>
    <hr>
<input type= "submit" name= "Añadir" value= "                 Añadir libro a Coyo Lectores                 ">
</fieldset>
</form>
</td>
</tr>

</table>
</body>
</html>
