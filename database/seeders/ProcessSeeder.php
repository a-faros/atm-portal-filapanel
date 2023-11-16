<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProcessSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Process::factory(10)->create();
    }
}
