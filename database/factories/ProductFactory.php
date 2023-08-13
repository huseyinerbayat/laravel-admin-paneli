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
        $price = rand(300, 1000);
        return [
            'name' => $this->faker->text(150),
            'price' => $price,
            'discount_price' => $price - rand(0, 200),
            'stock_qty' => rand(100, 200),
            'description' => $this->faker->text(500),
            'seo_description' => $this->faker->text(180),
            'seo_keywords' => $this->faker->text(75),
            'priority' => rand(0,10),
            'is_published' => $this->faker->boolean(),
            'is_featured' => $this->faker->boolean(),
        ];
    }
}
