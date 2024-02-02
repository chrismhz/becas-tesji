<?php

    $servidor = "localhost";
    $usuario = "root";
    $contrasenia = "";
    $baseDatos = "becas_c";

    $conexion = mysqli_connect(
        $servidor,
        $usuario,
        $contrasenia,
        $baseDatos   
    ) OR DIE("Problemas al conectar con el servidor");
/*
    if(!$conexion){
        echo "PROBLEMA AL REALIZAR LA CONEXION";
    }
*/
?>