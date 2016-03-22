<script languge="javascript">
function eliminaRegistro( newActionValue, id ){
	var returnValue = confirm("\u00BFEst\u00e1 seguro de eliminar este registro?");
	if ( returnValue )
	{
		$("#forma_borrar").attr("action", "borrar.php");
		$("#action").attr("value", newActionValue);
		$("#idReporte").attr("value", id);
		$("#forma_borrar").submit();
	}
}
</script>
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
<h2 class="titleCMS">Administración de reportes</h2>
<h2><a href="http://pdfcrowd.com/url_to_pdf/">Convert this page to a PDF</a></h2>
<div class="contentCMS">
	<a href="alta.php" class="isButton addButton safeMargin"><span></span><span>Alta de reportes</span></a>
	<form method="post" id="forma_borrar" name="forma_borrar" >
	<input type="hidden" name="action"  id="action" />
	<input type="hidden" name="idReporte" id="idReporte" value="" />
	</form>
	<table class="tableFormat">
		<thead>
			<tr>
				<!-- <th>Id</th> -->
				<th>Folio</th>
				<th>Cliente</th>
				<th>Tecnico</th>
				
				<th>Propuesta</th>
				<th>Responsable</th>
				<th>Fecha Compromiso</th>
				<th>Accion</th>
				<!-- <th>Foto Inicial</th>
				<th>Foto Final</th> -->
				<!-- <th>Codigo Google</th> 
				<th>Comentarios</th>
				<th>Fecha</th>
				<th>Hora</th>-->
				<th>Status</th>
				<!-- <th>Timestamp</th> -->
				<th></th>		
			</tr>
		</thead>
		<tbody>
			<?php for ( $i=0; count( $reportes ) > $i ; $i++ ) {
			$reporte = $reportes[$i]; ?>
			<tr>
				<td><a href="editar.php?id=<?php echo $reporte->id; ?>"><?php echo $reporte->folio; ?></a></td>
				<!-- <td><a href="editar.php?id=<?php echo $reporte->id; ?>"><?php echo $reporte->Id; ?></a></td> -->
				<td><?php echo $reporte->idCliente; ?></td>
				<td><?php echo $reporte->idTecnico; ?></td>
				
				<td><?php echo $reporte->propuesta; ?></td>
				<td><?php echo $reporte->responsable; ?></td>
				<td><?php echo $reporte->fechaCompromiso; ?></td>
				<td><?php echo $reporte->accion; ?></td>
				<!-- <td><?php echo $reporte->Foto_Inicial; ?></td>
				<td><?php echo $reporte->Foto_Final; ?></td> -->
				<!-- <td><?php echo $reporte->CodigoGoogle; ?></td> -->
				<!-- <td><?php echo $reporte->Comentarios; ?></td> 
				<td><?php echo $reporte->Fecha; ?></td>
				<td><?php echo $reporte->Hora; ?></td>-->
				<td><?php echo $reporte->status; ?></td>
				<!-- <td><?php echo $reporte->Timestamp; ?></td> -->
				<td>
					<!-- <a href="borrar?id=<?php echo $reporte->id; ?>" class="isButton removeButton"> -->
					<a href="javascript:eliminaRegistro( 'removeReporte','<?php echo $reporte->id;?>' )" class="isButton removeButton">
						<span></span><span>Borrar reporte</span>
					</a>
				</td>
			</tr>
			<?php } ?>
		</tbody>
	</table>
</div>
