{{> header}}

        <section id="agregar-usuario">
            <div id="formulario">
                <form action="#" enctype="multipart/form-data" method="post">

                    <label for="nombre">NOMBRE COMPLETO</label>
                    <input type="text" name="nombre" id="nombre" class="w3-input" placeholder="Ingrese nombre" required>

                    <label for="nombre">APELLIDO COMPLETO</label>
                    <input type="text" name="apellido" id="apellido" class="w3-input" placeholder="Ingrese apellido" required>

                    <label for="dni">DNI</label>
                    <input type="text" name="dni" id="dni" class="w3-input"placeholder="Ingrese DNI" required>

                   <!-- <label for="correo">CORREO</label>
                    <input type="text" name="correo" id="correo" class="w3-input"placeholder="Ingrese su correo electronico" required>

                    <label for="contraseña">CONTRASEÑA</label>
                    <input type="text" name="contraseña" id="contraseña" class="w3-input"placeholder="Ingrese su contraseña" required>   -->

                    <label for="licencia">TIPO DE LICENCIA</label>
                    <select name="licencia" id="licencia" class="w3-select">
                        <option value="A - Internacional">A - Internacional</option>
                        <option value="B - Mercancias Peligrosas">B - Mercancias Peligrosas</option>
                        <option value="C - Residuos Peligrosos">C - Residuos Peligrosos</option>
                        <option value="D - Combustibles liquidos, Gases licuados, Derivados del petroleo y Solidos inflamables">D - Combustibles liquidos, Gases licuados, Derivados del petroleo y Solidos inflamables</option>
                        <option value="E - Precursores">E - Precursores</option>
                        <option value="F - Alcoholes etilicos y metalicos">F - Alcoholes etilicos y metalicos</option>
                        <option value="G - Contenedores">G - Contenedores</option>
                        <option value="H - Hacienda">H - Hacienda</option>
                        <option value="I - Sustancias alimenticias">I - Sustancias alimenticias</option>
                    </select>

                    <label for="vencimiento">FECHA DE VENCIMIENTO</label>
                    <input type="date" name="vencimiento" id="vencimiento" class="w3-input"placeholder="Ingrese vencimiento">

                    <input type="submit" value="CONFIRMAR" class="w3-btn" id="boton">

                </form>
            </div>
        </section>
{{> footer}}
