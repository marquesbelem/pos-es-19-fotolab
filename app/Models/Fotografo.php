<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class Fotografo extends Usuario
{
    use HasFactory;

    const TABLE_NAME = 'fl_usuario';

    protected $table = self::TABLE_NAME;

    public function fotoCapa()
    {
        return $this->belongsTo(Imagem::class, 'id', 'id_foto_perfil');
    }
}
