{{> headerAdministrador}}

<div class="w3-container" >

    <h2 >Roles</h2>

    <table class="w3-table">
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
            <td class="w3-center">{{rol}}</td>
            <th class="w3-center">
                <a class="boton w3-blue w3-button" href="index.php?module=rol&action=description&id={{id_usuario}}">Editar</a>
            </th>
        </tr>
        {{/roles}}

    </table>
</div>
{{>footer}}
