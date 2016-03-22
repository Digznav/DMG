
<h2 class="titleCMS">Reporte</h2>
<a href="http://pdfcrowd.com/url_to_pdf/">Convert this page to a PDF</a>
<div class="contentCMS">
	<form method="POST">
		<input type="hidden" name="action" value="updReporte">
		<table class="tableFormat">
			<tbody>
				<tr>
					<td><label>ID</label></td>
					<td><strong><?php echo $reporte->id; ?></strong></td>
				</tr>
				<tr>
					<td><label for="folio">Folio</label></td>
					<td><input type="text" name="folio" id="folio" value="<?php echo $reporte->folio; ?>" ></td>
				</tr>
				<tr>
					<td><label for="id_cliente">Cliente</label></td>
					<td><input type="text" name="id_cliente" id="id_cliente" value="<?php echo $reporte->idCliente; ?>" ></td>
				</tr>
				<tr>
					<td><label for="id_tecnico">Tecnico</label></td>
					<td><input type="text" name="id_tecnico" id="id_tecnico" value="<?php echo $reporte->idTecnico; ?>" ></td>
				</tr>
				<tr>
					<td><label for="propuesta">Propuesta</label></td>
					<td>
						<textarea name="propuesta" id="propuesta" rows="10" placeholder="Propuesta"><?php echo $reporte->propuesta; ?></textarea>
						<!-- <input type="text" name="propuesta" id="propuesta" value="< ?php echo $reporte->propuesta; ?>" > -->
					</td>
				</tr>
				<tr>
					<td><label for="responsable">Responsable</label></td>
					<td><input type="text" name="responsable" id="responsable" value="<?php echo $reporte->responsable; ?>" ></td>
				</tr>
				<tr>
					<td><label for="fecha_compromiso">Fecha Compromiso</label></td>
					<td><input type="text" name="fecha_compromiso" id="fecha_compromiso" value="<?php echo $reporte->fechaCompromiso; ?>" ></td>
				</tr>
				<tr>
					<td><label for="accion">Accion</label></td>
					<td>
						<textarea name="accion" id="accion" rows="10" placeholder="Acci&oacute;n"><?php echo $reporte->accion; ?></textarea>
						<!-- <input type="text" name="accion" id="accion" value="< ?php echo $reporte->accion; ?>" > -->
					</td>
				</tr>
				<tr>
					<td><label for="fotoInicial">Foto Inicial</label></td>
					<td><input type="text" name="fotoInicial" id="fotoInicial" value="<?php echo $reporte->fotoInicial; ?>" ></td>
				</tr>
				<tr>
					<td><label for="fotoFinal">Foto Final</label></td>
					<td><input type="text" name="fotoFinal" id="fotoFinal" value="<?php echo $reporte->fotoFinal; ?>" ></td>
				</tr>
				<tr>
					<td><label for="comentarios">Comentarios</label></td>
					<td>
						<textarea name="comentarios" id="comentarios"  rows="10" placeholder="Comentarios"><?php echo $reporte->comentarios; ?></textarea>
						<!-- <input type="text" name="comentarios" id="comentarios" value="< ?php echo $reporte->comentarios; ?>" > -->
					</td>
				</tr>
				<tr>
					<td><label for="fecha">Fecha</label></td>
					<td><input type="text" name="fecha" id="fecha" value="<?php echo $reporte->fecha; ?>" ></td>
				</tr>
				<tr>
					<td><label for="hora">Hora</label></td>
					<td><input type="text" name="hora" id="hora" value="<?php echo $reporte->hora; ?>" ></td>
				</tr>
				<tr>
					<td><label for="status">Status</label></td>
					<td><input type="text" name="status" id="status" value="<?php echo $reporte->status; ?>" ></td>
				</tr>


				<tr><td colspan="2"><button type="submit" class="isButton updateButton safeMargin"><span></span><span>Actualizar</span></button></td></tr>
			</tbody>
		</table>
	</form>

</div>