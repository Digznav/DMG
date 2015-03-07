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
		<link rel="stylesheet" href="css/anythingslider.css">
		<link rel="stylesheet" href="css/theme-metallic.css">
		<script src="js/modernizr-2.6.2.min.js"></script>
		<!--[if lt IE 9]>
			<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
	</head>
	<body>
		<!-- Contenedor principal-->
		<div id="container">
			<?php $avoidNav = ""; include('libs/header.php'); ?>
			<div class="content memoriesPanel">
				<div class="panelFormat">
					<h2>Memorias 2014</h2>
					<ul id="slider">
						<?php for ($i=1; $i <= 58; $i++) { ?>
						<li><img src="imgs/memorias/2014/img<?php echo $i; ?>.jpg"></li>
						<?php } ?>
					</ul>
				</div>
			</div>
		</div>
		<?php include('libs/jquery-1.11.0.php'); ?>
		<script src="js/jquery.anythingslider.min.js"></script>
		<script src="js/jquery.vegas.min.js"></script>
		<script src="js/query.min.js"></script>
		<script type="text/javascript">
			jQuery(function($) {
				//$("#pikame").PikaChoose({showCaption:false, carousel:true});
				$('#slider').anythingSlider({
					theme: 'metallic',
					mode: 'f',
					resizeContents: false,
					navigationSize: 8,
					onSlideBegin: function(e,slider) { slider.navWindow( slider.targetPage ); }
				});
				$.vegas({
					src:'imgs/design/bg3.jpg', fade:5000
				})('overlay', { src:'css/overlays/06.png' });
			});
		</script>
	</body>
</html>