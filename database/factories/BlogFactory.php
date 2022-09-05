<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Blog>
 */
class BlogFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $title = fake()->sentence(10);
        return [
            'description' => fake()->paragraphs(10, true),
            'title' => $title,
            'slug' => Str::slug($title),
            'image' => fake()->imageUrl()
        ];
    }
}
