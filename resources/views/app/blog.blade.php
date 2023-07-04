@extends('layouts.index')

@section("pageheading")
    <!-- BLOG TITLE BANNER SECTION STARTS HERE -->
    <section class="desk-con-ti-ba-section pb-4 d-none d-lg-block">
        <div class="container text-center py-4">
            <h2 class="fs-1 fw-bold custom-text text-ellipsis-4">Our Blog</h2>
            <p class="custom-text-2 fs-5 ">
                News From Thrive And Around The World Of Web Design
                And Online Marketing.
            </p>
        </div>
        <div class="text-center py-4">

            <a class="lets-talk-btn col-5 col-md-4 col-lg-2 d-inline-block py-2 fs-5 rounded-5" href="#">Let's Talk</a>
        </div>
    </section>
    <!-- BLOG TITLE BANNER SECTION ENDS HERE -->

@endsection

@section('content')
    <!-- BLOG TITLE BANNER SECTION STARTS HERE -->
    <section class="con-ti-ba-section pb-4 d-lg-none">
        <div class="container text-center py-4">
            <h2 class="fs-1 fw-bold custom-text text-ellipsis-4">Our Blog</h2>
            <p class="custom-text-2 fs-5 ">
                News From Thrive And Around The World Of Web Design
                And Online Marketing.
            </p>
        </div>
        <div class="text-center py-4">

            <a class="lets-talk-btn col-5 col-md-4 col-lg-2 d-inline-block py-2 fs-5 rounded-5" href="#">Let's Talk</a>
        </div>
    </section>
    <!-- BLOG TITLE BANNER SECTION ENDS HERE -->

    {{-- JOIN OVER CTA SECTION STARTS HERE --}}
    @include('app.static_components.joinover_banner')
    {{-- JOIN OVER CTA SECTION ENDS HERE --}}

    {{--  BLOG SEARCH SECTION STARTS HERE --}}
    <section class="border border-1 border-end">
        <div class="container border-b col-lg-11">
            <div class="row justify-content-between gap-4  py-4 align-items-center">
                <div class="col-lg-3 col-md-5 col-12">
                    <div class="w-100 d-flex gap-1 sea-blog-con position-relative">
                        <input class="bl-sea-bar-input w-100" type="text" placeholder="Search...">
                        <input class="bl-sea-bar-input-btn" type="text">
                    </div>
                </div>
                <div class="col-lg-3 col-md-5 col-12 ca-port-option">
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            All Industries
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Retail</a></li>
                            <li><a class="dropdown-item" href="#">Home</a></li>
                            <li><a class="dropdown-item" href="#">Technology</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{--  BLOG SEARCH SECTION ENDS HERE --}}


    {{-- GRID BLOGS SECTION STARTS HERE  --}}
    <section>
        <div class="container-fluid col-12 py-5">
            <div class="row justify-content-center  col-11 mx-auto gap-3">
                <article class="col-lg-3 col-md-5 col-12 wp-si-bl-con border-hover-blog p-3">
                    <header class="flex flex-column gap-2">
                        {{-- img --}}
                        <a href="{{ route('single_blog') }}">
                            <img src="{{ asset('assets/imgs/Google-Incorporates-Generative-AI-Into-Its-Search-Engine_1280x720-761x428.png') }}"
                                alt="blog-1">
                        </a>
                        {{-- title --}}
                        <h2 class="blg-cont-title fs-4 fw-bold">
                            <a href="{{ route('single_blog') }}">
                                Google Incorporates Generative AI Into Its Search Engine
                            </a>
                        </h2>
                    </header>
                    {{-- poster details --}}
                    <p class="blg-pos-de">
                        {{-- date --}}
                        <span class="blg-pos-de-info">May 26, 2023</span>
                        {{-- poster --}}
                        <span class="con-ti-ba-section-ac-link">
                            <a href="#">
                                Arrabon Toribio
                            </a>
                        </span>
                    </p>
                    {{-- description --}}
                    <div class="custom-text text-ellipsis-4">

                        <p>It has been 25 years since Google launched its search engine, revolutionizing how people access
                            information on the web. Throughout that time, Google has continually developed new ways to
                            improve
                            its .</p>
                    </div>
                    {{-- tags --}}
                    <footer>

                        <span class="blg-pos-de-info entry-tags  con-ti-ba-section-ac-link">Filled Under: <a href="/tag/ai/"
                                rel="tag">AI</a>,
                            <a href="/tag/ai-content/" rel="tag">ai content</a>, <a href="/tag/ai-search/"
                                rel="tag">ai search</a>, <a href="/tag/sge/" rel="tag">sge</a>, <a
                                href="/tag/generative-ai/" rel="tag">generative ai</a></span>
                    </footer>
                </article>
                <article class="col-lg-3 col-md-5 col-12 wp-si-bl-con border-hover-blog p-3">
                    <header class="flex flex-column gap-2">
                        {{-- img --}}
                        <a href="{{ route('single_blog') }}">
                            <img src="{{ asset('assets/imgs/Google-Incorporates-Generative-AI-Into-Its-Search-Engine_1280x720-761x428.png') }}"
                                alt="blog-1">
                        </a>
                        {{-- title --}}
                        <h2 class="blg-cont-title fs-4 fw-bold">
                            <a href="{{ route('single_blog') }}">
                                Google Incorporates Generative AI Into Its Search Engine
                            </a>
                        </h2>
                    </header>
                    {{-- poster details --}}
                    <p class="blg-pos-de">
                        {{-- date --}}
                        <span class="blg-pos-de-info">May 26, 2023</span>
                        {{-- poster --}}
                        <span class="con-ti-ba-section-ac-link">
                            <a href="#">
                                Arrabon Toribio
                            </a>
                        </span>
                    </p>
                    {{-- description --}}
                    <div class="custom-text text-ellipsis-4">

                        <p>It has been 25 years since Google launched its search engine, revolutionizing how people access
                            information on the web. Throughout that time, Google has continually developed new ways to
                            improve
                            its .</p>
                    </div>
                    {{-- tags --}}
                    <footer>

                        <span class="blg-pos-de-info entry-tags  con-ti-ba-section-ac-link">Filled Under: <a href="/tag/ai/"
                                rel="tag">AI</a>,
                            <a href="/tag/ai-content/" rel="tag">ai content</a>, <a href="/tag/ai-search/"
                                rel="tag">ai search</a>, <a href="/tag/sge/" rel="tag">sge</a>, <a
                                href="/tag/generative-ai/" rel="tag">generative ai</a></span>
                    </footer>
                </article>
                <article class="col-lg-3 col-md-5 col-12 wp-si-bl-con border-hover-blog p-3">
                    <header class="flex flex-column gap-2">
                        {{-- img --}}
                        <a href="#">
                            <img src="{{ asset('assets/imgs/Google-Incorporates-Generative-AI-Into-Its-Search-Engine_1280x720-761x428.png') }}"
                                alt="blog-1">
                        </a>
                        {{-- title --}}
                        <h2 class="blg-cont-title fs-4 fw-bold">
                            <a href="#">
                                Google Incorporates Generative AI Into Its Search Engine
                            </a>
                        </h2>
                    </header>
                    {{-- poster details --}}
                    <p class="blg-pos-de">
                        {{-- date --}}
                        <span class="blg-pos-de-info">May 26, 2023</span>
                        {{-- poster --}}
                        <span class="con-ti-ba-section-ac-link">
                            <a href="#">
                                Arrabon Toribio
                            </a>
                        </span>
                    </p>
                    {{-- description --}}
                    <div class="custom-text text-ellipsis-4">

                        <p>It has been 25 years since Google launched its search engine, revolutionizing how people access
                            information on the web. Throughout that time, Google has continually developed new ways to
                            improve
                            its .</p>
                    </div>
                    {{-- tags --}}
                    <footer>

                        <span class="blg-pos-de-info entry-tags  con-ti-ba-section-ac-link">Filled Under: <a href="/tag/ai/"
                                rel="tag">AI</a>,
                            <a href="/tag/ai-content/" rel="tag">ai content</a>, <a href="/tag/ai-search/"
                                rel="tag">ai search</a>, <a href="/tag/sge/" rel="tag">sge</a>, <a
                                href="/tag/generative-ai/" rel="tag">generative ai</a></span>
                    </footer>
                </article>
                <article class="col-lg-3 col-md-5 col-12 wp-si-bl-con border-hover-blog p-3">
                    <header class="flex flex-column gap-2">
                        {{-- img --}}
                        <a href="#">
                            <img src="{{ asset('assets/imgs/Google-Incorporates-Generative-AI-Into-Its-Search-Engine_1280x720-761x428.png') }}"
                                alt="blog-1">
                        </a>
                        {{-- title --}}
                        <h2 class="blg-cont-title fs-4 fw-bold">
                            <a href="#">
                                Google Incorporates Generative AI Into Its Search Engine
                            </a>
                        </h2>
                    </header>
                    {{-- poster details --}}
                    <p class="blg-pos-de">
                        {{-- date --}}
                        <span class="blg-pos-de-info">May 26, 2023</span>
                        {{-- poster --}}
                        <span class="con-ti-ba-section-ac-link">
                            <a href="#">
                                Arrabon Toribio
                            </a>
                        </span>
                    </p>
                    {{-- description --}}
                    <div class="custom-text text-ellipsis-4">

                        <p>It has been 25 years since Google launched its search engine, revolutionizing how people access
                            information on the web. Throughout that time, Google has continually developed new ways to
                            improve
                            its .</p>
                    </div>
                    {{-- tags --}}
                    <footer>

                        <span class="blg-pos-de-info entry-tags  con-ti-ba-section-ac-link">Filled Under: <a
                                href="/tag/ai/" rel="tag">AI</a>,
                            <a href="/tag/ai-content/" rel="tag">ai content</a>, <a href="/tag/ai-search/"
                                rel="tag">ai search</a>, <a href="/tag/sge/" rel="tag">sge</a>, <a
                                href="/tag/generative-ai/" rel="tag">generative ai</a></span>
                    </footer>
                </article>
                <article class="col-lg-3 col-md-5 col-12 wp-si-bl-con border-hover-blog p-3">
                    <header class="flex flex-column gap-2">
                        {{-- img --}}
                        <a href="#">
                            <img src="{{ asset('assets/imgs/Google-Incorporates-Generative-AI-Into-Its-Search-Engine_1280x720-761x428.png') }}"
                                alt="blog-1">
                        </a>
                        {{-- title --}}
                        <h2 class="blg-cont-title fs-4 fw-bold">
                            <a href="#">
                                Google Incorporates Generative AI Into Its Search Engine
                            </a>
                        </h2>
                    </header>
                    {{-- poster details --}}
                    <p class="blg-pos-de">
                        {{-- date --}}
                        <span class="blg-pos-de-info">May 26, 2023</span>
                        {{-- poster --}}
                        <span class="con-ti-ba-section-ac-link">
                            <a href="#">
                                Arrabon Toribio
                            </a>
                        </span>
                    </p>
                    {{-- description --}}
                    <div class="custom-text text-ellipsis-4">

                        <p>It has been 25 years since Google launched its search engine, revolutionizing how people access
                            information on the web. Throughout that time, Google has continually developed new ways to
                            improve
                            its .</p>
                    </div>
                    {{-- tags --}}
                    <footer>

                        <span class="blg-pos-de-info entry-tags  con-ti-ba-section-ac-link">Filled Under: <a
                                href="/tag/ai/" rel="tag">AI</a>,
                            <a href="/tag/ai-content/" rel="tag">ai content</a>, <a href="/tag/ai-search/"
                                rel="tag">ai search</a>, <a href="/tag/sge/" rel="tag">sge</a>, <a
                                href="/tag/generative-ai/" rel="tag">generative ai</a></span>
                    </footer>
                </article>
                <article class="col-lg-3 col-md-5 col-12 wp-si-bl-con border-hover-blog p-3">
                    <header class="flex flex-column gap-2">
                        {{-- img --}}
                        <a href="#">
                            <img src="{{ asset('assets/imgs/Google-Incorporates-Generative-AI-Into-Its-Search-Engine_1280x720-761x428.png') }}"
                                alt="blog-1">
                        </a>
                        {{-- title --}}
                        <h2 class="blg-cont-title fs-4 fw-bold">
                            <a href="#">
                                Google Incorporates Generative AI Into Its Search Engine
                            </a>
                        </h2>
                    </header>
                    {{-- poster details --}}
                    <p class="blg-pos-de">
                        {{-- date --}}
                        <span class="blg-pos-de-info">May 26, 2023</span>
                        {{-- poster --}}
                        <span class="con-ti-ba-section-ac-link">
                            <a href="#">
                                Arrabon Toribio
                            </a>
                        </span>
                    </p>
                    {{-- description --}}
                    <div class="custom-text text-ellipsis-4">

                        <p>It has been 25 years since Google launched its search engine, revolutionizing how people access
                            information on the web. Throughout that time, Google has continually developed new ways to
                            improve
                            its .</p>
                    </div>
                    {{-- tags --}}
                    <footer>

                        <span class="blg-pos-de-info entry-tags  con-ti-ba-section-ac-link">Filled Under: <a
                                href="/tag/ai/" rel="tag">AI</a>,
                            <a href="/tag/ai-content/" rel="tag">ai content</a>, <a href="/tag/ai-search/"
                                rel="tag">ai search</a>, <a href="/tag/sge/" rel="tag">sge</a>, <a
                                href="/tag/generative-ai/" rel="tag">generative ai</a></span>
                    </footer>
                </article>
            </div>
        </div>
    </section>

    {{-- GRID BLOGS SECTION ENDS HERE  --}}
@endsection
