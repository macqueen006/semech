<?php

namespace App\Http\Livewire\Home;

use App\Models\Post;
use Livewire\Component;

class LatestPost extends Component
{
    public int $count = 4;
    public ?string $search = "";

    public function loadMore()
    {
        $this->count += 4;
    }

    public function mount($search)
    {
        $this->search = $search;
    }

    public function render()
    {

        $posts = Post::loadLatest($this->search, $this->count);

        return view('livewire.home.latest-post', compact('posts'));
    }
}
