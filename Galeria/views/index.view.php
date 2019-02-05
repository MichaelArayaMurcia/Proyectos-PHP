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
		 <h1 class="titulo">Mi increible Galeria en PHP y MySQL</h1>
		 </div>
	<section class="fotos">
	 	<div class="contenedor">
	 		<?php foreach($fotos as $foto) :?>
	 			<div class="thumb">
	 				<a href="foto.php?id=<?php echo $foto['id']?>">
	 					<img src="fotos/<?php echo $foto['imagen'] ?>">
	 				</a>
	 			</div>
	 		<?php endforeach;?>
	 		<div class="paginacion">
	 			<?php if ($pagina_actual > 1): ?>
	 			<a href="index.php?p=<?php echo $pagina_actual - 1;?>" class="izquierda"><i class="fa fa-long-arrow-left"></i> Pagina Anterior</a>
	 			<?php endif ?>
	 			<?php if ($total_paginas != $pagina_actual): ?>
	 			<a href="index.php?p=<?php echo $pagina_actual + 1;?>" class="derecha">Pagina Siguiente <i class="fa fa-long-arrow-right"></i></a>
	 			<?php endif ?>
	 		</div>
	 	</div>
	</section>
	<footer>
		<p class="copyright">Galeria creada por Michael Araya Murcia</p>
	</footer>
	</header>
</body>
</html>