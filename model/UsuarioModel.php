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
        $password1  = $_POST['password1'];
        $password2  = $_POST['password2'];

        if($password1 == $password2){

            $sql = "INSERT INTO usuario (nombre, apellido, fecha_nac, dni, tipo_licencia, fecha_vencimiento, email, password) 
            VALUES ('".$nombre."','".$apellido."','".$fecha_nac."',".$dni.",'".$tipo_licencia."','".$fecha_vencimiento."','".$email."','".$password1."')";
            $this->database->execute($sql);
            $sql = "SELECT * FROM usuario WHERE email = '". $email."'";
            $resultado = $this->database->query($sql);
            if($email == $resultado[0]['email']){
                return true;
            }else{
                return false;
            }
        }else{
            return false;
        }
    }

    public function listarUsuarios(){
        $sql = "SELECT * FROM usuario ";
        return $this->database->query($sql);
    }

    public function getUsuario($email){
        $sql = "SELECT * FROM usuario WHERE email = ".$email;
        return $this->database->query($sql);
    }

    public function eliminarUsuario(){
        $id = $_GET['id_usuario'];
        $sql = "DELETE FROM usuario WHERE id_usuario LIKE '".$id."'";
        $this->database->execute($sql);
    }
    public function activar(){
        $id = $_GET['id_usuario'];
        $sql = "SELECT activo FROM usuario WHERE id_usuario = '".$id."'";
        $estado = $this->database->query($sql);

        if ($estado[0]['activo'] == 'inactivo'){
            $sql =  "UPDATE usuario SET activo = 'activo' WHERE id_usuario = '".$id."'";
        }else{
            $sql =  "UPDATE usuario SET activo = 'inactivo' WHERE id_usuario = '".$id."'";
        }
            $this->database->execute($sql);
    }
}