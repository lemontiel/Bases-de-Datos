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

		$insertar=mysql_query("INSERT INTO USUARIO VALUES ('NULL','$nombre','$apellidoP,'$apellidoM','$fechaN','$apodo','$contraseña')");
		$insertar_=mysql_query("INSERT INTO CARRERA VALUES ('NULL','$carrera')");
		$insertar_1=mysql_query("INSERT INTO TIPOUSUARIO VALUES ('NULL','$tipo')");		
		
		mysql_close();
		?>
		<p><em>Usuario con exito</em></p>
		<script> 
			setTimeout(function(){
				window.location.href= 'index.html';
			}, 0500);
		</script>
		
	</div>
</body>
</html>