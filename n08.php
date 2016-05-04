<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>N-08 PL</title>
<link rel="stylesheet" type="text/css" href="styles.css" media="all">
<!--<script type="text/javascript" src="view.js"></script>
<script type="text/javascript" src="validaFormulario.js"></script>-->
</head>
<body id="main_body" >

	<img id="logo" src="img/Ajun.jpg" width="60px" height="50px" alt="">
		
	

		
		<form id="n08pl" class="n08pl"  method="" action="" onsubmit="return validaFormulario();">
		
		<div class="TituloActa">

			<h4>Ajuntament de L’Hospitalet
				Àrea de Seguretat, Convivència i Civisme</br>
				Servei de la Guàrdia Urbana
			</h4>

		</div>	

		<img id="logo" src="img/Escutcolor.jpg" width="60px" height="50px" alt="">

		<div id="datos_acta">
				
				<h3>Datos del acta</h3>
				<hr style="margin-top: -20px;" />

				<label class="diligencias" for="">Numero de Diligencias</label></br>
				<input id="Numero" name= "diligencias" class="dili" maxlength="255" size="24" value=""/></br></br>
				<hr style="margin-top: -10px;" />

				<label class="agentes" for="">Agentes actuantes</label>
				<input id="tip" name= "agentes" class="agentes" maxlength="255" size="24" value=""/>

				<label class="dia" for="">Dia</label>
				<input id="dia" name= "dia" class="dia" maxlength="255" size="24" value=""/>

				<label class="hora" for="">Hora</label>
				<input id="hora" name= "hora" class="hora" maxlength="255" size="24" value=""/>

				<hr style="margin-top: 10px;"/>

				<label class="lugar" for="">Lugar</label>
				<input id="lugar" name= "lugar" class="lugar" maxlength="255" size="24" value=""/>
				
				<hr style="margin-top: 10px;" />

			</div>


			<div id="datos">

				<h3>Acta de información a la persona imputada no detenida sobre sus derechos y de citación por causa penal</h3>
				<hr style="margin-top: -10px;" />

				<h3>Datos donde se produce la actuación policial</h3>
				<hr style="margin-top: -10px;" />

				<label class="direccion" for="">Dirección(tipo de via, nombre, y número)</label>
				<input id="direccion" name= "direccion" class="direccion" maxlength="255" size="60" value=""/>

				<label class="municipio" for="">Municipio</label>
				<input id="municipio" name= "municipio" class="municipio" maxlength="255" size="60" value=""/>

			




			</div>	
</body>
</html>