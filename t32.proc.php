<?php
session_start();
$dni=$_SESSION['dni_datos'];
$tip=$_SESSION['TIP'];

include("conexion.proc.php");


$sqlt32 ="INSERT INTO `f_t32pl`(`dni`, `Numdiligencias`, `tip1`, `seguridad_viaria`, `conducir_taxa`, `conducir_influencia`, `conducir_negacion`, `conducir_perdida`, `conducir_privat`, `conducir_sincarnet`, `conducir_velocidad`, `desobediencia`, `telefono`, `Marcaetilometro`, `Modelo`, `Numeroserie`, `Calibradohasta`, `prueba1_hora`, `prueba1_resultado`, `prueba2_hora`, `prueba2_resultado`, `hora_traslado`, `centro_medico`) 
		VALUES 
	   ('$dni[Num]',
	   	'$_SESSION[diligencias]',
	   	'$_REQUEST[agentes]',
	   	'$_REQUEST[seguridadviaria]',
	   	'$_REQUEST[taxa]',
	   	'$_REQUEST[estupefacientes]',
	   	'$_REQUEST[negativa]',
	   	'$_REQUEST[perdida]',
	   	'$_REQUEST[privado]',
	   	'$_REQUEST[sinpermiso]',
	   	'$_REQUEST[velocidad]',
	   	'$_REQUEST[desobediencia]',
	   	'$_REQUEST[telefono]',
	   	'$_REQUEST[marcaetilometro]',
	   	'$_REQUEST[modelo]',
	   	'$_REQUEST[numeroserie]',
	   	'$_REQUEST[calibrado]',
	   	'$_REQUEST[hora1]',
	   	'$_REQUEST[mg1]',
	   	'$_REQUEST[hora2]',
	   	'$_REQUEST[mg2]',
	   	'$_REQUEST[horatraslado]',
	   	'$_REQUEST[centromedico]')";

	$resultado=mysqli_query($congu, $sqlt32);
	echo $sqlt32;
	mysqli_close($congu);
	header("location: n08.php");

?>

