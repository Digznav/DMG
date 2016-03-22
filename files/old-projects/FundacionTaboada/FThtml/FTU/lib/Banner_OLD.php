<?php
	$file = 'lib/banner.json';
	$jsonBanner = json_decode(file_get_contents($file), true);
	$imgInGallery = 52;
	$galeryPath = $jsonBanner['banner'];
	foreach ($galeryPath as $key) {
		echo '<li><img src="imgs/' . $key['image'] . '" alt="' . $key['image'] . '"><span>' . $key['titulo'] . '</span></li>';
	}
?>