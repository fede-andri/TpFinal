{{>headerSupervisor}}


<div class="formulario">
    <br>
    <br>
    <form action="#" method="POST" class="w3-margin-left">

        <h1>Detalle</h1><br>
        <table style=”border:1px solid black”>
            <tr>
                <th>Fecha:</th>
                <td><input type="date" name="fecha" value={{#viaje}}{{fecha}}{{/viaje}}></td>
            </tr>

        </table>
        <br>
        <h2>Cliente</h2>
        <table style=”border:1px solid black”>
            <tr>
                <th>Id de cliente:</th>
                <td><input type="text" name="id_cliente" value={{#viaje}}{{id_cliente}}{{/viaje}}></td>
            </tr>
            <tr>
                <th>Denominacion:</th>
                <td><input type="text" name="denominacion" value= {{#viaje}}{{denominacion}}{{/viaje}}></td>
            </tr>
            <tr>
                <th>Nombre:</th>
                <td><input type="text" name="nombre" value={{#viaje}}{{nombre}}{{/viaje}}></td>
            </tr>
            <tr>
                <th>Apellido:</th>
                <td><input type="text" name="apellido" value={{#viaje}}{{apellido}}{{/viaje}}></td>
            </tr>
            <tr>
                <th>Cuil:</th>
                <td><input type="text" name="cuil" value={{#viaje}}{{cuil}}{{/viaje}}></td>
            </tr>
            <tr>
                <th>Calle:</th>
                <td><input type="text" name="calle" value={{#viaje}}{{calle}}{{/viaje}}></td>
            </tr>
            <tr>
                <th>Numero:</th>
                <td><input type="text" name="numero" value={{#viaje}}{{numero}}{{/viaje}}></td>
            </tr>
            <tr>
                <th>Localidad:</th>
                <td><input type="text" name="localidad" value={{#viaje}}{{localidad}}{{/viaje}}></td>
            </tr>
            <tr>
                <th>Codigo Postal:</th>
                <td><input type="text" name="codigo_postal" value={{#viaje}}{{codigo_postal}}{{/viaje}}></td>
            </tr>
            <tr>
                <th>Telefono:</th>
                <td><input type="tel" name="telefono" value={{#viaje}}{{telefono}}{{/viaje}}></td>
            </tr>
            <tr>
                <th>Email:</th>
                <td><input type="email" name="email" value={{#viaje}}{{email}}{{/viaje}}></td>
            </tr>
            <tr>
                <th>Contacto 1:</th>
                <td><input type="text" name="contacto1" value={{#viaje}}{{contacto1}}{{/viaje}}></td>
            </tr>
            <tr>
                <th>Contacto 2:</th>
                <td><input type="text" name="contacto2" value={{#viaje}}{{contacto2}}{{/viaje}}></td>
            </tr>

        </table>

        <br>
        <h2>Viaje</h2>
        <table style=”border:1px solid black”>
            <tr>
                <th>Origen:</th>
                <td><input type="text" name="origen" value={{#viaje}}{{origen}}{{/viaje}}></td>
            </tr>
            <tr>
                <th>Destino:</th>
                <td><input type="text" name="destino" value={{#viaje}}{{destino}}{{/viaje}}></td>
            </tr>
            <tr>
                <th>Fecha de Carga:</th>
                <td><input type="date" name="fecha_carga" value={{#viaje}}{{fecha_carga}}{{/viaje}}></td>
            </tr>
            <tr>
                <th>ETA:</th>
                <td><input type="time" name="eta_viaje" value={{#viaje}}{{eta_viaje}}{{/viaje}}></td>
            </tr>
        </table>

        <br>
        <h2>Carga</h2>
        <table style=”border:1px solid black” " >
        <tr>
            <th>Tipo:</th>
            <td><input type="text" name="tipo_carga" value={{#viaje}}{{tipo_carga}}{{/viaje}}></td>
        </tr>
        <tr>
            <th>Peso Neto (Kg):</th>
            <td><input type="number" name="peso_neto" value={{#viaje}}{{peso_neto}}{{/viaje}}></td>
        </tr>
        <tr>
            <th>Hazard:</th>
            <td><input type="text" name="carga_hazard" value={{#viaje}}{{carga_hazard}}{{/viaje}}></td>
            <th>IMO Class</th>
            <td><input type="text" name="hazard_imo_class" value={{#viaje}}{{hazard_imo_class}}{{/viaje}}></td>
        </tr>
        <tr>
            <th>Reefer:</th>
            <td><input type="date" name="carga_reefer" value={{#viaje}}{{carga_reefer}}{{/viaje}}></td>
            <th>Temperatura:</th>
            <td><input type="number" name="reefer_temperatura" value={{#viaje}}{{reefer_temperatura}}{{/viaje}}></td>
        </tr>

        </table>
        <br>
        <br>
        <h2>Costeo</h2>
        <table style=”border:1px solid black”>
            <tr>
                <th></th>
                <td>Estimado</td>
                <td>Real</td>
            </tr>
            <tr>
                <th>Kilometros:</th>
                <td><input type="number" name="kilometros_estimados" value={{#viaje}}{{kilometros_estimados}}{{/viaje}}></td>
                <td><input type="number" name="kilometros_reales" value={{#viaje}}{{kilometros_reales}}{{/viaje}}></td>
            </tr>
            <tr>
                <th>Combustible (Litros):</th>
                <td><input type="number" name="cant_combustible_estimado" value={{#viaje}}{{cant_combustible_estimado}}{{/viaje}}></td>
                <td><input type="number" name="cant_combustible_real" value={{#viaje}}{{cant_combustible_real}}{{/viaje}}></td>
            </tr>
            <tr>
                <th>ETD:</th>
                <td><input type="time" name="etd_estimado" value={{#viaje}}{{etd_estimado}}{{/viaje}}></td>
                <td><input type="time" name="etd_real" value={{#viaje}}{{etd_real}}{{/viaje}}></td>
            </tr>
            <tr>
                <th>ETA:</th>
                <td><input type="time" name="eta_estimado" value={{#viaje}}{{eta_estimado}}{{/viaje}}></td>
                <td><input type="time" name="eta_real" value={{#viaje}}{{eta_real}}{{/viaje}}></td>
            </tr>
            <tr>
                <th>Viaticos ($):</th>
                <td><input type="number" name="viaticos_estimado" value={{#viaje}}{{viaticos_estimado}}{{/viaje}}></td>
                <td><input type="number" name="viaticos_real" value={{#viaje}}{{viaticos_real}}{{/viaje}}></td>
            </tr>
            <tr>
                <th>Peajes y Pesajes ($):</th>
                <td><input type="number" name="peaje_pesaje_estimado" value={{#viaje}}{{peaje_pesaje_estimado}}{{/viaje}}></td>
                <td><input type="number" name="peaje_pasaje_real" value={{#viaje}}{{peaje_pesaje_estimado}}{{/viaje}}></td>
            </tr>
            <tr>
                <th>Extras (Hs):</th>
                <td><input type="number" name="extras_estimado" value={{#viaje}}{{extras_estimado}}{{/viaje}}></td>
                <td><input type="number" name="extras_real" value={{#viaje}}{{extras_real}}{{/viaje}}></td>
            </tr>
            <tr>
                <th>Hazard (Hs):</th>
                <td><input type="number" name="hazard_estimado" value={{#viaje}}{{hazard_estimado}}{{/viaje}}></td>
                <td><input type="number" name="hazard_real" value={{#viaje}}{{hazard_real}}{{/viaje}}></td>
            </tr>
            <tr>
                <th>Reefer (Hs):</th>
                <td><input type="number" name="reefer_estimado" value={{#viaje}}{{reefer_estimado}}{{/viaje}}></td>
                <td><input type="number" name="reefer_real" value={{#viaje}}{{reefer_real}}{{/viaje}}></td>
            </tr>
            <tr>
                <th>Fee (Hs):</th>
                <td><input type="number" name="fee_estimado" value={{#viaje}}{{fee_estimado}}{{/viaje}}></td>
                <td><input type="number" name="fee_real" value={{#viaje}}{{fee_real}}{{/viaje}}></td>
            </tr>
            <tr>
                <th>Fee (Hs):</th>
                <td><input type="number" name="fee_estimado" value={{#viaje}}{{fee_estimado}}{{/viaje}}></td>
            </tr>
        </table>
    </form>
</div>
{{>footer}}
