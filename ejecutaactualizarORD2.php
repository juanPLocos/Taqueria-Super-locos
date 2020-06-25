<?php


extract($_POST);	//extraer todos los valores del metodo post del formulario de actualizar
	require("connect_db.php");
	$sentencia="update orden set NombreP_orden='$NombreP_orden', ApellidoP_orden='$ApellidoP_orden', Calle_orden='$Calle_orden', CalleN_orden='$CalleN_orden', Colonia_orden='$Colonia_orden', Municipio_orden='$Municipio_orden', Cp_orden='$Cp_orden', Telefono='$Telefono', Asunto_orden='$Asunto_orden' where Clave_orden='$id'";
	//la variable  $mysqli viene de connect_db que lo traigo con el require("connect_db.php");
	$resent=mysqli_query($mysqli,$sentencia);
	if ($resent==null) {
		echo "Error de procesamieno no se han actuaizado los datos";
		echo '<script>alert("ERROR EN PROCESAMIENTO NO SE ACTUALIZARON LOS DATOS")</script> ';
		header("location: admin.php");
		
		echo "<script>location.href='index2.php'</script>";
	}else {
		echo '<script>alert("REGISTRO ACTUALIZADO")</script> ';
		
		echo "<script>location.href='index2.php'</script>";

		
	}
?>