<?php
    session_start();
    //En la validación poner como if(isset($_SESSION["(nombre de sesion)"]) y se muestra todo lo de abajo, en otro caso header("location: ./index.php"))
?>
<DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Reporte de libros</title>
    </head>
    <body>
        <form>
            <fieldset style="width:500px">
                <legend><h2>Reporte de libro</h2></legend>
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