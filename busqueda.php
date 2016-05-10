<?php

session_start();
include("conexion.proc.php");
include("buscador.php");

$qry1 = "SELECT * FROM dni WHERE Num='$_REQUEST[Num]'";

$res1 = mysqli_query($congu,$qry1);

if(mysqli_num_rows($res1)==1) {
	$datos_dni=mysqli_fetch_array($res1);
	// echo $datos_dni;
	// echo 'true';
	
	echo $datos_dni["Num"].'<br>';
	echo $datos_dni["Nombre"].'&nbsp';
	echo $datos_dni["Primerapellido"].'&nbsp';
	echo $datos_dni["Segundoapellido"].'<br>';
	echo $datos_dni["Domicilio"].'<br>'.'<br>'.'<br>';
	}
else {
	// echo 'false';
}

$qry2 = "SELECT * FROM vehiculo WHERE Matricula='$_REQUEST[Matricula]'";

$res2 = mysqli_query($conmossos,$qry2);

if(mysqli_num_rows($res2)==1) {
	$datos_matricula=mysqli_fetch_array($res2);
	echo $datos_matricula["Matricula"].'<br>';
	echo $datos_matricula["Marca"].'&nbsp';
	echo $datos_matricula["Modelo"].'&nbsp';
	echo $datos_matricula["Color"].'<br>';
	echo $datos_matricula["Titular"];

	}
else {
	// echo 'false';
}

	

?>
