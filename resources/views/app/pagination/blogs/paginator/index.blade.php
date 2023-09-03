<ul class="pagination mb-0 mx-auto gap-3 custom-pagination my-5">
    
    @if ($paginator->onFirstPage())
   
        

       
        <li class="disabled wd-pg-link">
            <a class="d-flex d-flex justify-content-center align-items-center w-100 h-100" href="{{route('blog')}}" tabindex="-1">
                <svg width="22" height="22" viewBox="0 0 1024 1024" class="icon" version="1.1" xmlns="http://www.w3.org/2000/svg" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path class="icon" d="M768 903.232l-50.432 56.768L256 512l461.568-448 50.432 56.768L364.928 512z" fill="#ffff"></path></g></svg>

                           </a>
        </li>

    @else
    

            <li class="wd-pg-link shadow">
                <a class=" d-flex d-flex justify-content-center align-items-center w-100 h-100 " style="background: inherit !important"href="{{ $paginator->previousPageUrl() }}" tabindex="-1">

                    <svg width="22" height="22" viewBox="0 0 1024 1024" class="icon" version="1.1" xmlns="http://www.w3.org/2000/svg" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path class="icon" d="M768 903.232l-50.432 56.768L256 512l461.568-448 50.432 56.768L364.928 512z" fill="#ffff"></path></g></svg>
                </a>
            </li>
           

    @endif

    @foreach ($elements as $element)
           
        @if (is_string($element))
            <li class="page-item disabled">
                <span>{{ $element }}</span>
            </li>
        @endif


       
        @if (is_array($element))
            @foreach ($element as $page => $url)
                @if ($page == $paginator->currentPage())
                    <li class="page-item">
                        <a href="{{ route('blog').'?page='.$page }}" class="page-link active">{{ $page }}</a>
                    </li>
                @elseif (($page == $paginator->currentPage() + 1 && $paginator->hasMorePages()) || $page == 1 || $page == $paginator->lastPage())
                    <li class="page-item"><a class="page-link" href="{{ $url }}">{{ $page }}</a></li>
                @endif
            @endforeach
        @endif
    @endforeach

    @if ($paginator->hasMorePages())
        <li class="wd-pg-link shadow">
            <a class=" d-flex d-flex justify-content-center align-items-center w-100 h-100 " style="background: inherit !important" href="{{ $paginator->nextPageUrl() }}">
                <svg width="22" height="22" viewBox="0 0 1024 1024"  version="1.1" xmlns="http://www.w3.org/2000/svg" fill="#000000">
                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier">
                        <path class="icon" d="M256 120.768L306.432 64 768 512l-461.568 448L256 903.232 659.072 512z" fill="#fff"></path></g></svg>

            </a>
        </li>
    @else
        <li class="disabled wd-pg-link">
            <a class="   d-flex d-flex justify-content-center align-items-center w-100 h-100" href="{{ route('blog').'?page='.$page }}">
                <svg width="22" height="22" viewBox="0 0 1024 1024"  version="1.1" xmlns="http://www.w3.org/2000/svg" fill="#000000">
                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier">
                        <path class="icon" d="M256 120.768L306.432 64 768 512l-461.568 448L256 903.232 659.072 512z" fill="#fff"></path></g></svg>            </a>
        </li>
    @endif
    
</ul>