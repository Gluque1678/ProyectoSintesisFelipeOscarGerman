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
<title>Pestaña</title>
<meta name="vewport" content="device-width, user-scalable=no, initial-scale=1.0, minium-scale=1.0, minium-scale=1.0">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="css/styles.css" media="all">
<link rel="stylesheet" type="text/css" href="css/fonts1.css" media="all">
<script src="http://code.jquery.com/jquery-latest.js"></script>
<!-- Latest compiled and minified JavaScript -->
<link href="../libs/bootstrap-3.3.6-dist/css/bootstrap.min.css" rel="stylesheet">
<!--<script type="text/javascript" src="view.js"></script>
<script type="text/javascript" src="validaFormulario.js"></script>-->

</head>

<span class="ir-arriba icon-arrow-up"></span>
<section class="contenido">

<body id="main_body" style="background-color:#F5F6CE";>

	<div class="panel panel-primary" style="border: 8px solid transparent; border-color: #337ab7; background-color:#F5F6CE";>
		<div class="panel-heading">
			<img id="logo" src="img/logoUrbanaActas.png" alt="">
				<form class="form-incline" class="Denuncia Municipal"  method="" action="" onsubmit="return validaFormulario();">
		
				<div class="form-group">
					<div id="fuente" style="font-size:60px; margin-top: -80px; text-align: center;">
							 GUARDIA URBANA
					</div>	
					
				</div>
				
		</div>

		</br>

	
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					
					<ul class="nav nav-pills" role="tablist">
						<li role="presentacion" class="active">
							<a href="#datos" role="tab" data-toggle="tab">DATOS</a>
						</li>
						<li role="presentacion">
							<a href="#requerida" role="tab" data-toggle="tab">INFRACTOR</a>
						</li>
						<li role="presentacion">
							<a href="#simptomas" role="tab" data-toggle="tab">SIMPTOMAS</a>
						</li>
						<li role="presentacion">
							<a href="#resultados" role="tab" data-toggle="tab">RESULTADOS</a>
						</li>

						<li role="presentacion">
							<a href="#derechos" role="tab" data-toggle="tab">DERECHOS</a>
						</li>
						<li role="presentacion">
							<a href="#atestado" role="tab" data-toggle="tab">ATESTADO</a>
						</li>
						<li role="presentacion">
							<a href="#imputacion" role="tab" data-toggle="tab">IMPUTACION</a>
						</li>
						<li role="presentacion">
							<a href="#vehiculo" role="tab" data-toggle="tab">VEHÍCULO</a>
						</li>
						<li role="presentacion">
							<a href="#muni" role="tab" data-toggle="tab">DENUNCIA</a>
						</li>
						<li role="presentacion">
							<a href="#firmas1" role="tab" data-toggle="tab">FIRMAS</a>
						</li>
					</ul>	
	
				
			<div class="tab-content">
				<div class="tab-pane active" id="datos">
					<p><div class="panel panel-success">
							<div class="panel-heading">
								<div class="datos_acta">
									<h3>Datos del acta</h3>
								</div>
							</div>
						</div>	


						<div class="col-xs-12">
							<div class="col-xs-2">
				
								<label class="sr-only" for="NºDiligencias"></label>
								<input type="text" id="Numdiligencias" name= "Numdiligencias" class="form-control" placeholder="Número de Diligencias" value="" />
						
							</div>
					
								<div class="col-xs-1">		
									<input type="text" name= "agentes" id="agentes" class="form-control" placeholder="Agente1" value="<?php echo $tip; ?>" readonly/>
								</div>

<!-- 								<div class="col-xs-1">		
								<input type="text" name= "agente2" id="agentes" class="form-control" placeholder="Agente2" value="<?php echo $tip; ?>" readonly/>
								</div> -->
		
								<div class="col-xs-2">
								<input type="text" name= "dia" id="dia" class="form-control" placeholder="Fecha" value="<?php echo $fecha; ?>" readonly/>
								</div>

								<div class="col-md-2">
								<input type="text" name= "hora" id="hora" class="form-control" placeholder="Hora" value="<?php echo $hora; ?>" readonly/>
								</div>

								<div class="col-xs-3">
									<input type="text" id="cuerpo" name= "cuerpo" class="form-control" placeholder="Agente Cuerpo" value=""/>
								</div>

								</br></br></br>

								<div class="col-xs-4">
									<input type="text" id="lugar" name= "lugar" class="form-control" placeholder="Direccion(Tipo de via,nombre y número)" value=""/>
								</div>

								<div class="col-xs-4">
									<input type="text" id="municipio" name= "municipio" class="form-control" placeholder="Municipio" value=""/>
								</div>

								<div class="col-xs-3">
									<input type="text" id="provincia" name= "provincia" class="form-control" placeholder="Provincia" value=""/>
								</div>

								</br></br></br></br></br></br></br></br>
						</div>

							


					</p>
				

				</div>

					

					<div class="tab-pane" id="requerida">
					 	<p><div class="panel panel-success">
								<div class="panel-heading">
									<div id="vehículo">
									<h3>Datos de la persona denunciada que conduce el vehículo</h3>
									</div>	

								</div>	
							</div>

							<div class="col-xs-12">
								</br>
								<div class="col-xs-2">		
									<input type="text" name= "nombre" id="nombre" class="form-control" placeholder="Nombre" value="<?php echo $dni['Nombre']; ?>" readonly/>
								</div>
								
								<div class="col-xs-2">
									<input type="text" id="apellidos" name= "apellidos" class="form-control" placeholder="Primer Apellido" value="<?php echo $dni['Primerapellido']; ?>" readonly/>
								</div>
					
								<div class="col-xs-2">
									<label class="sr-only" for="apellidos"></label>
									<input type="text" id="apellidos2" name= "apellidos" class="form-control" placeholder="Segundo Apellido" value="<?php echo $dni['Segundoapellido']; ?>" readonly/>
								</div>
					
								<div class="col-xs-3">

							<!-- 	<select class="form-control">
									<option value="">Tipo de documento</option>
			  						<option value="">DNI</option>
			 						<option value="">NIE</option>
			  						<option value="">PASAPORTE</option>
			  						<option value="">Carnet de Conducir</option>
			  					</select> -->

	  							</div>
					
	  							<div class="col-xs-3">
									<input type="text" id="imputadodonumero" name= "imputadodonumero" class="form-control" placeholder="Número" value="<?php echo $dni['Num']; ?>" readonly/>
								</div>
							

								</br></br></br>

								<div class="col-xs-3">
								<input type="text" id="nacionalidad" name= "imputadodopais" class="form-control" placeholder="Nacionalidad" value="<?php echo $dni['Nacionalidad']; ?>" readonly/>
								</div>
								

								<div class="col-xs-3">
									<input type="text" id="localidad" name="localidad" class="form-control" placeholder="Localidad Nacimiento" value="<?php echo $dni['Lugarnacimiento']; ?>" readonly/>
								</div>

								<div class="col-xs-3">
									<input type="text" id="comarca" name="comarca" class="form-control" placeholder="Comarca" value="<?php echo $dni['Provincia']; ?>" readonly/>
								</div>

								<div class="col-xs-3">
									<input type="text" id="pais" name="pais" class="form-control" placeholder="Pais" value="<?php echo $dni['Nacionalidad']; ?>" readonly/>
								</div>

							</br></br></br>

								<div class="col-xs-2">
									<input type="text" id="fechanacimiento" name="fechanacimiento" class="form-control" placeholder="Fecha Nacimiento" value="<?php echo $dni['Fechanacimiento']; ?>" readonly/>
								</div>

								<div class="col-xs-3">
									<input type="text" id="Nombrepadres" name="Nombrepadres" class="form-control" placeholder="Nombre del padre" value="<?php echo $dni['Hijode']; ?>" readonly/>
								</div>

<!-- 								<div class="col-xs-3">
									<input type="text" id="Nombremadre" name="Nombremadre" class="form-control" placeholder="Nombre de la madre"/>
								</div> -->

								
								<div class="col-xs-4">
									<input type="text" id="lugar" name= "lugar" class="form-control" placeholder="Direccion" value="<?php echo $dni['Lugardomicilio']; ?>" readonly/>
								</div>

								</br></br></br>

								<div class="col-xs-4">
									<input type="text" id="municipio" name= "municipio" class="form-control" placeholder="Municipio" value="<?php echo $dni['Domicilio']; ?>" readonly/>
								</div>

							
<!-- 								<div class="col-xs-3">
									<input type="text" id="comarca" name="comarca" class="form-control" placeholder="Comarca"/>
								</div>

								
								<div class="col-xs-3">
									<input type="text" id="pais" name="pais" class="form-control" placeholder="Pais"/>
								</div> -->

								
								<div class="col-xs-2">
										<input type="text" id="telefono" name="telefono" class="form-control" placeholder="Teléfono"/>
								</div>		

				

								</br></br></br>

								<div class="col-xs-2">
									<input type="text" id="clase" name="clase" class="form-control" placeholder="Clase de Permiso" value="<?php echo $datos_permiso['Tipopermiso']; ?>" readonly/>
								</div>

								<div class="col-xs-2">
									<input type="text" id="pais" name="pais" class="form-control" placeholder="Pais de Expedición" value="<?php echo $datos_permiso['Pais']; ?>" readonly/>
								</div>	

								<div class="col-xs-2">
									<input type="text" name="altura" id="altura" class="form-control" placeholder="Altura" value=""/>
								</div>

								<div class="col-xs-2">
									<input type="text" name="peso" id="peso" class="form-control" placeholder="Peso" value=""/>
								</div>
				
								<div class="radio">
			
									<label>
										<h4>Sexo &nbsp</h4>
									</label>

									<label>
								
									<input type="radio" name="sexo" id="sexo" value="Hombre" checked>
										Hombre &nbsp
									</label>

									<label>
								
									<input type="radio" name="sexo" id="sexo" value="Mujer" checked>
										Mujer
									</label>
				
								</div>
							</div>


						</p>
					</div>

				
				
			<div class="tab-pane" id="simptomas">
			  <p><div class="panel panel-success">
					<div class="panel-heading">
						 <div class="Descripcion_conduccion">
							<label><h3>Descripcion de la conduccion</h3></label>
							<textarea class="form-control" rows="3" id="descripcion" name="descripcion">
							</textarea>	
						</div>
					</div>
				</div>

				<div class="panel panel-info">
					<div class="panel-heading">
						<div class="simptoma">
							<h3>Simptomatologia: Se hace constar que la persona requerida presentava la simptomatologia siguiente</h3>
						</div>
					</div>
				</div>             

				<div class="panel panel-success">
					<div class="panel-heading">
						<div class="">
						<h4>Habilitosi de alcohol</h4>
						
						</div>
					</div>
				
					<div class="col-xs-12">
						<label class="checkbox-inline">
							<input type="checkbox" name="halitosis" id="halitosis" value="1" checked>
							El olor que desprende es claramente detectable
						</label>
					</div>

				</div>

				<div class="panel panel-success">
					<div class="panel-heading">	
						<div class="constitucion">
							<label for="fisica"><h4 style="margin-top: -5px;">Constitución física</h4>
							</label>
						</div>
					</div>		

		
					<div class="col-xs-12">		
						<label>
							<input type="radio" name="constitucion" id="constitucion" value="Corpulenta" checked>
							Corpulenta
						</label>

						<label>
							
							<input type="radio" name="constitucion" id="constitucion" value="Mediana" checked>
							Mediana
						</label>
						
						<label>
							
							<input type="radio" name="constitucion" id="constitucion" value="Pequeña" checked>
							Pequeña
						</label>
					</div>
				
								
				</div>

					<div class="panel panel-success">
						<div class="panel-heading">

							<div class="Comportamiento">
								
								<label for="fisica"><h4 style="margin-top: -5px;">Comportamiento</h4>
								
								</label>
								</br>
							</div>
						</div>

						<div class="col-xs-12">

						
							<label class="checkbox-inline">
			  				<input type="checkbox" id="Comportamiento_agresivo" name="Comportamiento_agresivo" value="1"> Agresivo
							</label>
						
							<label class="checkbox-inline">
			 				 <input type="checkbox" id="Comportamiento_insultante" name="Comportamiento_insultante" value="1"> Insultante
							</label>
						
							<label class="checkbox-inline">
			 				 <input type="checkbox" id="Comportamiento_irrespetuoso" name="Comportamiento_irrespetuoso" value="1"> Irrespetuoso
							</label>

							<label class="checkbox-inline">
			 				 <input type="checkbox" id="Comportamiento_euforico" name="Comportamiento_euforico" value="1"> Eufórico
							</label>

							<label class="checkbox-inline">
			 				 <input type="checkbox" id="Comportamiento_muyloquaz" name="Comportamiento_muyloquaz" value="1"> Locuaz
							</label>

							<label class="checkbox-inline">
			 				 <input type="checkbox" id="Comportamiento_excitado" name="Comportamiento_excitado" value="1"> Excitado
							</label>

							<label class="checkbox-inline">
			 				 <input type="checkbox" id="Comportamiento_variaciones" name="checkboxEnLinea" value="1"> Variaciones obtadas de comportamiento o estado de ánimo
							</label>
							</div>

							
						</div>


						<div class="panel panel-success">
							<div class="panel-heading">
								<div class="Descripcion_Comportamiento">
									<label class="comportamiento" for=""><h4 style="margin-top: -5px;">Descripción del comportamiento</h4>
									</label>
									<textarea class="form-control" rows="3" name="descripcioncomportamiento" id="descripcioncomportamiento">
									</textarea>	
								</div>
							</div>
						</div>

	
						<div class="panel panel-success">
							<div class="panel-heading">
								<div class="Ojos">
							
								<label for="ojos"><h4 style="margin-top: -5px;">Ojos-Mirada&nbsp</h4>
									
								</label>
								</br>
								</div>
							</div>
			
							<div class="col-xs-12">

								<label class="checkbox-inline">
					  				<input type="checkbox" id="Mirada_midriaticos" name="Mirada_midriaticos" value="1"> Dilatación pupila
								</label>
								
								<label class="checkbox-inline">
					 				 <input type="checkbox" id="Mirada_mioticos" name="Mirada_mioticos" value="1"> Disminución pupila
								</label>
							
								<label class="checkbox-inline">
					 			 <input type="checkbox" id="Mirada_brillantes" name="Mirada_brillantes" value="1"> Brillantes
								</label>

								<label class="checkbox-inline">
					 			 <input type="checkbox" id="Mirada_somnolienta" name="Mirada_somnolienta" value="1"> Somnolientos
								</label>

								<label class="checkbox-inline">
					 			 <input type="checkbox" id="Mirada_perdida" name="Mirada_perdida" value="1"> Perdida
								</label>
							
							</div>

						</div>

		
						<div class="panel panel-success">
							<div class="panel-heading">
								<div class="Descripcion del habla">

									<label for="habla"><h4>Descripcion del habla</h4>
									</label>
								</div>
							</div>
			
			
							<div class="col-xs-12">

								<input id="Habla_pastosa" name="Habla_pastosa" maxlength="5" value="1" type="checkbox">
								<label for="pastosa">Pastosa
								</label>
								
								<input id="Habla_clara" name="Habla_clara" maxlength="5" value="1" type="checkbox">
								<label for="clara">Clara
								</label>
								
								<input id="Habla_vacilante" name="Habla_vacilante" maxlength="5" value="1" type="checkbox">
								<label for="vacilante">Vacilante
								</label>		
								
							</div>
						</div>


						<div class="panel panel-success">
							<div class="panel-heading">
								<div class="Manera de Expresarse">

								<label for="expresarse"><h4>Manera de Expresarse</h4></label></br>

								</div>
							</div>

							<div class="col-xs-12">	

								<input id="Expresion_ininteligibles" name="Expresion_ininteligibles" maxlength="5" value="1" type="checkbox">
								<label for="respuestas">Respuestas Ininteligibles</label>
								
								<input id="Expresion_incoherentes" name="Expresion_incoherentes" maxlength="5" value="1" type="checkbox">
								<label for="incoherente">Respuestas Incoherentes</label>

								<input id="Expresion_repetitivo" name="Expresion_repetitivo" maxlength="5" value="1" type="checkbox">
								<label for="repetitivo">Repetitivo</label>

								<input id="Expresion_fugaideas" name="Expresion_fugaideas" maxlength="5" value="1" type="checkbox">
								<label for="Fuga de ideas">Fuga de ideas</label>
					
							</div>
						</div>	



	<div class="panel panel-success">
		<div class="panel-heading">
			<div class="Psicomotricidad">

				<label for="psicomotricidad"><h4>Psicomotricidad</h4></label>
			</div>
		</div>

			<div class="col-xs-12">

				<input id="Psicomotricidad_vacilante" name="Psicomotricidad_vacilante" maxlength="5" value="1" type="checkbox">
				<label for="vacilante">Vacilante</label>
				
				<input id="Psicomotricidad_imprecision" name="Psicomotricidad_imprecision" maxlength="5" value="1" type="checkbox">
				<label for="distancias">Imprecision en los movimientos</label>

				<input id="Psicomotricidad_disminucionreflejos" name="Psicomotricidad_disminucionreflejos" maxlength="5" value="1" type="checkbox">
				<label for="movimientos">Disminución de los reflejos</label>

				<input id="Psicomotricidad_apreciacionfalsa" name="Psicomotricidad_apreciacionfalsa" maxlength="5" value="1" type="checkbox">
				<label for="reflejos">Falsa apreciación de las distancias</label>

			</div>
			
	</div>


	<div class="panel panel-success">
		<div class="panel-heading">
			<div class="Descripcion_Motricidad">

				<label for="motricidad"><h4>Descripción de la motricidad</h4></label></br>

			</div>

		</div>

			<div class="col-xs-12">
				</br>	
				<textarea class="form-control" rows="3" name="descripcionmotricidad" id="descripcionmotricidad">
				</textarea>
			</div>

	</div>

	</br></br></br></br>

			 </p>
					
</div>
				
			
			<div class="tab-pane" id="resultados">
				<p><div class="panel panel-success">
						<div class="panel-heading">
							<div class="resultados">
							<h3>Resultados pruebas de alcoholemia y estupefacientes</h3>
							</div>	

						</div>	
					</div>
			
					<div class="col-md-12">
						<label>Prueba de Alcoholemia</label>	
					</div>

					</br></br>

					<div class="col-xs-2">
						<input type="text" id="marcaetilometro" name= "marcaetilometro" class="form-control" placeholder="Marca Etilómetro"/>
					</div>

					<div class="col-xs-2">
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
						<input type="text" id="hora1" name= "hora1" class="form-control" placeholder="Hora" value=""/></br>
					</div>

					<div class="col-xs-2">
						<input type="text" id="mg1" name="mg1" class="form-control" placeholder="mg/l aire expirado" value=""/>
					</div>
					
					<div class="col-xs-2">
						<input type="text" id="hora2" name= "hora2" class="form-control" placeholder="Hora" value=""/>
					</div>

					<div class="col-xs-2">
					<input type="text" id="mg2" name= "mg2" class="form-control" placeholder="mg/l aire expirado" value=""/>
					</div>

				</br></br></br>

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
					</div>

					</br>			
					
					<div class="col-xs-2">
						<input type="text" id="horatraslado" name= "horatraslado" class="form-control" placeholder="Hora de traslado" value=""/></br>
					</div>
				
					<div class="col-xs-2">
						<input type="text" id="centromedico" name= "centromedico" class="form-control" placeholder="Centro médico" value=""/></br>
					</div>





				</p>
					
			</div>
		
	


				<div class="tab-pane" id="derechos">
					<p><div class="panel panel-success">
							<div class="panel-heading">
								<div class="Acta generica">
									<h3>Acta genérica de alcohol y/o drogas tóxicas,estupefacientes o substancias psicotrópicas</h3>
								</div>
							</div>
						</div>	
				
					<div class="col-xs-12">
			
						<label>
							<h4 style="margin-top: -5px;">Actuación originada por</h4>
						
						</label>

						<label>
							<input type="radio" name="opactuacion" id="opactuacion" value="Control preventivo">Control preventivo
						</label>

						<label>
							<input type="radio" name="opactuacion" id="opactuacion" value="Accidente de tránsito">Accidente de tránsito
						</label>
						
						<label>
							<input type="radio" name="opactuacion" id="opactuacion" value="Infracción del Reglamento">Infracción del Reglamento
						</label>

						<label>
							<input type="radio" name="opactuacion" id="opactuacion" value="Síntomas">Síntomas
						</label>

					</div>

		<div class="container">
  		
  		<!-- Trigger the modal with a button -->
 		 <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal1">Información de los derechos</button>

  		<!-- Modal -->
  		<div class="modal fade" id="myModal1" role="dialog">
   			 <div class="modal-dialog">
    
     		<!-- Modal content-->
     		<div class="modal-content">
        		<div class="modal-header">
          			<button type="button" class="close" data-dismiss="modal">&times;</button>
          			<h4 class="modal-title">ALCOHOLEMIA Y DROGAS</h4>
        		</div>
        	
        		<div class="modal-body">
        		<p>Alcoholèmia </br>

• En cas que el resultat de la prova fos positiu o la persona presentés signes evidents de trobar-se sota els efectes de begudes alcohòliques, es farà una segona prova de detecció alcohòlica en aire expirat, amb una diferència mínima de temps de 10 minuts, a fi de garantir la fiabilitat del resultat.</br>
• La persona requerida, la persona que l’acompanya o el/la testimoni present tenen dret a controlar que entre la primera i la segona prova hi ha transcorregut un temps mínim de 10 minuts.</br>
• La persona requerida, el seu defensor, si en té, o la persona que l’acompanya tenen dret a formular les al·legacions o observacions que considerin oportunes.</br></br>

Drogues tòxiques, estupefaents o substàncies psicotròpiques</br>
• Les proves per detectar substàncies estupefaents, psicotròpiques, estimulants o unes altres de semblants consisteixen, normalment, en el reconeixement mèdic de la persona i en les anàlisis que estimin adients el metge forense, un altre titular experimentat o el personal facultatiu del centre sanitari, la unitat mòbil sanitària o l’institut mèdic al qual sigui traslladada la persona requerida.</br>
• La prova de detecció de drogues tòxiques, estupefaents o substàncies psicotròpiques que han de dur a terme els agents de l’autoritat consisteix en una prova de detecció per un sistema automàtic d’anàlisi de la saliva per mitjà d’un aparell portàtil de detecció. Per aquest motiu, aquesta prova únicament ho és a efectes indiciaris.</br>
• Si la prova realitzada pels agents fos positiva, aquests podran demanar una mostra de saliva per fer una anàlisi posterior. Així mateix, la persona requerida podrà ser traslladada a un centre sanitari per practicar-li els reconeixements mèdics i/o fer-li les anàlisis clíniques que el facultatiu del centre sanitari estimi més convenients, que podran consistir en l’obtenció de mostres per fer una anàlisi de sang o d’altres. L’obtenció de aquestes mostres o reconeixements també es podrien dur a terme en el mateix punt de control, en una unitat mòbil sanitària.</br>
• Les mostres obtingudes pels agents de l’autoritat es traslladaran a l’Institut de Medicina Legal de Catalunya (IMELEC), a l’Institut Nacional de Toxicologia i Medicina Legal o al laboratori de referència, a fi d’analitzar-les, i també s’hi traslladarà el personal facultatiu del centre sanitari.</br>
• En cas que l’anàlisi realitzada pel laboratori sigui positiu, el Negociat d’Administració i Sancions iniciarà l’expedient sancionador corresponent per infracció de l’article 27 del Reglament general de circulació. Així mateix, i si escau, es posarà en coneixement de l’ordre jurisdiccional penal, als efectes oportuns.</br></br>
Tant en el cas d’alcoholèmia com en el de drogues tòxiques, estupefaents o substàncies psicotròpiques, la persona requerida té dret a la realització d’una prova de contrast dels resultats obtinguts mitjançant una anàlisi de sang, d’orina o altres proves anàlogues que el personal facultatiu del centre sanitari on sigui traslladada consideri convenients. La persona interessada ha de dipositar l’import d’aquestes anàlisis i, si el resultat de la prova de contrast és positiu, aquest import servirà per cobrir les despeses. Si el resultat és negatiu, les despeses seran a càrrec de les autoritats municipals o autonòmiques, i es retornarà el dipòsit a la persona interessada.</br>
S’ha d’informar a la persona requerida que la negativa a sotmetre’s a les proves establertes per comprovar les taxes d’alcoholèmia i la presència de drogues tòxiques, estupefaents o substàncies psicotròpiques comporta la imputació del delicte previst en l’article 383 del Codi penal, que preveu una pena de presó de sis mesos a un any i de privació del dret a conduir vehicles de motor i ciclomotors, per un temps comprès entre un any, com a mínim, i quatre anys, com a màxim.</p>

	 			</div>
     		</div>
   		</div>  
	</div>
	

	</br></br>

	</div>



		
	<div class="panel panel-success">
		<div class="panel-heading">
			<div class="Alegaciones">

				<label for="alegaciones"><h3 style="margin-top: -5px;">Alegaciones y derechos de la persona requerida delante la realización de las pruevas de detención</h3>
				</label></br>

				<label for="expresamente">La persona ha manifestado que
				</label>
				
				
				<input type="radio" style="margin-left: 10px;" name="negacion" id="negacion" value="1" checked>
				<label for="si">&nbsp;Si   
				</label>

				<input type="radio" style="margin-left: 10px;" name="negacion" id="negacion" value="0" checked>
				<label for="si">&nbsp;No quiere hacer la prueva de contraste
				</label>
			</div>
		</div>	

	</div>
		
	<div class="panel panel-success">
		<div class="panel-heading">
			<div class="negativa">

				<label for="negativa"><h3>Negativa a someterse a las pruebas de detección</h3></label>
			
				<label for="texto">Se hace constar que a las <input type="time" id="Horanegativa" name="Horanegativa"/>   horas de la fecha indicada se ha requerido la persona reseñada para que se sometiera a las pruebas legalmente establecidas, a fin </br>
				de comprobar las tasas de alcoholemia y la presencia de drogas tóxicas, estupefacientes y sustancias psicotrópicas a las que se refiere el artículo 379 </br> del Código penal, que ha sido informada sobre los derechos de realización de las
				 pruebas y que se ha negado.Tras haber sido informada de las consecuencias </br>
				 de la negativa a hacer la prueba, la persona requerida ha manifestado expresamente que no quiere hacer la prueba de detección y se reafirma en la negativa de someterse a ella.
   		  		 </label>
   			</div>

   		</div>
	</div>		

			</p>
					
</div>

				<div class="tab-pane" id="atestado">
					<p><div class="panel panel-success">
							<div class="panel-heading">
								<div class="Atestado">
									<label for="fisica"><h4 style="margin-top: -5px;">Atestado Instruido por un presunto delito</h4>
									</label>
									</br>
								</div>
							</div>
						</div>
			
			
						<div class="col-md-12">
							
							<label class="checkbox-inline">
				  				<input type="checkbox" id="seguridadviaria" name="seguridadviaria" value="1"> Contra la seguridad viaria
							</label>
							
							</br>
							
							<label class="checkbox-inline">
				 				 <input type="checkbox" id="taxa" name="taxa" value="1"> Por conducir con una taxa de alcohol
				 				 superior a 0,60 mg.
							</label>

							</br>
							
							<label class="checkbox-inline">
				 			<input type="checkbox" id="estupefacientes" name="estupefacientes" value="1"> Por conducir bajo la influencia
				 			 de bebidas alcoholicas o drogas tóxicas, estupefacientes o substancias psicotrópicas.
				 			</label>

				 			</br>

							<label class="checkbox-inline">
				 			 <input type="checkbox" id="negativa" name="negativa" value="1"> Por negarse a someterse a las pruevas de detección
				 			 de alcoholemia, drogas tóxicas, estupefacientes o substancias psicotrópicas.
							</label>

							</br>

							<label class="checkbox-inline">
				 			 <input type="checkbox" id="perdida" name="perdida" value="1"> Por perdida de vigencia del permiso o licencia de conducir
				 			 por perdida de puntos.
							</label>

							</br>

							<label class="checkbox-inline">
				 			 <input type="checkbox" id="privado" name="privado" value="1"> Por conducir estando privado cautelarmente/definitiva del permiso
				 			o licencia por decisión judicial.
							</label>

							</br>

							<label class="checkbox-inline">
				 			 <input type="checkbox" id="sinpermiso" name="sinpermiso" value="1"> Por conducir un vehículo a motor/ciclomotor sin obtener nunca
				 			 el permiso o licencia de conducir.
							</label>

							</br>

							<label class="checkbox-inline">
				 			 <input type="checkbox" id="velocidad" name="velocidad" value="1"> Por conducir a velocidad superior a la reglamentaria
				 			 en 60 Km/h en via urbana o en 80 Km/h en via interurbana.
				 			</label>

				 			</br>

							<label class="checkbox-inline">
				 			 <input type="checkbox" id="desobediencia" name="desobediencia" value="1"> Por desobediencia grave por rotura de immobilización
				 			</label>

				 		</br></br></br>

 						</div>

					</p>
					
				</div>



				<div class="tab-pane" id="imputacion">
					<p><div class="col-xs-14">
						<div class="panel panel-danger">
							<div class="panel-heading">
								<div id="imputada">
									<label class="persona" for=""><h3>Datos de la persona imputada</h3></label>
								</div>
							</div>
						</div>
					
						<div class="col-xs-12">
						
							<div class="col-xs-2">
									<input type="text" id="imputadonombre" name= "nombre" class="form-control" placeholder="Nombre" />
							</div>

							<div class="col-xs-2">
								<input type="text" id="imputado1" name= "apellido1" class="form-control" placeholder="Primer apellido"/>
							</div>

						<div class="col-xs-2">
								<input type="text" id="imputado2" name= "apellido2" class="form-control" placeholder="Segundo apellido" />
						</div>

						
						<div class="col-xs-3">
								<input type="text" id="imputadonacionalidad" name= "nacionalidad" class="form-control" placeholder="Nacionalidad" />
						</div>

						</br></br></br>
							
						<div class="col-xs-3">
						
							<select class="form-control">
								<option value="">Tipo de documento</option>
				  				<option value="">DNI</option>
				 				<option value="">NIE</option>
				  				<option value="">PASAPORTE</option>
				  				<option value="">CARNET DE CONDUCIR</option>
			  				</select>
						</div>

						<div class="col-xs-2">
							<input type="text" id="imputadonumero" name= "imputadonumero" class="form-control" placeholder="Número" />
						</div>

						<div class="col-xs-2">
							<input type="text" id="imputadodopais" name= "imputadodopais" class="form-control" placeholder="Pais" />
						</div>
							
						<div class="col-xs-2">
							<input type="text" id="imputadofecha" name= "fecha" class="form-control" placeholder="Fecha Nacimiento" />
						</div>

					</div>

						</br></br></br></br></br>

						<div class="panel panel-success">
							<div class="panel-heading">
								<div id="imputacion">
									<h3>Motivo de la imputacion</h3>
								</div>			
							</div>
						</div>		
						
						<div class="col-xs-12">
							<textarea  class="form-control" rows="1">
							</textarea>
						</div>
									
						</br></br>

						<div class="panel panel-success">
							<div class="panel-heading">
								<div id="derechos">
									<h3> Derechos que quiere  ejercer la persona imputada</h3>
								</div>
							</div>
						</div>	

						
						<div class="col-xs-12">
							<input type="radio" name="oficio" id="oficio" value="oficio"> Quiero un abogado de oficio&nbsp&nbsp
							<input type="radio" name="renuncio" id="renuncio" value="renuncio"> Renuncio a la asistencia letrada
						</div>	

						</br></br>
	
						<div class="col-xs-5">
							<input type="text" id="abogado" name= "privado" class="form-control" placeholder="Quiero que me asista el siguiente abogado" value="" />
						</div>
							
						<div class="col-xs-5">
							<input type="text" id="intérprete" name= "intérprete" class="form-control" placeholder="Quiero que me asista un intérprete de"value="" />
						</div>
		
						
						</br></br>
	
						<div class="panel panel-success">
							<div class="panel-heading">
								<div class="col-xs-12">
									<label><h3>Observaciones</h3></label>
									</br></br>
									<textarea class="form-control" rows="1">
									</textarea>
								</div>
						
						</br></br></br>

							</div>
						</div>

						</br></br>

						<div class="panel panel-success">
							<div class="panel-heading">
								<div id="compareciencia">
									<h3>Datos de la compareciencia por causa penal(imputado/ada)</h3>
								</div>
							</div>
						</div>
							
						<div class="col-xs-12">
							<div class="citacion">
								<div class="col-xs-2">
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

			
							<label><h4>Dirección: Av.Carrilet,número 2(edificio H) </br> Hospitalet de LLobregat Teléfono 935548145</h4></label>		
					
						</div>
						<br /><br /><br />

					</p>

				</div>
			</div>
				
				
				<div class="tab-pane" id="vehiculo">
					<p><div class="panel panel-success">
							<div class="panel-heading">
								<div class="vehiculo">
									<h4>Acta de immobilización de vehículo</h4>
									
								</div>
							</div>
						</div>

						<div class="col-xs-3">
							<input type="text" id="lugar" name="lugar" class="form-control" placeholder="Lugar"/>
						</div>
					
						<div class="col-xs-2">
							<input type="text" name= "dia" id="dia" class="form-control" placeholder="Fecha" value="<?php echo $fecha; ?>" readonly/>
						</div>
						
						<div class="col-xs-1">
							<input type="text" name= "hora" id="hora" class="form-control" placeholder="Hora" value="<?php echo $hora; ?>" readonly/>
						</div>
						
						
						<div class="col-xs-4">
							<input type="text" id="immobilizacion" name="immobilizacion" class="form-control" placeholder="Motivo de la immobilizacion"/>
						</div>

						</br></br></br>

						<div class="col-xs-4">
							<input type="text" id="lugarinmob" name="lugar" class="form-control" placeholder="Lugar de la Immobilización"/>
						</div>

						<div class="col-xs-2">
							<input type="text" id="denuncia" name="denuncia" class="form-control" placeholder="Denuncia número"/>
						</div>

						<div class="col-xs-5">

							<label>
							</br>
							<input type="checkbox" name="municipal" id="municipal"value="municipal"> Municipal&nbsp
							<input type="checkbox" name="transito" id="transitio"value="transito"> Servicio Catalan de Tránsito
							</label>
				
						</div>

												
						

						</br></br></br>
						
						<div class="col-xs-2">
							<input type="text" id="sistema" name="sistema" class="form-control" placeholder="Sistema de la Immobilización"/>
						</div>
						
						<div class="col-xs-2">
							<input type="text" id="kilometros" name="kilometros" class="form-control" placeholder="Kms"/>
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
							<input type="text" id="1apelltitular" name="1apelltitular" class="form-control" placeholder="1º Apellido titular"/>
						</div>

						<div class="col-xs-2">
							<input type="text" id="2apelltitular" name="2apelltitular" class="form-control" placeholder="2º Apellido titular"/>
						</div>	

					
						<div class="col-xs-4">
							<input type="text" id="diretitu" name="diretitu" class="form-control" placeholder="Direccion del titular"/>
						</div>	

					</br></br></br>

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

					<div class="panel panel-success">
						<div class="panel-heading">
							<div class="Rotura">
								<label for="firmas"><h3>Rotura de la immobilización:</h3></label>


							</div>
						</div>
					</div>

					<div class="">
						<div class="col-xs-2">
							<input type="text" id="fecha" name="fecha" class="form-control" placeholder="Fecha"/>
						</div>

						<div class="col-xs-2">
							<input type="text" id="hora" name="hora" class="form-control" placeholder="Hora"/>
						</div>
						
						<div class="col-xs-2">		
							<input type="text" name= "agentes" id="agentes" class="form-control" placeholder="Agente1" value="<?php echo $tip; ?>" readonly/>
						</div>


						<div class="col-xs-2">		
							<input type="text" name= "agente2" id="agentes" class="form-control" placeholder="Agente2" value="<?php echo $tip; ?>" readonly/>
						</div>


						<div class="col-xs-3">
							<input type="text" id="atestado" name= "atestado" class="form-control" placeholder="atestado desobediencia grave nº" />
							</br>
						</div>	
						
							</br></br></br>
					
					</div>

						<div class="panel panel-success">
							<div class="panel-heading">
								<div class="col-xs-12">
									<label class="observaciones" for="observaciones">Observaciones</label>
									</br>
									<textarea class="form-control" rows="1">
									</textarea>
								</div>

								</br></br></br></br>

							</div>
						</div>

					<div class="panel panel-success">
						<div class="panel-heading">		
							<div id="Levantamiento">
								<h3>Motivo del levantamiento de la inmobilitzación:</h3>
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

				    						
							<div class="col-xs-2">		
								<input type="text" name= "agentes" id="agentes" class="form-control" placeholder="Agente1" value="<?php echo $tip; ?>" readonly/>
							</div>


							<div class="col-xs-2">		
								<input type="text" name= "agente2" id="agentes" class="form-control" placeholder="Agente2" value="<?php echo $tip; ?>" readonly/>
							</div>


						
							<div class="col-xs-4">
								<label><h4>Persona que se hace cargo del vehículo</h4>
								</label>
							</div>

							</br></br></br></br>

							<div class="col-xs-2">
								<input type="text" id="nombre" name= "nombre" class="form-control" placeholder="Nombre " />
							</div>	
					
							<div class="col-xs-2">
								<input type="text" id="apellido1" name= "apellido1" class="form-control" placeholder="Primer Apellido" />
							</div>	
							<div class="col-xs-2">
								<input type="text" id="apellido1" name= "apellido1" class="form-control" placeholder="Segundo Apellido" />
							</div>	

													
							<div class="col-xs-2">
								<input type="text" id="permiso" name= "permiso" class="form-control" placeholder="Permiso de conducir Nº" />
							</div>	

							<div class="col-xs-1">
								<input type="text" id="clase" name= "clase" class="form-control" placeholder="Clase " />
							</div>	

							<div class="col-xs-2">
								<input type="text" id="pais" name= "pais" class="form-control" placeholder="Pais Expedición " />
							</div>	

						</div>
					</div>
	

						</br></br></br></br>



					</p>
				</div>

				
				<div class="tab-pane" id="muni">
					 	<p><div class="panel panel-success">
								<div class="panel-heading">
									<div id="muni">
										<h3>Denuncia Municipal</h3>
									</div>	

								</div>	
							</div>
							
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

								<div class="col-xs-3">
									<input type="text" name= "lugar" class="form-control" placeholder="Lugar" value=""/>
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

								<div class="col-xs-3">
									<input type="text" id="tipo" name="tipo" class="form-control" placeholder="Tipo"/>
								</div>			
												
								</br></br></br>

								
								<div class="col-xs-3">
									<input type="text" id="color" name="color" class="form-control" placeholder="Color"/>
								</div>	
								
								<div class="col-xs-2">
									<input type="text" name= "articulo" class="form-control" placeholder="Artículo Infracción" value=""/>
								</div>


								<div class="col-xs-4">

									<select class="form-control">
										<option value="">Reglamento General de Circulación</option>
									  	<option value="">Ordenanza Municipal de Civismo</option>
									 	<option value="">Otras</option>
									  				 
									</select>

								</div>

							  	</br></br></br>

							  	<div class="panel panel-success">
									<div class="panel-heading">
										<div class="explicacion">
											<label><h3>Infracción</h3></label>
											</br>
											<textarea class="form-control" rows="2">
											</textarea>
										</div>

										</br></br>


									</div>
								</div>

								
								<div class="panel panel-success">
									<div class="panel-heading">
										<div id="conductor">
											<h3>Persona Denunciada</h3>
										</div>	

									</div>	
								</div>

								</br>		
								
								<div class="col-xs-3">
									<input type="text" id="nombre" name="nombre" class="form-control" placeholder="Nombre"/>
								</div>

								<div class="col-xs-2">
								<input type="text" id="apellido1" name="apellido1" class="form-control" placeholder="Primer Apellido"/>
								</div>

								<div class="col-xs-2">
									<input type="text" id="apellido2" name="apellido2" class="form-control" placeholder="Segundo Apellido"/>
								</div>
								

								<div class="col-xs-3">
									<input type="text" id="lugar" name= "lugar" class="form-control" placeholder="Direccion" value=""/>
								</div>

							</br></br></br>
					
								<div class="col-xs-4">
									<input type="text" id="localidad" name="localidad" class="form-control" placeholder="Localidad"/>
								</div>

							
								<div class="col-xs-2">
									<input type="text" id="provincia" name="provincia" class="form-control" placeholder="Provincia"/>
								</div>

								
								<div class="col-xs-2">
									<input type="text" id="codiPostal" name="codiPostal" class="form-control" placeholder="C.Postal"/>
								</div>
								
								<div class="col-xs-2">
									<input type="text" id="fechanacimiento" name="fechanacimiento" class="form-control" placeholder="Fecha Nacimiento"/>
								</div>

								</br></br></br>
							
								<div class="col-xs-4">

									<select class="form-control">
										<option value="">Tipo de documento</option>
							  			<option value="">DNI</option>
							 			<option value="">NIE</option>
							  			<option value="">PASAPORTE</option>
							  			<option value="">CARNET DE CONDUCIR</option>
							  		</select>

			  					</div>

			  					<div class="col-xs-3">
									<input type="text" id="número" name="número" class="form-control" placeholder="Número"/>
								</div>	

								<div class="col-xs-2">
									<input type="text" id="clase" name= "clase" class="form-control" placeholder="Tipo Carnet " />
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

								<div class="col-xs-3">
									<input type="text" id="nombre" name="nombre" class="form-control" placeholder="Nombre"/>
								</div>

								<div class="col-xs-2">
									<input type="text" id="apellido1" name="apellido1" class="form-control" placeholder="Primer Apellido"/>
								</div>

								<div class="col-xs-2">
									<input type="text" id="apellido2" name="apellido2" class="form-control" placeholder="Segundo Apellido"/>
								</div>
								
								<div class="col-xs-3">
									<input type="text" id="lugar" name= "lugar" class="form-control" placeholder="Direccion" value=""/>
								</div>

								</br></br></br>
						
								<div class="col-xs-4">
									<input type="text" id="localidad" name="localidad" class="form-control" placeholder="Localidad"/>
								</div>

								
								<div class="col-xs-3">
									<input type="text" id="provincia" name="provincia" class="form-control" placeholder="Provincia"/>
								</div>

								<div class="col-xs-3">
									<input type="text" id="fechanacimiento" name="fechanacimiento" class="form-control" placeholder="Fecha Nacimiento"/>
								</div>

								</br></br></br>

								<div class="col-xs-2">
									<input type="text" id="codiPostal" name="codiPostal" class="form-control" placeholder="C.Postal"/>
								</div>
								
			
								<div class="col-xs-4">

									<select class="form-control">
										<option value="">Tipo de documento</option>
						  				<option value="">DNI</option>
						 				<option value="">NIE</option>
						  				<option value="">PASAPORTE</option>
						  				<option value="">CARNET DE CONDUCIR</option>
						  			</select>

						  		</div>

						  		<div class="col-xs-2">
									<input type="text" id="número" name="número" class="form-control" placeholder="Número"/>
								</div>	

															
								<div class="col-xs-2">
									<input type="text" id="clase" name= "clase" class="form-control" placeholder="Tipo Carnet" />
								</div>


								</br></br></br>

						</p>		

				</div>

			</div>


				<div class="tab-pane" id="firmas1">
					 	<p><div class="panel panel-success">
								<div class="panel-heading">
									<div id="firmas1">
										<h3>Firmas</h3>
									</div>	

								</div>	
							</div>

							<div class="">
								<div class="col-xs-2">
									<label class="sr-only" for=""></label>
									<input type="text" id="agentes" name= "nombre" class="form-control" placeholder="Agente1"/>
								</div>

								<div class="col-xs-2"
						
									<label class="sr-only" for=""></label>
									<input type="text" id="agente2" name= "nombre" class="form-control" placeholder="Agentes2"/>
						
								</div>

								<div class="col-xs-3">
									<input type="text" id="requerida" name= "requerida" class="form-control" placeholder="Persona requerida" />
								</div>

								<div class="col-xs-4">
									<input type="text" id="número " name= "número" class="form-control" placeholder="Persona conductora sustituta" />
								</div>

								</br></br></br>


							</div>

								<div class="col-xs-12">
									<a href="">
										<button type="button" class="btn btn-danger" style="margin-left: 1100px; margin-top:-205px;">Enviar</button>
		 							</a> 
								</div>

								</br></br></br></br></br>

						</p>

				</div>

				
				</section>


			</div>	
		</div>
	</div>
					
				

		<script src="js/jquery.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous">
		</script>
		<script src="../libs/jquery/jquery-2.1.4.min.js"></script>
		<script src="../libs/bootstrap-3.3.6-dist/js/bootstrap.min.js"></script>
		<script src="js/script.js"></script>
		
	
	</body>

</html>