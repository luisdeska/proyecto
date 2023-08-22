<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $trabajo = $_POST["trabajo"];
    $descripcion = $_POST["descripcion"];
    $turno = $_POST["turno"];
    $jornada = $_POST["jornada"];
    $publicante = $_POST["publicante"];
    $fecha_vencimiento = $_POST['fecha_venc'];
    $fecha_publicacion = date('y/m/d');
    $telefono = $_POST['telefono'];


    $conexion = new mysqli("localhost", "root", "", "jobflex");

    // Verificar la conexión
    if ($conexion->connect_error) {
        die("Conexión fallida: " . $conexion->connect_error);
    }

    // Preparar la consulta SQL
    $sql = "INSERT INTO `trabajos`(`nombre_trabajo`, `descripcion`, `Turno`, `tipo_jornada`, `fecha_publicacion`, `fecha_fin_vacante`, `nombre_publicante`, `telefono_contacto`) 
    VALUES ('$trabajo','$descripcion','$turno','$jornada', '$fecha_publicacion','$fecha_vencimiento','$publicante', '$telefono')";

    if ($conexion->query($sql) === TRUE) {
        // Cerrar la conexión
        $conexion->close();

        // Mostrar mensaje de registro exitoso por 5 segundos
        echo "<script>
                alert('Registro exitoso');
                setTimeout(function() {
                    window.location.href = 'principal_admin.php';
                }, 50);
              </script>";
        exit; // Detener la ejecución del resto del script
    } else {
        echo "Error: " . $sql . "<br>" . $conexion->error;
        $conexion->close();
    }
}
?>
