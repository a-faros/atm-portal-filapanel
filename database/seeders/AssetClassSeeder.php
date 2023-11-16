<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AssetClassSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\AssetClass::factory(10)->create();
    }
}
