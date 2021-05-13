<?php
    require_once("./inSessionValidation.php");
    require_once("./config.php");
    //registra la info del nuevo usuario en la base de datos
    $rowcount=0;
    $rowcount2=0;
    $sessionEx=0;
    $sessionIn=0;
    function dbRegister()
    {
        $con=databaseConection();
        $checkExistsId="SELECT Id_usuario FROM usuario WHERE Id_usuario=".$_SESSION["identificacion"]."";    
        $checkExistsMail="SELECT Correo FROM usuario WHERE Correo='".$_SESSION['email']."'";
        
        if ($r=mysqli_query($con,$checkExistsId))
        {
            $rowcount=mysqli_num_rows($r);
        }
        if ($r2=mysqli_query($con,$checkExistsMail))
        {
            $rowcount2=mysqli_num_rows($r2);
        }
        if($rowcount>0||$rowcount2>0)
        {
            header("location: ./gotAccount.php");
            destroySession();
        }
        else
        {

            if($_SESSION["tipoUsuario"]=="lec")
            {
                $tUser="Lector";
            }
            elseif($_SESSION["tipoUsuario"]=="bibl")
            {
                $tUser="Bibliotecario";
            }
            elseif($_SESSION["tipoUsuario"]=="admon")
            {
                $tUser="Admin";
            }
            $insertUser="INSERT INTO usuario (Id_Usuario, Tipo, Nombre, Nacimiento, Correo, Psswd) VALUES ('".$_SESSION['identificacion']."', '".$tUser."', '".$_SESSION['nombre']." ".$_SESSION['apellido']."','".$_SESSION['cumple']."','".$_SESSION['email']."','".$_SESSION['psswd']."')";
            
            $state=mysqli_query($con, $insertUser);
            if($state)
            {
                header("location: ./Index.php");
                exit();
            }
            else
            {
                echo "<h1>Tu registro ha fallado por alguna razón, por favor verfica que tu información sea correcta</h1>";
                echo "<a href='./accountCreation.php'>Regresar a creación de cuenta</a>";  
                destroySession();
                exit();
            }
        }
        
        exit();
    }
    //Se asigna a todas las variables de sesión un valor proviniente del formulario
    function assignData()
    {
        if($sessionIn)
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
            $_SESSION['full']=$name." ".$apellP." ".$apellM;
            $_SESSION['nombre']=$name;
            $_SESSION['aPaterno']=$apellP;
            $_SESSION['aMaterno']=$apellM;
            $_SESSION['apellido']=$apellP." ".$apellM;
            $_SESSION['identificacion']=$id;
            $_SESSION['cumple']=$birth;
            $_SESSION['email']=$mail;
            $_SESSION['psswd']=$pw;
            $_SESSION['favs']=$fav;
            $_SESSION['tipoUsuario']=$permit;

            dbRegister();
        }
        elseif($sessionEx)
        {
            $_SESSION['email']=$mail;
            $_SESSION['psswd']=$pw;
            $mail=(isset($_POST["mail"]) && $_POST["mail"] != "")? $_POST["mail"]:"Inválido";
            $pw=(isset($_POST["psswd"]) && $_POST["psswd"] != "")? $_POST["psswd"]:"Inválido";
            $cone=databaseConection();

            $checkExistsMail="SELECT Correo FROM usuario WHERE Correo='".$_SESSION['email']."'";
            $verfyPw="SELECT Psswd FROM usuario WHERE Psswd='".$_SESSION['psswd']."'";
            if ($r=mysqli_query($con,$checkExistsMail))
            {
                $rowcount=mysqli_num_rows($r);
            }
            if ($r2=mysqli_query($con,$checkExistsMail))
            {
                $rowcount2=mysqli_num_rows($r2);
            }
            if($rowcount2>0&&$rowcount>0)
            {
                $dataToSession="SELECT * FROM usuario WHERE Correo='".$_SESSION['email']."'";
                $r=mysqli_query($con,$dataToSession);
                $count=mysqli_fetch_array($r, MYSQLI_NUM);
                
                $_SESSION['init']=true;
                $_SESSION['nombre']=$count["Nombre"];
                $_SESSION['identificacion']=$count["Id_usuario"];
                $_SESSION['cumple']=$count["Nacimiento"];
                $_SESSION['favs']=0;

                if($count["Tipo"]=="Lector")
                {
                    $_SESSION['tipoUsuario']='lec';
                }
                elseif($count["Tipo"]=="Bibliotecario")
                {
                    $_SESSION['tipoUsuario']='bibl';
                }
                elseif($count["Tipo"]=="Admin")
                {
                    $_SESSION['tipoUsuario']='admon';
                }
            }
            else
            {
                echo "<h1>Tu registro ha fallado por alguna razón, por favor verfica que tu información sea correcta</h1>";
                echo "<a href='./accountCreation.php'>Regresar a creación de cuenta</a>";  
                exit();
                destroySession();
            }
        }
    }
    
    $sessionIn=(isset ($_POST["registred"]) && $_POST["registred"] !="") ?$_POST["registred"]: false;
    $sessionEx=(isset ($_POST["ini_sesion"]) && $_POST["ini_sesion"] !="") ?$_POST["ini_sesion"]: false;
//En caso de haber cerrado sesión, redirige a la creación de una cuenta
if(isset($_POST["closeS"]))
{
    destroySession();
    header("location: ./iniSesion.php");
}
//Si existe una sesión activa o se ha creado una cuenta, despliega el contenido de la página
elseif($sessionIn||(isset($_SESSION["init"])))
{
    //En caso de haberse recién creado una sesión o iniciado una existente, asigna los valores de las solicitudes http a variables de sesión y redirige a la misma imágen ya con los valores en variables de sesión
    if($sessionIn||$sessionEx)
    {
        assignData();
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
                        echo "<a href='./codigo.php'>&#128337 Historial de descargas </a> <strong>|</strong>";  
                    }
                    if($_SESSION["tipoUsuario"]==="admon")
                    {
                        echo "<a href='./addOrDelete.php'>&#128101 Manejo de usuarios </a> <strong>|</strong>";
                    }
                    echo "<hr>";
                    echo "<br>
                    <table align='center'>
                        <tbody>
                            <tr>
                                <td>Muestra de libros</td>
                                <td>Muestra de libros</td>
                                <td>Muestra de libros</td>
                                <td>Muestra de libros</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>Muestra de libros</td>
                                <td>Muestra de libros</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Muestra de libros</td>
                                <td>Muestra de libros</td>
                                <td>Muestra de libros</td>
                                <td>Muestra de libros</td>    
                            </tr>
                        </tbody>
                    </table>
                    <br>
                    <hr>
                    <p>Equipo de desarrollo: 'Kiki's Library'</p>
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