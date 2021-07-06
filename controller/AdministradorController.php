<?php


class AdministradorController
{
    private $renderer;
    private $model;

    public function __construct($model,$renderer){
        $this->renderer = $renderer;
        $this->model = $model;
    }
    public function index(){
        session_start();
        if(isset($_SESSION['nombre'])){

            if($_SESSION['rol'] == 1) {
                echo $this->renderer->render("view/administradorView.php");
            }
        }else{
            ob_start();
            echo $this->renderer->render("view/loginView.php");
        }
    }


    public function altaUsuario(){

    }
}