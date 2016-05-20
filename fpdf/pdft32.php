<?php

$sqlt32 = "SELECT * FROM f_32pl";

$qry = mysqli_query($congu,$sqlt32);

$t32 = mysqli_fetch_assoc($qry);


//var_dump($a21);

$pageCount = $pdf->setSourceFile("actas/t32.pdf");
$tplIdx = $pdf->importPage(1);

$pdf->addPage();

$pdf->SetFont('Helvetica');
$pdf->SetTextColor(255,0,0);
$pdf->SetFontSize(10);

$pdf->useTemplate($tplIdx);

//cabecera
$pdf->SetXY(131, 21);
$pdf->Write(1, $t32['Numdiligencias']);

$pdf->SetXY(175, 21);
$pdf->Write(1, $t32['TIP1']);

$pdf->SetXY(131, 29);
$pdf->Write(1, $t32['Dia']);

$pdf->SetXY(175, 29);
$pdf->Write(1, $t32['Hora']);

$pdf->SetXY(131, 38);
$pdf->Write(1, $t32['Lugar']);




?>