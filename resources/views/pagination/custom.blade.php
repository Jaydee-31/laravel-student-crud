@if ($paginator->hasPages())

<ul class="inline-flex -space-x-px bg-gray-50 dark:bg-gray-900">
   

    {{-- Previous Page Link --}}
    @if ($paginator->onFirstPage())
        <li class="disabled select-none">
            <a class="px-3 py-2 ml-0 leading-tight text-gray-500 bg-white border border-gray-300 rounded-l-lg dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400"><span>Previous</span>
            </a>
        </li>
    @else
        <li>
            <a class="px-3 py-2 ml-0 leading-tight text-gray-500 bg-white border border-gray-300 rounded-l-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white" href="{{ $paginator->previousPageUrl() }}" rel="prev">Previous</a>
        </li>
    @endif

     {{-- Always show link to first page --}}
     @if ($paginator->currentPage() != 1)
     <li>
         <a class="px-3 py-2 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white" href="{{ $paginator->url(1) }}">First</a>
     </li>
 @endif

{{-- Page Number Links --}}
@foreach ($paginator->getUrlRange(max(1, $paginator->currentPage() - 2), min($paginator->lastPage(), $paginator->currentPage() + 2)) as $page => $url)
    @if ($page == $paginator->currentPage())
        <li>
            <a class="px-3 py-2 text-blue-600 border border-gray-300 bg-blue-50 hover:bg-blue-100 hover:text-blue-700 dark:border-gray-700 dark:bg-gray-700 dark:text-white">{{ $page }}</a>
        </li>
    @else
        <li>
            <a class="px-3 py-2 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white" href="{{ $url }}">{{ $page }}</a>
        </li>
    @endif
@endforeach

{{-- Last Page Link --}}
@if ($paginator->currentPage() < $paginator->lastPage() - 2)
    <li>
        <a class="px-3 py-2 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white" href="{{ $paginator->url($paginator->lastPage()) }}">{{ $paginator->lastPage() }}</a>
    </li>
@endif
{{-- Next Page Link --}}
@if ($paginator->hasMorePages())
    <li>
        <a class="px-3 py-2 leading-tight text-gray-500 bg-white border border-gray-300 rounded-r-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white" href="{{ $paginator->nextPageUrl() }}" rel="next">Next</a>
    </li>
@else
    <li class="disabled select-none">
        <a class="px-3 py-2 leading-tight text-gray-500 bg-white border border-gray-300 rounded-r-lg dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400"><span>Next</span>
        </a>
    </li>
@endif


</ul>
@endif
