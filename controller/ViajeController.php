<?php


class ViajeController
{
    private $model;
    private $renderer;

    public function __construct($viajeModel, $render){
        $this->model = $viajeModel;
        $this->renderer = $render;
    }

    public function index(){
        if(!empty($_SESSION['active'])){
            header("location: index.php");
        }else{
            $this->execute();
        }
    }

    public function execute()
    {
        $data['viaje'] = $this->model->getViajes();
        echo $this->renderer->render("view/viajeView.php", $data);
    }

    public function getViaje(){
       $data['viaje'] = $this->model->getViaje();
       echo $this->renderer->render("view/viajeView.php", $data);
    }

    public function nuevo(){
        echo $this->renderer->render("view/nuevoViajeView.php");
    }

    public  function guardar(){
        $this->model->guardarViaje();
        $data['viaje'] = $this->model->getViajes();
        echo $this->renderer->render("view/viajeView.php", $data);
    }

    public function eliminar(){
        $this->model->eliminar();
        $data['viaje'] = $this->model->getViajes();
        echo $this->renderer->render("view/viajeView.php", $data);
    }

    public function description(){
        $data['viaje'] = $this->model->getViaje();

        echo $this->renderer->render("view/detalleViajeView.php", $data);
    }
}