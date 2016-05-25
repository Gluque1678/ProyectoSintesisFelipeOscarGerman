<?php

session_start();

include 'conexion.proc.php';

$imgAlerta = "<img src='img/alerta.gif' alt='alerta'/>";

?>

<!DOCTYPE html>
<html>
	<head>
  <meta charset="UTF-8">
  <title>Administrar</title>
  <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
        <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="css/form-elements.css">
        <link rel="stylesheet" href="css/style.css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="img/logoUrbanaActas.png">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="img/logoUrbanaActas.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="img/logoUrbanaActas.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="img/logoUrbanaActas.png">
        <link rel="apple-touch-icon-precomposed" href="img/logoUrbanaActas.png">

</head>
	<body>
		<div class="top-content">
            <div class="inner-bg">
                <div class="container padding-top-1em">
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2 text">
                            <h1>Administrar</h1>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-3 form-box">
                            <div class="form-bottom">
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>		
		<div class="panel-group">
		    <div class="panel panel-default">
		    <div class="panel-heading">
		    	<table border="0">
                    <thead>
                        <tr>
                            <th>Fecha</th>
                            <th>Hora</th>
                            <th>Diligencias</th>
                            <th>Agente</th>
                            <th>DNI</th>
                        </tr>
                    </thead>
		    </div>
		    <div class="panel-body">
                <tbody>
                    <center>
                    <?php
                        $sqladmin= "SELECT * FROM `f_a21pl`";
                        $sqladmin2 = mysqli_query($congu,$sqladmin);
                    
                        if(mysqli_num_rows($sqladmin2)>0) {
                            
                            // $datos_admin=mysqli_fetch_array($sqladmin2);
                            // $_SESSION['admin_datos']=$datos_admin;
                            //var_dump($datos_admin);

                            // foreach ($datos_admin as $mostrardiligencias) {
                            //     echo "<tr><td>$mostrardiligencias[Dia]&nbsp</td>";
                            //     echo "<td>$mostrardiligencias[Numdiligencias]&nbsp</td>";
                            //     echo "<td>$mostrardiligencias[TIP1]&nbsp</td>";
                            //     echo "<td>$mostrardiligencias[DNI]&nbsp</td>";
                            //     echo "<td><a href='fpdf/actas.php?ndiligencia=$mostrardiligencias[Numdiligencias]'>generaracta</a></td></tr>";
                            // }

                            while ($datos_admin = mysqli_fetch_array($sqladmin2)) {
                                echo "<tr><td>$datos_admin[Dia]&nbsp</td>";
                                echo "<td>$datos_admin[Hora]&nbsp</td>";
                                echo "<td>$datos_admin[Numdiligencias]&nbsp</td>";
                                echo "<td>$datos_admin[TIP1]&nbsp</td>";
                                echo "<td>$datos_admin[DNI]&nbsp</td>";
                                echo "<td><a target='_blank' href='fpdf/actas.php?ndiligencia=$datos_admin[Numdiligencias]'><img src='img/pdf-logo.png'></a></td></tr>";
                            }

                        }

                    ?>

                    </center>
                </tbody>
		      </div>
		</div>

	<div>
	</div>

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
        <script src="js/jquery-1.11.1.js"></script>
        <script src="bootstrap/js/bootstrap.js"></script>
        <script src="js/jquery.backstretch.js"></script>
        <script src="js/script.js"></script>
	</body>


</html>