<?php
include "conexion.php";

$newBoleta = $_GET["newUsername"];
$newContra = $_GET["newPassword"];
$newNombre = $_GET["nombreUsr"];
$newPaterno = $_GET["paternoUsr"];
$newMaterno = $_GET["maternoUsr"];
$newCorreo = $_GET["correoUsr"];
$newTipoUsr = $_GET["tipoUsr"];
$newGrupoUsr = $_GET["grupoUsr"];

$hash = password_hash($newContra, PASSWORD_DEFAULT); //Encripta Contraseña

$queryNewUser = "INSERT INTO usuario(num_boleta, clave, tipo_usuario, id_grupo)
                              VALUES($newBoleta, '$hash', '$newTipoUsr', '$newGrupoUsr')"; 

$queryNewPersona = "INSERT INTO persona(nombre, paterno, materno, correo, num_boleta) 
                            VALUES('$newNombre', '$newPaterno', '$newMaterno', '$newCorreo', $newBoleta)";

if ($conexion->query($queryNewUser) === TRUE && $conexion->query($queryNewPersona) === TRUE) {
    header('Location: '. '../index.html');
} else {
    echo "Error al crear Usuario " . $conexion->error;
}