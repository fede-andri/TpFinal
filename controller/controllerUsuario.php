<?php
class controllerUsuario{
    private $render;

    public function __construct($render){
        $this->render = $render;
    }

    public function execute(){
        echo $this->render->render("view/partial/registroUsuarioView.php");
    }

    public function agregarUsuario(){
        $data["nombre"];

    }



}