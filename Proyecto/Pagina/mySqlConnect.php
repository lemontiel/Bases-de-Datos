<?php
	define ("SERVIDOR", "localhost");
	define("USUARIO", "root");
	define("CLAVE", "");
	define("BASE", "libreria");
	
	
	$con = @mysqli_connect (SERVIDOR, USUARIO, CLAVE, BASE);
	
	
	
	if(!$con){
		die("Coneccion fallida: ". @mysqli_connect_error());
	}
		echo"Coneccion exitosa";
?>