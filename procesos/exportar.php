<?php
session_start();
require_once "../clases/Conexion.php";
require_once "../clases/Crud.php";

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

$crud = new Crud();

// Recoge las fechas del formulario
$fechaInicio = $_POST['fechaInicio'];
$fechaFin = $_POST['fechaFin'];
$opcion = $_POST['respuesta'];
$opcion = filter_var($opcion, FILTER_VALIDATE_BOOLEAN);

// Asumiendo que $datos es un array de documentos de la base de datos
$datos = $crud->obtenerTodosLosDatos($fechaInicio, $fechaFin, $opcion); // Asume que tienes una función que obtiene los documentos por fecha y la opción de incluir datos anteriores

//error_log(print_r($datos, true));

// Crear una instancia de PhpSpreadsheet
$spreadsheet = new Spreadsheet();
$sheet = $spreadsheet->getActiveSheet();

// Establecer encabezados
$encabezados = ['ID', 'Fecha', 'Nombre', 'Apellido', 'Tipo de Documento', 'Número de Documento', 'Correo', 'Teléfono', 'Dirección', 'Ciudad', 'EPS', 'Servicio'];
$columna = 'A';
foreach ($encabezados as $encabezado) {
    $sheet->setCellValue($columna . '1', $encabezado);
    $sheet->getColumnDimension($columna)->setAutoSize(true); // Ajustar el ancho de la columna
    $columna++;
}

// Llenar los datos
$fila = 2;
foreach ($datos as $item) {
    $columna = 'A';
    $sheet->setCellValue($columna . $fila, (string) $item['_id']); // Añade el ID del documento
    $columna++;
    $sheet->setCellValue($columna . $fila, $item['fecha']);
    $columna++;
    $sheet->setCellValue($columna . $fila, $item['nombre']);
    $columna++;
    $sheet->setCellValue($columna . $fila, $item['apellido']);
    $columna++;
    $sheet->setCellValue($columna . $fila, $item['documento']['tipo']);
    $columna++;
    $sheet->setCellValue($columna . $fila, $item['documento']['numero']);
    $columna++;
    $sheet->setCellValue($columna . $fila, $item['correo']);
    $columna++;
    $sheet->setCellValue($columna . $fila, $item['telefono']);
    $columna++;
    $sheet->setCellValue($columna . $fila, $item['direccion']);
    $columna++;
    $sheet->setCellValue($columna . $fila, $item['ciudad']);
    $columna++;
    $sheet->setCellValue($columna . $fila, $item['eps']);
    $columna++;
    $sheet->setCellValue($columna . $fila, $item['servicio']);
    $columna++;
    // Si el botón "Exportar" se ha hecho clic, establece el estado a "true"
    $fila++; 
}

// Crear el objeto de escritura
$writer = new Xlsx($spreadsheet);

// Configurar el encabezado para descargar
$nombreArchivo = 'exportacion_datos.xlsx';
header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header('Content-Disposition: attachment;filename="' . $nombreArchivo . '"');
header('Cache-Control: max-age=0');

// Guardar el archivo Excel en el navegador
$writer->save('php://output');



