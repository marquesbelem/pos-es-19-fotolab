<?php

namespace Database\Factories;

use App\Models\Imagem;
use App\Models\Usuario;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ImagemFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Imagem::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'disk' => 'imgs',
            'caminho' => $this->faker->file(public_path('imgs'), storage_path('app' . DIRECTORY_SEPARATOR . 'imgs')),
            'id_usuario' => Usuario::factory()
        ];
    }
}
