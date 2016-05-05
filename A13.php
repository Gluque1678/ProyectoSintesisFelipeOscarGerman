<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>A13</title>
<link rel="stylesheet" type="text/css" href="styles.css" media="all">
<!--<script type="text/javascript" src="view.js"></script>
<script type="text/javascript" src="validaFormulario.js"></script>-->
</head>
<body id="main_body" >

	<img id="logo" src="img/Ajun.jpg" width="60px" height="50px" alt="">
		
	

		
		<form id="A13" class="A13"  method="" action="" onsubmit="return validaFormulario();">
		
		<div class="Inmobilización">

			<h4>Ayuntamiento de L’Hospitalet
				Area de Seguredad, Convivencia y Civismo</br>
				Servicio de la Guardia Urbana
			</h4>

		</div>	

		<img id="logo" src="img/Escutcolor.jpg" width="60px" height="50px" alt="">

		<div id="datos_acta">
				
				<label class="diligencias" for="">Numero de Diligencias</label></br>
				<input id="Numero" name= "diligencias" class="dili" maxlength="255" size="18" value=""/></br></br>
				<hr style="margin-top: -10px;" />

				<label class="agentes" for="">Agentes actuantes</label>
				<input id="tip1" name= "agentes" class="agentes" maxlength="255" size="8" value=""/>
				<input id="tip2" name= "agentes" class="agentes" maxlength="255" size="8" value=""/>

				
				<hr  />

		</div>

		
		<div id="">
				
				<h3>Acta de immobilización de vehículo</h3>
				<hr style="margin-top: -10px;" />

				<label class="lugar" for="lugar">Lugar de los hechos</label>
				<input id="lugar" name= "lugar" class="lugar" maxlength="255" size="50" value=""/>
				
				<label class="fecha" for="fecha">Fecha</label>
				<input id="fecha" name= "fecha" class="fecha" maxlength="255" size="6" value=""/>

				<label class="hora" for="hora">Hora</label>
				<input id="hora" name= "hora" class="hora" maxlength="255" size="6" value=""/></br></br>

				<label class="immobilizacion" for="immobilizacion">Motivo de la immobilizacion</label>
				<input id="immobilizacion" name= "immobilizacion" class="immobilizacion" maxlength="255" size="12" value=""/>

				<label class="denuncia" for="denuncia">Denuncia número</label>
				<input id="denuncia" name= "denuncia" class="denuncia" maxlength="255" size="10" value=""/>

				<label class="municipal" for="municipal">Municipal</label>
				<input id="municipal" name= "municipal" class="municipal" maxlength="255" size="1" value=""/></br></br>
				
				<label class="transit" for="transit">Servicio Catalan de Transit</label>
				<input id="transit" name= "transit" class="transit" maxlength="255" size="1" value=""/></br></br>
				
				<label class="lugarimmob" for="lugarimmob">Lugar de la Immobilización</label>
				<input id="lugarimmob" name= "lugarimmob" class="lugarimmob" maxlength="255" size="50" value=""/>

				<label class="sistema" for="sistema">Sistema de la Immobilización</label>
				<input id="sistema" name= "sistema" class="sistema" maxlength="255" size="10" value=""/>

				<label class="kilometros" for="kilometros">Kilometros actuales</label>
				<input id="kilometros" name= "kilometros" class="kilometros" maxlength="255" size="6" value=""/>
				
				<hr style="margin-top: 10px;" />

				
			</div>


			<div id="conductor">
				
				<h3>Datos de la persona conductora</h3>
				<hr style="margin-top: -10px;" />

				<label class="NomApell" for="NomApell">Nombre y Apellidos</label>
				<input id="NomApell" name= "NomApell" class="NomApell" maxlength="255" size="50" value=""/>
				
				<label class="permiso" for="permiso">Número de permiso de conducir</label>
				<input id="permiso" name= "permiso" class="permiso" maxlength="255" size="8" value=""/>

				<label class="clase" for="clase">Clase</label>
				<input id="clase" name= "clase" class="clase" maxlength="255" size="4" value=""/>

				<label class="pais" for="pais">Pais de Expedición</label>
				<input id="pais" name= "pais" class="pais" maxlength="255" size="20" value=""/></br></br>
				
				<label class="direccion" for="direccion">Direccion</label>
				<input id="direccion" name= "direccion" class="direccion" maxlength="255" size="40" value=""/>

				<label class="telefono" for="telefono">Telefono</label>
				<input id="telefono" name= "telefono" class="telefono" maxlength="255" size="8" value=""/>

				<label class="nacionalidad" for="nacionalidad">Nacionalidad</label>
				<input id="nacionalidad" name= "nacionalidad" class="nacionalidad" maxlength="255" size="25" value=""/></br></br>

				<hr style="margin-top: 10px;" />

			</div>

			<div id="vehiculo">

				<h3>Datos del vehículo</h3>
				<hr style="margin-top: -10px;" />

				<label class="matricula" for="matricula">Matrícula/bastidor del vehículo</label>
				<input id="matricula" name= "matricula" class="matricula" maxlength="255" size="20" value=""/>
				
				<label class="marca" for="marca">Marca</label>
				<input id="marca" name= "marca" class="marca" maxlength="255" size="10" value=""/>

				<label class="modelo" for="modelo">Modelo</label>
				<input id="modelo" name= "modelo" class="modelo" maxlength="255" size="10" value=""/>

				<label class="tipo" for="tipo">Tipo</label>
				<input id="tipo" name= "tipo" class="tipo" maxlength="255" size="10" value=""/>
				
				<label class="color" for="color">Color</label>
				<input id="color" name= "color" class="color" maxlength="255" size="10" value=""/></br></br>

				<label class="nomtitular" for="nomtitular">Nombre y Apellidos del titular</label>
				<input id="nomtitular" name= "nomtitular" class="nomtitular" maxlength="255" size="30" value=""/>

				<label class="diretitu" for="diretitu">Direccion del titular</label>
				<input id="diretitu" name= "diretitu" class="diretitu" maxlength="255" size="40" value=""/>

				<label class="telefono" for="telefono">Teléfono</label>
				<input id="telefono" name= "telefono" class="telefono" maxlength="255" size="8" value=""/></br></br>

				<hr style="margin-top: 10px;" />


			</div>


			<div id="disposicion">

				<h3>Vehículo a disposición de:</h3>
				<hr style="margin-top: -10px;" />

				<label class="juzgado" for="juzgado">Juzgado de Guardia</label>
				<input id="juzgado" name= "juzgado" class="juzgado" maxlength="255" size="1" value=""/>
				
				<label class="titular" for="titular">Titular</label>
				<input id="titular" name= "titular" class="titular" maxlength="255" size="1" value=""/>

				<label class="otro" for="otro">Otro conductor habilitado</label>
				<input id="otro" name= "otro" class="otro" maxlength="255" size="1" value=""/>

				<label class="otros" for="otros">Otros</label>
				<input id="Otros" name= "otros" class="otros" maxlength="255" size="1" value=""/>
					
				<hr style="margin-top: 10px;" />

			</div>


			<div id="información">

				<h3>Información sobre la Immobilización:</h3>
				<hr style="margin-top: -10px;" />

				<h3>Firmas:</h3>
				<hr style="margin-top: -10px;" />

				Conductor  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspAgentes
		
				

				
				<hr style="margin-top: 10px;" />

			</div>

			<div id="Rotura">

				<h3>Rotura de la immobilización:</h3>
				<hr style="margin-top: -10px;" />

				<label class="fecha" for="fecha">Fecha</label>
				<input id="fecha" name= "fecha" class="fecha" maxlength="255" size="6" value=""/>
				
				<label class="hora" for="hora">Hora</label>
				<input id="hora" name= "hora" class="hora" maxlength="255" size="6" value=""/>

				<label class="actuantes" for="actuantes">Agentes actuantes</label>
				<input id="actuantes" name= "actuantes" class="actuantes" maxlength="255" size="6" value=""/>

				<label class="actuantes1" for="actuantes1"></label>
				<input id="actuantes1" name= "actuantes1" class="actuantes1" maxlength="255" size="6" value=""/>

				<label class="atestado" for="atestado">Se instruye atestado per desobediencia grave con número</label>
				<input id="atestado" name= "atestado" class="atestado" maxlength="255" size="10" value=""/>
					
				<hr style="margin-top: 10px;" />

				<label class="observaciones" for="observaciones">Observaciones</label>
				<textarea rows="4" cols="185">
				</textarea>

				<hr style="margin-top: 10px;" />
				<label class="firmas" for="firmas">Firmas</label>
				<hr style="margin-top: 10px;" />

				Conductor  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspAgentes
			</div>

		</br></br>

			<hr style="margin-top: 10px;" />

			<div id="Levantamiento">

				<h3>Motivo del levantamiento de la inmobilitzación:</h3>
				<hr style="margin-top: -10px;" />

				<label class="causas" for="causas">Desaparecer las causas que la van motivaron</label>
				<input id="causas" name= "causas" class="causas" maxlength="255" size="1" value=""/></br></br>
				
				<label class="cargo" for="cargo">Hacerse cargo otro conductor habilitado</label>
				<input id="cargo" name= "cargo" class="cargo" maxlength="255" size="1" value=""/></br></br>

				<label class="ingreso" for="ingreso">Ingreso al depósito por transcurrir más de 24 horas</label>
				<input id="ingreso" name= "ingreso" class="ingreso" maxlength="255" size="1" value=""/></br></br>

			</div>

			<div id="Rotura1">

				<label class="fecha" for="fecha">Fecha</label>
				<input id="fecha" name= "fecha" class="fecha" maxlength="255" size="6" value=""/>

				<label class="hora" for="hora">Hora</label>
				<input id="hora" name= "hora" class="hora" maxlength="255" size="6" value=""/>

				<label class="actuante" for="actuante">Agente actuante</label>
				<input id="actuante" name= "actuante" class="actuante" maxlength="255" size="6" value=""/>

				<hr style="margin-top: 10px;" />

				<label class="persona" for="persona">Nombre y Apellido de la persona que se hace cargo</label>
				<input id="persona" name= "persona" class="persona" maxlength="255" size="30" value=""/>

				<label class="permiso" for="permiso">Número permiso de conducir</label>
				<input id="permiso" name= "permiso" class="permiso" maxlength="255" size="8" value=""/>

				<label class="clase" for="clase">Clase</label>
				<input id="clase" name= "clase" class="clase" maxlength="255" size="4" value=""/>

				<label class="pais" for="pais">Pais de expedición</label>
				<input id="pais" name= "pais" class="pais" maxlength="255" size="20" value=""/>

				<hr style="margin-top: 10px;" />

				<label class="firmas" for="firmas">Firmas</label>
				<hr style="margin-top: 10px;" />

			</div>	

			<div id="vehículo">

				<label class="autoriza" for="autoriza">Persona que autoriza:</label>&nbsp&nbsp&nbsp&nbsp&nbsp
				
				<label class="cargo" for="cargo">Persona que se hace cargo del vehículo</label>&nbsp&nbsp&nbsp&nbsp&nbsp
				
				<label class="actuante" for="actuante">Agente </label>&nbsp&nbsp&nbsp&nbsp&nbsp</br></br>
				
				

				<label class="retirada" for="retirada">Retirada y ingreso al depósito municipal de vehículos</label></br>
				
				<label class="victor0" for="victor0">Victor-0, C/Glórias,s/n</label>
				<input id="victor0" name= "victor0" class="victor0" maxlength="255" size="1" value=""/></br>

				<label class="victor30" for="victor30">Victor-30, parque de la Serpiente</label>
				<input id="victor30" name= "victor30" class="victor30" maxlength="255" size="1" value=""/></br>

				<label class="victor10" for="victor10">Victor-10</label>
				<input id="victor10" name= "victor10" class="victor10" maxlength="255" size="1" value=""/></br>

				<hr style="margin-top: 10px;" />

				
				
			</div>	


	</body>
</html>