<?php include "partial/header.mustache"; ?>
<section id="agregar-usuario">
    <div id="formulario">
        <form action="registroView.php" enctype="multipart/form-data" method="post">

            <label for="nombre">NOMBRE COMPLETO</label>
            <input type="text" name="nombre" id="nombre" class="w3-input" placeholder="Ingrese nombre del usuario" required>

            <label for="dni">DNI</label>
            <input type="text" name="dni" id="dni" class="w3-input"placeholder="Ingrese su DNI" required>

            <label for="correo">CORREO</label>
            <input type="text" name="correo" id="correo" class="w3-input"placeholder="Ingrese su correo electronico" required>

            <label for="contraseña">CONTRASEÑA</label>
            <input type="text" name="contraseña" id="contraseña" class="w3-input"placeholder="Ingrese su contraseña" required>

            <label for="licencia">TIPO DE LICENCIA</label>
            <select name="licencia" id="licencia" class="w3-select">
            </select>

            <label for="nacionalidad">NACIONALIDAD</label>
            <input type="text" name="pais" id="pais" class="w3-input"placeholder="Ingrese su nacionalidad">

            <input type="submit" value="CONFIRMAR" class="w3-btn" id="boton">

        </form>
    </div>
</section>
<?php include "partial/footer.mustache" ?>
