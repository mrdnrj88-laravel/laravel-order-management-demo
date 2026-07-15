<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Product>
 */
class ProductFactory extends Factory
{
    protected $model = Product::class;

    public function definition(): array
    {
        return [
            'name' => fake()->words(3, true),
            'sku' => strtoupper(fake()->bothify('PRD-#####')),
            'description' => fake()->sentence(),
            'price' => fake()->numberBetween(1000, 100000),
            'stock' => fake()->numberBetween(0, 500),
            'is_active' => true,
        ];
    }
}