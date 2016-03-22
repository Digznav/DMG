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
<link href="css/pikachoose750.css" type="text/css" rel="stylesheet" />
<link href="css/menu_style.css" type="text/css" rel="stylesheet" />
<script type="text/javascript" src=" https://ajax.googleapis.com/ajax/libs/jquery/1.6/jquery.js"></script>
<script type="text/javascript" src="js/jquery.pikachoose.js"></script>
<script language="javascript">
	$(document).ready(
		function (){
			$("#pikame").PikaChoose({carousel:true});
		});
</script>
<script type="text/javascript">
	if (document.getElementById){
		document.write('<style type="text/css">\n')
		document.write('.dropcontent{display:none;}\n')
		document.write('</style>\n')
	}
	
	function contractall(){
		if (document.getElementById){
			var inc=0
			while (document.getElementById("dropmsg"+inc)){
				document.getElementById("dropmsg"+inc).style.display="none"
				inc++
			}
		}
	}
	function expandone(){
		if (document.getElementById){
			var selectedItem=document.dropmsgform.dropmsgoption.selectedIndex
			contractall()
			document.getElementById("dropmsg"+selectedItem).style.display="block"
		}
	}
	
	if (window.addEventListener)
	window.addEventListener("load", expandone, false)
	else if (window.attachEvent)
	window.attachEvent("onload", expandone)
</script>
<title>Descubre Cuetzalan</title>
</head>
<body>
<?php
$url = "xml/paquetes/naturaleza/naturaleza4.xml";  
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
$inclu = $xml->incluye;
$inclu=str_replace("\n","<br>•&nbsp;&nbsp;&nbsp;&nbsp;",$inclu);
$reco = $xml->recorrido;
$reco = str_replace("\n","<br>",$reco);
$cos = $xml->costo;
$cos = str_replace("\n","<br>•&nbsp;&nbsp;&nbsp;&nbsp;",$cos);
?>

    <!-- SOY DIOS <(°-°)> -->
    <div id="god">
    <?php include("menu.php");?>
        <!-- Contenedor General a dos columnas -->
        <div id="container">
            <!-- Fila 1 Contenido -->
            <div id="contFila1">
                <div id="tRojo"><a href="#">PAQUETES NATURALEZA Y CULTURA</a></div>
                <div id="contenidoCrema">
                    <div id="cremaIzq"></div>
                    <div id="cremaDer"><span class="botonReverve"><a href="contacto.php" target="_self"><img src="imgs/boton.jpg" alt="Reservaciones" border="0" /></a></span><br /></div>
                </div>
                <div class="pikachoose">
                    <ul id="pikame" class="jcarousel-skin-pika">

<?php
						for ($r=0;$r<$xml->imagenes;$r++){
?>
                			<li><img src="imgs/Paquetes/naturaleza/4/imag<?php echo $r+1;?>.jpg"/></li>
<?php
            			}
?>
                    </ul>
                </div>
            </div>
            <!-- Fila 2 Contenido -->
            <div id="contFila2">
            	<div id="tVerde"><a href="#"><?php echo $xml->titulo;?></a></div>
            	<div id="promTexto2">
                	<span class="tituloPormo">Dirigido a: </span><?php echo $xml->dirigido;?><br />
                    <hr />
                    <span class="tituloPormo">Duración: </span><?php echo $xml->duracion;?><br />
                    <hr>
                    <span class="tituloPormo">Incluye:</span><br>
                    <div style="margin-left:25px; margin-top:0px;">•&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $inclu;?></div>
                    <hr />
                    <span class="tituloPormo">Recorrido:</span><br />
                    <div style="margin-left:25px; margin-top:0px;"><?php echo $xml->recorrido;?></div>
                    <hr />
                    <span class="tituloPormo">Costo: </span><br />
	                <div style="margin-left:25px; margin-top:0px;">•&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $cos;?></div>
    	            <hr />
        	        <span class="tituloPormo">Mínimo: </span><?php echo $xml->minimo;?><br />
            	</div>
            </div>
        </div>
        <!-- Pie de Pagina -->
		<?php include("pie_pagina.php");?>
    </div>
</body>
</html>