<?php
try {
	$conexion = new PDO('mysql:host=localhost;dbname=paginacion','root','Galletas23');
} catch(PDOException $e){
	echo "Error: " . $e->getMessage();
	die();
}

$pagina = isset($_GET['pagina']) ? (int)$_GET['pagina'] : 1;
$postporpagina = 5;

$inicio = ($pagina > 1) ? ($pagina * $postporpagina - $postporpagina) : 0;

$articulos = $conexion->prepare("
	SELECT SQL_CALC_FOUND_ROWS * FROM ID
	LIMIT $inicio,$postporpagina");

$articulos->execute();
$articulos = $articulos->fetchAll();

if (!$articulos){
	header ('Location: index.php');
}

$total = $conexion->query('SELECT FOUND_ROWS() as total');
$total = $total->fetch()['total'];

$numerop = ceil($total / $postporpagina);


require 'index.view.php'; 

?>