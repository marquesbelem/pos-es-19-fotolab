<?php


namespace Tests\Unit;


class UsuarioTest extends \PHPUnit\Framework\TestCase
{
    /**
     * @return void
     */
    public function testCriarUsuarioCamposObrigatorios()
    {
        $params = self::PERFECT_PARAMS;
        unset($params['email']);
        unset($params['senha']);
        unset($params['nome']);
        unset($params['sobrenome']);
        unset($params['data_nascimento']);

        $response = $this->post('usuario/cadastro/novo', $params);

        $redirectEsperado = 'usuario/cadastro#ft_form_novo_usuario';
        $erroEsperado = [
            'nome' => trans('CadastroUsuario.nome.required'),
            'email' => trans('CadastroUsuario.email.required'),
            'senha' => trans('CadastroUsuario.senha.required'),
            'sobrenome' => trans('CadastroUsuario.sobrenome.required'),
            'data_nascimento' => trans('CadastroUsuario.data_nascimento.required'),
        ];

        $response->assertRedirect($redirectEsperado);

        $response->assertSessionHasErrors($erroEsperado);
    }

    /**
     * @return void
     */
    public function testCriarUsuarioCamposTexto()
    {
        $params = self::PERFECT_PARAMS;
        $params['email'] = rand(1, 1000);
        $params['senha'] = rand(1, 1000);
        $params['nome'] = rand(1, 1000);
        $params['sobrenome'] = rand(1, 1000);
        $params['tipo'] = rand(1, 1000);

        $response = $this->post('usuario/cadastro/novo', $params);

        $redirectEsperado = 'usuario/cadastro#ft_form_novo_usuario';
        $erroEsperado = [
            'nome' => trans('CadastroUsuario.nome.string'),
            'email' => trans('CadastroUsuario.email.email'),
            'senha' => trans('CadastroUsuario.senha.string'),
            'sobrenome' => trans('CadastroUsuario.sobrenome.string'),
            'tipo' => trans('CadastroUsuario.tipo.string'),
        ];

        $response->assertRedirect($redirectEsperado);

        $response->assertSessionHasErrors($erroEsperado);
    }

    /**
     * @return void
     */
    public function testCriarUsuarioNomeArray()
    {
        $params = self::PERFECT_PARAMS;
        $params['nome'] = [];

        $response = $this->post('usuario/cadastro/novo', $params);

        $redirectEsperado = 'usuario/cadastro#ft_form_novo_usuario';
        $erroEsperado = [
            'nome' => trans('CadastroUsuario.nome.required')
        ];

        $response->assertRedirect($redirectEsperado);

        $response->assertSessionHasErrors($erroEsperado);
    }
}
