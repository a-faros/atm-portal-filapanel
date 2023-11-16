<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MakerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Maker::factory(10)->create();
    }
}
