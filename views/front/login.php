<?php include ('templates/head.php'); ?>

	<div class="container spacing-top">
		<div class="row">

			<div style="margin-left: 430px;" class="col-3 bg-danger">

				<center>
				<fieldset>
					<legend>Formulario de Ingreso</legend>
						<form name="login" method="post" action="http://localhost/webmail/app/Http/Controllers/Auth/AuthController.php">
							<p>
								<input type="email" name="correo_log" placeholder="Correo electronico.." class="boton6" required>
							</p>
							<p>
								<input type="password" name="pass_log" placeholder="Contraseña.." class="boton7" required>
							</p>
							<p>
								<!-- Envio de datos ocultos -->
								<input type="hidden" name="genre" value="<?php echo $genre; ?>">
								<input type="hidden" name="nombre" value="<?php echo $nombre; ?>">
								<input type="hidden" name="correo" value="<?php echo $correo; ?>">
								<input type="hidden" name="password" value="<?php echo $password; ?>">

								<input type="submit" name="btn-login" value="Ingresar" class="menubtn3">
								<input type="reset" value="Cancelar" class="menubtn4">
							</p>
						</form>
					</fieldset>
					</center>
			</div>

		</div>
	</div>

<?php include ('templates/foot.php'); ?>