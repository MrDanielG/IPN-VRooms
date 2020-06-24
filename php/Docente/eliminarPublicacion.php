<?php

session_start();
include "../conexion.php";

$idPublicacion = $_GET['idPub'];

$queryDeletePublicacion = "DELETE FROM `publicacion` WHERE `id_publicacion` = $idPublicacion";

if ($conexion->query($queryDeletePublicacion)){
    echo "<script> alert('Horario Eliminado')</script>";
    header("Location:publicaciones.php");
  } else {
    echo "<script> alert('Error al Eliminar Horario')</script>";
    header("Location:docente.php");
  }