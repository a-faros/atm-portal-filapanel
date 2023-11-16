<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UserLevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\UserLevel::factory(10)->create();
    }
}
