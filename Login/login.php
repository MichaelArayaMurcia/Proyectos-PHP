<?php session_start();
//Revisar sesión
	if (isset($_SESSION['usuario'])){
		header('Location: index.php');
	}
//Busqueda de errores
	$errores = '';
	if ($_SERVER['REQUEST_METHOD'] == 'POST'){
		$usuario = filter_var(strtolower($_POST['usuario']), FILTER_SANITIZE_STRING);
		$password = $_POST['password'];
		$password = hash('sha512',$password);

		try {
			$conexion = new PDO('mysql:host=localhost;dbname=registro','root','Galletas23');
		}
		catch (PDOException $e){
			echo "Error:" . $e->getMessage();
		}
	//Verificar el usuario
		$statement = $conexion->prepare(
			'SELECT * FROM usuarios WHERE usuario = :usuario AND password = :password');
		$statement->execute(array(
			':usuario' => $usuario,
			':password' => $password

		));

		$res = $statement->fetch();
		if ($res !== false){
			$_SESSION['usuario'] = $usuario;
			header('Location: index.php');
		}
		else {
			$errores .= '<li> Datos incorrectos </li>';
		}
	}


require 'views/login.view.php'

?>