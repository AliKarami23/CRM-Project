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
            'Name' => Faker::firstName(),
            'LastName' => Faker::lastName(),
            'FatherName' => Faker::fullName(),
            'Email' => fake()->email(),
            'PhoneNumber' => Faker::mobile(),
            'Country' => fake()->country(),
            'City' => Faker::city(),
            'Address' => Faker::address(),
            'Gender' => 'female',
            'NationalCode' => '1234567890',
            'Job' => Faker::jobTitle(),
            'Image' => '-',
            'Education' => fake()->country(),
            'CityEducation' => Faker::city(),
            'Password' => Hash::make('12345'),

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
