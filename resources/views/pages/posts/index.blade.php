<x-app-layout>

    <x-layouts.hero>
        <x-slot name="image">
            {{ asset('img/bg/bg-image-136.jpg') }}
        </x-slot>
        <x-slot name="title">Our Blog</x-slot>
    </x-layouts.hero>

    <!-- Page Content -->
    <main class="page-content">

        <!-- Start BLog Area -->
        <div class="blog-creative-area bg_color--5 ptb--120 ptb-md--80 ptb-sm--60">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 pr--100 pr_lg--15 pr_md--15 pr_sm--15">
                      <livewire:home.latest-post :search="$request"/>
                    </div>
                    <x-layouts.blog-sidebar :tags="$tags" />
                </div>
            </div>
        </div>
        <!-- End BLog Area -->

        <x-layouts.block />

    </main>
</x-app-layout>
