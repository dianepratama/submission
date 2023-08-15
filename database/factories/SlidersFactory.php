<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Sliders>
 */
class SlidersFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->company(),
           // 'photo' => $this->faker->image(storage_path('images'), 300, 300),
           'photo' => 'images/' . Str::random(40) . '.jpg',
        ];
    }
}
