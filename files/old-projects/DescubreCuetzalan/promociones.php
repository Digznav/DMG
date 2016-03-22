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
<title>Descubre Cuetzalan</title>
</head>
<body>
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
            <!-- Fila 1 Contenido -->
            <div id="contFila1">
                <div id="tRojo"><a href="#"><?php echo $xml->titulo;?></a></div>
            </div>
            <!-- Fila 2 Contenido -->
            <div id="contFila2">
                <div id="promTexto2">
					<?php echo $promocion;?>
                </div>
            </div>
        </div>
        <!-- Pie de Pagina -->
        <?php include("pie_pagina.php");?>
    </div>
</body>
</html>