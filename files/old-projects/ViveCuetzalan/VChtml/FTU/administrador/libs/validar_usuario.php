<?php
if (isset($_POST['submit'])) {
	function quitar($mensaje) {
		$nopermitidos = array("'",'\\','<','>',"\"");
		$mensaje = str_replace($nopermitidos, "", $mensaje);
		return $mensaje;
	}
	function redirect($url, $statusCode = 303) {
		header('Location: ' . $url, true, $statusCode);
		die();
	}
	$usuario = strtolower(htmlentities($_POST["user"], ENT_QUOTES));   
	$password = $_POST["password"];
	$user= "cuetzalan";
	$pass = "admin";
	
	if($user == $usuario && $pass == $password) {
		$_SESSION["k_username"] = $usuario;
		redirect("inicio.php");
	} else {
		echo 'Usuario o contraseña incorrectos.';
	}
}
?>