<?php include '../libs/conexion.php'; ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>.::Uniting Nations Cup 2013::.</title>
		<link rel="shortcut icon" type="image/x-icon" href="../imgs/logos/favicon.ico">
		<link rel="stylesheet" type="text/css" href="../css/style.css">
		<script src="http://code.jquery.com/jquery-1.8.3.min.js"></script> 
		<script src="../js/jquery.pikachoose.min.js"></script>
		<script src="../js/query.min.js"></script>
		<!--[if lt IE 9]>
			<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
	</head>
	<body>
		<div class="shadow"></div>
		<div class="bg-aside"></div>
		<div class="content">
			<?php require("libs/encabezadoUNC.php"); ?>
			<aside>
				<div class="lang"><a href="#">Español</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="../index.php">English</a></div>
				<?php require("libs/patrocinadores.php"); ?>
			</aside>
			<?php
			require("libs/navegacionPrincipal.php");
			$firstCarrItem = 1;
			require("libs/carrucel.php");
			?>
			<div class="cont">
				<div class="index_teams">
					<span class="title_section">Equipos - Jugadores UNC 2013</span>
					<table class="teams_tab mex">
						<thead>
							<tr><th colspan="2"></th></tr>
						</thead>
						<tbody>
							<tr>
								<?php
									$columnas = 1;
									$resultado = mysql_query ('SELECT * FROM members WHERE CATEGORY="MEX" LIMIT 0,4');
									if (!$resultado) { die('Consulta no válida' . mysql_error()); }
									else {
										while ($lista = mysql_fetch_assoc($resultado)) {
											$name_pieces = explode(" ", $lista['NAME']);
											echo '<td><a href="#popup-box" data-popup="' . $lista['ID'] . '" class="ajax_pop">';
											echo '<img src="../imgs/players/' . $lista['CROP_URL'] . '" alt="crop' . $lista['ID'] . '">';
											echo '<span class="">'. $name_pieces[0] . ' ' . end($name_pieces) .'</span>';
											echo '</a></td>';
											if ($columnas == 2) {
												echo '</tr><tr>';
											}
											$columnas++;
										}
									}
								?>
							</tr>
						</tbody>
					</table>
					<table class="teams_tab usa">
						<thead>
							<tr><th colspan="2"></th></tr>
						</thead>
						<tbody>
							<tr>
								<?php
									$columnas = 1;
									$resultado = mysql_query ('SELECT * FROM members WHERE CATEGORY="USA" LIMIT 0,4');
									if (!$resultado) { die('Consulta no válida' . mysql_error()); }
									else {
										while ($lista = mysql_fetch_assoc($resultado)) {
											$name_pieces = explode(" ", $lista['NAME']);
											echo '<td><a href="#popup-box" data-popup="' . $lista['ID'] . '" class="ajax_pop">';
											echo '<img src="../imgs/players/' . $lista['CROP_URL'] . '" alt="crop' . $lista['ID'] . '">';
											echo '<span class="">'. $name_pieces[0] . ' ' . end($name_pieces) .'</span>';
											echo '</a></td>';
											if ($columnas == 2) {
												echo '</tr><tr>';
											}
											$columnas++;
										}
									}
								?>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="index_headquarters">
					<span class="title_section">Sedes</span>
					<a href="http://www.mayanpalace.com/puerto-penasco" target="_blank" class="hover_image"><img src="../imgs/mayan.jpg" alt="mayan"><span>Sede de la Uniting Nations Cup</span></a>
					<a href="http://www.mayanpalace.com/puerto-penasco/golf" target="_blank" class="hover_image"><img src="../imgs/peninsula.jpg" alt="peninsula"><span>El campo</span></a>
				</div>
			</div>
			<?php require("libs/pieUNC.php"); ?>
		</div>
		<div id="popup-box" class="popup">
			<a href="#" class="close"><img src="../imgs/close_pop.png" class="btn_close" title="Close Window" alt="Close"></a>
			<div class="progress"></div>
			<div class="resultado"></div>
		</div>
	</body>
</html>