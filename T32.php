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
<title>T32</title>
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
			
					<form class="form-incline" class="T32"  method="" action="" onsubmit="return validaFormulario();">
		
						<div class="form-group">
							<div id="fuente" style="font-size:60px; margin-top: -80px; text-align: center;">
							 GUARDIA URBANA
							</div>	
					
						</div>
				
	</div>
					

	</br>

	<div class="row">
		<div class="col-xs-2"
			<label class="sr-only" for="NºDiligencias"></label>
			<input type="text" id="Numdiligencias" name= "diligencias" class="form-control" placeholder="Número de Diligencias" value="<?php echo $_SESSION['diligencias']; ?>" readonly/>
						
		</div>
					
		<div class="col-xs-2">		
			<input type="text" name= "agentes" id="agentes" class="form-control" placeholder="Agente1" value="<?php echo $tip; ?>" readonly/>
		</div>

		<div class="col-xs-2">		
		<input type="text" name= "agente2" id="agentes" class="form-control" placeholder="Agente2" value="<?php echo $tip; ?>" readonly/>
		</div>

		</br></br></br>

		<div class="col-xs-2">
		<input type="text" name= "dia" id="dia" class="form-control" placeholder="Fecha" value="<?php echo $fecha; ?>" readonly/>
		</div>

						
		<div class="col-md-2">
		<input type="text" name= "hora" id="hora" class="form-control" placeholder="Hora" value="<?php echo $hora; ?>" readonly/>
		</div>

						
		<div class="col-xs-2">
		<input type="text" name= "lugar" id="lugar" class="form-control" placeholder="Lugar" value=""/>
		</div>

						
	</div>
		
	
		</br>	
		
		

		<div class="panel panel-success">
			<div class="panel-heading">
				<div class="Atestado">
					<label for="fisica"><h4 style="margin-top: -5px;">Atestado Instruido por un presunto delito</h4>
					</label>
					</br>
				</div>
			</div>
		</div>
			
			</br>
			
			<label class="checkbox-inline">
  				<input type="checkbox" id="seguridadviaria" name="Comportamiento_agresivo" value="1"> Contra la seguridad viaria
			</label>
			
			</br>
			
			<label class="checkbox-inline">
 				 <input type="checkbox" id="taxa" name="Comportamiento_insultante" value="1"> Por conducir con una taxa de alcohol
 				 superior a 0,60 mg.
			</label>

			</br>
			
			<label class="checkbox-inline">
 			<input type="checkbox" id="estupefacientes" name="Comportamiento_irrespetuoso" value="1"> Por conducir bajo la influencia
 			 de bebidas alcoholicas o drogas tóxicas, estupefacientes o substancias psicotrópicas.
 			</label>

 			</br>

			<label class="checkbox-inline">
 			 <input type="checkbox" id="negativa" name="Comportamiento_euforico" value="1"> Por negarse a someterse a las pruevas de detección
 			 de alcoholemia, drogas tóxicas, estupefacientes o substancias psicotrópicas.
			</label>

			</br>

			<label class="checkbox-inline">
 			 <input type="checkbox" id="perdida" name="Comportamiento_muyloquaz" value="1"> Por perdida de vigencia del permiso o licencia de conducir
 			 por perdida de puntos.
			</label>

			</br>

			<label class="checkbox-inline">
 			 <input type="checkbox" id="privado" name="Comportamiento_excitado" value="1"> Por conducir estando privado cautelarmente/definitiva del permiso
 			o licencia por decisión judicial.
			</label>

			</br>

			<label class="checkbox-inline">
 			 <input type="checkbox" id="sinpermiso" name="checkboxEnLinea" value="1"> Por conducir un vehículo a motor/ciclomotor sin obtener nunca
 			 el permiso o licencia de conducir.
			</label>

			</br>

			<label class="checkbox-inline">
 			 <input type="checkbox" id="velocidad" name="checkboxEnLinea" value="1"> Por conducir a velocidad superior a la reglamentaria
 			 en 60 Km/h en via urbana o en 80 Km/h en via interurbana.
 			</label>

 			</br>

			<label class="checkbox-inline">
 			 <input type="checkbox" id="desobediencia" name="checkboxEnLinea" value="1"> Por desobediencia grave por rotura de immobilización
 			</label>


 			</br></br>

 			<div class="panel panel-success">
				<div class="panel-heading">
					<div id="vehículo">
					<h3>Datos de la persona denunciada que conduce el vehículo</h3>
					</div>	

				</div>	
			</div>

			</br>		
	
			<div class="col-xs-2">
				<input type="text" id="nombre" name="nombre" class="form-control" placeholder="Nombre"/>
			</div>

			<div class="col-xs-2">
				<input type="text" id="apellidos" name="apellido1" class="form-control" placeholder="Primer Apellido"/>
			</div>

			<div class="col-xs-2">
				<input type="text" id="apellidos2" name="apellido2" class="form-control" placeholder="Segundo Apellido"/>
			</div>

			<div class="col-xs-2">
				<input type="text" id="nacionalidad" name="nacionalidad" class="form-control" placeholder="Nacionalidad"/>
			</div>

			</br></br></br>

			<div class="col-xs-2">
				<input type="text" id="localidad" name="localidad" class="form-control" placeholder="Localidad"/>
			</div>

			<div class="col-xs-2">
				<input type="text" id="comarca" name="comarca" class="form-control" placeholder="Comarca"/>
			</div>

			<div class="col-xs-2">
				<input type="text" id="pais" name="pais" class="form-control" placeholder="Pais de Expedición"/>
			</div>

			<div class="col-xs-2">
				<input type="text" id="fechanacimiento" name="fechanacimiento" class="form-control" placeholder="Fecha Nacimiento"/>
			</div>

			</br></br></br>

			<div class="col-xs-2">
				<input type="text" id="Tipopaisdocumento" name="Tipopaisdocumento" class="form-control" placeholder="Tipo pais del documento"/>
			</div>

			<div class="col-xs-2">
				<input type="text" id="número" name="número" class="form-control" placeholder="Número"/>
			</div>	
				
			<div class="col-xs-2">
				<input type="text" id="Nombrepadre" name="Nombrepadre" class="form-control" placeholder="Nombre del padre"/>
			</div>

			<div class="col-xs-2">
				<input type="text" id="Nombremadre" name="Nombremadre" class="form-control" placeholder="Nombre de la madre"/>
			</div>

			</br></br></br>

			<div class="col-xs-3">
				<input type="text" id="lugar" name= "lugar" class="form-control" placeholder="Direccion" value=""/>
			</div>


			<div class="col-xs-2">
				<input type="text" id="municipio" name= "municipio" class="form-control" placeholder="Municipio" value=""/>
			</div>

			<div class="col-xs-2">
				<input type="text" id="comarca" name="comarca" class="form-control" placeholder="Comarca"/>
			</div>

			</br></br></br>


			<div class="col-xs-2">
				<input type="text" id="pais" name="pais" class="form-control" placeholder="Pais"/>
			</div>

								
			<div class="col-xs-2">
					<input type="text" id="telefono" name="telefono" class="form-control" placeholder="Teléfono"/>
			</div>		

				

			</br></br></br>

		

	<div class="panel panel-success">
		<div class="panel-heading">
			<div id="conductor">
				<h3>Permiso o licencia de conducir</h3>
			</div>	

		</div>	
	</div>


			
			<div class="col-xs-2">
					<input type="text" id="permiso" name="permiso" class="form-control" placeholder="Nº permiso de conducir"/>
			</div>

			<div class="col-xs-2">
					<input type="text" id="Tipocarnet" name="Tipocarnet" class="form-control" placeholder="Tipo de Carnet"/>
			</div>

			<div class="col-xs-2">
					<input type="text" id="pais" name="pais" class="form-control" placeholder="Pais de Expedición"/>
			</div>	

			</br></br></br>

			<div class="col-xs-2">
					<input type="text" id="fecha1expedicion" name="fecha1expedicion" class="form-control" placeholder="Fecha 1º Expedición"/>
			</div>	

			<div class="col-xs-2">
					<input type="text" id="Validohasta" name="Validohasta" class="form-control" placeholder="Valido hasta"/>
			</div>

			</br></br></br>

	<div class="panel panel-success">
		<div class="panel-heading">
			<div id="conducia">
				<h3>Vehículo que conducia</h3>
			</div>	

		</div>	
	</div>

		
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
			<input type="text" id="nomtitular" name="nomtitular" class="form-control" placeholder="Nombre titular"/>
		</div>	
				
		<div class="col-xs-2">
			<input type="text" id="1apelltitular" name="1apelltitular" class="form-control" placeholder="Primer Apellido titular"/>
		</div>

		<div class="col-xs-2">
			<input type="text" id="2apelltitular" name="2apelltitular" class="form-control" placeholder="Segundo Apellido titular"/>
		</div>	

		</br></br></br>

		<div class="col-xs-3">
			<input type="text" id="diretitu" name="diretitu" class="form-control" placeholder="Direccion del titular"/>
		</div>	

		<div class="col-xs-2">
			<input type="text" id="municipio" name="municipio" class="form-control" placeholder="Municipio"/>
		</div>	

		</br></br></br>

		<div class="panel panel-success">
			<div class="panel-heading">
				<div id="resultados">
					<h3>Resultados pruebas de alcoholemia y estupefacientes</h3>
				</div>	

			</div>	
		</div>
				
		<div class="row">
				
				<div class="col-xs-2">
				<label>Prueba de Alcoholemia</label>	
				</div>

				</br></br>

				<div class="col-xs-2">
					<input type="text" id="marcaetilometro" name= "marcaetilometro" class="form-control" placeholder="Marca Etilómetro"/>
				</div>

				<div class="col-xs-1">
					<input type="text" id="modelo" name= "modelo" class="form-control" placeholder="Modelo" />
				</div>

				<div class="col-xs-2">
					<input type="text" id="numeroserie" name= "numeroserie" class="form-control" placeholder="Numero de Serie" /></br>
				</div>

				<div class="col-xs-2">
					<input type="text" id="calibrado" name= "calibrado" class="form-control" placeholder="Calibrado hasta" value=""/>
				</div>

				</br></br></br>

				<div class="col-xs-2">
				<label>Primera prueba</label>	
				</div>

				
				<div class="col-xs-2">
				<label>Resultado</label>	
				</div>

				<div class="col-xs-2">
				<label>Segunda Prueba</label>	
				</div>

				<div class="col-xs-2">
				<label>Resultado</label>	
				</div>

				</br></br>

				<div class="col-md-2">
					<input type="text" id="hora" name= "hora" class="form-control" placeholder="Hora" value=""/></br>
				</div>

				<div class="col-xs-2">
					<input type="text" id="mg" name= "mg" class="form-control" placeholder="mg/l aire expirado" value=""/>
				</div>
				
				<div class="col-xs-2">
					<input type="text" id="hora2" name= "hora2" class="form-control" placeholder="Hora" value=""/>
				</div>

				<div class="col-xs-2">
					<input type="text" id="resultado2" name= "resultado2" class="form-control" placeholder="mg/l aire expirado" value=""/>
				</div>

		</div>

		

		<div class="panel panel-success">
			<div class="panel-heading">
				<div id="resultados">
					<h3>Prueba de detección de drogas tóxicas, estupefacientes o substancias psicotrópicas</h3>
				</div>	

			</div>	
		</div>	



		<div class="container">
  		
  		<!-- Trigger the modal with a button -->
 		 <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Prueba de drogas</button>

  		<!-- Modal -->
  			<div class="modal fade" id="myModal" role="dialog">
   				 <div class="modal-dialog">
    
     		<!-- Modal content-->
     				<div class="modal-content">
        				<div class="modal-header">
          				<button type="button" class="close" data-dismiss="modal">&times;</button>
          				<h4 class="modal-title">DROGAS</h4>
        				</div>
        	
        			<div class="modal-body">
        				<p>La persona se somete voluntariamente al traslado y posteriormente se le práctica un reconocimiento médico y obtención de las muestras que el personal facultativo considere</br>
        				mas oportuno.</br>
        				Se adjunta acta T-12 PL de determinación voluntaria en centro médico.
	 				</div>
     			</div>
   			</div>  
		</div>
	

			</br></br>

			<div class="col-md-2">
					<input type="text" id="horatraslado" name= "horatraslado" class="form-control" placeholder="Hora de traslado" value=""/></br>
			</div>
			
			<div class="col-md-2">
					<input type="text" id="centromedico" name= "centromedico" class="form-control" placeholder="Centro médico" value=""/></br>
			</div>
			
			
	


			
				
			

			<script src="js/jquery.js"></script>
			<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous">
			</script>

	</div>
	</body>

</html>