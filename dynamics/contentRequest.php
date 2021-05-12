<?php
    require_once("./inSessionValidation.php");
    validateSession();
    validatePermissions("all");
echo"
<!DOCTYPE html>
<html>
    <head>
        <meta charset='UTF-8'>
        <title>Solicitud de contenido</title>
    </head>
    <body>
        <table>
            <tr>
                <td><img src='../statics/EscudoEnp6.jpg' alt='P6' height='100'></td>
                <td> <h1>Coyo Lectores</h1></td>
            </tr>
        </table> <hr>
        <form action='./Index.php'>
            <button type='submit'>Regresar</button>
        </form>
        <form action='./Index.php'>
            <fieldset style= 'width:450px'>
                <legend>Solicitud de integración de nuevo material</legend>
                    <p>Solicitante: &#128100</p>
            

                    
                    <label for='name'>
                        Nombre: <input type='text' name='name' value='".$_SESSION["nombre"]."' disabled>
                    </label>
                    <br><br>
                    <label for='apellidoPat'>
                        Apellido paterno: <input type='text' name='apellidoPat' value='".$_SESSION['aPaterno']."' disabled>
                    </label>
                    <br><br>
                    <label for='apellidoMat'>
                        Apellido Materno: <input type='text' name='apellidoMat' value='".$_SESSION["aMaterno"]."' disabled>
                    </label>
                    <br><br>
                    <label for='mail'>
                        Correo institucional: <input type='email' name='mail' value='".$_SESSION["email"]."' disabled>
                    </label>
                    
                    <label for='id'>
                        <input type='hidden' name='id' value='".$_SESSION["identificacion"]."'>
                    </label>";
                    ?>
                    <br><br>
                    <p>Material que solicita: &#128218</p>
                    <label for='bookName'>
                        Título del libro: <input type='text' name='bookName' placeholder='Título' required>
                    </label>
                    <br><br>
                    <label for='autor'>
                        Autor principal: <input type='text' name='autor' placeholder='Autor/a' required>
                    </label>
                    <br><br>
                    <label for='year'>
                        Año de publicación: <input type='text' name='year' placeholder='Año' required>
                    </label>
                    <br><br>
                    <label for='edition'>
                        Edición: <input type='text' name='edition' placeholder='Edición'>
                    </label>
                    <br><br>
                    <label for='editorial'>
                        Editorial: <input type='text' name='editorial' placeholder='Editorial'>
                    </label>
                    <br><br>
                    <button type='submit'>Solicitar material</button>
                    <button type='reset'>Limpiar campos</button>
            </fieldset>
        </form>
    </body>
</html>