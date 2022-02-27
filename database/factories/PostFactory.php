<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */

    public function definition()
    {
        $title = $this->faker->text(20);
        return [
            'title' => $title,
            'body' => $this->faker->paragraph(10),
            'slug' => Str::slug($title),
            'author_id' => $attribute['author_id'] ?? User::factory(),
            'image' => 'public/posts/BijbWN2SyNCzzNtx7HfRmfOhI5Z6UKSjUtX19EHS.jpg',
            'published_at' => now(),
            'type' => $this->faker->randomElement(['standard', 'premium']),
            'is_commentable' => rand(0,1),
        ];
    }
}
