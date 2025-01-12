<?php

namespace App\Entities\Abstract;

abstract class Edit
{
    protected string $idFile;
    protected string $sessionToken;
    protected string $idImage;
    protected string $path;
    protected string $size;

    public function __construct(string $idFile, 
    string $sessionToken, string $idImage, string $path)
    {
        $this->idFile = $idFile;
        $this->sessionToken = $sessionToken;
        $this->idImage = $idImage;
        $this->path = $path;
    }

    public function getIdFile(): string
    {
        return $this->idFile;
    }

    public function getSessionToken(): string
    {
        return $this->sessionToken;
    }

    public function getIdImage(): string
    {
        return $this->idImage;
    }

    public function getPath(): string
    {
        return $this->path;
    }

    abstract public function editFile();
}