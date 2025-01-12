<?php

namespace App\Service;

use App\Entities\File;

class UploadService
{

    public function upload($request)
    {

        $file = $request['file'];

        var_dump($request);

        if(!isset($file)) {
            throw new \Exception('No file uploaded.');
            
        } else {
            throw new \Exception('No file uploaded.');
        }
        if ($file->getClientOriginalExtension() !== 'pdf') {
            throw new \Exception('Only PDF files are allowed.');
        }

        // try {
        //     $file->move($this->getTargetDirectory(), $fileName);
        // } catch (FileException $e) {
        //     throw new \Exception('Failed to upload file.');
        // }

        // return $fileName;
    }

    public function getTargetDirectory()
    {
        
    }
}