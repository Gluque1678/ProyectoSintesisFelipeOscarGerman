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
				<img id="logo" src="img/logoUrbanaActas.png" alt="">
			
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


				<div class="row">
					<div class="col-xs-2"
				
						<label class="sr-only" for="NºDiligencias"></label>
						<input type="text" id="diligencias" name= "diligencias" class="form-control" placeholder="Número de Diligencias"/>
				
					</div>

					<div class="col-xs-1">
						<input type="text" id="tip1" name= "agentes" class="form-control" placeholder="Agente 1" />
					</div>

					<div class="col-xs-1">
						<input type="text" id="tip2" name= "agentes" class="form-control" placeholder="Agente 2" /></br>
					</div>

					<div class="col-xs-2">
						<input type="date" id="date" name= "dia" class="form-control" placeholder="Fecha" value=""/>
					</div>


					<div class="col-md-2">
						<input type="time" id="time" name= "hora" class="form-control" placeholder="Hora" value=""/></br>
					</div>

					<div class="col-xs-3">
						<input type="text" id="lugar" name= "lugar" class="form-control" placeholder="Lugar" value=""/>
					</div>
				</div>

		
			</div>
		</div>



		<div class="panel panel-danger">
			<div class="panel-heading">

				<div class="radio">
				
					<label>
						<label for=""></label><h4 style="margin-top: -5px;">Datos de la persona requerida</h4>
						
					</label>

				</div>


				<div class="row">
					<div class="col-xs-2">
						<label class="sr-only" for=""></label>
						<input type="text" id="nombre" name= "nombre" class="form-control" placeholder="Nombre"/>
					</div>

					<div class="col-xs-2">
						<input type="text" id="apellidos" name= "apellidos" class="form-control" placeholder="Apellidos" />
					</div>

					<div class="col-xs-3">
						<input type="text" id="número" name= "número" class="form-control" placeholder="Tipo de documento identificativo y número" />
					</div>
					</br></br></br>
				</div>


		<div class="panel panel-warning">
			<div class="panel-heading">	
				<div class="row">
					

					<div class="col-xs-2">
						<input type="text" id="prueva 1" name= "prueva1" class="form-control" placeholder="Prueva 1" />
					</div>

					<div class="col-xs-2">
						<input type="text" id="prueva2" name= "prueva2" class="form-control" placeholder="Prueva 2" /></br>
					</div>

					
			
				</div>

		
			</div>
		</div>



			
			</div>	
		</div>
	</div>

			<script src="js/jquery.js"></script>
			<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous">
			</script>

</body>
</html>