<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'fname' => fake()->name(),
            'dadname' => fake()->name(),
            'email' => fake()->unique()->email(),
            'phonenumber' => fake()->phoneNumber(),
            'country' => fake()->country(),
            'City' => fake()->city(),
            'Address' => fake()->address(),
            'gender' => 'female',
            'nationalcode' => '1234567890',
            'job' => fake()->jobTitle(),
            'image' => '-',
            'education' => fake()->country(),
            'cityofeducation' => fake()->city(),
            'password' => Hash::make('12345'),

        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     */
    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
