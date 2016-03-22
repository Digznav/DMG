<?php
	$host = 'localhost';
	$user = 'unitingn_admin';
	$pass = 'UnitingXsw2Cde#';
	$dbname = 'unitingn_players';
	$connection = mysql_connect ($host, $user, $pass) or die ('Imposible de conectar');
	if (!mysql_select_db($dbname, $connection)) { echo 'No se pudo conectar a la base de datos'; }
	/*$connection = mysqli_connect($host,$user,$pass,$dbname);
	if (mysqli_connect_errno()) {
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
		exit();
	}*/
?>