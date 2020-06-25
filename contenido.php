<?php

session_start();
error_reporting(0);
$varsesion=$_SESSION['Correo_Usuario'];

if($varsesion == null || $varsesion =''){
echo'<script type="text/javascript">
    alert("No tiene autorizacion para ingresar a este sitio");
    window.location.href="index.html";
    </script>';
    die();
	}



echo "Hola " . $_SESSION['Correo_Usuario'];

?>


<!DOCTYPE html>
<html>
<head>
	<title>Destruir sesion</title>
</head>
<body>
<form action='cerrar.php'>
    <input type="submit" name="sesionDestroy" value="Cerrar sesion"/>
</form>
</body>
</html>