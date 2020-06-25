
<?php
$Nombre_Contacto=$_POST['Nombre_Contacto'];
$Apellido_Contacto=$_POST['Apellido_Contacto'];
$Correo_Contacto=$_POST['Correo_Contacto'];
$Asunto_Contacto=$_POST['Asunto_Contacto'];
$con=mysqli_connect("localhost", "id11402779_proyectosuper","darkes301", "id11402779_superlocos")or die("error en la conexion");
mysqli_query($con,"Insert into contacto(Nombre_Contacto,Apellido_Contacto,Correo_Contacto,Asunto_Contacto)
values('$Nombre_Contacto','$Apellido_Contacto','$Correo_Contacto','$Asunto_Contacto')")or die("error en la insercion");

echo'<script type="text/javascript">
    alert("Datos Insertados Correctamente");
    window.location.href="index2.php";
    </script>';

mysqli_close($con);