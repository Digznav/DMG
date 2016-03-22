<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>.::Uniting Nations Cup 2013::.</title>
		<link rel="stylesheet" type="text/css" href="../css/style.css">
		<link rel="shortcut icon" type="image/x-icon" href="../imgs/logos/favicon.ico">
		<script src="http://code.jquery.com/jquery-1.8.3.min.js"></script> 
		<script src="../js/jquery.pikachoose.min.js"></script>
		<script src="../js/query.min.js"></script>
		<!--[if lt IE 9]>
			<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
	</head>
	<body>
		<div class="shadow"></div>
		<div class="bg-aside"></div>
		<div class="content">
			<?php require("libs/encabezadoUNC.php"); ?>
			<aside>
				<div class="lang"><a href="#">Español</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="../scoring.php">English</a></div>
				<?php require("libs/patrocinadores.php"); ?>
			</aside>
			<?php
			require("libs/navegacionPrincipal.php");
			$firstCarrItem = 5;
			require("libs/carrucel.php");
			?>
			<div class="cont">
				<span class="title_section">Puntuaciones</span>
				<nav class="scoreSubnav">
					<ul><li><a href="#diaTabla1" class="botsubMenu elementActive">4 Bolas</a></li><li><a href="#diaTabla2" class="botsubMenu">Chapman</a></li><li><a href="#diaTabla3" class="botsubMenu">Individual</a></li><li><a href="../docs/2013_Uniting_Nations_Results-rnd3.pdf" target="_blank">Versión PDF</a></li></ul>
				</nav>
				<div class="scoreTable">
					<div id="diaTabla1" class="panel">
						<table>
							<tr><td colspan="4"><span class="blueUSA">EQUIPO USA</span> <span class="red">VS</span> <span class="greenMEX">EQUIPO MÉXICO</span></td></tr>
							<tr><td><span class="blueUSA">Nombre</span></td><td><span class="blueUSA">4 Bolas</span></td><td><span class="greenMEX">4 Bolas</span></td><td><span class="greenMEX">Nombre</span></td></tr>
							<tr><td width="33%"><span class="blueUSA">Martella, Tim</span></td><td rowspan="2"><span class="blueUSA bigNumber"></span></td><td rowspan="2"><span class="greenMEX bigNumber">1</span></td><td width="33%"><span class="greenMEX">Bojorquez, Fernando</span></td></tr>
							<tr><td width="33%"><span class="blueUSA">Martella, Ed</span></td><td width="33%"><span class="greenMEX">Flores, Francisco</span></td></tr>
							<tr><td width="33%"><span class="blueUSA">Gravelin, Patrick</span></td><td rowspan="2"><span class="blueUSA bigNumber"></span></td><td rowspan="2"><span class="greenMEX bigNumber">1</span></td><td width="33%"><span class="greenMEX">Duran, Roberto</span></td></tr>
							<tr><td width="33%"><span class="blueUSA">Gerhke, Greg</span></td><td width="33%"><span class="greenMEX">Vazquez, Hector</span></td></tr>
							<tr><td width="33%"><span class="blueUSA">Raley, Don</span></td><td rowspan="2"><span class="blueUSA bigNumber"></span></td><td rowspan="2"><span class="greenMEX bigNumber">1</span></td><td width="33%"><span class="greenMEX">Maciel, Jose</span></td></tr>
							<tr><td width="33%"><span class="blueUSA">Kiminski, Dale</span></td><td width="33%"><span class="greenMEX">Garcia, Isidro</span></td></tr>
							<tr><td width="33%"><span class="blueUSA">Anderson, John</span></td><td rowspan="2"><span class="blueUSA bigNumber"></span></td><td rowspan="2"><span class="greenMEX bigNumber">1</span></td><td width="33%"><span class="greenMEX">Jaquez, Humberto</span></td></tr>
							<tr><td width="33%"><span class="blueUSA">Dekruif, Jeffrey</span></td><td width="33%"><span class="greenMEX">Quiroz, Cesar</span></td></tr>
							<tr><td width="33%"><span class="blueUSA">Breedlove, Dave</span></td><td rowspan="2"><span class="blueUSA bigNumber">1</span></td><td rowspan="2"><span class="greenMEX bigNumber"></span></td><td width="33%"><span class="greenMEX">Giron, Renato</span></td></tr>
							<tr><td width="33%"><span class="blueUSA">Hickson, Rob</span></td><td width="33%"><span class="greenMEX">Gonzalez, Alfredo</span></td></tr>
							<tr><td width="33%"><span class="blueUSA">Thomas, Bernie</span></td><td rowspan="2"><span class="blueUSA bigNumber">1</span></td><td rowspan="2"><span class="greenMEX bigNumber"></span></td><td width="33%"><span class="greenMEX">Juareza, Hector</span></td></tr>
							<tr><td width="33%"><span class="blueUSA">Brambert, John</span></td><td width="33%"><span class="greenMEX">Chavez, Edgardo</span></td></tr>
							<tr><td width="33%"><span class="blueUSA">Conway, Jason</span></td><td rowspan="2"><span class="blueUSA bigNumber"></span></td><td rowspan="2"><span class="greenMEX bigNumber">1</span></td><td width="33%"><span class="greenMEX">Lozada, Ricardo</span></td></tr>
							<tr><td width="33%"><span class="blueUSA">McFarland, Toby</span></td><td width="33%"><span class="greenMEX">Rios, Homero</span></td></tr>
							<tr><td width="33%"><span class="blueUSA">Baldwin, Bob</span></td><td rowspan="2"><span class="blueUSA bigNumber">1/2</span></td><td rowspan="2"><span class="greenMEX bigNumber">1/2</span></td><td width="33%"><span class="greenMEX">De Zavala, Enrique</span></td></tr>
							<tr><td width="33%"><span class="blueUSA">Redger, Dale</span></td><td width="33%"><span class="greenMEX">Fraijo, Samuel</span></td></tr>
							<tr><td width="33%"><span class="blueUSA">Gage, Matt</span></td><td rowspan="2"><span class="blueUSA bigNumber">1</span></td><td rowspan="2"><span class="greenMEX bigNumber"></span></td><td width="33%"><span class="greenMEX">Lopez, Juan</span></td></tr>
							<tr><td width="33%"><span class="blueUSA">Chao, James</span></td><td width="33%"><span class="greenMEX">Gonzalez, Roberto</span></td></tr>
							<tr><td width="33%"><span class="blueUSA">Schofeld, Edward</span></td><td rowspan="2"><span class="blueUSA bigNumber">1</span></td><td rowspan="2"><span class="greenMEX bigNumber"></span></td><td width="33%"><span class="greenMEX">Aguayo, Rafael</span></td></tr>
							<tr><td width="33%"><span class="blueUSA">Lamy, Jaques</span></td><td width="33%"><span class="greenMEX">Garcia, Eduardo</span></td></tr>
							<tr><td width="33%"><span class="blueUSA">Lumpkin, Kelly</span></td><td rowspan="2"><span class="blueUSA bigNumber">1</span></td><td rowspan="2"><span class="greenMEX bigNumber"></span></td><td width="33%"><span class="greenMEX">Rivero, Plinio</span></td></tr>
							<tr><td width="33%"><span class="blueUSA">Olson, Brad</span></td><td width="33%"><span class="greenMEX">Gilchrist, Malak</span></td></tr>
							<tr><td width="33%"><span class="blueUSA">LaClair, Charlie</span></td><td rowspan="2"><span class="blueUSA bigNumber">1</span></td><td rowspan="2"><span class="greenMEX bigNumber"></span></td><td width="33%"><span class="greenMEX">Garcia, Fernando</span></td></tr>
							<tr><td width="33%"><span class="blueUSA">Riggs, Gerry</span></td><td width="33%"><span class="greenMEX">Collo, Luis</span></td></tr>
							<tr><td width="33%"><span class="blueUSA">Rietz, Mike</span></td><td rowspan="2"><span class="blueUSA bigNumber">1</span></td><td rowspan="2"><span class="greenMEX bigNumber"></span></td><td width="33%"><span class="greenMEX">Lopez, Armando</span></td></tr>
							<tr><td width="33%"><span class="blueUSA">Krantz, Chad</span></td><td width="33%"><span class="greenMEX">Corella, Ernesto</span></td></tr>
							<tr><td width="33%"><span class="blueUSA">Vega, Jason</span></td><td rowspan="2"><span class="blueUSA bigNumber">1</span></td><td rowspan="2"><span class="greenMEX bigNumber"></span></td><td width="33%"><span class="greenMEX">Torres, Jesus</span></td></tr>
							<tr><td width="33%"><span class="blueUSA">Klein, Dan</span></td><td width="33%"><span class="greenMEX">Orosco, Jesus</span></td></tr>
							<tr><td width="33%"><span class="blueUSA">Hayes, Greg</span></td><td rowspan="2"><span class="blueUSA bigNumber">1</span></td><td rowspan="2"><span class="greenMEX bigNumber"></span></td><td width="33%"><span class="greenMEX">Gonzales, Eduardo</span></td></tr>
							<tr><td width="33%"><span class="blueUSA">McWilliams, Tom</span></td><td width="33%"><span class="greenMEX">1 Estrada, Cesar</span></td></tr>
							<tr><td width="33%"><span class="blueUSA">Rubino, Tony</span></td><td rowspan="2"><span class="blueUSA bigNumber">1</span></td><td rowspan="2"><span class="greenMEX bigNumber"></span></td><td width="33%"><span class="greenMEX">Meza, Eloi</span></td></tr>
							<tr><td width="33%"><span class="blueUSA">Gage, Colten</span></td><td width="33%"><span class="greenMEX">Espinoza, Eduardo</span></td></tr>
							<tr><td width="33%"><span class="blueUSA">Sampson, Neil</span></td><td rowspan="2"><span class="blueUSA bigNumber">1</span></td><td rowspan="2"><span class="greenMEX bigNumber"></span></td><td width="33%"><span class="greenMEX">Breton, Alex</span></td></tr>
							<tr><td width="33%"><span class="blueUSA">Serraro, Dan</span></td><td width="33%"><span class="greenMEX">Medina, Gabriel</span></td></tr>
							<tr><td width="33%"><span class="blueUSA">Hiatt, Tom</span></td><td rowspan="2"><span class="blueUSA bigNumber">1</span></td><td rowspan="2"><span class="greenMEX bigNumber"></span></td><td width="33%"><span class="greenMEX">Beas, Alvaro</span></td></tr>
							<tr><td width="33%"><span class="blueUSA">Armstrong, Rick</span></td><td width="33%"><span class="greenMEX">1 Lerner, Frank</span></td></tr>
							<tr><td width="33%"><span class="blueUSA">Henning, Jack</span></td><td rowspan="2"><span class="blueUSA bigNumber">1</span></td><td rowspan="2"><span class="greenMEX bigNumber"></span></td><td width="33%"><span class="greenMEX">Meza, Juan Carlos</span></td></tr>
							<tr><td width="33%"><span class="blueUSA">Senecal, Steve</span></td><td width="33%"><span class="greenMEX">Martinez, Ricardo</span></td></tr>
							<tr><td width="33%"><span class="blueUSA">Dunn, Alan</span></td><td rowspan="2"><span class="blueUSA bigNumber">1</span></td><td rowspan="2"><span class="greenMEX bigNumber"></span></td><td width="33%"><span class="greenMEX">Brugueiro, Saul</span></td></tr>
							<tr><td width="33%"><span class="blueUSA">Lane, Jay</span></td><td width="33%"><span class="greenMEX">Tominaga, Akira</span></td></tr>
							<tr><td><span class="medBlack">Total</span></td><td><span class="blueUSA bigNumber">14 1/2</span></td><td><span class="greenMEX bigNumber">5 1/2</span></td><td><span class="medBlack">Total</span></td></tr>
						</table>
					</div>
					<div id="diaTabla2" class="panel">
						<table>
							<tr><td colspan="4"><span class="blueUSA">EQUIPO USA</span> <span class="red">VS</span> <span class="greenMEX">EQUIPO MÉXICO</span></td></tr>
							<tr><td><span class="blueUSA">Nombre</span></td><td><span class="blueUSA">Chapman</span></td><td><span class="greenMEX">Chapman</span></td><td><span class="greenMEX">Nombre</span></td></tr>
							<tr><td width="33%"><span class="blueUSA">Martella, Tim</span></td><td rowspan="2"><span class="blueUSA bigNumber">1</span></td><td rowspan="2"><span class="greenMEX bigNumber"></span></td><td width="33%"><span class="greenMEX">Bojorquez, Fernando</span></td></tr>
							<tr><td width="33%"><span class="blueUSA">Martella, Ed</span></td><td width="33%"><span class="greenMEX">Flores, Francisco</span></td></tr>
							<tr><td width="33%"><span class="blueUSA">Gravelin, Patrick</span></td><td rowspan="2"><span class="blueUSA bigNumber">1</span></td><td rowspan="2"><span class="greenMEX bigNumber"></span></td><td width="33%"><span class="greenMEX">Duran, Roberto</span></td></tr>
							<tr><td width="33%"><span class="blueUSA">Gerhke, Greg</span></td><td width="33%"><span class="greenMEX">Vazquez, Hector</span></td></tr>
							<tr><td width="33%"><span class="blueUSA">Raley, Don</span></td><td rowspan="2"><span class="blueUSA bigNumber">1</span></td><td rowspan="2"><span class="greenMEX bigNumber"></span></td><td width="33%"><span class="greenMEX">Maciel, Jose</span></td></tr>
							<tr><td width="33%"><span class="blueUSA">Kiminski, Dale</span></td><td width="33%"><span class="greenMEX">Garcia, Isidro</span></td></tr>
							<tr><td width="33%"><span class="blueUSA">Anderson, John</span></td><td rowspan="2"><span class="blueUSA bigNumber">1</span></td><td rowspan="2"><span class="greenMEX bigNumber"></span></td><td width="33%"><span class="greenMEX">Jaquez, Humberto</span></td></tr>
							<tr><td width="33%"><span class="blueUSA">Dekruif, Jeffrey</span></td><td width="33%"><span class="greenMEX">Quiroz, Cesar</span></td></tr>
							<tr><td width="33%"><span class="blueUSA">Breedlove, Dave</span></td><td rowspan="2"><span class="blueUSA bigNumber">1</span></td><td rowspan="2"><span class="greenMEX bigNumber"></span></td><td width="33%"><span class="greenMEX">Giron, Renato</span></td></tr>
							<tr><td width="33%"><span class="blueUSA">Hickson, Rob</span></td><td width="33%"><span class="greenMEX">Gonzalez, Alfredo</span></td></tr>
							<tr><td width="33%"><span class="blueUSA">Thomas, Bernie</span></td><td rowspan="2"><span class="blueUSA bigNumber"></span></td><td rowspan="2"><span class="greenMEX bigNumber">1</span></td><td width="33%"><span class="greenMEX">Juareza, Hector</span></td></tr>
							<tr><td width="33%"><span class="blueUSA">Brambert, John</span></td><td width="33%"><span class="greenMEX">Chavez, Edgardo</span></td></tr>
							<tr><td width="33%"><span class="blueUSA">Conway, Jason</span></td><td rowspan="2"><span class="blueUSA bigNumber">1</span></td><td rowspan="2"><span class="greenMEX bigNumber"></span></td><td width="33%"><span class="greenMEX">Lozada, Ricardo</span></td></tr>
							<tr><td width="33%"><span class="blueUSA">McFarland, Toby</span></td><td width="33%"><span class="greenMEX">Rios, Homero</span></td></tr>
							<tr><td width="33%"><span class="blueUSA">Baldwin, Bob</span></td><td rowspan="2"><span class="blueUSA bigNumber">1</span></td><td rowspan="2"><span class="greenMEX bigNumber"></span></td><td width="33%"><span class="greenMEX">De Zavala, Enrique</span></td></tr>
							<tr><td width="33%"><span class="blueUSA">Redger, Dale</span></td><td width="33%"><span class="greenMEX">Fraijo, Samuel</span></td></tr>
							<tr><td width="33%"><span class="blueUSA">Gage, Matt</span></td><td rowspan="2"><span class="blueUSA bigNumber">1</span></td><td rowspan="2"><span class="greenMEX bigNumber"></span></td><td width="33%"><span class="greenMEX">Lopez, Juan</span></td></tr>
							<tr><td width="33%"><span class="blueUSA">Chao, James</span></td><td width="33%"><span class="greenMEX">Gonzalez, Roberto</span></td></tr>
							<tr><td width="33%"><span class="blueUSA">Schofeld, Edward</span></td><td rowspan="2"><span class="blueUSA bigNumber"></span></td><td rowspan="2"><span class="greenMEX bigNumber">1</span></td><td width="33%"><span class="greenMEX">Aguayo, Rafael</span></td></tr>
							<tr><td width="33%"><span class="blueUSA">Lamy, Jaques</span></td><td width="33%"><span class="greenMEX">Garcia, Eduardo</span></td></tr>
							<tr><td width="33%"><span class="blueUSA">Lumpkin, Kelly</span></td><td rowspan="2"><span class="blueUSA bigNumber">1</span></td><td rowspan="2"><span class="greenMEX bigNumber"></span></td><td width="33%"><span class="greenMEX">Rivero, Plinio</span></td></tr>
							<tr><td width="33%"><span class="blueUSA">Olson, Brad</span></td><td width="33%"><span class="greenMEX">Gilchrist, Malak</span></td></tr>
							<tr><td width="33%"><span class="blueUSA">LaClair, Charlie</span></td><td rowspan="2"><span class="blueUSA bigNumber"></span></td><td rowspan="2"><span class="greenMEX bigNumber">1</span></td><td width="33%"><span class="greenMEX">Garcia, Fernando</span></td></tr>
							<tr><td width="33%"><span class="blueUSA">Riggs, Gerry</span></td><td width="33%"><span class="greenMEX">Collo, Luis</span></td></tr>
							<tr><td width="33%"><span class="blueUSA">Rietz, Mike</span></td><td rowspan="2"><span class="blueUSA bigNumber">1</span></td><td rowspan="2"><span class="greenMEX bigNumber"></span></td><td width="33%"><span class="greenMEX">Lopez, Armando</span></td></tr>
							<tr><td width="33%"><span class="blueUSA">Krantz, Chad</span></td><td width="33%"><span class="greenMEX">Corella, Ernesto</span></td></tr>
							<tr><td width="33%"><span class="blueUSA">Vega, Jason</span></td><td rowspan="2"><span class="blueUSA bigNumber">1</span></td><td rowspan="2"><span class="greenMEX bigNumber"></span></td><td width="33%"><span class="greenMEX">Torres, Jesus</span></td></tr>
							<tr><td width="33%"><span class="blueUSA">Klein, Dan</span></td><td width="33%"><span class="greenMEX">Orosco, Jesus</span></td></tr>
							<tr><td width="33%"><span class="blueUSA">Hayes, Greg</span></td><td rowspan="2"><span class="blueUSA bigNumber"></span></td><td rowspan="2"><span class="greenMEX bigNumber">1</span></td><td width="33%"><span class="greenMEX">Gonzales, Eduardo</span></td></tr>
							<tr><td width="33%"><span class="blueUSA">McWilliams, Tom</span></td><td width="33%"><span class="greenMEX"> Estrada, Cesar</span></td></tr>
							<tr><td width="33%"><span class="blueUSA">Rubino, Tony</span></td><td rowspan="2"><span class="blueUSA bigNumber">1</span></td><td rowspan="2"><span class="greenMEX bigNumber"></span></td><td width="33%"><span class="greenMEX">Meza, Eloi</span></td></tr>
							<tr><td width="33%"><span class="blueUSA">Gage, Colten</span></td><td width="33%"><span class="greenMEX">Espinoza, Eduardo</span></td></tr>
							<tr><td width="33%"><span class="blueUSA">Sampson, Neil</span></td><td rowspan="2"><span class="blueUSA bigNumber">1</span></td><td rowspan="2"><span class="greenMEX bigNumber"></span></td><td width="33%"><span class="greenMEX">Breton, Alex</span></td></tr>
							<tr><td width="33%"><span class="blueUSA">Serraro, Dan</span></td><td width="33%"><span class="greenMEX">Medina, Gabriel</span></td></tr>
							<tr><td width="33%"><span class="blueUSA">Hiatt, Tom</span></td><td rowspan="2"><span class="blueUSA bigNumber"></span></td><td rowspan="2"><span class="greenMEX bigNumber">1</span></td><td width="33%"><span class="greenMEX">Beas, Alvaro</span></td></tr>
							<tr><td width="33%"><span class="blueUSA">Armstrong, Rick</span></td><td width="33%"><span class="greenMEX"> Lerner, Frank</span></td></tr>
							<tr><td width="33%"><span class="blueUSA">Henning, Jack</span></td><td rowspan="2"><span class="blueUSA bigNumber"></span></td><td rowspan="2"><span class="greenMEX bigNumber">1</span></td><td width="33%"><span class="greenMEX">Meza, Juan Carlos</span></td></tr>
							<tr><td width="33%"><span class="blueUSA">Senecal, Steve</span></td><td width="33%"><span class="greenMEX">Martinez, Ricardo</span></td></tr>
							<tr><td width="33%"><span class="blueUSA">Dunn, Alan</span></td><td rowspan="2"><span class="blueUSA bigNumber">1</span></td><td rowspan="2"><span class="greenMEX bigNumber"></span></td><td width="33%"><span class="greenMEX">Brugueiro, Saul</span></td></tr>
							<tr><td width="33%"><span class="blueUSA">Lane, Jay</span></td><td width="33%"><span class="greenMEX">Tominaga, Akira</span></td></tr>
							<tr><td><span class="medBlack">Total</span></td><td><span class="blueUSA bigNumber">14</span></td><td><span class="greenMEX bigNumber">16</span></td><td><span class="medBlack">Total</span></td></tr>
							<tr><td><span class="medBlack">Segundo día - Total</span></td><td><span class="blueUSA bigNumber">28 1/2</span></td><td><span class="greenMEX bigNumber">11 1/2</span></td><td><span class="medBlack">Segundo día - Total</span></td></tr>
						</table>
					</div>
					<div id="diaTabla3" class="panel">
						<table>
							<tr><td colspan="4"><span class="blueUSA">EQUIPO USA</span> <span class="red">VS</span> <span class="greenMEX">EQUIPO MÉXICO</span></td></tr>
							<tr><td><span class="blueUSA">Nombre</span></td><td><span class="blueUSA">Indiv.</span></td><td><span class="greenMEX">Indiv.</span></td><td><span class="greenMEX">Nombre</span></td></tr>
							<tr><td width="33%"><span class="blueUSA">Klein, Dan</span></td><td><span class="blueUSA"></span></td><td><span class="greenMEX">1</span></td><td width="33%"><span class="greenMEX">Torres, Jesus</span></td></tr>
							<tr><td width="33%"><span class="blueUSA">Vega, Jason</span></td><td><span class="blueUSA">1</span></td><td><span class="greenMEX"></span></td><td width="33%"><span class="greenMEX">Torres, Luis</span></td></tr>
							<tr><td width="33%"><span class="blueUSA">Senecal, Steve</span></td><td><span class="blueUSA"></span></td><td><span class="greenMEX">1</span></td><td width="33%"><span class="greenMEX">Quiroz, Cesar</span></td></tr>
							<tr><td width="33%"><span class="blueUSA">Henning, Jack</span></td><td><span class="blueUSA">1/2</span></td><td><span class="greenMEX">1/2</span></td><td width="33%"><span class="greenMEX">Jaquez, Humberto</span></td></tr>
							<tr><td width="33%"><span class="blueUSA">Raley, Don</span></td><td><span class="blueUSA"></span></td><td><span class="greenMEX">1</span></td><td width="33%"><span class="greenMEX">Garcia, Isidro</span></td></tr>
							<tr><td width="33%"><span class="blueUSA">Kiminski, Dale</span></td><td><span class="blueUSA"></span></td><td><span class="greenMEX">1</span></td><td width="33%"><span class="greenMEX">Maciel, Jose</span></td></tr>
							<tr><td width="33%"><span class="blueUSA">LaClair, Charlie</span></td><td><span class="blueUSA">1</span></td><td><span class="greenMEX"></span></td><td width="33%"><span class="greenMEX">Garcia, Fernando</span></td></tr>
							<tr><td width="33%"><span class="blueUSA">Riggs, Gerry</span></td><td><span class="blueUSA">1</span></td><td><span class="greenMEX"></span></td><td width="33%"><span class="greenMEX">Espinoza, Eduardo</span></td></tr>
							<tr><td width="33%"><span class="blueUSA">Gage, Colten</span></td><td><span class="blueUSA">1/2</span></td><td><span class="greenMEX">1/2</span></td><td width="33%"><span class="greenMEX">Lozada, Ricardo</span></td></tr>
							<tr><td width="33%"><span class="blueUSA">McWilliams, Tom</span></td><td><span class="blueUSA"></span></td><td><span class="greenMEX">1</span></td><td width="33%"><span class="greenMEX">Rios, Homero</span></td></tr>
							<tr><td width="33%"><span class="blueUSA">Hiatt, Tom</span></td><td><span class="blueUSA"></span></td><td><span class="greenMEX">1</span></td><td width="33%"><span class="greenMEX">Collo, Luis</span></td></tr>
							<tr><td width="33%"><span class="blueUSA">Armstrong, Rick</span></td><td><span class="blueUSA">1</span></td><td><span class="greenMEX"></span></td><td width="33%"><span class="greenMEX">Orosco, Jesus</span></td></tr>
							<tr><td width="33%"><span class="blueUSA">Baldwin, Bob</span></td><td><span class="blueUSA">1</span></td><td><span class="greenMEX"></span></td><td width="33%"><span class="greenMEX">Fraijo, Samuel</span></td></tr>
							<tr><td width="33%"><span class="blueUSA">Redger, Dale</span></td><td><span class="blueUSA">1</span></td><td><span class="greenMEX"></span></td><td width="33%"><span class="greenMEX">Martinez, Ricardo</span></td></tr>
							<tr><td width="33%"><span class="blueUSA">Dunn, Alan</span></td><td><span class="blueUSA"></span></td><td><span class="greenMEX">1</span></td><td width="33%"><span class="greenMEX">Bojorquez, Fernando</span></td></tr>
							<tr><td width="33%"><span class="blueUSA">Lane, Jay</span></td><td><span class="blueUSA">1</span></td><td><span class="greenMEX"></span></td><td width="33%"><span class="greenMEX">Flores, Francisco</span></td></tr>
							<tr><td width="33%"><span class="blueUSA">Gage, Matt</span></td><td><span class="blueUSA">1</span></td><td><span class="greenMEX"></span></td><td width="33%"><span class="greenMEX">Lopez, Juan</span></td></tr>
							<tr><td width="33%"><span class="blueUSA">Chao, James</span></td><td><span class="blueUSA">1</span></td><td><span class="greenMEX"></span></td><td width="33%"><span class="greenMEX">Gonzalez, Roberto</span></td></tr>
							<tr><td width="33%"><span class="blueUSA">Anderson, John</span></td><td><span class="blueUSA">1</span></td><td><span class="greenMEX"></span></td><td width="33%"><span class="greenMEX">Tominaga, Akira</span></td></tr>
							<tr><td width="33%"><span class="blueUSA">Dekruif, Jeffrey</span></td><td><span class="blueUSA">1</span></td><td><span class="greenMEX"></span></td><td width="33%"><span class="greenMEX">Estrada, Cesar</span></td></tr>
							<tr><td width="33%"><span class="blueUSA">Hayes, Greg</span></td><td><span class="blueUSA">1</span></td><td><span class="greenMEX"></span></td><td width="33%"><span class="greenMEX">Brugueiro, Saul</span></td></tr>
							<tr><td width="33%"><span class="blueUSA">Rubino, Tony</span></td><td><span class="blueUSA">1</span></td><td><span class="greenMEX"></span></td><td width="33%"><span class="greenMEX">Beas, Alvaro</span></td></tr>
							<tr><td width="33%"><span class="blueUSA">Martella, Ed</span></td><td><span class="blueUSA">1</span></td><td><span class="greenMEX"></span></td><td width="33%"><span class="greenMEX">Aguayo, Rafael</span></td></tr>
							<tr><td width="33%"><span class="blueUSA">Martella, Tim</span></td><td><span class="blueUSA"></span></td><td><span class="greenMEX">1</span></td><td width="33%"><span class="greenMEX">Garcia, Eduardo</span></td></tr>
							<tr><td width="33%"><span class="blueUSA">Rietz, Mike</span></td><td><span class="blueUSA"></span></td><td><span class="greenMEX">1</span></td><td width="33%"><span class="greenMEX">Meza, Eloi</span></td></tr>
							<tr><td width="33%"><span class="blueUSA">Krantz, Chad</span></td><td><span class="blueUSA">1</span></td><td><span class="greenMEX"></span></td><td width="33%"><span class="greenMEX">Medina, Gabriel</span></td></tr>
							<tr><td width="33%"><span class="blueUSA">Brambert, John</span></td><td><span class="blueUSA"></span></td><td><span class="greenMEX">1</span></td><td width="33%"><span class="greenMEX">Breton, Alex</span></td></tr>
							<tr><td width="33%"><span class="blueUSA">Thomas, Bernie</span></td><td><span class="blueUSA">1</span></td><td><span class="greenMEX"></span></td><td width="33%"><span class="greenMEX">Chavez, Edgardo</span></td></tr>
							<tr><td width="33%"><span class="blueUSA">Schofield, Edward</span></td><td><span class="blueUSA">1</span></td><td><span class="greenMEX"></span></td><td width="33%"><span class="greenMEX">Juarez, Hector</span></td></tr>
							<tr><td width="33%"><span class="blueUSA">Lamy, Jaques</span></td><td><span class="blueUSA">1</span></td><td><span class="greenMEX"></span></td><td width="33%"><span class="greenMEX">Giron, Renato</span></td></tr>
							<tr><td width="33%"><span class="blueUSA">Breedlove, Dave</span></td><td><span class="blueUSA">1</span></td><td><span class="greenMEX"></span></td><td width="33%"><span class="greenMEX">Gonzalez, Alfredo</span></td></tr>
							<tr><td width="33%"><span class="blueUSA">Hickson, Rob</span></td><td><span class="blueUSA">1</span></td><td><span class="greenMEX"></span></td><td width="33%"><span class="greenMEX">Lerner, Frank</span></td></tr>
							<tr><td width="33%"><span class="blueUSA">Sampson, Neil</span></td><td><span class="blueUSA">1</span></td><td><span class="greenMEX"></span></td><td width="33%"><span class="greenMEX">Lopez, Armando</span></td></tr>
							<tr><td width="33%"><span class="blueUSA">Serraro, Dan</span></td><td><span class="blueUSA">1/2</span></td><td><span class="greenMEX">1/2</span></td><td width="33%"><span class="greenMEX">Corella, Ernesto</span></td></tr>
							<tr><td width="33%"><span class="blueUSA">McFarland, Toby</span></td><td><span class="blueUSA">1</span></td><td><span class="greenMEX"></span></td><td width="33%"><span class="greenMEX">Duran, Roberto</span></td></tr>
							<tr><td width="33%"><span class="blueUSA">Conway, Jason</span></td><td><span class="blueUSA">1</span></td><td><span class="greenMEX"></span></td><td width="33%"><span class="greenMEX">Vazquez, Hector</span></td></tr>
							<tr><td width="33%"><span class="blueUSA">Lumpkin, Kelly</span></td><td><span class="blueUSA">1</span></td><td><span class="greenMEX"></span></td><td width="33%"><span class="greenMEX">Rivero, Plinio</span></td></tr>
							<tr><td width="33%"><span class="blueUSA">Olson, Brad</span></td><td><span class="blueUSA">1</span></td><td><span class="greenMEX"></span></td><td width="33%"><span class="greenMEX">Zavala, Mauricio</span></td></tr>
							<tr><td width="33%"><span class="blueUSA">Gravelin, Patrick</span></td><td><span class="blueUSA">1</span></td><td><span class="greenMEX"></span></td><td width="33%"><span class="greenMEX">Gilchrist, Malak</span></td></tr>
							<tr><td width="33%"><span class="blueUSA">Gerhke, Greg</span></td><td><span class="blueUSA">1/2</span></td><td><span class="greenMEX">1/2</span></td><td width="33%"><span class="greenMEX">Meza, Juan Carlos</span></td></tr>
							<tr><td><span class="medBlack">Total</span></td><td><span class="blueUSA bigNumber">28</span></td><td><span class="greenMEX bigNumber">12</span></td><td><span class="medBlack">Total</span></td></tr>
							<tr><td><span class="medBlack">FINAL</span></td><td><span class="blueUSA bigNumber">56 1/2</span></td><td><span class="greenMEX bigNumber">23 1/2</span></td><td><span class="medBlack">FINAL</span></td></tr>
						</table>
					</div>
				</div>
			</div>
			<?php require("libs/pieUNC.php"); ?>
		</div>
	</body>
</html>