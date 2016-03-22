<?php
	$file = 'lib/gallery.json';
	$jsonGallery = json_decode(file_get_contents($file), true);
	$imgInGallery = 52;
	$imgGeneralURL = $jsonGallery['galleryURL'][0]['url'];
	$galeryPath = $jsonGallery['gallery'];
	for ($i=0; $i < $imgInGallery; $i++) { 
		echo '<li><img src="' . $imgGeneralURL . $galeryPath[$i]['imagen'] . '" alt="' . $galeryPath[$i]['imagen'] . '"><span>' . $galeryPath[$i]['titulo'] . '</span></li>';
	}
?>