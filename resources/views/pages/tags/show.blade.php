<x-app-layout>
    <div class="shop-slider-area">
        <div class="shop-slide-wrapper">

            <!-- Slide Info -->
            <div class="shop-slide-inner shop-slide-info">
                <div class="inner">
                    <h1 class="heading heading-h1 font-60 line-height-1-42">Tag Collection {{ $tag->name() }} <span
                            class="fa fa-quote-right"></span></h1>

                    <div class="shop-btn mt--45">
                        <div class="content mt--35 mb--65">
                            <p class="bk_pra font-18 line-height-1-63">{{ $tag->description }}</p>
                        </div>

                    </div>
                </div>
            </div>

            <!-- Shop Thumbnail -->
            @if($tag->image())
                <div class="shop-slide-inner thumbnail shop-slide-bg-1"
                     style="background-image: url({{ asset('storage/' . $tag->image()) }})">
                    @else
                        <div class="shop-slide-inner thumbnail shop-slide-bg-1"
                             style="background-image: url({{ asset('img/bg/bg-image-53.jpg') }})">
                            @endif

                        </div>

                </div>
        </div>
    </div>

    <div class="bk-blog-grid-area ptb--130 ptb-md--80 ptb-sm--60 bg_color--5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 col-xl-6 col-sm-12 col-12">
                    <div class="brook-section-title">
                        <h2 class="heading heading-h2">Tag Posts</h2>
                    </div>
                </div>
                <div class="col-lg-7 col-xl-6 col-sm-12 col-12">
                    <div class="blog-btn text-md-end text-start view-more-btn heding-color font-700 mt_sm--30">
                        <a href="{{ route('blog.index') }}"><span>View all posts</span><span class="btn-arrow"></span></a>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach($posts as $post)
                <!-- Start Single Blog -->
                <div class="col-lg-4 col-md-4 col-sm-6 col-12 mt--70">
                    <div class="blog-grid blog-grid--modern blog-standard blog-yellow-color">
                        <div class="post-thumb">
                            <a href="blog-details.html">
                                <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->title }}">
                            </a>
                        </div>
                        <div class="post-content text-center">
                            <div class="post-inner">
                                <div class="post-meta mb--10">
                                    <div class="post-date">{{ $post->created_at->format('M d, Y') }}</div>
                                    <div class="">
                                    @foreach($post->tags() as $tag)
                                        <a href="{{ route('tags.show', $tag) }}">{{  ' | ' . $tag->name }} </a>
                                        @endforeach
                                    </div>
                                </div>
                                <h5 class="heading heading-h5 line-height-1-39"><a href="{{ route('blog.show', $post) }}">{{ $post->title }}</a></h5>
                                <a href="{{ route('blog.show', $post) }}" class="post-read-more"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Blog -->
                    @endforeach

            </div>
                <div>
                    {{ $posts->links('vendor.pagination.tags-pagination') }}
                </div>

        </div>
    </div>

    <x-layouts.block />

</x-app-layout>
