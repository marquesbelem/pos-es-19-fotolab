<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Facades\Validator;

class Usuario extends User
{
    use HasFactory;

    const TABLE_NAME = 'fl_usuarios';

    protected $table = self::TABLE_NAME;

    protected $fillable = ['nome', 'sobrenome', 'email', 'senha'];

    protected $guarded = ['id', 'senha'];

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

    public function criarNovoUsuarioRegras()
    {
        return [
            'email' => 'bail|string|required',
            'senha' => 'string|size:15|required',
            'nome' => 'string|size:20|required',
            'sobrenome' => 'string|size:100|required',
            'data_nascimento' => 'date|date_format:d-m-Y|required',
            'imagem_perfil' => 'file|max:4000|mimes:png,jpg,jpeg',
            'foto_capa' => 'file|max:4000|mimes:png,jpg,jpeg',
            'contatos' => 'array',
            'endereco' => 'string|size:255',
            'tipo' => 'integer'
        ];
    }
    
    public function temEmailUnico()
    {
        return (self::whereEmail($this->email)->count() > 0);
    }
}
