<?php

namespace Database\Seeders;

use App\Models\Orang;
use Illuminate\Database\Seeder;

class OrangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Orang::factory(10)->create();
    }
}
