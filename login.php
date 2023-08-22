<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JobFlex | Login</title> 
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
  </head>
  <body>
    <div class="container">
      <div class="wrapper">
        <div class="title"><span>Inicia Sesión</span></div>
        <form method="post" action="">

        <?php
    include('controladores/conexion.php');
    include('controladores/controlador.php');
    ?>

          <div class="row">
            <i class="fas fa-user"></i>
            <input type="text" name="usuario" placeholder="Usuario o correo electronico" required>
          </div>
          <div class="row">
            <i class="fas fa-lock"></i>
            <input type="password" name="contraseña" placeholder="Contraseña" required>
          </div>
          <!--<div class="pass"><a href="#">¿Olvidaste tu contraseña?</a></div>-->
          <div class="row button">
            <input type="submit" name="boton_ingresar" value="Iniciar Sesión" >
          </div>
          <div class="signup-link">¿Aún no tienes una cuenta? <a href="registro.php">Registrate ahora</a></div>
        </form>
      </div>
    </div>




  </body>
</html>