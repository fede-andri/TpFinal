{{>headerSupervisor}}

<div class="formulario">
    <br>
    <br>
    <form action="index.php?module=cliente&action=verificar" method="POST" class="w3-margin-left">

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
                <th>Denominacion:</th>
                <td><input type="text" name="denominacion"></td>
            </tr>
            <tr>
                <th>Nombre:</th>
                <td><input type="text" name="nombre"></td>
            </tr>
            <tr>
                <th>Apellido:</th>
                <td><input type="text" name="apellido"></td>
            </tr>
            <tr>
                <th>Cuil:</th>
                <td><input type="text" name="cuil"></td>
            </tr>
            <tr>
                <th>Calle:</th>
                <td><input type="text" name="calle"></td>
            </tr>
            <tr>
                <th>Numero:</th>
                <td><input type="text" name="numero"></td>
            </tr>
            <tr>
                <th>Localidad:</th>
                <td><input type="text" name="localidad"></td>
            </tr>
            <tr>
                <th>Codigo Postal:</th>
                <td><input type="text" name="codigo_postal"></td>
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
        <br>
        <input class="boton w3-blue w3-button" type="submit" value="Aceptar">
    </form>
</div>






{{>footer}}
