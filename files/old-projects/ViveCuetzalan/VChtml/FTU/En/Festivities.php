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
			<?php $urlEsp = "../Las_fiestas"; $actMenu = 'Las_fiestas'; include("libs/header.php");
			include("libs/reservation.php"); ?>

			<a href="#" id="openTxtLash" class="symb-icon icoRight"></a>
			<div class="cont onlyText clearfix">
				<a href="#" id="closeTxtLash" class="symb-icon icoClose"></a>
				<h2 class="sectionTitle">Party and Mysticism. </h2>
				<div class="scrollCont">
					<p>Cuetzlan has a wide diversity of traditional fairs and festivals full of colorful joy and mysticism.</p>
					<p>La Feria del Huipil, takes place on 4 October and is the most important fair of Cuetzalan, the culminating event of the fair is the choice of the queen whose participants must be between 14 and 20 years old, speak Nahuatl and Spanish also have made their "huipil" (swater) by themselves, and have the purity and beauty of native roots.</p>
					<p>the culminating event of the fair is the choice of the queen whose participants must be between 14 and 20 years old, speak Nahuatl and Spanish also have made their "huipil" (swater) by themselves, and have the purity and beauty of native roots.</p>
					<p>La Feria del Cafe is a fair full of colorful tradition its important because coffee is one of the basic products to the economy of the region is also celebrated on October 4.</p>
					<p>El Encuentro de Huapango organized by the National Native Radio broadcaster institute, the most famous huapangueros of the region share this day to play select musical of their communities.</p>
					<p>Las Fiestas de Todos Los Santos y de los Fieles  Difuntos from 1st to 2nd of November its manifestation symbolizes a mixture between prehispanics and Catholics, with dances and rites is one of the most important celebrations of Cuetzalan</p>
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
				for (var i=1; i<=2; i++) {
					iniBackgrounds.push({ src: '../imgs/lasfiestas/img'+i+'.jpg', fade: 1000 });
				};
				$.vegas('slideshow', { backgrounds:iniBackgrounds })('overlay', { src:'../css/overlays/06.png' });
				$('#test').weatherfeed(['MXPA1692']);
			})(jQuery);
		</script>
	</body>
</html>