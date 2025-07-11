
@if ($paginator->hasPages())

<ul class="pagination pagination-inside-transparent pagination-pill d-flex justify-content-center">

        @if ($paginator->onFirstPage())
            <li class="disabled page-item"><a class="page-link">← Previous</a></li>
        @else
            <li  class="page-item"><a  class="page-link" href="{{ $paginator->previousPageUrl() }}" rel="prev">← Previous</a></li>
        @endif
        @foreach ($elements as $element)
            @if (is_string($element))
                <li class="disabled page-item"><span>{{ $element }}</span></li>
            @endif
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <li class="active my-active page-item"><a class="page-link">{{ $page }}</a></li>
                    @else
                        <li class="page-item"><a class="page-link" href="{{ $url }}">{{ $page }}</a></li>
                    @endif
                @endforeach
            @endif
        @endforeach
        @if ($paginator->hasMorePages())
            <li class="page-item"><a  class="page-link" href="{{ $paginator->nextPageUrl() }}" rel="next">Next →</a></li>
        @else
            <li class="disabled page-item"><a  class="page-link">Next →</a></li>
        @endif
    </ul>
@endif 