<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Administrador</title>
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

  <!-- Navbar
    ================================================== -->

 <body class="goto-here container">
		<div class="py-0 bg-primary">
    	<div class="container">
    		<div class="row no-gutters d-flex align-items-start align-items-center px-md-0">
	    		<div class="col-lg-12 d-block">
		    		<div class="row d-flex">
		    			
					    </div>
				    </div>
			    </div>
		    </div>
		  </div>
    </div>

 	<ul class="nav magnific-popup">
						<li><a href="admin.php"><p style="color:black";><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ADMINISTRADOR DEL SITIO</strong></p></a></li>
						<li><p style="color:black";>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Bienvenido: <strong></strong></p></li> 
			 			<li><a href="desconectar.php"><p style="color:black";> <strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Cerrar Sesión </strong></p></a></li>
			 			<li><a href="ReportesContacto.php"><p style="color:black";> <strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Reportes </strong></p></a></li>
			 			<li><a href="RegistroOrdenes.php"><p style="color:black";> <strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Ordenes </strong></p></a></li>
						</ul>

<!-- ======================================================================================================================== -->
<div class="row">
	
	
		
	<div class="span12">

		<div class="caption">
		
<!--///////////////////////////////////////////////////Empieza cuerpo del documento interno////////////////////////////////////////////-->
		<center><h2> Administración de usuarios registrados</h2></center>	
		<div class="well well-small">
		<hr class="soft"/>
		<center><h4>Tabla de Ordenes</h4></center>
		<div class="row-fluid">
		<div class="table-responsive">
  <table class="table table-bordered">
  	<?php

				require("connect_db.php");
				$sql=("SELECT * FROM orden");
	
//la variable  $mysqli viene de connect_db que lo traigo con el require("connect_db.php");
				$query=mysqli_query($mysqli,$sql);

				echo "<table border='1'; class='table table-bordered';>";
					echo "<tr class='warning'>";
						echo "<td>Clave Orden</td>";
						echo "<td>Nombre</td>";
						echo "<td>Apellido</td>";
						echo "<td>Calle</td>";
						echo "<td>Numero</td>";
						echo "<td>Colonia</td>";
						echo "<td>Municipio</td>";
						echo "<td>Codigo Postal</td>";
						echo "<td>Telefono</td>";
						echo "<td>Asunto</td>";
						echo "<td>Editar</td>";
						echo "<td>Borrar</td>";
					echo "</tr>";

			    
			?>
			  
			<?php 
				 while($arreglo=mysqli_fetch_array($query)){
				  	echo "<tr class='success'>";
				    	echo "<td>$arreglo[0]</td>";
				    	echo "<td>$arreglo[1]</td>";
				    	echo "<td>$arreglo[2]</td>";
				    	echo "<td>$arreglo[3]</td>";
				    	echo "<td>$arreglo[4]</td>";
				    	echo "<td>$arreglo[5]</td>";
						echo "<td>$arreglo[6]</td>";
				    	echo "<td>$arreglo[7]</td>";
				    	echo "<td>$arreglo[8]</td>";
				    	echo "<td>$arreglo[9]</td>";
				    	echo "<td><a href='ActualizarOrden2.php?id=$arreglo[0]'><img src='images/actualizar.png' class='img-rounded'></td>";
						echo "<td><a href='RegistroOrdenes.php?id=$arreglo[0]&idborrar=2'><img src='images/boteB.png' class='img-rounded'/></a></td>";
						

						
					echo "</tr>";
				}

				echo "</table>";

					extract($_GET);
					if(@$idborrar==2){
		
						$sqlborrar="DELETE FROM orden WHERE Clave_orden=$id";
						$resborrar=mysqli_query($mysqli,$sqlborrar);
						echo '<script>alert("REGISTRO ELIMINADO")</script> ';
						//header('Location: proyectos.php');
						echo "<script>location.href='RegistroOrdenes.php'</script>";
					}

			?>
			
				    ...
  </table>
</div>
			  			  
			  
		
		
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