{{>headerSupervisor}}

<div class="w3-container arreglar " >

    <h2 >Proforma de Viajes</h2>
    <a class="boton w3-blue w3-button" href="index.php?module=cliente&action=nuevo">Nuevo</a>
    <br><br>
    <table class="w3-table">
        <tr class="w3-blue">
            <th class="w3-center">Id</th>
            <th class="w3-center">Origen</th>
            <th class="w3-center">Destino</th>
            <th class="w3-center">Id Cliente</th>
            <th class="w3-center">Tipo de carga</th>
            <th class="w3-center">Hazard</th>
            <th class="w3-center">IMO Class</th>
            <th class="w3-center">Reefer</th>
            <th class="w3-center">Temperatura</th>
            <th class="w3-center"></th>
            <th class="w3-center"></th>
        </tr>

        {{#viaje}}
        <tr>
            <td class="w3-center">{{id_viaje}}</td>
            <td class="w3-center">{{origen}}</td>
            <td class="w3-center">{{destino}}</td>
            <td class="w3-center">{{id_cliente}}</td>
            <td class="w3-center">{{tipo_carga}}</td>
            <td class="w3-center">{{carga_hazard}}</td>
            <td class="w3-center">{{hazard_imo_class}}</td>
            <td class="w3-center">{{carga_reefer}}</td>
            <td class="w3-center">{{reefer_temperatura}}</td>
            <td class="w3-center">
                <a class="boton w3-blue w3-button" href="index.php?module=viaje&action=description&id={{id_viaje}}">Detalle</a>
                <a class="boton w3-blue w3-button" href="index.php?module=viaje&action=eliminar&id={{id_viaje}}">Eliminar</a>
            </td>
        </tr>
        {{/viaje}}

    </table>
</div>

{{>footer}}
