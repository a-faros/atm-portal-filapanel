<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TaskStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\TaskStatus::factory(10)->create();
    }
}
