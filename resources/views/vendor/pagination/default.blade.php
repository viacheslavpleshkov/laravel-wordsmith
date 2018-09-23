@if ($paginator->hasPages())
    <div class="row pagination-wrap">
        <div class="col-full">
            <nav class="pgn" data-aos="fade-up">
                <ul>
                    {{-- Previous Page Link --}}
                    @if ($paginator->onFirstPage())
                        <li class="pgn__prev">@lang('pagination.previous')</li>
                    @else
                        <li><a class="pgn__prev" href="{{ $paginator->previousPageUrl() }}">@lang('pagination.previous')</a></li>
                    @endif

                    {{-- Pagination Elements --}}
                    @foreach ($elements as $element)
                        {{-- "Three Dots" Separator --}}
                        @if (is_string($element))
                            <li class="disabled" aria-disabled="true"><span>{{ $element }}</span></li>
                        @endif

                        {{-- Array Of Links --}}
                        @if (is_array($element))
                            @foreach ($element as $page => $url)
                                @if ($page == $paginator->currentPage())
                                    <li><span class="pgn__num current">{{ $page }}</span></li>
                                @else
                                    <li><a href="{{ $url }}"><span class="pgn__num">{{ $page }}</span></a></li>
                                @endif
                            @endforeach
                        @endif
                    @endforeach

                    {{-- Next Page Link --}}
                    @if ($paginator->hasMorePages())
                        <li><a class="pgn__next" href="{{ $paginator->nextPageUrl() }}">@lang('pagination.next')</a></li>
                    @else
                        <li class="pgn__next">@lang('pagination.next')</li>
                    @endif
                </ul>
            </nav>
        </div>
    </div>
@endif
