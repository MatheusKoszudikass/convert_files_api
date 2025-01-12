<?php

namespace App\Entities;

use App\Entities\Abstract\BaseEntities;
use App\Entities\Abstract\Edit;
use DateTime;

class File extends BaseEntities  
{
    private $name;
    private $dateUpload;

    public function __construct($name, $path, $size)
    {
        $this->name = $name;
        $this->path = $path;
        $this->size = $size;
        $this->startData = new \DateTime();
        $this->dateUpload = new \DateTime();
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function getName(): static
    {
        return $this->name;
    }

    public function setName($name):void
    {
        $this->name = $name;
        $this->dateUpload = new \DateTime();
    }

    public function getPath(): string
    {
        return $this->path;
    }

    public function setPath($path): void
    {
        $this->path = $path;
        $this->dateUpload = new \DateTime();
    }

    public function getSize(): string
    {
        return $this->size;
    }

    public function setSize($size): void
    {
        $this->size = $size;
        $this->dateUpload = new \DateTime();
    }

    public function getdateUpload(): DateTime
    {
        return $this->dateUpload;
    }

    public function validate(): void
    {
        if (empty($this->name)) {
            throw new \Exception('Name is required');
        }

        if (empty($this->path)) {
            throw new \Exception('Path is required');
        }

        if (empty($this->size)) {
            throw new \Exception('Size is required');
        }
    }

    public function description(object $data): string
    {
        return 'File: ' . $this->name . ' - ' . $this->path . ' - ' . $this->size;
    }

    public function editFile(): string
    {
        return 'File edited';
    }
}