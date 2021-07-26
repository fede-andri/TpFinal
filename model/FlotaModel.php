<?php


class FlotaModel
{   private $database;

    public function __construct($database)
    {
        $this->database = $database;
    }

    public function getFlota(){
        $sql = "SELECT * FROM vehiculo";
        return $this->database->query($sql);
    }

    public function getVehiculo(){
        $id = $_GET['id'];
        $sql = "SELECT * FROM vehiculo WHERE id_vehiculo = ".$id;
        return $this->database->query($sql);
    }
    public function eliminar(){
        $id = $_GET['id'];
        $sql = "DELETE FROM vehiculo WHERE id_vehiculo LIKE '".$id."'";
        $this->database->execute($sql);
    }

    public function guardar(){

        $tipo = $_POST['tipo'];
        $inicio_actividad = $_POST['inicio_actividad'];
        $patente = $_POST['patente'];
        $nro_chasis = $_POST['nro_chasis'];
        $modelo = $_POST['modelo'];
        $marca = $_POST['marca'];
        $nro_motor = $_POST['nro_motor'];
        $kilometraje = $_POST['kilometraje'];
        $horas_servicio = $_POST['horas_servicio'];
        $fecha_ultimo_service = $_POST['fecha_ultimo_service'];
        $km_ultimo_service = $_POST['km_ultimo_service'];
        $anio_fabricacion =   $_POST['anio_fabricacion'];
        $sql = "INSERT INTO vehiculo ( tipo, inicio_actividad, patente, nro_chasis, modelo, marca, nro_motor, 
                      kilometraje, horas_servicio, fecha_ultimo_service, km_ultimo_service, año_fabricacion) VALUES 
                      ('".$tipo."','" .$inicio_actividad."','".$patente."','" .$nro_chasis."','". $modelo."','". $marca."','". $nro_motor."','".
                      $kilometraje."','". $horas_servicio."','".$fecha_ultimo_service."','". $km_ultimo_service."','". $anio_fabricacion."')";
        $this->database->execute($sql);

    }

    public function actualizar(){
        $tipo = $_POST['tipo'];
        $inicio_actividad = $_POST['inicio_actividad'];
        $patente = $_POST['patente'];
        $nro_chasis = $_POST['nro_chasis'];
        $modelo = $_POST['modelo'];
        $marca = $_POST['marca'];
        $nro_motor = $_POST['nro_motor'];
        $kilometraje = $_POST['kilometraje'];
        $horas_servicio = $_POST['horas_servicio'];
        $fecha_ultimo_service = $_POST['fecha_ultimo_service'];
        $km_ultimo_service = $_POST['km_ultimo_service'];
        $anio_fabricacion =   $_POST['anio_fabricacion'];
        $sql = "UPDATE vehiculo SET tipo = '".$tipo."', inicio_actividad = '".$inicio_actividad."' , patente = '".$patente."'
                ,nro_chasis = '" .$nro_chasis."', modelo = '".$modelo."' , marca = '". $marca."', nro_motor = '". $nro_motor."'
                , kilometraje = '" .$kilometraje."', horas_servicio = '". $horas_servicio."'fecha_ultimo_service ='".$fecha_ultimo_service."'   
                ,km_ultimo_service = '". $km_ultimo_service."', año_fabricacion= '". $anio_fabricacion."')";
        $this->database->execute($sql);
    }
}