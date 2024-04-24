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
            'image' => fake()->randomElement(['https://www.daskeyboard.com/images/das-keyboard-6-professional/6-pro-top-view.jpeg', 'https://gamextreme.ph/cdn/shop/products/1_e1467125-710b-4200-aa9f-b8fd9dce0b8a_1024x1024.png?v=1663638078']),
            'name' => fake()->randomElement(['Mouse', 'Keyboard', 'Monitor', 'Headset']),
            'description' => fake()->paragraph(10),
            'price' => fake()->numberBetween(500, 800),
        ];
    }
}
