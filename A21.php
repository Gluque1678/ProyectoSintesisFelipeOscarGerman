<?php

session_start();
$dni=$_SESSION['dni_datos'];
var_dump($dni);
$tip=$_SESSION['TIP'];
var_dump($tip);
include("conexion.proc.php");
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>A21</title>
<link rel="stylesheet" type="text/css" href="styles.css" media="all">
<meta name="vewport" content="device-width, user-scalable=no, initial-scale=1.0, minium-scale=1.0, minium-scale=1.0">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->

<!--<script type="text/javascript" src="view.js"></script>
<script type="text/javascript" src="validaFormulario.js"></script>-->

</head>
<body id="main_body" >

	
	

		<div class="panel panel-primary">
			<div class="panel-heading">
				
				<img id="logo" src="img/Ajun.jpg" width="60px" height="50px" alt="">
				<h4>Ayuntamiento de L’Hospitalet
							Area de Seguredad,</br>
							Convivencia y Civismo
							Servicio de la Guardia Urbana
				</h4>
					<form class="form-incline" class="A21"  method="" action="" onsubmit="return validaFormulario();">
						
			</div>
				
				<div class="panel-body">
					


			
					<div class="form-group">


				

					</div>	
			</div>

		
			
		<div class="panel panel-success">
			<div class="panel-heading">

				<div id="datos_acta">
				
				<h3>Datos del acta</h3>
				
			</div>
					<div class="row">
						<div class="col-xs-2"
				
							<label class="sr-only" for="NºDiligencias"></label>
							<input type="diligencias" name= "diligencias" class="form-control" placeholder="Número de Diligencias"/></br>
						
						
						</div>
					
						<div class="col-xs-2">		
						<input type="tip" name= "agentes" class="form-control" placeholder="Agentes" value="<?php echo $tip; ?>" readonly/>
					</div>

						<div class="col-xs-2">
						<input type="date" name= "dia" class="form-control" placeholder="Fecha" value=""/>
						</div>

						<div class="col-xs-1">
						<input type="time" name= "hora" class="form-control" placeholder="hora" value=""/>
						</div>

						<div class="col-xs-3">
						<input type="lugar" name= "lugar" class="form-control" placeholder="Lugar" value=""/>
						</div>

						

				</div>
		</div>
			</br></br>

		<div class="panel panel-danger">
			<div class="panel-heading">	
			<h3 style="margin-top: -5px;"> Acta de simptomatologia: Datos de la persona requerida </h3>
			
				
		

				<div class="row">
					<div class="col-xs-2"
				
						<label class="sr-only" for="apellidos"></label>
						<input type="apellidos" name= "apellidos" class="form-control" placeholder="Apellidos" value="<?php echo $dni['Primerapellido']; ?>" readonly/>
						
							
					</div>
					
					<div class="col-xs-2">		
					<input type="nombre" name= "nombre" class="form-control" placeholder="Nombre" value="<?php echo $dni['Nombre']; ?>" readonly/>
					</div>

					<div class="col-xs-2">
					<input type="permiso" name= "permiso" class="form-control" placeholder="Núm permiso de conducir" value="<?php echo $dni['Num']; ?>" readonly/>
					</div>

					<div class="radio">
			
				<label>
					<h4>Sexo &nbsp</h4>
				</label>

				<label>
					
					<input type="radio" name="opciones" id="opciones_1"value="opcion_1" checked>
					Hombre &nbsp
				</label>

				<label>
					
					<input type="radio" name="opciones" id="opciones_2"value="opcion_2" checked>
					Mujer
				</label>

				<div class="col-xs-1">
					<input type="altura" name= "altura" class="form-control" placeholder="Altura" value=""/>
				</div>

				<div class="col-xs-1">
					<input type="peso" name= "peso" class="form-control" placeholder="Peso" value=""/>
				</div>
				
			</div>


				</div>

			
		</div>
	</div>	
		

		<div class="panel panel-info">
			<div class="panel-heading">
				<div class="Descripcion_conduccion">
					<label class="Descripcion" for=""><h3 style="margin-top: -5px;">Descripcion de la conduccion</h3></label>
					<textarea class="form-control" rows="5">
					</textarea>	
				</div>

					</br>


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
				<div class="radio">
			
				<label for="olor"><h4 style="margin-top: -5px;">Habilitosi de alcohol</h4>
					
				</label>


			</div>
		</div>
				<label>
					
					<input type="radio" name="opciones" id="opciones_1"value="opcion_1" checked>
					El olor que desprende es claramente detectable
				</label>

				<hr />
			</div>

		<div class="panel panel-success">
			<div class="panel-heading">	

				<div class="radio">
			
					<label for="fisica"><h4 style="margin-top: -5px;">Constitución física&nbsp</h4>
					
					</label>
				

			</div>
		</div>		

				<label>
					
					<input type="radio" name="opciones" id="opciones_1"value="opcion_1" checked>
					Corpulenta
				</label>

				<label>
					
					<input type="radio" name="opciones" id="opciones_1"value="opcion_1" checked>
					Mediana
				</label>
				
				<label>
					
					<input type="radio" name="opciones" id="opciones_1"value="opcion_1" checked>
					Pequeña
				</label>

				<hr />
				
				</div>

		<div class="panel panel-success">
			<div class="panel-heading">

				<div class="Comportamiento">
			
					<label for="fisica"><h4 style="margin-top: -5px;">Comportamiento&nbsp</h4>
					
					</label>
					</br>
			</div>
		</div>
			
			<label class="checkbox-inline">
  				<input type="checkbox" id="checkboxEnLinea1" value="opcion_1"> Agresivo
			</label>
			
			<label class="checkbox-inline">
 				 <input type="checkbox" id="checkboxEnLinea2" value="opcion_2"> Insultante
			</label>
			
			<label class="checkbox-inline">
 			 <input type="checkbox" id="checkboxEnLinea3" value="opcion_3"> Irrespetuoso
			</label>

			<label class="checkbox-inline">
 			 <input type="checkbox" id="checkboxEnLinea3" value="opcion_3"> Eufórico
			</label>

			<label class="checkbox-inline">
 			 <input type="checkbox" id="checkboxEnLinea3" value="opcion_3"> Locuaz
			</label>

			<label class="checkbox-inline">
 			 <input type="checkbox" id="checkboxEnLinea3" value="opcion_3"> Excitado
			</label>

			<label class="checkbox-inline">
 			 <input type="checkbox" id="checkboxEnLinea3" value="opcion_3"> Variaciones obtadas de comportamiento o estado de ánimo
			</label>
		</div>

		<hr />

		<div class="panel panel-success">
			<div class="panel-heading">

				<div class="Descripcion_Comportamiento">
					<label class="comportamiento" for=""><h4 style="margin-top: -5px;">Descripción del comportamiento</h4>
					</label>
					<textarea class="form-control" rows="5">
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

			<label class="checkbox-inline">
  				<input type="checkbox" id="checkboxEnLinea1" value="opcion_1"> Dilatación pupila
			</label>
			
			<label class="checkbox-inline">
 				 <input type="checkbox" id="checkboxEnLinea2" value="opcion_2"> Disminución pupila
			</label>
			
			<label class="checkbox-inline">
 			 <input type="checkbox" id="checkboxEnLinea3" value="opcion_3"> Brillantes
			</label>

			<label class="checkbox-inline">
 			 <input type="checkbox" id="checkboxEnLinea4" value="opcion_4"> Somnolientos
			</label>

			<label class="checkbox-inline">
 			 <input type="checkbox" id="checkboxEnLinea5" value="opcion_5"> Perdida
			</label>

			

			
		</div>

		</br>


		<div class="panel panel-success">
			<div class="panel-heading">
				<div class="Descripcion del habla">

					<label for="habla"><h4>Descripcion del habla</h4>
					</label></br>
				</div>
			</div>
					
					<input id="pastosa" name="pastosa" class="pastosa" maxlength="5" value="" type="checkbox">
					<label for="pastosa">Pastosa
					</label>
				
					<input id="clara" name="clara" class="disminucion" maxlength="5" value="" type="checkbox">
					<label for="clara">Clara</label>
				
					<input id="vacilante" name="vacilante" class="vacilante" maxlength="5" value="" type="checkbox">
					<label for="vacilante">Vacilante
					</label>		
				
		</div>


		<div class="panel panel-success">
			<div class="panel-heading">
				<div class="Manera de Expresarse">

				<label for="expresarse"><h4>Manera de Expresarse</h4></label></br>

			</div>
		</div>

				<input id="respuestas" name="respuestas" class="respuestas" maxlength="5" value="" type="checkbox">
				<label for="respuestas">Respuestas Ininteligibles</label>
				
				<input id="incoherente" name="incoherente" class="incoherente" maxlength="5" value="" type="checkbox">
				<label for="incoherente">Respuestas Incoherentes</label>

				<input id="repetitivo" name="repetitivo" class="otro" maxlength="5" value="" type="checkbox">
				<label for="repetitivo">Repetitivo</label>

				<input id="ideas" name="ideas" class="ideas" maxlength="5" value="" type="checkbox">
				<label for="Fuga de ideas">Fuga de ideas</label><hr />
		</div>


	<div class="panel panel-success">
		<div class="panel-heading">
			<div class="Psicomotricidad">

				<label for="psicomotricidad"><h4>Psicomotricidad</h4></label></br>
			</div>
		</div>

				<input id="" name="vacilante" class="vacilante" maxlength="5" value="" type="checkbox">
				<label for="vacilante">Vacilante</label>
				
				<input id="distancias" name="distancias" class="distancias" maxlength="5" value="" type="checkbox">
				<label for="distancias">Falsa apreciación de las distancias</label>

				<input id="movimientos" name="movimientos" class="movimientos" maxlength="5" value="" type="checkbox">
				<label for="movimientos">Movimientos Oscilantes de la Verticalidad</label>

				<input id="reflejos" name="reflejos" class="reflejos" maxlength="5" value="" type="checkbox">
				<label for="reflejos">Disminución de los reflejos</label>

				<hr />

	</div>


	<div class="panel panel-success">
		<div class="panel-heading">
			<div class="Descripcion_Motricidad">

				<label for="motricidad"><h4>Descripción de la motricidad</h4></label></br>

			</div>
		</div>
				<textarea rows="4" cols="185">
				</textarea>

	</div>

	<div class="panel panel-danger">
		<div class="panel-heading">
			<div class="firma de los agentes">

			<label for="agentes"><h4>Firma de los agentes</h4></label>
			</div>
		</div>

	</div>

		<script src="js/jquery.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous">
		</script>
	
		</div>
	</body>

</html>
