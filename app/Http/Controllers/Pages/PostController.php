<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(Request $request)
    {
        $request = $request->get('search');
        $tags = Tag::all();
        return view('pages.posts.index', compact('request', 'tags'));
    }

    public function show(Request $request, Post $post)
    {
        $request = $request->get('search');
        $tags = Tag::all();
        return view('pages.posts.show', compact('post', 'request', 'tags'));
    }

    public function upload(Request $request)
    {
        $imgPath = $request->file('file')->store('uploads', 'public');
        return response()->json(['location' => '/storage/public/' . $imgPath]);
    }

}
