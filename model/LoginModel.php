<?php
    class LoginModel{
        private $conexion;

        public function __construct($database){
            $this->conexion=$database;
        }

        public function getUsuario($user,$password){
            return $this->conexion->query("SELECT * FROM usuarios WHERE email = '".$user. "' AND password = '".$password."';");
        }
    }

