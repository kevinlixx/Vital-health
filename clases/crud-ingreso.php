<?php 

    require_once "../clases/Conexion.php";
    $conexion = new Conexion();
    $conexion->conectar();
    class crud {
        public function consultarDatos($datos) {
            try {
                $conexion = Conexion::conectar();
                $coleccion = $conexion->admins;
                $resultado = $coleccion->find($datos);
                return iterator_to_array($resultado); // Convertir el cursor a un array
            } catch (\Throwable $th) {
                return $th->getMessage();
            }
        }
        
        public function insertarDatos($datos){
            try {
                $conexion = Conexion::conectar();
                $coleccion = $conexion->admins;
                $respuesta= $coleccion->insertOne($datos);
                return iterator_to_array($respuesta);
            } catch (\Throwable $th) {
                return $th->getMessage();
            }
        }
    }

?>