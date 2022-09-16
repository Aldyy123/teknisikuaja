<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Biodata>
 */
class BiodatasFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'username' => $this->faker->userName(),
            'name' => fake()->firstName(). ' ' . fake()->lastName(),
            'phone' => fake()->phoneNumber(),
            'address' => fake()->address(),
            'img_url' => fake()->imageUrl(640, 480, 'people'),
            'role' => fake()->randomElement(['admin', 'user', 'technician'])
        ];
    }
}
