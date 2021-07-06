<?php


class UsuarioModel
{
    private $database;

    public function __construct( $database)
    {
        $this->database = $database;
    }

    public function nuevoUsuario(){

        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $fecha_nac = $_POST['fecha_nac'];
        $dni = $_POST['dni'];
        $tipo_licencia = $_POST['licencia'];
        $fecha_vencimiento = $_POST['vencimiento'];
        $email = $_POST['email'];
        $password  = $_POST['password'];

        $sql = "INSERT INTO usuario (nombre, apellido, fecha_nac, dni, tipo_licencia, fecha_vencimiento, email, password 
        VALUES ('".$nombre."','".$apellido."','".$fecha_nac."',".$dni.",'".$tipo_licencia."','".$fecha_vencimiento."','".$email."','".$password."')";
        //echo $sql; exit;
        return $this->database->query($sql);

    }

    public function listarUsuarios(){
        $sql = "SELECT * FROM usuario ";
        return $this->database->query($sql);
    }

    public function getAltaUsuario(){
        $sql = "SELECT * FROM usuario WHERE activo = NULL";
    }

    public function eliminarUsuario(){
        $sql = "DELETE FROM usuario WHERE id_usuario LIKE "
    }
}