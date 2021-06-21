
{{> header}}
<div class="w3-container w3-content w3-center w3-padding-64" style="max-width:800px" id="band">

    <h2 class="w3-wide">Roles</h2>

    <table class="w3-table w3-striped">
        <tr class="w3-blue">
            <th class="w3-center">Id</th>
            <th class="w3-center">Nombres</th>
            <th class="w3-center">Apellido</th>
            <th class="w3-center">Email</th>
            <th class="w3-center">Rol</th>
            <th class="w3-center"></th>
        </tr>

        {{#roles}}
            <tr>
            <td class="w3-center">{{id}}</td>
            <td class="w3-center">{{nombres}}</td>
            <td class="w3-center">{{apellido}}</td>
            <td class="w3-center">{{email}}</td>
            <td class="w3-center">{{rol}}</td>
            <td class="w3-center">
                <a class="boton w3-blue" href="index.php?module=rol&action=description&id={{id}}">Editar</a>
            </td>
        </tr>
        {{/roles}}

    </table>
</div>
{{> footer}}