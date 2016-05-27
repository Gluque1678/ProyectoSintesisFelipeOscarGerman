<?php

$sqla15 = "SELECT * FROM f_t15pl WHERE Numdiligencias = '$_SESSION[diligencia]'";

$qry = mysqli_query($congu,$sqla15);

$a15 = mysqli_fetch_assoc($qry);


//var_dump($a15);

$pageCount = $pdf->setSourceFile("actas/t15.pdf");
$tplIdx = $pdf->importPage(1);

$pdf->addPage();

$pdf->SetFont('Helvetica');
$pdf->SetTextColor(255,0,0);
$pdf->SetFontSize(10);

$pdf->useTemplate($tplIdx);

//cabecera
$pdf->SetXY(130, 21);
$pdf->Write(1, $a15['Numdiligencias']);

$pdf->SetXY(170, 31);
$pdf->Write(1, $a15['TIP']);

$pdf->SetXY(130, 31);
$pdf->Write(1, $a15['Dia']);

$pdf->SetXY(150.5, 31);
$pdf->Write(1, $a15['Hora']);

$pdf->SetXY(130, 40);
$pdf->Write(1, $a27['Lugar']);

$pdf->SetXY(27, 58);
$pdf->Write(1, $a21['Primerapellido']." ".$a21['Segundoapellido'].", ".$a21['Nombre']);

$pdf->SetXY(121, 58);
$pdf->Write(1, $a15['DNI']);



?>