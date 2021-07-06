<?php


class UsuarioController
{
    private $usuarioModel;
    private $render;

    public function __construct($model, $renderer)
    {
        $this->usuarioModel = $model;
        $this->render = $renderer;
    }

    public function registrarUsuario(){
        echo $this->render->render("view/registroUsuarioView.php");
    }

    public function guardarUsuario(){

        $resultado = $this->usuarioModel->nuevoUsuario();
        //$resultado = TRUE;
        if($resultado == TRUE){
            echo $this->render->render("view/registroExitosoView.php");
        }else{
            echo $this->render->render("view/registroErroneoView.php");
        }
    }

    public function getUsuarios(){
        $data['usuarios'] = $this->usuarioModel->listarUsuarios();
        if(count($data)>0){
            //var_dump($data); exit;
            echo $this->render->render("view/usuariosView.php",$data);
        }

    }
    public function bajaUsuario(){
        $data = $this->usuarioModel->eliminarUsuario();
            if(count($data) != 0 ){
                echo $this->render->render("view/usuariosView.php", $data);
            }else{

            }
    }
}