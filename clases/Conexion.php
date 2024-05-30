<?php
    require_once $_SERVER['DOCUMENT_ROOT'] . "../vendor/autoload.php";
    

    class Conexion {
        public static function conectar(){
            try {
                $servidor = "127.0.0.1";
                $usuario = "vitaldb";
                $password = "12345678";
                $baseDatos = "vitalhealth";
                $puerto = "27017";

                $cadenaConexion ="mongodb://".$usuario.":".$password."@". $servidor. ":". $puerto."/". $baseDatos;

                $cliente = new MongoDB\Client($cadenaConexion);
                return $cliente->selectDatabase($baseDatos);
            } catch (\Throwable $th) {
                return $th->getMessage();
            }
        }
    }

    /*  $objeto = new Conexion();
        var_dump($objeto->conectar()); */
?>