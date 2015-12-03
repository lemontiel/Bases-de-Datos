<!DOCTYPE HTML>

<html lang="es">
<head>
	
	<title>Usuario Registrado</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="contenedor">
		<h1>Usuario Registrado</h1>
		
		<?php
		require_once("mySqlConnect.php");
		$nombre=$_POST["nombre"];
		$apellidoM=$_POST["aMaterno"];
		$apellidoP=$_POST["aPaterno"];
		$apodo=$_POST["apodo"];
		$carrera=$_POST["carrera"];
		$email=$_POST["email"];
		$contraseña=$_POST["contraseña"];
		$fechaN=$_POST["fnacimiento"];
		$tipo=$_POST["tipo"];

		$insertar=mysqli_query("INSERT INTO USUARIO VALUES ('','$nombre','$apellidoP,'$apellidoM','$fechaN','$apodo','$contraseña')");
		$insertar_=mysql_query("INSERT INTO CARRERA VALUES ('','$carrera')");
		$insertar_=mysql_query("INSERT INTO TIPOUSUARIO VALUES ('','$tipo')");		
		print("<script>window.location.replace('index.html');</script>");
		?>
		<p><em>Empleado Registrado con exito</em></p>
	</div>
</body>
</html>