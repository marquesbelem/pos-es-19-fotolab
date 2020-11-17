<?php

namespace App\Http\Controllers;

use App\Http\Requests\CadastrarUsuario;
use App\Models\Usuario;
use App\Support\Factory\UserFactory;
use Throwable;

class UsuarioController extends Controller
{
    public function formulario()
    {
        return view('usuario.cadastro.formulario');
    }

    public function criar(CadastrarUsuario $request)
    {
        try {
            $dadosUsuario = $request->validated();
            $usuario = UserFactory::make([
                'tipo' => $dadosUsuario['tipo'],
                'atributos' => $dadosUsuario
            ]);

            $usuario->setAtributos($dadosUsuario);

            $usuario->save();
        } catch (Throwable $e) {
            
            return redirect('usuario.cadastro.erro', 400);
        }

        return redirect('usuario.cadastro.sucesso')
            ->with('nome_usuario', $usuario->nome);
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
