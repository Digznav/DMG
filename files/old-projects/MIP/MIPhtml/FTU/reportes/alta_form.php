<script type="text/javascript">
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
document.body.onload = function(){
      loadlist($('#id_empresa').get(0),
							 		'../json/getEmpresas.php?id=' + $("#id_cliente").val(),
							 		'id', 'nombre'
							 );
  }
</script>
<h2 class="titleCMS">Alta de reportes</h2>
<div class="contentCMS"><form method="POST"><table class="tableFormat"><tbody><tr>
					<td><label>ID</label></td>
					<td><strong><?php echo $reporte->id; ?></strong></td>
				</tr>


				<!-- <tr>
					<td><label for="id_reporte">Id Reporte</label></td>
					<td><input type="text" name="id_reporte" id="id_reporte" value="<?php echo $reporte->Id; ?>" placeholder="Id"></td>
				</tr> -->
				<tr>
					<td><label for="id_cliente">Cliente</label></td>
					<!-- <td><input type="text" name="id_cliente" id="id_cliente" value="<?php echo $reporte->idCliente; ?>" placeholder="idCliente"></td> -->
					
					
					<td>
						<select name="id_cliente" id="id_cliente">
							<?php for ( $i=0; count( $clientes ) > $i ; $i++ ) {
							$cliente = $clientes[$i]; ?>
								<option value="<?php echo $cliente->id;?>"><?php echo $cliente->nombre?></option>
							<?php } ?>
						</select>
						<select name="id_empresa" id="id_empresa">

						</select>

						<script type="text/javascript">
							$("#id_cliente").change(function(){
								loadlist($('#id_empresa').get(0),
							 		'../json/getEmpresas.php?id=' + $("#id_cliente").val(),
							 		'id', 'nombre'
							 );
							});
						</script>
					</td>
					
				</tr>
				<input type="hidden" name="idTecnico" id="idTecnico" value="<?php echo $tecnico->id; ?>">
				<!-- <tr>
					<td><label for="id_tecnico">Tecnico</label></td>
					<td><input type="text" name="id_tecnico" id="id_tecnico" value="<?php echo $reporte->idTecnico; ?>" placeholder="idTecnico"></td>
				</tr> -->
				<!-- <tr>
					<td><label for="folio">Folio</label></td>
					<td><input type="text" name="folio" id="folio" value="<?php echo $reporte->Folio; ?>" placeholder="Folio"></td>
				</tr> -->
				<tr>
					<td><label for="propuesta">Propuesta</label></td>
					<td>
						<textarea name="propuesta" id="propuesta" rows="10" placeholder="Propuesta"><?php echo $reporte->Propuesta; ?></textarea>
						<!-- <input type="text" name="propuesta" id="propuesta" value="< ?php echo $reporte->Propuesta; ?>" placeholder="Propuesta"> -->
					</td>
				</tr>
				<tr>
					<td><label for="responsable">Responsable</label></td>
					<td><input type="text" name="responsable" id="responsable" value="<?php echo $reporte->Responsable; ?>" placeholder="Responsable"></td>
				</tr>
				<tr>
					<td><label for="fechaCompromiso">Fecha Compromiso</label></td>
					<!-- <td><input type="text" name="fechaCompromiso" id="fechaCompromiso" value="<?php echo $reporte->FechaCompromiso; ?>" placeholder="FechaCompromiso"></td> -->
					<td><input type="text" id="popupDatepicker" name="popupDatepicker" placeholder="Fecha Compromiso"/></td>
				</tr>
				<tr>
					<td><label for="accion">Acci&oacute;n</label></td>
					<td>
						<textarea name="accion" id="accion" rows="10" placeholder="Acci&oacute;n"><?php echo $reporte->Accion; ?></textarea>
						<!-- <input type="text" name="accion" id="accion" value="< ?php echo $reporte->Accion; ?>" placeholder="Accion"> -->
					</td>
				</tr>
				<tr>
					<td><label for="fotoInicial">Foto Inicial</label></td>
					<td><input type="file" name="fotoInicial" id="fotoInicial" value="<?php echo $reporte->Foto_Inicial; ?>" placeholder="Accion"></td>
				</tr>
				<tr>
					<td><label for="fotoFinal">Foto Final</label></td>
					<td><input type="file" name="fotoFinal" id="fotoFinal" value="<?php echo $reporte->Foto_Final; ?>" placeholder="Foto_Final"></td>
				</tr>
				<tr>
					<td><label for="codigoGoogle">Codigo Google</label></td>
					<td><input type="text" name="codigoGoogle" id="codigoGoogle" value="<?php echo $reporte->CodigoGoogle; ?>" placeholder="codigoGoogle"></td>
				</tr>
				<tr>
					<td><label for="comentarios">Comentarios</label></td>
					<td>
						<textarea name="comentarios" id="comentarios"  rows="10" placeholder="comentarios"><?php echo $reporte->Comentarios; ?></textarea>
						<!-- <input type="text" name="comentarios" id="comentarios" value="<?php echo $reporte->Comentarios; ?>" placeholder="comentarios"> -->
					</td>
				</tr>
				<!-- <tr>
					<td><label for="fecha">Fecha</label></td>
					<td><input type="text" name="fecha" id="fecha" value="<?php echo $reporte->Fecha; ?>" placeholder="Fecha"></td>
				</tr>
				<tr>
					<td><label for="Hora">Hora</label></td>
					<td><input type="text" name="Hora" id="Hora" value="<?php echo $reporte->Hora; ?>" placeholder="Hora"></td>
				</tr> -->
				<tr>
					<td><label for="status">Status</label></td>
					<!-- <td><input type="text" name="status" id="status" value="<?php echo $reporte->Status; ?>" placeholder="Status"></td> --><
					<td>
							<div id="progressBar" class="tiny-green"><div></div></div>
								<div class="steps" id="steps">
										<a href="javascript:void(0)" data-value="0">&raquo; 0%</a>
										<a href="javascript:void(0)" data-value="10">&raquo; 10%</a>
										<a href="javascript:void(0)" data-value="20" class="active">&raquo; 20%</a>
										<a href="javascript:void(0)" data-value="30">&raquo; 30%</a>
										<a href="javascript:void(0)" data-value="40">&raquo; 40%</a>		
										<a href="javascript:void(0)" data-value="50">&raquo; 50%</a>
										<a href="javascript:void(0)" data-value="60">&raquo; 60%</a>
										<a href="javascript:void(0)" data-value="70">&raquo; 70%</a>
										<a href="javascript:void(0)" data-value="80">&raquo; 80%</a>
										<a href="javascript:void(0)" data-value="90">&raquo; 90%</a>
										<a href="javascript:void(0)" data-value="100">&raquo; 100%</a>
									</div>
								<input type="text" name="valorStatus" id="valorStatus" hidden=true>

									<script type="text/javascript">

									progressBar(0, $('#progressBar'));

									$('#steps a').click( function () {
										progressBar($(this).attr('data-value'), $('#progressBar'));
										$('#steps a').removeClass();
										$(this).addClass('active');
										document.getElementById("valorStatus").value = $(this).attr('data-value');
									});

									$('#types a').click( function() {
										$('#progressBar').removeClass().addClass($(this).attr('data-type'));
										$('#types a').removeClass();
										$(this).addClass('active');
									});

									$(document).ready( function () {
										var hash = window.location.hash.substring(1);
										if(hash) {
											$('#progressBar').removeClass().addClass(hash);
											$('#types a').removeClass();
											$('#types a[data-type=' + hash +']').addClass('active');
										}
									});
								</script>
					</td><!-- ENDDD TD STATUS-->
				</tr>
				<!-- <tr>
					<td><label for="timestamp">Timestamp</label></td>
					<td><input type="text" name="timestamp" id="timestamp" value="<?php echo $reporte->Timestamp; ?>" placeholder="Timestamp"></td>
				</tr> -->
				<tr><td colspan="2"><button type="submit" class="isButton continueButton safeMargin"><span></span><span>Continuar</span></button></td></tr>
			</tbody>
		</table>
	</form>
</div>