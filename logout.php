<?php
session_start();
if(!empty($_SESSION['TIP']))
{
$_SESSION['TIP']='';
session_destroy();
}
header("Location:index.html");
?>