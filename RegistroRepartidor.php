<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title></title> 
	<meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-scale=3.0, minimum-scale=1.0">
 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" >
	<link rel="stylesheet" href="estilos.css">

</head>  
<body style="background-image: url('images/rep.jpg');">
 <form method="post" action="" class="formulario">
    
    <h1>Registra a tu repartidor</h1>
     <div class="contenedor">
<div class="input-contenedor">
         <i class="fas fa-key icon"></i>
         <input type="text" required name="id" placeholder="Ingrese clave del repartidor"/>
         
         </div>
	<div class="input-contenedor">
         <i class="fas fa-user icon"></i>
         <input type="text" required name="realname" placeholder="Ingrese nombre del repartidor"/>
         
         </div>
         
         <div class="input-contenedor">
         <i class="fas fa-user-friends icon"></i>
         <input type="text" required name="nick" placeholder="Ingrese apellidos del repartidor"/>
         
         </div>
         
         <div class="input-contenedor">
        <i class="fas fa-phone icon"></i>
         <input type="text" required name="pass" placeholder="Ingrese el teléfono del repartidor"/>
         </div>
         <div class="input-contenedor">
        <i class="fas fa-street-view icon"></i>
         <input type="text" required name="rpass" placeholder="Ingrese la dirección del repartidor"/>
         
         </div>
         <div class="input-contenedor">
        <i class="fas fa-envelope icon"></i>
         <input type="text" required name="rpass" placeholder="Ingrese el correo electrónico "/>
         
         </div>
         
         <div class="input-contenedor">
        <i class="fas fa-key icon"></i>
         <input type="text" required name="rpass" placeholder="Ingrese su contraseña"/>
         
         </div>
         
         <input type="submit" name="submit" value="Registre su repartidor" class="button"/>
         <br><br>
         <center><a href="index.html" class="button">Inicio</a></center>
         
     </div>
    </form>
    <?php
        if(isset($_POST['submit'])){
            require("registro.php");
        }
    ?>
</body>
</html>