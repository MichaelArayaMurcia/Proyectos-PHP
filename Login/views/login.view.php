<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/estilos.css">
	<title> Iniciar Sesión </title>
</head>
<body>
	<div class="contenedor">
		<h1 class="titulo">Iniciar Sesión</h1>
		<hr class="border">
		<form action="<?php echo htmlspecialchars( $_SERVER['PHP_SELF']); ?>" method="POST" class="formulario" name="login"> 
			<div class="form-group" style="padding-top: 10px;">
				<i class="icono izquierda fa fa-user"></i><input type="text" name="usuario" class="usuario" placeholder="Usuario">

			</div>

			<div class="form-group" style="padding-top: 10px;">
				<i class="icono izquierda fa fa-lock"></i><input type="password" name="password" class="password_btn" placeholder="Contraseña">
				<i class="submit-btn fa fa-arrow-right" onclick="login.submit()"></i>
			</div>
			<?php if(!empty($errores)): ?>
				<div class="errors">
					<ul>
					<?php  echo $errores; ?>
					</ul>
				</div>
			<?php endif;?>
		</form>
		<p class="texto-registrate">¿Aún no tienes cuenta?</p>
		<a href="registro.php" style="margin-left: 42%;"> Registrate </a>
	</div>
</body>
</html>