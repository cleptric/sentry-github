<?php

namespace App\Service;

use Exception;

class ExceptionService
{
    public static function throw(string $message)
    {
        throw new Exception($message);
    }
}
