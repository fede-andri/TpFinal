<?php


class ChoferController
{
    private $renderer;
    private $model;

    public function __construct($model,$renderer){
        $this->renderer = $renderer;
        $this->model = $model;
    }

    public function index()
    {
        session_start();
        if (isset($_SESSION['nombre'])) {

            if ($_SESSION['rol'] == 3) {
                echo $this->renderer->render("view/choferView.php");
            }
        } else {
            ob_start();
            echo $this->renderer->render("view/loginView.php");
        }
    }
    public function iniciar(){
        @$fecha = date("Y-m-d H:i:s",time());
        $date = new DateTime($fecha, new DateTimeZone('America/Argentina/Buenos_Aires'));
        date_default_timezone_set('America/Argentina/Buenos_Aires');
        $zonahoraria = date_default_timezone_get();
        @$fecha=date("Y-m-d" );
        @$hora = date("H:i:s",time());







    }
}

