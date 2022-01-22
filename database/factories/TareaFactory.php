<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class TareaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => User::factory(),
            'descripcion' => $this->faker->sentence(7),
            'fecha' => $this->faker->dateTime(),
            'heredable' => $this->faker->boolean(),
        ];
    }
}
