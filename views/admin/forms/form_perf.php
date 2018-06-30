<?php  
if(isset($_SESSION['email']));
?>
<fieldset>
          <legend>Mis Datos</legend>
            <?php
              if(isset($_SESSION['email'])){ $email = $_SESSION['email'];}
              if(isset($_SESSION['usuario'])){ $nombre = $_SESSION['usuario'];}
              if(isset($_SESSION['genero'])){ $genre = $_SESSION['genero'];}
            ?>
              
          
            <form name="datos" method="post" action="http://localhost/webmail/app/Http/controllers/Auth/AuthController.php">
              <p>
                <label>Nombre: </label>
                <input id="borderedondito" type="text" value="<?php echo $nombre; ?>" readonly>
              </p>
              <p>
                <label>Genero: </label>
                <input id="borderedondito" type="text" value="<?php echo $genre; ?>" readonly>
              </p>
              <p>
                <label>Correo: </label>
                <input id="borderedondito" type="email" value="<?php echo $email; ?>" readonly>
              </p>
            </form>
          </fieldset>
<?php{}
else{
    header('Location: http://localhost/webmail/index.php');
  } 
?>
