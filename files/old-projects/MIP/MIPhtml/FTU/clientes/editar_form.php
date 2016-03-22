<script type="text/javascript">

function elimina(idAction,newActionValue) {
	var returnValue = confirm("¿Está seguro de eliminar este registro?");
	if (returnValue) { $(idAction).attr("value", newActionValue); };
	return returnValue;
}

function loadlist(selobj,url,valueAttr, textAttr)
{
    $(selobj).empty();
    $.getJSON(url,{},function(data)
    {
        $.each(data, function(i,obj)
        {
            $(selobj).append(
                 $('<option></option>')
                        .val(obj[valueAttr])
                        .html(obj[textAttr]));
        });
    });
}
</script>



<h2 class="titleCMS">Cliente</h2>
<div class="contentCMS">
	<form method="POST">
		<input type="hidden" name="action" value="updCliente">
		<table class="tableFormat">
			<tbody>
				<tr>
					<td><label>ID</label></td>
					<td><strong><?php echo $cliente->id; ?></strong></td>
				</tr>
				<tr>
					<td><label for="nombre_cliente">Nombre de cliente</label></td>
					<td><input type="text" name="nombre_cliente" id="nombre_cliente" value="<?php echo $cliente->nombre; ?>" size="60"></td>
				</tr>
				<tr>
					<td><label for="tipo_cliente">Tipo</label></td>
					<td>
						<select name="tipo_cliente" name="tipo_cliente" disabled="true">
							<option value="<?php echo Cliente::$INDIVIDUAL;?>" <?php if($cliente->tipo==Cliente::$INDIVIDUAL) echo "Selected"; ?>>Individual</option>
							<option value="<?php echo Cliente::$GRUPO;?>" <?php if($cliente->tipo==Cliente::$GRUPO) echo "Selected"; ?>>Grupo</option>
						</select>
					</td>
				</tr>
				<tr><td colspan="2"><button type="submit" class="isButton updateButton safeMargin"><span></span><span>Actualizar</span></button></td></tr>
			</tbody>
		</table>
	</form>

	<h3 class="subtitleCMS safeMargin4">Empresas</h3>
	<?php for($i=0; $i < Count($datosEmpresaArr); $i++) {
		$datosEmpresa = $datosEmpresaArr[$i]; ?>
	<form method="POST" class="lado1">
		<table class="tableFormat">
			<tbody>
				<tr>
					<td><label for="nombreEmp<?php echo $i ?>">Nombre</label></td>
					<td>
						<input type="hidden" name="action" id="updEmpresaAction_<?php echo $datosEmpresa->id; ?>" value="updEmpresa">
						<input type="hidden" name="idEmpresa" value="<?php echo $datosEmpresa->id ?>">
						<input type="text" name="nombre" id="nombreEmp<?php echo $i ?>" value="<?php echo $datosEmpresa->nombre ?>">
					</td>
				</tr>
				<tr>
					<td><label for="dirEmp<?php echo $i ?>">Dirección</label></td>
					<td>
						<input type="text" name="direccion" id="dirEmp<?php echo $i ?>" value="<?php echo $datosEmpresa->direccion ?>">
					</td>
				</tr>
				<tr>
					<td><label for="estadoEmp<?php echo $i ?>">Estado</label></td>
					<td>
						<select name="idEstado" id="estadoEmp<?php echo $i ?>">
							<?php for ($e=0 ; $e < Count($catestados) ; $e++ ) {
							$datEstado = $catestados[$e];
							echo '<option value="'.$datEstado->id.'"'.($datosEmpresa->idEstado == $datEstado->id ? ' Selected="true" ': '').'>'.$datEstado->nombre.'</option>';
							} ?>
						</select>
					</td>
				</tr>
				<tr>
					<td><label for="muniEmp<?php echo $i ?>">Municipio</label></td>
					<td>
						<select name="idMpio" id="muniEmp<?php echo $i ?>"><?php 
							$transaction = new Transaction();
							$catMunicipios = DAOFactory::getMunicipiosDAO()->queryByEstadoId( $datosEmpresa->idEstado );
							for ($x=0 ; $x < Count($catMunicipios) ; $x++ ){
								echo '<option value="'.$catMunicipios[$x]->id.'"'.($datosEmpresa->idMunicipio == $catMunicipios[$x]->id ? ' Selected="true" ': '').'>'.$catMunicipios[$x]->nombre.'</option>';
							}
							$transaction->commit();
						?></select>
<script type="text/javascript">
$("#estadoEmp<?php echo $i ?>").change(function(){
	loadlist($('#muniEmp<?php echo $i ?>').get(0),
 		'../json/getMunicipios.php?id=' + $("#estadoEmp<?php echo $i ?>").val(),
 		'id', 'nombre'
 );
});
</script>
				</tr>
				<tr>
					<td><label for="ciudadEmp<?php echo $i ?>">Localidad</label></td>
					<td><select name="idCiudad" id="ciudadEmp<?php echo $i ?>"><?php 
							$transaction = new Transaction();
							$catLocalidades = DAOFactory::getLocalidadesDAO()->queryByMunicipioId( $datosEmpresa->idCiudad );
							for ($x=0 ; $x < Count($catLocalidades) ; $x++ ){
								echo '<option value="'.$catLocalidades[$x]->id.'"'.($datosEmpresa->idCiudad == $catLocalidades[$x]->id ? ' Selected="true" ': '').'>'.$catLocalidades[$x]->nombre.'</option>';
							}
							$transaction->commit();
						?></select>
<script type="text/javascript">
$("#muniEmp<?php echo $i ?>").change(function(){
	loadlist($('#ciudadEmp<?php echo $i ?>').get(0),
 		'../json/getLocalidades.php?id=' + $("#muniEmp<?php echo $i ?>").val(),
 		'id', 'nombre'
 );
});
</script>
					</td>
				</tr>
				<tr>
					<td colspan="2">
						<button type="submit" class="isButton updateButton safeMargin"><span></span><span>Actualizar</span></button>
						<button type="submit" class="isButton removeButton safeMargin" onclick="return elimina('#updEmpresaAction_<?php echo $datosEmpresa->id; ?>', 'removeEmpresa')"><span></span><span>Eliminar</span></button>
					</td>
				</tr>
			</tbody>
		</table>
	</form>

	<div class="lado2">
		<table class="tableFormat">
			<thead>
				<tr><th colspan="6" class="subtitleCMS">Datos de contactos</th></tr>
				<tr><th>Nombre</th><th>Cargo</th><th>Email</th><th>Tel.</th><th>Ext.</th><th>S</th><th></th></tr>
			</thead>
			<tbody>
				<?php $contactos = $contactosArr[$i];
				for ($j=0; $j < Count($contactos); $j++) {
					$contacto = $contactos[$j]; ?>
				<tr>
					<form method="POST">
						<td>
							<input type="hidden" name="action" value="updContacto" id="updContactoAction_<?php echo $contacto->id; ?>" />
							<input type="hidden" name="idContacto" value="<?php echo $contacto->id ?>"/>
							<input type="hidden" name="idEmpresa" value="<?php echo $datosEmpresa->id ?>"/>
							<input type="text" name="nombre" value="<?php echo $contacto->nombre; ?>" placeholder="Nombre"/>
						</td>
						<td><input type="text" name="cargo" value="<?php echo $contacto->cargo; ?>" placeholder="Cargo"/></td>
						<td><input type="text" size="10" name="email" value="<?php echo $contacto->email; ?>" placeholder="Email"/></td>
						<td><input type="text" size="10" name="telefono" value="<?php echo $contacto->telefono; ?>" placeholder="Teléfono"/></td>
						<td><input type="text" size="2"  name="ext" value="<?php echo $contacto->ext; ?>" placeholder="Ext."/></td>
						<td><input type="checkbox" name="acceso" value="S" <?php echo ( $contacto->acceso=="S" ? "checked" : "") ?>/></td>
						<td>
							<button type="submit" class="isButton updateButton"><span></span></button>
							<button type="submit" class="isButton removeButton safeMargin2" onclick="return elimina('#updContactoAction_<?php echo $contacto->id;?>', 'removeContacto')"><span></span></button>
						</td>
					</form>
				</tr>
				<?php } ?>
				<tr>
					<form method="POST">
						<td>
							<input type="hidden" name="action" value="addContacto">
							<input type="hidden" name="idEmpresa" value="<?php echo $datosEmpresa->id ?>">
							<!-- <input type="hidden" name="idEmpresa" value="1"> -->
							<input type="text" name="nombre" placeholder="Nombre">
						</td>
						<td><input type="text" name="cargo" placeholder="Cargo"></td>
						<td><input type="text" size="10" name="email" placeholder="Email"></td>
						<td><input type="text" size="10" name="telefono" placeholder="Teléfono"></td>
						<td><input type="text" size="2"  name="ext" placeholder="Ext."></td>
						<td><input type="checkbox" name="acceso" value="S"/></td>
						<td><button type="submit" class="isButton addButton"><span></span></button></td>
					</form>
				</tr>
			</tbody>
		</table>
	</div>
	<hr>
	<?php } ?>

	<?php if ($cliente->tipo == Cliente::$GRUPO || ($cliente->tipo == Cliente::$INDIVIDUAL && Count($datosEmpresaArr) == 0)) { ?>
	<form method="POST" class="lado1">
		<input type="hidden" name="action" value="addEmpresa">
		<h3 class="subtitleCMS safeMargin3">Añadir empresa</h3>
		<table class="tableFormat">
			<tbody>
				<tr>
					<td><label for="nombreAddEmp">Nombre</label></td>
					<td colspan="5"><input type="text" name="nombre" id="nombreAddEmp" placeholder="Nombre" size="50"></td>
				</tr>
				<tr>
					<td><label for="dirAddEmp">Dirección</label></td>
					<td colspan="5"><input type="text" name="direccion" id="dirAddEmp" placeholder="Dirección" size="50"></td>
				</tr>
				<tr>
					<td><label for="estadoAddEmp">Estado</label></td>
					<td>
						<select name="idEstado" id="estadoAddEmp">
							<?php for ($e=0 ; $e < Count($catestados) ; $e++ ) {
							$datEstado = $catestados[$e];
							echo '<option value="'.$datEstado->id.'">'.$datEstado->nombre.'</option>';
							} ?>
						</select>
	
					</td>
					<td><label for="muniAddEmp">Municipio</label></td>
					<td>
						<select name="idMpio" id="muniAddEmp"></select>
<script type="text/javascript">
$("#estadoAddEmp").change(function(){
	loadlist($('#muniAddEmp').get(0),
 		'../json/getMunicipios.php?id=' + $("#estadoAddEmp").val(),
 		'id', 'nombre'
 );
});
</script>
					</td>
					<td><label for="ciudadAddEmp">Localidad</label></td>
					<td><select name="idCiudad" id="ciudadAddEmp"></select>
<script type="text/javascript">
$("#muniAddEmp").change(function(){
	loadlist($('#ciudadAddEmp').get(0),
 		'../json/getLocalidades.php?id=' + $("#muniAddEmp").val(),
 		'id', 'nombre'
 );
});
</script>
					</td>
				</tr>
				<tr>
					<td colspan="6">
						<button type="submit" class="isButton addButton safeMargin"><span></span><span>Agregar</span></button>
					</td>
				</tr>
			</tbody>
		</table>
	</form>
	<?php } ?>
</div>