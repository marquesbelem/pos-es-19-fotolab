<?php

namespace Tests\Feature;

use App\Models\Usuario;
use Tests\TestCase;

class UsuarioTest extends TestCase
{
    public function testCriarUsuario()
    {
        $usuario = Usuario::factory()->make();

        dump("Criando o usuário:", $usuario->toArray());
        $response = $this->post("/usuario/cadastro/criar", $usuario->toArray());

        $response->dumpSession();
        $this->assertNotNull(Usuario::whereEmail($usuario->email)->first());
        $response->assertRedirect('usuario/cadastro/sucesso');
    }
}
