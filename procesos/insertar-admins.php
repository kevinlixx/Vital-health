<?php 
    include "../clases/Conexion.php";
    include "../clases/crud-ingreso.php";
    
    $crud = new crud();

    $datos = array(
        "nombres" => [
            "primer_nombre" => $_POST["primer_nombre"],
            "segundo_nombre" => $_POST["segundo_nombre"]
        ],
        "apellidos" => [
            "primer_apellido" => $_POST["primer_apellido"],
            "segundo_apellido" => $_POST["segundo_apellido"]
        ],
        "correo_electronico" => $_POST["correo_electronico"],
        "contrasena" => $_POST["contrasena"],        
    );

    $respuesta = $crud->insertarDatos($datos);

    if ($respuesta) {
        echo "<script>
            alert('Tu registro ha sido exitoso');
            window.location.href='../index-ingreso_admin.php';
          </script>";
    } else {
        echo "Error en el registro. Respuesta de la inserción: ";
        var_dump($respuesta);
        // Handle the failure case here if needed
    }
?>
