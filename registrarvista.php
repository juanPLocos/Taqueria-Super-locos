<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title></title> 
	<meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-scale=3.0, minimum-scale=1.0">
 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" >
	<link rel="stylesheet" href="estilos.css">
	

</head>  
<body style="background-image: url('images/Tacos6.jpg');">
 <form method="post" action="" class="formulario">
    
    <h1>Registrate</h1>
     <div class="contenedor">
<div class="input-contenedor">
         <i class="fas fa-envelope icon"></i>
         <input type="text" required name="id" placeholder="Ingrese digitos de su preferencia"/>
         
         </div>
	<div class="input-contenedor">
         <i class="fas fa-user icon"></i>
         <input type="text" required name="realname" placeholder="Nombre Completo"/>
         
         </div>
         
         <div class="input-contenedor">
         <i class="fas fa-envelope icon"></i>
         <input type="text" required name="nick" placeholder="Correo Electronico"/>
         
         </div>
         
         <div class="input-contenedor">
        <i class="fas fa-key icon"></i>
         <input type="password" required name="pass" placeholder="Contraseña"/>
         </div>
         <div class="input-contenedor">
        <i class="fas fa-key icon"></i>
         <input type="password" required name="rpass" placeholder="Confirme su contraseña"/>
         
         </div>
         <input type="submit" name="submit" value="Registrarse" class="button"/>
         <br><br>
         <center><a href="index.html" class="button">Inicio</a></center>
         <p>Al registrarte, aceptas nuestras Condiciones de uso y Política de privacidad.</p>
         <p>¿Ya tienes una cuenta?<a class="link" href="loginvista.html">Iniciar Sesion</a></p>
     </div>
    </form>
    <?php
        if(isset($_POST['submit'])){
            require("registro.php");
        }
    ?>
</body>
</html>