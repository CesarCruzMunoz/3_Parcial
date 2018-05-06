<?php

require 'conexion.php';
 
session_start();

if(isset($_POST['submit'])){

	$mail = $_POST['email'];
	$pass = $_POST['password'];

	$sql = "SELECT (email) FROM usuarios WHERE email = '$mail'";

	if(!$check = mysqli_query($conexion, $sql)){
		
		return false;
	}

	$usuario = $mail;
	$password = $pass;

	if((isset($_POST['email'])) || (isset($_POST['password']))){

		$use = $mail;
		$pas = $pass;
		
		if(($usuario == $use) && ($password == $pas)){

			$_SESSION['username'] = $use;
			header("location: usuario.php");

		}else{

			header("location: login.html");
		}

	}else{

		header("location: login.html");
	}

}else{

	header("location: login.html");
}

?>