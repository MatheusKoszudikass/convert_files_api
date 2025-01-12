<?php

namespace App\Entities\Enum;

enum TypeFile: string
{
    case PDF = 'pdf';
    case TXT = 'txt';
    case PNG = 'png';
    case JPG = 'jpg';
}