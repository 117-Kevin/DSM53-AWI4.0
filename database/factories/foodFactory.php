<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\food>
 */
class foodFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'diet_id' =>fake()->numberBetween(1, 10),
            'product_id' =>fake()->numberBetween(1, 10),
        ];
    }
}
