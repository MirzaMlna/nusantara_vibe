<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

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
        return [
            'name' => $this->faker->words(3, true),
            'price' => $this->faker->numberBetween(10000, 500000),
            'stock' => $this->faker->numberBetween(10, 100),
            'description' => $this->faker->sentence(nbWords: 30),
            'image' => 'https://btbatiktrusmi.com/wp-content/uploads/2023/06/batik1.webp',
            'dimensions' => json_encode([
                'width' => $this->faker->numberBetween(10, 100),
                'height' => $this->faker->numberBetween(10, 100),
            ]),
            'is_featured' => $this->faker->boolean(),
        ];
    }
}
