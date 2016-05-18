<?php
session_start();
$dni=$_SESSION['dni_datos'];
$tip=$_SESSION['TIP'];

include("conexion.proc.php");


$sqlt15 ="INSERT INTO `f_t15pl`(`DNI`, `Numdiligencias`, `TIP`,`Hora`,`Dia`) 
	   VALUES 
	   ('$dni[Num]',
	   	'$_SESSION[diligencias]',
	   	'$_REQUEST[agentes]',
	   	'$_REQUEST[hora]',
		'$_REQUEST[dia]')";
	$resultado=mysqli_query($congu, $sqlt15);
	echo $sqlt15;
	mysqli_close($congu);
	header("location: t32.php");

?>

