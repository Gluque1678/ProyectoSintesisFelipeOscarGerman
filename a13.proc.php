<?php
session_start();
$dni=$_SESSION['dni_datos'];
$tip=$_SESSION['TIP'];

include("conexion.proc.php");


$sqla13 ="INSERT INTO `f_a13pl`(`DNI`, `Numdiligencias`, `TIP1`, `Lugar`, `Dia`, `Hora`, `Motivoinmobilizacion`, `Numerodenuncia`, `Tipodenuncia`, `Sistemainmobilizacion`, `Quilometrosactuales`, `Vehiculodisposicion`, `Fecharoturainmobilizacion`, `Horaroturainmobilizacion`, `Atestadodesobedienciagrave`, `Desaparicioncausas`, `Otroconductor`, `Ingresodeposito`, `Nombresustituto`, `Permisosustituto`, `Clasesustituto`, `Paisexpedicionsustituto`, `Retiradaingresodeposito`)
	   VALUES 
	   ('$dni[Num]',
	   	'$_SESSION[diligencias]',
	   	'$_REQUEST[agentes]',






	   			)";
	$resultado=mysqli_query($congu, $sqla13);
	echo $sqla13;
	mysqli_close($congu);
	//header("location: t32.php");

?>

