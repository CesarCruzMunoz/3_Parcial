<?php

require 'conexion.php';

$correo = $_POST["correo"];
$clave = $_POST["pass1"];
$clave2 = $_POST["pass2"];

if ($clave==$clave2){
	$insertar = "INSERT INTO usuarios (email, password) VALUES ('$correo', '$clave')";
	//guardar en BD
	$resultado = mysqli_query($conexion, $insertar);

	header('location: login.php');
}
else{
	header('location: registro.php');
}
//Cerrar conexion
mysqli_close($conexion)

?>