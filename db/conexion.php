<?php
    $host = 'localhost';
    $usuario = 'root';
    $contraseña = '';
    $basedatos = 'sabores_delicias';
    
    $conexion = new mysqli($host,$usuario,$contraseña,$basedatos);
    
    if ($conexion->connect_errno) {
        echo "fallos en conexion";
        exit();
    }
?>
