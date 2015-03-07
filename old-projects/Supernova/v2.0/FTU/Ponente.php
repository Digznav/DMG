<!DOCTYPE html>
<!--[if lt IE 7]>			 <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>				 <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>				 <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<title>Supernova</title>
		<meta name="description" content="Supernova">
		<meta name="viewport" content="width=device-width">
		<link rel="shortcut icon" type="image/x-icon" href="imgs/design/favicon.ico">
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="css/vegas.css">
		<link rel="stylesheet" href="css/countdown.css">
		<script src="js/modernizr-2.6.2.min.js"></script>
		<!--[if lt IE 9]>
			<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
	</head>
	<body>
		<!-- Contenedor principal-->
		<div id="container">
			<?php include('libs/header.php'); ?>
			<!-- <div class="navCont"></div> -->

			<div class="content">
				<div class="panel panelFormat">
				</div>
			</div>

			<?php include('libs/socialNav.php'); ?>
			
		</div>
		
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
		<script>window.jQuery || document.write('<script src="js/jquery-1.10.1.min.js"><\/script>')</script>
		<script src="js/jquery.vegas.min.js"></script>
		<script src="js/query.min.js"></script>
		<script type="text/javascript">
			jQuery(function($) {
				$.vegas('slideshow', {
					backgrounds:[
						{ src:'imgs/design/bg1.jpg', fade:1000 },
						{ src:'imgs/design/bg2.jpg', fade:1000 },
						{ src:'imgs/design/bg3.jpg', fade:1000 },
						{ src:'imgs/design/bg4.jpg', fade:1000 },
						{ src:'imgs/design/bg5.jpg', fade:1000 }
					]
				})('overlay', { src:'css/overlays/06.png' });

				/*$.vegas({
					src:'imgs/design/bg3.jpg', fade:5000
				})('overlay', { src:'css/overlays/06.png' });*/
			});
		</script>
	</body>
</html>