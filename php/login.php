<?php
include "conexion.php";

$numBoleta = $_GET["usernameInp"];
$contra = $_GET["passwordInp"];

$queryUsername = "SELECT num_boleta FROM usuario WHERE num_boleta = $numBoleta"; 
$queryPassword = "SELECT clave FROM usuario WHERE num_boleta =  $numBoleta";
$queryTipoUsr = "SELECT tipo_usuario FROM usuario WHERE num_boleta =  $numBoleta";
$queryNombreUsr = "SELECT nombre FROM persona WHERE num_boleta =  $numBoleta";

$resultUsername = $conexion->query($queryUsername)->fetch_assoc();
$resultPassword = $conexion->query($queryPassword)->fetch_assoc();
$resultTipo = $conexion->query($queryTipoUsr)->fetch_assoc();
$resultNombre = $conexion->query($queryNombreUsr)->fetch_assoc();

$boleta = $resultUsername['num_boleta'];
$hash = $resultPassword['clave'];
$tipoUsr = $resultTipo['tipo_usuario'];
$nombreUsr = $resultNombre['nombre'];

if ($boleta == $numBoleta && password_verify($contra, $hash)) { //Decripta Contraseña
    session_start();
    $_SESSION['usuario'] = $boleta;
    $_SESSION['nombre'] = $nombreUsr;

    if ($tipoUsr == 'Docente') {
        header('Location: '. 'docente.php');
    } else {
        header('Location: '. 'alumno.php');
    }
} else {
    echo "Usuario o contra Incorrectos";
}