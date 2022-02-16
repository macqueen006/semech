<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\TagStoreRequest;
use App\Models\Tag;
use App\Jobs\createTag;
use App\Jobs\UpdateTag;
use App\Jobs\DeleteTag;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class TagController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

            $tags = Tag::when($request->get('search'), fn ($query, $search) => $query->where('name', 'like', '%'. $search .'%'))
                ->orderBy('id', 'DESC')
                ->paginate(5);


        return view('admin.tags.index', compact('tags'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.tags.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TagStoreRequest $request)
    {
//        $this->dispatch(); sends to queue
        $this->dispatchSync(CreateTag::formRequest($request));
        toast('Tag created','success');
        return redirect()->route('admin.tags.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('admin.tags.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Tag $tag)
    {
        return view('admin.tags.edit', compact('tag'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(TagStoreRequest $request, Tag $tag)
    {
        $this->dispatchSync(UpdateTag::formRequest($tag, $request));
        toast('Tag updated','success');
        return redirect()->route('admin.tags.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tag $tag)
    {

        $this->dispatchSync(new DeleteTag($tag));
        toast('Tag deleted','success');
        return redirect()->route('admin.tags.index');
    }
}
