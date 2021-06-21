<?php

class UrlHelper
{
    public function getModuleFromRequestOr($default){
        return isset($_GET["module"]) ? $_GET["module"] : $default;  //pregunta si esta seteado el modulo sino toma el defaut
    }

    public function getActionFromRequestOr($default){
        return isset($_GET["action"]) ? $_GET["action"] : $default;   // pregunta si esta seteado el action sino toma el default
    }
}


// modulo necesario para la plantilla