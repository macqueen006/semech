<x-app-layout>
    @section('title', "Blog: $post->title")
    @section('keywords')
        @foreach($post->tags() as $tag)
            {{ $tag->name }} ,
        @endforeach
    @endsection

    @section('description')
        {{ $post->title }}
    @endsection

    @section('metaImage')
        {{ asset('storage/'. $post->image) }}
    @endsection

    <x-layouts.hero>
        <x-slot name="image">
            {{ asset('img/bg/bg-image-136.jpg') }}
        </x-slot>
        <x-slot name="title">Our Blog</x-slot>
    </x-layouts.hero>

    <!-- Page Content -->
    @if($request)
    <main class="page-content">

        <!-- Start BLog Area -->
        <div class="blog-creative-area bg_color--5 ptb--120 ptb-md--80 ptb-sm--60">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 pr--100 pr_lg--15 pr_md--15 pr_sm--15">
                        <livewire:home.latest-post :search="$request" />
                    </div>
                    <x-layouts.blog-sidebar :tags="$tags" />
                </div>
            </div>
        </div>
        <!-- End BLog Area -->

        <x-layouts.block />

    </main>
    @else
        <main class="page-content">
            <!-- Start Blog Details -->
            <div class="brook-blog-details-area bg_color--1 ptb--120 ptb-md--80 ptb-sm--60">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-md-12 col-sm-12 col-12">
                            <div class="blog-details-wrapper">
                                <article class="blog-post standard-post">
                                    <!-- Start Header -->
                                    <div class="header mb--40 text-center">
                                        <h3 class="heading heading-h3 font-32">{{ $post->title }}</h3>
                                        <div class="post-meta mt--20">
                                            <div class="post-date">{{ $post->published_at->format('M d, Y') }}</div>
                                            @foreach($post->tags() as $tag)
                                                <div class="post-category"><a href="{{ route('tags.show', $tag) }}">{{ $tag->name }}</a></div>
                                            @endforeach
                                        </div>
                                    </div>
                                    <!-- Start Thumbnail -->
                                    <div class="thumbnail mb--60">
                                        <img class="w-100" src="{{ asset('storage/'. $post->image) }}" alt="Multipurpose">
                                    </div>
                                    <!-- Start Content -->
                                    <div class="content basic-dark2-line-1px pb--50 mb--35">
                                        <div class="inner">
                                            {{ $post->body }}
                                        </div>
                                    </div>

                                    <!-- Start Footer -->
                                    <div class="blog-footer mb--85 wow move-up">
                                        <div class="row">
                                            <div class="col-lg-6 col-sm-6 col-12">
                                                <div class="post-tag d-flex align-items-center">
                                                    <h6 class="heading heading-h6">TAGS:</h6>
                                                    <div class="blog-tag-list ">
                                                        @foreach($post->tags() as $tag)
                                                            <a href="{{ route('tags.show', $tag) }}">{{ $tag->name }}</a>
                                                        @endforeach
                                                    </div>
                                                </div>
                                            </div>
                                            <x-social.links :post="$post" url="{{ \Request::url() }}"/>
                                        </div>
                                    </div>
                                </article>
                                <!-- Start Post Nav Links -->
                                <div class="post-nav-lisnt mb--45 wow move-up">
                                    <div class="nav-item previous">
                                        <a href="blog-details.html#">
                                            <div class="link-text">
                                                <span class="fa fa-arrow-left"></span>
                                                <p class="">Prev</p>
                                            </div>
                                            <span>US Ranks Near Bottom on Development Commitment</span>
                                        </a>
                                    </div>
                                    <div class="nav-item next mt_sm--30">
                                        <a href="blog-details.html#">
                                            <div class="link-text">
                                                <p class="">Next</p>
                                                <span class="fa fa-arrow-right"></span>
                                            </div>
                                            <span>Career Tips For Emerging Photographers</span>
                                        </a>
                                    </div>
                                </div>
                                <!-- End Post Nav Links -->
                                @comments(['model' => $post])


                            </div>
                        </div>

                        <x-layouts.blog-sidebar :tags="$tags" />

                    </div>
                </div>
            </div>
            <!-- End Blog Details -->

            <x-layouts.block/>

        </main>
    @endif

</x-app-layout>
