<?php

require 'login.php';
require 'registro.php';

?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
	<title> Registrarse o iniciar sesión </title>
</head>
<body>
<!---------- Registrar ----------------->
	<form action="registro.php" method="POST" accept-charset="utf-8">
		<label> Nuevo nombre </label>
		<input type="text" name="nombre" value="" placeholder="Nuevo nombre">
		<label> Nueva contraseña </label>
		<input type="text" name="contrasena" value="" placeholder="Nueva contraseña">
		<input type="submit" name="registrar" value="registrar">
	</form><br><br>
<!---------- Iniciar sesión ----------------->
	<form action="login.php" method="POST" accept-charset="utf-8">
		<label> Nombre de usuario </label>
		<input type="text" name="name" value="" placeholder="Nombre">
		<label> Contraseña </label>
		<input type="text" name="password" value="" placeholder="Contraseña">
		<input type="submit" name="Ingresar" value="Ingresar">
	</form>
</body>
</html>