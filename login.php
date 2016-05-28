<?php

session_start();
include("conexion.proc.php");
//se quitan espacios en blanco
$tip  = trim($_REQUEST['TIP']);
$password = trim($_REQUEST['Password']);

$salt = 'Daw$2';

$pass = sha1(md5($salt.$password));

$qry = "SELECT * FROM agente WHERE TIP='$tip' AND Password='$pass'";

$res = mysqli_query($congu,$qry);

if(mysqli_num_rows($res)==1) {
	$datos_agente=mysqli_fetch_array($res);
	$_SESSION['TIP']=$datos_agente['TIP'];
	$_SESSION['nivel']=$datos_agente['nivel'];
	echo 'true';

	}
else {
	echo 'false';
}


 ?>
