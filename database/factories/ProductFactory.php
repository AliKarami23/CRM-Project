<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'product_name' => fake()->name(),
            'Description' => fake()->word(),
            'Category' => fake()->name(),
            'Price' => fake()->numberBetween(100000,999999),
            'inventory' => fake()->numberBetween(10,150),
            'color' => fake()->colorName(),
            'image' => '-',
        ];
    }
}
