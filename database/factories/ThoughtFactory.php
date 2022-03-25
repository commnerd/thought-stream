<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ThoughtFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'thought' => $this->faker->realText(200),
        ];
    }
}
