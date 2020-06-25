<?php
include "conexion.php";

$nombreUsuario = $_REQUEST["nombre"];
$query = "SELECT * FROM usuario WHERE num_boleta = '$nombreUsuario'"; 

$resultado = $conexion->query($query);
if ($resultado->num_rows <= 0) {
    echo 'Usuario no Registrado';
} else {
    echo 'Usuario Registrado';
}