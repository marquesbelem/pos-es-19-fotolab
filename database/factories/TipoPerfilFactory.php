<?php

namespace Database\Factories;

use App\Models\TipoPerfil;
use Illuminate\Database\Eloquent\Factories\Factory;

class TipoPerfilFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = TipoPerfil::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'tipo_perfil' => $this->faker->randomElement(['Cliente', 'Fotografo'])
        ];
    }
}
