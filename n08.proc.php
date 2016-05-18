<?php
session_start();
$dni=$_SESSION['dni_datos'];
$tip=$_SESSION['TIP'];

include("conexion.proc.php");

if (empty($_REQUEST['oficio'])) {
		$_REQUEST['oficio']=0;
	}
if (empty($_REQUEST['renuncio'])) {
		$_REQUEST['renuncio']=0;
	}

$sqln08 ="INSERT INTO `f_n08pl`(`DNI`, `Numdiligencias`, `TIP1`, `Municipio`, `Cuerpoagente`, `Motivoimputacion`, `Abogado`, `Abogadooficio`, `Renuncialetrada`, `Idiomainterprete`, `Observaciones`, `Causapenal_fecha`, `Causapenal_hora`)
	   VALUES 
	   ('$dni[Num]',
	   	'$_SESSION[diligencias]',
	   	'$_REQUEST[agentes]',
	   	'$_REQUEST[municipio]',
	   	'$_REQUEST[cuerpo]',
	   	'$_REQUEST[Motivoimputacion]',
	   	'$_REQUEST[privado]',
	   	'$_REQUEST[oficio]',
	   	'$_REQUEST[renuncio]',
	   	'$_REQUEST[intérprete]',
	   	'$_REQUEST[observaciones]',
	   	'$_REQUEST[diacomparecer]',
	   	'$_REQUEST[horacomparecer]')";
	$resultado=mysqli_query($congu, $sqln08);
	echo $sqln08;
	mysqli_close($congu);
	// header("location: a13.php");

?>

