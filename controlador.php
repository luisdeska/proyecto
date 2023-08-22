<?php

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

if(!empty($_POST["boton_ingresar"])){
    if (empty($_POST["usuario"]) && empty($_POST["contraseña"])) {
        echo "Por favor rellena los campos";
    } else {
        $usuario = $_POST['usuario'];
        $contraseña = $_POST['contraseña'];
        $sql = $conexion->query(" SELECT usuarios.*, roles.id_rol FROM usuarios INNER JOIN roles ON usuarios.id_rol = roles.id_rol WHERE nombre_usuario='$usuario' and contraseña='$contraseña'");

        if ($datos = $sql->fetch_object()) {
            $_SESSION["id"]=$datos->id;
            $_SESSION["nombre"]=$datos->Nombre;

            if ($datos->id_rol==1) {
                header("location:principal_admin.php");
            } elseif ($datos->id_rol==2) {
                header("location:principal.php");
            }
        } else {
            ?>
            <h3 class="bad">Los datos no son validos, por favor intente de nuevo</h3>
            <br>
            <?php
        }
    }
}

?>