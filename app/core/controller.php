<?php

function controller($matchedUri,$params){
    [$controller,$method] = explode('@',array_values($matchedUri)[0]);
    $controllerWithNamespace = CONTROLLER_PATH.$controller;
    if(!class_exists($controllerWithNamespace)){
        throw new Exception("Controller {$controller} não existe");
    }

    $controllerInstace = new $controllerWithNamespace;

    if(!method_exists($controllerInstace,$method)){
        throw new Exception("Método {$method} do controller {$controller} não existe");
    }

    return $controllerInstace -> $method($params);
}