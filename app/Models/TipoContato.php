<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoContato extends Model
{
    use HasFactory;

    public function tipo()
    {
        return $this->hasMany(Contato::class, 'id_tipo');
    }
}
