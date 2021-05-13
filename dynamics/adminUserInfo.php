<?php
    require_once('./inSessionValidation.php');
    require_once('./config.php');
    validateSession();
    validatePermissions('Admin');
    $stop=(isset($_POST['user']) && $_POST['user'] != '')? $_POST['user']:'0';
echo "
<!DOCTYPE html>
<html>
    <head>
        <meta charset='UTF-8'>
        <title>Usuarios registrados</title>
    </head>
    <body>";
        $con=dataBaseConection();
        $usersToShow='SELECT Id_usuario FROM usuario';
        $preUsers=mysqli_query($con, $usersToShow);
        $m=0;
        while($fullUsers=mysqli_fetch_array($preUsers, MYSQLI_ASSOC))
        {           
            if($stop==$m)
            {
                $select=$fullUsers;
            }
            
            $m++;
        }
        $selectedUser=$select['Id_usuario'];
        $dataRequest="SELECT * FROM usuario WHERE Id_usuario='".$selectedUser."'";

        $preSelecUser=mysqli_query($con, $dataRequest);
        $fullSelecUser=mysqli_fetch_array($preSelecUser, MYSQLI_ASSOC);

        echo "
        <form action='./addOrDelete.php'>
            <button type='submit'>Regresar</button>
        </form>
        <fieldset style= 'width:450px'>
            <legend><h3>Datos del usuario</h3></legend>";

            if($fullSelecUser["Tipo"]=='Lector')
            {
                $tipoUser='Lector';
                $tipoId='Numero de cuenta/RFC';
            }
            elseif($fullSelecUser["Tipo"]=='Bibliotecario')
            {
                $tipoUser='Bibliotecario';
                $tipoId='RFC';
            }
            elseif($fullSelecUser["Tipo"]=='Admin')
            {
                $tipoUser='Administrador';
                $tipoId='RFC';
            }

            echo '<strong>' .'Nombre:'.'</strong>'.$fullSelecUser["Nombre"].'<br>' . '<br>';
            echo '<strong>' .''.$tipoId.': '.'</strong>'.$fullSelecUser["Id_usuario"].'<br>'. '<br>';
            echo '<strong>' .'Correo institucional: '.'</strong>'.$fullSelecUser["Correo"].'<br>'. '<br>';
            echo '<strong>' .'Tipo de cuenta: '.'</strong>'.$tipoUser.'<br>'. '<br>';
            echo '<strong>' .'Fecha de nacimiento: '.'</strong>'.$fullSelecUser["Nacimiento"].'<br>'. '<br>';
            //echo '<strong>' .'Contraseña: '.'</strong>'.$_SESSION['psswd'].'<br>'. '<br>';
        
            echo"<form action='addOrDelete.php' method='POST'>
            <label for='borrar'>
                <input type='submit' name='borrar' value='Eliminar cuenta'>
            </label>
            <label for='deluser'>
                <input type='hidden' name='delUser' value='".$fullSelecUser["Id_usuario"]."'>
            </label>
            </form>
        </fieldset>            
    </body>
</html>";
?>