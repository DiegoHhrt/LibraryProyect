<!DOCTYPE html>
<html>
    <head>
        <meta charset='UTF-8'>
        <title>Creación de cuenta</title>
    </head>
    <body>
        <form action='Index.php' method='POST'>
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
                <label for='identification'>
                    Número de cuenta: <input type='text' name='identification' required>
                </label>
                <br><br>
                <label for='mail'>
                    Correo institucional: <input type='email' name='mail' placeholder='correo@comunidad.unam.mx'>
                </label>
                <br><br>
                <label for='range'>
                    <p>Seleccione su tipo de cuenta</p>
                    Lector (docente o alumno): <input type='radio' name='range' value='reader' required>
                    Bibliotecario: <input type='radio' name='range' value='libraryan' required>
                    Administrador: <input type='radio' name='range' value='admin' required>
                </label>
                <br><br>
                <label for='birth'>
                    Fecha de nacimiento: <input type='date' name='birth' required>
                </label>
                <br><br>
                <label for='psswd'>
                    Nueva contraseña: <input type='password' name='psswd'>
                </label>
                <br><br>
                <label for='favorites'>
                    <input type='hidden' name='favorites' value='0'>
                </label>
                <br><br>
                <button type='submit' value='register'>Registrarse</button>
                <button type='reset'>Limpiar la información de los campos</button>
            </fieldset>
        </form>        
    </body>
</html>