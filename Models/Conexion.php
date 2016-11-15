<?php
    /**
     * Clase para la conexion a base de datos
     */
    class Conexion {

        private $datos = array(
            "host" => "localhost",
            "user" => "root",
            "pass" => "123456",
            "db" => "dbproyecto"
        );

        private $con;

        public function __construct() {
            # code...
            $this->con = new mysqli(
                $this->datos['host'],
                $this->datos['user'],
                $this->datos['pass'],
                $this->datos['db']
            );
        }

        public function consulta($sql){
            $this->con->query($sql);
        }

        public function consultaRetorno($sql){
            $datos = $this->con->query($sql);
            return $datos;
        }
    }

    $conexion = new Conexion();
    var_dump($conexion);
?>
