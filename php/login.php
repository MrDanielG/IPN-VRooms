<?php
include "conexion.php";

$numBoleta = $_GET["usernameInp"];
$contra = $_GET["passwordInp"];

$queryUsuario = "SELECT * FROM usuario WHERE num_boleta = $numBoleta";
$resultUsuario = $conexion->query($queryUsuario)->fetch_assoc();

$boleta = $resultUsuario['num_boleta'];
$hash = $resultUsuario['clave'];
$tipoUsr = $resultUsuario['tipo_usuario'];
$nombreUsr = $resultUsuario['nombre'];
$grupoUsr = $resultUsuario['id_grupo'];


if ($boleta == $numBoleta && password_verify($contra, $hash)) { //Decripta Contraseña y Verifica Usuario
    session_start();
    $_SESSION['usuario'] = $boleta;
    $_SESSION['nombre'] = $nombreUsr;
    $_SESSION['grupo'] = $grupoUsr;

    if ($tipoUsr == 'Docente') {
        header('Location: '. 'Docente/docente.php');
    } else {
        header('Location: '. 'alumno.php');
    }
} else {
    echo "Usuario o contra Incorrectos";
}