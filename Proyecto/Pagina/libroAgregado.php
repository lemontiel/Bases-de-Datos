<?php

	require_once ("mySqlConnect.php");
	$titulo=$_POST[titulo];
	$autor=$_POST[autor];
	$tema=$_POST[tema];
	$editorial=$_POST[editorial];
	$feRegistro=$_POST[feRegistro]
	
	$insertar = mysql_query("INSERT INTO libro VALUES('NULL', '$titulo', '$feRegistro','','','','N/A')");
	$insertar_ = mysql_query("INSERT INTO tema VALUES('NULL', '$tema')");
	$insertar_1 = mysql('editorial', "INSERT INTO editorial VALUES('NULL','$editorial')");
	
	

?>
<script> 
	setTimeout(function(){
		window.location.href= 'index.html';
	}, 0500);
</script>