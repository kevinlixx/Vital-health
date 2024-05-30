<?php session_start();
    include "../clases/Conexion.php";
    include "../clases/Crud.php";

    $Crud = new crud();

    $documento = array(
        "tipo" => $_POST['tipoDocumento'],
        "numero" => $_POST['documento']
    );
    
    $id = $_POST['id'];
    $estado = isset($_POST['estado']) ? filter_var($_POST['estado'], FILTER_VALIDATE_BOOLEAN) : false;
    $datos = array(
        "fecha" => date('Y-m-d'),  // Agrega la fecha actual en formato 'YYYY-MM-DD'
        "nombre" => $_POST['nombre'],
        "apellido" => $_POST['apellido'],
        "documento" => $documento,
        "correo" => $_POST['correo'],
        "telefono" => $_POST['telefono'],
        "direccion" => $_POST['direccion'],
        "ciudad" => $_POST['ciudad'],
        "eps" => $_POST['eps'],
        "servicio" => $_POST['servicio'],
        "estado" => $estado,
    );
   /*  var_dump($id);
    var_dump($datos); */
    $respuesta = $Crud->actualizar($id, $datos);
    var_dump($respuesta);
    if ($respuesta->getModifiedCount() > 0 || $respuesta->getMatchedCount() > 0) {
        echo '<script>window.location.href="../registros.php"; alert("Se modifico exitosamente");</script>';
    } else {
        print_r($respuesta);
    }

?>