<?php

namespace App\Controller;

use App\Controller\Abstract\Controller;

class TestController
{
    /**
     * @Route("/test", name="test_index")
     */
    public function index()
    {
        return Controller::view('Test/Test');
    }
}