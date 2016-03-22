<?php
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "vivecuet";

/*$host = "localhost";
$user = "vivecuet_cuet";
$pass = "V1v3cu3tz4l4n2014";
$dbname = "vivecuet_vive";*/

$conexion = mysql_connect($host,$user,$pass);
mysql_select_db($dbname,$conexion);
if(!$conexion) { echo "Ocurrio un error al conectarse con la base de datos"; } ?>
	