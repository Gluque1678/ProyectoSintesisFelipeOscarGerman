<?php
	session_start();
	$dni=$_SESSION['dni_datos'];
	// $_SESSION['diligencias']=$_REQUEST['Numdiligencias'];
	$_SESSION['lugar']=$_REQUEST['lugar'];
	$tip=$_SESSION['TIP'];
	
	include("conexion.proc.php");

if (empty($_REQUEST['halitosis'])) {
		$_REQUEST['halitosis']=0;
	}
if (empty($_REQUEST['Comportamiento_agresivo'])) {
		$_REQUEST['Comportamiento_agresivo']=0;
	}
if (empty($_REQUEST['Comportamiento_insultante'])) {
		$_REQUEST['Comportamiento_insultante']=0;
	}
if (empty($_REQUEST['Comportamiento_irrespetuoso'])) {
		$_REQUEST['Comportamiento_irrespetuoso']=0;
	}
if (empty($_REQUEST['Comportamiento_euforico'])) {
		$_REQUEST['Comportamiento_euforico']=0;
	}
if (empty($_REQUEST['Comportamiento_muyloquaz'])) {
		$_REQUEST['Comportamiento_muyloquaz']=0;
	}
if (empty($_REQUEST['Comportamiento_excitado'])) {
		$_REQUEST['Comportamiento_excitado']=0;
	}
if (empty($_REQUEST['Comportamiento_variaciones'])) {
		$_REQUEST['Comportamiento_variaciones']=0;
	}
if (empty($_REQUEST['Mirada_midriaticos'])) {
		$_REQUEST['Mirada_midriaticos']=0;
	}
if (empty($_REQUEST['Mirada_mioticos'])) {
		$_REQUEST['Mirada_mioticos']=0;
	}
if (empty($_REQUEST['Mirada_brillantes'])) {
		$_REQUEST['Mirada_brillantes']=0;
	}
if (empty($_REQUEST['Mirada_somnolienta'])) {
		$_REQUEST['Mirada_somnolienta']=0;
	}
if (empty($_REQUEST['Mirada_perdida'])) {
		$_REQUEST['Mirada_perdida']=0;
	}
if (empty($_REQUEST['Habla_pastosa'])) {
		$_REQUEST['Habla_pastosa']=0;
	}
if (empty($_REQUEST['Habla_clara'])) {
		$_REQUEST['Habla_clara']=0;
	}
if (empty($_REQUEST['Habla_vacilante'])) {
		$_REQUEST['Habla_vacilante']=0;
	}
if (empty($_REQUEST['Expresion_ininteligibles'])) {
		$_REQUEST['Expresion_ininteligibles']=0;
	}
if (empty($_REQUEST['Expresion_incoherentes'])) {
		$_REQUEST['Expresion_incoherentes']=0;
	}
if (empty($_REQUEST['Expresion_repetitivo'])) {
		$_REQUEST['Expresion_repetitivo']=0;
	}
if (empty($_REQUEST['Expresion_fugaideas'])) {
		$_REQUEST['Expresion_fugaideas']=0;
	}
if (empty($_REQUEST['Psicomotricidad_vacilante'])) {
		$_REQUEST['Psicomotricidad_vacilante']=0;
	}
if (empty($_REQUEST['Psicomotricidad_imprecision'])) {
		$_REQUEST['Psicomotricidad_imprecision']=0;
	}
if (empty($_REQUEST['Psicomotricidad_apreciacionfalsa'])) {
		$_REQUEST['Psicomotricidad_apreciacionfalsa']=0;
	}
if (empty($_REQUEST['Psicomotricidad_disminucionreflejos'])) {
		$_REQUEST['Psicomotricidad_disminucionreflejos']=0;
	}

	$sqla21 = "INSERT INTO f_a21pl (`DNI`,`Numdiligencias`, `TIP1`, `Dia`, `Hora`, `Lugar`, `Nombre`, `Primerapellido`, `Segundoapellido`, 
		`Permiso`, `Sexo`, `Altura`, `Peso`, `Descripcionconduccion`, `Halitosi`, `Constitucion`, `Comportamiento_agresivo`, 
		`Comportamiento_insultante`, `Comportamiento_irrespetuoso`, `Comportamiento_euforico`, `Comportamiento_muyloquaz`, `Comportamiento_excitado`, 
		`Comportamiento_variaciones`, `Descripcioncomportamiento`, `Mirada_midriaticos`, `Mirada_mioticos`, `Mirada_brillantes`, `Mirada_somnolienta`, 
		`Mirada_perdida`, `Habla_pastosa`, `Habla_clara`, `Habla_vacilante`, `Expresion_ininteligibles`, `Expresion_incoherentes`, `Expresion_repetitivo`, 
		`Expresion_fugaideas`, `Psicomotricidad_vacilante`, `Psicomotricidad_imprecision`, `Psicomotricidad_disminucionreflejos`, `Psicomotricidad_apreciacionfalsa`, `Descripcionmotricidad`) 
		VALUES ('$dni[Num]',
			'$_REQUEST[Numdiligencias]',
			'$_REQUEST[agentes]',
			'$_REQUEST[dia]',
			'$_REQUEST[hora]',
			'$_REQUEST[lugar]',
			'$dni[Nombre]',
			'$dni[Primerapellido]',
			'$dni[Segundoapellido]',
			'$dni[Num]',
			'$_REQUEST[sexo]',
			'$_REQUEST[altura]',
			'$_REQUEST[peso]',
			'$_REQUEST[descripcion]',
			'$_REQUEST[halitosis]',
			'$_REQUEST[constitucion]',
			'$_REQUEST[Comportamiento_agresivo]',
			'$_REQUEST[Comportamiento_insultante]',
			'$_REQUEST[Comportamiento_irrespetuoso]',
			'$_REQUEST[Comportamiento_euforico]',
			'$_REQUEST[Comportamiento_muyloquaz]',
			'$_REQUEST[Comportamiento_excitado]',
			'$_REQUEST[Comportamiento_variaciones]',
			'$_REQUEST[descripcioncomportamiento]',
			'$_REQUEST[Mirada_midriaticos]',
			'$_REQUEST[Mirada_mioticos]',
			'$_REQUEST[Mirada_brillantes]',
			'$_REQUEST[Mirada_somnolienta]',
			'$_REQUEST[Mirada_perdida]',
			'$_REQUEST[Habla_pastosa]',
			'$_REQUEST[Habla_clara]',
			'$_REQUEST[Habla_vacilante]',
			'$_REQUEST[Expresion_ininteligibles]',
			'$_REQUEST[Expresion_incoherentes]',
			'$_REQUEST[Expresion_repetitivo]',
			'$_REQUEST[Expresion_fugaideas]',
			'$_REQUEST[Psicomotricidad_vacilante]',
			'$_REQUEST[Psicomotricidad_imprecision]',
			'$_REQUEST[Psicomotricidad_disminucionreflejos]',
			'$_REQUEST[Psicomotricidad_apreciacionfalsa]',
			'$_REQUEST[descripcionmotricidad]')";
	$resultado1=mysqli_query($congu, $sqla21);
	echo $sqla21;
	mysqli_close($congu);

	if (empty($_REQUEST['autorizacion'])) {
		$_REQUEST['autorizacion']=0;
	}

	$sqlt27 ="INSERT INTO `f_t27pl`(`DNI`, `Numdiligencias`, `TIP1`, `Hora`, `Dia`, `Actuacion`, `negacion`, `Horanegativa`, `autorizacion`, `Conductorsubstituto`, `Permisosubstituto`, `Clasesubstituto`, `Lugar`) 
	   VALUES 
	   ('$dni[Num]',
	   	'$_REQUEST[Numdiligencias]',
	   	'$_REQUEST[agentes]',
	   	'$_REQUEST[hora]',
		'$_REQUEST[dia]',
	   	'$_REQUEST[opactuacion]',
	   	'$_REQUEST[negacion]',
	   	'$_REQUEST[Horanegativa]',
	   	'$_REQUEST[autorizacion]',
	   	'$_REQUEST[nombresustituto]',
		'$_REQUEST[numerosustituto]',
		'$_REQUEST[clasesustituto]',
		'$_REQUEST[lugar]')";
	$resultado2=mysqli_query($congu, $sqlt27);
	echo $sqlt27;
	mysqli_close($congu);

	if (empty($_REQUEST['seguridadviaria'])) {
		$_REQUEST['seguridadviaria']=0;
	}
	if (empty($_REQUEST['taxa'])) {
		$_REQUEST['taxa']=0;
	}
	if (empty($_REQUEST['estupefacientes'])) {
		$_REQUEST['estupefacientes']=0;
	}
	if (empty($_REQUEST['negativa'])) {
		$_REQUEST['negativa']=0;
	}
	if (empty($_REQUEST['perdida'])) {
		$_REQUEST['perdida']=0;
	}
	if (empty($_REQUEST['privado'])) {
		$_REQUEST['privado']=0;
	}
	if (empty($_REQUEST['sinpermiso'])) {
		$_REQUEST['sinpermiso']=0;
	}
	if (empty($_REQUEST['velocidad'])) {
		$_REQUEST['velocidad']=0;
	}
	if (empty($_REQUEST['desobediencia'])) {
		$_REQUEST['desobediencia']=0;
	}


	$sqlt32 ="INSERT INTO `f_t32pl`(`dni`, `Numdiligencias`, `tip1`, `seguridad_viaria`, `conducir_taxa`, `conducir_influencia`, `conducir_negacion`, `conducir_perdida`, `conducir_privat`, `conducir_sincarnet`, `conducir_velocidad`, `desobediencia`, `telefono`, `Marcaetilometro`, `Modelo`, `Numeroserie`, `Calibradohasta`, `prueba1_hora`, `prueba1_resultado`, `prueba2_hora`, `prueba2_resultado`, `hora_traslado`, `centro_medico`) 
		VALUES 
	   ('$dni[Num]',
	   	'$_REQUEST[diligencias]',
	   	'$_REQUEST[agentes]',
	   	'$_REQUEST[seguridadviaria]',
	   	'$_REQUEST[taxa]',
	   	'$_REQUEST[estupefacientes]',
	   	'$_REQUEST[negativa]',
	   	'$_REQUEST[perdida]',
	   	'$_REQUEST[privado]',
	   	'$_REQUEST[sinpermiso]',
	   	'$_REQUEST[velocidad]',
	   	'$_REQUEST[desobediencia]',
	   	'$_REQUEST[telefono]',
	   	'$_REQUEST[marcaetilometro]',
	   	'$_REQUEST[modelo]',
	   	'$_REQUEST[numeroserie]',
	   	'$_REQUEST[calibrado]',
	   	'$_REQUEST[hora1]',
	   	'$_REQUEST[mg1]',
	   	'$_REQUEST[hora2]',
	   	'$_REQUEST[mg2]',
	   	'$_REQUEST[horatraslado]',
	   	'$_REQUEST[centromedico]')";

	$resultado3=mysqli_query($congu, $sqlt32);
	echo $sqlt32;
	mysqli_close($congu);
	// // header("location: T27.php");

	if (empty($_REQUEST['oficio'])) {
		$_REQUEST['oficio']=0;
	}
	if (empty($_REQUEST['renuncio'])) {
		$_REQUEST['renuncio']=0;
	}

	$sqln08 ="INSERT INTO `f_n08pl`(`DNI`, `Numdiligencias`, `TIP1`, `Municipio`, `Cuerpoagente`, `Motivoimputacion`, `Abogado`, `Abogadooficio`, `Renuncialetrada`, `Idiomainterprete`, `Observaciones`, `Causapenal_fecha`, `Causapenal_hora`)
	   VALUES 
	   ('$dni[Num]',
	   	'$_REQUEST[diligencias]',
	   	'$_REQUEST[agentes]',
	   	'$_REQUEST[municipio]',
	   	'$_REQUEST[cuerpo]',
	   	'$_REQUEST[Motivoimputacion]',
	   	'$_REQUEST[privado]',
	   	'$_REQUEST[oficio]',
	   	'$_REQUEST[renuncio]',
	   	'$_REQUEST[intérprete]',
	   	'$_REQUEST[observaciones]',
	   	'$_REQUEST[diacomparecer]',
	   	'$_REQUEST[horacomparecer]')";
	$resultado5=mysqli_query($congu, $sqln08);
	echo $sqln08;
	mysqli_close($congu);

	$sqlt15 ="INSERT INTO `f_t15pl`(`DNI`, `Numdiligencias`, `TIP`,`Hora`,`Dia`) 
	   VALUES 
	   ('$dni[Num]',
	   	'$_REQUEST[diligencias]',
	   	'$_REQUEST[agentes]',
	   	'$_REQUEST[hora]',
			'$_REQUEST[dia]')";
	$resultado6=mysqli_query($congu, $sqlt15);
	echo $sqlt15;
	mysqli_close($congu);

	$sqla13 ="INSERT INTO `f_a13pl`(`DNI`, `Numdiligencias`, `TIP1`, `Lugar`, `Dia`, `Hora`, `Motivoinmobilizacion`, `Numerodenuncia`, `Tipodenuncia`, `Sistemainmobilizacion`, `Quilometrosactuales`, `Vehiculodisposicion`, `Fecharoturainmobilizacion`, `Horaroturainmobilizacion`, `Atestadodesobedienciagrave`, `Observaciones`, `Motivolevantamiento`, `Dialevantamiento`, `Horalevantamiento`, `Nombresustituto`, `Permisosustituto`, `Clasesustituto`, `Paisexpedicionsustituto`, `Retiradaingresodeposito`)
VALUES 
	   ('$dni[Num]',
	   	'$_SESSION[diligencias]',
	   	'$_REQUEST[agentes]',
	   	'$_REQUEST[lugarinmob]',
	   	'$_REQUEST[fecha]',
	   	'$_REQUEST[hora]',
	   	'$_REQUEST[immobilizacion]',
	   	'$_REQUEST[denuncia]',
	   	'$_REQUEST[Tipodenuncia]',
	   	'$_REQUEST[sistema]',
	   	'$_REQUEST[kilometros]',
	   	'$_REQUEST[Vehiculodisposicion]',
	   	'$_REQUEST[fecharot]',
	   	'$_REQUEST[horarot]',
	   	'$_REQUEST[atestadorot]',
	   	'$_REQUEST[observaciones]',
	   	'$_REQUEST[Motivolevantamiento]',
	   	'$_REQUEST[fechalevantamiento]',
	   	'$_REQUEST[horalevantamiento]',
	   	'$_REQUEST[nombre]',
	   	'$_REQUEST[permiso]',
	   	'$_REQUEST[clase]',
	   	'$_REQUEST[pais]',
	   	'$_REQUEST[Retiradaingresodeposito]')";

	$resultado=mysqli_query($congu, $sqla13);
	echo $sqla13;
	mysqli_close($congu);
?>