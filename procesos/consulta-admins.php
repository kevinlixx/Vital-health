<?php 
    include "../clases/Conexion.php";
    include "../clases/crud-ingreso.php";
    
    $crud = new crud();

    $datos = array(
        "correo_electronico" => $_POST["correo_electronico"],
        "contrasena" => $_POST["contrasena"]        
    );

    $respuesta = $crud->consultarDatos($datos);

    if (count($respuesta) > 0 ) {
        echo '<script>window.location.href="../index-ingreso_admin.php"; alert("Se ha iniciado sesión exitosamente");</script>';
        //header("location:../index-admin.php");
    } else {
        echo '<script>window.location.href="../index-admin.php"; alert("Contraseña o correo incorrecto, intenta nuevamente");</script>';
        var_dump($respuesta);
        // Handle the failure case here if needed
    }
?>
