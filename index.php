<?php
require_once("ModuleInitializer.php");
require_once("Router.php");

$module = isset($_GET["module"]) ? $_GET["module"] : "login";
$action = isset($_GET["action"]) ? $_GET["action"] : "index";

$moduleInitializer = new ModuleInitializer();
Router::executeActionFromController($moduleInitializer, $module, $action);
?>
<form id="formLogin" action="" method="post">

    <label for="usuario">Usuario:</label>
    <input type="text" id="usuario" name="usuario" class="w3-input" aria-required="true" aria-invalid="true">

    <label for="clave">Contraseña:</label>
    <input type="password" id="clave" name="clave" class="w3-input w3-margin-bottom" aria-required="true"
           aria-invalid="true">

    <a id="btnLogin" class="w3-btn-block w3-margin-top" href="/TpFinal/view/reportesView.php">INGRESAR</a>
    <a id="btnOlvideClave" class="w3-transparent w3-block w3-margin-top w3-center w3-text-blue" href="">Olvidé mi
        contraseña</a>
    <a id="btnRegistro" class="w3-transparent w3-block w3-margin-top w3-center w3-text-blue"
       href="/view/partial/registroView.php">Quiero Regristrarme</a>
</form>

</div>
</article>
</section>
</form>
</main>


