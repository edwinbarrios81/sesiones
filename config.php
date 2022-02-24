<?php

$servidor = "localhost";
$nombreusuario = "root";
$password = "2141647";

$conexion = new mysqli ($servidor, $nombreusuario, $password);

if($conexion-> connect_error) {
    die ("conexoin fallida: ". $conexion-> connect_error);
}

echo "conexion exitosa.";
?>