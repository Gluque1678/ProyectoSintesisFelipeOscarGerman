<?php

session_start();
$dni=$_SESSION['dni_datos'];
$tip=$_SESSION['TIP'];
$vehiculo = $_SESSION['matricula_datos'];
$permiso  = $_SESSION['permisoconducir_datos'];
$titular  = $_SESSION['titular_datos'];
// var_dump($permiso);

include("conexion.proc.php");

$hora= date ("h:i:s");
$fecha= date ("d/m/Y");

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Protocolo de alcoholemia</title>
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
				<form class="form-incline" class="Denuncia Municipal" method="POST" action="test.proc.php" onsubmit="return validaFormulario();">
		
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
							<a href="#simptomas" role="tab" data-toggle="tab">SÍNTOMAS</a>
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
							<a href="#imputacion" role="tab" data-toggle="tab">IMPUTACIÓN</a>
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

						<?php include 'template/datos.php' ?>
						<div style="height:200px;"></div>
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

							<?php include 'template/infractor.php' ?>
							<div style="height:500px;"></div>
						</p>
					</div>

				
				
			<div class="tab-pane" id="simptomas">
			  <p><div class="panel panel-success">
					<div class="panel-heading">
						 <div class="Descripcion_conduccion">
							<label><h3>Descripción de la conducción</h3></label>
							<textarea class="form-control" rows="3" id="descripcion" name="descripcion">
							</textarea>	
						</div>
					</div>
				</div>

				<?php include 'template/sintomas.php' ?>
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
			<?php include 'template/resultados.php' ?>


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
				
					<?php include 'template/derechos.php' ?>

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
							
							<?php include 'template/atestado.php' ?>

				 		<div style="height:500px;">
									
								</div>

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
					
						<?php include 'template/imputacion.php' ?>

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

					<?php include 'template/vehiculo.php' ?>


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
								<?php include 'template/denuncia.php' ?>
							
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
								
								<?php include 'template/firmas.php' ?>

							</div>

								<div class="col-xs-12">
									<a href="">
										<input type="submit" class="btn btn-danger" style="margin-left: 1060px; margin-top:-205px;"></input>
		 							</a> 
								</div>

								<div style="height:500px;"></div>

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