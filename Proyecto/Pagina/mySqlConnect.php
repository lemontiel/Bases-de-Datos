<?php
	define ("SERVIDOR", "localhost");
	define("USUARIO", "root");
	define("CLAVE", "");
	define("BASE", "libreria");
	
	
	$con = @mysql_connect(SERVIDOR, USUARIO, CLAVE) or die("Coneccion fallida: ". @mysql_error());
	mysql_query("SET NAMES 'utf8'") or die(mysql_error());
	mysql_select_db(BASE) or die(mysql_error());
		echo"Coneccion exitosa";
?>