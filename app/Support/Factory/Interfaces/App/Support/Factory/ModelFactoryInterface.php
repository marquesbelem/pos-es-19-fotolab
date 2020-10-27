<?php

namespace App\Support\Factory\Interfaces;

use Illuminate\Database\Eloquent\Model;

interface ModelFactoryInterface
{
    public static function make(array $params = []) : Model;    
}
