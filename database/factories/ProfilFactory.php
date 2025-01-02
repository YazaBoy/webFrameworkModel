<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\profil>
 */
class ProfilFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'biodata'=>$this->faker->paragraph,
            'umur'=>$this->faker->numberBetween(1,50),
            'alamat'=>$this->faker->paragraph,
            'avatar'=>$this->faker->imageUrl,
            'orang_id'=>$this->faker->numberBetween(1,10),
        ];
    }
}
