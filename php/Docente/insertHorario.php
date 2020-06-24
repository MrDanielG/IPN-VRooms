<?php

include "../conexion.php";
session_start();

$idUsuario = $_SESSION['usuario'];
$tituloImg = $_POST["tituloInp"];

//Obtenemos Info de Archivo
$file = $_FILES["file"];
$fileName = $_FILES["file"]["name"];
$fileTmpName = $_FILES["file"]["tmp_name"];
$fileType = $_FILES["file"]["type"];
$fileError = $_FILES["file"]["error"];

$fileExt = explode('.',$fileName);
$fileActualExt = strtolower(end($fileExt));

$allowed = ['jpg', 'jpeg', 'png'];

if (in_array($fileActualExt, $allowed)) { //Verifica si es Imagen
    if($fileError === 0){
        $fileNewName = uniqid('', true).".".$fileActualExt; //Crea un nombre unico para el archivo
        $fileDestination = '../../img/horarios/' . $fileNewName;
        move_uploaded_file($fileTmpName, $fileDestination);

        $queryHorario = "INSERT INTO `horario`(`titulo`, `img`, `num_boleta`) 
                                       VALUES ('$tituloImg','$fileNewName',$idUsuario)";

        if ($conexion->query($queryHorario)){
            echo "Horario Correctamente Creado";
            header("Location:horarios.php");
        } else {
            echo "Error al subir el Horario";
            header("Location:docente.php");
        }
    } else {
        echo "Hubo un error al subir tu horario!";
    }
} else {
    echo "No puedes subir archivos que no sean imagenes";
}