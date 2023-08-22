<?php
session_start();
if (empty($_SESSION['id'])) {
	header("location:login.php");
}
include('controladores/conexion.php');
include('controladores/controlador.php')
?>
<!DOCTYPE html>
<html lang="es">
<head> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JobFlex</title>
    <link rel="stylesheet" href="css/estilomain.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" >
	<script src="bootstrap/js/bootstrap.bundle.min.js" ></script>
	<script src="bootstrap/js/bootstrap.min.js" ></script>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e3f2fd;">
		<div class="container-fluid">
		<a class="navbar-brand" href="principal.php"><img src="imagenes/logo.png" width="120px" height="20%"></a>
			
		<div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
			<div class="navbar-nav">
			<a class="nav-link active mx-2" aria-current="page" href="#">Inicio</a>

			<div class="text-white bg-success p-2 rounded mx-2">
			<?php 
				echo "Bienvenido " .$_SESSION["nombre"];
			?>
			</div>
			<a class="nav-item nav-link btn btn-warning mx-2" href="controladores/controlador_salir.php">Salir</a>
			</div>
		</div>
		</div>
	</nav>


<div class="container-fluid">
	<form class="d-flex">
    <input class="form-control me-2 light-table-filter" data-table="table_id" type="text" 
    placeholder="Buscar un trabajo">
    <hr>
    </form>
</div>
<br>

	<div class="container-fluid">
		<table class="table table-striped table-dark table_id" >
            <thead>    
                    <tr>
                    <th class="text-center">Trabajo</th>
                    <th class="text-center">Categoria</th>
                    <th class="text-center">Jornada</th>
                    <th class="text-center">Fecha limite de aplicacion</th>
                    <th class="text-center">Publicado por</th>
                    </tr>
                    </thead>
                    <tbody>

<?php
	$SQL = "SELECT * FROM trabajos";
	$dato = mysqli_query($conexion, $SQL);

	if ($dato -> num_rows>0) {
		while ($fila = mysqli_fetch_array($dato)) {
			echo "<tr>";
			echo "<td class=text-center>" . $fila['nombre_trabajo'] . "</td>";
			echo "<td class=text-center>" . $fila['Turno'] . "</td>";
			echo "<td class=text-center>" . $fila['tipo_jornada'] . "</td>";
			echo "<td class=text-center>" . $fila['fecha_fin_vacante'] . "</td>";
			echo "<td class=text-center>" . $fila['nombre_publicante'] . "</td>";
			echo "</tr>";
		}
	} else {
		echo "<tr><td colspan='5'>No se encontraron trabajos</td></tr>";
	}
?>

	</div>



	<script src="js/buscador.js"></script>
</body>
</html>
