<!DOCTYPE html>
<html>
<head>
	<title>Generador de contraseñas</title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<center>
		<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST" accept-charset="utf-8">
			<label> Cuantas contraseñas quiere </label>
			<input type="text" name="cantidad" value="" placeholder="Cantidad"><br>
			<label> Cuantos caracteres quiere </label>
			<input type="text" name="caracteres" value="" placeholder="Caracteres"><br>
			<input type="submit" name="submit" value="enviar"><br>

<?php
	error_reporting(0);
	$cantidad = $_POST['cantidad'];
	$caracteres = $_POST['caracteres'];
	$contraseña = '';
	$j = 0;
	$i = 0;
	$letras = ['a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z',
	'0','1','2','3','4','5','6','7','8','9',
	'A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z'];
?>
			<textarea name="resultado" readonly> 
				<?php  
					while ($j < $cantidad) {
						$i = 0;
						$resultado = '';
						while ($i < $caracteres) {
							$letra = rand(0,62);
							$resultado .= $letras[$letra]; 
							$i = $i + 1;
						}
						echo $resultado;
						echo "\n";
						$j = $j + 1;
					}	
				?> </textarea>

		</form>
	</center>
</body>
</html>