<?php
	$file = 'lib/news.json';
	$jsonNews = json_decode(file_get_contents($file), true);
	$miniNews = '';
	$completeNews = '';
	$miniNews .= '<header>Noticias</header>';

	foreach ($jsonNews['news'] as $key) {
		if ($key['id'] != 0) {
			$miniNews .= '<article id="news' . $key['id'] . '">';
				$miniNews .= '<h2>' . $key['Encabezado'] . '</h2>';
				$miniNews .= '<h3>' . $key['Mes'].' '.$key['Dia'].', '.$key['Anio'] . '</h3>';
				$miniNews .= '<p>' . $key['Resumen'] . '</p>';
				$miniNews .= '<a href="#cNews' . $key['id'] . '">Saber +</a>';
			$miniNews .= '</article>';
			$completeNews .= '<div class="completeNew" id="cNews' . $key['id'] . '">';
				$completeNews .= '<h2>' . $key['Encabezado'] . '</h2>';
				$completeNews .= '<h3>' . $key['Mes'].' '.$key['Dia'].', '.$key['Anio'] . '</h3>';
				$completeNews .= '<p>' . $key['Contenido'] . '</p>';
			$completeNews .= '</div>';
		}
	}
	$miniNews .= '<footer><a href="Noticias">Ver historial de noticias</a></footer>';
	echo $miniNews;
?>