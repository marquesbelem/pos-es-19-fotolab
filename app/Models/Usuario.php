<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Facades\Hash;

class Usuario extends User
{
    use HasFactory;

    const TABLE_NAME = 'fl_usuarios';

    protected $table = self::TABLE_NAME;

    protected $fillable = ['nome', 'sobrenome', 'email', 'password'];

    protected $guarded = ['id', 'password'];

    public function fotografo()
    {
        return $this->hasOne(Fotografo::class, 'id_usuario');
    }

    public function endereco()
    {
        return $this->hasOne(Endereco::class, 'id_usuario');
    }

    public function contato()
    {
        return $this->hasMany(Usuario::class, 'id_usuario');
    }

    public function getAuthPassword()
    {
     return $this->senha;
    }
}
