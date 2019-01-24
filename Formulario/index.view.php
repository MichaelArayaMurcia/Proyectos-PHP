<!DOCTYPE html>
<html>
<head>
	<title>Formulario contacto</title>
</head>
<link rel="stylesheet" type="text/css" href="estilos.css">
<body>
	<div class="wrap">
		<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
			<input type="text" id="nombre" name="nombre" class="form-control" placeholder="Nombre:" value="<?php if(!$enviado && isset($nombre)) echo $nombre?>">
			<input type="text" id="correo" name="correo" class="form-control" placeholder="Correo:" value="<?php if(!$enviado && isset($correo)) echo $correo?>">
			<textarea name="mensaje" class="form-control" id="mensaje" placeholder="Mensaje:"<?php if(!$enviado && isset($mensaje)) echo $mensaje?></textarea>
<!-------------------- PHP -------------->
			<?php if (!empty($errores)): ?>
				<div class="alert error">
					<?php echo $errores; ?>
				</div>
			<?php elseif($enviado):?>
				<div class="alert success">
					<p> Enviado Correctamente </p>
				</div>
			<?php endif?>
<!--------------------------------------->
			<input type="submit" name="submit" class="btn btn-primary" value="enviar correo">
		</form>
	</div>
</body>
</html>
