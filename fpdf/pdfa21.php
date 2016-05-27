<?php

$sqla21 = "SELECT * FROM f_a21pl WHERE Numdiligencias = '$_SESSION[diligencia]'";

$qry = mysqli_query($congu,$sqla21);

$a21 = mysqli_fetch_assoc($qry);

//var_dump($a21);

$pageCount = $pdf->setSourceFile("actas/a21.pdf");
$tplIdx = $pdf->importPage(1);

$pdf->addPage();

$pdf->SetFont('Helvetica');
$pdf->SetTextColor(255,0,0);
$pdf->SetFontSize(10);

$pdf->useTemplate($tplIdx);

//cabecera
$pdf->SetXY(118, 21);
$pdf->Write(1, $a21['Numdiligencias']);

$pdf->SetXY(118, 29);
$pdf->Write(1, $a21['TIP1']);

$pdf->SetXY(152, 29);
$pdf->Write(1, $a21['Dia']);

$pdf->SetXY(177, 29);
$pdf->Write(1, $a21['Hora']);

$pdf->SetXY(118, 37);
$pdf->Write(1, $a21['Lugar']);

//acta de simptomatologia

//dades de la persona requerida
$pdf->SetXY(27, 62);
$pdf->Write(1, $a21['Primerapellido']." ".$a21['Segundoapellido'].", ".$a21['Nombre']);

$pdf->SetXY(157, 62);
$pdf->Write(1, $a21['Permiso']);

if ($a21['Sexo']=="Hombre") {
	$pdf->SetXY(27.1, 69.2);
	$pdf->Write(1, "X");
} else{
	$pdf->SetXY(49.6, 69.2);
	$pdf->Write(1, "X");
}

$pdf->SetXY(80, 70);
$pdf->Write(1, $a21['Altura']." cm");

$pdf->SetXY(157, 70);
$pdf->Write(1, $a21['Peso']." kg");

//Descripció de la conducció
$pdf->SetXY(27, 82);
$pdf->Write(1, $a21['Descripcionconduccion']);


//Simptomatologia
if ($a21['Halitosi']) {
	$pdf->SetXY(120.5, 140.8);
	$pdf->Write(1, "X");
} else{
	$pdf->SetXY(127, 140.8);
	$pdf->Write(1, "X");
}

//constitució física
switch (utf8_decode($a21['Constitucion'])) {
	case 'Corpulento':
		$pdf->SetXY(70.2, 149.6);
		$pdf->Write(1, "X");
		break;
	case 'Mediana':
		$pdf->SetXY(114.4, 150.3);
		$pdf->Write(1, "X");
		break;
	default:
		$pdf->SetXY(157.6, 150.3);
		$pdf->Write(1, "X");
		break;
}

//Comportament
if ($a21['Comportamiento_agresivo']) {
	$pdf->SetXY(27.1, 157);
	$pdf->Write(1, "X");
}

if ($a21['Comportamiento_insultante']) {
	$pdf->SetXY(70.2, 157);
	$pdf->Write(1, "X");
}

if ($a21['Comportamiento_irrespetuoso']) {
	$pdf->SetXY(114.4, 157);
	$pdf->Write(1, "X");
}

if ($a21['Comportamiento_euforico']) {
	$pdf->SetXY(157.6, 157);
	$pdf->Write(1, "X");
}

if ($a21['Comportamiento_muyloquaz']) {
	$pdf->SetXY(27.1, 161.7);
	$pdf->Write(1, "X");
}

if ($a21['Comportamiento_excitado']) {
	$pdf->SetXY(70.2, 161.7);
	$pdf->Write(1, "X");
}

if ($a21['Comportamiento_variaciones']) {
	$pdf->SetXY(114.4, 161.7);
	$pdf->Write(1, "X");
}

//Descripció del comportament
$pdf->SetXY(27, 169);
$pdf->Write(1, $a21['Descripcioncomportamiento']);

//ulls mirada
if ($a21['Mirada_midriaticos']) {
	$pdf->SetXY(27.1, 188.3);
	$pdf->Write(1, "X");
}

if ($a21['Mirada_mioticos']) {
	$pdf->SetXY(61.8, 188.3);
	$pdf->Write(1, "X");
}

if ($a21['Mirada_brillantes']) {
	$pdf->SetXY(105, 188.3);
	$pdf->Write(1, "X");
}

if ($a21['Mirada_somnolienta']) {
	$pdf->SetXY(137.4, 188.3);
	$pdf->Write(1, "X");
}

if ($a21['Mirada_perdida']) {
	$pdf->SetXY(171.7, 188.3);
	$pdf->Write(1, "X");
}

//descripció de la parla
if ($a21['Habla_pastosa']) {
	$pdf->SetXY(27.2, 201.5);
	$pdf->Write(1, "X");
}

if ($a21['Habla_clara']) {
	$pdf->SetXY(27.2, 206.6);
	$pdf->Write(1, "X");
}

if ($a21['Habla_vacilante']) {
	$pdf->SetXY(27.2, 211.8);
	$pdf->Write(1, "X");
}

//manera de expresarse
if ($a21['Expresion_ininteligibles']) {
	$pdf->SetXY(113.6, 201.5);
	$pdf->Write(1, "X");
}

if ($a21['Expresion_incoherentes']) {
	$pdf->SetXY(113.6, 206.6);
	$pdf->Write(1, "X");
}

if ($a21['Expresion_repetitivo']) {
	$pdf->SetXY(113.6, 211.8);
	$pdf->Write(1, "X");
}

if ($a21['Expresion_fugaideas']) {
	$pdf->SetXY(113.6, 216.8);
	$pdf->Write(1, "X");
}

//psicomotricitat
if ($a21['Psicomotricidad_vacilante']) {
	$pdf->SetXY(27.1, 224.4);
	$pdf->Write(1, "X");
}

if ($a21['Psicomotricidad_imprecision']) {
	$pdf->SetXY(81, 224.4);
	$pdf->Write(1, "X");
}

if ($a21['Psicomotricidad_disminucionreflejos']) {
	$pdf->SetXY(148.4, 224.4);
	$pdf->Write(1, "X");
}

if ($a21['Psicomotricidad_apreciacionfalsa']) {
	$pdf->SetXY(27.1, 228.6);
	$pdf->Write(1, "X");
}

//Descripción motricidad
$pdf->SetXY(27, 237);
$pdf->Write(1, $a21['Descripcionmotricidad']);


$pdf->SetXY(27, 265);
$pdf->Write(1, $a21['TIP1']);


?>