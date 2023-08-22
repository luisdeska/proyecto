<?php
include('conexion.php');

if (isset($_POST['enviar'])){

    if( strlen($_POST['usuario']) >=1 &&
    strlen($_POST['contraseña']) >=1 &&
    strlen($_POST['correo']) >=1 &&
    strlen($_POST['nombre']) >=1 &&
    strlen($_POST['telefono'] >=1)){
        $usuario = $_POST['usuario'];
        $correo = $_POST['correo'];
        $contraseña = $_POST['contraseña'];
        $nombre = $_POST['nombre'];
        $fecha_reg = date("y/m/d");
        $telefono = $_POST['telefono'];


        $consulta_verificacion = "SELECT* FROM usuarios WHERE nombre_usuario = '$usuario'";
        $verificacion = mysqli_query($conexion, $consulta_verificacion);
        if (mysqli_num_rows($verificacion) > 0) {
            $usuario_existente= "El nombre de usuario que tratas de crear ya existe. Por favor intentalo de nuevo";
        } else {
        $consulta = "INSERT INTO usuarios(Nombre_usuario, Nombre, correo, contraseña, fecha_registro, numero_telefono) VALUES ('$usuario','$nombre','$correo','$contraseña','$fecha_reg', '$telefono')";
        $resultado = mysqli_query($conexion, $consulta);
        if ($resultado){
            ?>
            <h3>Cuenta registrada correctamente</h3>
            <?php
            header("location:principal.php");
        } else {
            ?>
            <h3>Ha ocurrido un error, intentalo de nuevo mas tarde</h3>
            <?php
        } 
    }
    } else{
        ?>
        <h3>Por favor completa todos los campos</h3>
        <?php
    }
}

?>