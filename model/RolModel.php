<?php

class RolModel
{
    private $database;

    public function __construct($database)
    {
        $this->database = $database;
    }

    public function getRoles(){
        return $this->database->query("SELECT * FROM usuario");
    }

    public function getRol($id){
        $sql = "SELECT * FROM usuario where id_usuario= '" . $id."'";
        return $this->database->query($sql);
    }

    public function setRol($id, $rol)
    {
        $sql = "UPDATE usuario SET id_rol=". $rol . " WHERE id_usuario=" .$id;

        return $this->database->query($sql);
    }
}