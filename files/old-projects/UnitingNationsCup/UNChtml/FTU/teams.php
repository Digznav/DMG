<?php include 'libs/conexion.php'; ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>.::Uniting Nations Cup 2013::.</title>
		<link rel="shortcut icon" type="image/x-icon" href="imgs/logos/favicon.ico">
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<script src="http://code.jquery.com/jquery-1.8.3.min.js"></script> 
		<script src="js/jquery.pikachoose.min.js"></script>
		<script src="js/jquery-ui-1.10.0.min.js"></script>
		<script src="js/query.min.js"></script>
		<!--[if lt IE 9]>
			<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		<script type="text/javascript">
			$(document).ready(function() {
				$("#accordion").accordion({ heightStyle: "content" });
			});
		</script>
	</head>
	<body>
		<div class="shadow"></div>
		<div class="bg-aside"></div>
		<div class="content">
			<?php require("libs/headerUNC.php"); ?>
			<aside>
				<div class="lang"><a href="es/teams.php">Español</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="#">English</a></div>
				<?php require("libs/sponsors.php"); ?>
			</aside>
			<?php
			require("libs/mainNavigation.php");
			$firstCarrItem = 3;
			require("libs/carrousel.php");
			?>
			<div class="cont">
				<span class="title_section">Teams</span>
				<section class="cont_sections"><img src="imgs/teams.jpg" alt="side"></section>
				<section class="cont_sections">
					<div id="accordion">
						<h3 class="title_list_mex">México / Profiles</h3>
						<div class="team_list">
							<?php
								$resultado = mysql_query ('SELECT * FROM members WHERE CATEGORY="MEX"');
								if (!$resultado) { die('Consulta no válida' . mysql_error()); }
								else {
									while ($lista = mysql_fetch_assoc($resultado)) {
										$name_pieces = explode(" ", $lista['NAME']);
										echo '<a href="#popup-box" data-popup="' . $lista['ID'] . '" class="ajax_pop">'.$name_pieces[0] .' '.end($name_pieces).'</a>';
									}
								}
							?>
						</div>
						<h3 class="title_list_usa">U.S.A / Profiles</h3>
						<div class="team_list">
							<?php
								$resultado = mysql_query ('SELECT * FROM members WHERE CATEGORY="USA"');
								if (!$resultado) { die('Consulta no válida' . mysql_error()); }
								else {
									while ($lista = mysql_fetch_assoc($resultado)) {
										$name_pieces = explode(" ", $lista['NAME']);
										echo '<a href="#popup-box" data-popup="' . $lista['ID'] . '" class="ajax_pop">'.$name_pieces[0] .' '.end($name_pieces).'</a>';
									}
								}
							?>
						</div>
					</div>
				</section>
			</div>
			<?php require("libs/footerUNC.php"); ?>
		</div>
		<div id="popup-box" class="popup">
			<a href="#" class="close"><img src="imgs/close_pop.png" class="btn_close" title="Close Window" alt="Close"></a>
			<div class="progress"></div>
			<div class="resultado"></div>
		</div>
	</body>
</html>