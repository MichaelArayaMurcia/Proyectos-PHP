<?php

$errores = '';
$enviado = '';

if (isset($_POST['submit'])){
	$nombre = $_POST['nombre'];
	$correo = $_POST['correo'];
	$mensaje = $_POST['mensaje'];
//---------- Validar el nombre -------------------
	if (!empty($nombre)){
		$nombre = trim($nombre);
		$nombre = filter_var($nombre, FILTER_SANITIZE_STRING);
	} else {
		$errores .= 'Por favor ingresa un nombre <br />';
	}
//---------- Validar el correo -------------------
	if (!empty($correo)) {
		$correo = filter_var($correo, FILTER_SANITIZE_EMAIL);
		if (!filter_var($correo, FILTER_VALIDATE_EMAIL)) {
			$errores .= 'Por favor ingresa un correo valido <br />';
		} 
	} else {
			$errores .= 'Por favor ingresa un correo <br />';
		}
//---------- Validar el mensaje ------------------ 
	if (!empty($mensaje)){
		$mensaje = htmlspecialchars($mensaje);
		$mensaje = trim($mensaje);
		$mensaje = stripcslashes($mensaje);
	} else {
		$errores .= 'Por favor ingresa el mensaje <br />';
	}
//---------- Verificar errores -------------------
	if(!$errores){
		$enviar_a = 'michaelarayamurcia@gmail.com';
		$asunto = 'Enviado desde la pagina de practica';
		$mensaje_p = "De: $nombre \n";
		$mensaje_p .= "Correo: $correo \n";
		$mensaje_p .= "Mensaje: " . $mensaje;

		//mail($enviar_a,$asunto, $mensaje_p);
		$enviado = 'true';
	}
}

require 'index.view.php'; 

?>