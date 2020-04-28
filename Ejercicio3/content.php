<?php
	$host = "localhost";
	$user = "root";
	$pass = "";
	$db = "lenguajes";

	//Estableciendo conexion con el servido MySQL
	$cn = new mysqli($host, $user, $pass, $db);

	// $cn = new mysqli($host, $user, $pass, $db,); // <-- Usar esta si no funciona la conexion a la base de datos

	if ($cn->connect_errno) {
		printf("Falló la conexión: %s\n", $cn->connect_errno);

		exit(0);
	}
	if (!$cn->set_charset("utf8")) {
			printf("Error cambiando el juego de caracteres utf8: %s\n", $cn->error);
		}else {
	

	$tipo = isset($_GET['content']) ? $_GET['content'] : 0;
	if ($tipo != 0) {
		$qr = "SELECT nombrelenguaje, descripcion, imglenguaje FROM lenguaje ";
		$qr .= "WHERE idlen = $tipo";
		$rs = $cn->query($qr);
		
		

		while ($row = $rs->fetch_object()) {
			$info  = "<div id=\"nombre\">\n<h2>{$row -> nombrelenguaje}</h2>\n</div>\n";
			$info .= "<div id=\"descripcion\">\n<p>\n{$row -> descripcion}\n";
			$info .= "<img src=\"{$row -> imglenguaje}\n\" />\n";
			$info .= "</p>\n</div>\n";
		}

		
			printf($info, $cn->character_set_name());
		}
		
		
	}
?>
