<?php

class RolController {
    private $rolModel;
    private $render;

    public function __construct($rolModel, $render){
        $this->rolModel = $rolModel;
        $this->render = $render;
    }

    public function index(){
        if(!empty($_SESSION['active'])){
            header("location: index.php");
        }else{
            $this->execute();
        }
    }


    public function execute(){
        $data["roles"] = $this->rolModel->getRoles();
        echo $this->render->render("view/rolView.php", $data);
    }

    public function description(){
        $id = $_GET['id'];
        $data["rol"] = $this->rolModel->getRol($id);
        echo $this->render->render("view/rolDescriptionView.php", $data);
    }

    public function update(){
        $id = $_GET['id'];
        $rol = $_GET['rol'];
        $this->rolModel->setRol($id, $rol);
        $data["roles"] = $this->rolModel->getRoles();
        echo $this->render->render("view/rolView.php", $data);
    }
}