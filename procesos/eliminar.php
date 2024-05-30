<?php session_start();
    include "../clases/Conexion.php";
    include "../clases/Crud.php";
    $crud = new Crud();
    $id = $_POST['id'];

    $respuesta = $crud->eliminar($id);

    if ($respuesta->getDeletedCount() > 0) {
        $_SESSION['mensaje_crud'] = 'delete';
        echo '<script>window.location.href="../registros.php"; alert("Se elimino exitosamente");</script>';
    } else {
        print_r($respuesta);
        
    }
?>