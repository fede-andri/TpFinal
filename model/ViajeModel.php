<?php


class ViajeModel
{
    private $database;

    public function __construct($database)
    {
        $this->database = $database;
    }

    public function getViajes(){
        $sql = "SELECT DISTINCT * FROM viaje";
        return $this->database->query($sql);
    }

    public function getViaje(){
        $id = $_GET['id'];
        $sql = "SELECT DISTINCT * FROM viaje JOIN cliente ON viaje.id_cliente = cliente.id_cliente WHERE id_viaje = ".$id;

        return $this->database->query($sql);

    }
    public function eliminar(){
        $id = $_GET['id'];
        $sql = "DELETE FROM viaje WHERE id_viaje LIKE '".$id."'"; //elimino solo el viaje y no el cliente
        $this->database->execute($sql);

    }
    public function guardarViaje(){


        $fecha = $_POST['fecha'];
        $origen = $_POST['origen'];
        $destino= $_POST['destino'];
        $fecha_carga = $_POST['fecha_carga'];
        $eta_viaje = $_POST['eta_viaje'];
        $tipo_carga= $_POST['tipo_carga'];
        $peso_neto= $_POST['peso_neto'];
        $carga_hazard= $_POST['carga_hazard'];
        $hazard_imo_class= $_POST['hazard_imo_class'];
        $carga_reefer= $_POST['carga_reefer'];
        $reefer_temperatura= $_POST['reefer_temperatura'];
        $kilometros_estimados= $_POST['kilometros_estimados'];
        $kilometros_reales= $_POST['kilometros_reales'];
        $cant_combustible_estimado= $_POST['cant_combustible_estimado'];
        $cant_combustible_real= $_POST['cant_combustible_real'];
        $etd_estimado= $_POST['etd_estimado'];
        $etd_real= $_POST['etd_real'];
        $eta_estimado= $_POST['eta_estimado'];
        $eta_real= $_POST['eta_real'];
        $viaticos_estimado= $_POST['viaticos_estimado'];
        $viaticos_real= $_POST['viaticos_real'];
        $peaje_pesaje_estimado= $_POST['peaje_pesaje_estimado'];
        $peaje_pasaje_real= $_POST['peaje_pasaje_real'];
        $extras_estimado= $_POST['extras_estimado'];
        $extras_real= $_POST['extras_real'];
        $hazard_estimado= $_POST['hazard_estimado'];
        $hazard_real= $_POST['hazard_real'];
        $reefer_estimado= $_POST['reefer_estimado'];
        $reefer_real= $_POST['reefer_real'];
        $fee_estimado= $_POST['fee_estimado'];
        $fee_real= $_POST['fee_real'];
        $id_cliente = $_POST['id_cliente'];


        $sql2 = "INSERT INTO viaje (fecha, origen, destino, fecha_carga, eta_viaje, tipo_carga, peso_neto, carga_hazard, hazard_imo_class, carga_reefer,
                reefer_temperatura, kilometros_estimados, kilometros_reales, cant_combustible_estimado, cant_combustible_real,
                etd_estimado, etd_real, eta_estimado, eta_real, viaticos_estimado, viaticos_real, peaje_pesaje_estimado, peaje_pesaje_real, 
                extras_estimado, extras_real, hazard_estimado, hazard_real, reefer_estimado, reefer_real, fee_estimado, fee_real, id_cliente) 
                VALUES('".$fecha."','".$origen."','".$destino."','". $fecha_carga."','".$eta_viaje."','".$tipo_carga."','".$peso_neto."','".
                $carga_hazard."','".$hazard_imo_class."','".$carga_reefer."','".$reefer_temperatura."','".$kilometros_estimados."','".
                $kilometros_reales."','".$cant_combustible_estimado."','".$cant_combustible_real."','".$etd_estimado."','".$etd_real
                ."','".$eta_estimado."','".$eta_real."','".$viaticos_estimado."','". $viaticos_real."','".$peaje_pesaje_estimado
                ."','". $peaje_pasaje_real."','". $extras_estimado."','".$extras_real."','".$hazard_estimado."','". $hazard_real
                ."','". $reefer_estimado."','". $reefer_real."','".$fee_estimado."','".$fee_real."','".$id_cliente."')";


        $this->database->execute($sql2);

    }

}