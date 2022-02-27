<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\PostRequest;
use App\Jobs\CreatePost;
use App\Jobs\DeletePost;
use App\Jobs\UpdatePost;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;

class PostController extends Controller
{

    /**
     * Display a listing of the resource.
     * @return \Illuminate\Http\Response
     */

    public function index(Request $request)
    {
        if (authUser()->isSuperAdmin()) {
            $posts = Post::when($request->get('search'), fn ($query, $search) => $query->where('title', 'like', '%'. $search .'%'))
                ->orderBy('id', 'DESC')
                ->paginate(5);
        }else {
            $posts = Post::where('author_id', authUser()->id())
                ->when($request->get('search'), fn ($query, $search) => $query->where('title', 'like', '%'. $search .'%'))
                ->orderBy('id', 'DESC')
                ->paginate(5);
        }
        return view('admin.posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {
        $tags = Tag::all();
        return view('admin.posts.create', compact('tags'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(PostRequest $request)
    {
        $this->dispatchSync(CreatePost::formRequest($request));
        toast('Post created','success');
        return redirect()->route('admin.posts.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function show($id)
    {
        return view('admin.posts.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function edit(Post $post)
    {
        $tags =Tag::all();
        $selectedTags = old('tags', $post->tags()->pluck('id')->toArray());
        return view('admin.posts.edit', compact('post', 'tags', 'selectedTags'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function update(PostRequest $request, Post $post)
    {
        $this->dispatchSync(UpdatePost::formRequest($post, $request));
        toast('Post updated','success');
        return redirect()->route('admin.posts.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function destroy(Post $post)
    {
        $this->dispatchSync(new DeletePost($post));
        toast('Post Deleted','success');
        return redirect()->route('admin.posts.index');
    }

}
