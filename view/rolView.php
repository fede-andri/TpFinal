{{> header}}

<div class="w3-display-middle">

    <h2 >Roles</h2>

    <table class="w3-table w3-display-middle">
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
            <td class="w3-center">{{id_usuario}}</td>
            <td class="w3-center">{{nombre}}</td>
            <td class="w3-center">{{apellido}}</td>
            <td class="w3-center">{{email}}</td>
            <td class="w3-center">{{id_rol}}</td>
            <td class="w3-center">
                <a class="boton w3-blue" href="index.php?module=rol&action=description&id={{id_usuario}}">Editar</a>
            </td>
        </tr>
        {{/roles}}

    </table>
</div>
