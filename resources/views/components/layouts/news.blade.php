<!-- Blog Area -->

<div class="bk-blog-grid-area bg_color--1 pb--120 pb_md--80 pb_sm--60">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="brook-section-title text-center">
                    <h3 class="heading heading-h3 font-large">News from the blog</h3>
                    <div class="bkseparator--25"></div>
                </div>
            </div>
        </div>
        <div class="row mt--20">
            @foreach($posts as $post)
            <!-- Start Single Blog -->
            <div class="col-lg-4 col-md-6 col-sm-6 col-12 move-up wow mt--40">
                <div class="blog-grid blog-standard grid-simple">
                    <div class="post-thumb">
                        <a href="">
                            <img src="{{ asset('storage/'.$post->image) }}" alt="news image">
                        </a>
                    </div>
                    <div class="post-content text-center">
                        <div class="post-inner">
                            <div class="post-meta">
                                <div class="post-date">{{ $post->created_at->format('M d, Y') }}</div>
                                @foreach($post->tags() as $tag)
                                <div class="post-category"><a href="{{ route('tags.show', $tag) }}">{{ $tag->name }}</a></div>
                                @endforeach
                            </div>
                            <h5 class="heading heading-h5"><a href="{{ route('blog.show', $post) }}">{!! clean($post->excerpt(40) ) !!} </a></h5>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Single Blog -->
                @endforeach
        </div>
    </div>
</div>
<!-- End Blog Area -->
