{{>headerSupervisor}}
<div class="arreglar">
    <form action="index.php?module=cliente&action=verificar" method="POST" class="w3-margin-left">

        <h1>Formulario de nuevo de viajes</h1><br>
        <br>
        <br>
        <h3>Verifique si el cliente esta registrado</h3>
        <table style=”border:1px solid black”>
            <tr>
                <th>Cuil:</th>
                <th></th>
                <td><input type="text" name="cuil"></td>
                <td><input type="submit" value="Verificar" </td>
            </tr>

        </table>
    </form>
</div>

{{>footer}}