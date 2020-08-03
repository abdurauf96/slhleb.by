
<ul class="list-inline ">
    <!-- Pagination Elements -->
    @foreach ($elements as $element)
        <!-- "Three Dots" Separator -->
        @if (is_string($element))
            <li  class="disabled list-inline-item"><span class="page__link" >{{ $element }}</span></li>
        @endif

        <!-- Array Of Links -->
        @if (is_array($element))
            @foreach ($element as $page => $url)
                @if ($page == $paginator->currentPage())
                    <li class="list-inline-item active "><span class="disabled" >{{ $page }}</span></li>
                @else
                    <li class="list-inline-item" ><a href="{{ $url }}">{{ $page }}</a></li>
                @endif
            @endforeach
        @endif
    @endforeach
    
</ul>