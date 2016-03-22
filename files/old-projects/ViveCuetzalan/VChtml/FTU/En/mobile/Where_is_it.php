<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<title>Vive Cuetzalan::.</title>
		<meta name="description" content="Vive Cuetzalan">
		<meta name="viewport" content="width=device-width, maximum-scale=1.0">
		<link rel="shortcut icon" type="image/x-icon" href="../../imgs/design/favicon.ico">
		<link rel="stylesheet" href="../../css/style.css">
		<link rel="stylesheet" href="../../css/style.mobile.css">
		<link rel="stylesheet" href="../../css/orientation.fix.css">
		<script src="../../js/modernizr-2.6.2.min.js"></script>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
		<script>window.jQuery || document.write('<script src="../js/jquery-1.10.1.min.js"><\\/script>')</script>
		<script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyBHX2v1fQxVMMXYr235vNkkaQR3ov1FjGU&sensor=false"></script>
		<!--[if lt IE 9]>
			<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
	</head>
	<body>
		<div id="container">
			<?php $urlEsp = "../../mobile/Donde_esta"; $actMenu = 'Donde_esta'; include("libs/header.php"); ?>
			<div class="cont onlyText clearfix">
				<h2 class="sectionTitle">Where is Cuetzalan</h2>
				<div id="panel">
					<strong>Inicio: </strong>
					<select id="start" onchange="calcRoute();">
						<option value="">Seleccione un lugar</option>
						<option value="19.0413058, -98.20615020000002">Puebla Centro</option>
						<option value="19.4318575,-99.13287860000003">México, DF</option>
						<option value="19.1738084, -96.13357459999997">Veracruz, Puerto</option>
						<option value="20.5262023, -97.46335629999999">Poza Rica, Veracruz</option>
						<option value="19.4157722, -98.14174109999999">Apizaco, Tlaxcala</option>
						<option value="20.5881458, -100.38963339999998">Querétaro, Querétaro</option>
						<option value="18.92184, -99.226613">Cuernavaca, Morelos</option>
					</select>
					<strong>Destino: Cuetzalan</strong>
				</div>
				<div id="map-canvas"></div>
			</div>
			<?php include("libs/reservation.php"); ?>
		</div>
		<script src="../../js/jquery-ui-1.10.3.custom.min.js"></script>
		<script src="../../js/jquery.placeholder.min.js"></script>
		<script src="../../js/jquery.validate.min.js"></script>
		<script src="../../js/query.mobile.min.js"></script>
		<script src="../../js/jquery.zweatherfeed.min.js"></script>
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
			function calcRoute() {
				var start = document.getElementById('start').value,
						end = "20.017352, -97.52342829999998";
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
			$('#test').weatherfeed(['MXPA1692']);
		</script>
	</body>
</html>