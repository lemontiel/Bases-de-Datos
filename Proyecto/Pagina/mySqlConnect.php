<?php
	define ("SERVIDOR", "localhost");
	define("USUARIO", "mp12lma");
	define("CLAVE", "182605");
	define("BASE", "mp12lma");
	
	
	$con = @mysqli_connect (SERVIDOR, USUARIO, CLAVE, BASE);
	
	
	
	if(!$con){
		die("Coneccion fallida: ". @mysqli_connect_error());
	}
		echo"Coneccion exitosa";
?>