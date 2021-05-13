# COYOLECTORES
## Equipo "Kiki's Library"

* Mariela Eunice Vazquez Castillo
* Carlos Emiliano García Mojica
* Gerardo Cervantes Villegas
* Vianidxi Ximena Cruz Fuentes
* Diego Osmar Hernández Huerta

## Guia de instalación 
    - Si no tienes instalado Xammp, dirigete a https://www.apachefriends.org/es/index.html. Instala la versión 7.4.16
    - En tu linea de comandos dirigete a una ubicación en donde quieras tu copia del repositorio. En Windows, esta ubícación tiene que encontrarse en Xammp\htdocs\
    - Ejecuta el comando `git clone https://github.com/DiegoHhrt/LibraryProyect.git`

## Configuración del proyecto

1. Abre tu aplicación de Xampp y enciede los servidores _mysql y Apache_
2. Dirígete a la linea de comandos de windows y entra a la ubicación xampp\mysql\bin 
3. Ejecuta el comando `mysql -u root`
4. Dentro de la interfaz de maríaDB, ejecuta el comando `CREATE DATABASE Biblioteca CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;`
5. ¿Recuerdas dónde clonaste el repositorio?
    * Dirigete a la ubicación del repositorio, en la carpeta _documentation_ se encuentra un archivo llamado _create_db.sql_
    * Copia la ubicación de este archivo 
    * Regresando a la interfaz de mariaDB, corre el comando `Source *Direccion de tu archivo sql*` *No olvides añadir el nombre del archivo después de la ruta*
6. La consola imprimirá una advertencia seguido de varias lineas que indican que no se han afectado filas

7. Una vez completada la configuración de la base de datos, en tu navegador: 
    * Escribe la dirección `http://localhost/libraryProject/LibraryProyect/dynamics/`

***Estás list@ para usar Coyo Lectores***

## Características del proyecto
  
  - Permite que crees una cuenta según tus necesidades.
  
  - Genera un registro para que puedas iniciar sesión cuantas veces quieras.

  - Si cometiste algun error al momento  de realizar tu registro permite que modifiques tu informacion.
  
  - Te permite ver en un inicio una variedad aleatoria de libros.
  
  - Si alguno de estos libros te llama la atención puedes agregarlo a tus favoritos para que cuando vuelvas a iniciar sesión lo puedas leer cuantas veces quieras.
  
  - La logistica de la biblioteca digital es fácil de comprender.
  
  - El diseño es intuitivo.

  - Si al momento de que estes consultando algun libro encuentras material inadecuado, puedes generar un reporte y sera atendido.
  
  - Si no encuentras el libro que estas busando, puedes llenar un formulario para solicitar material nuevo que sera agregado más adelante.
   
  - Si cuentas con permiso, puedes visualizar el historial de descargas y registros de todos los usuarios que ingresen así como los reportes que se manden acerca de contenido inadecuado. Además de si se cree conveniente eliminar usuarios.

  - La estructura de la página es llamativa.
  
  - Cuenta con diversas vistas que permiten una mejor distribución del contenido.
  
  - La página permite la interacción.
  
  - Es segura respecto al manejo de sesiones.

  - Si decides ya no continuar en la biblioteca puedes eliminar tu cuenta y así todo registro tuyo dentro de esta.

## Comentarios adicionales a su proyecto 

  - Al ser un medio completamente digital para acceder a la biblioteca, los problemas de una biblioteca convencional como el extravío de libros o afecciones a los mismos es nulo, pese a ello hay la posibilidad de entablar conversaciones con los administradores y bibliotecarios para llegar a la resolución de algún problema que se llegara a presentar.
  
  - Trata de solventar la brecha informacional a través del acceso y la difusión de contenidos digitales, por ello se ha buscado tener la mayor organización posible al momento de buscar estos medios.