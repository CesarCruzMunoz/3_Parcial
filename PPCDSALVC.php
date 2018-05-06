<?php

require 'conexion.php';

if(!$conexion ) {
	die('Could not connect: ' . mysqli_error());
 }
 echo 'Connected successfully'."<br>";
 $sql = 'SELECT email FROM usuarios';
 $result = mysqli_query($conexion, $sql);

 if (mysqli_num_rows($result) > 0) {
	while($row = mysqli_fetch_assoc($result)) {
	   echo "e-mail: " . $row["email"]. "<br>";
	}
 } else {
	echo "0 results";
 }
 mysqli_close($conexion);

?>