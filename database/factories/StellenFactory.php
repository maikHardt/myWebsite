<?php

namespace Database\Factories;

use App\Models\Stellen;
use App\Models\Categories;
use App\Models\Companies;
use Illuminate\Database\Eloquent\Factories\Factory;

class StellenFactory extends Factory
{
    protected $model = Stellen::class;

    public function definition()
    {
        return [
            'bezeichnung' => $this->faker->jobTitle,
            'beschreibung' => $this->faker->paragraph,
            'salary' => $this->faker->randomFloat(2, 1000, 10000),
            'standort' => $this->faker->city,
            'category_id' => Categories::factory(),
            'company_id' => Companies::factory(),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
