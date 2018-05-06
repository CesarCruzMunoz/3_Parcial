<?php

function connect(){
	$server = "localhost";
	$username = "root";
	$password = "";
	$DB = "web";


	$conexion = new mtsqli($server, $username, $password, $DB);

	if($conexion){ #Si si se hizo la conexion
		return $conexion;
	}
	else{
		die();
	}

}

function insert($conexion){
	$tabla = "usuarios";
	$correo = $_POST["correo"];
	$clave = $_POST["pass1"];
	$clave2 = $_POST["pass2"];

	#Hacer consulta de todos los que tenga ese correo
	$consulta = "SELECT * FROM".$tabla." WHERE correo='$correo";

	$ans = $conexion->query($consulta);

	#Validar consulta
	if(!$ans){
		$conexion->close();
		die();
	}

	# Si lla consulta es 0 es que no hay registros con ese correo
	if($ans->num_rows === 0){
		if ($clave==$clave2){

			#Cifrar contraseña
			$clave3 = password_hash($clave, PASSWORD_DEFAULT);

			$insert = "INSERT INTO " . $tabla . " (correo, password) VALUES('$correo', '$clave3');";
			//guardar en BD
			$resultado = $conexion->query($insert);

			if($resultado === TRUE){
				$conexion->close();
				header('location: login.html');
			}
			else{
				$conexion->close();
				alert ("Error");
				die();
			}
		}
		else{
			$conexion->close();
			header('location: registro.html');
		}
	}

	
}

?>