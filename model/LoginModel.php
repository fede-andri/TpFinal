<?php
    class LoginModel{
        private $conexion;

        public function __construct($database){
            $this->conexion=$database;
        }

        public function validarUsuario($user,$password){
            if(isset($user) && isset($password)){
                return $this->conexion->query("SELECT id_rol, nombre, apellido FROM usuario WHERE email = '".$user. "' AND contraseña = '".$password."'");
            }else{
                header("location: index.php");
            }

        }
    }

