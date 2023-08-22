<?php
        include('controladores/conexion.php');
        include('controladores/submit.php');
        include('controladores/controlador.php');
    ?>
<!DOCTYPE html>
<html lang="mx-es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JobFlex</title>
    <link rel="stylesheet" href="css/admin.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>

    <div class="container-lg">
        <h2><?php 
				echo "Bienvenido " .$_SESSION["nombre"];
			?> Ingresa la informacion un trabajo</h2>

        <form action="" method="post" enctype="multipart/form-data">
            <label for="nombre" class="form-label">Trabajo</label>
            <input type="text" id="trabajo" name="trabajo" required class="form-control" aria-describedby="emailHelp">
<br>
            <label for="descripcion" class="form-label">Descripcion</label>
            <input type="text" id="descripcion" name="descripcion" required class="form-control" aria-describedby="emailHelp">
<br>
            <label for="turno" class="form-label">Turno</label>
            <input type="text" id="turno" name="turno" required class="form-control" aria-describedby="emailHelp">
<br>
            <label for="jornada" class="form-label">Jornada</label>
            <input type="text" id="jornada" name="jornada" required class="form-control" aria-describedby="emailHelp">
<br>
            <label for="fecha_limite" class="form-label">Fecha limite de aplicacion</label>
            <input type="date" id="fecha" name="fecha_venc" required class="form-control" aria-describedby="emailHelp">
<br>
            <label for="nombre_publicante" class="form-label">Nombre del publicante</label>
            <input type="text" id="publicante" name="publicante" required class="form-control" aria-describedby="emailHelp">
            <br>
            <label for="telefono" class="form-label">Telefono de contacto</label>
            <input type="text" id="telefono" name="telefono" required class="form-control" aria-describedby="emailHelp">
            <br>
            <input type="submit" class="btn btn-success btn-lg mx-2" Value="Guardar"></input>
            <a href="principal_admin.php" class="btn btn-warning btn-lg mx-2">Cancelar</a>
            <a class="btn btn-danger mx-2 btn-lg" href="controladores/controlador_salir.php" >Salir</a>
            
        </form>
    </div>


</body>
</html>
