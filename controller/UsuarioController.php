<?php


class UsuarioController
{
    private $usuarioModel;
    private $render;

    public function __construct(\UsuarioModel $model, \Renderer $renderer)
    {
        $this->usuarioModel = $model;
        $this->render = $renderer;
    }

    public function registrarUsuario(){
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $dni = $_POST['dni'];
        $licencia = $_POST['licencia'];
        $vencimiento = $_POST['vencimiento'];
    }
}