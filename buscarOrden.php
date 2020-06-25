<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>

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
<body>
	 	<ul class="nav magnific-popup">
						<li><a href="index2.php"><p style="color:black";><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Inicio</strong></p></a></li>
						<li><p style="color:black";>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Bienvenido: <strong></strong></p></li> 
			 			<li><a href="desconectar.php"><p style="color:black";> <strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Cerrar Sesión </strong></p></a></li>
	</ul>
<?php

				require("connect_db.php");
						$Telefono=$_POST['Telefono'];
				            $sql=("SELECT * FROM orden WHERE Telefono='$Telefono'");
						

	
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
					echo "</tr>";

			    
			?>
			  
			<?php 
				 if($arreglo=mysqli_fetch_array($query)){
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
						

						
					echo "</tr>";


				echo "</table>";
									}else{

						echo '<script>alert("Esta clave de pedido no existe")</script> ';
						echo "<script>location.href='ConsultarOrden.php'</script>";
}
					extract($_GET);
					if(@$idborrar==2){
		
						$sqlborrar="DELETE FROM orden WHERE Clave_orden=$id";
						$resborrar=mysqli_query($mysqli,$sqlborrar);
						echo '<script>alert("REGISTRO ELIMINADO")</script> ';
						//header('Location: proyectos.php');
						echo "<script>location.href='RegistroOrdenes.php'</script>";
					}

			?>
			</body>
</html>