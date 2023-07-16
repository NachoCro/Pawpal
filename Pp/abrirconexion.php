<?php
    function conectar(){
        $user="root";
        $pass="";
        $server="localhost";
        $db="Pawpal";
        $con=mysqli_connect($server,$user,$pass) or die ("Error al conectar la base de datos".mysqli_error());

        return $con;
    }

    $con=conectar();
?>    
