?php

require 'conexion.php';

$mail = $_POST['email'];
$pass = $_POST['password'];

session_start();

if(isset($_POST['submit'])){

	$mail = $_POST['email'];
	$pass = $_POST['password'];

	$consulta = "SELECT * FROM usuarios WHERE email = '$mail'";

	$ans = $conexion->query($consulta);

	if(!$ans){

		$conexion->close();
		die();
	}

	if($ans->num_rows === 1){

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
