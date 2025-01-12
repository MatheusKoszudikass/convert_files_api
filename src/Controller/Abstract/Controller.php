<?php

namespace App\Controller\Abstract;

use League\Plates\Engine;

abstract class Controller
{
    public static function view(string $view, array $data = []) 
    {
        $viewsPath = dirname(__FILE__, 3) . '/Views';       

        if(!file_exists($viewsPath . DIRECTORY_SEPARATOR . $view . '.php')) {
            throw new \Exception('View not found');
        }

        $tamplates = new Engine($viewsPath);
        echo $tamplates->render($view, $data);
    }
}