<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class JobPositionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\JobPosition::factory(10)->create();
    }
}
