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
<title>A13</title>
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
			
			<form class="form-incline" class="A13"  method="" action="" onsubmit="return validaFormulario();">
		
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


				<div class="">
					<div class="col-xs-2"
						
						</br>
						<label class="sr-only" for="NºDiligencias"></label>
						<input type="text" id="Numdiligencias" name= "diligencias" class="form-control" placeholder="Número de Diligencias" value="<?php echo $_SESSION['diligencias']; ?>" readonly/>
											
					</div>

					<div class="col-xs-1">
						<input type="text" name= "agentes" id="agentes" class="form-control" placeholder="Agente1" value="<?php echo $tip; ?>" readonly/>
					</div>

					<div class="col-xs-1">
						<input type="text" name= "agente2" id="agentes" class="form-control" placeholder="Agente2" value="<?php echo $tip; ?>" readonly/>
					</div>
					</br>
				
				</div>
			
		
					</br></br>

		<div class="panel panel-success">
			<div class="panel-heading">
				<div id="inmobilizacion">
					<h3>Acta de immobilización de vehículo</h3>
				</div>
			</div>		
		</div>

			
				<div class="col-xs-2">
					<input type="text" id="lugar" name="lugar" class="form-control" placeholder="Lugar"/>
				</div>
					
				<div class="col-xs-2">
					<input type="text" name= "dia" id="dia" class="form-control" placeholder="Fecha" value="<?php echo $fecha; ?>" readonly/>
				</div>
				
				<div class="col-xs-1">
					<input type="text" name= "hora" id="hora" class="form-control" placeholder="Hora" value="<?php echo $hora; ?>" readonly/>
				</div>
				
				</br></br></br>

				<div class="col-xs-3">
					<input type="text" id="immobilizacion" name="immobilizacion" class="form-control" placeholder="Motivo de la immobilizacion"/>
				</div>

				<div class="col-xs-2">
					<input type="text" id="denuncia" name="denuncia" class="form-control" placeholder="Denuncia número"/>
				</div>

				</br></br>

				<div class="col-xs-5">

				<label>
				</br>
					<input type="checkbox" name="municipal" id="municipal"value="municipal"> Municipal&nbsp
					<input type="checkbox" name="transito" id="transitio"value="transito"> Servicio Catalan de Tránsito
				</label>
		
				</div>

				</br></br></br>
				
				<div class="col-xs-3">
					<input type="text" id="lugarinmob" name="lugar" class="form-control" placeholder="Lugar de la Immobilización"/>
				</div>
				
				<div class="col-xs-3">
					<input type="text" id="sistema" name="sistema" class="form-control" placeholder="Sistema de la Immobilización"/>
				</div>
				
				<div class="col-xs-1">
					<input type="text" id="kilometros" name="kilometros" class="form-control" placeholder="Kms"/>
				</div>
				
		

		
			</br></br></br>	

	<div class="panel panel-success">
		<div class="panel-heading">
			<div id="conductor">
				<h3>Datos de la persona conductora</h3>
			</div>	

		</div>	
	</div>

		</br>		
	
			<div class="col-xs-2">
					<input type="text" id="nombre" name="nombre" class="form-control" placeholder="Nombre"/>
			</div>

			<div class="col-xs-2">
					<input type="text" id="apellido1" name="apellido1" class="form-control" placeholder="Primer Apellido"/>
			</div>

			<div class="col-xs-2">
					<input type="text" id="apellido2" name="apellido2" class="form-control" placeholder="Segundo Apellido"/>
			</div>

			</br></br></br>

			<div class="col-xs-2">
					<input type="text" id="permiso" name="permiso" class="form-control" placeholder="Nº permiso de conducir"/>
			</div>	
				
			<div class="col-xs-2">
					<input type="text" id="clase" name="clase" class="form-control" placeholder="Clase"/>
			</div>

			<div class="col-xs-2">
					<input type="text" id="pais" name="pais" class="form-control" placeholder="Pais de Expedición"/>
			</div>	

			</br></br></br>

			<div class="col-xs-2">
					<input type="text" id="direccion" name="direccion" class="form-control" placeholder="Direccion"/>
			</div>	
				
			<div class="col-xs-2">
					<input type="text" id="telefono" name="telefono" class="form-control" placeholder="Teléfono"/>
			</div>		

			<div class="col-xs-2">
					<input type="text" id="nacionalidad" name="nacionalidad" class="form-control" placeholder="Nacionalidad"/>
			</div>	

			</br></br></br>

		

	<div class="panel panel-success">
		<div class="panel-heading">		
			<div id="vehiculo">
				<h3>Datos del vehículo</h3>
				
			</div>
		</div>
	</div>			
			</br>

			<div class="col-xs-2">
				<input type="text" id="matricula" name="matricula" class="form-control" placeholder="Matrícula/bastidor"/>
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
			
			</br></br></br>

			<div class="col-xs-2">
				<input type="text" id="nomtitular" name="nomtitular" class="form-control" placeholder="Nombre titular"/>
			</div>	
				
			<div class="col-xs-2">
				<input type="text" id="1apelltitular" name="1apelltitular" class="form-control" placeholder="Primer Apellido titular"/>
			</div>

			<div class="col-xs-2">
				<input type="text" id="2apelltitular" name="2apelltitular" class="form-control" placeholder="Segundo Apellido titular"/>
			</div>	

			</br></br></br>

			<div class="col-xs-4">
				<input type="text" id="diretitu" name="diretitu" class="form-control" placeholder="Direccion del titular"/>
			</div>	

			<div class="col-xs-2">
				<input type="text" id="telefono" name="telefono" class="form-control" placeholder="Teléfono"/>
			</div>	

			
	

			</br></br></br>

			
		<div class="panel panel-success">
			<div class="panel-heading">
				<div id="disposicion">
					<h3>Vehículo a disposición de:</h3>
				
				</div>
			</div>
		</div>

				<div class="col-xs-3">
					<select class="form-control">
					<option value="">Selecciona una opción</option>
	  				<option value="">Juzgado de Guardia</option>
	 				<option value="">Titular</option>
	  				<option value="">Otro conductor habilitado</option>
	  				<option value="">Otros</option>
	 				</select>
				</div>

			</br></br></br>


		<div class="panel panel-danger">
			<div class="panel-heading">
				<div class="firmas">

					<label for="firmas"><h3>Firmas</h3></label>
				</div>
			</div>

		</div>

				
					<div class="">
						<div class="col-xs-2">
							<input type="text" id="nombre" name= "nombre" class="form-control" placeholder="Firma agente 1"/>
						</div>

						<div class="col-xs-2">
							<input type="text" id="nombre" name= "nombre" class="form-control" placeholder="Firma agente 2"/>
						</div>

						<div class="col-xs-3">
							<input type="text" id="número " name= "número" class="form-control" placeholder="Persona conductora" />
						</div>
					</div>
	
		</br></br></br>

	<div class="panel panel-success">
		<div class="panel-heading">
			<div class="Rotura">
				<label for="firmas"><h3>Rotura de la immobilización:</h3></label>


			</div>
		</div>
	</div>

		
			<div class="">
				<div class="col-xs-3">
					<input type="text" id="fecha" name="fecha" class="form-control" placeholder="Fecha"/>
				</div>

				<div class="col-xs-2">
					<input type="text" id="hora" name="hora" class="form-control" placeholder="Hora"/>
				</div>
				
				<div class="col-xs-1">
					<input type="text" id="tip1" name= "agentes" class="form-control" placeholder="Agente1" />
				</div>

				<div class="col-xs-1">
					<input type="text" id="tip2" name= "agentes" class="form-control" placeholder="Agente2" />
				
				</div>	


				</br></br></br>

				<div class="col-xs-4">
					<input type="text" id="atestado" name= "atestado" class="form-control" placeholder="Se instruye atestado por desobediencia grave número" />
				</br>
				</div>	
				
				</br></br></br>
			
				</div>

			
			<div class="panel panel-success">
				<div class="panel-heading">

					
					<div class="col-xs-12">
					<label class="observaciones" for="observaciones">Observaciones</label>
					</br></br></br>
					<textarea class="form-control" rows="4">
					</textarea>
					</div>

				</br></br>

			</div>
		</div>




			</br></br></br></br></br>

	<div class="panel panel-danger">
		<div class="panel-heading">
			<div class="firmas">
				<label for="firmas"><h3>Firmas</h3></label>
			</div>
		</div>

	</div>

			
		
					<div class="">
						<div class="col-xs-2">
				
							<label class="sr-only" for=""></label>
							<input type="text" id="nombre" name= "nombre" class="form-control" placeholder="Firma agente 1"/>
				
						</div>

						<div class="col-xs-2"
				
							<label class="sr-only" for=""></label>
							<input type="text" id="nombre" name= "nombre" class="form-control" placeholder="Firma agente 2"/>
				
						</div>	
				
						<div class="col-xs-2">
							<input type="text" id="persona " name= "persona" class="form-control" placeholder="Conductor" />
						</div>
					</div>

			</br></br></br>

			
	<div class="panel panel-success">
		<div class="panel-heading">		
			<div id="Levantamiento">
				<label for="firmas"><h3>Motivo del levantamiento de la inmobilitzación:</h3></label>
			</div>
		</div>
	</div>


			<div class="col-xs-3">
					<select class="form-control">
					
					<option value="">Selecciona una opción</option>
					<option value="">Desaparecer las causas que lo motivaron</option>
	  				<option value="">Hacerse cargo otro conductor habilitado</option>
	 				<option value="">Ingreso al depósito por transcurrir más de 24 horas</option>
	  				
	 				</select>
			</div>


				<div id="Rotura1">
					<div class="">
						<div class="col-xs-2">
							<input type="text" id="fecha" name="fecha" class="form-control" placeholder="Fecha"/>
						</div>

						<div class="col-xs-2">
							<input type="text" id="hora" name="hora" class="form-control" placeholder="Hora"/>
						</div>

			    		</br></br></br>
				
						<div class="col-xs-1">
							<input type="text" id="tip1" name= "agentes" class="form-control" placeholder="Agente1" />
						</div>

						<div class="col-xs-1">
							<input type="text" id="tip2" name= "agentes" class="form-control" placeholder="Agente2" /></br>
						</div>



				</br></br></br>
				
				<div class="col-xs-4">
				<label><h4>Persona que se hace cargo del vehículo</h4>
				</label>
				</div>

				</br></br></br>

				<div class="col-xs-2">
					<input type="text" id="nombre" name= "nombre" class="form-control" placeholder="Nombre " />
				</div>	
				
				<div class="col-xs-2">
					<input type="text" id="apellido1" name= "apellido1" class="form-control" placeholder="Primer Apellido" />
				</div>	
				<div class="col-xs-2">
					<input type="text" id="apellido1" name= "apellido1" class="form-control" placeholder="Segundo Apellido" />
				</div>	

				</br></br></br>
				
				<div class="col-xs-2">
					<input type="text" id="permiso" name= "permiso" class="form-control" placeholder="Permiso de conducir Nº" />
				</div>	

				<div class="col-xs-2">
					<input type="text" id="clase" name= "clase" class="form-control" placeholder="Clase " />
				</div>	

				<div class="col-xs-2">
					<input type="text" id="pais" name= "pais" class="form-control" placeholder="Pais Expedición " />
				</div>	

			</div>
		</div>
	

		</br></br></br></br>

		<div class="panel panel-danger">
			<div class="panel-heading">

				<div id="Firmas">

					<label class="firmas" for="firmas"><h3>Firmas</h3></label>
				
				</div>

			</div>
		</div>

				
				<div class="">
												
						<div class="col-xs-2">
							<input type="text" id="persona" name= "persona" class="form-control" placeholder="Persona que Autoriza" />
						</div>
						
						<div class="col-xs-3">
							<input type="text" id="persona" name= "persona" class="form-control" placeholder="Persona que se hace cargo del vehículo" />
						</div>
						
						</br></br></br>

						<div class="col-xs-1">
							<input type="text" id="tip1" name= "agentes" class="form-control" placeholder="Agente1" />
						</div>

						<div class="col-xs-1">
							<input type="text" id="tip2" name= "agentes" class="form-control" placeholder="Agente2" /></br>
						</div>		

						
						<div class="col-xs-3">
							<select class="form-control">
					
							<option value="">Retirada y ingreso al depósito municipal de vehículos</option>
							<option value="">Victor-0, calle de la Glòria s/n</option>
	  						<option value="">Victor-30, parque de la Serpiente</option>
	 						<option value="">Victor-10</option>
	  				
	 						</select>
							
						</div>
			
				</div>
				
					<div class="col-xs-12">
						<a href="">
						</br>
						<button type="button" class="btn btn-primary">Enviar</button>
						</a>
					</div>	
							
									
					</br></br></br></br></br></br></br>

											
		<script src="js/jquery.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous">
		</script>
		</div>
	</body>
</html>