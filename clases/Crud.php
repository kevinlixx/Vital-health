<?php

class crud
{
    public function insertarDatos($datos)
    {
        try {
            $conexion = Conexion::conectar();
            $coleccion = $conexion->users;
            $respuesta = $coleccion->insertOne($datos);
            return iterator_to_array($respuesta);
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    }
    public function mostrarDatos() {
        require_once "./clases/Conexion.php";
        try {
            $conexion = Conexion::conectar();
            $coleccion = $conexion->users;
            $datos = $coleccion->find();
            return $datos; // Convertir el cursor a un array
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    }
    public function consultaInfo($id_registro) {
        require_once "./clases/Conexion.php";
        try {
            $conexion = Conexion::conectar();
            $coleccion = $conexion->users;
            $datos = $coleccion->find($id_registro);
            return $datos; // Convertir el cursor a un array
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    }
    public function actualizar($id, $datos) {
        try {
            $id= new MongoDB\BSON\ObjectId($id);
            $conexion = Conexion::conectar();
            $coleccion = $conexion->users;
            $respuesta = $coleccion->updateOne(
                                        ['_id' => $id],
                                        [
                                            '$set' => $datos    
                                        ]
                                    );
            return $respuesta;
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    }
    
    public function eliminar($id) {
        try {
            $conexion = Conexion::conectar();
            $coleccion = $conexion->users;
            $respuesta = $coleccion->deleteOne(
                                        array(
                                            "_id" => new MongoDB\BSON\ObjectId($id)
                                        )
                                    );
            return $respuesta;
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    }
    public function obtenerTodosLosDatos($fechaInicio, $fechaFin, $opcion)
    {
            // Verificar las fechas
            if (!$fechaInicio || !$fechaFin || $fechaInicio > $fechaFin) {
                throw new Exception('Las fechas proporcionadas no son válidas.');
            }

            try {
                $conexion = Conexion::conectar();
                $coleccion = $conexion->users;

                // Crear el filtro basado en las fechas
                // Agregar la condición del estado

                $filtro = [
                    'fecha' => [
                        '$gte' => $fechaInicio,
                        '$lte' => $fechaFin
                    ]
                ];

                if ($opcion == true) {
                    $filtro['estado'] = ['$in' => [true, false]];
                } elseif ($opcion == false) {
                    $filtro['estado'] = false;
                }

                // Obtener los documentos que coinciden con el filtro
                $respuesta = $coleccion->find($filtro)->toArray();

                // Verificar si se obtuvieron documentos
                if (empty($respuesta)) {
                    throw new Exception('No se encontraron documentos que coincidan con el filtro.');
                }

                // Actualizar el estado de los documentos
                $actualizarEstado = $coleccion->updateMany($filtro, ['$set' => ['estado' => true]]);
                return $respuesta;
            } catch (\Throwable $th) {
                // Registrar el error y lanzar la excepción
                error_log($th->getMessage());
                throw $th;
            }
        }


}
