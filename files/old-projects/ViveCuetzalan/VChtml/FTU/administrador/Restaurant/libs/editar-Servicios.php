<?php
$count = 1;
$serviciosGenerales = DAOFactory::getServiciosRestDAO()->queryByIdRest( $idRestaurant );
if ( isset($_POST['guardar-Servicios']) ) {
	DAOFactory::getServiciosRestDAO()->deleteByIdRest($idRestaurant);

	foreach ($_POST['servicios'] as $value) {
		if ( !ctype_space($value['descrip']) && $value['descrip'] != '' ) {
			$serv_Restaurant = new ServiciosRest();

			$serv_Restaurant->idRest = $idRestaurant;
			$serv_Restaurant->descripcion = $value['descrip'];
			if (!isset($value['sn']) || $value['sn'] == '') { $bve=0; }
			else { $bve=(int)$value['sn']; }
			$serv_Restaurant->datoExtra = $bve;
			$serv_Restaurant->tarifa = floatval($value['tarifa']);
			if (!isset($value['comentario']) || $value['comentario'] == '') { $bvc=NULL; }
			else { $bvc=$value['comentario']; }
			$serv_Restaurant->comentarios = $bvc;
			DAOFactory::getServiciosRestDAO()->insert( $serv_Restaurant );
		}
	}

	//header('Refresh:1; url=editar.php?id='.$idRestaurant);
	echo '<script type="text/javascript">alert("Las modificiones se han guardado exitosamente."); window.location.replace("editar.php?id='.$idRestaurant.'");</script>';
	//echo '<script type="text/javascript">alert("Las modificiones se han guardado exitosamente."); window.location.reload();</script>';
}
?>
<h2 class="sectionTitle">Servicios generales</h2>

<form action="" method="POST">
	<p>Los cambios que realice se guardarán hasta que oprima el botón "Guardar y regresar".</p>
	<table class="tableFormat">
		<thead>
			<tr><th>&nbsp;</th><th>Servicio</th><th>S/N</th><th>Tarifa</th><th>Comentario</th></tr>
		</thead>
		<tbody id="ObjectsList">
			<?php foreach ($serviciosGenerales as $value) { ?>
			<tr class="obj-li" data-num-obj="<?php echo $count; ?>">
				<td>
					<a href="#" class="deleteRow symb-icon icoCloseoutline"></a>
					<input type="hidden" name="servicios[serv<?php echo $count; ?>][id]" value="<?php echo $value->id; ?>">
					<input type="hidden" name="servicios[serv<?php echo $count; ?>][idRest]" value="<?php echo $value->idRest; ?>">
				</td>
				<td><input type="text" name="servicios[serv<?php echo $count; ?>][descrip]" placeholder="Descripción" value="<?php echo $value->descripcion; ?>"></td>
				<td><input type="checkbox" name="servicios[serv<?php echo $count; ?>][sn]" value="1" <?php if ($value->datoExtra) { echo 'checked'; } ?> ><label>Sí</label></td>
				<td>$<input type="text" name="servicios[serv<?php echo $count; ?>][tarifa]" placeholder="00.00 (Opcional)" value="<?php echo $value->tarifa; ?>"></td>
				<td><textarea name="servicios[serv<?php echo $count; ?>][comentario]" placeholder="Comentario (Opcional)" cols="50"><?php echo $value->comentarios; ?></textarea></td>
			</tr>
			<?php $count++;
			} ?>
		</tbody>
		<tfoot><tr><td colspan="3"><button type="button" id="addServ" class="isButton symb-icon icoZoominfill">Añadir campo</button></td></tr></tfoot>
	</table>

	<a href="editar.php?id=<?php echo $idRestaurant; ?>" class="isButton symb-icon icoClosefill">Cancelar</a>
	<button type="submit" name="guardar-Servicios" class="isButton symb-icon icoCloudup">Guardar y regresar</button>
</form>

<script type="text/javascript">
	jQuery(function($){
		$('#addServ').click(function() {
			var lstNm = $('#ObjectsList .obj-li').last().data('num-obj') + 1;
			var htmlInput = '<tr class="obj-li" data-num-obj="'+lstNm+'"><td><a href="#" class="deleteRow symb-icon icoCloseoutline"></a></td><td><input type="text" name="servicios[serv'+lstNm+'][descrip]" placeholder="Descripción"></td><td><input type="checkbox" name="servicios[serv'+lstNm+'][sn]" value="1" checked><label>Sí</label></td><td>$<input type="text" name="servicios[serv'+lstNm+'][tarifa]" placeholder="00.00 (Opcional)"></td><td><textarea name="servicios[serv'+lstNm+'][comentario]" placeholder="Comentario (Opcional)" cols="50"></textarea></td></tr>';
			$('#ObjectsList').append(htmlInput);
		});
	});
</script>