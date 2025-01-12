<?php

namespace App\Controller;

use App\Controller\Abstract\Controller;
use App\Service\UploadService;

class HomeController 
{
    private UploadService $uploadService;
    public function __construct(UploadService $uploadService)
    {
        $this->uploadService = $uploadService;
    }
    public function index()
    {
        Controller::view('Home/Home');
    }

    public function upload()
    {
        $this->uploadService->upload((object) $_FILES);
    }
}