<?php if (isset($_POST['submit'])) {
	//<div class="sendingMail"><p><strong>Enviando...</strong><br>Por favor espere un momento.</p><img src="imgs/loader2.gif" alt="enviando email"></div>
	
	if (isset($_POST['hotel'])) {
		$get_ID = explode(' || ', $_POST['hotel']);
		$id_Hotel = $get_ID[1];
	} else {
		$id_Hotel = $idHotel;
	}
	$sqlhoteles = mysql_query("SELECT * FROM hotel WHERE id=$id_Hotel")or die(mysql_error());
	while ($reshotel = mysql_fetch_array($sqlhoteles)) {
		$nombreHotel = $reshotel[1];
		$email = $reshotel[3];
	}
	$dias = array("Domingo","Lunes","Martes","Miercoles","Jueves","Viernes","S&aacute;bado");
	$meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
	$get_Entrada = strtotime($_POST['dayIn']);
	$get_Salida = strtotime($_POST['dayOut']);
	$diaEntrada = $dias[date('w', $get_Entrada)]." ".date('d', $get_Entrada)." de ".$meses[date('n', $get_Entrada)-1]. " del ".date('Y', $get_Entrada);
	$diaSalida = $dias[date('w', $get_Salida)]." ".date('d', $get_Salida)." de ".$meses[date('n', $get_Salida)-1]. " del ".date('Y', $get_Salida);

	$emailadd = $_POST['mail'];
	$subject = "Reservaci&oacute;n desde Vive Cuetzalan";
	
	$begin ='<table width="100%" border="0" cellspacing="0" cellpadding="0" style="background-color:#a3a3a3; font-family:Verdana, Geneva, sans-serif; font-size:13px;"><tr><td height="10"></td></tr><tr><td style="0 10px;">';
	$begin.='<table width="600" border="0" cellspacing="0" cellpadding="0" align="center" style="background-color:#fff;">';
	$begin.='<tr><td width="190" height="85"><a href="http://vivecuetzalanhoy.com/2013/Inicio"><img src="http://vivecuetzalanhoy.com/2013/imgs/design/logoMail3.png" alt="Vive Cuetzalan"></a></td></tr>';
	$begin.='<tr><td bgcolor="#232323"></td></tr><tr><td height="10" bgcolor="#232323"></td></tr><tr><td height="10"></td></tr>';

	$body ='<tr><td height="10"></td></tr><tr><td><table width="500" border="1" bordercolor="#ffffff" align="center" caellspacing="0" style="border-collapse:collapse; color:#fff;"><tr>';
	$body.='<td width="35%" align="right" valign="middle" style="background-color:#009ad4; padding:10px;"><b>Hotel:</b></td>';
	$body.='<td width="65%" style="background-color:#009ad4; padding:10px;">'.htmlentities($nombreHotel).'</td></tr><tr><td height="2" colspan="2"></td></tr><tr>';
	$body.='<td width="35%" align="right" valign="middle" style="background-color:#009ad4; padding:10px;"><b>D&iacute;a de entrada:</b></td>';
	$body.='<td width="65%" style="background-color:#009ad4; padding:10px;">'.htmlentities($diaEntrada).'</td></tr><tr>';
	$body.='<td width="35%" align="right" valign="middle" style="background-color:#009ad4; padding:10px;"><b>D&iacute;a de salida:</b></td>';
	$body.='<td width="65%" style="background-color:#009ad4; padding:10px;">'.htmlentities($diaSalida).'</td></tr><tr><td height="2" colspan="2"></td></tr><tr>';
	$body.='<td width="35%" align="right" valign="middle" style="background-color:#009ad4; padding:10px;"><b>No. de habitaciones:</b></td>';
	$body.='<td width="65%" style="background-color:#009ad4; padding:10px;">'.htmlentities($_POST['habitaciones']).'</td></tr><tr>';
	$body.='<td width="35%" align="right" valign="middle" style="background-color:#009ad4; padding:10px;"><b>Adultos:</b></td>';
	$body.='<td width="65%" style="background-color:#009ad4; padding:10px;">'.htmlentities($_POST['adultos']).'</td></tr><tr>';
	$body.='<td width="35%" align="right" valign="middle" style="background-color:#009ad4; padding:10px;"><b>Ni&ntilde;os:</b></td>';
	$body.='<td width="65%" style="background-color:#009ad4; padding:10px;">'.htmlentities($_POST['peques']).'</td></tr><tr><td height="2" colspan="2"></td></tr><tr>';
	$body.='<td width="35%" align="right" valign="middle" style="background-color:#009ad4; padding:10px;"><b>Nombre:</b></td>';
	$body.='<td width="65%" style="background-color:#009ad4; padding:10px;">'.htmlentities($_POST['nombre']).'</td></tr><tr>';
	$body.='<td width="35%" align="right" valign="middle" style="background-color:#009ad4; padding:10px;"><b>Correo:</b></td>';
	$body.='<td width="65%" style="background-color:#009ad4; padding:10px;">'.htmlentities($_POST['mail']).'</td></tr><tr>';
	$body.='<td width="35%" align="right" valign="middle" style="background-color:#009ad4; padding:10px;"><b>Direcci&oacute;n:</b></td>';
	$body.='<td width="65%" style="background-color:#009ad4; padding:10px;">'.htmlentities($_POST['direccion']).'</td></tr><tr>';
	$body.='<td width="35%" align="right" valign="middle" style="background-color:#009ad4; padding:10px;"><b>T&eacute;lefono:</b></td>';
	$body.='<td width="65%" style="background-color:#009ad4; padding:10px;">('.htmlentities($_POST['telLada']).') '.htmlentities($_POST['telNumero']).'</td></tr><tr>';
	$body.='<td width="35%" align="right" valign="middle" style="background-color:#009ad4; padding:10px;"><b>Comentarios:</b></td>';
	$body.='<td width="65%" style="background-color:#009ad4; padding:10px;">'.htmlentities($_POST['comentarios']).'</td>';
	$final='</tr></table></td></tr><tr><td height="34"></td></tr></table></td></tr><tr><td height="10"></td></tr></table>';
	$toHotel = $begin;
	$toHotel.='<tr><td style="padding:10px;"><h2 style="margin:0; font-size:16px;">Informaci&oacute;n de reservaci&oacute;n:</h2></td></tr>';
	$toHotel.=$body;
	$toHotel.=$final;
	$toUser = $begin;
	$toUser.='<tr><td style="padding:10px;"><h2 style="margin:0; font-size:16px;">Informaci&oacute;n de reservaci&oacute;n:</h2><p>Buen d&iacute;a:</p><p>Usted ha hecho la siguiente reservaci&oacute;n con las siguientes especificaciones:</p></td></tr>';
	$toUser.=$body;
	$toUser.=$final;
	$header = "From: " . strip_tags($emailadd) . "\r\n";
	$header.= "MIME-Version: 1.0\r\n";
	$header.= "Content-type: text/html; charset: utf-8\r\n";
	$header2 = "From: noreply@vivecuetzalanhoy.com\r\n";
	$header2.= "MIME-Version: 1.0\r\n";
	$header2.= "Content-type: text/html; charset: utf-8\r\n";
	if (mail($email, $subject, $toHotel, $header) && mail($emailadd, $subject, $toUser, $header2)){ ?>
		<script type="text/javascript">
			var loc = document.location.pathname;
			$(".sendingMail").hide();
			function redireccionar() { document.location.href=loc };
			setTimeout("redireccionar()", 1000);
		</script>
		<div class="successMail"><p><strong>Éxito</strong><br>Información enviada correctamente.</p><span>%</span></div>
	<?php } else { ?>
		<script type="text/javascript">
			var loc = document.location.pathname;
			$(".sendingMail").hide();
			function redireccionar() { document.location.href=loc };
			setTimeout("redireccionar()", 1000);
		</script>
		<div class="errorMail"><p><strong>Error</strong><br>Por favor intente de nuevo.</p><span>X</span></div>
		<?php return false;
	}
}
?>