<?php
	include 'conexion.php';
	$resultado = mysql_query ('SELECT * FROM members WHERE ID="' . $_GET['memberID'] . '"');
	if (!$resultado) { die('Consulta no válida ' . mysql_error());}
	else {
		$info = mysql_fetch_assoc($resultado);
		$member = '<div class="profile_photo"><img src="imgs/players/' . $info['PHOTO_URL'] . '" alt="cara"></div>';
		$member .= '<div class="profile_info">';
		$member .= '<table><tr><td class="p_name"><span>' . $info['NAME'] . '</span><br></td></tr>';
		$member .= '<tr><td><span>Age: </span>' . $info['AGE'] . ' years old</td></tr>';
		$member .= '<tr><td><span>Club name: </span>' . $info['CLUBNAME'] . '</td></tr>';
		$member .= '<tr><td><span>Years playing golf: </span>' . $info['TIME_PLAY'] . '</td></tr>';
		$member .= '<tr><td><span>Achievements:</span><p>' . $info['ACHIV'] . '</p></td></tr>';
		$member .= '<tr><td><span>Handicap: </span>' . $info['HANDICAP'] . '</td></tr>';
		$member .= '<tr><td><span>FMG membership number: </span>' . $info['NUMBER'] . '</td></tr></table></div>';
		echo $member;
	}
?>