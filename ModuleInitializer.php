<?php
require_once("helper/Renderer.php");
include_once("helper/Database.php");
include_once("helper/Config.php");
require_once('third-party/src/Mustache/Autoloader.php');


class ModuleInitializer{
    private $renderer;
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

    public function createAdministradorController(){
        include_once("controller/AdministradorController.php");
        include_once("model/AdministradorModel.php");
        $model = new AdministradorModel($this->database);
        return new AdministradorController($model, $this->renderer);
    }

    public function createChoferController(){
        include_once("controller/ChoferController.php");
        include_once("model/ChoferModel.php");
        $model = new ChoferModel($this->database);
        return new ChoferController($model, $this->renderer);
    }

    public function createFlotaController(){
        include_once("controller/FlotaController.php");
        include_once("model/FlotaModel.php");
        $model = new FlotaModel($this->database);
        return new FlotaController($model, $this->renderer);
    }

    public function createViajeController(){
        include_once("controller/ViajeController.php");
        include_once("model/ViajeModel.php");
        $model = new ViajeModel($this->database);
        return new ViajeController($model, $this->renderer);
    }

    public function createSupervisorController(){
        include_once("controller/SupervisorController.php");
        include_once("model/SupervisorModel.php");
        $model = new SupervisorModel($this->database);
        return new SupervisorController($model, $this->renderer);
    }

    public function createClienteController(){
        include_once("controller/ClienteController.php");
        include_once("model/ClienteModel.php");
        $model = new ClienteModel($this->database);
        return new ClienteController($model, $this->renderer);
    }
}
