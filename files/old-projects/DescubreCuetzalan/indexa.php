<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<META NAME="author" CONTENT="Vmasideas"> 
<META NAME="subject" CONTENT="Agencia"> 
<META NAME="Description" CONTENT="Bienvenido al mejor sitio en cuanto a la organización de viajes en la Sierra Norte de Puebla. Descubre Cuetzalan tiene la plena certeza que hará de su visita una mágica experiencia pues un equipo de profesionales en el área nos respaldan.  "> 
<META NAME="Keywords" CONTENT="Cuetzalan, Descubre Cuetzalan, hoteles en Cuetzalan, Guias en Cuetzalan, recorridos en Cuetzalan, rutas en Cuetzalan, grutas en Cuetzalan, ruinas en Cuetzalan, zona arqueológica en Cuetzalan, Yohualichan, cabalgata en Cuetzalan, campamentos en Cuetzalan"> 
<META NAME="Keywords" CONTENT="Hospedaje en Cuetzalan, cultura en Cuetzalan, naturaleza en Cuetzalan, ecoturismo, ecoturismo en Cuetzalan, grutas, cavernas, espeleología, cascadas en Cuetzalan, rapel en Cuetzalan, rapel, rappel, rappel en Cuetzalan"> 
<META NAME="Keywords" CONTENT="Camping en Cuetzalan, visitar Cuetzalan, visitar Jonotla, grutas en Cuetzalan, aventura en Cuetzalan, caballos en cuetzalan, renta de caballos, guia turistico en Cuetzalan "> 
<META NAME="Geography" CONTENT="Mexico, Puebla, Cuetzalan"> 
<META NAME="Language" CONTENT="Spanish"> 
<META HTTP-EQUIV="Expires" CONTENT="never"> 
<META NAME="Copyright" CONTENT="Vmasideas"> 
<META NAME="Designer" CONTENT="Equipo Vmasideas"> 
<META NAME="Publisher" CONTENT="Vmasideas"> 
<META NAME="Revisit-After" CONTENT="10 days"> 
<META NAME="distribution" CONTENT="Global"> 
<META NAME="Robots" CONTENT="INDEX, FOLOW"> 
<META NAME="city" CONTENT="Puebla"> 
<META NAME="country" CONTENT="Mexico"> 
<link href="css/style.css" type="text/css" rel="stylesheet" />
<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Shanti">
<link href="css/pikachoose466.css" type="text/css" rel="stylesheet" />
<link href="calendar/calendar.css" rel="stylesheet" type="text/css" />
<link href="css/menu_style.css" type="text/css" rel="stylesheet" />
<script type="text/javascript" language="javascript" src="calendar/calendar.js"></script>
<script type="text/javascript" language="javascript" src=" https://ajax.googleapis.com/ajax/libs/jquery/1.6/jquery.js"></script>
<script type="text/javascript" language="javascript" src="js/jquery.pikachoose.js"></script>
<script type="text/javascript" language="javascript">
	$(document).ready(
		function (){
			$("#pikame").PikaChoose({carousel:true});
		});
</script>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-31368318-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

<title>Descubre Cuetzalan</title>

</head>

<body>
	<div id="fb-root"></div>
		<script>(function(d, s, id) {
			var js, fjs = d.getElementsByTagName(s)[0];
			if (d.getElementById(id)) return;
			js = d.createElement(s); js.id = id;
			js.src = "//connect.facebook.net/en_GB/all.js#xfbml=1&appId=109285792556735";
			fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));</script>
<?php
$url = "xml/promociones/promociones.xml";  
$contenido_xml = "";  
if($d = fopen($url, "r"))
{  
	while ($aux= fgets($d, 1024)){  
    $contenido_xml .= $aux;  
	}  
	fclose($d);  
}else
{  
	echo "No se pudo abrir el XML";  
}  
$xml = simplexml_load_string($contenido_xml);  
$promocion = $xml->promocion;
$promocion = str_replace("\n","<br>",$promocion);
?>

	<!-- SOY DIOS <(°-°)> -->
	<div id="god">
<?php include("menu.php");?>
  <!-- Contenedor General a dos columnas -->
    <div id="container">
    <!-- Columna 1 Index -->
      <div id="indexCol1">
      <!-- PAQUETES -->
      	<div id="paquetes">
        	<div id="tVerde"><a href="#">PAQUETES</a></div>
          <div id="paquetesCont">
            <p><em>Elige entre nuestras alternativas la opción que desees, realiza tu reservación y prepárate a vivir una mágica experiencia.</em></p>
            <br />
            <p>
              <span class="botonReverve"><a href="contacto.php" target="_self"><img src="imgs/boton.jpg" alt="Reservaciones" border="0" /></a></span><br />
            </p>
          </div>
        </div>
      <!-- VIDEOS -->
        <div id="videos">
        	<div id="tVerde"><a href="#">VIDEO</a></div>
          <iframe width="244" height="142" src="http://www.youtube.com/embed/j703fPv40Ww" frameborder="0" allowfullscreen></iframe>
        </div>
      <!-- CLIMA -->
      	<div id="tVerde"><a href="#">EL CLIMA</a></div>
        <div id="clima" style="text-align:center;">
        	<iframe allowtransparency="true" marginwidth="0" marginheight="0" hspace="0" vspace="0" frameborder="0" scrolling="no" src="http://mx.clima.yahoo.com/badge/?id=117900&u=c&t=trans&l=vertical" height="255px" width="236px"></iframe>
          <noscript><a href="http://mx.clima.yahoo.com/méxico/puebla/cuetzalan-117900/">Clima de Cuetzalan</a> proveido por <a href="http://mx.clima.yahoo.com">Yahoo! Weather</a></noscript><br /><br />
          <!-- Codigo contadorweb.com ver. 5.3 -->
					<script language="javascript" src="http://www.contadorweb.com/c6.php?digit=miniscu&page=ed69abe019ba497ecbd00c6b62ef1876"></script>
          <br><font size=1>No. de Visitantes</font>
          <!-- FIN Codigo contadorweb.com -->
        </div>
        
      </div>
    <!-- Columna 2 Index -->
      <div id="indexCol2">
      <!-- GALERIA -->
      	<div id="galeriaIndex">
        	<div class="pikachoose">
            <ul id="pikame" class="jcarousel-skin-pika">
              <li><img src="imgs/fotosIndex/imag1.jpg"/></li>
              <li><img src="imgs/fotosIndex/imag2.jpg"/></li>
              <li><img src="imgs/fotosIndex/imag3.jpg"/></li>
              <li><img src="imgs/fotosIndex/imag4.jpg"/></li>
              <li><img src="imgs/fotosIndex/imag5.jpg"/></li>
              <li><img src="imgs/fotosIndex/imag6.jpg"/></li>
              <li><img src="imgs/fotosIndex/imag7.jpg"/></li>
              <li><img src="imgs/fotosIndex/imag8.jpg"/></li>
              <li><img src="imgs/fotosIndex/imag9.jpg"/></li>
              <li><img src="imgs/fotosIndex/imag10.jpg"/></li>
              <li><img src="imgs/fotosIndex/imag11.jpg"/></li>
              <li><img src="imgs/fotosIndex/imag12.jpg"/></li>
              <li><img src="imgs/fotosIndex/imag13.jpg"/></li>
              <li><img src="imgs/fotosIndex/imag14.jpg"/></li>
              <li><img src="imgs/fotosIndex/imag15.jpg"/></li>
              <li><img src="imgs/fotosIndex/imag16.jpg"/></li>
              <li><img src="imgs/fotosIndex/imag17.jpg"/></li>
              <li><img src="imgs/fotosIndex/imag18.jpg"/></li>
              <li><img src="imgs/fotosIndex/imag19.jpg"/></li>
              <li><img src="imgs/fotosIndex/imag20.jpg"/></li>
              <li><img src="imgs/fotosIndex/imag21.jpg"/></li>
              <li><img src="imgs/fotosIndex/imag22.jpg"/></li>
              <li><img src="imgs/fotosIndex/imag23.jpg"/></li>
              <li><img src="imgs/fotosIndex/imag24.jpg"/></li>
              <li><img src="imgs/fotosIndex/imag25.jpg"/></li>
              <li><img src="imgs/fotosIndex/imag26.jpg"/></li>
              <li><img src="imgs/fotosIndex/imag27.jpg"/></li>
              <li><img src="imgs/fotosIndex/imag28.jpg"/></li>
              <li><img src="imgs/fotosIndex/imag29.jpg"/></li>
              <li><img src="imgs/fotosIndex/imag30.jpg"/></li>
              <li><img src="imgs/fotosIndex/imag31.jpg"/></li>
              <li><img src="imgs/fotosIndex/imag32.jpg"/></li>
              <li><img src="imgs/fotosIndex/imag33.jpg"/></li>
              <li><img src="imgs/fotosIndex/imag34.jpg"/></li>
              <li><img src="imgs/fotosIndex/imag35.jpg"/></li>
              <li><img src="imgs/fotosIndex/imag36.jpg"/></li>
              <li><img src="imgs/fotosIndex/imag37.jpg"/></li>
              <li><img src="imgs/fotosIndex/imag38.jpg"/></li>
              <li><img src="imgs/fotosIndex/imag39.jpg"/></li>
              <li><img src="imgs/fotosIndex/imag40.jpg"/></li>
              <li><img src="imgs/fotosIndex/imag41.jpg"/></li>
              <li><img src="imgs/fotosIndex/imag42.jpg"/></li>
              <li><img src="imgs/fotosIndex/imag43.jpg"/></li>
              <li><img src="imgs/fotosIndex/imag44.jpg"/></li>
            </ul>
          </div>
        </div>
      <!-- PROMOCIONES -->
        <div id="promociones">
        	<div id="tRojo"><a href="#">BIENVENIDO</a></div>
          <div id="promTexto1">
          	Estimado visitante, agradecemos su visita a Descubre Cuetzalan, empresa especializada en la organización de viajes en la Sierra Nororiental del Estado de Puebla. Queremos hacer de su conocimiento que en nuestro sitio web encontrará paquetes todo incluido dirigidos a familias, adultos mayores y jóvenes aventureros. También les informamos que tendrán la oportunidad de diseñar su propio paquete, para ello es necesario que entren a la sección de recorridos y elijan los que les agraden, así mismo entren a nuestra sección de hospedaje y escojan el hotel o cabaña que responda a sus intereses. Como verán les damos opciones atractivas, y sobre todo opciones que responden a sus necesidades, gustos y preferencias, y lo más importante, nadie se queda afuera, todos pueden participar sin excepción de edades.<br />
          </div>
          <div id="tRojo"><a href="#">EVENTOS</a></div>
          <div id="promTexto2">
          	<span class="tituloPormo"><?php echo $xml->titulo;?></span><br />
            <br />
            <em><?php echo $promocion; ?></em>
           
          </div>
        </div>  
     	</div>
         <div id="socialFB"><section class="indexFB">
						<div class="fb-like-box" data-href="https://www.facebook.com/pages/Descubre-Cuetzalan/233072616760802?fref=ts" data-width="466" data-height="500" data-show-faces="true" data-header="false" data-stream="true" data-show-border="false"></div>
					</section>
                    </div>
    </div>
  <!-- Pie de Pagina -->
  <?php include("pie_pagina.php"); ?>
	</div>
</body>
</html>