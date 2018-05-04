<?php

$correo = $_POST["usuario"];
$pass = $_POST["password"];

//$conexion = mysqli_connect("localhost", "root", "", "web");
 
if (($correo=='Cesar') && ($pass=='lomitos')){
	echo "Felicidades";
	exit();
}
else{
	echo "Falla";
	exit();
}

?>