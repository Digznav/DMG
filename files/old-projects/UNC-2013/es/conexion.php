<?php
	$host = 'localhost';
	$user = 'unitingn_admin';
	$pass = 'zaq1xsw2cde33';
	$dbname = 'unitingn_players';
	$conexion = mysql_connect ($host, $user, $pass) or die ('Imposible de conectar');
	if (!mysql_select_db($dbname, $conexion)) { echo 'No se pudo conectar a la base de datos'; }
?>