<?php


class AdministradorModel
{
    private $conexion;

    public function __construct($database){
        $this->conexion=$database;
    }


}