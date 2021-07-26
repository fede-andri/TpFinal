{{> headersupervisor}}


<h1>Editar Vehiculo</h1><br>

<div class="formulario arreglar">
    <br>
    <form action="index.php?module=flota&action=guardar" method="POST" >

        <h3>Formulario de carga</h3>
        <table style=”border:1px solid black” >
            <tr>
                <th>Tipo:</th>
                <td>
                    <select name="tipo">
                        <option value="Camion">Camion</option>
                        <option value="Araña">Araña</option>
                        <option value="Jaula">Jaula</option>
                        <option value="Tanque">Tanque</option>
                        <option value="Granel">Granel</option>
                        <option value= {{#flota}}{{tipo}}{{/flota}} selected>{{#flota}}{{tipo}}{{/flota}}</option>
                    </select>
                </td>
            </tr>
            <tr>
                <th>Fecha de inicio de actividad:</th>
                <td><input type="text" name="inicio_actividad" value= {{#flota}}{{inicio_actividad}}{{/flota}} placeholder={{#flota}}{{inicio_actividad}}{{/flota}} ></td>
            </tr>
            <tr>
                <th>Patente:</th>
                <td><input type="text" name="patente" value= {{#flota}}{{patente}}{{/flota}} placeholder={{#flota}}{{patente}}{{/flota}}></td>
            </tr>

            <tr>
                <th>Numero de Chasis:</th>
                <td><input type="text" name="nro_chasis" value={{#flota}}{{nro_chasis}}{{/flota}} placeholder={{#flota}}{{nro_chasis}}{{/flota}} ></td>
            </tr>

            <tr>
                <th>Modelo:</th>
                <td><input type = "text" name = "modelo" value={{#flota}}{{modelo}}{{/flota}}  placeholder= {{#flota}}{{modelo}}{{/flota}}></td>
            </tr>
            <tr>
                <th>Marca:</th>
                <td><input type="text" name="marca" value={{#flota}}{{marca}}{{/flota}} placeholder= {{#flota}}{{marca}}{{/flota}}></td>
            </tr>
            <tr>
                <th>Nro de motor:</th>
                <td><input type="number" name="nro_motor" min="1" max="10000000000" value={{#flota}}{{nro_motor}}{{/flota}} placeholder= {{#flota}}{{nro_motor}}{{/flota}} </td>
            </tr>
            <tr>
                <th>Kilometraje:</th>
                <td><input type="number" name="kilometraje" min="1" max="10000000000" value={{#flota}}{{kilometraje}}{{/flota}} placeholder={{#flota}}{{kilometraje}}{{/flota}}></td>
            </tr>
            <tr>
                <th>Horas de servicio:</th>
                <td><input type="text" name="horas_servicio" value={{#flota}}{{horas_servicio}}{{/flota}} placeholder= {{#flota}}{{horas_servicio}}{{/flota}}></td>
            </tr>
            <tr>
                <th>Fecha de ultimo Sevice:</th>
                <td><input type="text" name="fecha_ultimo_service" value= {{#flota}}{{fecha_ultimo_service}}{{/flota}} placeholder= {{#flota}}{{fecha_ultimo_service}}{{/flota}}></td>
            </tr>
            <tr>
                <th>Kilometraje del ultimo Service:</th>
                <td><input type="text" name="km_ultimo_service" value={{#flota}}{{km_ultimo_service}}{{/flota}} placeholder= {{#flota}}{{km_ultimo_service}}{{/flota}}></td>
            </tr>
            <tr>
                <th>Año de fabricacion:</th>
                <td><input type="number" name="anio_fabricacion" value = {{#flota}}{{anio_fabricacion}}{{/flota}} placeholder= {{#flota}}{{anio_fabricacion}}{{/flota}}></td>
            </tr>
        </table>
        <input class=" w3-blue w3-button " type="submit" name="enviar" value="Guardar">
    </form>
</div>


{{>footer}}

