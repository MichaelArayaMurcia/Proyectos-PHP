<?php session_start();

	if ($_SERVER['REQUEST_METHOD'] == 'POST'){
		$nombre = $_POST['nombre'];
		$contrasena = $_POST['contrasena'];
	}

//Busqueda de errores.
	$errores = " ";
	if (empty($nombre) or empty($contrasena)){
		$errores .= '<li> Por favor llena los datos correctamente </li>';
	} 
	else {
		try {
			$conexion = new PDO('mysql:host=localhost;dbname=registros','root','Galletas23');
		} 
		catch (PDOExeception $e) {
			echo "Error: " . $e->getMessage();
		}
// insertar datos 
    $insertar = $conexion->prepare(
    	"INSERT INTO usuarios (ID,Nombre,Password)
    	 VALUES (null, :nombre, :contrasena)");
    $insertar->execute(Array(":nombre" => $nombre, ":contrasena" => $contrasena));

    $res = $insertar->fetch();
    print_r($res);
    echo " Usuarios creados correctamente";
	}

// nombre y contraseña
?>	
