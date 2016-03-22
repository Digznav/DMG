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
		<link rel="stylesheet" href="../css/pikachoose.css">
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
			<?php
			$idComida = $_GET['id'];
			$urlEsp = "../Comida?id=".$idComida;
			$actMenu = 'Donde_comer'; include("libs/header.php");
			$no_trans = true;
			include("libs/reservation.php");
			$sqlcomida = mysql_query("SELECT * FROM restaurantes WHERE id=$idComida")or die(mysql_error());
			while ($rescomida = mysql_fetch_array($sqlcomida)) { $resultcomida = $rescomida; }
			?>
			<aside class="extraInfo">
				<div class="instLogo"><?php echo '<img src="../'.$resultcomida[4].'">'; ?></div>
				<table class="availableTable">
					<?php
					$sqlComidaServ = mysql_query("SELECT * FROM servicios_rest WHERE id_rest=$idComida")or die(mysql_error());
					while ($resserv = mysql_fetch_array($sqlComidaServ)) {
					echo '<tr><td class="col1">'.$resserv[2];
					if (isset($resserv[5]) && $resserv[5]!= '') { echo '<a href="#com'.$resserv[0].'" class="openInfo">?</a><div id="com'.$resserv[0].'" class="comentario">'.$resserv[5].'</div>'; };
					echo '</td><td class="col2">';
					if (isset($resserv[3]) && $resserv[3]!= 0 && $resserv[3]!= '') { echo '$'.$resserv[3]; }
					else {
					switch ($resserv[4]) {
					case 0: echo 'No'; break;
					case 1: echo 'Sí'; break;
					}
					};
					echo '</td></tr>';
					};
					?>
				</table>
			</aside>
			
			<div class="cont imageText clearfix">
				<div class="carouselCont">
					<div class="carouselLoader">
						<span class="symb-icon icoLoader" id="loaderPop"></span>
						<script type="text/javascript">
							var i = 0;
							function loading() { i++; i = i < 8 ? i : 0; $('#loaderPop').text(i); }
							setInterval(loading, 100);
						</script>
						<p>Cargando imágenes...</p>
					</div>
					<div class="pikachoose">
						<ul id="pikame">
							<?php $sqlComidaImgs = mysql_query("SELECT * FROM fotos_rest WHERE id_rest=$idComida")or die(mysql_error());
							while ($resimagenes = mysql_fetch_array($sqlComidaImgs)) {
								echo '<li><img src="../'.$resimagenes[2].'"></li>';
							}; ?>
						</ul>
					</div>
				</div>
				<div class="textCont">
					<h2 class="sectionTitle showText" data-comida="<?php echo $resultcomida[0]; ?>"><span class="symb-icon icoRight"></span><?php echo $resultcomida[1]; ?></h2>
					<div class="dropText"><?php echo $resultcomida[2]; ?></div>
				</div>
			</div>

		</div>

		<script src="../js/jquery-ui-1.10.3.custom.min.js"></script>
		<script src="../js/jquery.zweatherfeed.min.js"></script>
		<script src="../js/jquery.placeholder.min.js"></script>
		<script src="../js/jquery.jcarousel.min.js"></script>
		<script src="../js/jquery.pikachoose.min.js"></script>
		<script src="../js/jquery.validate.min.js"></script>
		<script src="../js/validation.min.js"></script>
		<script src="../js/query.min.js"></script>
		<script type="text/javascript">
			<?php echo 'var iniBackgrounds = [{ src: "../'.$resultcomida[5].'", fade: 1000 }];'; ?>
			(function($) {
				$.vegas('stop')(iniBackgrounds[0])('overlay', { src:'../css/overlays/06.png' });
				$("#pikame").PikaChoose({showCaption:false, carousel:true});
				$('.carouselLoader').hide();
				$('.pikachoose').show();
				$('#test').weatherfeed(['MXPA1692']);
			})(jQuery);
		</script>
	</body>
</html>
<?php mysql_close($conexion); ?>