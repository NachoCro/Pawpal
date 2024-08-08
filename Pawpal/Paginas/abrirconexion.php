<?php
//conexión a la base de datos
$user = "root";
$pass = "";
$server = "localhost";
$db = "pawpal";

//Todas las tablas de la base de datos
$usuarios = "usuario";
$mascotas = "mascota";
$publicaciones = "publicacion";
$adopciones = "adopcion";
$reportes = "reportes";
$tipo_reporte = "tipo_reporte";
$tipo_mascota = "tipo_mascota";

$conexion = mysqli_connect($server, $user, $pass, $db) or die("Error al conectar la base de datos" . mysqli_connect_error());
?> 
