<?php

require '../vendor/autoload.php';
require '../src/Router/Router.php';

try {

    $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    $method = $_SERVER['REQUEST_METHOD'];

    if (!isset($router[$method][$uri])) {
        throw new Exception('Route not found');
    }

    if (!array_key_exists($uri, $router[$method])) {
        throw new Exception('Route not found');
    }
     $router[$method][$uri]();
} catch (Exception $e) {
    echo $e->getMessage();
}
