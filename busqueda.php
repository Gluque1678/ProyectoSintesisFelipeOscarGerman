<?php

session_start();

include 'conexion.proc.php';
?>

<!DOCTYPE html>
<html>
	<head>
  <meta charset="UTF-8">
  <title>Identificación</title>
  <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Bootstrap Login Form Template</title>

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
                            <h1>Comprobación de datos</h1>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-3 form-box">
                            <div class="form-bottom">
                          <form role="form" action="" method="busqueda.php" method="post" class="login-form">
                            <div class="form-group">
                                <input type="text" id="iddni" name="Num" value="" placeholder="DNI" required class="form-username form-control font-size-2em text-centro"/>
                              </div>
                              <div class="form-group">
                                <input type="text" id="idmatricula" name="Matricula" value="" placeholder="Matrícula" required class="form-password form-control font-size-2em text-centro"/>
                              </div>
                              <input type="submit" id="buscar" name="buscador" value="Buscar" class="btn btn-success font-size-2em"/><br/>
                          </form>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
<?php if (isset($_REQUEST['Num'])) { ?>		
		<div class="panel-group">
		    <div class="panel panel-default">
		    <div class="panel-heading">DNI</div>
		    <div class="panel-body">
			<?php
				$numDni = strtoupper($_REQUEST['Num']);

				$qry1 = "SELECT * FROM dni WHERE Num='$numDni'";
				$res1 = mysqli_query($congu,$qry1);
					if(mysqli_num_rows($res1)==1) {
						$datos_dni=mysqli_fetch_array($res1);
						$_SESSION['dni_datos']=$datos_dni;
													
						echo $datos_dni["Num"].'<br>';
						echo $datos_dni["Nombre"].'&nbsp';
						echo $datos_dni["Primerapellido"].'&nbsp';
						echo $datos_dni["Segundoapellido"].'<br>';
						echo $datos_dni["Domicilio"].'<br>';
					}else echo "No hay datos de la persona";
									
		}
			?>
		      </div>
		</div>

<?php if (isset($_REQUEST['Matricula'])) { ?>

		    <div class="panel panel-default">
		      <div class="panel-heading">Matrícula</div>
		      <div class="panel-body">
						<?php
							$numMatricula = strtoupper($_REQUEST['Matricula']);

							$qry2 = "SELECT * FROM vehiculo WHERE Matricula='$numMatricula'";

							$res2 = mysqli_query($conmossos,$qry2);

							if(mysqli_num_rows($res2)==1) {
								$datos_matricula=mysqli_fetch_array($res2);
								$_SESSION['matricula_datos']=$datos_matricula;
								
								echo $datos_matricula["Matricula"].'<br>';
								echo $datos_matricula["Marca"].'&nbsp';
								echo $datos_matricula["Modelo"].'&nbsp';
								echo $datos_matricula["Color"].'<br/>';
								echo $datos_matricula["Titular"].'<br/>';
								if (!$datos_matricula["Segurovigente"]) echo "Atención! Sin seguro vigente".'<br/>';
								if ($datos_matricula["Estadorobo"]) echo "Atención! Coche robado".'<br/>';
								if (!$datos_matricula["Itvvigente"]) echo "Atención! Itv caducada".'<br/>';
									
							} else echo "No hay datos del vehículo";
						}
					?>
		      </div>
		    </div>
		 </div>
	<div>
		<a href="test.php"><button id="alcoholemia" name="Alcoholemia" class="btn btn-danger font-size-2em">Proceder Control de Alcoholemia</button></a><br/>
	</div>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
        <script src="js/jquery-1.11.1.js"></script>
        <script src="bootstrap/js/bootstrap.js"></script>
        <script src="js/jquery.backstretch.js"></script>
        <script src="js/script.js"></script>
	</body>
</html>