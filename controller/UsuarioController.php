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
        $valorVerifica = $this->usuarioModel->getUsuario($_POST['email']);

        if($resultado == TRUE){

            $para      = $_POST['email'];
            $titulo    = 'noreply@example.com';
            $mensaje   = ' Ud. ha recibido este mail de verificacion de cuenta de nuestro sitio, por favor haga click en el siguiente enlace para completar el registro  '.
                        'www.transportesanjusto.com//index.php?module=usuario&action=activarUsuario&id_usuario='.$valorVerifica['id_usuario'];
            $cabeceras = 'From: transportesanjusto@gmail.com' . "\r\n" .
                'Reply-To: webmaster@example.com' . "\r\n" .
                'X-Mailer: PHP/' . phpversion();

            @mail($para, $titulo, $mensaje, $cabeceras);

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
        $this->usuarioModel->eliminarUsuario();
        $data['usuarios'] = $this->usuarioModel->listarUsuarios();
        echo $this->render->render("view/usuariosView.php", $data);
    }

    public function activarUsuario(){
        $this->usuarioModel->activar();
        $data['usuarios'] = $this->usuarioModel->listarUsuarios();
        echo $this->render->render("view/usuariosView.php", $data);
    }
}