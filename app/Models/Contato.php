<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contato extends Model
{
    use HasFactory;

    const TABLE_NAME = 'fl_contatos';

    protected $table = self::TABLE_NAME;

    public function usuario()
    {
        return $this->belongsTo(Usuario::class, 'id_usuario');
    }

    public function tipo()
    {
        return $this->belongsTo(TipoContato::class, 'id_tipo');
    }
}
