<?php

include "../conexion.php";
session_start();

$idPublicacion = $_GET['idPub'];
$asunto = $_GET["asuntoInp"];
$contenido = $_GET["contenidoInp"];
$grupo = $_GET["grupoInp"];
$fecha = date("d/m/Y");
$estado = "ACTIVO";
$idUsuario = $_SESSION['usuario'];

$queryNewPost = "UPDATE publicacion SET asunto = '$asunto', 
                                        contenido = '$contenido', 
                                        fecha = '$fecha', 
                                        estado = '$estado', 
                                        id_grupo = '$grupo'
                                        WHERE id_publicacion = '$idPublicacion'";

if ($conexion->query($queryNewPost)){
  echo "<script> alert('Publicacion Creada')</script>";
  header("Location:publicaciones.php");
} else {
  echo "<script> alert('Error al crear Publicacion')</script>";
  header("Location:docente.php");
}
