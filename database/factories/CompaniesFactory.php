<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Company>
 */
class CompaniesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'firmenname' => $this->faker->company,
            'beschreibung' => $this->faker->paragraph,
            'standort' => $this->faker->city,
            'webseite' => $this->faker->url,
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
