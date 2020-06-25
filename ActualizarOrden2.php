<!DOCTYPE html>	
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Actualizar Datos</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Joseph Godoy">

    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet"/>

    <link rel="shortcut icon" href="assets/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Joseph Godoy">

    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet"/>

    <link rel="shortcut icon" href="assets/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">

    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
<body data-offset="40" background="images/fondotot.jpg" style="background-attachment: fixed">
<div class="container">
<header class="header">
<div class="row">
	<?php
	?>
</div>
</header>

  <!-- Navbar
    ================================================== -->


<ul class="nav magnific-popup">
						<li><a href="index2.php"><p style="color:black";><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Inicio</strong></p></a></li>
						<li><p style="color:black";>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Bienvenido: <strong></strong></p></li> 
			 			<li><a href="desconectar.php"><p style="color:black";> <strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Cerrar Cesión </strong></p></a></li>
						</ul>

<!-- ======================================================================================================================== -->

<div class="row">
	
	
		
	<div class="span12">

		<div class="caption">
		
<!--///////////////////////////////////////////////////Empieza cuerpo del documento interno////////////////////////////////////////////-->
		
		<h2> Edicion de Ordenes registradas </h2>	
		<div class="well well-small">
		<hr class="soft"/>
		<h4>Edición de ordenes</h4>
		<div class="row-fluid">
		
		<?php
		extract($_GET);
		require("connect_db.php");

		$sql="SELECT * FROM orden where Clave_orden='$id'";
	//la variable  $mysqli viene de connect_db que lo traigo con el require("connect_db.php");
		$ressql=mysqli_query($mysqli,$sql);
		while ($row=mysqli_fetch_row ($ressql)){
		    	$id=$row[0];
		    	$NombreP_orden=$row[1];
		    	$ApellidoP_orden=$row[2];
		    	$Calle_orden=$row[3];
		    	$CalleN_orden=$row[4];
		    	$Colonia_orden=$row[5];
		    	$Munipio_orden=$row[6];
		    	$Cp_orden=$row[7];
		    	$Telefono=$row[8];
		    	$Asunto_orden=$row[9];
		    }



		?>

		<form action="ejecutaactualizarORD2.php" method="post">
				Id<br><input type="text" class="form-control" name="id" value= "<?php echo $id ?>" readonly="readonly"><br>
				Usuario<br> <input type="text" class="form-control" name="NombreP_orden" value="<?php echo $NombreP_orden?>"><br>
				Apellido<br> <input type="text" class="form-control" name="ApellidoP_orden" value="<?php echo $ApellidoP_orden?>"><br>
				Calle<br> <input type="text" class="form-control" name="Calle_orden" value="<?php echo $Calle_orden?>"><br>
				Numero<br> <input type="text" class="form-control" name="CalleN_orden" value="<?php echo $CalleN_orden?>"><br>
				Colonia<br> <input type="text" class="form-control" name="Colonia_orden" value="<?php echo $Colonia_orden?>"><br>
				Municipio<br> <input type="text" class="form-control" name="Municipio_orden" value="<?php echo $Munipio_orden?>"><br>
				Codigo postal<br> <input type="text" class="form-control" name="Cp_orden" value="<?php echo $Cp_orden?>"><br>
				Telefono<br> <input type="text" class="form-control" name="Telefono" value="<?php echo $Telefono?>"><br>
				Asunto<br> <input type="text" class="form-control" name="Asunto_orden" value="<?php echo $Asunto_orden?>"><br>
				<br>
				<input type="submit" value="Guardar" class="btn btn-success btn-primary">
				<a href="index2.php" class="btn btn-success btn-primary">Cancelar</a>
			</form>

				  
		
		
		<div class="span8">
		
		</div>	
		</div>	
		<br/>
		


		<!--EMPIEZA DESLIZABLE-->
		
		 <!--TERMINA DESLIZABLE-->



		
		
		</div>

		


		

<!--///////////////////////////////////////////////////Termina cuerpo del documento interno////////////////////////////////////////////-->
</div>

	</div>
</div>
<!-- Footer
      ================================================== -->
<hr class="soften"/>
<footer class="footer">

<hr class="soften"/>
<p>&copy; Copyright Tacos Los super locos <br/><br/></p>
 </footer>
</div><!-- /container -->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="bootstrap/js/jquery-1.8.3.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
	</style>
  </body>
</html>


