<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<title>Vive Cuetzalan::.</title>
		<meta name="description" content="Vive Cuetzalan">
		<meta name="viewport" content="width=device-width, maximum-scale=1.0">
		<link rel="shortcut icon" type="image/x-icon" href="../imgs/design/favicon.ico">
		<link rel="stylesheet" href="../css/style.css">
		<link rel="stylesheet" href="../css/style.mobile.css">
		<link rel="stylesheet" href="../css/orientation.fix.css">
		<link rel="stylesheet" href="../css/carousel.css">
		<script src="../js/modernizr-2.6.2.min.js"></script>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
		<script>window.jQuery || document.write('<script src="js/jquery-1.10.1.min.js"><\\/script>')</script>
		<!--[if lt IE 9]>
			<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
	</head>
	<body>
		<div id="container">
			<?php 
			$idActiv = $_GET['id'];
			$urlEng = "../en/mobile/Activities?id=".$idActiv; 
			$actMenu = 'Que_hacer'; include("libs/header.php");
			$sqlActivid = mysql_query("SELECT * FROM actividades WHERE id=$idActiv")or die(mysql_error());
			while ($resActiv = mysql_fetch_array($sqlActivid)) { $resultActiv = $resActiv; }
			?>
			<div class="cont onlyText clearfix">
				<h2 class="sectionTitle showText" data-actividad="<?php echo $resultActiv[0]; ?>"><?php echo $resultActiv[1]; ?></h2>
				<aside class="extraInfo clearfix">
					<div class="instLogo"><?php echo '<img src="../'.$resultActiv[4].'">'; ?></div>
					<table class="availableTable">
					<?php
					$sqlActividServ = mysql_query("SELECT * FROM servicios_activ WHERE id_activ=$idActiv")or die(mysql_error());
					while ($resserv = mysql_fetch_array($sqlActividServ)) {
					echo '<tr><td class="col1">'.$resserv[2];
					if (isset($resserv[5]) && $resserv[5]!= '') { echo '<small class="comentario">'.$resserv[5].'</small>'; };
					echo '</td><td class="col2">';
					if (isset($resserv[3]) && $resserv[3]!= 0 && $resserv[3]!= '' && !isset($resserv[4]) && $resserv[4] == '') { echo '$'.$resserv[3]; }
					else {
					switch ($resserv[4]) {
					case 0: echo 'No'; break;
					case 1: echo 'Sí'; break;
					}
					};
					echo '</td></tr>';
					}; ?>
				</table>
				</aside>
				<div class="m-carousel m-fluid m-carousel-photos">
					<!-- the slider -->
					<div class="m-carousel-inner">
						<?php $sqlActividImgs = mysql_query("SELECT * FROM fotos_activ WHERE id_activ=$idActiv")or die(mysql_error());
						$f = 1;
						while ($resimagenes = mysql_fetch_array($sqlActividImgs)) {
							if ($f == 1) {
								echo '<div class="m-item m-active"><img src="../'.$resimagenes[2].'"></div>';
							} else {
								echo '<div class="m-item"><img src="../'.$resimagenes[2].'"></div>';
							};
							$f++;
						}; ?>
					</div>
					<!-- the controls -->
					<div class="m-carousel-controls m-carousel-bulleted">
						<a href="#" data-slide="1" class="m-active">1</a><?php for ($j=2; $j <$f ; $j++) { echo '<a href="#" data-slide="'.$j.'">'.$j.'</a>';} ?>
					</div>
				</div>
				
				<div><?php echo $resultActiv[2]; ?></div>
			</div>
			<?php include("libs/reservation.php"); ?>
		</div>
		<script src="../js/jquery-ui-1.10.3.custom.min.js"></script>
		<script src="../js/jquery.zweatherfeed.min.js"></script>
		<script src="../js/jquery.ui.datepicker-es.min.js"></script>
		<script src="../js/jquery.placeholder.min.js"></script>
		<script src="../js/jquery.validate.min.js"></script>
		<script src="../js/query.mobile.min.js"></script>
		<script src="../js/carousel.min.js"></script>
		<!-- construct the carousel -->
		<script>$('#test').weatherfeed(['MXPA1692']); $('.m-carousel').carousel()</script>
	</body>
</html>