<?php


class ClienteController
{
    private $model;
    private $renderer;

    public function __construct($clienteModel, $render){
        $this->model = $clienteModel;
        $this->renderer = $render;
    }

    public function index(){
        session_start();
        if(isset($_SESSION['nombre'])){

            if($_SESSION['rol'] == 2) {
                echo $this->renderer->render("view/nuevoClienteView.php");
            }
        }else{
            ob_start();
            echo $this->renderer->render("view/loginView.php");
        }
    }

    public function verificar(){
        $data['cliente'] = $this->model->getCliente();
        $cuil = $_POST['cuil'];


        if($data['cliente']){
            echo $this->renderer->render("view/nuevoViajeView.php",$data);
        }else{
            $data['cliente'][0]['cuil'] = $cuil;
            echo $this->renderer->render("view/nuevoClienteView.php",$data);
        }

    }

    public function nuevo(){
        echo $this->renderer->render("view/clienteView.php");
    }

    public function guardar(){
        $this->model->guardar();
        $data['cliente'] = $this->model->getCliente();
        echo $this->renderer->render("view/nuevoClienteView.php",$data);
    }
}