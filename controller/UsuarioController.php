<?php


class UsuarioController
{
    private $usuarioModel;
    private $render;

    public function __construct($model, $renderer)
    {
        $this->usuarioModel = $model;
        $this->render = $renderer;
    }

    public function registrarUsuario(){
        $data=null;
        echo $this->render->render("view/registroUsuarioView.php");
    }

    public function guardarUsuario(){
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $fecha_nac = $_POST['fecha_nac'];
        $dni = $_POST['dni'];
        $licencia = $_POST['licencia'];
        $vencimiento = $_POST['vencimiento'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        $data = array('nombre'=>$nombre, 'apellido'=>$apellido, 'fecha_nac'=>$fecha_nac, 'dni'=>$dni, 'licencia'=>$licencia, 'vencimiento'=>$vencimiento, 'email'=>$email, 'password'=>$password);

        $this->usuarioModel->nuevoUsuario($data);
    }
}