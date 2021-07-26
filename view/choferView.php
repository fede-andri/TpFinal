{{> headerChofer}}


<div class="centrar formulario">
    <h1>Codigo Qr</h1><br>
    <form action="#" method="post" enctype="multipart/form-data">
        <input type="file" name="file">

    </form>

</div>
<div class="formulario">
    <br>
    <br>
    <form action="#" method="post" >

        <h4>Proforma</h4>
        <table style=”border:1px solid black”>
            <tr>
                <th>Numero:</th>
                <td><input type="number" name="proformaNro" min="1" max="1000000"></td>
            </tr>
            <tr>
                <th>Fecha:</th>
                <td><input type="date" name="fecha"></td>
            </tr>

        </table>
        <br>
        <h4>Cliente</h4>
        <table style=”border:1px solid black”>
            <tr>
                <th>Denominacion:</th>
                <td><input type="text" name="denominacion"></td>
            </tr>
            <tr>
                <th>Cuit:</th>
                <td><input type="text" name="cuit"></td>
            </tr>
            <tr>
                <th>Direccion:</th>
                <td><input type="text" name="direccion"></td>
            </tr>
            <tr>
                <th>Telefono:</th>
                <td><input type="tel" name="telefono"></td>
            </tr>
            <tr>
                <th>Email:</th>
                <td><input type="email" name="email"></td>
            </tr>
            <tr>
                <th>Contacto 1:</th>
                <td><input type="text" name="contacto1"></td>
            </tr>
            <tr>
                <th>Contacto 2:</th>
                <td><input type="text" name="contacto2"></td>
            </tr>

        </table>

        <br>
        <h4>Viaje</h4>
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
        <h4>Carga</h4>
        <table style=”border:1px solid black”>
            <tr>
                <th>Tipo:</th>
                <td>
                    <select name="carga_tipo">
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
                <th>Peso Neto:</th>
                <td><input type="number" name="peso_neto" min="1" max="80000"></td>
            </tr>
            <tr>
                <th>Hazard:</th>
                <td>
                    <select name="hazard">
                        <option value="si">SI</option>
                        <option value="no" selected>NO</option>
                    </select>
                </td>
                <th>IMO Class</th>
                <td>
                    <select name="imo_class">
                        <option value="imo_clase1">Clase 1. Explosivos</option>
                        <option value="imo_clase2">Clase 2. Gases</option>
                        <option value="imo_clase3">Clase 3. Liquidos Inflamables</option>
                        <option value="imo_clase41">Clase 4.1. Sólidos o sustancias inflamables </option>
                        <option value="imo_clase42">Clase 4.2. Sólidos inflamables</option>
                        <option value="imo_clase43">Clase 4.3. Sustancias que, en contacto con el agua, emiten gases inflamables.</option>
                        <option value="imo_clase51">Clase 5.1. Las sustancias oxidantes (agentes) al producir oxígeno aumentan el riesgo y la intensidad del fuego</option>
                        <option value="imo_clase52">Clase 5.2. Peróxidos orgánicos: la mayoría se queman rápidamente y son sensibles al impacto o la fricción.</option>
                        <option value="imo_clase61">Clase 6.1. Sustancias toxicas</option>
                        <option value="imo_clase62">Clase 6.2. Sustancias infecciosas</option>
                        <option value="imo_clase7">Clase 7 Sustancias radioactivas</option>
                        <option value="imo_clase 8">Clase 8 Corrosivas</option>
                        <option value="imo_clase 9">Clase 9 Sustancias y artículos peligrosos diversos</option>
                        <option value="" selected>Seleccione Clase</option>
                    </select>
                </td>
            </tr>
            <tr>
                <th>Reefer:</th>
                <td>
                    <select name="reefer">
                        <option value="si">SI</option>
                        <option value="no" selected>NO</option>
                    </select>
                </td>
                <th>Temperatura:</th>
                <td><input type="number" name="reefer_temperatura"></td>
            </tr>
        </table>

        <h4>Costeo</h4>
        <table style=”border:1px solid black”>
            <tr>
                <th></th>
                <td>Estimado</td>
                <td>Real</td>
            </tr>
            <tr>
                <th>Kilometros:</th>
                <td><input type="number" name="km_estimado" min="1" max="100000"></td>
                <td><input type="number" name="km_real" min="1" max="100000"></td>
            </tr>
            <tr>
                <th>Combustible:</th>
                <td><input type="number" name="combustible_estimado" min="1" max="100000"></td>
                <td><input type="number" name="combustible_real" min="1" max="100000"></td>
            </tr>
            <tr>
                <th>ETD:</th>
                <td><input type="time" name="hora_estimado_salida" min="1" max="100000"></td>
                <td><input type="time" name="hora_real_salida" min="1" max="100000"></td>
            </tr>
            <tr>
                <th>ETA:</th>
                <td><input type="time" name="hora_estimado_llegada" min="1" max="100000"></td>
                <td><input type="time" name="hora_real_llegada" min="1" max="100000"></td>
            </tr>
            <tr>
                <th>Viaticos:</th>
                <td><input type="number" name="viaticos_estimado" min="1" max="100000"></td>
                <td><input type="number" name="viaticos_real" min="1" max="100000"></td>
            </tr>
            <tr>
                <th>Peajes y Pesajes:</th>
                <td><input type="number" name="peaje_estimado" min="1" max="100000"></td>
                <td><input type="number" name="peaje_real" min="1" max="100000"></td>
            </tr>
            <tr>
                <th>Extras:</th>
                <td><input type="number" name="extras_estimado" min="1" max="100000"></td>
                <td><input type="number" name="extras_real" min="1" max="100000"></td>
            </tr>
            <tr>
                <th>Hazard:</th>
                <td><input type="number" name="hazard_estimado" min="1" max="100000"></td>
                <td><input type="number" name="hazard_real" min="1" max="100000"></td>
            </tr>
            <tr>
                <th>Reefer:</th>
                <td><input type="number" name="reefer_estimado" min="1" max="100000"></td>
                <td><input type="number" name="reefer_real" min="1" max="100000"></td>
            </tr>
            <tr>
                <th>Fee:</th>
                <td><input type="number" name="fee_estimado" min="1" max="100000"></td>
                <td><input type="number" name="fee_real" min="1" max="100000"></td>
            </tr>
            <br>
            <br>
            <tr>
                <th>Chofer Asignado:</th>
                <td><input type="text" name="chofer_asignado" ></td>

            </tr>
        </table>

    </form>
</div>
</body>
</html>
