<?php

namespace Database\Factories;

use App\Models\BlogCategory;
use Illuminate\Database\Eloquent\Factories\Factory;

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
        return [
            'title' => $this->faker->title(),
            'slug' => $this->faker->slug(),
            'blog_category_id' => BlogCategory::factory()->create()->id,
            'excerpt' => $this->faker->sentence(),
            'body' => $this->faker->paragraph(),
            'thumbnail' => $this->faker->imageUrl(),
            'author' => $this->faker->userName(),
            'published_at' => $this->faker->dateTime()
        ];
    }
}
