<div>
    <!-- Start Single Blog -->

    @foreach($posts as $post)
        <x-post.latest :post="$post"/>
    @endforeach

<!-- End Single Blog -->
    <div class="brook-btn mt-sm-5 text-center">
        <!-- This is from the paginator class-->
        @if($posts->hasMorePages())
            <button wire:click="loadMore" class="brook-btn bk-btn-dark btn-sd-size mt-10 btn-rounded space-between">
                Load More
                <div wire:loading class="ml-1">
                    <div class="spinner-border spinner-border-sm" role="status">
                        <span class="sr-only">Loading...</span>
                    </div>
                    <div class="spinner-grow spinner-grow-sm" role="status">
                        <span class="sr-only">Loading...</span>
                    </div>
                </div>
            </button>
        @else
            @if($search && empty($post))
                <h4 class="">Empty search result</h4>
            @endif
            <h4 class="">No more Posts...</h4>
        @endif
    </div>

</div>
