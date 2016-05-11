<?php
session_start();
$dni=$_SESSION['dni_datos'];
$tip=$_SESSION['TIP'];
include("conexion.proc.php");


$sql ="INSERT INTO `f_t27pl`(`DNI`, `TIP1`, `TIP2`, `Actuacion`, `negacion`, `negaciondrogas`, `Manifesto`, 
				   `Horanegativa`, `autorizacion`, `Conductorsubstituto`, `Permisosubstituto`, `Clasesubstituto`) 
	   VALUES 
	   ($_REQUEST[''],
	   	$_REQUEST[''],
	   	null,
	   	$_REQUEST[''],
	   	$_REQUEST[''],
	   	$_REQUEST[''],
	   	$_REQUEST[''],
	   	$_REQUEST[''],
	   	$_REQUEST[''],
	   	$_REQUEST[''],
	   	$_REQUEST[''],
	   	$_REQUEST[''],
?>

