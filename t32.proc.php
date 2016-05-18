<?php
session_start();
$dni=$_SESSION['dni_datos'];
$tip=$_SESSION['TIP'];

include("conexion.proc.php");


$sqlt32 ="INSERT INTO `f_t32pl`(`dni`, `Numdiligencias`, `tip1`, `seguridad_viaria`, `conducir_taxa`, `conducir_influencia`, `conducir_negacion`, `conducir_perdida`, `conducir_privat`, `conducir_sincarnet`, `conducir_velocidad`, `desobediencia`, `telefono`, `prueba1_hora`, `prueba1_resultado`, `prueba2_hora`, `prueba2_resultado`, `prueba_deteccion`, `hora_traslado`, `centro_medico`, `negacion_pruebas`, `diligencia_negarse`, `diligencia_incorrecta`, `diligencia_intentos`, `diligencia_intentos_manifiesta`, `diligencia_negarse_manifiesta`, `diligencia_altres`, `diligencia_juzgado`, `diligencia_procedimiento`, `diligencia_numProcedimiento`, `diligencia_fechain`, `diligencia_fechafin`, `diligencia_desobediencia`, `diligencia_motivo`, `descripcion_hechos`, `mesures_inmobilizacion`, `mesures_substitucion`, `acta_t27`, `acta_a21`, `acta_n8`, `acta_a13`, `tiquet_prueba`, `copia_denuncia`, `comunicado_accidente`, `certificacion`, `impresion_dgt`, `acta_altres`, `tramesa_hora`, `tramesa_dia`, `tramesa_juzgado_num`, `tramesa_drets`, `tramesa_fotocopia`, `tramesa_cedula`, `tramesa_altres`, `tramesa_altres_text`) 
	   VALUES 
	   ('$dni[Num]',
	   	'$_SESSION[diligencias]',
	   	'$_REQUEST[agentes]',
	   	)";
	$resultado=mysqli_query($congu, $sqlt32);
	echo $sqlt32;
	mysqli_close($congu);
	header("location: n08.php");

?>

