
<?php
$nombreS=$_POST['nombreS'];
$apellidoS=$_POST['apellidoS'];
$softwareS=$_POST['softwareS'];
$teamS=$_POST['teamS'];
$contraS=$_POST['contraS'];
$razonS=$_POST['razonS'];
$correoS=$_POST['correoS'];
$telefonoS=$_POST['telefonoS'];
$asuntoS=$_POST['asuntoS'];

$con=mysqli_connect("localhost","root","","ciberwin2")or die("error en la conexion");
mysqli_query($con,"Insert into soporte(nombre_Soporte,apellido_Soporte,software_Soporte,razon_Social_Soporte,	correo_Soporte,telefono_Soporte,asunto_Soporte,id_Teamviewer,contraseNa_Teamviewer)
values('$nombreS','$apellidoS','$softwareS','$razonS','$correoS','$telefonoS','$asuntoS','$teamS','$contraS')")or die(mysqli_error($con));

echo'<script type="text/javascript">
    alert("Datos Insertados Correctamente");
    window.location.href="services.html";
    </script>';

mysqli_close($con);
?>