<?php

include "../conexion.php";
session_start();

$asunto = $_GET["asuntoInp"];
$contenido = $_GET["contenidoInp"];
$fecha = date("d/m/Y");
$estado = "ACTIVO";
$idUsuario = $_SESSION['usuario'];

$queryNewPost = "INSERT INTO `publicacion`(`asunto`, `contenido`, `fecha`, `estado`, `id_usuario`) 
                                   VALUES ('$asunto', '$contenido', '$fecha', '$estado', $idUsuario)";

if ($conexion->query($queryNewPost)){
  echo "<script> alert('Publicacion Creada')</script>";
  header("Location:../docente.php");
} else {
  echo "<script> alert('Error al crear Publicacion')</script>";
  header("Location:../docente.php");
}
