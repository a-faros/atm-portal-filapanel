<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ObjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Object::factory(10)->create();
    }
}
