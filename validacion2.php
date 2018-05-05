<?php

$host_db = "localhost";
$user_db = "root";
$pass_db = "";
$db_name = "web";
$tbl_name = "usuarios";

$conexion = new mysqli($host_db, $user_db, $pass_db, $db_name);

if ($conexion->connect_error) {
	die("La conexion falló: " . $conexion->connect_error);
}

$correo = $_POST["correo"];
$pass = $_POST["password"]; 

$consulta = "SELECT * FROM usuarios WHERE correo = '$correo'";


$result = mysqli_query($conexion, $consulta);
//$ans = mysqli_query($consulta, $conexion);

if(!$result){
	echo "ERROR";
}
else{
	echo "Bien";
}

 mysqli_close($conexion)

/*if (($correo=='Cesar') && ($pass=='lomitos')){
	echo "Felicidades";
	exit();
}
else{
	echo "Falla";
	exit();
}*/

?>