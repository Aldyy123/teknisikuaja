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
            'phone' => fake()->phoneNumber(),
            'address' => fake()->address(),
            'city' => fake()->randomElement(['pemalang', 'tegal', 'brebes', 'magelang', 'yogyakarta', 'semarang', 'wonosobo']),
            'img_url' => 'https://i.pravatar.cc/300?img=' . fake()->numberBetween(1, 100),
            'role' => fake()->randomElement(['admin', 'user', 'technician'])
        ];
    }
}
