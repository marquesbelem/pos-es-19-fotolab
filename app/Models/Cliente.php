<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    const TABLE_NAME = 'fl_clientes';
    protected $table = self::TABLE_NAME;
}
