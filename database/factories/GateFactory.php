<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Gate>
 */
class GateFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'size_small' => $this->faker->boolean(),
            'state_free' => $this->faker->boolean(),
            'international' => $this->faker->boolean(),
            'number' => $this->faker->randomNumber(),
        ];
    }
}
