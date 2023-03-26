<?php 

// Variables

    $user = "localhost";
    $nombre_usuario = "root";
    $password = "";
    $nombre_bd = "escuela_db";

    // Conexion a base de datos

    $conexion = mysqli_connect($user, $nombre_usuario, $password, $nombre_bd);

    /*if($conexion){
        echo 'Coneccion a la B.D exitosa';
    } else {
        echo 'Conexion erronea';
    }*/


?>