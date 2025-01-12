<?php

namespace App\Entities\Enum;

enum Status: string
{
    case LOADING = 'loading';
    case PROCESSING = 'processing';
    case FINISHING = 'finishing';
    case SAVING = 'saving';
}