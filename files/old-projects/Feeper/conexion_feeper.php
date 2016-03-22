<?php
	$host = '10.33.143.24';
	$user = 'feeper_admin';
	$pass = '00tienda00';
	$dbname = 'feeper_tienda';
	$conexion = mysqli_connect($host, $user, $pass,$dbname) or die('Imposible de conectar');
	if (mysqli_connect_errno()) {
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
?>