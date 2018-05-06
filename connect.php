<?php
<<<<<<< HEAD

$conexion = mysqli_connect("localhost", "root", "", "web");

=======
require 'conexion.php';
>>>>>>> 87400c9... Separación del JS del registro ya no lo muevas ¬¬#
//Recibimos datos del html
$correo = $_POST["correo"];
$clave = $_POST["pass1"];
$clave2 = $_POST["pass2"];

<<<<<<< HEAD

if ($clave==$clave2){
	$insertar = "INSERT INTO usuarios (correo, password) VALUES ('$correo', '$clave')";

	//guardar en BD
	$resultado = mysqli_query($conexion, $insertar);

=======
$consulta = "SELECT * FROM usuarios WHERE correo='$correo'";

if(!($result= $conexion->query($consulta))){
	 $conexion-> close();
	 die();
}

if($result->num_rows === 0){
	$result-> free();//Liberamos lo que tiene la variable result
	if ($clave==$clave2){
		$insertar = "INSERT INTO usuarios (correo, password) VALUES ('$correo', '$clave')";
		//guardar en BD
		$resultado = mysqli_query($conexion, $insertar);
		mysqli_close($conexion);
		header('location: login.php');
	}
	else{
		mysqli_close($conexion);
		header('location: registro.php');
	}
>>>>>>> 87400c9... Separación del JS del registro ya no lo muevas ¬¬#
}
else{
	//Si no mandamos a registrar de nuevo
	$result-> free();//Liberamos lo que tiene la variable result
	$conexion-> close();
	header('location: registro.php');
	die();
}

<<<<<<< HEAD
=======

>>>>>>> 87400c9... Separación del JS del registro ya no lo muevas ¬¬#
//Cerrar conexion

?>