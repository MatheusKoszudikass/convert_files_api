<?php

namespace App\Entities\Abstract;

use DateTime;

abstract class BaseEntities extends Edit
{
    protected string $id;
    protected DateTime $startData;
    protected DateTime $endData;

    public function __construct(DateTime $startData, DateTime $endData)
    {
        $this->id = $this->generateId();
        $this->startData = $startData;
        $this->endData = $endData;
    }

    private function generateId(): string 
    {
        return sprintf(
            '%04x%04x-%04x-%04x-%04x-%04x%04x%04x',
            mt_rand(0, 0xffff),
            mt_rand(0, 0xffff),
            mt_rand(0, 0xffff),
            mt_rand(0, 0x0fff) | 0x4000,
            mt_rand(0, 0x3fff) | 0x8000,
            mt_rand(0, 0xffff),
            mt_rand(0, 0xffff),
            mt_rand(0, 0xffff)
        );
    }

    public function getId()
    {
        return $this->id;
    }

    public function getstartData()
    {
        return $this->startData;
    }

    public function getendData()
    {
        return $this->endData;
    }

    public function setendData($endData)
    {
        $this->endData = $endData;
    }

    abstract public function validate();
    
    abstract public function description(object $data);
}