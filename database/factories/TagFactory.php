<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class TagFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $tags = $this->faker->text(15);
        return [
            'name' => $tags,
            'slug' => Str::slug($tags),
            'image' => 'bg-image-10.jpg'
        ];
    }
}
