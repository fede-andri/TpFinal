<?php

    class LoginController{
        private $renderer;
        private $model;

        public function __construct($model,$renderer){
            $this->renderer = $renderer;
            $this->model = $model;
        }

        
         public function index(){
            session_start();
            if(!empty($_SESSION['active'])){
                echo $this->renderer->render("view/reportesView.php");
            }else{
                ob_start();
                echo $this->renderer->render("view/loginView.php");
                if(!empty($_POST)){
                    if(empty($_POST['email'])||empty($_POST['clave'])){

                        header("location: index.php");
                    }else{
                        $dataUsuario = $this->model->getUsuario($_POST['email'],md5($_POST['clave']));
                        if(count($dataUsuario)>0 and $dataUsuario[0]["id_rol"]>0){
                            $_SESSION['active']=true;
                            $_SESSION['id_usuario']= $dataUsuario[0]['id_usuario'];
                            $_SESSION['nombre']=$dataUsuario[0]['nombre'];
                            $_SESSION['apellido'] = $dataUsuario[0]['apellido'];
                            $_SESSION['email'] = $dataUsuario[0]['email'];
                            $dataSesion = array();
                            $dataSesion["datos"]['active'] = $_SESSION['active'];
                            $dataSesion["datos"]['email'] = $_SESSION['email'];
                            $dataSesion["datos"]['id_usuario'] = $_SESSION['id_usuario'];
                            $dataSesion["datos"]['nombre'] = $_SESSION['nombre'];
                            $dataSesion["datos"]['apellido'] = $_SESSION['apellido'];
                            ob_end_clean();
                            $this->renderer->render("view/partial/header.mustache",$dataSesion);
                            echo $this->renderer->render("view/reportesView.php",$dataSesion);
                        }else{
                            header("location: index.php");
                            session_destroy();
                        }
                    }
                }
            }
        }

        public function verificar()
        {
            $usuario = $_POST['email'];
            $clave = $_POST['clave'];
            if(($usuario != '') && ($clave != ''))
            {
                $data['nombre'] = $this->model->validarUsuario($usuario, $clave);
                if(!empty($data)){
                    echo $this->renderer->render("view/homeView.php", $data);
                }else{
                    header("location: index.php");
                }
            }else{
                header("location: index.php");
            }
        }
    }

