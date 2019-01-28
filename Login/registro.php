<?php session_start();
//Revisar el usuario.
	if (isset($_SESSION['usuario'])){
	header('Location:  index.php');
	} 
//Manejar los datos del usuario.
	if ($_SERVER['REQUEST_METHOD'] == 'POST'){
		$usuario = filter_var(strtolower($_POST['usuario']), FILTER_SANITIZE_STRING);
		$password = $_POST['password'];
		$password2 = $_POST['password2'];
	$errores = '';
//Busqueda de errores.
	if (empty($usuario) or empty($password) or empty($password2)){
		$errores .= '<li> Por favor llena los datos correctamente </li>';
	} 
	else {
		try {
			$conexion = new PDO('mysql:host=localhost;dbname=registro','root','Galletas23');
		} 
		catch (PDOExeception $e) {
			echo "Error: " . $e->getMessage();
		}
//Seleccionar el usuario
		$statement = $conexion->prepare('SELECT * FROM usuarios WHERE usuario = :usuario LIMIT 1');
		$statement->execute(array(':usuario' => $usuario));
		$res = $statement->fetch();

		if ($res !== false){
			$errores .= '<li>El nombre de usuario ya existe</li>';
		}
//Hashear la contraseña
		$password = hash('sha512', $password);
		$password2 = hash('sha512', $password2);
		
		if ($password != $password2){
			$errores .= '<li>Las contraseñas no son iguales</li>';
		}}
//Insertar el usuario a la base de datos
	if ($errores == '') {
		$statement = $conexion->prepare("INSERT INTO usuarios (ID, usuario, password) VALUES (null, :usuario , :password)");
		$statement->execute(array(":usuario" => $usuario, ":password" => $password));

		header('Location: login.php');
	}}

require 'views/registro.view.php';

?>