<?php
    require_once("./inSessionValidation.php");
    validateSession();
    validatePermissions("all")
?>
<DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Reporte de libros</title>
    </head>
    <body>
        <table>
            <tr>
                <td><img src="../statics/EscudoEnp6.jpg" alt="P6" height="100"></td>
                <td> <h1>Coyo Lectores</h1></td>
            </tr>
        </table> <hr>
        <form action="./Index.php">
            <button type="submit">Regresar</button>
        </form>
        <form>
            <fieldset style="width:500px">
                <legend><h2>Reporte de libro</h2></legend>
                Ingresa el número ISBN del libro: <input type="text" name="id_libro" placeholder='ISBN'>
                <ul>
                    <li>Contiene material para mayores de 18 años:
                        <ul type="circle">
                            <li>Describe escenas de violencia que pueden dañar la sensibilidad del lector <input type="checkbox" name="razones[]" value="cont_viol"></li>
                            <li>Describe escenas con contenido sexual explícito <input type="checkbox" name="razones[]" value="cont_sex"></li>
                        </ul>
                    </li>
                    <li>Contiene discurso de odio <input type="checkbox" name="razones[]" value="cont_od"></li>
                    <li>Difunde desinformación <input type="checkbox" name="razones[]" value="cont_desinf"></li>
                    <li>Incita a acciones que atentan contra la integridad de una persona o un grupo de ellas <input type="checkbox" name="razones[]" value="cont_inci"></li>
                </ul>
                <br><br>
                <input type="submit" name="reporte" value="Enviar">
            </fieldset>
        </form>
    </body>
</html>