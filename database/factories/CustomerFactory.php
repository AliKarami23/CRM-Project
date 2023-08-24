<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Ybazli\Faker\Facades\Faker;

class CustomerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => Faker::firstName(),
            'fname' => Faker::lastName(),
            'dadname' => Faker::fullName(),
            'email' => fake()->email(),
            'phonenumber' => Faker::mobile(),
            'country' => fake()->country(),
            'City' => Faker::city(),
            'Address' => Faker::address(),
            'gender' => 'female',
            'nationalcode' => '1234567890',
            'job' => Faker::jobTitle(),
            'image' => '-',
            'education' => fake()->country(),
            'cityofeducation' => Faker::city(),
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
