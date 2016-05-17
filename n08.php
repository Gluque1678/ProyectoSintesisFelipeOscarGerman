<?php
session_start();
$dni=$_SESSION['dni_datos'];
$tip=$_SESSION['TIP'];
include("conexion.proc.php");

$hora= date ("h:i:s");
$fecha= date ("d/m/Y");

?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>N08</title>
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
			
					<form class="form-incline" class="N08"  method="" action="" onsubmit="return validaFormulario();">
		
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
					<div class="col-xs-2">
				
							<label class="sr-only" for="NºDiligencias"></label>
							<input type="text" id="Numdiligencias" name= "diligencias" class="form-control" placeholder="Número de Diligencias" value="<?php echo $_SESSION['diligencias']; ?>" readonly/>
					
					</div>
					
						<div class="col-xs-1">		
						<input type="text" id="agentes" name= "agentes" class="form-control" placeholder="Agente1" value="<?php echo $tip; ?>" readonly/>
						</div>

						<div class="col-xs-1">		
						<input type="text" id="agente2" name= "agentes" class="form-control" placeholder="Agente2" value="<?php echo $tip; ?>" readonly/>
						</div>

					</br></br></br>

						<div class="col-xs-2">
						<input type="text" name= "dia" id="dia" class="form-control" placeholder="Fecha" value="<?php echo $fecha; ?>" readonly/>
						</div>

						<div class="col-md-2">
						<input type="text" name= "hora" id="hora" class="form-control" placeholder="Hora" value="<?php echo $hora; ?>" readonly/></br>
						</div>

										
				</div>	


	</br></br></br>

		<div class="panel panel-success">
			<div class="panel-heading">	
		
				<div id="actuacion">

				<h3>Acta de información a la persona imputada no detenida sobre sus derechos y de citación por causa penal</h3>
				<h3>Datos donde se produce la actuación policial</h3>
		
				</div>
			</div>	

		</div>	
			

			<div class="">
				<div class="col-xs-12">
					
					<div class="col-xs-4">
						<input type="text" id="lugar" name= "lugar" class="form-control" placeholder="Direccion(Tipo de via,nombre y número)" value=""/>
					</div>

					<div class="col-xs-4">
						<input type="text" id="municipio" name= "municipio" class="form-control" placeholder="Municipio" value=""/>
					</div>

					</br></br></br>

					<div class="col-xs-3">
						<input type="text" id="cuerpo" name= "cuerpo" class="form-control" placeholder="Agente Cuerpo" value=""/>
					</div>

			
					<div class="col-xs-1">
						<input type="text" id="agentes" name= "cuerpo" class="form-control" placeholder="Agente1" value=""/>
					</div>

					<div class="col-xs-1">
						<input type="text" id="agente2" name= "cuerpo" class="form-control" placeholder="Agente2" value=""/>
					</br>
					</div>
				
				</div>
				
			</div>
			<br /><br /><br /><br /><br /><br />



	<div class="panel panel-danger">
			<div class="panel-heading">


				<div id="imputada">
				
					<label class="persona" for=""><h3>Datos de la persona imputada</h3></label>

					</br>
				
					<div class="row">
						<div class="col-xs-2"
				
						<label class="sr-only" for=""></label>
						<input type="text" id="imputado1" name= "apellido1" class="form-control" placeholder="Primer apellido"/>
				
					</div>

					<div class="col-xs-2">
							<input type="text" id="imputado2" name= "apellido2" class="form-control" placeholder="Segundo apellido" />
					</div>

					<div class="col-xs-2">
							<input type="text" id="imputadonombre" name= "nombre" class="form-control" placeholder="Nombre" />
					</div>

					<div class="col-xs-2">
							<input type="text" id="imputadonacionalidad" name= "nacionalidad" class="form-control" placeholder="Nacionalidad" />
					</div>

						</br></br></br></br>
							
					<div class="col-xs-3">
							<input type="text" id="imputadodocumento" name= "documento" class="form-control" placeholder="Tipo de documento de identidad y pais" />
					</div>
						
					<div class="col-xs-2">
							<input type="text" id="imputadonumero" name= "numero" class="form-control" placeholder="Número" />
					</div>

					<div class="col-xs-3">
							<input type="text" id="imputadofecha" name= "fecha" class="form-control" placeholder="Fecha de Nacimiento" />
					</div>

						</br></br></br>
			
					</div>
					
				</div>
			</div>
		</div>

			

			<div class="panel panel-success">
				<div class="panel-heading">

					<div id="imputacion">
				
						<label class="motivo" for="imputacion"><h3>Motivo de la imputacion</h3></label>
					
						<textarea  class="form-control" rows="4">
						</textarea>
				
				
					</div>
												
				</div>

			</div>				


		<div class="panel panel-success">
			<div class="panel-heading">

				<div id="derechos">
				<label class="derechos" for="derechos"><h3> Derechos que quiere  ejercer la persona imputada</h3></label>
				</div>

			</div>

		</div>	

					<div class="col-xs-4">
							<input type="text" id="abogado" name= "privado" class="form-control" placeholder="Quiero que me asista el siguiente abogado" />
					</div>
				
					<div class="col-xs-4">
							<input type="text" id="intérprete" name= "intérprete" class="form-control" placeholder="Quiero que me asista un intérprete de" />
					</div>


					<div class="col-xs-5">

					<label>
					</br>
						<input type="radio" name="oficio" id="oficio"value="oficio"> Quiero un abogado de oficio&nbsp&nbsp
						<input type="radio" name="renuncio" id="renuncio"value="renuncio"> Renuncio a la asistencia letrada
					</label>
		
					</div>

					</br></br></br></br></br>

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

		</br></br></br></br></br></br>

		<div class="panel panel-success">
			<div class="panel-heading">

				<div id="compareciencia">
				
					<label class="compareciencia" for="compareciencia"><h3>Datos de la compareciencia por causa penal(imputado/ada)</h3>
					</label>
				
				</div>
			</div>
		</div>
					

			
	<div class="panel panel-danger">
			<div class="panel-heading">


				<div class="citacion">
					<div class="col-xs-2"
				
						<label class="sr-only" for=""></label>
						<input type="text" id="diacomparecer" name= "fecha" class="form-control" placeholder="Fecha"/>
				
					</div>

					<div class="col-xs-1">
						<input type="text" id="horacomparecer" name= "hora" class="form-control" placeholder="Hora" />
					</div>
							
				</div>

			
				<div class="col-xs-3">
					<select class="form-control">
					<option value="">Selecciona una opción</option>
	  				<option value="">Juzgado de Instrucción 1</option>
	 				<option value="">Juzgado de Instrucción 2</option>
	  				<option value="">Juzgado de Instrucción 3</option>
	  				<option value="">Juzgado de Instrucción 4</option>
	  				<option value="">Juzgado de Instrucción 5</option>
					</select>
				</div>

			
					<label class="direccion" for="direccion"><h4>Dirección: Av.Carrilet,número 2(edificio H) </br> Hospitalet de LLobregat Teléfono 935548145</h4></label>		
					

			</div>
	</div>



	<div class="panel panel-danger">
			<div class="panel-heading">

				<div id="Firmas">

					<label class="firmas" for="firmas"><h3>Firmas</h3></label>
				
				</div>

			</div>
	</div>

			

			<div class="">
				<div class="col-xs-2"
				
					<label class="sr-only" for=""></label>
					<input type="text" id="agentes" name= "nombre" class="form-control" placeholder="Agente1"/>
				
				</div>

				<div class="col-xs-2"
				
					<label class="sr-only" for=""></label>
					<input type="text" id="agente" name= "nombre" class="form-control" placeholder="Agentes2"/>
				
				</div>


				<div class="col-xs-2"
				
					<label class="sr-only" for=""></label>
					<input type="text" id="imputado" name= "imputado" class="form-control" placeholder="Imputado"/>
				
				</div>	

			</br></br></br>
			
	</div>		
		<script src="js/jquery.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous">
		</script>
	
		
	</body>

</html>