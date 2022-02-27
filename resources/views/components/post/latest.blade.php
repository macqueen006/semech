<div class="creative-blog wow move-up">
    <div class="blog-grid blog-creative">
        <div class="post-thumb">
            <a href="{{ route('blog.show', $post) }}">
                <img src="{{ asset('storage/'. $post->image) }}" alt="{{ $post->title . ' image' }}">
            </a>
        </div>
        <div class="post-content">
            <div class="post-inner">
                <h4 class="heading heading-h4"><a href="{{ route('blog.show', $post) }}">{{ $post->title }}</a></h4>
                <div class="post-meta">
                    <div class="post-date">{{ $post->published_at->format('M d, Y') }}</div>
                    @foreach($post->tags() as $tag)
                    <div class="post-category"><a href="{{ route('tags.show', $tag) }}">{{ $tag->name }}</a></div>
                    @endforeach
                </div>

                <div class="desc pl_md--20 pl_sm--10 mt--20">
                    <p class="bk_pra">{!! $post->excerpt() !!} </p>
                </div>
            </div>
        </div>
    </div>
</div>
