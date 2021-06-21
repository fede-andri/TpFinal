<?php

include_once("helper/database.php");
include_once("helper/Render.php");
include_once("helper/UrlHelper.php");
include_once("model/RolModel.php");
include_once("model/UsuarioModel.php");
include_once("controller/RolController.php");
include_once("controller/UsuarioController.php");
include_once('third-party/mustache/src/Mustache/Autoloader.php');
include_once("Router.php");

/*************** Cada controlador con su modulo  ******************************/
class Configuration
{

    /*************************** Modelos *********************************/

    public function getRolModel()     //crea una intancia de de la base de datos
    {
        $database = $this->getDatabase();
        return new RolModel($database);
    }

    public function getUsuarioModel()
    {
        $database = $this->getDatabase();
        return new UsuarioModel($database);
    }


    /************************** Controladores *********************************/


    public function getUsuarioController()
    {
        $usuarioModel = $this->getUsuarioModel();
        return new UsuarioController($usuarioModel, $this->getRender());
    }

    public function getRolController()
    {                                 // controlador de la pagina roles
        $rolModel = $this->getRolModel();
        return new RolController($rolModel, $this->getRender());
    }
    public function getDescriptionController($id)
    {
        $rolModel = $this->getRolModel($id);
        return new RolController($rolModel, $this->getRender());
    }

    public function getUpdateController($id)
    {
        $rol = $_GET['nuevoRol'];
        $rolModel = $this->setRolModel($id, $rol);
        return new RolController($rolModel, $this->getRender());
    }
    /****************************  Ruteadores ******************************/

    public function getRouter()
    {     // instancia de router

        return new Router($this);

    }

    public function getUrlHelper()
    {    // instancia de urlhelper
        return new UrlHelper();
    }

    public function getRender()
    {                           // preparando la direccion de la vista
        return new Render('view/partial');
    }

    /********************************* Base de datos  ******************************/

    private function getDatabase()
    {   // crea la instancia de la base de datos
        $config = $this->getConfig();
        return new Database(
            $config["servername"],
            $config["username"],
            $config["password"],
            $config["dbname"]
        );
    }

    private function getConfig()
    {                    // toma la configuracion del acceso a la base de datos
        return parse_ini_file("config/config.ini");
    }

}

