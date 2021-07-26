<?php
    class LoginModel{
        private $conexion;

        public function __construct($database){
            $this->conexion=$database;
        }

        public function validarUsuario($user,$password){
            if(isset($user) && isset($password)){
                $sql = "SELECT id_rol, nombre, apellido, activo FROM usuario WHERE email = '".$user. "' AND password = '".$password."'";
                return $this->conexion->query($sql);

            }else{
                header("location: index.php");
            }
            return null;
        }
    }

