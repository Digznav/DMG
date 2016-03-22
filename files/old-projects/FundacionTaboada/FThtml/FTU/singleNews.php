<?php
	$newSelected = $_GET['id'] ;
	$file = 'lib/news.json';
	$jsonNews = json_decode(file_get_contents($file), true);
	$completeNews = '';
	foreach ($jsonNews['news'] as $key) {
		if ($key['id'] == $newSelected) {
			$completeNews .= '<div>';
				$completeNews .= '<h2>' . $key['Encabezado'] . '</h2>';
				$completeNews .= '<h3>' . $key['Fecha'] . '</h3>';
				$completeNews .= '<p>' . $key['Contenido'] . '</p>';
			$completeNews .= '</div>';
		}
	}
	echo $completeNews;
?>