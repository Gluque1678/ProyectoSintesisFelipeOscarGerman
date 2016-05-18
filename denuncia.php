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
<title>Denuncia Municipal</title>
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
			
					<form class="form-incline" class="Denuncia Municipal"  method="" action="" onsubmit="return validaFormulario();">
		
						<div class="form-group">
							<div id="fuente" style="font-size:60px; margin-top: -80px; text-align: center;">
							 GUARDIA URBANA
							</div>	
					
						</div>
				
			</div>

		</br>

	<div class="">
		<div class="col-xs-2">
			<label class="sr-only" for="Denuncia Número"></label>
				<input type="text" id="denumero" name= "denumero" class="form-control" placeholder="denumero" value="<?php echo $_SESSION['']; ?>" readonly/>
		</div>
					
		<div class="col-xs-2">
			<input type="text" name= "diadenuncia" id="diadenuncia" class="form-control" placeholder="Dia" value="<?php echo $fecha; ?>" readonly/>
		</div>

		<div class="col-md-2">
			<input type="text" name= "horadenuncia" id="horadenuncia" class="form-control" placeholder="Hora" value="<?php echo $hora; ?>" readonly/>
		</div>

		</br></br></br>

		<div class="col-xs-2">		
			<input type="text" name= "matricula" id="matricula" class="form-control" placeholder="Matricula" value="">
		</div>

		<div class="col-xs-2">
			<input type="text" id="marca" name="marca" class="form-control" placeholder="Marca"/>
		</div>

		<div class="col-xs-2">
			<input type="text" id="modelo" name="modelo" class="form-control" placeholder="Modelo"/>
		</div>	

		</br></br></br>

		<div class="col-xs-2">
			<input type="text" id="tipo" name="tipo" class="form-control" placeholder="Tipo"/>
		</div>	

		<div class="col-xs-2">
			<input type="text" id="color" name="color" class="form-control" placeholder="Color"/>
		</div>	
		
		<div class="col-xs-2">
			<input type="text" name= "articulo" class="form-control" placeholder="Artículo" value=""/>
		</div>


		</br></br></br>

		<div class="col-xs-3">
			<input type="text" name= "lugar" class="form-control" placeholder="Lugar" value=""/>
		</div>

		
		

		<div class="col-xs-3">

				<select class="form-control">
					<option value="">Reglamento General de Circulación</option>
	  				<option value="">Ordenanza Municipal de Civismo</option>
	 				<option value="">Otras</option>
	  				 
	  			</select>

	  		</div>

	  	</br></br></br>

	  	<div class="panel panel-success">
			<div class="panel-heading">
				<div class="col-xs-12">
					<label><h3>Infracción</h3></label>
					</br></br></br>
					<textarea class="form-control" rows="4">
					</textarea>
				</div>

				</br></br></br>


			</div>
		</div>

		</br></br></br></br></br></br>


	<div class="panel panel-success">
		<div class="panel-heading">
			<div id="conductor">
				<h3>Persona Denunciada</h3>
			</div>	

		</div>	
	</div>

		</br>		
	
			<div class="col-xs-2">
			<input type="text" id="apellido1" name="apellido1" class="form-control" placeholder="Primer Apellido"/>
			</div>

			<div class="col-xs-2">
					<input type="text" id="apellido2" name="apellido2" class="form-control" placeholder="Segundo Apellido"/>
			</div>
			<div class="col-xs-3">
					<input type="text" id="nombre" name="nombre" class="form-control" placeholder="Nombre"/>
			</div>

			</br></br></br>

			<div class="col-xs-3">
				<input type="text" id="lugar" name= "lugar" class="form-control" placeholder="Direccion" value=""/>
			</div>
	
			<div class="col-xs-2">
				<input type="text" id="localidad" name="localidad" class="form-control" placeholder="Localidad"/>
			</div>

			
			<div class="col-xs-2">
				<input type="text" id="provincia" name="provincia" class="form-control" placeholder="Provincia"/>
			</div>

			</br></br></br>

			<div class="col-xs-1">
				<input type="text" id="codiPostal" name="codiPostal" class="form-control" placeholder="C.Postal"/>
			</div>
			
			
			<div class="col-xs-2">

				<select class="form-control">
					<option value="">Tipo de documento</option>
	  				<option value="">DNI</option>
	 				<option value="">NIE</option>
	  				<option value="">PASAPORTE</option>
	  			</select>

	  		</div>

	  		<div class="col-xs-2">
				<input type="text" id="número" name="número" class="form-control" placeholder="Número"/>
			</div>	

			<div class="col-xs-2">
				<input type="text" id="fechanacimiento" name="fechanacimiento" class="form-control" placeholder="Fecha Nacimiento"/>
			</div>

			</br></br></br>

			<div class="col-xs-1">
				<input type="text" id="clase" name= "clase" class="form-control" placeholder="Clase " />
			</div>

			</br></br></br>

			<div class="panel panel-success">
		<div class="panel-heading">
			<div id="conductor">
				<h3>Titular del vehículo</h3>
			</div>	

		</div>	
	</div>

	</br>

	<div class="col-xs-2">
			<input type="text" id="apellido1" name="apellido1" class="form-control" placeholder="Primer Apellido"/>
			</div>

			<div class="col-xs-2">
					<input type="text" id="apellido2" name="apellido2" class="form-control" placeholder="Segundo Apellido"/>
			</div>
			<div class="col-xs-3">
					<input type="text" id="nombre" name="nombre" class="form-control" placeholder="Nombre"/>
			</div>

			</br></br></br>

			<div class="col-xs-3">
				<input type="text" id="lugar" name= "lugar" class="form-control" placeholder="Direccion" value=""/>
			</div>
	
			<div class="col-xs-2">
				<input type="text" id="localidad" name="localidad" class="form-control" placeholder="Localidad"/>
			</div>

			
			<div class="col-xs-2">
				<input type="text" id="provincia" name="provincia" class="form-control" placeholder="Provincia"/>
			</div>

			</br></br></br>

			<div class="col-xs-1">
				<input type="text" id="codiPostal" name="codiPostal" class="form-control" placeholder="C.Postal"/>
			</div>
			
			
			<div class="col-xs-2">

				<select class="form-control">
					<option value="">Tipo de documento</option>
	  				<option value="">DNI</option>
	 				<option value="">NIE</option>
	  				<option value="">PASAPORTE</option>
	  			</select>

	  		</div>

	  		<div class="col-xs-2">
				<input type="text" id="número" name="número" class="form-control" placeholder="Número"/>
			</div>	

			<div class="col-xs-2">
				<input type="text" id="fechanacimiento" name="fechanacimiento" class="form-control" placeholder="Fecha Nacimiento"/>
			</div>

			</br></br></br>

			<div class="col-xs-1">
				<input type="text" id="clase" name= "clase" class="form-control" placeholder="Clase " />
			</div>

		
		</br></br></br>
						
		<div class="panel panel-danger">
			<div class="panel-heading">
				<div id="Firmas">
					<h3>Firmas</h3>
				</div>
			</div>
		</div>
			
			
				<div class="col-xs-2">
					<input type="text" id="agentes" name= "nombre" class="form-control" placeholder="Agente1"/>
				</div>

				<div class="col-xs-2">
					<input type="text" id="cantidad" name= "cantidad" class="form-control" placeholder="Cantidad"/>
				</div>


				<div class="col-xs-2">
					<input type="text" id="cantidaddesc" name= "cantidaddesc" class="form-control" placeholder="Dto 50%"/>
				</div>	

				<div class="col-xs-2">
					<input type="text" id="denunciado" name= "denunciado" class="form-control" placeholder="Denunciado"/>
				</div>

				<div class="col-xs-12">
					<a href="">
					</br>
					<button type="button" class="btn btn-primary">Enviar</button>
			 		</a>
			 		</br></br></br>
				</div>	


			</br></br></br></br></br></br>
	
			
		
	


					
				

		<script src="js/jquery.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous">
		</script>
	
	
	</body>

</html>