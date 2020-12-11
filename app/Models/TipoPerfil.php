<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoPerfil extends Model
{
    use HasFactory;

    const TABLE_NAME = 'fl_tipo_perfil';

    protected $table = self::TABLE_NAME;
    public $timestamps = false;
}
