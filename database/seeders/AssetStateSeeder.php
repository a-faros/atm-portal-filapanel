<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AssetStateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\AssetState::factory(10)->create();
    }
}
