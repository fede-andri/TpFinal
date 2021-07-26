<?php

    class Database{
        private $conexion;

        public function __construct($servername,$username,$password,$dbname){
            $this->conexion = mysqli_connect($servername,$username,$password,$dbname) or die("Error en la conexion: ".mysqli_connect_error());
        }

        public function query($sql){
            $resultado = mysqli_query($this->conexion , $sql);
            if($resultado){
                return mysqli_fetch_all($resultado,MYSQLI_ASSOC);
            }else{
                return false;
            }
        }

        public function execute($sql){
            mysqli_query($this->conexion, $sql);
        }
        public function __destruct(){
            mysqli_close($this->conexion);
        }

        public static function createDatabaseFromConfig(Config $config){
            return new Database(
                $config->get("database","servername"),
                $config->get("database","username"),
                $config->get("database","password"),
                $config->get("database","dbname")
            );
        }

    }

?>
