<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/TpFinal/view/css/w3.css">
    <link rel="stylesheet" href="/TpFinal/view/css/headerFooterStyle.css">
    <link rel="stylesheet" href="/TpFinal/view/css/styleUsuarios.css">
    <title>Document</title>
</head>
<body>
<header id="header">
    <img src="#" alt="Logo">
</header>
<main>
    <section class="contenedor-form-login">
        <article id="card-home" class="w3-container w3-theme w3-padding-16" style="width:400px;">
            <h1 id="titulo-login"> Bienvenidos al sistema </h1>

            <div class="w3-container w3-white w3-padding-bottom" style="width:100%; padding: 5px 24px;">

                <form id="formLogin" action="" method="post" >

                    <label for="usuario">Usuario:</label>
                    <input type="text" id="usuario" name="usuario" class="w3-input" aria-required="true" aria-invalid="true">

                    <label for="clave">Contraseña:</label>
                    <input type="password" id="clave" name="clave" class="w3-input w3-margin-bottom" aria-required="true" aria-invalid="true">

                    <a id="btnLogin" class="w3-btn-block w3-margin-top" href="/TpFinal/view/reportesView.php">INGRESAR</a>
                    <a id="btnOlvideClave" class="w3-transparent w3-block w3-margin-top w3-center w3-text-blue" href="">Olvidé mi contraseña</a>

                </form>

            </div>
        </article>
    </section>
    </form>
</main>
