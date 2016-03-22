<script languge="javascript">
function eliminaRegistro( newActionValue, id ){
	var returnValue = confirm("\u00BFEst\u00e1 seguro de eliminar este registro?");
	if ( returnValue )
	{
		$("#forma_borrar").attr("action", "borrar.php");
		$("#action").attr("value", newActionValue);
		$("#idTecnico").attr("value", id);
		$("#forma_borrar").submit();
	}
}
</script>
<h2 class="titleCMS">Administraci&oacute;n de t&eacute;cnicos</h2>
<div class="contentCMS">
	<a href="alta.php" class="isButton addButton safeMargin"><span></span><span>Alta de t&eacute;cnicos</span></a>
	<form method="post" id="forma_borrar" name="forma_borrar" >
	<input type="hidden" name="action"  id="action" />
	<input type="hidden" name="idTecnico" id="idTecnico" value="" />
	</form>
	<table class="tableFormat">
		<thead>
			<tr>
				<th>Id</th>
				<th>Nombre</th>
				<th>E-Mail</th>
				<th>Tel&eacute;fono</th>
				<th>Acceso</th>
				<th>&nbsp;</th>
			</tr>
		</thead>
		<tbody>
			<?php for ( $i=0; count( $tecnicos ) > $i ; $i++ ) {
			$tecnico = $tecnicos[$i]; ?>
			<tr>
				<td><a href="editar.php?id=<?php echo $tecnico->id; ?>"><?php echo $tecnico->id; ?></a></td>
				<td><a href="editar.php?id=<?php echo $tecnico->id; ?>"><?php echo $tecnico->nombre; ?></a></td>
				<td><?php echo $tecnico->email; ?></td>
				<td><?php echo $tecnico->tel; ?></td>
				<td><?php echo $tecnico->acceso; ?></td>
				<td>
					<!-- <input type="button" value="Eliminar" onclick="javascript:eliminaRegistro( 'removeTecnico','<?php echo $tecnico->id;?>' )"/> -->
					<a href="javascript:eliminaRegistro( 'removeTecnico','<?php echo $tecnico->id;?>' )" class="isButton removeButton">
						<span></span>
						<span>Borrar técnico</span>
					</a>
				</td>
			</tr>
			<?php } ?>
		</tbody>
	</table>
	
</div>