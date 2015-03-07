<?php ?>
<form method="POST" action="" name="contactoForm" id="contactoForm">
	<input type="hidden" value="" name="correoPersonal" id="mailPer">
	<input type="hidden" value="" name="nombrePersonal" id="namePer">
	<table class="tableFormat smallFormat">
		<tr><td class="full"><label for="cNombre">Nombre</label><input type="text" name="nombre" id="cNombre"></td></tr>
		<tr><td class="full"><label for="cCorreo">Correo</label><input type="email" name="correo" id="cCorreo" placeholder="ejemplo@dominio.com"></td></tr>
		<tr>
			<td class="full">
				<label for="cComentario">Comentario</label>
				<textarea name="comentario" id="cComentario" rows="4"></textarea>
			</td>
		</tr>
		<tr><td class="buttonSend"><input type="submit" name="submit" id="submit" value="Enviar"></td></tr>
	</table>
</form>