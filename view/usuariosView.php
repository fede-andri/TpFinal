{{> headerAdministrador}}


<div class=" w3-container">

    <h2 >Usuarios</h2>


    <table style="width:100%" class="w3-tables w3-center">
        <tr class="w3-blue">
            <th class="w3-center">Id</th>
            <th class="w3-center">Nombre</th>
            <th class="w3-center">Apellido</th>
            <th class="w3-center">Fecha de nacimiento</th>
            <th class="w3-center">Dni</th>
            <th class="w3-center">Tipo de licencia</th>
            <th class="w3-center">Fecha de vencimiento</th>
            <th class="w3-center">Email</th>
            <th class="w3-center">Horas de viaje</th>
            <th class="w3-center">tipo de rol</th>
            <th class="w3-center">Estado</th>
            <th class="w3-center"></th>
            <th class="w3-center"></th>
        </tr>

        {{#usuarios}}
            <tr>
                <td class="w3-center">{{id_usuario}}</td>
                <td class="w3-center">{{nombre}}</td>
                <td class="w3-center">{{apellido}}</td>
                <td class="w3-center">{{fecha_nac}}</td>
                <td class="w3-center">{{dni}}</td>
                <td class="w3-center">{{tipo_licencia}}</td>
                <td class="w3-center">{{fecha_vencimiento}}</td>
                <td class="w3-center">{{email}}</td>
                <td class="w3-center">{{horas_viaje}}
                <td class="w3-center">{{id_rol}}</td>
                <td class="w3-center">{{activo}}</td>
                <td class ="w3-center"><a class="boton w3-blue" href ="index.php?module=usuario&action=activarUsuario&id_usuario={{id_usuario}}">Activar/Desactivar</a></td>
                <td class ="w3-center"><a class="boton w3-blue" href="index.php?module=usuario&action=bajaUsuario&id_usuario={{id_usuario}}">Eliminar</a></td>

            </tr>
        {{/usuarios}}
    </table>
</div>
{{>footer}}