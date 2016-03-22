<?php include('libs/init.php'); ?>
<!DOCTYPE html>
<!--[if lt IE 7]>			 <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>				 <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>				 <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<title>Puebla Centro::.</title>
		<meta name="description" content="Puebla Centro">
		<meta name="viewport" content="width=device-width">
		<link rel="shortcut icon" type="image/x-icon" href="/2014/imgs/design/favicon.ico">
		<link rel="stylesheet" href="/2014/css/style.css">
		<link rel="stylesheet" href="/2014/css/bxslider.css">
		<script src="/2014/js/modernizr.2.7.2.min.js"></script>
		<!--[if lt IE 9]>
			<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
	</head>
	<body>
		<div class="background-image"></div>
		<div id="container">
			<?php $ctMn='Tradicion';
			include('libs/header.php');
			include('libs/contact.php');
			?>
			<div class="Wrapper">
				<div class="pFWrppr clearfix">
					<h1 class="ttl-Section"><span class="ttl-lgo l-trdn"></span><span class="ttl-txt">Tradición</span></h1>
					<div class="clmn"><img src="/2014/imgs/design/china-poblana.jpg" alt="China Poblana"></div>
					<div class="clmn">
						<hr/>
						<p>Fundada en el año de 1531, Puebla de los Ángeles, debe su nombre a que era el «lugar que se puebla». Fue Declarada Patrimonio de la Humanidad por la UNESCO en 1987 debido a la magnitud de sus templos, primorosas esculturas, monasterios, colegios-seminarios y residencias eclesiásticas de su Centro Histórico.</p>
						<p>De su imponente arquitectura novohispana  se destacan once conventos: Santa Catalina (1568), La Concepción (1593), San Jerónimo (1597), Santa Teresa (1604), Santa Clara (1607), La Santísima Trinida d (1619), Santa Inés (1626), Santa Mónica (1682), las Capuchinas (1703), Santa Rosa (1683) y La Soledad (1748), además de la impresionante Catedral.</p>
						<p>Como característica principal, el Centro de Puebla conserva fachadas de azulejos de época, molduras de estuco, balcones de hierro fundido y recortes hechos a cincel en su ornamentación arquitectónica, así como su clásica loza de Talavera, heredada de la vieja alfarería árabe.</p>
						<p>Dicho legado arquitectónico ha permitido acumular una muy extensa bibliografía y obras de arte virreinal  valiosísimo, que es orgullo de sus pobladores y deleitan a quienes visitan la ciudad.</p>
					</div>
				</div>
			</div>
			<?php include('libs/footer.php'); ?>
		</div>
		<?php $jQueryUI=true; include('libs/jquery-1.11.0.php'); ?>
		<script src="/2014/js/bxSlider.min.js"></script>
	</body>
</html>