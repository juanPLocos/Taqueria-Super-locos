
<?php
//include("connect_db.php");

//$miconexion = new connect_db;



	$username=$_POST['mail'];
	$pass=$_POST['pass'];


	//la variable  $mysqli viene de connect_db que lo traigo con el require("connect_db.php");
	$con=mysqli_connect("localhost", "id11402779_proyectosuper","darkes301","id11402779_proyectosuperlocos")or die("error en la conexion");
	$sql2=mysqli_query($con,"SELECT * FROM login WHERE email='$username'".mysqli_error($con));
	if($f2=mysqli_fetch_assoc($sql2)){
		if($pass==$f2['pasadmin']){
			$_SESSION['id']=$f2['id'];
			$_SESSION['user']=$f2['user'];
			$_SESSION['rol']=$f2['rol'];

			echo '<script>alert("BIENVENIDO ADMINISTRADOR")</script> ';
			echo "<script>location.href='admin.php'</script>";
		
		}
	}

	$sql2=mysqli_query($con,"SELECT * FROM login WHERE email='$username'".mysqli_error($con));
	if($f2=mysqli_fetch_assoc($sql2)){
		if($pass==$f2['pasarepart']){
			$_SESSION['id']=$f2['id'];
			$_SESSION['user']=$f2['user'];
			$_SESSION['rol']=$f2['rol'];

			echo '<script>alert("BIENVENIDO Repartidor")</script> ';
			echo "<script>location.href='IndexRepartidor.php'</script>";
		
		}
	}


	$sql=mysqli_query($con,"SELECT * FROM login WHERE email='$username'");
	if($f=mysqli_fetch_assoc($sql)){
		if($pass==$f['password']){
			$_SESSION['id']=$f['id'];
			$_SESSION['user']=$f['user'];
			$_SESSION['rol']=$f['rol'];
			echo '<script>alert("BIENVENIDO Usuario")</script> ';
			echo "<script>location.href='index2.php'</script>";
		}else{
			echo '<script>alert("CONTRASEÑA INCORRECTA")</script> ';
		
			echo "<script>location.href='loginvista.html'</script>";
		}
	}else{
		
		echo '<script>alert("ESTE USUARIO NO EXISTE, PORFAVOR REGISTRESE PARA PODER INGRESAR")</script> ';
		
		echo "<script>location.href='loginvista.html'</script>";	

	}

?>