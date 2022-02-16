<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\Tag;
use Illuminate\Database\Seeder;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tags = collect([
            $this->createTags('Outdoor', 'outdoors'),
            $this->createTags('Health', 'health'),
            $this->createTags('Environment', 'environment'),
            $this->createTags('Fitness', 'fitness'),
            $this->createTags('Beauty', 'beauty'),
            $this->createTags('Family', 'family'),
            $this->createTags('Decor', 'decor'),
            $this->createTags('DIY', 'd-i-y'),
        ]);

        Post::all()->each(function ($post) use ($tags) {
            //syncTags is from the HasTag Traits
            $post->syncTags(
                $tags->random(rand(0, $tags->count()))
                    ->take(3)
                    ->pluck('id')
                    ->toArray(),
            );
        });
    }

    private function createTags(string $name, string $slug)
    {
        return Tag::factory()->create(compact('name', 'slug'));
    }

}
