<?php
session_start();
$dni=$_SESSION['dni_datos'];
$tip=$_SESSION['TIP'];

include("conexion.proc.php");

if (empty($_REQUEST['autorizacion'])) {
		$_REQUEST['autorizacion']=0;
	}

$sqlt27 ="INSERT INTO `f_t27pl`(`DNI`, `Numdiligencias`, `TIP1`, `Hora`, `Dia`, `Actuacion`, `negacion`, `Horanegativa`, `autorizacion`, `Conductorsubstituto`, `Permisosubstituto`, `Clasesubstituto`, `Lugar`) 
	   VALUES 
	   ('$dni[Num]',
	   	'$_SESSION[diligencias]',
	   	'$_REQUEST[agentes]',
	   	'$_REQUEST[hora]',
		'$_REQUEST[dia]',
	   	'$_REQUEST[opactuacion]',
	   	'$_REQUEST[negacion]',
	   	'$_REQUEST[Horanegativa]',
	   	'$_REQUEST[autorizacion]',
	   	'$_REQUEST[nombresustituto]',
		'$_REQUEST[numerosustituto]',
		'$_REQUEST[clasesustituto]',
		'$_SESSION[lugar]')";
	$resultado=mysqli_query($congu, $sqlt27);
	echo $sqlt27;
	mysqli_close($congu);
	header("location: t15.php");

?>

