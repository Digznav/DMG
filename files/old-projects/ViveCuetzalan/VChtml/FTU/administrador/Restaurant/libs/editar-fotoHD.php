<?php
$restaurant = DAOFactory::getRestaurantesDAO()->load( $idRestaurant );

if ( isset($_POST['guardar-fotoHD']) ) {
	//$restaurant->fotoHd = $_POST['habitaciones'];
	$vc2 = explode('/',$restaurant->fotoHd);
	$fileNameFotoHD = array_pop($vc2);
	
	if ($_FILES['fotoHD']['name'] != "" ){
		$folderName = $imgFolder;
		$provName = explode('.',$fileNameFotoHD);
		$fileName = $provName[0];
		$ext = explode( '.', $_FILES['fotoHD']['name'] );
		$extension = end($ext);

		//Image validation
		if ((($_FILES['fotoHD']['type'] == 'image/jpeg') || ($_FILES['fotoHD']['type'] == 'image/png') || ($_FILES['fotoHD']['type'] == 'image/pjpeg')) && in_array($extension, $allowedExts)) {
			if ( $_FILES['fotoHD']['error'] == 0 ) {
				$dirURL = '../../imgs/dondecomer/'.$folderName.'/';
				$uploadFile = $dirURL.$fileName.'.'.$extension;
				$upload = move_uploaded_file( $_FILES['fotoHD']['tmp_name'],$uploadFile);
				if ($upload) {
					$restaurant->fotoHd = 'imgs/dondecomer/'.$folderName.'/'.$fileName.'.'.$extension;
					DAOFactory::getRestaurantesDAO()->update($restaurant);

					//header('Refresh:1; url=editar.php?id='.$idRestaurant);
					echo '<script type="text/javascript">alert("Las modificiones se han guardado exitosamente."); window.location.replace("editar.php?id='.$idRestaurant.'");</script>';
					//echo '<script type="text/javascript">alert("Las modificiones se han guardado exitosamente."); window.location.reload();</script>';
				}
			} else { echo 'Impossible to upload the image, try again'; return false; };
		} else { echo 'Invalid file, try again'; return false; };
	} else { echo "No file found"; };

}
?>
<h2 class="sectionTitle">Imagen de fondo</h2>
<form action="" method="POST" enctype="multipart/form-data">
	<table class="tableFormat">
		<tbody>
			<tr>
				<td>
					<div class="editImgHD"><img src="../../<?php echo $restaurant->fotoHd; ?>" alt="fotoHD"></div>
					<p>Seleccione otra imagen para sustituir la imagen de fondo anterior</p>
					<input type="file" name="fotoHD" id="fotoHD" accept="image/*">
				</td>
			</tr>
		</tbody>
	</table>
	<a href="editar.php?id=<?php echo $idRestaurant; ?>" class="isButton symb-icon icoClosefill">Cancelar</a>
	<!-- <a href="editar.php?action=guardar" class="isButton symb-icon icoCloudup">Guardar y regresar</a> -->
	<button type="submit" name="guardar-fotoHD" class="isButton symb-icon icoCloudup">Guardar y regresar</button>
</form>