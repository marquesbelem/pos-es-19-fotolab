<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use Illuminate\Support\Str;

class UsuarioTest extends TestCase
{
    const PERFECT_PARAMS = [
        'nome' => 'Teste',
        'sobrenome' => 'da silva',
        'email' => 'teste@mail.com.br',
        'senha' => '123456789',
        'data_nascimento' => '21/03/1988',
        'imagem_perfil' => null,
        'foto_capa' => null,
        'tipo' => '1',
    ];

    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_criar_usuario_sem_nome()
    {
        $params = self::PERFECT_PARAMS;
        unset($params['nome']);

        $response = $this->post('usuario/cadastro/novo', $params);

        $redirectEsperado = 'usuario/cadastro#ft_form_novo_usuario';
        $erroEsperado = [
            'nome' => trans('CadastroUsuario.nome.required')
        ];

        $response->assertRedirect($redirectEsperado);

        $response->assertSessionHasErrors($erroEsperado);
    }
}
