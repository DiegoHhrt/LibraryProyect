<?php
    require_once("./inSessionValidation.php");
    validateSession();
    validatePermissions("biblio");
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset='UTF-8'>
        <title>Registro e historial de descarga </title>
    </head>
    <table>
    <tr>
        <td><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/f/ff/Escudo_prepa_6_enp_6.jpg/240px-Escudo_prepa_6_enp_6.jpg" alt="P6" width="80" height="80"></td>
        <td> <h1>Coyo Lectores</h1></td>
    </tr>
    </table>
    <hr><br>

    <body>
    <table border='1'>
        <thead>
            <th colspan="3">Registro e Historial de descargas</th>
        </thead>
        <tbody>
            <tr>
                <td>Registro <br> <img src="https://us.123rf.com/450wm/sodis/sodis1711/sodis171100069/90527604-stock-vector-reading-books-library-flat-design-vector-illustration-.jpg?ver=6" width="250" height="250"<td><td>Historial <br> <img src="https://graphicriver.img.customer.envatousercontent.com/files/253501103/preview_6291076.jpg?auto=compress%2Cformat&q=80&fit=crop&crop=top&max-h=8000&max-w=590&s=3e61707a619a3ed6194eeb4b7b908c26"width="250" height="250"</td>
            </tr>


</html>