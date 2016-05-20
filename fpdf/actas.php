<?php

session_start();

//$dni=$_SESSION['dni_datos'];
// var_dump($dni);
//$tip=$_SESSION['TIP'];
// var_dump($tip);

include("../conexion.proc.php");
include('fpdf.php');
include('fpdi.php');

$pdf = new FPDI();

include 'pdfa21.php';

include 'pdft27.php';

include 'pdft15.php';

/*include 'pdft32.php';

include 'pdfn08.php';

include 'pdfa13.php';*/

$pdf->Output('../diligencias/'.$a21["Numdiligencias"].'.pdf','F',true);

/*
$to = "iglesias.pipe@gmail.com";
$subject = "Diligencia: ".;
$txt = "Diligencia nº".$a21['Numdiligencias']." realizada por el agente".$a21['TIP1'];
$headers = "From: felipe_iglesias@hotmail.com";

mail($to,$subject,$txt,$headers);*/

?>