<?
session_start();
include 'conexion.proc.php';
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<title></title>
	</head>
	<body>
		<form action="busqueda.php" method="post">
		<input type="text" name="Num" value="" placeholder="DNI"  required/>
		<input type="text" name="Matricula" value="" placeholder="Matricula"  required/> 
		<input type="submit" name="buscador" value="Buscar"  />
		</form>
	<!--<?php
			$qry1 = "SELECT * FROM dni WHERE Num='$_REQUEST[Num]'";

			$res1 = mysqli_query($congu,$qry1);

			if(mysqli_num_rows($res1)==1) {
				$datos_dni=mysqli_fetch_array($res1);
				// echo $datos_dni;
				// echo 'true';
				echo $datos_dni["Num"].'<br>';
				echo $datos_dni["Nombre"];
				echo $datos_dni["Primerapellido"];
				echo $datos_dni["Segundoapellido"].'<br>';
				echo $datos_dni["Domicilio"];
				}
			else {
				echo 'false';
			}
	?>!-->
		<br>
		<a href="logout.php">LOGOUT</a>
	</body>
</html>