<?php
//nombre telefono email evento personas comentarios
if ($_POST['iFecha']) {	
	// email de destino
	$email = "digznav@hotmail.com";
	
	// asunto del email
	$subject = "Hacienda - Informe";
	
	// Cuerpo del mensaje
	$mensaje = "---------------------------------- \n";
	$mensaje.= "            Paquetes               \n";
	$mensaje.= "---------------------------------- \n";
	$mensaje.= "PAQUETES:     ".$_POST['iPaquetes']."\n";
	$mensaje.= "RECORRIDOS:   ".$_POST['iRecorridos']."\n";
	$mensaje.= "HOSPEDAJE:    ".$_POST['iHospedaje']."\n";
	$mensaje.= "FECHA:        ".$_POST['iFecha']."\n";
	$mensaje.= "---------------------------------- \n";
	
	// headers del email
	$headers = "From: INFO - PAGINA";
	//$headers = "From: ".$_POST['nombre']."\r\n";
	
	// Enviamos el mensaje
	if (mail($email, $subject, $mensaje, $headers))
	{
		echo "Datos enviados. Redireccionando, espere por favor...";
		echo "<script>function redireccionar(){document.location.href='index.php'} setTimeout ('redireccionar()', 3000);</script>\n";
	}
}
?>