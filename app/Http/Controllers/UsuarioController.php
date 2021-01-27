<?php

namespace App\Http\Controllers;

use App\Http\Requests\CadastrarUsuarioRequest;
use App\Models\TipoPerfil;
use App\Models\Usuario;
use App\Support\Factory\UserFactory;
use Throwable;

class UsuarioController extends Controller
{
    public function formulario()
    {
        return view('usuario.cadastro.formulario');
    }

    public function criar(CadastrarUsuarioRequest $request)
    {
        try {
            $dadosUsuario = $request->validated();
            
            $tipoPerfil = TipoPerfil::make()->fromNome($dadosUsuario['tipo']);

            $usuarioMesmoEmail = Usuario::whereEmail($dadosUsuario['email'])->first();
            throw_if($usuarioMesmoEmail, trans('CadastroUsuario.email.duplicado'));

            $usuario = Usuario::make($dadosUsuario);
            $usuario->id_tipo_perfil = $tipoPerfil->id;
            $usuario->data_nascimento = date('Y-m-d', strtotime($dadosUsuario['data_nascimento']));

            $usuario->save();
        } catch (Throwable $e) {
            return redirect(route('usuario.cadastro'), 400)->withErrors([
                'generalError' => $e->getMessage()
            ]);
        }

        return view('usuario.cadastro.sucesso')
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
