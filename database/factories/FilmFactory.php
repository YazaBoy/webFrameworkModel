<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\film>
 */
class FilmFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'judul'=>$this->faker->sentence,
            'sinopsis'=>$this->faker->paragraph,
            'poster'=>$this->faker->imageUrl,
            'tahun'=>$this->faker->year,
            'tersedia'=>$this->faker->boolean(60),
            'genre_id'=>$this->faker->numberBetween(1,10),
        ];
    }
}
