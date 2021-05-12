<?php
    require_once("./inSessionValidation.php");
    //Se asigna a todas las variables de sesión un valor proviniente del formulario
    function assignData ()
    {
        $name=(isset($_POST["name"]) && $_POST["name"] != "")? $_POST["name"]:"Inválido";
        $apellP=(isset($_POST["apellidoPat"]) && $_POST["apellidoPat"] != "")? $_POST["apellidoPat"]:"Inválido";
        $apellM=(isset($_POST["apellidoMat"]) && $_POST["apellidoMat"] != "")? $_POST["apellidoMat"]:"Inválido";
        $id=(isset($_POST["identification"]) && $_POST["identification"] != "")? $_POST["identification"]:"Inválido";
        $birth=(isset($_POST["birth"]) && $_POST["birth"] != "")? $_POST["birth"]:"Inválido";
        $mail=(isset($_POST["mail"]) && $_POST["mail"] != "")? $_POST["mail"]:"Inválido";
        $pw=(isset($_POST["psswd"]) && $_POST["psswd"] != "")? $_POST["psswd"]:"Inválido";
        $fav=(isset($_POST["favorites"]) && $_POST["favorites"] != "")? $_POST["favorites"]:0;
        $permit=(isset($_POST["permissions"]) && $_POST["permissions"] != "")? $_POST["permissions"]:'lec';

        $_SESSION['init']=true;
        $_SESSION['nombre']=$name;
        $_SESSION['apellido']=$apellP." ".$apellM;
        $_SESSION['identificacion']=$id;
        $_SESSION['cumple']=$birth;
        $_SESSION['email']=$mail;
        $_SESSION['psswd']=$pw;
        $_SESSION['favs']=$fav;
        $_SESSION['tipoUsuario']=$permit;
    }
    
    $sessionIn=(isset ($_POST["registred"]) && $_POST["registred"] !="") ?$_POST["registred"]: false;
//En caso de haber cerrado sesión, redirige a la creación de una cuenta
if(isset($_POST["closeS"]))
{
    session_unset();
    session_destroy();
    header("location: ./iniSesion.php");
}
//Si existe una sesión activa o se ha creado una cuenta, despliega el contenido de la página
elseif($sessionIn||(isset($_SESSION["init"])))
{
    //En caso de haberse recién creado una sesión, asigna los valores de las solicitudes http a variables de sesión y redirige a la misma imágen ya con los valores en variables de sesión
    if($sessionIn)
    {
        assignData();
        header("location: ./Index.php");
    }
    //Con variables de sesión existentes, depliega los contenidos de la página
    if((isset($_SESSION["init"])))
    {    
    echo "
        <!DOCTYPE html>
            <html>
                <head>
                    <meta charset='UTF-8'>
                    <title>Coyo Lectores</title>
                </head>
                <body>
                    <table>
                        <tr>
                            <td><img src='../statics/EscudoEnp6.jpg' alt='LogoP6' height='100'></td>
                            <td><h1>Coyo Lectores ENP 6</h1></td>
                        </tr>
                    </table>
                    <table align='right'>
                        <tr>
                            <td>
                                <form action='busqueda.php'>
                                    <button type='submit'>Busqueda de libros</button>
                                </form>
                            </td>
                            <td>
                                <form action='./Index.php' method='POST'>
                                    <label for='closeS'>
                                        <button type='submit' name='closeS' value='sessionClose'>Cerrar sesión</button>
                                    </label>
                                </form>
                            </td>
                        </tr>
                    </table>
                    <hr>
                    <a href='./contentRequest.php'>&#128236 Solicitar nuevo contenido </a> <strong>|</strong>
                    <a href='./personal.php'>&#128196 Ver información personal </a> <strong>|</strong>
                    <a href='./reporte.php'>&#128681 Reportar contenido inadecuado </a> <strong>|</strong>"; 
                    if($_SESSION["tipoUsuario"]==="bibl"||$_SESSION["tipoUsuario"]==="admon")
                    {    
                        echo "<a href='./reports.php'>&#10071 Reportes de contenido </a> <strong>|</strong>";
                        echo "<a href='./form_de_nuevo_contenido.php'>&#9989 Agregar nuevo contenido </a> <strong>|</strong>";
                        echo "<a href='./form_de_nuevo_contenido.php'>&#128337 Historial de descargas </a> <strong>|</strong>";  
                    }
                    if($_SESSION["tipoUsuario"]==="admon")
                    {
                        echo "<a href='./addOrDelete.php'>&#128101 Manejo de usuarios </a> <strong>|</strong>";
                    }
                    echo "<hr>";
                    echo "<br>libros
                    <br>
                    <hr>
                    <p>Equipo de desarrollo: ''</p>
                    <p>Integrantes: </p>
                    <br>
                </body>
            </html>";
            
    }
}
//Si se trata de acceder a la vista principal sin una sesión activa o sin haber creado una sesión antes, te redirige al inicio de sesión
else
{
    header("location: ./iniSesion.php");
}
?>