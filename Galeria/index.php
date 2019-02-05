<?php

	require 'funciones.php';
	$fotos_por_pagina = 8;

	$pagina_actual = (isset($_GET['p']) ? (int)$_GET['p'] :1);
	$inicio = ($pagina_actual > 1) ? $pagina_actual * $fotos_por_pagina - $fotos_por_pagina : 0;

	$conexion = conexion('curso_galeria','root','Galletas23');

	if (!$conexion){
		die();
	}

	$statement = $conexion->prepare("
		SELECT SQL_CALC_FOUND_ROWS * FROM fotos LIMIT $inicio, $fotos_por_pagina");
	$statement->execute();
	$fotos = $statement->fetchAll();

	if (!$fotos){
		header('Location: index.php');
	}

	$statement = $conexion->prepare("SELECT FOUND_ROWS() as total_filas");
	$statement->execute();
	$total_post = $statement->fetch()['total_filas'];

	$total_paginas = ceil($total_post / $fotos_por_pagina);


	require 'views/index.view.php'

?>
<html lang="en">
  <head>
    <meta name="google-signin-scope" content="profile email">
    <meta name="google-signin-client_id" content="YOUR_CLIENT_ID.apps.googleusercontent.com">
    <script src="https://apis.google.com/js/platform.js" async defer></script>
  </head>
  <body>
    <div class="g-signin2" data-onsuccess="onSignIn" data-theme="dark"></div>
    <script>
      function onSignIn(googleUser) {
        // Useful data for your client-side scripts:
        var profile = googleUser.getBasicProfile();
        console.log("ID: " + profile.getId()); // Don't send this directly to your server!
        console.log('Full Name: ' + profile.getName());
        console.log('Given Name: ' + profile.getGivenName());
        console.log('Family Name: ' + profile.getFamilyName());
        console.log("Image URL: " + profile.getImageUrl());
        console.log("Email: " + profile.getEmail());

        // The ID token you need to pass to your backend:
        var id_token = googleUser.getAuthResponse().id_token;
        console.log("ID Token: " + id_token);
      }
    </script>
  </body>
</html>