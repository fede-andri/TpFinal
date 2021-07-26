<?php


class ClienteModel
{
    private $database;

    public function __construct($database)
    {
        $this->database = $database;
    }

    public function getCliente(){
        $cuil = $_POST['cuil'];
        $sql = "SELECT  *  FROM cliente WHERE cuil = '".$cuil."'";
        return $this->database->query($sql);
    }

    public function guardar(){
        $denominacion = $_POST['denominacion'];
        $cuil = $_POST['cuil'];
        $nombre= $_POST['nombre'];
        $apellido= $_POST['apellido'];
        $calle= $_POST['calle'];
        $numero= $_POST['numero'];
        $localidad= $_POST['localidad'];
        $email= $_POST['email'];
        $codigo_postal= $_POST['codigo_postal'];
        $contacto1= $_POST['contacto1'];
        $contacto2= $_POST['contacto2'];
        $telefono= $_POST['telefono'];

        $sql1 = "INSERT INTO cliente (denominacion, cuil, nombre, apellido, calle, numero, localidad, email, codigo_postal, contacto1, contacto2, telefono) 
                    VALUES ('".$denominacion."','".$cuil."','".$nombre."','".$apellido."','".$calle."','".$numero."','".$localidad."','".$email."','".
            $codigo_postal."','".$contacto1."','".$contacto2."','".$telefono."')";

        $this->database->execute($sql1);
    }


}