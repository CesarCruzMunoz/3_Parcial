<?php

require 'conexion.php';
 
session_start();

$consulta = "SELECT * FROM usuarios";
$resultado = mysql_query($consulta, $conexion) or die(mysql_error());

$tabla = "<table border='1' cellpadding='10'>\n";
$tabla .= "<tr><th>ID</th><th>Nombre</th><th>Apellidos</th><th>Dirección</th><th>Localidad</th><th>Edad</th></tr>\n";

while($fila = mysql_fetch_assoc($resultado)){
$tabla .= "<tr>
       <td>".$fila["id_cliente"]."</td>
       <td>".$fila["nombre"]."</td>
       <td>".$fila["apellidos"]."</td>
       <td>".$fila["direccion"]."</td>
       <td>".$fila["localidad"]."</td>
       <td>".$fila["edad"]."</td>
      </tr>\n";
}

mysql_close($conexion);

/*
if(isset($_POST['submit'])){

	$usuario = "JEC";
	$password = "lomitos";

	if((isset($_POST['usuario'])) || (isset($_POST['password']))){

		$use = "JEC";
		$pas = "lomitos";
		
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
*/

?>