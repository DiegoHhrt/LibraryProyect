<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Document</title>
    </head>
    <body>
        <table>
            <tr>
                <td><img src="../statics/EscudoEnp6.jpg" alt="P6" height="100"></td>
                <td> <h1>Coyo Lectores</h1></td>
            </tr>
        </table><hr>
        <form action="./Index.php">
            <button type="submit">Regresar</button>
        </form>
        <table border='1' widht='300'>
            <thead>
                <tr>
                    <th colspan='2'>Busqueda de libros</th>
                </tr>    
            </thead>
            <tbody>
                <form action="./libro.php">
                <tr>
                    <td colspan=2>Filtrar por:</td>
                </tr>
                <tr>
                    <label for="filter" required>
                        <td>
                            Categoría <input type="checkbox" name="filter[]" value=''>
                            Año <input type="checkbox" name="filter[]" value=''>
                        </td>
                        <td>
                            Editorial <input type="checkbox" name="filter[]" value=''>
                            Autor <input type="checkbox" name="filter[]" value=''> 
                        </td>
                    </label>
                </tr>
                <tr>
                    <td><button type="submit">Buscar</button></td>
                </tr>
                </form>
            </tbody>
        </table>
    </body>
</html>