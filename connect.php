<?php

$conexion = mysqli_connect("localhost", "root", "", "web");

//Recibimos datos del html
$correo = $_POST["correo"];
$clave = $_POST["pass1"];
$clave2 = $_POST["pass2"];


if ($clave==$clave2){
	$insertar = "INSERT INTO usuarios (correo, password) VALUES ('$correo', '$clave')";

	//guardar en BD
	$resultado = mysqli_query($conexion, $insertar);

}
else{
	
}

//Cerrar conexion
mysqli_close($conexion)

?>
