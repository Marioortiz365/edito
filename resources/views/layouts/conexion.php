<?php
    $server = "localhost";
    $user = "root";
    $pass ="";
    $db = "publicaciones";

    $conexion = mysqli_connect($server, $user, $pass, $db)
        or die("Conexion fallida");

    mysqli_set_charset($conexion,"utf8");
?>
