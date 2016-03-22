<?php
  header("Expires: Tue, 01 Jul 2001 06:00:00 GMT");
  header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
  header("Cache-Control: no-store, no-cache, must-revalidate");
  header("Cache-Control: post-check=0, pre-check=0", false);
  header("Pragma: no-cache");
?>
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
<!--lee xml -->
<?php
$url = "xml/hospedaje/campamentos/campamento2.xml";  
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
$adicionales = $xml->adicionales;
$adicionales = str_replace("\n","<br>",$adicionales);
$descripcion = $xml->descripcion;
$descripcion = str_replace("\n","<br>",$descripcion);
$restricciones = $xml->restricciones;
$restricciones = str_replace("\n","<br>",$restricciones);
$aclaracion = $xml->aclaracion;
$aclaracion = str_replace("\n","<br>",$aclaracion);
$o=0;
foreach ($xml->caracteristica as $caracteristicas)
{  
	$col1[$o] = $caracteristicas->car1;
	$col1[$o] = str_replace("\n","<br>",$col1[$o]);
	$col2[$o] = $caracteristicas->car2;
	$col2[$o] = str_replace("\n","<br>",$col2[$o]);
	$col3[$o] = $caracteristicas->car3;
	$col3[$o] = str_replace("\n","<br>",$col3[$o]);
	$o++;
}
?>
	<!-- SOY DIOS <(°-°)> -->
	<div id="god">
    <?php include("menu.php");?>
  <!-- Contenedor General a dos columnas -->
    <div id="container">
    <!-- Fila 1 Contenido -->
    	<div id="contFila1">
      	<div id="tRojo"><a href="#">POSADAS</a></div>
        <div id="contenidoCrema">
          <div id="cremaIzq"></div>
          <div id="cremaDer"><span class="botonReverve"><a href="contacto.php" target="_self"><img src="imgs/boton.jpg" alt="Reservaciones" border="0" /></a></span><br /></div>
        </div>
        <div class="pikachoose">
        	<ul id="pikame" class="jcarousel-skin-pika">
          		<?php
				for ($r=0;$r<$xml->imagenes;$r++){
				?>
					<li><img src="imgs/hospedaje/campamentos/campamento2/imag<?php echo $r+1;?>.jpg"/></li>
				<?php
				}
				?>
        	</ul>
    	</div>
    </div>
    <!-- Fila 2 Contenido -->
    	<div id="contFila2">
      	<div id="tVerde"><a href="#"><?php echo $xml->nombre;?></a></div>
        <div id="promTexto2">
        	<?php echo $descripcion;?>
          <br />
          <br />
          <table cellspacing="0" cellpadding="0" class="formatoTabla" width="100%">
            <tr class="tituloTabla">
              <td width="235"><?php echo $xml->tit1; ?></td>
              <td width="235"><?php echo $xml->tit2; ?></td>
              <td width="235"><?php echo $xml->tit3; ?></td>              
            </tr>
            <?php
            for($o=0;$o<count($col1);$o++){
				?>
				<tr>
                  <td align="left" valign="middle" class="verdeMasClaro"><?php echo $col1[$o];?></td>
                  <td align="center" valign="middle" class="verdeMuchoMasClaro"><?php echo $col2[$o];?></td>
                  <td align="center" valign="middle" class="verdeMasClaro"><?php echo $col3[$o];?></td>
                </tr>
			<?php
			}
			?>                       
          </table>
          <br/>
          
          <i><?php echo $aclaracion;?></i>
          <table cellspacing="0" cellpadding="0" align="center" width="600" class="formatoTabla">
            <tr class="tituloTabla">
              <td>SERVICIOS ADICIONALES</td>
            </tr>
            <tr class="verdeMuchoMasClaro">
              <td align="left"><?php echo $adicionales;?></td>
            </tr>
          </table>
          <br />
          <table cellspacing="0" cellpadding="0" align="center" width="600" class="formatoTabla">
            <tr class="tituloTabla">
              <td>RESTRICCIONES</td>
            </tr>
            <tr class="verdeMuchoMasClaro">
              <td align="left"><?php echo $restricciones;?></td>
            </tr>
          </table>
        </div>
      </div>
    </div>
	<!-- Pie de Pagina -->
    <?php include("pie_pagina.php");?>
	</div>
</body>
</html>