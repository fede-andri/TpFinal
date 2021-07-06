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

<main class="w3-center w3-margin-top w3-margin-left">
    <section class="contenedor-form-login w3-center w3-row">
        <div class="w3-container w3-col l4 m4">

        </div>

        <div id="card-home" class="w3-container w3-theme w3-padding-16 w3-center w3-col l4 m4" style="width:400px;">
            <h1 id="titulo-login"> Bienvenidos al sistema </h1>

            <div class="w3-container w3-white w3-padding-bottom" style="width:100%; padding: 5px 24px;">

                <form id="formLogin" action="index.php?module=login&action=verificar" method="POST" >

                    <label for="usuario">Correo electronico:</label>
                    <input type="email" id="email" name="email" class="w3-input" aria-required="true" aria-invalid="true">

                    <label for="clave">Contraseña:</label>
                    <input type="password" id="clave" name="clave" class="w3-input w3-margin-bottom" aria-required="true" aria-invalid="true">

                    <input type="submit" id="btnLogin" class="w3-btn-block w3-margin-top" value="Ingresar"></input>
                    <a id="btnOlvideClave" class="w3-transparent w3-block w3-margin-top w3-center w3-text-blue" href="">Olvidé mi contraseña</a>
                    <a id="btnOlvideClave" class="w3-transparent w3-block w3-margin-top w3-center w3-text-orange" href="index.php?module=usuario&action=registrarUsuario">Registrarse</a>
                </form>


            </div>
        </div>

        <div class="w3-container w3-col l4 m4">

        </div>
    </section>

</main>
{{>footer}}
