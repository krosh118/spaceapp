<?php
$msg = "";
$rec = "";
$cor = "";
$conn = mysql_connect("127.0.0.1","root","");
mysql_select_db("redspace",$conn);
// Si se apreta el boton Agendar, da la condicion como true.
if($_POST['enviodatos'])
{
	
	$nombre = htmlentities($_POST['nombre']);
	$correo = htmlentities($_POST['correo']);
	$contra = htmlentities($_POST['contra']);
	$nacimiento = htmlentities($_POST['nacimiento']);
	$pais = htmlentities($_POST['pais']);
	$experto = 0;
	
	
		if($nombre!=null && $contra!=null && $correo!=null  && $nacimiento!=null && $pais!=null)
		{
			
			$ssql = "INSERT INTO `redspace`.`usuario` (`nombre`, `pass`, `pais`, `fecha_nacimiento`, `experto`, `nivel`, `exp_actual`, `correo`) VALUES ('$nombre', '$contra', 'pais', '$nacimiento', '0', '0', '0', '$correo');";
			//Ejecuto la sentencia 
				$rs = mysql_query($ssql,$conn) or die(mysql_error()); 
				

		
			
			
	
			
		} else { 
			
			$msg = "Falta rellenar algun dato, intenta de nuevo"; 
			
		}
	
}


?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Bootstrap Admin Theme</title>

    <!-- Bootstrap Core CSS -->
    <link href="../bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <style type="text/css">
<!--
.Estilo1 {color: #FFFFFF}
-->
    </style>
</head>

<body class="bodycolor1">
<span class="Estilo1"></span>

    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Login</h3>
                    </div>
                    <div class="panel-body">
                        <h3>
							<?=$msg;?>
						</h3>
                        <a href="index.php" class="btn btn-lg btn-warning btn-block">Regresar a Inicio</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="../bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

</body>

</html>