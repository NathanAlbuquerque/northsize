<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        $name = fake()->name();
        $slug = Str::slug($name);

        return [
            'name' => $name,
            'slug' => $slug,
            'price' => fake()->randomFloat($nbMaxDecimals = 2, $min = 0, $max = 5000),
            'category' => fake()->words(2, true),
            'description' => fake()->sentences(3, true),
        ];
    }
}
