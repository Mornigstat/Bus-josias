<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Compagnies;
use Database\Factories\CompagniesFactory;

class CompagniesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Generate and create 10 simulated companies
       Compagnies::factory()->count(10)->create();


    }
}
