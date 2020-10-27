<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use App\Support\Factory\UserFactory;
use Throwable;

class UsuarioController extends Controller
{
    public function criar()
    {
        $usuario = UserFactory::make([
            'tipo' => request()->get('tipo', 'cliente')
        ]);

        $dadosUsuario = request()->validate(
            $usuario->criarNovoUsuarioRegras()
        );

        try {
            $usuario->setarAtributos($dadosUsuario);
        } catch (Throwable $e) {
            return redirect('usuario.cadastro.erro', 400)->with('error', $e);
        }

        return redirect('usuario.cadastro.sucesso')
            ->with('usuario', $usuario);
    }

    public function listarUsuarios()
    {
        return [];
    }

    public function listarClientes()
    {
        return [];
    }

    public function listarFotografos()
    {
        return [];
    }
}
