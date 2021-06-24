<?php
class controllerUsuario{
    private $render;

    public function __construct($render){
        $this->render = $render;
    }

    public function execute(){
        echo $this->render->render("view/partial/registroView.php");
    }

    public function agregarUsuario(){
        $data["nombre"]

    }



}