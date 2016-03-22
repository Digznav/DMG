<?php
	$host = 'localhost';
	$user = 'root';
	$pass = '';
	$dbname = 'feeper2013';
	$conexion = mysqli_connect($host, $user, $pass, $dbname) or die('Imposible de conectar');
	if (mysqli_connect_errno()) {
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
?>