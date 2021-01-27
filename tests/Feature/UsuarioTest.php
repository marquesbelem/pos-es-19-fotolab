<?php

namespace Tests\Feature;

use App\Models\TipoPerfil;
use App\Models\Usuario;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UsuarioTest extends TestCase
{
    use WithFaker;
    public function testCriarUsuario()
    {
        $params = [
            'email' => $this->faker->email(),
            'senha' => $this->faker->password(8,15),
            'nome' => $this->faker->firstName(),
            'sobrenome' => $this->faker->lastName(),
            'data_nascimento' => $this->faker->date('d/m/Y'),
            'tipo' => strtolower(TipoPerfil::inRandomOrder()->first()->nome)
        ];

        $response = $this->post("/usuario/cadastro/criar", $params);

        $this->assertNotNull(Usuario::whereEmail($params['email'])->first());
        $response->assertViewIs('usuario.cadastro.sucesso');
        $response->assertViewHas('nome_usuario', $params['nome']);
    }
}
