<?php 
if(isset($_SESSION['genero'])){

						$genre = $_SESSION['genero'];

					 	if ($genre == 'hombre') {
						echo '<img src="http://localhost/webmail/public/images/hombre.png" class="img-fluid">';
						}elseif($genre == 'mujer'){
							echo '<img src="http://localhost/webmail/public/images/mujer.png" class="img-fluid">';
						}

					}
?>