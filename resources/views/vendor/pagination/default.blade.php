@if ($paginator->hasPages())
    <div class="card-inner">
        <ul class="pagination justify-content-center justify-content-md-start">
            @if ($paginator->onFirstPage())
                <li class="page-item">
                    <a class="disabled page-link" aria-disabled="true" aria-label="@lang('pagination.previous')">Prev</a>
                </li>
            @else
                <li class="page-item">
                    <a class="page-link" href="{{ $paginator->previousPageUrl() }}" aria-label="@lang('pagination.previous')">Prev</a>
                </li>
            @endif
            @foreach ($elements as $element)
                {{-- "Three Dots" Separator --}}
                @if (is_string($element))
                    <li class="disabled page-item" aria-disabled="true"><a class="page-link">{{ $element }}</a>
                    </li>
                @endif

                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li class="active page-item" aria-current="page"><a
                                    class="page-link">{{ $page }}</a></li>
                        @else
                            <li class="page-item"><a class="page-link"
                                    href="{{ $url }}">{{ $page }}</a></li>
                        @endif
                    @endforeach
                @endif
            @endforeach

            @if ($paginator->hasMorePages())
                <li class="page-item"><a class="page-link" href="{{ $paginator->nextPageUrl() }}"
                        aria-label="@lang('pagination.next')">Next</a></li>
            @else
                <li class="disabled page-item" aria-disabled="true" aria-label="@lang('pagination.next')"><a
                        class="page-link">Next</a></li>
            @endif
        </ul><!-- .pagination -->
    </div><!-- .card-inner -->
@endif
