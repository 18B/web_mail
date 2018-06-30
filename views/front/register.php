 <?php include ('templates/head.php'); ?>
<script> </script>
	<div class="container spacing-top">
		<div class="row">


			<div style="margin-left: 430px;"class="col-3 bg-danger">
				
				<fieldset>
					<center>
					<legend>Formulario de Registro</legend>
						<form name="register" method="post" action="http://localhost/webmail/app/Http/Controllers/registroController.php">
							<p>
								<select name="genre" class="boton12" required>
									<option value="hombre">Hombre</option>
									<option value="mujer">Mujer</option>
									<option value="genero" selected>Genero</option>
								</select>
							</p>
							<p>
								<input type="text" name="nombre" placeholder="Nombre completo.." class="boton1" required>
							</p>
							<p>
								<input type="email" name="correo" placeholder="Correo electronico.." class="boton2" required>
							</p>
							<p>
								<input type="password" name="password" class="boton3" placeholder="Contraseña.." id="password"
			pattern="^(?=.*\d)(?=.*[\u0021\u002b\u003c-\u0040])(?=.*[A-Z])(?=.*[a-z])\S{8,16}$"
			onchange="this.setCustomValidity(this.validity.patternMismatch ? 'Debe contener entre 8 y 16 caracteres: 
			(Digitos, minúsculas, mayúsculas y símbolos)' : ''); if(this.checkValidity()) form.confirm_password.pattern = this.value;"
			required>
							</p>
							<p>
								<input type="password" name="conf_pass" class="boton4" placeholder="Confirmar contraseña.." id="password"
			pattern="^(?=.*\d)(?=.*[\u0021\u002b\u003c-\u0040])(?=.*[A-Z])(?=.*[a-z])\S{8,16}$"
			onchange="this.setCustomValidity(this.validity.patternMismatch ? 'Por favor, ingresa la misma contraseña de arriba' : '');"
			required>
							</p>
							<p>
								<input type="submit" name="btn-register" value="Registrar usuario" class="menubtn">
								<input type="reset" value="Limpiar datos" class="menbtn2">
							</p>
						</form>
					</fieldset>
					</center>
			</div>

		</div>
	</div>


<?php include ('templates/foot.php'); ?>