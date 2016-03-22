<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>.::Uniting Nations Cup 2013::.</title>
		<link rel="stylesheet" type="text/css" href="../css/style.css">
		<link rel="shortcut icon" type="image/x-icon" href="../imgs/logos/favicon.ico">
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
				<div class="lang"><a href="#">Español</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="../gallery.php">English</a></div>
				<?php require("libs/patrocinadores.php"); ?>
			</aside>
			<?php
			require("libs/navegacionPrincipal.php");
			$firstCarrItem = 4;
			require("libs/carrucel.php");
			?>
			<div class="cont">
				<span class="title_section">Galería</span>
				<div class="gallery" id="gallery"></div>
			</div>
			<?php require("libs/pieUNC.php"); ?>
		</div>
		<div id="popup-box" class="popup">
			<a href="#" class="close"><img src="../imgs/close_pop.png" class="btn_close" title="Close Window" alt="Close"></a>
			<img src="../imgs/usaflag.jpg" alt="" id="actual" width="900" height="600">
		</div>
		<script src="js/es.gallery.min.js"></script>
	</body>
</html>