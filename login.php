<?php

session_start();
include("conexion.proc.php");

$qry = "SELECT * FROM agente WHERE TIP='$_REQUEST[TIP]' AND Password='$_REQUEST[Password]'";

$res = mysqli_query($congu,$qry);

if(mysqli_num_rows($res)==1) {
	$datos_agente=mysqli_fetch_array($res);
	$_SESSION['TIP']=$datos_agente['TIP'];
	echo 'true';

	}
else {
	echo 'false';
}


 ?>
