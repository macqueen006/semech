<?php

namespace App\Observers;

use App\Models\Post;
use Illuminate\Support\Str;

class PostObserver
{
    public function created(Post $post):Post
    {
        $post->slug = Str::slug($post->title() . '-' . now()->timestamp);
        $post->save();
        return $post;
    }

    public function updated(Post $post):Post
    {
        $post->slug = Str::slug($post->name);
        $post->save();
    }
}
