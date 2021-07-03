{{> header}}


        <section id="agregar-usuario">
            <div class="w3-row w3-container w3-center w3-display-middle">

                <div id="formulario" class=" w3-padding-16 w3-col m6 w3-center">

                    <form action="index.php?module=usuario&action=guardarUsuario" enctype="multipart/form-data" method="post">

                        <label for="nombre">NOMBRE </label>
                        <input type="text" name="nombre" id="nombre" class="w3-input" placeholder="Ingrese nombre" required>

                        <label for="nombre">APELLIDO</label>
                        <input type="text" name="apellido" id="apellido" class="w3-input" placeholder="Ingrese apellido" required>

                        <label for="fecha_nac">FECHA DE NACIMIENTO</label>
                        <input type="date" name="fecha_nac" id="fecha_nac" class="w3-input"placeholder="Ingrese su fecha de nacimiento" required>

                        <label for="dni">DNI</label>
                        <input type="text" name="dni" id="dni" class="w3-input"placeholder="Ingrese DNI" required>

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

                        <label for="correo">CORREO</label>
                        <input type="text" name="email" id="email" class="w3-input"placeholder="Ingrese su correo electronico" required>


                        <label for="password">CONTRASEÑA</label>
                        <input type="password" name="password" id="password" class="w3-input"placeholder="Ingrese su contraseña" required>

                        <input type="submit" value="CONFIRMAR" class="w3-btn-block w3-margin-top" id="boton">

                    </form>
                </div>

            </div>
        </section>
{{> footer}}
