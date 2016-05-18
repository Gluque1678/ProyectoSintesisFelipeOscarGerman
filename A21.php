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
<title>A21</title>
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
			
					<form class="form-incline" class="A21"  method="" action="" onsubmit="return validaFormulario();">
		
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

						<div class="col-xs-3">
						<input type="text" name= "lugar" class="form-control" placeholder="Lugar" value=""/>
						</div>

						
				</div>
			
		
		</br></br></br></br></br></br>

		<div class="panel panel-danger">
			<div class="panel-heading">	
			<h3> Acta de simptomatologia: Datos de la persona requerida </h3>

				<div class="col-xs-12">
				</br></br>
					<div class="col-xs-2">
						<input type="text" id="apellidos" name= "apellidos" class="form-control" placeholder="Primer Apellido" value="<?php echo $dni['Primerapellido']; ?>" readonly/>
					</div>
					
					<div class="col-xs-2">
				
						<label class="sr-only" for="apellidos"></label>
						<input type="text" id="apellidos2" name= "apellidos" class="form-control" placeholder="Sedundo Apellido" value="<?php echo $dni['Primerapellido']; ?>" readonly/>
						
							
					</div>
					
					<div class="col-xs-2">		
					<input type="text" name= "nombre" id="nombre" class="form-control" placeholder="Nombre" value="<?php echo $dni['Nombre']; ?>" readonly/>
					</div>

					<div class="col-xs-2">
					<input type="text" name= "permiso" id="permiso" class="form-control" placeholder="Núm permiso de conducir" value="<?php echo $dni['Num']; ?>" readonly/>
					</div>

					</br></br></br>


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

				<div class="col-xs-1">
					<input type="text" name= "altura" id="altura" class="form-control" placeholder="Altura" value=""/>
				</div>

				<div class="col-xs-1">
					<input type="text" name= "peso" id="peso" class="form-control" placeholder="Peso" value=""/>
				</div>
				
			</div>


				</div>

			
		</div>
	</div>	
		


		</br></br></br></br></br></br>

		<div class="panel panel-success">
			<div class="panel-heading">
				<div class="Descripcion_conduccion">
					<label><h3>Descripcion de la conduccion</h3></label>
					<textarea class="form-control" rows="5" id="descripcion" name= "descripcion">
					</textarea>	
				</div>

					
			</div>
		</div>

			
		<div class="panel panel-info">
			<div class="panel-heading">
			
				<div class="simptoma">
				
					<label for="simptoma"><h3 style="margin-top: -5px;">Simptomatologia: Se hace constar que la persona requerida presentava la simptomatologia siguiente</h3>
					</label>
				
				</div>

			</div>
		</div>


		<div class="panel panel-success">
			<div class="panel-heading">
				<div class="">
			
				<label for="olor"><h4 style="margin-top: -5px;">Habilitosi de alcohol</h4>
					
				</label>


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
					<textarea class="form-control" rows="5" name="descripcioncomportamiento" id="descripcioncomportamiento">
					</textarea>	
				</div>

				</br>


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

				<textarea rows="4" cols="185" id="Descripcionmotricidad" name="Descripcionmotricidad">
				</textarea>

			</div>

	</div>

	</br></br></br>

	<div class="panel panel-danger">
		<div class="panel-heading">
			<div class="firma de los agentes">

			<label for="agentes"><h4>Firma de los agentes</h4></label>
			</div>
		</div>

	

	</div>	
			
		
			<div class="col-xs-2">
				
				<input type="text" id="agentes" name= "nombre" class="form-control" placeholder="Agente1"/>
			</div>

			<div class="col-xs-2">
				
				<input type="text" id="agente2" name= "nombre" class="form-control" placeholder="Agentes2"/>
				
			</div>

		</br></br></br>
			
			<div class="col-xs-12">
						<a href="">
						<button type="button" class="btn btn-primary">Enviar</button>
 						</a>
			</div>
		
			</br></br></br>

		<script src="js/jquery.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous">
		</script>
	
		</div>
	</body>

</html>
