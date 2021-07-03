<?php
require_once("helper/Renderer.php");
include_once("helper/Database.php");
include_once("helper/Config.php");
require_once('third-party/src/Mustache/Autoloader.php');


class ModuleInitializer{
    private $render;
    private $database;
    private $configuracion;

    public function __construct(){
        $this->renderer= new Renderer("view/partial");
        $this->configuracion = new Config("config/config.ini");
        $this->database = Database::createDatabaseFromConfig($this->configuracion);
    }

    public function createLoginController(){
        include_once("controller/LoginController.php");
        include_once("model/LoginModel.php");
        $model = new LoginModel($this->database);
        return new LoginController($model,$this->renderer);
    }

    public function createUsuarioController(){
        include_once("controller/UsuarioController.php");
        include_once("model/UsuarioModel.php");
        $model = new UsuarioModel($this->database);
        return new UsuarioController($model, $this->renderer);
    }

    public function createRolController(){
        include_once("controller/RolController.php");
        include_once("model/RolModel.php");
        $model= new RolModel($this->database);
        return new RolController($model, $this->renderer);
    }


}
