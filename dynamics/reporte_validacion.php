<?php
    require_once("./inSessionValidation.php");
    validateSession();
    validatePermissions("all");
    //Guarda razones del reporte (en caso de haberlo, en caso contrario redirige a la página de reporte)
    $rep = isset($_POST["razones"])?$_POST["razones"]:NULL;
    if(isset($rep))
    {
        //Envia datos concatenados en una sola cadena y los guarda en la base de datos
        include "config.php";
        $con = dataBaseConection();
        if(count($con) > 1)
        {
            $conc = implode(" ,", $rep);
        }
        else
            $conc = $rep;
        //Agregar id_usuario y id_libro 
        $incl = "INSERT INTO reporte (Motivo) VALUES ($conc)";
        $quer = mysqli_query($con, $incl);
        if($quer)
            echo "<h1>Reporte enviado exitosamente</h1>";
        else 
            echo "<h1>No se pudo enviar el reporte</h1>";  
        echo "<br><br><form action='./index.php'><input type='submit' name='regresar' value='Regresar a inicio'></form>";
    }
    else
    {
        header("location: ./reporte.php");
    }
?>