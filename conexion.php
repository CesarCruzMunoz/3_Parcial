<?php

$server = "localhost";
$username = "root";
$password = "";
$DB = "regist";


$conexion = mysqli_connect($server, $username, $password, $DB);

if($conexion){

	return 1;

}else{

	die();
}

?>