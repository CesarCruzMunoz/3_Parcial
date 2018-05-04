<?php

$usuario = $_POST[nombre];
$pass = $_POST[password];

//print $usuario;
 
if (($usuario==Cesar) && ($pass==lomitos)){
echo "Felicidades";
exit();
}
else{
echo "Falla";
exit();
}
?>