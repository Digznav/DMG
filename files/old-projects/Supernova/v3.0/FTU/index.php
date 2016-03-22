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
		<script src="js/modernizr-2.6.2.min.js"></script>
		<!--[if lt IE 9]>
			<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
	</head>
	<body>
		<div id="embedVideo"></div>
		<a href="Inicio" class="jumpVideo">Ir al sitio <span class="symb-icon icoRightoutline"></span></a>
		<?php include('libs/jquery-1.11.0.php'); ?>
		<script src="js/query.min.js"></script>
		<script type="text/javascript">
			var tag = document.createElement('script');
			tag.src = "http://www.youtube.com/iframe_api";
			var firstScriptTag = document.getElementsByTagName('script')[0];
			firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);
			var player;
			function onYouTubePlayerAPIReady() {
				player = new YT.Player('embedVideo', {
					videoId:'-ktZzP5yJ1I',
					playerVars:{'autoplay':1,'controls':0,'modestbranding':1,'rel':0,'showinfo':0},
					events:{'onStateChange':onPlayerStateChange,}
				});
			}
			// on player state = 0 then redirect to YT channel page.
			function GoHome() { window.location = 'Inicio'; }
			function onPlayerStateChange(event) {
				if(!event.data) { GoHome(); }
			}
		</script>
	</body>
</html>