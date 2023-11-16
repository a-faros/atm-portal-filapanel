<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TaskUpdateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\TaskUpdate::factory(10)->create();
    }
}
