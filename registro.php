<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JobFlex | Registro</title>
    <link rel="stylesheet" href="css/register.css">
    <script src="https://kit.fontawesome.com/4a9c34eacf.js" crossorigin="anonymous"></script>
  </head>
  <body>
  <?php
    include('controladores/validacion.php')
    ?>
    <div class="container">
      <div class="wrapper">
        <div class="title"><span>Registro</span></div>
        <form method="post">
          <div class="row">
            <i class="fas fa-user"></i>
            <input type="text" name="usuario" placeholder="Ingresa un nombre de usuario" required>
          </div>
          <div id="usuario_input">
          <?php
            if (isset($usuario_existente)){
              echo '<h5 class="error_usuario">' . $usuario_existente . '</h5>';
            }
            ?>
          </div>
          <div class="row">
            <i class="fas fa-user-pen"></i>
            <input type="text" name="nombre" placeholder="Ingresa tu nombre" required>
          </div>
          <div class="row">
            <i class="fas fa-lock"></i>
            <input type="password" name="contraseña" placeholder="Crea una contraseña" required>
          </div>
          <div class="row">
            <i class="fas fa-envelope"></i>
            <input type="email" name="correo" placeholder="Ingresa tu correo" required>
          </div>
          <div class="row">
            <i class="fa-solid fa-phone"></i>
            <input type="tel" name="telefono" placeholder="Ingresa tu numero de telefono" required>
          </div>
          
          <div class="row button">
            <input type="submit" name="enviar" value="Crear cuenta">
          </div>
          <div class="signup-link">¿Ya tienes una cuenta? <a href="login.php">Inicia Sesion</a></div>
        </form>
      </div>
    </div>

    

  </body>
</html>