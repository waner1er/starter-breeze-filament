<?php

namespace Database\Factories;

use App\Models\User;
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
    public function definition(): array
    {
        return [
            'title' => $title = $this->faker->sentence,
            'slug' => Str::Slug($title),
            'content' => $this->faker->paragraph,
            'excerpt' => $this->faker->sentence,
            'image' => $this->faker->imageUrl(),
            'image_alt' => $this->faker->sentence,
            'user_id' => User::all()->random()->id,
            'category_id' => 1,
            'published' => true,
        ];
    }
}
