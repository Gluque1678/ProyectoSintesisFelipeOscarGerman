<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>T27</title>
<meta name="vewport" content="device-width, user-scalable=no, initial-scale=1.0, minium-scale=1.0, minium-scale=1.0">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->

<!--<script type="text/javascript" src="view.js"></script>
<script type="text/javascript" src="validaFormulario.js"></script>-->

</head>

<body id="main_body" >

	<img id="logo" src="img/Ajun.jpg" width="60px" height="50px" alt="">
		
	

		
		<form class="form-incline" class="T27"  method="" action="" onsubmit="return validaFormulario();">
		
		<div class="form-group">

			<h4>Ayuntamiento de L’Hospitalet
				Area de Seguredad, Convivencia y Civismo</br>
				Servicio de la Guardia Urbana
			</h4>

		</div>	

		<img id="logo" src="img/Escutcolor.jpg" width="60px" height="50px" alt="">
		</br></br>
		


		<div class="row">
			<div class="col-xs-2"
				
				<label class="sr-only" for="NºDiligencias"></label>
				<input type="diligencias" name= "diligencias" class="form-control" placeholder="Número de Diligencias"/>
				
			</div>

			<div class="col-xs-1">
				<input type="tip" name= "agentes" class="form-control" placeholder="Agentes" />
			</div>

			<div class="col-xs-1">
				<input type="tip" name= "agentes" class="form-control" placeholder="Agentes" />
			</div>

			<div class="col-xs-1">
			<input type="dia" name= "dia" class="form-control" placeholder="Fecha" value=""/>
			</div>

			<div class="col-xs-1">
			<input type="hora" name= "hora" class="form-control" placeholder="hora" value=""/>
			</div>

			<div class="col-xs-3">
			<input type="lugar" name= "lugar" class="form-control" placeholder="Lugar" value=""/>
			</div>

		</div>

		</br>

		
			<div class="Acta generica">
			
				<label for=""></label><h3 style="margin-top: -5px;">Acta genérica de alcohol y/o drogas tóxicas,estupefacientes o substancias psicotrópicas</h3>
			</div>
			

			<div class="checkbox">
			
				<label>
					<input type="checkbox" value="">
					Control preventivo
				</label>
			</div>









			<div class="row">
			<div class="col-xs-2"
				
				<label class="sr-only" for="NºDiligencias"></label>
				<input type="diligencias" name= "diligencias" class="form-control" placeholder="Número de Diligencias"/>
				
			</div>

			<div class="col-xs-1">
				<input type="tip" name= "agentes" class="form-control" placeholder="Agentes" />
			</div>

			<div class="col-xs-1">
				<input type="tip" name= "agentes" class="form-control" placeholder="Agentes" />
			</div>

			<div class="col-xs-1">
			<input type="dia" name= "dia" class="form-control" placeholder="Fecha" value=""/>
			</div>

			<div class="col-xs-1">
			<input type="hora" name= "hora" class="form-control" placeholder="hora" value=""/>
			</div>

			<div class="col-xs-3">
			<input type="lugar" name= "lugar" class="form-control" placeholder="Lugar" value=""/>
			</div>

		</div>

		</br>

		
			<div class="Acta generica">
			
				<label for=""></label><h3 style="margin-top: -5px;">Acta genérica de alcohol y/o drogas tóxicas,estupefacientes o substancias psicotrópicas</h3>
			</div>
			











































			<label for="actuación">Actuación originada por</label>
			
			<input id="control" name="control" class="control" maxlength="5" value="" type="radio">
			<label for="control">Control preventivo</label>
			
			<input id="accidente" name="accidente" class="accidente" maxlength="5" value="" type="radio">
			<label for="accidente">Accidente de tránsit</label>
			
			<input id="infracción" name="infracción" class="infracción" maxlength="5" value="" type="radio">
			<label for="Infracción">Infracción del Reglamento</label>
			
			<input id="simptomas" name="simptomas" class="simptomas" maxlength="5" value="" type="radio">
			<label for="simptomas">Simptomas</label>


			<hr style="margin-top: 10px; "/>
			

		</div>




		<div class="requerida">

			<label for="requerida"><h3 style="margin-top: -5px;">Datos de la persona requerida</h3></label>
			<hr style="margin-top: -10px; "/>

			<label class="nombre" for="">Nombre </label>
			<input id="nombre" name= "nombre" class="nombre" maxlength="255" size="24" value=""/>

			<label class="apellidos" for="">Apellidos</label>
			<input id="apellidos" name= "apellidos" class="apellidos" maxlength="255" size="40" value=""/>
			<hr style="margin-top: 10px; "/>
		</div>

		<div class="información de los derechos">
		<label for="información de los derechos"><h3 style="margin-top: -5px;">Información de los derechos</h3></label>
		<hr style="margin-top: -10px; "/><br><br></br></br>

		</div>	

		<hr></hr>

		<div class="alegaciones">

			<label for="alegaciones"><h3 style="margin-top: -5px;">Alegaciones y derechos de la persona requerida delante la realización de las pruevas de detención</h3></label>
			<hr style="margin-top: -10px; "/>

			<label for="expresamente">La persona ha manifestado expresamente que</label>
			<input id="expresamente" name="expresamente" class="expresamente" maxlength="5" value="" type="radio">
			<label for="si">Si   /</label>

			<input id="accidente" name="accidente" class="accidente" maxlength="5" value="" type="radio">
			<label for="accidente">No quiere hacer la prueva de contraste</label></br>

			<label for="expresamente1">La persona ha manifestado expresamente que</label>
			<input id="expresamente1" name="expresamente1" class="expresamente1" maxlength="5" value="" type="radio">
			<label for="si">Si   /</label>

			<input id="accidente1" name="accidente1" class="accidente1" maxlength="5" value="" type="radio">
			<label for="accidente1">No quiere acompañar de forma voluntaria a los agentes a un centre hospitalario o instituto médico para hacer la prueva que el personal sanitario estime adecuado, con relación a la detección de drogas toxicas, estupefacientes o substancias psicotrópicas</label></br>

			<input id="manifestar" name="manifestar" class="manifestar" maxlength="5" value="" type="radio">
			<label for="manifestar"> Quiere manifestar lo siguiente:</label>
			<hr style="margin-top: 20px; "/>

		</div>

		<div class="negativa">

			<label for="negativa"><h3>Negativa a someterse a las pruevas de detección</h3></label>
			<hr style="margin-top: 10px; "/>

			<label for="texto">Se hace constar que a las    horas de la fecha indicada se ha requerido la persona reseñada para que se sometiera a las pruebas legalmente establecidas, a fin de comprobar las tasas de alcoholemia y la presencia de drogas tóxicas, estupefacientes y sustancias psicotrópicas a las que se refiere el artículo 379 del Código penal, que ha sido informada sobre los derechos de realización de las pruebas y que se ha negado.
			Tras haber sido informada de las consecuencias de la negativa a hacer la prueba, la persona requerida ha manifestado expresamente que no quiere hacer la prueba de detección y se reafirma en la negativa de someterse a ella.
   		   </label>
   		</div>

   		   <hr style="margin-top: 10px; "/>

   		<div class="autorizacion">

   		   <label for="autorización"><h3>Autorización para substituir la persona conductora</h3></label>
   		   <hr style="margin-top: 10px; "/>

   		   <input id="autorizacion" name="autorizacion" class="autorizacion" maxlength="5" value="" type="radio">
   		   <label for="autorizacion">Autoriza como persona conductora sustituta, después de comprobar el resultado negativo en la prueba, a:</br>
		   Nombre y apellidos &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
		   Núm. de permiso de conducir &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
		   Clase  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</label>
			
		   <hr style="margin-top: 20px; "/>

		</div>

		<div class="firmas">

		<label for="firmas">Firmas</label>
		<hr style="margin-top: 10px; "/>

		<label for="firmas">Firmo este impreso entrega, como prueba de conformidad, junto con las personas que han intervenido.</br>
		Agentes actuantes &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
		Persona requerida &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp 
		Testigo (si los hay) &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
		Persona conductora sustituta  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</label>


		</div>

		<hr style="margin-top: 60px; "/>
		<label for="ley">En cumplimiento de lo establecido en el artículo 5 de la Ley Orgánica 15/1999, de 13 de diciembre, de protección de datos de carácter personal, le informamos que los datos recogidos en este formulario se incorporarán a un fichero automatizado propiedad de este Ayuntamiento con el fin de tramitar las diligencias administrativas pertinentes. En cuanto al tratamiento y al uso de estos datos de carácter personal, le recordamos que en cualquier momento puede ejercer los derechos de acceso, rectificación, cancelación y oposición ante la Oficina de Atención al ciudadano (calle de Girona, 10, planta baja).
		</label>
		
		<script src="js/jquery.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous">
		</script>
	</body>
</html>