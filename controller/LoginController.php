<?php

    class LoginController{
        private $renderer;
        private $model;

        public function __construct($model,$renderer){
            $this->renderer = $renderer;
            $this->model = $model;
        }

        
      public function index(){
                $alert = array();
                session_start();
                if(!empty($_SESSION['active'])){
                    echo $this->renderer->render("view/reportesView.php");
                }else{
                    echo $this->renderer->render("view/loginView.php");
                    if(!empty($_POST)){
                        if(empty($_POST['usuario'])||empty($_POST['clave'])){
                            $alert["alerta"] = "Ingrese su usuario y contraseña";
                            $this->renderer->render("view/loginView.php",$alert);
                            header("location: index.php");
                        }else{
                            $dataUsuario = $this->model->getUsuario($_POST['usuario'],md5($_POST['clave']));
                            if(count($dataUsuario)>0){
                                $_SESSION['active']=true;
                                $_SESSION['id']= $dataUsuario[0]['id'];
                                $_SESSION['nombre']=$dataUsuario[0]['nombre'];
                                $_SESSION['apellido'] = $dataUsuario[0]['apellido'];
                                $_SESSION['usuario'] = $dataUsuario[0]['usuario'];
                                $dataSesion = array();
                                $dataSesion['active'] = $_SESSION['active'];
                                $dataSesion['usuario'] = $_SESSION['usuario'];
                                $dataSesion['id'] = $_SESSION['id'];
                                $dataSesion['nombre'] = $_SESSION['nombre'];
                                $dataSesion['apellido'] = $_SESSION['apellido'];
                                $this->renderer->render("view/reportesView.php",$dataSesion);
                                header("location: reportesView.php");
                            }else{
                                $alert["alerta"] = "El usuario o la contraseña son incorrectos";
                                $this->renderer->render("view/loginView.php",$alert);
                                header("location: index.php.php");
                                session_destroy();
                            }
                        }
                    }
                }
            }
    }

?>