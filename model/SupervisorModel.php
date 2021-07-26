<?php


class SupervisorModel
{
    private $conexion;

    public function __construct($database){
        $this->conexion=$database;
    }
}