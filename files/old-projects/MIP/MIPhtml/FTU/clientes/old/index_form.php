<table>
	<tr>
		<td>Id</td>
		<td>Nombre</td>
		<td>Tipo</td>
	</tr>
<?php 
for ( $i=0; count( $clientes ) > $i ; $i++ )
{
	$cliente = $clientes[$i]; 
?>
	<tr>
		<td><a href="editar.php?id=<?php echo $cliente->id; ?>"><?php echo $cliente->id; ?></a></td>
		<td><?php echo $cliente->nombre; ?></td>
		<td><?php echo $cliente->tipo; ?></td>
		<td><a href="borrar.php?id=<?php echo $cliente->id; ?>">Borrar Cliente</a></td>
	</tr>
<?php
}
?>
	<tr>
		<td colspan ="3"><a href="alta.php">Alta de cliente</a></td>
	</tr>
</table>