<?php

$errores = ' ';

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
	$usuario = filter_var(strtolower($_POST['name']), FILTER_SANITIZE_STRING);
	$password = $_POST['password'];

	try {
		$conexion = new PDO('mysql:host=localhost;dbname=registros','root','Galletas23');
	}
	catch (PDOException $e){
		echo "Error:" . $e->getMessage();
	}
//Verificar el usuario
	$statement = $conexion->prepare(
		'SELECT * FROM usuarios WHERE Nombre = :name AND Password = :password');
	$statement->execute(array(':name' => $usuario,':password' => $password

	));

	$res = $statement->fetch();
	if ($res !== false){
		$_SESSION['usuario'] = $usuario;
		header('Location: contenido.php');
	}
	else {
		$errores .= '<li> Datos incorrectos </li>';
	}
}
?>