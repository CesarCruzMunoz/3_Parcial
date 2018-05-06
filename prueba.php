<?php

require 'conexion.php';
 
session_start();

$consulta = "SELECT * FROM usuarios";

if(!PDO('regist')){
	
	die('No se pudo seleccionar la base de datos: ' . mysql_error());
}

$resultado = mysql_query('SELECT name FROM usuarios');
if (!$resultado) {

    die('No se pudo consultar:' . mysql_error());
}
echo mysql_result($resultado, 2); 

mysql_close($enlace);
?>