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
            if(isset($_SESSION['nombre'])){
                LoginController::verificar();
            }else{
                ob_start();
                echo $this->renderer->render("view/loginView.php");
            }
        }

        public function verificar()
        {
            $usuario = $_POST['email'];
            $clave = $_POST['clave'];
            if(($usuario != '') && ($clave != ''))
            {
                $data = $this->model->validarUsuario($usuario, $clave);


                if($data){

                    if($data[0]['activo'] == 'activo'){
                        session_start();
                        $_SESSION['nombre'] = $data[0]['nombre'];
                        $_SESSION['apellido'] = $data[0]['apellido'];
                        $_SESSION['rol'] = $data[0]['id_rol'];

                        switch($_SESSION['rol']){
                            case 1:
                                header("location: index.php?module=administrador&action=index");
                                break;
                            case 2:
                                header("location: index.php?module=supervisor&action=index");
                                break;
                            case 3:
                                header("location: index.php?module=chofer&action=index");
                                break;
                            case 4:
                                echo $this->renderer->render("view/mecanicoView.php", $data);
                                break;
                            default:
                                echo $this->renderer->render("view/loginView.php", $data);
                                break;
                        }
                    }
                    else{
                        echo $this->renderer->render("view/loginErroneoView.php",$data);
                    }
                }else{
                    echo $this->renderer->render("view/loginErroneoView.php",$data);
                }
            }else{
                header("location: index.php");
            }
        }
        public function cerrarSesion(){
            session_start();
            session_unset();
            session_destroy();
            echo $this->renderer->render("view/loginView.php");
        }

        public function reseteo()
        {
            echo $this->renderer->render("view/loginResetearPasswordView.php");
        }

        public function resetearpassword(){

            $email = $_GET('email');
            $usuario = $this->model->verificarLogin();
            if($usuario){
                echo $this->rederer->render("view/reseteoExitosoLogin.php");
            }else{
                echo $this->rederer->render("view/reseteoErroneoLogin.php");
            }

        }
    }

