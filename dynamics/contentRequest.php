<!DOCTYPE html>
<html>
    <head>
        <meta charset='UTF-8'>
        <title>Solicitud de contenido</title>
    </head>
    <body>
        <form action='./Index.php'>
            <fieldset>
                <legend>Solicitud de integración de nuevo material</legend>
                    <p>Solicitante: </p>
                    <label for='name'>
                        Nombre: <input type='text' name='name' placeholder='Nombre(s)'>
                    </label>
                    <br><br>
                    <label for='apellidoPat'>
                        Apellido paterno: <input type='text' name='apellidoPat' placeholder='Apellido paterno'>
                    </label>
                    <br><br>
                    <label for='apellidoMat'>
                        Apellido Materno: <input type='text' name='apellidoMat' placeholder='Apellido materno'>
                    </label>
                    <br><br>
                    <label for='mail'>
                        Correo institucional: <input type='email' name='mail' placeholder='correo@comunidad.unam.mx'>
                    </label>
                    <br><br>
                    <p>Material que solicita: </p>
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