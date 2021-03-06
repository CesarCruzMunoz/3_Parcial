<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/><!-- Para que el texto pueda leer símbolos como la ñ y los acentos-->
	<meta name="description" content=" Primer Proyecto de Programación Web">
	<meta name="keywords" content="Universidad">
	<title>Register</title>
	<link rel="stylesheet" type="text/css" href="css/styles.css">

</head>

<body>


	<br></br>

	<header>
		<div id="menu">
			<ul> <!-- Agregar etiqueta li -->
					<a href="index.php"> Index </a>
					<a href="login.php""> Log In </a>
					<a href="registro.php"> Register </a>
			</ul>
		</div>
	</header>
	
	<br></br>
	<br></br>

	<h1>Formulario de Registro</h1>

	 <form action="connect.php" method="post" class="form-register"> 
	<!--<form class="form-register"> !-->
		<h2 class="form_titulo">
			Registro de cuenta
		</h2>

		<div class="contenedor-inputs">
			<input type="email" id="correo" name="correo" placeholder="Correo" class="input-100">
			<input type="password" id="pass1" name="pass1" placeholder="Contraseña" class="input-48">
			<input type="password" id="pass2" name="pass2" placeholder="Repite Contraseña" class="input-48">
			<input type="submit" value="Crear" class="btn-enviar" onclick= "validar();">
			<p class="form_link">¿Ya tienes una cuenta? <a href=login.html> Ingresa aqui</a></p>
		</div>
		
		<script>

			function validar(){
				var email= document.getElementById('correo');
				var pass1= document.getElementById('pass1');
				var pass2= document.getElementById('pass2');

				if (email.value == ""){
					alert("Ingresa correo");
					return false;
				}

				if (pass1.value == ""){
					alert("Ingresa contraseña");
					return false;
				}

				if (pass2.value == ""){
					alert("Repite contraseña");
					return false;
				}

				if (pass1.value != pass2.value){
				 	alert("Las contraseñas no son iguales");
				 	return false;
				}

				var minusculas= /[a-z]/g;
						
				if (!(pass1.value.match(minusculas))){
				 	alert("No hay minusculas");
				 	return false;
				}

				var mayusculas= /[A-Z]/g;
				 		
				if(!(pass1.value.match(mayusculas))){
				 	alert("No hay mayusculas");
				 	return false;
				}

				var numeros= /[0-9]/g;
				 		
				if(!(pass1.value.match(numeros))){
				 	alert("No hay numeros");
				 	return false;
				}

				if ((pass1.value.lenght < 8)){
				 	alert("La contraseña debe tener más de 8 caracteres");
				 	return false;
				}

				var cesp= /[@#$%^&*]/g;

				if (!(pass1.value.match(cesp))){
				 	alert("La contraseña debe tener caracteres especiales");
				 	return false;
				 }

			}

		</script>

	</form>

	<footer>
		<p>Gracias</p>
	</footer>
	
</body>
</html>