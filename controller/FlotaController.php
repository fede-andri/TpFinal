<?php


class FlotaController
{
    private $model;
    private $renderer;

    public function __construct($flotaModel, $render){
        $this->model = $flotaModel;
        $this->renderer = $render;
    }

    public function index(){
        if(!empty($_SESSION['active'])){
            header("location: index.php");
        }else{
            $this->execute();
        }
    }

    public function execute(){
        $data['flota'] = $this->model->getFlota();
        echo $this->renderer->render("view/flotaView.php", $data);
    }
    public function eliminar(){
        $this->model->eliminar();
        $data['flota'] = $this->model->getFlota();
        echo $this->renderer->render("view/flotaView.php", $data);
    }

    public function nuevo(){
        echo $this->renderer->render("view/nuevoVehiculoView.php");
    }

    public function guardar(){
        $this->model->guardar();
        $data['flota'] = $this->model->getFlota();
        echo $this->renderer->render("view/flotaView.php", $data);
    }

    public function descripcion(){
        $data['flota'] = $this->model->getVehiculo();
        echo $this->renderer->render("view/editarVehiculoView.php", $data);
    }
}