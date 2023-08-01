<?php
$user = "root";
$pass = "";
$server = "localhost";
$db = "pawpal";
$usuario = "usuario";
$mascotas = "mascotas";
$publicaciones = "publicaciones";
$conexion = mysqli_connect($server, $user, $pass, $db) or die("Error al conectar la base de datos" . mysqli_connect_error());
?> 