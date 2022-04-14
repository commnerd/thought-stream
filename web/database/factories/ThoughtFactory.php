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
            'user_id' => \App\Models\User::inRandomOrder()->firstOrFail()->id,
            'thought' => $this->faker->text(),
        ];
    }
}
