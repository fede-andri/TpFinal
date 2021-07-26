<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="view/css/headerFooterStyle.css">

    <title>Transporte San Justo</title>
</head>
<header >
    <div id="header">
        <div >
            <img src="images/logo-transporte2.png" height="150px" width="150px" alt="Logo" >
        </div>
    </div>
</header>
<body>


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
                            <option value="Sin licencia" selected>Sin licencia</option>
                        </select>

                        <label for="vencimiento">FECHA DE VENCIMIENTO</label>
                        <input type="date" name="vencimiento" id="vencimiento" class="w3-input"placeholder="Ingrese vencimiento">

                        <label for="correo">CORREO</label>
                        <input type="text" name="email" id="email" class="w3-input"placeholder="Ingrese su correo electronico" required>


                        <label for="password">CONTRASEÑA</label>
                        <input type="password" name="password1" id="password1" class="w3-input"placeholder="Ingrese su contraseña" required>


                        <input type="password" name="password2" id="password2" class="w3-input"placeholder="Reinngrese su contraseña" required>

                        <input type="submit" value="CONFIRMAR" class="w3-btn-block w3-margin-top" id="boton">
                        <br><br>
                        <a class="w3-blue-gray" href="index.php?module=login&action=index">Salir</a>

                    </form>
                </div>

            </div>
        </section>
{{> footer}}
