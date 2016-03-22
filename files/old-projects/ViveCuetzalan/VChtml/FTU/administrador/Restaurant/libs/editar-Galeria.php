<?php
$count = 1;
$galeriaRestaurant = DAOFactory::getFotosRestDAO()->queryByIdRest( $idRestaurant );

if ( isset($_GET['delImg']) && $_GET['delImg'] != '' ) {
	DAOFactory::getFotosRestDAO()->delete($_GET['delImg']);
	header('Refresh:1; url=editar.php?id='.$idRestaurant.'&action=modGallery');
};
if ( isset($_POST['guardar-Galeria']) ) {
	$folderName = $imgFolder;
	$allowedExts = array('jpg', 'jpeg', 'png');
	$max_file_size = 1024*500; //100 kb
	$cnt = $_POST['lastImg']+1;

	// Loop $_FILES to exeicute all files
	foreach ($_FILES['imagenes']['name'] as $f => $name) {
		$fileName = 'img'.$idRestaurant.'-'.$cnt;
		$path = '../../imgs/dondecomer/'.$folderName.'/';
		$xt = explode( '.', $name );
		$ext = end($xt);

		if ($_FILES['imagenes']['error'][$f] == 4) {
			continue; // Skip file if any error found
		}
		if ($_FILES['imagenes']['error'][$f] == 0) {
			/*if ($_FILES['imagenes']['size'][$f] > $max_file_size) {
				$message[] = "$name is too large!.";
				continue; // Skip large files
			}*/
			if( ! in_array(pathinfo($name, PATHINFO_EXTENSION), $allowedExts) ) {
				$message[] = "$name is not a valid format";
				continue; // Skip invalid file formats
			}
			else{ // No error found! Move uploaded files
				$fileName.='.'.$ext;
				if(move_uploaded_file($_FILES['imagenes']['tmp_name'][$f], $path.$fileName)) {
					$cnt++; // Number of successfully uploaded file
					$fotos_Restaurant = new FotosRest();
					$fotos_Restaurant->idRest = $idRestaurant;
					$fotos_Restaurant->foto = 'imgs/dondecomer/'.$folderName.'/'.$fileName;
					DAOFactory::getFotosRestDAO()->insert($fotos_Restaurant);
				}
			}
		}
	}

	//header('Refresh:1; url=editar.php?id='.$idRestaurant);
	echo '<script type="text/javascript">alert("Las modificiones se han guardado exitosamente."); window.location.replace("editar.php?id='.$idRestaurant.'");</script>';
	//echo '<script type="text/javascript">alert("Las modificiones se han guardado exitosamente."); window.location.reload();</script>';
}
?>
<h2 class="sectionTitle">Galería de imágenes</h2>

<ul class="galleryList clearfix">
	<?php foreach ($galeriaRestaurant as $value) { ?>
	<li class="img-li" data-num-img="<?php echo $count; ?>">
		<a <?php echo 'href="editar.php?id='.$idRestaurant.'&action=modGallery&delImg='.$value->id.'"'; ?>
		<a href="#" class="deleteImg" data-id="<?php echo $value->id; ?>" data-id-hotel="<?php echo $value->idRest; ?>" onclick="return confirm('¿Estas seguro de eliminar esta imagen?')">
			<img src="../../<?php echo $value->foto; ?>" alt="Imagen de galería">
			<span>Eliminar imagen</span>
		</a>
	</li>
	<?php $count++;
	$gname = explode('/',$value->foto);
	$prvnm = explode('-', $gname[3]);
	$lstImgNum = $prvnm[1][0];
	} ?>
</ul>

<form action="" method="POST" enctype="multipart/form-data">
	<table class="tableFormat">
		<thead>
			<tr><th>&nbsp;</th><th>Agregar imágenes</th></tr>
		</thead>
		<tbody id="ObjectsList">
			<tr class="obj-li" data-num-obj="1">
				<td></td>
				<td><input type="file" name="imagenes[]" accept="image/*"></td>
			</tr>
		</tbody>
		<tfoot><tr><td><button type="button" id="addImg" class="isButton symb-icon icoZoominfill">Añadir imagen</button></td></tr></tfoot>
	</table>
	<input type="hidden" name="lastImg" value="<?php echo $lstImgNum; ?>">
	<a href="editar.php?id=<?php echo $idRestaurant; ?>" class="isButton symb-icon icoClosefill">Cancelar</a>
	<button type="submit" name="guardar-Galeria" class="isButton symb-icon icoCloudup">Guardar y regresar</button>
</form>

<script type="text/javascript">
	jQuery(function($){
		function showTitle () { $(this).find('span').stop().slideToggle('fast'); }
		function hideTitle () { $(this).find('span').stop().slideToggle('fast'); }

		$('.galleryList a').bind({
			mouseenter: showTitle,
			mouseleave: hideTitle
		});

		$('#addImg').click(function() {
			var lstNm = $('#ObjectsList .obj-li').last().data('num-obj') + 1;
			var htmlInput = '<tr class="obj-li" data-num-obj="'+lstNm+'"><td><a href="#" class="deleteRow symb-icon icoCloseoutline"></a></td><td><input type="file" name="imagenes[]" accept="image/*"></td></tr>';
			$('#ObjectsList').append(htmlInput);
		});
	});
</script>