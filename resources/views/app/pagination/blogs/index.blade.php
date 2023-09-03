@foreach($blogs as $blog)

{{-- <div class="col-12 col-md-6 col-xl-4">
    <article id="post-5055"
        class="post-5055 post type-post status-publish format-standard has-post-thumbnail hentry category-blog tag-carpet-cleaners tag-carpet-cleaners-dartford tag-carpet -cleaners-eltham tag-carpet-cleaning tag-carpet-cleaning-dartford tag-carpet-cleaning-eltham">
        <header class="entry-header">
            <div class="blog-image blog-thumb abc-41">
                <a href="{{route('blog01', $blog->slug)}}"><img width="360" height="268"
                        class="attachment-blog size-blog wp-post-image lazy rounded-4 lozad"
                        alt="{{$blog->image_thumb_alt}}" title="{{$blog->image_thumb_title}}"
                         style="object-fit: cover; width: 100%"
                        data-src="{{Storage::disk('public')->url(explode('.', $blog->image)[0].'_thumb.'.explode('.', $blog->image)[1])}}" /></a>
            </div>
        </header>
        <div class="py-4">
            <h5 class="" style="color: #cd7f32">
                <a class="text-ellipsis-2 font-median" href="{{route('blog01', $blog->slug)}}" rel="bookmark"
                    style="color: #4873b7 !important">
                	{{$blog->title}}
                </a>
            </h5>

            <p class="abc-43">
                <span class="text-ellipsis-3 abc-44">{{$blog->summary}}</span>
            </p>
            <a href="{{route('blog01', $blog->slug)}}" style="background-color: #2baf38" class="px-4 py-2 tex-white">Read
                More</a>
        </div>
    </article>
</div> --}}

<article class="col-lg-3 col-md-5 col-12 border border-color-primary  shadow-lg  rounded-3 p-3">
    <header class="position-relative flex flex-column gap-2">
        {{-- posted date --}}
        <span style="background: #525252ae;font-size: 14px" class="px-2 py-1 fw-bold rounded-2 text-white position-absolute top-0 end-0 mt-2 me-3 d-flex">      {{$blog->created_at->diffForHumans()}}</span>
        {{-- img --}}

        <a href="{{route('blog01', $blog->slug)}}"><img width="360" height="268"
            class="attachment-blog size-blog wp-post-image lazy  lozad"
            alt="{{$blog->image_thumb_alt}}" title="{{$blog->image_thumb_title}}"
             style="object-fit: cover; width: 100%"
            data-src="{{Storage::disk('public')->url(explode('.', $blog->image)[0].'_thumb.'.explode('.', $blog->image)[1])}}" /></a>
        {{-- title --}}
        <h2 class="blg-cont-title fs-4 fw-bold mt-3">
            <a href="{{route('blog01', $blog->slug)}}">
                {{$blog->title}}
            </a>
        </h2>
    </header>
 
  
    {{-- description --}}
    <div class="custom-text text-ellipsis-4">

        <p><span class="text-ellipsis-3 abc-44">{{$blog->summary}}</span></p>
    </div>
    {{-- tags --}}
    <footer>

        <span class="blg-pos-de-info entry-tags  con-ti-ba-section-ac-link">Filled Under: <a href="/tag/ai/"
                rel="tag">AI</a>,
            <a href="/tag/ai-content/" rel="tag">ai content</a>, <a href="/tag/ai-search/"
                rel="tag">ai search</a>, <a href="/tag/sge/" rel="tag">sge</a>, <a
                href="/tag/generative-ai/" rel="tag">generative ai</a></span>
    </footer>

    <div class="d-flex  mt-4">
        <a class="lettalkbtn_hasarrow px-2 cta-btn-btn col-6  col-md-8  col-xl-6  d-flex justify-content-center align-items-center gap-2 py-2  rounded-5 text-uppercase " href="{{route('blog01', $blog->slug)}}">Read More 
            <svg id="arrow" fill="#ffffff" height="15" width="15" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="-51.21 -51.21 614.51 614.51" xml:space="preserve" stroke="#ffffff" stroke-width="23.044230000000002"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <g> <g> <path d="M263.641,248.4L18.308,3.067c-4.16-4.053-10.987-3.947-15.04,0.32c-3.947,4.16-3.947,10.667,0,14.827l237.76,237.76 L3.268,493.733c-4.267,4.053-4.373,10.88-0.213,15.04c4.16,4.16,10.88,4.373,15.04,0.213c0.107-0.107,0.213-0.213,0.213-0.213 L263.641,263.44C267.801,259.28,267.801,252.56,263.641,248.4z"></path> <path d="M508.974,248.4L263.641,3.067c-4.267-4.053-10.987-3.947-15.04,0.213c-3.947,4.16-3.947,10.667,0,14.827l237.76,237.76 l-237.76,237.867c-4.267,4.053-4.373,10.88-0.213,15.04c4.16,4.16,10.88,4.373,15.04,0.213c0.107-0.107,0.213-0.213,0.213-0.213 L508.974,263.44C513.135,259.28,513.135,252.56,508.974,248.4z"></path> </g> </g> </g> </g>
            </svg>
        </a>
    </div>
</article>



@endforeach
<div aria-label="Page navigation example  " class="d-flex pb-5 flex-column table-responsive mb-2">
    {{--  --}}

    {!! $blogs->links('app.pagination.blogs.paginator.index') !!}
</div>