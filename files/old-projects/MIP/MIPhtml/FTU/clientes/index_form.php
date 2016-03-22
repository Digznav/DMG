<!-- <table>
	<tr>
		<td>Id</td>
		<td>Nombre</td>
		<td>Tipo</td>
	</tr>
	< ?php for ($i=0; count( $clientes ) > $i ; $i++) {
		$cliente = $clientes[$i]; ?>
	<tr>
		<td><a href="editar.php?id=< ?php echo $cliente->id; ?>">< ?php echo $cliente->id; ?></a></td>
		<td>< ?php echo $cliente->nombre; ?></td>
		<td>< ?php echo $cliente->tipo; ?></td>
		<td><a href="borrar.php?id=< ?php echo $cliente->id; ?>">Borrar Cliente</a></td>
	</tr>
	< ?php } ?>
	<tr>
		<td colspan ="3"><a href="alta.php">Alta de cliente</a></td>
	</tr>
</table> -->
<script language="javascript">
function eliminaRegistro( newActionValue, id ){
	var returnValue = confirm("\u00BFEst\u00e1 seguro de eliminar este registro?");
	if ( returnValue )
	{
		$("#forma_borrar").attr("action", "borrar.php");
		$("#action").attr("value", newActionValue);
		$("#idCliente").attr("value", id);
		$("#forma_borrar").submit();
	}
}
</script>
<h2 class="titleCMS">Administración de clientes</h2>
<div class="contentCMS">
	<a href="alta.php" class="isButton addButton safeMargin"><span></span><span>Alta de cliente</span></a>
	<form method="post" id="forma_borrar" name="forma_borrar" >
	<input type="hidden" name="action"  id="action" />
	<input type="hidden" name="idCliente" id="idCliente" value="" />
	</form>
	<table class="tableFormat">
		<thead>
			<tr>
				<th>Id</th>
				<th>Nombre</th>
				<th>Tipo</th>
				<th></th>
			</tr>
		</thead>
		<tbody>
			<?php for ( $i=0; count( $clientes ) > $i ; $i++ ) {
			$cliente = $clientes[$i]; ?>
			<tr>
				<td><a href="editar.php?id=<?php echo $cliente->id; ?>"><?php echo $cliente->id; ?></a></td>
				<td><a href="editar.php?id=<?php echo $cliente->id; ?>"><?php echo $cliente->nombre; ?></a></td>
				<td><?php echo $cliente->tipo; ?></td>
				<td>
				<!-- 	<a href="borrar?id=<?php echo $cliente->id; ?>" class="isButton removeButton"> -->
					<a href="javascript:eliminaRegistro( 'removeCliente','<?php echo $cliente->id;?>' )" class="isButton removeButton">
						
						<span></span>
						<span>Borrar cliente</span>
					</a>
				</td>
			</tr>
			<?php } ?>
		</tbody>
	</table>
</div>