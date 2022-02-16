
@if ($paginator->hasPages())
    <div class="col-lg-8">
        <div class="brook-pagination-wrapper text-center pt--80">
            <ul class="brook-pagination">

                @if ($paginator->onFirstPage())
                    <li><a class="d-none"><i class="fa fa-angle-left"></i></a></li>
                @else
                    <li><a href="{{ $paginator->previousPageUrl() }}" rel="prev"><i class="fa fa-angle-left"></i></a></li>
                @endif

                @foreach ($elements as $element)

                    @if (is_string($element))
                        <li class="disabled"><a>{{ $element }}</a></li>
                    @endif

                    @if (is_array($element))
                        @foreach ($element as $page => $url)
                            @if ($page == $paginator->currentPage())
                                <li class="active"><a>{{ $page }}</a></li>
                            @else
                                <li><a href="{{ $url }}">{{ $page }}</a></li>
                            @endif
                        @endforeach
                    @endif
                @endforeach



                @if ($paginator->hasMorePages())
                        <li><a href="{{ $paginator->nextPageUrl() }}" rel="next"><i class="fa fa-angle-right"></i></a></li>
                @else
                        <li><a class="d-none"><i class="fa fa-angle-right"></i></a></li>
                @endif
            </ul>
        </div>
    </div>
@endif
