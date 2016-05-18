<?php

session_start();
$dni=$_SESSION['dni_datos'];
// var_dump($dni);
$tip=$_SESSION['TIP'];
// var_dump($tip);
include("conexion.proc.php");


$hora= date ("h:i:s");
$fecha= date ("d/m/Y");

?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>T15</title>
<meta name="vewport" content="device-width, user-scalable=no, initial-scale=1.0, minium-scale=1.0, minium-scale=1.0">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="css/styles.css" media="all">
<!-- Latest compiled and minified JavaScript -->

<!--<script type="text/javascript" src="view.js"></script>
<script type="text/javascript" src="validaFormulario.js"></script>-->

</head>

<body id="main_body" style="background-color:#F5F6CE";>

	<div class="panel panel-primary" style="border: 8px solid transparent; border-color: #337ab7; background-color:#F5F6CE";>
			<div class="panel-heading">
				<img id="logo" src="img/placaPecho1.jpg" alt="">
			
			<form class="form-incline" class="T15"  method="" action="" onsubmit="return validaFormulario();">
		
				<div class="form-group">
					<div id="fuente" style="font-size:60px; margin-top: -80px; text-align: center;">
				GUARDIA URBANA
					</div>

				</div>	
			</div>

		
		
		<div class="panel panel-success">
			<div class="panel-heading">
				<div id="datos_acta">
				
				<h3>Datos del acta</h3>
				
				</div>

			</div>
		</div>
				
				<div class="col-xs-12">
					<div class="col-xs-2">
				
						<label class="sr-only" for="NºDiligencias"></label>
						<input type="text" id="Numdiligencias" name= "diligencias" class="form-control" placeholder="Número de Diligencias" value="<?php echo $_SESSION['diligencias']; ?>" readonly/>
						
					</div>

					<div class="col-xs-1">
						<input type="text" name= "agentes" id="agentes" class="form-control" placeholder="Agente1" value="<?php echo $tip; ?>" readonly/>
					</div>

					<div class="col-xs-1">
						<input type="text" name= "agente2" id="agentes" class="form-control" placeholder="Agente2" value="<?php echo $tip; ?>" readonly/>
					</div>

					</br></br></br>

					<div class="col-xs-2">
					<input type="text" name= "dia" id="dia" class="form-control" placeholder="Fecha" value="<?php echo $fecha; ?>" readonly/>
					</div>

					
					<div class="col-md-2">
						<input type="text" name= "hora" id="hora" class="form-control" placeholder="Hora" value="<?php echo $hora; ?>" readonly/>
					</div>

					</br></br></br>

					<div class="col-xs-3">
						<input type="text" id="lugar" name= "lugar" class="form-control" placeholder="Lugar" value=""/>
					</div>
				
				</div>

		
				</br></br></br></br></br></br></br></br></br>


		<div class="panel panel-success">
			<div class="panel-heading">
				<div class="personarequerida">
				
					<h3>Hoja de comprobantes de pruebas de alcoholemia</h3>
						
				</div>
			</div>	
		</div>

				
				<div class="col-xs-12">
				
					<div class="col-xs-2">
					<input type="text" id="nombre" name= "nombre" class="form-control" placeholder="Nombre"/>
					</div>

					<div class="col-xs-2">
						<input type="text" id="apellidos" name= "apellidos" class="form-control" placeholder="Primer Apellido" />
					</div>

					<div class="col-xs-2">
						<input type="text" id="apellidos2" name= "apellidos" class="form-control" placeholder="Segundo Apellido" />
					</div>

					</br></br></br>
					
					<div class="col-xs-2">

						<select class="form-control">
							<option value="">Tipo de documento</option>
	  						<option value="">DNI</option>
	 						<option value="">NIE</option>
	  						<option value="">PASAPORTE</option>
	  					</select>

	  				</div>
					

					<div class="col-xs-2">
						<input type="text" id="imputadodopais" name= "imputadodopais" class="form-control" placeholder="Pais" />
					</div>

					<div class="col-xs-2">
						<input type="text" id="imputadodonumero" name= "imputadodonumero" class="form-control" placeholder="Número" />
					</div>

					</br></br>

				</div>

				</br></br></br></br></br></br>


		<div class="panel panel-danger">
			<div class="panel-heading">	
				<div class="pruevas">
					
				</br></br>
					
					<div class="col-xs-2">
						<input type="text" id="prueba1" name= "prueba1" class="form-control" placeholder="Prueba 1" />
					</div>

					<div class="col-xs-2">
						<input type="text" id="prueba2" name= "prueba2" class="form-control" placeholder="Prueba 2" />
					</div>

					</br></br></br>

				</div>
			</div>
		
	
				<div class="col-xs-12">
					<a href="">
					</br>
					<button type="button" class="btn btn-primary">Enviar</button>
 					</a>
				</div>	

		</div>

		</br></br></br>
			
			<script src="js/jquery.js"></script>
			<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous">
			</script>

</div>
</body>
</html>