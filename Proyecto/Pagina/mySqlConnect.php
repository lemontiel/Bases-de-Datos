<?php
	define ("SERVIDOR", "localhost");
	define("USUARIO", "mp12lma");
	define("CLAVE", "182605");
	define("BASE", "mp12lma");
	
	
	$con = @mysql_connect(SERVIDOR, USUARIO, CLAVE) or die("Coneccion fallida: ". @mysql_error());
	mysql_query("SET NAMES 'utf8'") or die(mysql_error());
	mysql_select_db(BASE) or die(mysql_error());
		echo"Coneccion exitosa";
?>