<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UsersFactory extends Factory
{
    /**
     * The current password being used by the factory.
     */
    protected static ?string $password;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->lastname,
            'vorname' => $this->faker->firstname,
            'birthdate' => $this->faker->date,
            'email' => $this->faker->unique()->safeEmail,
            'password' => Hash::make('password'), // Standard Passwort
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}

