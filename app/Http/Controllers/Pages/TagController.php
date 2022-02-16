<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{

    public function show(Tag $tag)
    {
        $posts = Post::forTag($tag->slug)->paginate(3);
        return view('pages.tags.show', compact('tag', 'posts'));
    }

}
