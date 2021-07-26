{{> headersupervisor}}


    <h1>Nuevo Vehiculo</h1><br>

<div class="arreglar">
    <br>
    <form action="index.php?module=flota&action=guardar" method="post" >
        <div class="formulario">
        <h3>Formulario de carga</h3>
        <table style=”border:1px solid black”  >
            <tr>
                <th>Tipo:</th>
                <td>
                    <select name="tipo">
                        <option value="Camion">Camion</option>
                        <option value="Araña">Araña</option>
                        <option value="Jaula">Jaula</option>
                        <option value="Tanque">Tanque</option>
                        <option value="Granel">Granel</option>
                        <option value="" selected>Seleccione Tipo</option>
                    </select>
                </td>
            </tr>
            <tr>
                <th>Fecha de inicio de actividad:</th>
                <td><input type="date" name="inicio_actividad"></td>
            </tr>
            <tr>
                <th>Patente:</th>
                <td><input type="text" name="patente"></td>
            </tr>
            <tr>
                <th>Numero de Chasis:</th>
                <td><input type="text" name="nro_chasis" ></td>
            </tr>
            <tr>
                <th>Modelo:</th>
                <td><input type="text" name="modelo"></td>
            </tr>
            <tr>
                <th>Marca:</th>
                <td><input type="tel" name="marca"></td>
            </tr>
            <tr>
                <th>Nro de motor:</th>
                <td><input type="number" name="nro_motor" min="1" max="10000000000"></td>
            </tr>
            <tr>
                <th>Kilometraje:</th>
                <td><input type="number" name="kilometraje" min="1" max="10000000000"></td>
            </tr>
            <tr>
                <th>Horas de servicio:</th>
                <td><input type="time" name="horas_servicio"></td>
            </tr>
            <tr>
                <th>Fecha de ultimo Sevice:</th>
                <td><input type="date" name="fecha_ultimo_service"></td>
            </tr>
            <tr>
                <th>Kilometraje del ultimo Service:</th>
                <td><input type="number" name="km_ultimo_service" min="1" max="10000000000"></td>
            </tr>
            <tr>
                <th>Año de fabricacion:</th>
                <td><input type="number" name="anio_fabricacion"></td>
            </tr>
        </table>
        <input class=" w3-blue w3-button w3-" type="submit" name="enviar" value="Guardar">
        </div>
    </form>
</div>


{{>footer}}

