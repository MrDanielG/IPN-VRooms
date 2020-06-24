<?php

include "../conexion.php";
session_start();

$asunto = $_GET["asuntoInp"];
$contenido = $_GET["contenidoInp"];
$grupo = $_GET["grupoInp"];
$fecha = date("d/m/Y");
$estado = "ACTIVO";
$idUsuario = $_SESSION['usuario'];

$queryNewPost = "INSERT INTO `publicacion`(`asunto`, `contenido`, `fecha`, `estado`, `num_boleta`, `id_grupo`) 
                                   VALUES ('$asunto', '$contenido', '$fecha', '$estado', $idUsuario, '$grupo')";

if ($conexion->query($queryNewPost)){
  echo "<script> alert('Publicacion Creada')</script>";
  header("Location:publicaciones.php");
} else {
  echo "<script> alert('Error al crear Publicacion')</script>";
  header("Location:docente.php");
}
