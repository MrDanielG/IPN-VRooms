<?php

session_start();
include "../conexion.php";

$idHorario = $_GET['idHorario'];

$queryDeleteHorario = "DELETE FROM `horario` WHERE `id_horario` = $idHorario";

if ($conexion->query($queryDeleteHorario)){
    echo "<script> alert('Horario Eliminado')</script>";
    header("Location:horarios.php");
  } else {
    echo "<script> alert('Error al Eliminar Horario')</script>";
    header("Location:docente.php");
  }