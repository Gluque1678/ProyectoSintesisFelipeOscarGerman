<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>A21</title>
<link rel="stylesheet" type="text/css" href="styles.css" media="all">
<!--<script type="text/javascript" src="view.js"></script>
<script type="text/javascript" src="validaFormulario.js"></script>-->
<!-- Latest compiled and minified CSS -->
<!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

<!-- Optional theme -->
<!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<!--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>-->
</head>
<body id="main_body" >

	<img id="logo" src="img/Ajun.jpg" width="60px" height="50px" alt="">
		
		<form id="A21" class="A21"  method="" action="" onsubmit="return validaFormulario();">
			
			<div class="TituloActa">

			<h4>Ayuntamiento de L’Hospitalet
				Area de Seguredad, Convivencia y Civismo</br>
				Servicio de la Guardia Urbana
			</h4>

			</div>


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
				<hr  />

			</div>

				<h3 style="margin-top: -5px;"> Acta de simptomatologia</h3>

			<div id="simptomatologia">
				<hr style="margin-top: -20px;" />

				<h3 style="margin-top: -5px;">Datos de la persona requerida</h3>
				<hr style="margin-top: -20px;"/>
				
				<label class="" for="">Apellidos</label>
				<input id="apellidos" name= "apellidos" class="apellidos" maxlength="255" size="60" value=""/>

				<label class="" for="">Y Nombre</label>
				<input id="nombre" name= "nombre" class="nombre" maxlength="255" size="24" value=""/>

				<label class="" for="permiso">Número de permiso de conducir</label>
				<input id="permiso" name= "permiso" class="nombre" maxlength="255" size="24" value=""/></br></br>
				<hr style="margin-top: -10px;"/>

				<label class="" for="">Sexo</label></br>
				<input id="sexo" name="sexo" class="sexo1" type="radio" value="1" />
				
				<label class="mascul" for="masculino">Hombre</label>
				<input id="masculino" name="element_8" class="element radio" type="radio" value="2" />
				
				<label class="feme" for="femenino">Mujer</label>
				<label class="altura" for="">Altura aproximada</label>
				<input id="altura" name= "altura" class="altura" maxlength="255" size="20" value=""/>
				
				<label class="peso" for="">Peso Aproximado</label>
				<input id="peso" name= "peso" class="peso" maxlength="255" size="20" value=""/></br><hr />

			</div>

			<div class="Descripcion_conduccion">
				<label class="Descripcion" for=""><h3 style="margin-top: -5px;">Descripcion de la conduccion</h3></label>
				<hr style="margin-top: -10px;" />

				<textarea rows="4" cols="185">
				</textarea>

			</div>

			<hr />

			<div class="simptoma">
				
				<label for="simptoma"><h3 style="margin-top: -5px;">Simptomatologia</h3></label></br>
				<hr style="margin-top: -30px;" />
				<label for="persona"><h3 style="margin-top: -5px;">Es fa constar que la persona requerida presentava la simptomatologia siguiente:
			    </h3></label>
			    <hr style="margin-top: -10px;" />

			</div>

		<div class="Halitosi">
			
			<label for="olor"><h3 style="margin-top: -5px;">Habilitosi de alcohol</h3></label>
			<input id="Halitosi" name="olor" class="olor" maxlength="5" value="" type="checkbox">
			<label for="Habilitosi"<h4 style="margin-top: -30px;">El olor que desprende es claramente detectable</h4></label>
			<hr />
		</div>

		<div class="Fisica">
			
			<label for="fisica"><h4 style="margin-top: -5px;">Constitución física</h4></label></br>
			<input id="corpulenta" name="corpulenta" class="corpulenta" maxlength="5" value="" type="radio">
			<label for="corpulenta">Corpulenta</label>
			<input id="mediana" name="mediana" class="mediana" type="radio" value="" />
			<label for="mediana">Mediana</label>
			<input id="pequeña" name="pequeña" class="pequeña" type="radio" value="" />
			<label for="pequeña">Pequeña</label></br><hr />

		</div>

		<div class="Comportamiento">
			
			<label for="comporta"><h4 style="margin-top: -5px;">Comportamiento</h4></label></br>
			
			<input id="agresivo" name="agresivo" class="agresivo" maxlength="5" value="" type="checkbox">
			<label for="agresivo">Agresivo</label>
			
			<input id="insultante" name="insultante" class="insultante" maxlength="5" value="" type="checkbox">
			<label for="insultante">Insultante</label>
			
			<input id="irrespetuoso" name="irrespetuoso" class="irrespetuoso" maxlength="5" value="" type="checkbox">
			<label for="irrespetuoso">Irrespetuoso</label>
			
			<input id="eufórico" name="eufórico" class="eufórico" maxlength="5" value="" type="checkbox">
			<label for="eufórico">eufórico</label></br>
			
			<input id="locuaz" name="locuaz" class="locuaz" maxlength="5" value="" type="checkbox">
			<label for="locuaz">Locuaz</label>
			
			<input id="excitado" name="excitado" class="excitado" maxlength="5" value="" type="checkbox">
			<label for="excitado">Excitado</label>
			
			<input id="Variaciones" name="Variaciones" class="Variaciones" maxlength="5" value="" type="checkbox">
			<label for="Variaciones">Variaciones obtadas de comportamiento o estado de ánimo</label><hr />


		</div>


		<div class="Descripcion_Comportamiento">

				<label for="des_comporta"><h4>Descripción del comportamiento</h4></label></br>
				<textarea rows="4" cols="185">
				</textarea><hr />

		</div>

		<div class="Ojos">

				<label for="ojos"><h4>Ojos-Mirada</h4></label></br>

				<input id="dilatacion" name="dilatacion" class="dilatacion" maxlength="5" value="" type="checkbox">
				<label for="dilatacion">Dilatación pupila</label>
				
				<input id="disminucion pupila" name="disminucion" class="disminucion" maxlength="5" value="" type="checkbox">
				<label for="dilatacion">Disminución pupila</label>

				<input id="brillantes" name="brillantes" class="brillantes" maxlength="5" value="" type="checkbox">
				<label for="brillantes">Brillantes</label>

				<input id="somnolientos" name="somnolientos" class="somnolientos" maxlength="5" value="" type="checkbox">
				<label for="somnolientos">Somnolientos</label>

				<input id="perdida" name="perdida" class="perdida" maxlength="5" value="" type="checkbox">
				<label for="perdida">Perdida</label><hr />

		</div>


		<div class="Descripcion del habla">

				<label for="habla"><h4>Descripcion del habla</h4></label></br>

				<input id="pastosa" name="pastosa" class="pastosa" maxlength="5" value="" type="checkbox">
				<label for="pastosa">Pastosa</label>
				
				<input id="clara" name="clara" class="disminucion" maxlength="5" value="" type="checkbox">
				<label for="clara">Clara</label>
				
				<input id="vacilante" name="vacilante" class="vacilante" maxlength="5" value="" type="checkbox">
				<label for="vacilante">Vacilante</label>
				
				

				
		</div>

		<div class="Manera de Expresarse">

				<label for="expresarse"><h4>Manera de Expresarse</h4></label></br>

				<input id="respuestas" name="respuestas" class="respuestas" maxlength="5" value="" type="checkbox">
				<label for="respuestas">Respuestas Ininteligibles</label>
				
				<input id="incoherente" name="incoherente" class="incoherente" maxlength="5" value="" type="checkbox">
				<label for="incoherente">Respuestas Incoherentes</label>

				<input id="repetitivo" name="repetitivo" class="otro" maxlength="5" value="" type="checkbox">
				<label for="repetitivo">Repetitivo</label>

				<input id="ideas" name="ideas" class="ideas" maxlength="5" value="" type="checkbox">
				<label for="Fuga de ideas">Fuga de ideas</label><hr />
		</div>

		<div class="Psicomotricidad">

				<label for="psicomotricidad"><h4>Psicomotricidad</h4></label></br>

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



		<div class="Descripcion_Motricidad">

				<label for="motricidad"><h4>Descripción de la motricidad</h4></label></br>
				<textarea rows="4" cols="185">
				</textarea><hr />

		</div>


		<div class="firma de los agentes">

			<label for="agentes"><h4>Firma de los agentes</h4></label></br>

		</div>

	</body>
</html>
