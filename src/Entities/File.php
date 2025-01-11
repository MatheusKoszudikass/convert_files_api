<?php

namespace App\Entities;

class File
{
    private $id;
    private $name;
    private $path;
    private $size;
    private $createdAt;
    private $updatedAt;

    public function __construct($name, $path, $size)
    {
        $this->name = $name;
        $this->path = $path;
        $this->size = $size;
        $this->createdAt = new \DateTime();
        $this->updatedAt = new \DateTime();
    }

    public function getId()
    {
        return $this->id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
        $this->updatedAt = new \DateTime();
    }

    public function getPath()
    {
        return $this->path;
    }

    public function setPath($path)
    {
        $this->path = $path;
        $this->updatedAt = new \DateTime();
    }

    public function getSize()
    {
        return $this->size;
    }

    public function setSize($size)
    {
        $this->size = $size;
        $this->updatedAt = new \DateTime();
    }

    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }
}