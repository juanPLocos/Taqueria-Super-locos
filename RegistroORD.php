<?php
$NombreP_orden=$_POST['NombreP_orden'];
$ApellidoP_orden=$_POST['ApellidoP_orden'];
$Calle_orden=$_POST['Calle_orden'];
$CalleN_orden=$_POST['CalleN_orden'];
$Colonia_orden=$_POST['Colonia_orden'];
$Municipio_orden=$_POST['Municipio_orden'];
$Cp_orden=$_POST['Cp_orden'];
$Telefono=$_POST['Telefono'];
$Asunto_orden=$_POST['Asunto_orden'];

$con=mysqli_connect("localhost", "id11402779_proyectosuper","darkes301", "id11402779_superlocos")or die("error en la conexion");
mysqli_query($con,"Insert into orden(NombreP_orden,ApellidoP_orden,Calle_orden,CalleN_orden,Colonia_orden,Municipio_orden,Cp_orden,Telefono,Asunto_orden)
values('$NombreP_orden','$ApellidoP_orden','$Calle_orden','$CalleN_orden','$Colonia_orden','$Municipio_orden','$Cp_orden','$Telefono','$Asunto_orden')");

echo'<script type="text/javascript">
    alert("Datos Insertados Correctamente");
    window.location.href="index2.php";
    </script>';

mysqli_close($con);

?>