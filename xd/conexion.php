
<?php


/*FECHA DE CREACIÓN: -------------
ORGANIZACIÓN: ------
NOMBRE DEL/LOS CREADORES: ----------
LENGUAJES UTILIZADOS: --------
NUMERO DE CÓDIGO  / DE UN TOTAL: ---/---
SECCIÓN A LA QUE PERTENECE EL CÓDIGO: -----
DESCRIPCIÓN: QUÉ ES LO QUE HACE EL CÓDIGO O PARA QUE SIRVE COMO EJEMPLO: PERMITE REALIZAR LA CONEXIÓN A LA BASE DE DATOS, DE LO CONTRARIO EMITE ERROR.*/

function connect()
{
$enlace = mysqli_connect("127.0.0.1", "femat", "fematon", "db1");

if (!$enlace) {
    echo "Error: No se pudo conectar a MySQL." . PHP_EOL; // IMPRIME MENSAJE DE ERROR PERSONALIZADO  Y SE TERMINA LA LÍNEA
    echo "errno de depuración: " . mysqli_connect_errno() . PHP_EOL;// IDENTIFICA EL ERROR CON CÓDIGO O NOMBRE
    exit;
	
}
return $enlace;
}
?>
