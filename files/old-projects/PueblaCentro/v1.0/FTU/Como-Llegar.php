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
		<script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyBHX2v1fQxVMMXYr235vNkkaQR3ov1FjGU&sensor=false"></script>
		<!--[if lt IE 9]>
			<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
	</head>
	<body>
		<div class="background-image"></div>
		<div id="container">
			<?php $ctMn='Como_Llegar';
			include('libs/header.php');
			include('libs/contact.php');
			?>
			<div class="Wrapper">
				<div class="pFWrppr clearfix">
					<h1 class="ttl-Section"><span class="ttl-lgo l-cmll"></span><span class="ttl-txt">Como Llegar</span></h1>
					<nav id="mapNav" class="frmt-Nv itm-3 clearfix">
						<a href="#" data-ubication="19.1738084,-96.13357459999997">De Veracruz</a>
						<a href="#" data-ubication="19.4318575,-99.13287860000003">De México</a>
						<a href="#" data-ubication="19.4157722,-98.14174109999999">De Tlaxcala</a>
					</nav>
					<div class="clmn c1-1">
						<div id="map-canvas" class="nsrt-map"></div>
					</div>
					<div class="clmn">
						<h2>VÍA TERRESTRE</h2>
						<h3>Despierta a la magia del renacer.</h3>
						<hr/>
						<p>Desde el Centro y los Estados del Sur y Este de la República, se accede a Puebla por la autopista México-Puebla.</p>
						<p>Por autobús se arriba a la Central CAPU, donde encontrará servicio de taxis concesionado y muy seguro.</p>
					</div>
					<div class="clmn">
						<h2>VÍA AÉREA</h2>
						<h3>Despierta a la magia del renacer.</h3>
						<hr/>
						<p>El aeropuerto Internacional Hermanos Serdán, en el municipio de Huejotzingo, se ubica a 22 kilómetros al oeste del Centro de la Ciudad de Puebla.</p>
						<p>En caso de que no haya vuelos desde su ciudad de origen, el aeropuerto internacional de Ciudad de México se encuentra a dos horas de Puebla. La línea de autobuses Estrella Roja lo traslada directamente desde el aeropuerto a la central CAPU y la terminal 4 Poniente.</p>
						<p><a href="#" target="_blank">Ir al sitio&raquo;</a></p>
					</div>
				</div>
			</div>
			<?php include('libs/footer.php'); ?>
		</div>
		<?php $jQueryUI=true; include('libs/jquery-1.11.0.php'); ?>
		<script src="/2014/js/bxSlider.min.js"></script>
		<script type="text/javascript">
			var directionsDisplay,
					directionsService = new google.maps.DirectionsService(),
					map;
			function initialize() {
				directionsDisplay = new google.maps.DirectionsRenderer();
				var puebla = new google.maps.LatLng(19.0413058,-98.20615020000002),
						mapOptions = { zoom:9, center: puebla };
				map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);
				directionsDisplay.setMap(map);
			}
			function calcRoute(start) {
				var end = "19.0413058,-98.20615020000002";
				if (start != '') {
					var request = {
						origin:start,
						destination:end,
						travelMode: google.maps.TravelMode.DRIVING
					};
					directionsService.route(request, function(response, status) {
						if (status == google.maps.DirectionsStatus.OK) {
							directionsDisplay.setDirections(response);
						}
					});
				} else { initialize(); }
			}
			google.maps.event.addDomListener(window, 'load', initialize);
			jQuery(function($) {
				$('#mapNav').on('click','a', function(e) {
					e.preventDefault();
					$('#mapNav a.crrnt').removeClass('crrnt');
					if (!$(this).hasClass('crrnt')) {
						calcRoute( $(this).data('ubication') );
						$(this).addClass('crrnt');
					}
				});
			});
		</script>
	</body>
</html>