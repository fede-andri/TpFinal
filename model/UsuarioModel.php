<?php


class UsuarioModel
{
    private $database;

    public function __construct( $database)
    {
        $this->database = $database;
    }

    public function nuevoUsuario($data){

        $nombre = $data['nombre'];
        $apellido = $data['apellido'];
        $fecha_nac = $data['fecha_nac'];
        $dni = $data['dni'];
        $tipo_licencicia = $data['licencia'];
        $fecha_vencimiento = $data['vencimiento'];
        $email = $data['email'];
        $password  = $data['password'];
       return $this->database->query("INSERT INTO usuario (nombre, apellido, fecha_nac, dni, tipo_licencia, fecha_vencimiento, email, contraseña) 
        VALUES ('".$nombre."','".$apellido."','".$fecha_nac."','".$dni."','".$tipo_licencicia."','".$fecha_vencimiento."','".$email."','".$password."')");

       /* echo("INSERT INTO usuario (nombre, apellido, fecha_nac, dni, tipo_licencia, fecha_vencimiento, email, contraseña)
                                     VALUES ('".$data['nombre']."','".$data['apellido']."','".$data['fecha_nac']."','".$data['dni'].
            "','".$data['licencia']."','".$data['vencimiento']."','".$data['email']."','".$data['password']."')"); exit;   */
    }
}