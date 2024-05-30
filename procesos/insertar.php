<?php
session_start();

date_default_timezone_set('America/Bogota');

include "../clases/Conexion.php";
include "../clases/Crud.php";

$crud = new crud();

$documento = array(
    "tipo" => $_POST['tipoDocumento'],
    "numero" => $_POST['documento']
);

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
    "estado" => false,
);

$respuesta = $crud->insertarDatos($datos);

if ($respuesta) {
    // echo "Registro exitoso";
    echo "<script>
            alert('Tu registro ha sido exitoso');
            window.location.href='../index.php';
          </script>";
} else {
    echo "Error en el registro. Respuesta de la inserción: ";
    var_dump($respuesta);
    // Handle the failure case here if needed
}
