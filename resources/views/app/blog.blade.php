@extends('layouts.index')
@section('title') {{$blog->title}} @endsection

@section('meta')
    <meta name="title" content="{{$blog->title}}">
    <meta name="description" content="{{$blog->meta_description}}">
    <meta name="keywords" content="{{$blog->meta_keywords}}, Whipp Digital">
    <link rel="canonical" href="{{url()->current()}}">
    <meta property="og:site_name" content="Whipp Digital">
    <meta property="og:title" content="{{$blog->title}}">
    <meta property="og:description" content="{{$blog->meta_description}}">
    <meta property="og:url" content="{{url()->current()}}">
    <meta property="og:type" content="website">
    <meta property="og:image" content="{{Storage::disk('public')->url($blog->image)}}">
    <meta property="fb:admins" content="admin">
    <meta name="twitter:title" content="{{$blog->title}}">
    <meta name="twitter:description" content="{{$blog->meta_description}}">
    <meta name="twitter:domain" content="{{url()->current()}}">
    <meta name="twitter:image" content="{{Storage::disk('public')->url($blog->image)}}">
    <meta name="twitter:url" content="{{url()->current()}}">
    <meta name="twitter:card" content="summary">

    <meta itemprop="name" content="{{$blog->title}}">
    <meta itemprop="url" content="{{Storage::disk('public')->url($blog->image)}}">
    <meta itemprop="thumbnailUrl" content="{{Storage::disk('public')->url($blog->image)}}">
    <meta itemprop="image" content="{{Storage::disk('public')->url($blog->image)}}">
    <link rel="image_src" href="{{Storage::disk('public')->url($blog->image)}}">

   
    <meta name="abstract" content="Whipp Digital">
    <meta name="author" content="admin">
    <meta name="classification" content="Blog">
    <meta name="copyright" content="Whipp Digital - All rights Reserved.">
    <meta name="distribution" content="Global">
    <meta name="language" content="en-GB">
    <meta name="publisher" content="Whipp Digital">
    <meta name="rating" content="General">
    <meta name="resource-type" content="Document">
    <meta name="revisit-after" content="3">
    <meta name="subject" content="Blog">


    {{-- LCP ELEMENT --}}

    <link rel="preload" href="{{ Storage::disk('public')->url($blog->image) }}" as="image">
@endsection

@section('css')
<style>
    h2,h3,h4,h5,h6{
    margin-top: 28px !important;
    margin-bottom:20px !important; 
}
.blg-sin-cont-p div p{
    margin-top:25px; 
}
</style>
@if($imageHeight > 0)
<style type="text/css">

    @media(max-width: 767px) {
        .size-mobile {
            height: {{($imageHeight / 3)}}px !important;
        }
    }


    @media(min-width: 767px) {
        .size-desk {
            height: {{$imageHeight}}px !important;
        }
    }
/*
    @media(min-width: 767px) and (max-width: 1400px) {
        
    }*/
</style>
@endif
@endsection

{{-- @section('content')
    <!-- blog  section -->
    <section>
        <div class="container flex flex-column flex-lg-row p-md-5 gap-3 justify-content-center">
            <!-- Blog post -->
            <div class="col-12 col-lg-7 col-xl-9 d-flex flex-column my-5 border-3 py-2 gap-3">
                <h1 class="fs-2 fw-bolder text-blue">
                    {{ $blog->title }}
                </h1>
                <div class="blog-image blog-thumb abc-40 size-desk size-mobile">
                    <img width="100%" class="rounded-5 lozad size-desk size-mobile"  alt="{{$blog->image_alt}}"
                        title="{{$blog->image_title}}" style="padding: 0px; float: none;"
                        data-src="{{ Storage::disk('public')->url($blog->image) }}" />
                </div>
                <div class="entry-content abc-41">
                    {!! htmlspecialchars_decode(count(explode('/********************************/', $blog->content)) > 1 ? explode('/********************************/', $blog->content)[1] : $blog->content) !!}
                </div>
            </div>
            <!-- Featured Posts  -->
            <div class="col py-md-5 px-md-3">
                <div class="icon-list d-flex flex-column gap-2">
                    <h3 class="fs-4 text-blue">Featured Posts</h3>
                    <div class="py-1">
                        <ul class="featured-post-lists flex flex-column gap-4 p-0">
                            @foreach($blogs as $bl)
                            <li>
                                <div class="lptw-post-small-thumbnail abc-109 text-ellipsis-3">
                                    <a href="{{ route('blog01', $bl->slug) }}" class="lptw-thumbnail-link"><img
                                            width="100" height="100"
                                            class="attachment-100x100 size-100x100 wp-post-image  lozad"
                                             alt="{{$bl->image_thumb_alt}}" title="{{$bl->image_thumb_title}}"
                                            data-src="{{ Storage::disk('public')->url(explode('.', $bl->image)[0].'_thumb.'.explode('.', $bl->image)[1]) }}" /></a>
                                    <div class="lptw-post-header abc-110">
                                        <span class="text-ellipsis-3">
                                            <a href="{{route('blog01', $bl->slug)}}"
                                                class="lptw-header-link w-100">{{$bl->summary}}</a>
                                        </span>
                                        {{$bl->created_at->diffForHumans()}}
                                    </div>
                                </div>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection --}}


@section('content')
    {{-- BLOG IMG AND TITLE SECTION STARTS HERE --}}
    <section class="overflow-hidden">
        <div class="row overflow-hidden">
            <div class="col-xl-7 col-md-8 mx-auto p-3 p-md-5">
                <div>
                    <img width="100%" class="rounded-3 lozad size-desk size-mobile"  alt="{{$blog->image_alt}}"
                    title="{{$blog->image_title}}" style="padding: 0px; float: none;"
                    data-src="{{ Storage::disk('public')->url($blog->image) }}" />
                </div>
                <div>
                    <h1 class="fs-1 custom-text-2 text-center fw-bold pt-3">
                        {{ $blog->title }}
                    </h1>
                </div>
            </div>
        </div>
    </section>
    {{-- BLOG IMG AND TITLE SECTION ENDS HERE --}}

   
    {{-- BLOG CONTENT SECTION STARTS HERE --}}
    <section class="overflow-hidden">
        <div class="row p-3">
            <div class="col-xl-7 col-md-8 mx-auto p-3 p-md-5 blg-sin-cont-p">
      
                <div class="entry-content abc-41">
                    {!! htmlspecialchars_decode(count(explode('/********************************/', $blog->content)) > 1 ? explode('/********************************/', $blog->content)[1] : $blog->content) !!}
                </div>

                {{-- join whipp digital today  --}}
                <div class="py-3 border-top mt-4">
                    <h2 class="fs-2 fw-bold">
                        Join Whipp Digital Growth Insider Today
                    </h2>
                    <p>
                        That’s all for our detailed look at Google’s SGE. We expect it to be just another step in a long
                        line of Google Search Engine updates. And we’ll keep you updated on this space’s latest developments
                        and trends.
                    </p>
                    <p>
                        Whippdigital is a leading digital marketing company with a team of experts, thought leaders and highly
                        experienced strategists. We’re here to help you stay ahead of the competition and develop effective
                        marketing strategies for your business
                    </p>
                    <p>
                        Subscribe to our Growth Insider list and get your hands on the latest Google Search Engine updates.
                        It’s free, easy to join and you’ll be among the first to know whenever there are vital Google Search
                        updates, fresh digital marketing best practices and more!
                    </p>
                    <p>
                        <span class="entry-categories">Filed Under: <a href="#" rel="category tag">Search Engine
                                Optimization</a>, <a href="#" rel="category tag">Whippdigital News</a>, <a href="/"
                                rel="category tag">Content
                                Creation</a>, <a href="/" rel="category tag">Website Content</a>, <a href="#"
                                rel="category tag">Online
                                Marketing</a>, <a href="#" rel="category tag">Mobile Marketing</a>, <a href="#"
                                rel="category tag">Internet
                                Marketing</a></span>
                    </p>
                    {{-- leave reply --}}
                    <div>
                        <h3 class="fs-3 fw-bold">
                            Leave a Reply
                        </h3>
                        <p>
                            Your email address will not be published. Required fields are marked *
                        </p>
                        <form action="/" class="d-flex flex-column gap-3 blg-cont-form">

                            <label for="comment">
                                Comment<span class="required-ico"> * </span>
                            </label>
                            <textarea name="" id="" class="blg-cont-for-com-textarea" cols="30" rows="10"></textarea>
                            <label for="comment">
                                Name<span class="required-ico"> * </span>
                            </label>
                            <input type="text">
                            <label for="comment">
                                Email<span class="required-ico"> * </span>
                            </label>
                            <input type="">
                            <div
                                class="px-5 px-md-0 text-center py-4 d-flex flex-column flex-md-row gap-3  justify-content-center overflow-hidden">
                                <button type="submit" class="lets-talk-btn px-2 px-md-4 py-1 py-md-2 fs-5 rounded-5"
                                    href="#">POST COMMENT</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- BLOG CONTENT SECTION ENDS HERE --}}


    {{-- ABOUT AUTHOR SECTION STARTS HERE --}}
    {{-- <section class="bg-green-2">
        <div class="container py-5 px-2">
            <div class="d-flex flex-column align-items-center
             flex-md-row col-lg-11 mx-auto gap-4 text-white">
                <div class=" col-4 blg-abo-auth-pic text-center text-md-start">
                    <img class="lozad" data-src="{{ asset('assets/imgs/cropped-Arrabon-Toribio.png') }}" alt="">
                </div>
                <div class="text-center text-md-start d-flex flex-column justify-content-center">
                    <h3 class="fs-1 fw-bold text-shadow-black">
                        About Arrabon Toribio
                    </h3>
                    <p>
                        Arrabon is a demand generation content writer at Whippdigital. He loves to bounce around the digital
                        space, looking for new marketing topics to explore. Beyond writing, Arrabon is a self-proclaimed
                        potato enthusiast with a soft spot for their house pet, Sparklets.
                    </p>
                    <button class="new-btn-s px-3 col-12 col-md-6 col-lg-4 col-xl-3">MORE POSTS (9)</button>
                </div>
            </div>
        </div>
    </section> --}}
    {{-- ABOUT AUTHOR SECTION ENDS HERE --}}


    {{-- RELATED POST SECTION STARTS HERE --}}
    <section class="custom-bg-1">
        <div class="container-fulid  ">
            <div class="pt-5 pb-3 text-center">
                <p class="fs-3 fw-bold">
                    More
                    <span class="custom-text-2">
                        Related
                    </span>
                    Posts
                </p>
            </div>
            <div class="row justify-content-center   mx-auto gap-4 pb-5">
          

                @foreach($blogs as $index => $bl)
      
                @if ($index < 3)
                <article class="col-lg-3 col-md-5 col-12 border border-color-primary  shadow-lg  rounded-4 p-3">
                    <header class="position-relative flex flex-column gap-2">
                        {{-- posted date --}}
                        <span style="background: #525252ae;font-size: 14px" class="px-2 py-1 fw-bold rounded-2 text-white position-absolute top-0 end-0 mt-2 me-3 d-flex">  {{$bl->created_at->diffForHumans()}}</span>
                        {{-- img --}}
                        <a href="{{route('blog01', $blog->slug)}}"><img width="360" height="268"
                            class="attachment-blog size-blog wp-post-image lazy  lozad"
                            alt="{{$bl->image_thumb_alt}}" title="{{$bl->image_thumb_title}}"
                             style="object-fit: cover; width: 100%"
                            data-src="{{Storage::disk('public')->url(explode('.', $bl->image)[0].'_thumb.'.explode('.', $bl->image)[1])}}" /></a>
                          
                        {{-- title --}}
                        <h2 class="blg-cont-title fs-4 fw-bold">
                            <a href="{{route('blog01', $blog->slug)}}">
                                {{$bl->title}}
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

                    @endif
                @endforeach

        
               


            </div>
        </div>
    </section>
    {{-- RELATED POST SECTION ENDS HERE --}}
@endsection
