<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Page>
 */
class PageFactory extends Factory
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
            'slug' => Str::slug($title),
            'content' => $this->faker->paragraph,
            'thumbnail' => $this->faker->imageUrl,
            'thumbnail_alt' => $this->faker->sentence,
            'excerpt' => $this->faker->sentence,
            'meta_title' => $this->faker->sentence,
            'meta_description' => $this->faker->sentence,
            'meta_keywords' => $this->faker->sentence,
            'is_published' => $this->faker->boolean,
        ];
    }
}
