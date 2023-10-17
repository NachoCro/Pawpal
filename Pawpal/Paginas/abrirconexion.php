<?php
//conexión a la base de datos
$user = "root";
$pass = "";
$server = "localhost";
$db = "pawpal";

//Todas las tablas de la base de datos
$usuarios = "usuarios";
$mascotas = "mascotas";
$publicaciones = "publicaciones";
$adopciones = "adopciones";
$razas = "razas";
$reportes = "reportes";
$animales = "animales";

$conexion = mysqli_connect($server, $user, $pass, $db) or die("Error al conectar la base de datos" . mysqli_connect_error());
?> 