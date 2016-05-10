<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>T27</title>
<meta name="vewport" content="device-width, user-scalable=no, initial-scale=1.0, minium-scale=1.0, minium-scale=1.0">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="css/styles.css" media="all">
<!-- Latest compiled and minified JavaScript -->

<!--<script type="text/javascript" src="view.js"></script>
<script type="text/javascript" src="validaFormulario.js"></script>-->

</head>

<body id="main_body" >

	<div class="panel panel-primary">
		<div class="panel-heading">
				<img id="logo" src="img/Escutcolor.jpg" width="60px" height="50px" alt="">
			
			<form class="form-incline" class="T27"  method="" action="" onsubmit="return validaFormulario();">
		
			<div class="form-group">
				<div id="texto">
					AYUNTAMIENTO DEL HOSPITALET DE LLOBREGAT
					AREA DE SEGUREDAD, CONVIVENCIA Y CIVISMO
					SERVICIO DE LA GUARDIA URBANA
			
				</div>

			</div>	
		</div>

		
		</br></br>
		
		<div class="panel panel-success">
			<div class="panel-heading">

				<div id="datos_acta">
				
				<h3>Datos del acta</h3>
				
				</div>


				<div class="row">
					<div class="col-xs-2"
				
						<label class="sr-only" for="NºDiligencias"></label>
						<input type="diligencias" name= "diligencias" class="form-control" placeholder="Número de Diligencias"/>
				
					</div>

					<div class="col-xs-1">
						<input type="tip1" name= "agentes" class="form-control" placeholder="Agente 1" />
					</div>

					<div class="col-xs-1">
						<input type="tip2" name= "agentes" class="form-control" placeholder="Agente 2" /></br>
					</div>

					<div class="col-xs-2">
						<input type="date" name= "dia" class="form-control" placeholder="Fecha" value=""/>
					</div>


					<div class="col-xs-1">
						<input type="time" name= "hora" class="form-control" placeholder="Hora" value=""/></br>
					</div>

					<div class="col-xs-3">
						<input type="lugar" name= "lugar" class="form-control" placeholder="Lugar" value=""/>
					</div>
				</div>

		
			</div>
		</div>
			

		<div class="panel panel-success">
			<div class="panel-heading">
		

		
				<div class="Acta generica">
			
					<label for=""></label><h3 style="margin-top: -5px;">Acta genérica de alcohol y/o drogas tóxicas,estupefacientes o substancias psicotrópicas</h3>
				</div>
			
			</div>
		</div>	
				
				<div class="radio">
			
					<label>
						<label for=""></label><h4 style="margin-top: -5px;">Actuación originada por</h4>
					
					</label>



					<label>
					
					<input type="radio" name="opciones" id="opciones_1"value="opcion_1" checked>
					Control preventivo
					</label>

					<label>
					
						<input type="radio" name="opciones" id="opciones_2"value="opcion_2" checked>
						Accidente de transit
					</label>

					<label>
					
						<input type="radio" name="opciones" id="opciones_3"value="opcion_3" checked>
						Infracción del Reglamento
					</label>

					<label>
					
						<input type="radio" name="opciones" id="opciones_4"value="opcion_4" checked>
						Simptomas
					</label>

				</div>



	<div class="panel panel-danger">
		<div class="panel-heading">

			<div class="radio">
			
				<label>
					<label for=""></label><h4 style="margin-top: -5px;">Datos de la persona requerida</h4>
					
				</label>

			</div>


			<div class="row">
				<div class="col-xs-2"
				
					<label class="sr-only" for=""></label>
					<input type="nombre" name= "nombre" class="form-control" placeholder="Nombre"/>
				
				</div>

				<div class="col-xs-2">
					<input type="apellidos" name= "apellidos" class="form-control" placeholder="Apellidos" />
				</div>

				<div class="col-xs-2">
					<input type="número " name= "número" class="form-control" placeholder="Núm. permiso de conducir" />
				</div>
				</br></br></br>
			
			</div>
		</div>	
	</div>

	
	<div class="panel panel-danger">
		<div class="panel-heading">


			<div class="información de los derechos">
				<label for="información de los derechos"><h3 style="margin-top: -5px;">Información de los derechos</h3></label>
		
			</div>	

		
		</div>
	</div>	

		
	<div class="panel panel-success">
		<div class="panel-heading">

			<div class="radio">

				<label for="alegaciones"><h3 style="margin-top: -5px;">Alegaciones y derechos de la persona requerida delante la realización de las pruevas de detención</h3>
				</label></br>

				<label for="expresamente">La persona ha manifestado que
				</label>
				
				
				<input type="radio" style="margin-left: 10px;" name="opciones" id="opciones_1" value="opcion_1" checked>
				<label for="si">&nbsp;Si   
				</label>

				<input type="radio" style="margin-left: 10px;" name="opciones" id="opciones_2" value="opcion_2" checked>
				<label for="si">&nbsp;No quiere hacer la prueva de contraste
				</label>
			</div>
		</div>	

	</div>
		
	<div class="panel panel-success">
		<div class="panel-heading">
		
			<div class="negativa">

				<label for="negativa"><h3>Negativa a someterse a las pruebas de detección</h3></label>
			
				<label for="texto">Se hace constar que a las <input type="time" />   horas de la fecha indicada se ha requerido la persona reseñada para que se sometiera a las pruebas legalmente establecidas, a fin </br>
				de comprobar las tasas de alcoholemia y la presencia de drogas tóxicas, estupefacientes y sustancias psicotrópicas a las que se refiere el artículo 379 </br> del Código penal, que ha sido informada sobre los derechos de realización de las
				 pruebas y que se ha negado.Tras haber sido informada de las consecuencias </br>
				 de la negativa a hacer la prueba, la persona requerida ha manifestado expresamente que no quiere hacer la prueba de detección y se reafirma en la negativa de someterse a ella.
   		  		 </label>
   			</div>

   		</div>
	</div>		

   	<div class="panel panel-success">
		<div class="panel-heading">


   			<div class="autorizacion">

   		   	<label for="autorización"><h3>Autorización para substituir la persona conductora</h3></label>
   		 	 </br>

   			</div>

   		</div>
	</div>
   		
   		<div class="autorizacion">

   		<label class="checkbox-inline">
  			<input type="checkbox" id="checkboxEnLinea1" value="opcion_1"> Autoriza como persona conductora sustituta, después de comprobar el resultado negativo en la prueba, a:</br></br>
		</label>
		
		</div>


		<div class="row">
			<div class="col-xs-2"
				
				<label class="sr-only" for=""></label>
				<input type="nombre" name= "nombre" class="form-control" placeholder="Nombre"/>
				
			</div>

			<div class="col-xs-2">
				<input type="apellidos" name= "apellidos" class="form-control" placeholder="Apellidos" />
			</div>

			<div class="col-xs-2">
				<input type="número " name= "número" class="form-control" placeholder="Núm. permiso de conducir" />
			</div>

			<div class="col-xs-2">
				<input type="clase " name= "clase" class="form-control" placeholder="Clase" /></br>
			</div>

		</div>


		<div class="panel panel-danger">
			<div class="panel-heading">
				<div class="firmas">

					<label for="firmas"><h3>Firmas</h3></label>
				</div>
			</div>

		</div>

					<label for="firmas">Firmo este impreso entrega, como prueba de conformidad, junto con las personas que han intervenido.</br></br>
		
					<div class="row">
						<div class="col-xs-2"
				
							<label class="sr-only" for=""></label>
							<input type="nombre" name= "nombre" class="form-control" placeholder="Agente 1"/>
				
						</div>

						<div class="col-xs-2"
				
							<label class="sr-only" for=""></label>
							<input type="nombre" name= "nombre" class="form-control" placeholder="Agentes 2"/>
				
						</div>

						<div class="col-xs-2">
							<input type="requerida" name= "requerida" class="form-control" placeholder="Persona requerida" />
						</div>

						<div class="col-xs-2">
							<input type="testigo " name= "testigo" class="form-control" placeholder="Testigo" />
						</div>

						<div class="col-xs-2">
							<input type="número " name= "número" class="form-control" placeholder="Persona conductora" />
						</div>
					</div>

					
		<script src="js/jquery.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous">
		</script>
		</div>
	</body>
</html>