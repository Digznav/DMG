<!DOCTYPE html>
<!--[if lt IE 7]>			 <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>				 <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>				 <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<title>Vive Cuetzalan::.</title>
		<meta name="description" content="Vive Cuetzalan">
		<meta name="viewport" content="width=device-width, maximum-scale=1.0">
		<link rel="shortcut icon" type="image/x-icon" href="../imgs/design/favicon.ico">
		<link rel="stylesheet" href="../css/style.css">
		<link rel="stylesheet" href="../css/vegas.css">
		<script src="../js/modernizr-2.6.2.min.js"></script>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
		<script>window.jQuery || document.write('<script src="../js/jquery-1.10.1.min.js"><\\/script>')</script>
		<script type="text/javascript" src="../js/jquery.vegas.min.js"></script> 
		<!--[if lt IE 9]>
			<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
	</head>
	<body>
		<div id="container">
			<?php $urlEsp = "../Danzas_ritos"; $actMenu = 'Danzas_ritos'; include("libs/header.php");
			include("libs/reservation.php"); ?>

			<a href="#" id="openTxtLash" class="symb-icon icoRight"></a>
			<div class="cont onlyText clearfix">
				<a href="#" id="closeTxtLash" class="symb-icon icoClose"></a>
				<h2 class="sectionTitle">Past and Present dancing together. </h2>
				<div class="scrollCont">
					<p>The colonial streets of Cuetzalan, are full of attractions for visitors.</p>
					<p>Dance and music are part of most cultural interpretations, locals have been keeping their ancestral roots but added to their dances modern improvements. Cuetzalan's community express themselves through masks and colorful costumes, also showing representations of the historical past, religion and astronomy.</p>
					<p>Quetzals or Cuetzalines dance from east to west, forming the Catholic cross, Los Santiagos represent the war between Muslims and Christians, remembering Santiago apostle on his white horse, La Danza de los Negritos (dance) keeps the magical thinking that came with the Africans led by the man dressed as a woman with his "snake" stick indicates the presence of mother earth.</p>
					<p>La Danza de los voladores (this dance was born in Totonacapan), dedicated to the sun, it begins with the priest facing the sun and pointing the four cardinal points then "los voladores" protected by gods and ropes start climbing the post, once they are on the top they jump to star the dance.</p>
					<p>In Cuetzalan exist several places including the atrium of the church of san francisco where you can enjoy and admire this ancient tradition.</p>
				</div>
			</div>

		</div>

		<script src="../js/jquery-ui-1.10.3.custom.min.js"></script>
		<script src="../js/jquery.zweatherfeed.min.js"></script>
		<script src="../js/jquery.placeholder.min.js"></script>
		<script src="../js/jquery.validate.min.js"></script>
		<script src="../js/validation.min.js"></script>
		<script src="../js/query.min.js"></script>
		<script type="text/javascript">
			var iniBackgrounds = [];
			(function($) {
				for (var i=1; i<=15; i++) {
					iniBackgrounds.push({ src: '../imgs/danzasyritos/img'+i+'.jpg', fade: 1000 });
				};
				$.vegas('slideshow', { backgrounds:iniBackgrounds })('overlay', { src:'../css/overlays/06.png' });
				$('#test').weatherfeed(['MXPA1692']);
			})(jQuery);
		</script>
	</body>
</html>