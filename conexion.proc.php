<?php
	//conectamos con la base de datos
	$congu = mysqli_connect("localhost", "root", "", "gu");
	$conmossos = mysqli_connect("localhost", "root", "", "mossos");

	//si no se puede realizar la conexión, mostramos error
	if (!$congu) {
		echo "Error: No se puede conectar a la BD." . PHP_EOL;
		exit;
	}

	if (!$conmossos) {
		echo "Error: No se puede conectar a la BD." . PHP_EOL;
		exit;
	}
?>