<?php ?>
<div class="cntctCnt">
	<div class="curtain"></div>

	<div class="cllbck-frmt success" id="clbck-scs">
		<span class="symb-icon icoDoneoutline"></span>
		<div class="prt">
			<h2>Mensaje enviado con éxito.</h2>
			<p>El hotel es responsable de ponerse en contacto con usted. Gracias.</p>
		</div>
	</div>
	<div class="cllbck-frmt error" id="clbck-err">
		<span class="symb-icon icoCloseoutline"></span>
		<div class="prt">
			<h2>Error al enviar el mensaje.</h2>
			<p>Por favor intente más tarde. Disculpe las molestias.</p>
		</div>
	</div>

	<form id="cntctFrm" action="/2014/libs/correo.php" class="pFCntct clearfix" method="POST" name="contactForm">
		<div class="cl-1 fldsFrmt">
			<div class="flds fld-1">
				<label for="fHotel">Hotel</label>
				<select name="hotel" id="fHotel">
					<option value="">Elije tu hotel</option>
					<option value="1">Hotel Posada San Pedro</option>
					<option value="2">Hotel La Alhóndiga</option>
					<option value="3">Gilfer Hotel</option>
					<option value="4">Loa Inn Hoteles</option>
					<option value="5">Hotel Plaza Poblana</option>
					<option value="6">Hotel del Portal</option>
					<option value="7">Hotel Royalty Puebla</option>
					<option value="8">Hotel Señorial</option>
					<option value="9">Hotel Condesa Americana</option>
					<option value="10">Hotel Imperial</option>
					<option value="11">Hotel Palace</option>
					<option value="12">Hotel San Ángel</option>
				</select>
			</div>
			<div class="flds fld-2">
				<label>Estadía</label>
				<input name="llegada" id="fLlegada" placeholder="Llegada">
				<input name="salida" id="fSalida" placeholder="Salida" class="lst">
			</div>
			<div class="flds fld-3">
				<label>Habitaciones y Personas</label>
				<select name="hab" id="Hab">
					<option value="">Hab.</option>
					<?php for ( $i=1; $i<=3; $i++ ): ?>
					<option value="<?=$i?>"><?=$i?></option>
					<?php endfor ?>
				</select>
				<select name="adultos" id="Adultos">
					<option value="">Adultos</option>
					<?php for ( $i=1; $i<=10; $i++ ): ?>
					<option value="<?=$i?>"><?=$i?></option>
					<?php endfor ?>
				</select>
				<select name="ninhos" id="Ninhos" class="lst">
					<option value="">Niños</option>
					<?php for ( $i=1; $i<=10; $i++ ): ?>
					<option value="<?=$i?>"><?=$i?></option>
					<?php endfor ?>
				</select>
			</div>
			<div class="flds fld-1">
				<label>Comentarios</label>
				<textarea name="comentarios" id="fComentarios"></textarea>
			</div>
		</div>
		<div class="cl-2 fldsFrmt">
			<div class="flds fld-1">
				<label for="fNombre">Nombre</label>
				<input type="text" name="nombre" id="fNombre" placeholder="Nombre completo">
			</div>
			<div class="flds fld-1">
				<label id="fCorreo">E-mail</label>
				<input type="email" name="correo" id="fCorreo" placeholder="ejemplo@dominio.com">
			</div>
			<div class="flds fld-2">
				<label>¿De dónde nos visitas?</label>
				<select name="pais" id="fPais">
					<option value="">País</option>
					<option value="México">México</option>
					<option value="Otro país">Otro país</option>
				</select>
				<select name="estado" id="fEstado" class="lst shtdwn">
					<option value="">Estado</option>
					<option value="Aguascalientes">Aguascalientes</option>
					<option value="Baja California">Baja California</option>
					<option value="Baja California Sur">Baja California Sur</option>
					<option value="Campeche">Campeche</option>
					<option value="Coahuila">Coahuila</option>
					<option value="Colima">Colima</option>
					<option value="Chiapas">Chiapas</option>
					<option value="Chihuahua">Chihuahua</option>
					<option value="Distrito Federal">Distrito Federal</option>
					<option value="Durango">Durango</option>
					<option value="Guanajuato">Guanajuato</option>
					<option value="Guerrero">Guerrero</option>
					<option value="Hidalgo">Hidalgo</option>
					<option value="Jalisco">Jalisco</option>
					<option value="Estado de México">Estado de México</option>
					<option value="Michoacán">Michoacán</option>
					<option value="Morelos">Morelos</option>
					<option value="Nayarit">Nayarit</option>
					<option value="Nuevo León">Nuevo León</option>
					<option value="Oaxaca">Oaxaca</option>
					<option value="Puebla">Puebla</option>
					<option value="Querétaro">Querétaro</option>
					<option value="Quintana Roo">Quintana Roo</option>
					<option value="San Luis Potosí">San Luis Potosí</option>
					<option value="Sinaloa">Sinaloa</option>
					<option value="Sonora">Sonora</option>
					<option value="Tabasco">Tabasco</option>
					<option value="Tamaulipas">Tamaulipas</option>
					<option value="Tlaxcala">Tlaxcala</option>
					<option value="Veracruz">Veracruz</option>
					<option value="Yucatán">Yucatán</option>
					<option value="Zacatecas">Zacatecas</option>
				</select>
			</div>
			<div class="flds fld-1">
				<label for="fTel">Teléfono</label>
				<input type="text" name="tel" id="fTel">
			</div>
			<button type="submit" class="snd-info">
				<span id="initSbmt">Informes</span>
				<span class="symb-icon icoLoader" id="lderSbmt"></span>
			</button>
		</div>
		<a href="#" class="clsFrm">Cerrar</a>
	</form>
</div>
<a href="#" class="opnFrm"><span>Informes</span></a>