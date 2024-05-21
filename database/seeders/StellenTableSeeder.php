<?php

namespace Database\Seeders;

use App\Models\Stellen;
use Illuminate\Database\Seeder;

class StellenTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Stellen::factory()->count(40)->create();
    }
}
