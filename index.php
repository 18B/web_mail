<?php 
//Encabezado de la pagina
include ('views/front/templates/head.php');

//validar errores
if(isset($_GET['error'])){

	include ('views/errors/errors.php');
}

?>
    
<div class="container spacing-top">
				<div class="row padre d-flex justify-content-center">
					<div class="col-lg-4 bg-dark franja">
						<h1 class="title-h1">!Bienvenido¡</h1>
							<figure>
								<img src="http://localhost/webmail/public/images/email.png" class="img-fluid">
							</figure>
					</div>
					<div class="col-lg-4 bg-danger franja">
						<fieldset>
										
											<legend class="formu">Formulario de Registro</legend>
												<form name="register" method="post" action="app/Http/Controllers/registroController.php">
													<p>
														<select name="genre" class="boton13" required>
															<option value="hombre">Hombre</option>
															<option value="mujer">Mujer</option>
															<option value="genero" selected>Genero</option>
														</select>
													</p>
													<p>
														<input  type="text" name="nombre" placeholder="Nombre completo.." class="boton8"  required>
													</p>
													<p>
														<input type="email" name="correo" placeholder="Correo electronico.." class="boton9"  required>
													</p>
													<p>
														<input type="password" name="password" class="boton10"placeholder="Contraseña.." id="password"
															pattern="^(?=.*\d)(?=.*[\u0021\u002b\u003c-\u0040])(?=.*[A-Z])(?=.*[a-z])\S{8,16}$"
															onchange="this.setCustomValidity(this.validity.patternMismatch ? 'Debe contener entre 8 y 16 caracteres: 
															(Digitos, minúsculas, mayúsculas y símbolos)' : ''); if(this.checkValidity()) form.confirm_password.pattern = this.value;"
															required>
													</p>
													<p>
														<input type="password" name="conf_pass" class="boton11" placeholder="Confirmar contraseña.." id="password"
															pattern="^(?=.*\d)(?=.*[\u0021\u002b\u003c-\u0040])(?=.*[A-Z])(?=.*[a-z])\S{8,16}$"
															onchange="this.setCustomValidity(this.validity.patternMismatch ? 'Por favor, ingresa la misma contraseña de arriba' : '');"
															required>
													</p>
													<p>
														<input type="submit" name="btn-register" value="Registrar usuario" class="menubtn4">
														<input type="reset" value="Limpiar datos" class="menubtn5">
													</p>
												</form>
								     	</fieldset>
									
									<p><a href="http://localhost/webmail/views/front/login.php" class="registrado">Ya estoy registrado!</a></p>
					</div>
					
</div>

<?php include ('views/front/templates/foot.php'); ?>