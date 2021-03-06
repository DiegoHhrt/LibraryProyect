<?php
require_once("./inSessionValidation.php");
//Antes de crear una cuenta, te permite seleccionar qué tipo de usuario es el que requieres.
function permitsSelection()
{
    echo"
        <form action='./accountCreation.php' method='POST'>
            <fieldset>
                <h2>Selecciona tu tipo de cuenta:</h2>
                <br>
                <label for='tipo'>
                    <img src='../statics/defaultStudent.png' alt='Imagen estudiante' width='150'>
                    <button type='submit' name='tipo' value='lector'>Lector</button>
                    <img src='../statics/defaultLibrarian.png' alt='Imagen bibliotecario' width='150'>
                    <button type='submit' name='tipo' value='bibliotec'>Bibliotecario</button>
                    <img src='../statics/defaultAdmin.jpg' alt='Imagen admin' width='150'>
                    <button type='submit' name='tipo' value='admin'>Administrador</button>
                </label>
            </fieldset>
        </form>
        ¿Ya tienes una cuenta? <a href='iniSesion.php'> Inicia sesión aquí</a>";
}

validateNotSession();
    $accTipe=(isset ($_POST["tipo"]) && $_POST["tipo"] !="") ?$_POST["tipo"]: false;
    echo "
    <!DOCTYPE html>
        <html>
            <head>
                <meta charset='UTF-8'>
                <title>Creación de cuenta</title>
            </head>
            <body>
            <table>
            <tr>
                <td><img src='../statics/EscudoEnp6.jpg' alt='P6' height='100'></td>
                <td> <h1>Coyo Lectores</h1></td>
            </tr>
            </table> <hr>";
            //Si no se ha seleccionado un tipo de usuario, debes elegir uno
            if($accTipe===false)
            {
                permitsSelection();
            }
            //Una vez elegido el tipo de usuario, se permite rellenar el formulario de creación de cuenta
            else
            {
                echo"
                <form action='./Index.php' method='POST'>
                    <fieldset>
                        <legend>Registro para la biblioteca</legend>
                        <p>Por favor, ingresa tu información de registro &#128214</p>
                        <label for='name'>
                            Nombre: <input type='text' name='name' placeholder='Nombre(s)' required>
                        </label>
                        <br><br>
                        <label for='apellidoPat'>
                            Apellido paterno: <input type='text' name='apellidoPat' placeholder='Apellido paterno' required>
                        </label>
                        <br><br>
                        <label for='apellidoMat'>
                            Apellido Materno: <input type='text' name='apellidoMat' placeholder='Apellido materno' required>
                        </label>
                        <br><br>
                        <label for='identification'>";
                            if($accTipe=="lector")
                            {
                                echo "Número de cuenta/RFC: <input type='text' name='identification' minlength='9' maxlength='14' required>";
                            }
                            elseif($accTipe=="admin"||$accTipe=="bibliotec")
                            {
                                echo "RFC: <input type='text' name='identification' minlength='12' maxlength='14' required>";
                            }
                        echo"
                        </label>
                        <br><br>
                        <label for='mail'>
                            Correo institucional: <input type='email' name='mail' placeholder='correo@comunidad.unam.mx' required>
                        </label>
                        <br><br>
                        <label for='birth'>
                            Fecha de nacimiento: <input type='date' name='birth' min='1920-01-01' max='".date('Y-m-d')."' required>
                        </label>
                        <br><br>
                        <label for='psswd'>
                            Nueva contraseña: <input type='password' name='psswd' required>
                        </label>
                        <label for='favorites'>
                            <input type='hidden' name='favorites' value='0'>
                        </label>
                        <label for='permissions'>";
                            if($accTipe=="lector")
                            {
                                echo "<input type='hidden' name='permissions' value='lec'>";
                            }
                            elseif($accTipe=="bibliotec")
                            {
                                echo "<input type='hidden' name='permissions' value='bibl'>";
                            }
                            elseif($accTipe=="admin")
                            {
                                echo "<input type='hidden' name='permissions' value='admon'>";
                            }
                        echo "</label>
                        <br><br>
                        <label for='registred'>
                            <button type='submit' value='register' name='registred'>Registrarse</button>
                        </label>
                        <button type='reset'>Limpiar la información de los campos</button>
                    </fieldset>
                </form>";     
            }   
            echo"
            </body>
        </html>";

?>