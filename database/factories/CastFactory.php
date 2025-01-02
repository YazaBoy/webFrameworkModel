<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\cast>
 */
class CastFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nama'=>$this->faker->name,
            'umur'=>$this->faker->numberBetween(1,100),
            'biodata'=>$this->faker->paragraph,
            'avatar'=>$this->faker->imageUrl,
        ];
    }
}
