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

			<h4>Ayuntamiento de L’Hospitalet
				Area de Seguredad, Convivencia y Civismo</br>
				Servicio de la Guardia Urbana
			</h4>

		</div>	

		<img id="logo" src="img/Escutcolor.jpg" width="60px" height="50px" alt="">

		<div id="datos_acta">
				
				<h3></h3>
				<hr style="margin-top: -10px;" />

				<label class="fecha" for="">Fecha</label>
				<input id="fecha" name= "fecha" class="fecha" maxlength="255" size="24" value=""/>
				
				<label class="hora" for="">Hora</label>
				<input id="hora" name= "hora" class="hora" maxlength="255" size="24" value=""/>

				<hr style="margin-top: 10px;" />

				<label class="numero" for="">Numero de diligencias</label>
				<input id="numero" name= "numero" class="numero" maxlength="255" size="10" value=""/>

				<label class="agentes" for="">Agentes actuantes</label>
				<input id="tip" name= "agentes" class="agentes" maxlength="255" size="10" value=""/>
				<input id="tip" name= "agentes" class="agentes" maxlength="255" size="10" value=""/>

				<hr style="margin-top: 10px;"/>

				<label class="lugar" for="">Lugar</label>
				<input id="lugar" name= "lugar" class="lugar" maxlength="255" size="24" value=""/>
				
				<hr style="margin-top: 10px;" />

			</div>


			<div id="actuacion">

				<h3>Acta de información a la persona imputada no detenida sobre sus derechos y de citación por causa penal</h3>
				<hr style="margin-top: -10px;" />

				<h3>Datos donde se produce la actuación policial</h3>
				<hr style="margin-top: -10px;" />

				<label class="direccion" for="">Dirección(tipo de via, nombre, y número)</label>
				<input id="direccion" name= "direccion" class="direccion" maxlength="255" size="60" value=""/>

				<label class="municipio" for="">Municipio</label>
				<input id="municipio" name= "municipio" class="municipio" maxlength="255" size="60" value=""/>
				<hr style="margin-top: 10px;" />
			
				<label class="cuerpo" for="">Agentes del Cuerpo</label>
				<input id="cuerpo" name= "agentes" class="agentes" maxlength="255" size="30" value=""/>
				<input id="tip1" name= "agentes" class="agentes" maxlength="255" size="10" value=""/>
				<input id="tip2" name= "agentes" class="agentes" maxlength="255" size="10" value=""/>
				<hr style="margin-top: 10px;" />

			</div>	

			<div id="imputada">
				
				<label class="persona" for=""><h3>Datos de la persona imputada</h3></label>
				<hr style="margin-top: -10px;" />

				<label class="primer" for="apellido">Primer apellido</label>
				<input id="primer" name= "apellido" class="primer" maxlength="255" size="30" value=""/>

				<label class="segundo" for="">Segundo apellido</label>
				<input id="segundo" name= "apellido2" class="segundo" maxlength="255" size="30" value=""/>

				<label class="nombre" for="nombre">Nombre</label>
				<input id="nombre" name= "nombre" class="nombre" maxlength="255" size="30" value=""/>
			
				<label class="nacionalidad" for="nacionalidad">Nacionalidad</label>
				<input id="nacionalidad" name= "nacionalidad" class="nacionalidad" maxlength="255" size="25" value=""/>
				<hr style="margin-top: 10px;" />

				<label class="tipos" for="documento">Tipos de documentos de identidad y pais</label>
				<input id="tipos" name= "documentos" class="tipos" maxlength="255" size="50" value=""/>

				<label class="numero" for="numero">Numero</label>
				<input id="numero" name= "numero" class="tipos" maxlength="255" size="20" value=""/>

				<label class="nacimiento" for="nacimiento">Fecha de Nacimiento</label>
				<input id="nacimiento" name= "nacimiento" class="nacimiento" maxlength="255" size="20" value=""/>

				<hr style="margin-top: 10px;" />


			</div>

			<div id="motivo_imputacion">
				
				<label class="motivo" for="imputacion"><h3>Motivo de la imputacion</h3></label>
				<hr style="margin-top: -10px;" />

				<textarea rows="4" cols="185">
				</textarea>

				<hr style="margin-top: 10px;" />
			</div>

			<div id="derechos">
				
				<label class="derechos" for="derechos"><h3> Derechos que quiero  ejercer la persona imputada></h3></label>
				<hr style="margin-top: -10px;" />


				<label class="abogado" for="abogado">Quiero que me asista el siguiente abogado</label>
				<input id="abogado" name= "abogado" class="abogado" maxlength="255" size="50" value=""/>
				
				<label class="oficio" for="oficio">Quiero un abogado de oficio</label>
				<input id="oficio" name= "oficio" class="oficio" maxlength="255" size="50" value=""/>

				<hr style="margin-top: 10px;" />

				<label class="renuncio" for="renuncio">Renuncio expresamente a la asistencia letrada</label>
				<input id="renuncio" name= "renuncio" class="renuncio" maxlength="255" size="1" value=""/>
				
				<label class="interprete" for="interpre">Quiero que me asista un interprete de:</label>
				<input id="interpre" name= "interprete" class="interprete" maxlength="255" size="50" value=""/>
				
				<hr style="margin-top: 10px;" />
			</div>

			<div id="observaciones">
				
				<label class="observaciones" for="observaciones">Oservaciones</label>
				
				<textarea rows="4" cols="185">
				</textarea>

				<hr style="margin-top: 10px;" />
				
			</div>

			<div id="compareciencia">
				
				<label class="compareciencia" for="compareciencia"><h3>Datos de la compareciencia por causa penal(imputado/ada)</h3>
				</label>
				

				<label class="fecha" for="fecha">Fecha</label>
				<input id="fecha" name= "fecha" class="fecha" maxlength="255" size="10" value=""/>
				
				<label class="hora" for="hora">Hora</label>
				<input id="hora" name= "hora" class="hora" maxlength="255" size="10" value=""/>
				
				<label class="instruccion" for="instruccion">Juzgado de Instrucción número</label>
				<input id="instruccion" name= "instruccion" class="instruccion" maxlength="255" size="10" value=""/>&nbsp&nbsp&nbsp

				<label class="direccion" for="direccion">Direccion: Av.Carrilet,número 2(edificio H)</label>&nbsp
				&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
				<label class="i" for="instruccion">Teléfono 93 554 81 45</label>
				
				<hr style="margin-top: 10px;" />
				
			</div>

			<div id="Firmas">

				<label class="firmas" for="firmas"><h3>Firmas</h3></label>
				<hr style="margin-top: -10px;" />

			</div>

			<div id="Firmas">

				<label class="agentes" for="firmas">Agentes actuantes</label>
				&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
				&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
				&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp


				<label class="imputada" for="imputada">Persona imputada</label>
			</div>


			<hr style="margin-top: 10px;" />


</body>
</html>