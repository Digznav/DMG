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
		<link rel="shortcut icon" type="image/x-icon" href="imgs/design/favicon.ico">
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="css/vegas.css">
		<script src="js/modernizr-2.6.2.min.js"></script>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
		<script>window.jQuery || document.write('<script src="js/jquery-1.10.1.min.js"><\\/script>')</script>
		<script type="text/javascript" src="js/jquery.vegas.min.js"></script> 
		<!--[if lt IE 9]>
			<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
	</head>
	<body>
		<div id="container">
			<?php $urlEng = "en/Adventure"; $actMenu = 'La_aventura'; include("libs/header.php");
			include("libs/reservation.php"); ?>

			<a href="#" id="openTxtLash" class="symb-icon icoRight"></a>
			<div class="cont onlyText clearfix">
				<a href="#" id="closeTxtLash" class="symb-icon icoClose"></a>
				<h2 class="sectionTitle">Aventura en el paraíso protegido</h2>
				<div class="scrollCont">
					<p>Etimológicamente según algunos, su nombre se debe a que es el "lugar donde abundan los quetzales". Para otros se denomina así debido al tributo de "manojo de plumas rojas con puntas azules preciosas sobre dos dientes" que brindaba el pueblo de Cuetzalan al imperio Tenochca. Actualmente Cuetzalan es el sitio más frecuentado para la aventura y el disfrute de la naturaleza.</p>
					<br>
					<p>Las <strong>GRUTAS de Cuetzalan</strong> están compuestas por uno de los más grandes sistemas de cavernas con ríos subterráneos de América Latina, algunas de las cuales se pueden visitar de manera segura y sin necesidad de equipo especial, como la Gruta Aventura, y otras requieren de la contratación de guías especializados.</p>
					<p>Entre las más visitadas se destacan La Gruta de Chivostoc o del Amocuali (del Diablo), la de Ampolihui (del Elefante), ubicada en la junta auxiliar de San Miguel Tzinacapan.</p>
					<br>
					<p>La Ciudad arqueológica de Yohualichan (Casa de Noche), ubicada a pocos minutos de Cuetzalan, cuyo nombre original se perdió con la invasión Mexica, fue edificada por los Totonacas hacia el 400 D.C. sobre una ladera que crece de sur a norte, y cuenta con un magnífico centro ceremonial, canchas de pelota y diversos edificios que dan al conjunto un impresionante aspecto ancestral.</p>
					<br>
					<p>Los <strong>ATRACTIVOS NATURALES</strong>, son otro de los encantos de Cuetzalan.</p>
					<br>
					<p>La región posee un microclima ecológico en estado natural plenamente conservado que favorece el desarrollo de toda la diversidad de su vegetación.</p>
					<p>La fauna del lugar es muy diversa, y se pueden encontrar aves como la primavera, clarín, jilguero, dominicos, esmeraldas azules, calandrias, huitlacoches dominicos y pájaros carpinteros.</p>
					<p>Son también muy recomendables sus cascadas y arroyos, las más visitadas son las de Cuchat, Las Brisas, el Salto, las Hamacas, la Atepatahua, el Tozan y el Apulco.</p>
				</div>
			</div>

		</div>

		<script src="js/jquery-ui-1.10.3.custom.min.js"></script>
		<script src="js/jquery.ui.datepicker-es.min.js"></script>
		<script src="js/jquery.placeholder.min.js"></script>
		<script src="js/jquery.validate.min.js"></script>
		<script src="js/validation.min.js"></script>
		<script src="js/jquery.zweatherfeed.min.js"></script>
		<script src="js/query.min.js"></script>
		<script type="text/javascript">
			var iniBackgrounds = [];
			(function($) {
				for (var i=1; i<=7; i++) {
					iniBackgrounds.push({ src: 'imgs/laaventura/img'+i+'.jpg', fade: 1000 });
				};
				$.vegas('slideshow', { backgrounds:iniBackgrounds })('overlay', { src:'css/overlays/06.png' });
				$('#test').weatherfeed(['MXPA1692']);
			})(jQuery);
		</script>
	</body>
</html>