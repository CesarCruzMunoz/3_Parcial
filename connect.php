<? php

$host = " localhost:3306";
$user = "root";
$pass = "";
$db = "proyecto";
$table = "usuarios";

$password = $_POST['pass1'];
$correo = $_POST['correo'];

$conexion = mysqli_connect("localhost:3306", "root", "", "proyecto");

$insert = "INSERT INTO usuarios (correo, password) VALUES('$correo', '$password')";

$consulta = mysqli_query($conexion, $insert);

if (!$consulta){
	echo "ERROR";
}
else{
	echo "OK";
}

mysqli_close($conexion);

?>
