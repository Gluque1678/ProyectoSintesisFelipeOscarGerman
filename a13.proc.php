<?php
session_start();
$dni=$_SESSION['dni_datos'];
$tip=$_SESSION['TIP'];

include("conexion.proc.php");


$sqla13 ="INSERT INTO `f_a13pl`(`DNI`, `Numdiligencias`, `TIP1`, `Lugar`, `Dia`, `Hora`, `Motivoinmobilizacion`, `Numerodenuncia`, `Tipodenuncia`, `Sistemainmobilizacion`, `Quilometrosactuales`, `Vehiculodisposicion`, `Fecharoturainmobilizacion`, `Horaroturainmobilizacion`, `Atestadodesobedienciagrave`, `Observaciones`, `Motivolevantamiento`, `Dialevantamiento`, `Horalevantamiento`, `Nombresustituto`, `Permisosustituto`, `Clasesustituto`, `Paisexpedicionsustituto`, `Retiradaingresodeposito`)
VALUES 
	   ('$dni[Num]',
	   	'$_SESSION[diligencias]',
	   	'$_REQUEST[agentes]',
	   	'$_REQUEST[lugar]',
	   	'$_REQUEST[fecha]',
	   	'$_REQUEST[hora]',
	   	'$_REQUEST[immobilizacion]',
	   	'$_REQUEST[denuncia]',
	   	'$_REQUEST[Tipodenuncia]',
	   	'$_REQUEST[sistema]',
	   	'$_REQUEST[kilometros]',
	   	'$_REQUEST[Vehiculodisposicion]',
	   	'$_REQUEST[fecharot]',
	   	'$_REQUEST[horarot]',
	   	'$_REQUEST[atestadorot]',
	   	'$_REQUEST[observaciones]',
	   	'$_REQUEST[Motivolevantamiento]',
	   	'$_REQUEST[fechalevantamiento]',
	   	'$_REQUEST[horalevantamiento]',
	   	'$_REQUEST[nombre]',
	   	'$_REQUEST[permiso]',
	   	'$_REQUEST[clase]',
	   	'$_REQUEST[pais]',
	   	'$_REQUEST[Retiradaingresodeposito]')";

	$resultado=mysqli_query($congu, $sqla13);
	echo $sqla13;
	mysqli_close($congu);
	//header("location: t32.php");

?>

