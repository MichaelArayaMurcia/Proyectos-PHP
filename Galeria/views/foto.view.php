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
		 	<h1 class="titulo">Foto: <?php if (!empty($foto['titulo'])){
		 		echo $foto['titulo'];
		 	} else {
		 		echo $foto['imagen'];
		 }?></h1>
		 </div>
	</header>
		 <div class="contenedor">
		 	<div class="foto">
		 		<img src="fotos/<?php echo $foto['imagen'];?>">
		 		<p class="texto"><?php echo $foto['texto'];?></p>
		 		<a href="index.php" class="regresar"><i class="fa fa-long-arrow-left"></i> Regresar </a>
		 	</div>
		 </div>
	<footer>
		<p class="copyright">Galeria creada por Michael Araya Murcia</p>
	</footer>
</body>
</html>