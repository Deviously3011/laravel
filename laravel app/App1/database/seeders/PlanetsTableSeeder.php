<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Planet; // Make sure to include the Planet model

class PlanetsTableSeeder extends Seeder
{
    public function run()
    {
        // Example data for planets
        $planetsData = [
            ['name' => 'Mars', 'description' => 'The fourth planet from the Sun.'],
            ['name' => 'Earth', 'description' => 'The third planet from the Sun.'],
            // Add more planets as needed
        ];

        // Insert data into the planets table
        foreach ($planetsData as $planetData) {
            Planet::create($planetData);
        }
    }
}
