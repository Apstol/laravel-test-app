<?php

namespace Database\Factories;

use App\Models\Pc;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Pc>
 */
class PcFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'ram' => fake()->numberBetween(8, 64),
            'hd' => fake()->numberBetween(100, 30000),
            'price' => fake()->randomFloat(2, 1000.00),
        ];
    }
}
