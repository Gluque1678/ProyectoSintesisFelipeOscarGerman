<?php

$sqlt27 = "SELECT * FROM f_t27pl";

$qry = mysqli_query($congu,$sqlt27);

$a27 = mysqli_fetch_assoc($qry);


//var_dump($a21);

$pageCount = $pdf->setSourceFile("actas/t27.pdf");
$tplIdx = $pdf->importPage(1);

$pdf->addPage();

$pdf->SetFont('Helvetica');
$pdf->SetTextColor(255,0,0);
$pdf->SetFontSize(10);

$pdf->useTemplate($tplIdx);

//cabecera
$pdf->SetXY(131, 21);
$pdf->Write(1, $a27['Numdiligencias']);

$pdf->SetXY(175, 21);
$pdf->Write(1, $a27['TIP1']);

$pdf->SetXY(131, 29);
$pdf->Write(1, $a27['Dia']);

$pdf->SetXY(175, 29);
$pdf->Write(1, $a27['Hora']);

$pdf->SetXY(131, 38);
$pdf->Write(1, $a27['Lugar']);

switch (utf8_encode($a27['Actuacion'])) {
	case 'Control preventivo':
		$pdf->SetXY(58.3, 53.6);
		$pdf->Write(1, 'X');
		break;
	case 'Accidente tráfico':
		$pdf->SetXY(88, 53.6);
		$pdf->Write(1, 'X');
		break;	
	case 'Infracción del reglamento':
		$pdf->SetXY(119.5, 53.6);
		$pdf->Write(1, 'X');
		break;	

	default:
		$pdf->SetXY(156.8, 53.6);
		$pdf->Write(1, 'X');
		break;
}

$pdf->SetXY(144, 69);
$pdf->Write(1, $a27['Horanegativa']);

if ($a27['negacion']) {
	$pdf->SetXY(86, 193.1);
	$pdf->Write(1, 'X');
	$pdf->SetXY(86, 196);
	$pdf->Write(1, 'X');
}else{
	$pdf->SetXY(111, 193.1);
	$pdf->Write(1, 'X');
	$pdf->SetXY(111, 196);
	$pdf->Write(1, 'X');
}

$pdf->SetXY(26.6, 201.7);
$pdf->Write(1, 'X');

$pdf->SetFontSize(7);
$pdf->SetXY(52.7, 214.7);
$pdf->Write(1, $a27['Horanegativa']);

$pdf->SetFontSize(10);
if ($a27['autorizacion']) {
	$pdf->SetXY(26.7, 239.5);
	$pdf->Write(1, 'X');
	$pdf->SetXY(26.7, 247.5);
	$pdf->Write(1, $a27['Conductorsubstituto']);
	$pdf->SetXY(90, 247.5);
	$pdf->Write(1, $a27['Permisosubstituto']);
	$pdf->SetXY(153, 247.5);
	$pdf->Write(1, $a27['Clasesubstituto']);
	$pdf->SetXY(166, 267.5);
	$pdf->Write(1, $a27['Permisosubstituto']);

}

$pdf->SetXY(26.7, 267.5);
$pdf->Write(1, $a27['TIP1']);

$pdf->SetXY(73.2, 267.5);
$pdf->Write(1, $a27['DNI']);


?>