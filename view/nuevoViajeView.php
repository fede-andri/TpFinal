{{>headerSupervisor}}


<div class="formulario">
    <br>
    <br>
    <form action="index.php?module=viaje&action=guardar" method="POST" class="w3-margin-left">

        <h1>Formulario de nuevo de viajes</h1><br>
        <table style=”border:1px solid black”>
            <tr>
                <th>Fecha:</th>
                <td><input type="date" name="fecha"></td>
            </tr>

        </table>
        <br>
        <h2>Cliente</h2>
        <table style=”border:1px solid black”>
            <tr>
                <th>Id de cliente:</th>
                <td><input type="text" name="id_cliente" value={{#cliente}}{{id_cliente}}{{/cliente}} placeholder={{#cliente}}{{id_cliente}}{{/cliente}}></td>
            </tr>
            <tr>
                <th>Denominacion:</th>
                <td><input type="text" name="denominacion" placeholder={{#cliente}}{{denominacion}}{{/cliente}}></td>
            </tr>
            <tr>
                <th>Nombre:</th>
                <td><input type="text" name="nombre" placeholder={{#cliente}}{{nombre}}{{/cliente}}></td>
            </tr>
            <tr>
                <th>Apellido:</th>
                <td><input type="text" name="apellido" placeholder={{#cliente}}{{apellido}}{{/cliente}}></td>
            </tr>
            <tr>
                <th>Cuil:</th>
                <td><input type="text" name="cuil" placeholder={{#cliente}}{{cuil}}{{/cliente}}></td>
            </tr>
            <tr>
                <th>Calle:</th>
                <td><input type="text" name="calle" placeholder={{#cliente}}{{calle}}{{/cliente}}></td>
            </tr>
            <tr>
                <th>Numero:</th>
                <td><input type="text" name="numero" placeholder={{#cliente}}{{numero}}{{/cliente}}></td>
            </tr>
            <tr>
                <th>Localidad:</th>
                <td><input type="text" name="localidad" placeholder={{#cliente}}{{localidad}}{{/cliente}}></td>
            </tr>
            <tr>
                <th>Codigo Postal:</th>
                <td><input type="text" name="codigo_postal" placeholder={{#cliente}}{{codigo_postal}}{{/cliente}}></td>
            </tr>
            <tr>
                <th>Telefono:</th>
                <td><input type="tel" name="telefono" placeholder={{#cliente}}{{telefono}}{{/cliente}}></td>
            </tr>
            <tr>
                <th>Email:</th>
                <td><input type="email" name="email" placeholder={{#cliente}}{{email}}{{/cliente}}></td>
            </tr>
            <tr>
                <th>Contacto 1:</th>
                <td><input type="text" name="contacto1" placeholder={{#cliente}}{{contacto1}}{{/cliente}}></td>
            </tr>
            <tr>
                <th>Contacto 2:</th>
                <td><input type="text" name="contacto2" placeholder={{#cliente}}{{contacto2}}{{/cliente}}></td>
            </tr>

        </table>

        <br>
        <h2>Viaje</h2>
        <table style=”border:1px solid black”>
            <tr>
                <th>Origen:</th>
                <td><input type="text" name="origen"></td>
            </tr>
            <tr>
                <th>Destino:</th>
                <td><input type="text" name="destino"></td>
            </tr>
            <tr>
                <th>Fecha de Carga:</th>
                <td><input type="date" name="fecha_carga"></td>
            </tr>
            <tr>
                <th>ETA:</th>
                <td><input type="time" name="eta_viaje"></td>
            </tr>
        </table>

        <br>
        <h2>Carga</h2>
        <table style=”border:1px solid black” " >
            <tr>
                <th>Tipo:</th>
                <td>
                    <select name="tipo_carga">
                        <option value="Granel" selected>Granel</option>
                        <option value="Liquida">Liquida</option>
                        <option value="20">20"</option>
                        <option value="40">40"</option>
                        <option value="Jaula">Jaula</option>
                        <option value="CarCarrier">CarCarrier</option>
                    </select><br>
                </td>
            </tr>
            <tr>
                <th>Peso Neto (Kg):</th>
                <td><input type="number" name="peso_neto" min="1" max="80000"></td>
            </tr>
            <tr>
                <th>Hazard:</th>
                <td>
                    <select name="carga_hazard">
                        <option value="si">SI</option>
                        <option value="no" selected>NO</option>
                    </select>
                </td>
                <th>IMO Class</th>
                <td>
                    <select name="hazard_imo_class">
                        <option value="imo_clase1">Clase 1. Explosivos.</option>
                        <option value="imo_clase2">Clase 2. Gases.</option>
                        <option value="imo_clase3">Clase 3. Liquidos Inflamables.</option>
                        <option value="imo_clase41">Clase 4.1. Sólidos o sustancias inflamables.</option>
                        <option value="imo_clase42">Clase 4.2. Sólidos inflamables.</option>
                        <option value="imo_clase43">Clase 4.3. Sustancias que, en contacto con el agua, emiten gases inflamables.</option>
                        <option value="imo_clase51">Clase 5.1. Las sustancias oxidantes.</option>
                        <option value="imo_clase52">Clase 5.2. Peróxidos orgánicos.</option>
                        <option value="imo_clase61">Clase 6.1. Sustancias toxicas.</option>
                        <option value="imo_clase62">Clase 6.2. Sustancias infecciosas.</option>
                        <option value="imo_clase7">Clase 7 Sustancias radioactivas.</option>
                        <option value="imo_clase 8">Clase 8 Corrosivas.</option>
                        <option value="imo_clase 9">Clase 9 Sustancias y artículos peligrosos diversos.</option>
                        <option value="" selected >Seleccione Clase</option>
                    </select>
                </td>
            </tr>
            <tr>
                <th>Reefer:</th>
                <td>
                    <select name="carga_reefer">
                        <option value="si">SI</option>
                        <option value="no" selected>NO</option>
                    </select>
                </td>
                <th>Temperatura:</th>
                <td><input type="number" name="reefer_temperatura"></td>
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
                <td><input type="number" name="kilometros_estimados" min="1" max="100000"></td>
                <td><input type="number" name="kilometros_reales" min="1" max="100000"></td>
            </tr>
            <tr>
                <th>Combustible (Litros):</th>
                <td><input type="number" name="cant_combustible_estimado" min="1" max="100000"></td>
                <td><input type="number" name="cant_combustible_real" min="1" max="100000"></td>
            </tr>
            <tr>
                <th>ETD:</th>
                <td><input type="time" name="etd_estimado" min="1" max="100000"></td>
                <td><input type="time" name="etd_real" min="1" max="100000"></td>
            </tr>
            <tr>
                <th>ETA:</th>
                <td><input type="time" name="eta_estimado" min="1" max="100000"></td>
                <td><input type="time" name="eta_real" min="1" max="100000"></td>
            </tr>
            <tr>
                <th>Viaticos ($):</th>
                <td><input type="number" name="viaticos_estimado" min="1" max="100000"></td>
                <td><input type="number" name="viaticos_real" min="1" max="100000"></td>
            </tr>
            <tr>
                <th>Peajes y Pesajes ($):</th>
                <td><input type="number" name="peaje_pesaje_estimado" min="1" max="100000"></td>
                <td><input type="number" name="peaje_pasaje_real" min="1" max="100000"></td>
            </tr>
            <tr>
                <th>Extras (Hs):</th>
                <td><input type="number" name="extras_estimado" min="1" max="100000"></td>
                <td><input type="number" name="extras_real" min="1" max="100000"></td>
            </tr>
            <tr>
                <th>Hazard (Hs):</th>
                <td><input type="number" name="hazard_estimado" min="1" max="100000"></td>
                <td><input type="number" name="hazard_real" min="1" max="100000"></td>
            </tr>
            <tr>
                <th>Reefer (Hs):</th>
                <td><input type="number" name="reefer_estimado" min="1" max="100000"></td>
                <td><input type="number" name="reefer_real" min="1" max="100000"></td>
            </tr>
            <tr>
                <th>Fee (Hs):</th>
                <td><input type="number" name="fee_estimado" min="1" max="100000"></td>
                <td><input type="number" name="fee_real" min="1" max="100000"></td>
            </tr>
            <br>
            <br>

        </table>
        <br>
        <br>
        <input type="submit" class="boton w3-button w3-blue w3-margin" value="Guardar">
    </form>
</div>
{{>footer}}

