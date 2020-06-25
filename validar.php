<?php
$correoL = $_POST['correoL'];
$contraL = $_POST['contraL'];
$selectUS= $_POST['selectUS'];


$con=mysqli_connect('localhost','root','alan','superlocos') or die("Error al conectar ");


$result = mysqli_query($con,"SELECT * from login where Correo_Usuario='$correoL'");
if($row = mysqli_fetch_array($result)){
	if($row['Contrasena_Usuario'] == $contraL){
		session_start();
		$_SESSION['Correo_Usuario'] = $correoL;
		header("location:contenido.php");
	}
}else if($row["Correo_Usuario"] == $correoL and $row["Contrasena_Usuario"] != $contraL){
	echo'<script type="text/javascript">
    alert("usuario o contraseña incorrectos");
    window.location.href="contenido.php";
    </script>';
	exit();
}else{
	echo'<script type="text/javascript">
    alert("este usuario no existe");
    window.location.href="Login.html";
    </script>';
}

?>


