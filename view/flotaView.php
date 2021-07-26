{{> headersupervisor}}

<div class="w3-container arreglar" >

    <h2 >Flota de Vehiculos</h2>
    <br>
    <a class="boton w3-blue w3-button" href="index.php?module=flota&action=nuevo">Nuevo</a>
    <br><br>
    <table class="w3-table">
        <tr class="w3-blue">
            <th class="w3-center">Id</th>
            <th class="w3-center">Tipo</th>
            <th class="w3-center">Inicio Act.</th>
            <th class="w3-center">Patente</th>
            <th class="w3-center">Chasis</th>
            <th class="w3-center">Modelo</th>
            <th class="w3-center">Marca</th>
            <th class="w3-center">Motor Nro</th>
            <th class="w3-center">Km</th>
            <th class="w3-center">Servicios Hs</th>
            <th class="w3-center">Ultimo Service</th>
            <th class="w3-center">Km Ultimo Service</th>
            <th class="w3-center">Año fab.</th>
            <th class="w3-center"></th>
            <th class="w3-center"></th>
        </tr>

        {{#flota}}
        <tr>
            <td class="w3-center">{{id_vehiculo}}</td>
            <td class="w3-center">{{tipo}}</td>
            <td class="w3-center">{{inicio_actividad}}</td>
            <td class="w3-center">{{patente}}</td>
            <td class="w3-center">{{nro_chasis}}</td>
            <td class="w3-center">{{modelo}}</td>
            <td class="w3-center">{{marca}}</td>
            <td class="w3-center">{{nro_motor}}</td>
            <td class="w3-center">{{kilometraje}}</td>
            <td class="w3-center">{{horas_servcio}}</td>
            <td class="w3-center">{{fecha_ultimo_service}}</td>
            <td class="w3-center">{{km_ultimo_service}}</td>
            <td class="w3-center">{{anio_fabricacion}}</td>
            <td class="w3-center">
                <a class="boton w3-blue w3-button" href="index.php?module=flota&action=descripcion&id={{id_vehiculo}}">Editar</a>
            </td>
            <th class="w3-center">
                <a class="boton w3-blue w3-button" href="index.php?module=flota&action=eliminar&id={{id_vehiculo}}">Eliminar</a>
            </th>
        </tr>
        {{/flota}}

    </table>
</div>
{{>footer}}