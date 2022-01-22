<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Area;
use App\Models\Tarea;

class AreaFactory extends Factory
{

    protected $model = Area::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'tarea_id' => Tarea::factory(),
            'nombre' => $this->faker->word(),
            'descripcion' => $this->faker->sentence(15),
        ];
    }
}
