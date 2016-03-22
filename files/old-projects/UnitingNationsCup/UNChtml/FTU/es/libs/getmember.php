<?php
	include '../../libs/conexion.php';
	$resultado = mysql_query ('SELECT * FROM members WHERE ID="' . $_GET['memberID'] . '"');
	if (!$resultado) { die('Consulta no válida ' . mysql_error());}
	else {
		$info = mysql_fetch_assoc($resultado);
		$member = '<div class="profile_photo"><img src="../imgs/players/' . $info['PHOTO_URL'] . '" alt="cara"></div>';
		$member .= '<div class="profile_info">';
		$member .= '<table><tr><td class="p_name"><span>' . $info['NAME'] . '</span><br></td></tr>';
		$member .= '<tr><td><span>Edad: </span>' . $info['AGE'] . ' años</td></tr>';
		$member .= '<tr><td><span>Club: </span>' . $info['CLUBNAME'] . '</td></tr>';
		$member .= '<tr><td><span>Años jugando golf: </span>' . $info['TIME_PLAY'] . '</td></tr>';
		$member .= '<tr><td><span>Logros:</span><p>' . $info['ACHIV'] . '</p></td></tr>';
		$member .= '<tr><td><span>Handicap: </span>' . $info['HANDICAP'] . '</td></tr>';
		$member .= '<tr><td><span>Número de afiliación de FMG: </span>' . $info['REG_ASSOCIATION'] . '</td></tr></table></div>';
		echo $member;
	}
?>