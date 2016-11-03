<?php
$xmlgeneral = fopen ("../../xml/menu/menu.xml", "w");
if (!$xmlgeneral) {
	echo "No se pudo abrir el archivo XML.";
    exit;
}
fwrite ($xmlgeneral, '<?xml version="1.0" encoding="utf-8" standalone="yes"?> <menu>');
for($i=1;$i<5;$i++){
	$url = "../../xml/rutas/info/ruta".$i.".xml";  
	$contenido_xml = "";  
	if($d = fopen($url, "r"))
	{  
		while ($aux= fgets($d, 1024))
		{  
    		$contenido_xml .= $aux;  
		}  
		fclose($d);  
	}else
	{  
		echo "No se pudo abrir el archivo ruta".$i.".xml";  
	}  
	$contenidoxml = simplexml_load_string($contenido_xml);  
	$eltit = $contenidoxml->titulo;	   
	fwrite ($xmlgeneral, '<ruta'.$i.'>'.$eltit.'</ruta'.$i.'>');
}

for($i=1;$i<3;$i++){
	$url = "../../xml/paquetes/aventura/aventura".$i.".xml";  
	$contenido_xml = "";  
	if($d = fopen($url, "r"))
	{  
		while ($aux= fgets($d, 1024))
		{  
    		$contenido_xml .= $aux;  
		}  
		fclose($d);  
	}else
	{  
		echo "No se pudo abrir el archivo aventura".$i.".xml";  
	}  
	$contenidoxml = simplexml_load_string($contenido_xml);  
	$eltit = $contenidoxml->titulo;	   
	fwrite ($xmlgeneral, '<aventura'.$i.'>'.$eltit.'</aventura'.$i.'>');
}
for($i=1;$i<6;$i++){
	$url = "../../xml/paquetes/naturaleza/naturaleza".$i.".xml";  
	$contenido_xml = "";  
	if($d = fopen($url, "r"))
	{  
		while ($aux= fgets($d, 1024))
		{  
    		$contenido_xml .= $aux;  
		}  
		fclose($d);  
	}else
	{  
		echo "No se pudo abrir el archivo naturaleza".$i.".xml";  
	}  
	$contenidoxml = simplexml_load_string($contenido_xml);  
	$eltit = $contenidoxml->titulo;	   
	fwrite ($xmlgeneral, '<naturaleza'.$i.'>'.$eltit.'</naturaleza'.$i.'>');
}


fwrite ($xmlgeneral, '</menu>');

if (fclose ($xmlgeneral)){
	
    } else {
      exit ("Error escribiendo el XML");
}
?>