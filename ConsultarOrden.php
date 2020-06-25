<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
<link rel="stylesheet" href="css/bootstrap.min.css"/>
</head>
<body>

 	<ul class="nav magnific-popup">
						<li><a href="index2.php"><p style="color:black";><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Inicio</strong></p></a></li>
						<li><p style="color:black";>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Bienvenido: <strong></strong></p></li> 
			 			<li><a href="desconectar.php"><p style="color:black";> <strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Cerrar Sesión </strong></p></a></li>
	</ul>

<form action="buscarOrden.php" name="form1" id="form1" method="post">
     <div class="container">
            <!--<div class="starter-template">-->
                <div class="panel panel-default" style="margin: 5%">
                <div class="panel-heading">
                    <h3>Buscar Orden </h3>
                </div>
                <div class="panel-body">
                        <div class="form-group">
      <label>Oden:</label>
      <input type="text" required="required" placeholder="Ingrese su numero de telefono" class="form-control" name="Telefono" id="Telefono"/>
      <br />
       <input type="submit" name="Buscar" value="Buscar" class="btn btn-danger"/>
                
      </div>
     </div>
     </div>
     </div>
     </form>
</body>
</html>
