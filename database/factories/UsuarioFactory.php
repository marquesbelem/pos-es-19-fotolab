<?php

namespace Database\Factories;

use App\Models\Imagem;
use App\Models\TipoPerfil;
use App\Models\Usuario;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UsuarioFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Usuario::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nome' => $this->faker->firstName,
            'sobrenome' => $this->faker->lastName,
            'email' => $this->faker->email(),
            'senha' => $this->faker->password(8, 15),
            'data_nascimento' => $this->faker->date('d/m/Y'),
            'imagem_perfil' => $this->faker->imageUrl(),
            'foto_capa' => $this->faker->imageUrl(),
            'tipo' => TipoPerfil::factory(),
        ];
    }
}
