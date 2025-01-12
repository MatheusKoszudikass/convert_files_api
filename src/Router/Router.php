<?php

use App\Service\UploadService;

$router = [
    'GET' => [
        '/' => fn() => load('HomeController', 'index'),
    ],
    "POST" => [
        '/upload' => fn() => load('HomeController', 'upload')
    ]
];

function load(string $controller, string $action)
{
    $controllerNameSpace = "App\\Controller\\{$controller}";

    if(!class_exists($controllerNameSpace)) {
        throw new Exception("Controller {$controllerNameSpace} not found");
    }

    $controllerNewInstancie = new $controllerNameSpace(new UploadService());
    if(!method_exists($controllerNewInstancie, $action)) {
        throw new Exception("Action {$action} not found");
    }

    return $controllerNewInstancie->$action();
}
