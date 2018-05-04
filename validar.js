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
