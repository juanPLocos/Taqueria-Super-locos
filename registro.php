<?php

	$realname=$_POST['realname'];
	$mail=$_POST['nick'];
	$pass= $_POST['pass'];
	$rpass=$_POST['rpass'];
	$id=$_POST['id'];

	require("connect_db.php");
//la variable  $mysqli viene de connect_db que lo traigo con el require("connect_db.php");
	

$checkid=mysqli_query($mysqli,"SELECT * FROM login WHERE id='$id'");
 if(mysqli_num_rows($checkid)>0)
 {
	 // Si es mayor a cero imprimimos que ya existe el usuario
  echo ' <script language="javascript">alert("Atencion, ya existe esta serie de numeros, verifique sus datos");</script> ';
 }else{


	$checkemail=mysqli_query($mysqli,"SELECT * FROM login WHERE email='$mail'");
	$check_mail=mysqli_num_rows($checkemail);
		if($pass==$rpass){
			if($check_mail>0){
				echo ' <script language="javascript">alert("Atencion, ya existe el mail designado para un usuario, verifique sus datos");</script> ';
			}else{
				
				//require("connect_db.php");
//la variable  $mysqli viene de connect_db que lo traigo con el require("connect_db.php");
				mysqli_query($mysqli,"INSERT INTO login VALUES('$id','$realname','$pass','$mail','','','2')");
				//echo 'Se ha registrado con exito';
				echo ' <script language="javascript">alert("Usuario registrado con éxito");</script> ';
				
			}
			
		}else{
			echo  ' <script language="javascript">alert("Las contraseñas no coinsiden");</script> ';
		}

	}
?>