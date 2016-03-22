<?php include('../libs/functions.php'); ?>
<!DOCTYPE html>
<!--[if lt IE 7]>			 <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>				 <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>				 <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<title>Pernod Ricard México::.</title>
		<meta name="description" content="Pernod Ricard México">
		<meta name="viewport" content="width=device-width">
		<link rel="shortcut icon" type="image/x-icon" href="/imgs/design/favicon.ico">
		<link rel="stylesheet" href="/css/style.css">
		<script src="/js/modernizr-2.6.2.min.js"></script>
		<?php include('../libs/jquery-1.11.0.php'); ?>
		<!--[if lt IE 9]>
			<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
	</head>
	<body class="contColor">
		<?php include('../libs/header.php'); ?>
		<div id="container" class="generalBack">
			<div class="panel">
				<div class="content PRMPrensa clearfix">
					<header class="sectionHeader">
						<h2 class="sectionTitle">Pernod Ricard México</h2>
						<h3 class="pageTitle">Sala de prensa</h3>
					</header>
					<nav class="navPrensa">
						<ul>
							<li class="prsMth"><a href="#" data-month="nov" data-year="2013">Noviembre 2013</a></li>
							<li class="prsMth"><a href="#" data-month="may" data-year="2012">Mayo 2012</a></li>
							<li class="prsMth"><a href="#" data-month="abr" data-year="2012">Abril 2012</a></li>
						</ul>
						<a href="#" class="seeMore">Ver todos</a>
					</nav>
					<div class="PRMPrensaPanel" id="enero">
						<div class="s23vc1 clearfix">
							<div class="rtclLoader">
								<span class="symb-icon icoLoader" id="loaderPop"></span>
								<script type="text/javascript">
									var i = 0;
									function loading() { i++; i = i < 8 ? i : 0; $('#loaderPop').text(i); }
									setInterval(loading, 100);
								</script>
								<p>Leyendo...</p>
							</div>
							<a href="#" class="bakToList">Regresar</a>
							<div class="pnlArt">
								<section class="articlesLists"></section>
								<section class="fullArticle">
									<article class="resume">
										<img src="" alt="" class="imgArt">
										<div class="txtContArt">
											<h3></h3>
											<div class="clearfix ttA"></div>
										</div>
									</article>
								</section>
							</div>
						</div>
						<div class="s23vc2 clearfix outCont"><div class="outImgTxt c2bT clearfix"></div></div>
					</div>
				</div>
			</div>
		</div>
		<?php include('../libs/footer.php'); ?>
		<script src="/js/query.min.js"></script>
		<script src="/js/query.prensa.min.js"></script>
	</body>
</html>