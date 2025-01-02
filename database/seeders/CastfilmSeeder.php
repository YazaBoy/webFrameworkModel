<?php

namespace Database\Seeders;

use App\Models\Castfilm;
use Illuminate\Database\Seeder;

class CastfilmSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Castfilm::factory(10)->create();
    }
}
