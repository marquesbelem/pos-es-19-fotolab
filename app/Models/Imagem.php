<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Imagem extends Model
{
    use HasFactory;

    const TABLE_NAME = 'fl_imagens';
    protected $table = self::TABLE_NAME;
}
