
<?php
include ("conexion.php");
session_start();

$link=connect();
$consulta  = "SELECT * FROM alumno";

$result = mysqli_query($link,$consulta) or die ("Error al ejecutar la consulta");;

//$row = mysqli_fetch_array($result, MYSQLI_BOTH);

//echo $row[0]." ".$row[1];
echo "<p><table border = '1' cellpanding='0' cellspacing='0'  bordercolor='#CCCCCC' align='center'>"; //SE INICIA LA CREACION DE LA TABLA
 //ENCABEZADOS
								echo "<tr>";
								echo "<td align='center'>BOLETA</td>";								
								echo "<td align='center'>NOMBRE</td>";	
								echo "<td align='center'>EMAIL</td>";
								
							//DATOS GENERADOS CON WHILE
							
							while ($row = mysqli_fetch_array($result, MYSQLI_BOTH)) //COMIENZA UN CICLO MIENTRAS LA EJECUCIÓN DE LA CONSULTA SEA VERDAD
								{ 
								echo "<tr>";
								echo "<td>$row[0]</td>";
								echo "<td>$row[nombre]</td>";
								echo "<td>$row[3]</td>";
								}

mysqli_close($link);
?>
