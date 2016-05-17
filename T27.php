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
<title>T27</title>
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
			
			<form class="form-incline" class="T27"  method="" action="" onsubmit="return validaFormulario();">
		
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
						<input type="text" id="agentes" name= "agentes" class="form-control" placeholder="Agente1" value="<?php echo $tip; ?>" readonly/>
					</div>

					<div class="col-xs-1">
						<input type="text" id="agente2" name= "agentes" class="form-control" placeholder="Agente2" value="<?php echo $tip; ?>" readonly/>
					</div>

					<div class="col-xs-2">
						<input type="text" name= "dia" id="dia" class="form-control" placeholder="Fecha" value="<?php echo $fecha; ?>" readonly/>
					</div>

					</br></br></br>


					<div class="col-xs-2">
						<input type="text" name= "hora" id="hora" class="form-control" placeholder="Hora" value="<?php echo $hora; ?>" readonly/></br>
					</div>

					<div class="col-xs-3">
						<input type="text" id="lugar" name= "lugar" class="form-control" placeholder="Lugar" value=""/>
					</div>
				</div>

		
				</br></br></br>	</br></br></br>

		<div class="panel panel-success">
			<div class="panel-heading">
		

		
				<div class="Acta generica">
			
					<label for=""></label><h3 style="margin-top: -5px;">Acta genérica de alcohol y/o drogas tóxicas,estupefacientes o substancias psicotrópicas</h3>
				</div>
			
			</div>
		</div>	
				
				<div class="col-xs-12">
			
					<label>
						<h4 style="margin-top: -5px;">Actuación originada por</h4>
					
					</label>

					<label>
						<input type="radio" name="opactuacion" id="opactuacion" value="1">Control preventivo
					</label>

					<label>
						<input type="radio" name="opactuacion" id="opactuacion" value="2">Accidente de tránsito
					</label>
					
					<label>
						<input type="radio" name="opactuacion" id="opactuacion" value="3">Infracción del Reglamento
					</label>

					<label>
						<input type="radio" name="opactuacion" id="opactuacion" value="4">Síntomas
					</label>

				</div>

			</br></br>



	<div class="panel panel-danger">
		<div class="panel-heading">
			<div class="requerida">
			
				<label>
					<label for=""></label><h4 style="margin-top: -5px;">Datos de la persona requerida</h4>
					
				</label>

			</div>


			<div class="row">
				<div class="col-xs-2"
				
					<label class="sr-only" for=""></label>
					<input type="text" id="nombre" name= "nombre" class="form-control" placeholder="Nombre" value="<?php echo $dni['Nombre']; ?>" readonly/>
				
				</div>

				<div class="col-xs-2">
					<input type="text" id="apellidos" name= "apellidos" class="form-control" placeholder="Primer Apellido" value="<?php echo $dni['Primerapellido']; ?>" readonly/>
				</div>

				<div class="col-xs-2">
					<input type="text" id="apellido1" name= "apellidos" class="form-control" placeholder="Segundo Apellido " value="<?php echo $dni['Primerapellido']; ?>" readonly/>
				</div>

				<div class="col-xs-2">
					<input type="text" id="número" name= "número" class="form-control" placeholder="Núm. permiso de conducir" value="<?php echo $dni['Num']; ?>" readonly/>
				</div>
				</br></br></br>
			
			</div>
		</div>	
	</div>

	

	<div class="container">
  		
  		<!-- Trigger the modal with a button -->
 		 <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Información de los derechos</button>

  		<!-- Modal -->
  		<div class="modal fade" id="myModal" role="dialog">
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

   	<div class="panel panel-success">
		<div class="panel-heading">


   			<div class="autorizacion">

   		   	<label for="autorización"><h3>Autorización para substituir la persona conductora</h3></label>
   		 	 </br>

   			</div>

   		</div>
	</div>
   		
   		<div class="col-xs-12">

   		<label class="checkbox-inline">
  			
  			<input type="checkbox" id="autorizacion" name="autorizacion" value="1"> Autoriza como persona conductora sustituta, después de comprobar el resultado negativo en la prueba, a:</br></br>
		</label>
		
		</div>


		<div class="col-xs-12">
			<div class="col-xs-2">
				
				<label class="sr-only" for=""></label>
				<input type="text" id="nombresustituto" name= "nombresustituto" class="form-control" placeholder="Nombre"/>
				
			</div>

			<div class="col-xs-2">
				<input type="text" id="apellidossustituto" name= "apellidossustituto" class="form-control" placeholder="Primer Apellido" />
			</div>

			<div class="col-xs-2">
				<input type="text" id="apellidossustituto1" name= "apellidossustituto" class="form-control" placeholder="Segundo Apellido" />
			</div>

			</br></br></br>

			<div class="col-xs-2">
				<input type="text" id="numerosustituto" name= "numerosustituto" class="form-control" placeholder="Núm. permiso de conducir" />
			</div>

			<div class="col-xs-2">
				<input type="text" id="clasesustituto" name= "clasesustituto" class="form-control" placeholder="Clase" /></br>
			</div>

		</div>

	</br></br></br></br></br></br></br></br>



		<div class="panel panel-danger">
			<div class="panel-heading">
				<div class="firmas">

					<label for="firmas"><h3>Firmas</h3></label>
				</div>
			</div>

		</div>
					&nbsp
					<label for="firmas">Firmo este impreso entrega, como prueba de conformidad, junto con las personas que han intervenido.</br></br>
		
					<div class="">
						<div class="col-xs-2"
				
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

						</br></br></br>

						<div class="col-xs-2">
							<input type="text" id="testigo" name= "testigo" class="form-control" placeholder="Testigo" />
						</div>

						<div class="col-xs-4">
							<input type="text" id="número " name= "número" class="form-control" placeholder="Persona conductora" />
						</div>

						</br></br></br>


					</div>

					<input type="submit"/>
					</br></br></br>
					
		<script src="js/jquery.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous">
		</script>
		</div>
	</body>
</html>