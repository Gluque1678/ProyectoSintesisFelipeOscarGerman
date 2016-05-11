<?php
	session_start();
	$dni=$_SESSION['dni_datos'];
	$_SESSION['diligencias']=$_REQUEST['Numdiligencias'];

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
if (empty($_REQUEST['Psicomotricidad_movimientooscilante'])) {
		$_REQUEST['Psicomotricidad_movimientooscilante']=0;
	}

	$sqla21 = "INSERT INTO f_a21pl (`DNI`,`Numdiligencias`, `TIP1`, `Dia`, `Hora`, `Lugar`, `Nombre`, `Primerapellido`, 
		`Permiso`, `Sexo`, `Altura`, `Peso`, `Descripcionconduccion`, `Halitosi`, `Constitucion`, `Comportamiento_agresivo`, 
		`Comportamiento_insultante`, `Comportamiento_irrespetuoso`, `Comportamiento_euforico`, `Comportamiento_muyloquaz`, `Comportamiento_excitado`, 
		`Comportamiento_variaciones`, `Descripcioncomportamiento`, `Mirada_midriaticos`, `Mirada_mioticos`, `Mirada_brillantes`, `Mirada_somnolienta`, 
		`Mirada_perdida`, `Habla_pastosa`, `Habla_clara`, `Habla_vacilante`, `Expresion_ininteligibles`, `Expresion_incoherentes`, `Expresion_repetitivo`, 
		`Expresion_fugaideas`, `Psicomotricidad_vacilante`, `Psicomotricidad_imprecision`, `Psicomotricidad_disminucionreflejos`, `Psicomotricidad_apreciacionfalsa`, 
		`Psicomotricidad_movimientooscilante`, `Descripcionmotricidad`) 
		VALUES ('$dni[Num]',
			'$_SESSION[diligencias]',
			'$_REQUEST[agentes]',
			'$_REQUEST[dia]',
			'$_REQUEST[hora]',
			'$_REQUEST[lugar]',
			'$_REQUEST[nombre]',
			'$_REQUEST[apellidos]',
			'$_REQUEST[permiso]',
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
			'$_REQUEST[Psicomotricidad_movimientooscilante]',
			'$_REQUEST[Descripcionmotricidad]')";
	$resultado=mysqli_query($congu, $sqla21);
	echo $sqla21;
	mysqli_close($congu);
	header("location: T27.php");
?>