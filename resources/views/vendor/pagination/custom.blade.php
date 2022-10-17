
@if ($paginator->hasPages())
    <ul class="list-unstyled post-pagination d-flex justify-content-center">
        @if ($paginator->onFirstPage())
            <li><a><i class="fa fa-angle-left"></i></a></li>
        @else
            <li><a href="{{ $paginator->previousPageUrl() }}" rel="prev"><i class="fa fa-angle-left"></i></a></li>
        @endif
      
        @foreach ($elements as $element)
           
            @if (is_string($element))
                <li class="disabled"><span>{{ $element }}</span></li>
            @endif       
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <li class="active my-active"><a>{{ $page }}</a></li>
                    @else
                        <li><a href="{{ $url }}">{{ $page }}</a></li>
                    @endif
                @endforeach
            @endif
        @endforeach
        
        @if ($paginator->hasMorePages())
            <li><a style="background-color: #a01f24" href="{{ $paginator->nextPageUrl() }}" rel="next"><i class="fa fa-angle-right"></i></a></li>
        @else
            <li><a style="background-color: #a01f24"><i class="fa fa-angle-right"></i></a></li>
        @endif
    </ul>
@endif 
