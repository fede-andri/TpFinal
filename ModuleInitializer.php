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

    public function createDefaultController(){
        return $this->createLoginController();
    }
}
