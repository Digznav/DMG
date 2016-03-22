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
		<!--[if lt IE 9]>
			<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
	</head>
	<body>
		<div id="container">
			<?php $urlEsp = "../../mobile/Que_hacer"; $actMenu = 'Que_hacer'; include("libs/header.php");
			$sqlactivi = mysql_query("SELECT * FROM actividades")or die(mysql_error());
			$k=0;
			while ($resactivid = mysql_fetch_array($sqlactivi)) {
				$resultactivid[$k] = $resactivid;
				$k++;
			} ?>
			<div class="cont onlyText clearfix">
				<ul id="logosGrid">
					<?php
					foreach ($resultactivid as $key) { echo '<li><a href="Activities?id='.$key[0].'"><img src="../../'.$key[4].'"><p>'.$key[1].'</p></a></li>';}
					?>
				</ul>
			</div>

			<?php include("libs/reservation.php"); ?>
		</div>
		<script src="../../js/jquery-ui-1.10.3.custom.min.js"></script>
		<script src="../../js/jquery.placeholder.min.js"></script>
		<script src="../../js/jquery.validate.min.js"></script>
		<script src="../../js/jquery.imagesloaded.min.js"></script>
		<script src="../../js/jquery.wookmark.min.js"></script>
		<script src="../../js/query.mobile.min.js"></script>
		<script src="../../js/jquery.zweatherfeed.min.js"></script>
		<script type="text/javascript">
			(function($) {
				$('#logosGrid').imagesLoaded(function() {
					var options = {
								itemWidth:300,
								autoResize:true,
								container:$('#logosGrid'),
								offset:5,
								flexibleWidth:'25%'
							},
							handler = $('#logosGrid li'),
							$window = $(window);
					$window.resize(function() {
						var windowWidth = $window.width(),
								newOptions = { flexibleWidth:'50%' };
					  if (windowWidth < 1024) {
					    newOptions.flexibleWidth = '80%';
					  }
					  handler.wookmark(newOptions);
					});
					handler.wookmark(options);
				});
				$('#test').weatherfeed(['MXPA1692']);
			})(jQuery);
		</script>
	</body>
</html>