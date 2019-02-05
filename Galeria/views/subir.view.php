 <!DOCTYPE html>
<html>
<head>
	<title>Galeria</title>
	<meta name="viewport" content="width-device-width, user-scalable=no,initial-scale=1.0, maximum-scale=1.0, minimum=1.0">
	<link href="https://fonts.googleapis.com/css?family=Slabo+27px" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/estilos.css">
</head>
<body>
	<header >
		 <div class="contenedor">
		 	<h1 class="titulo">Subir foto</h1>
		 </div>
	</header>
		 <div class="contenedor">
		 	<form action="<?php echo htmlspecialchars ($_SERVER['PHP_SELF']); ?>" method="POST" class="formulario" enctype="multipart/form-data">
		 		<label for="foto">Selecciona tu foto</label>
		 		<input type="file" id="foto" name="foto">

		 		<label for="titulo">Titulo de la foto</label>
		 		<input type="text" id="titulo" name="titulo">

		 		<label for="texto">Descripcion: </label>
		 		<textarea name="texto" id="texto" placeholder="Ingresa una descripcion"></textarea>

		 		<?php if (isset($error)): ?>
		 			<p class="error"> <?php echo $error; ?></p>
		 		<?php endif ?>
		 		<input type="submit" class="submit" value="Subir Foto">
		 	</form>
		 </div>
	<footer>
		<p class="copyright">Galeria creada por Michael Araya Murcia</p>
	</footer>
</body>
</html>