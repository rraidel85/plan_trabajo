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
            'descripcion'=>$this->faker->sentence(10), 
            'fecha'=>$this->faker->dateTime(), 
            'delegable'=>$this->faker->boolean(),
            'created_by'=>rand(1, User::count()),
        ];
    }
}
