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
            <button  class="iwantgrow_btn  lets-talk-btn col-5 col-md-4 col-lg-2 d-inline-block py-2 fs-5 rounded-5" >Let's Talk</button>
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
            <div class="text-center py-4">
                <button  class="iwantgrow_btn  lets-talk-btn col-5 col-md-4 col-lg-2 d-inline-block py-2 fs-5 rounded-5" >Let's Talk</button>
            </div>
        </div>
        <div class="text-center py-4">

            <a class="lets-talk-btn col-5 col-md-4 col-lg-2 d-inline-block py-2 fs-5 rounded-5" href="#">Let's Talk</a>
        </div>
    </section>
    <!-- BLOG TITLE BANNER SECTION ENDS HERE -->

    {{-- JOIN OVER CTA SECTION STARTS HERE --}}
    {{-- @include('app.static_components.joinover_banner') --}}
    {{-- JOIN OVER CTA SECTION ENDS HERE --}}

    {{--  BLOG SEARCH SECTION STARTS HERE --}}
    <section class="border border-1 border-end">
        <div class="container border-b col-lg-11">
            <div class="row justify-content-between gap-4  py-4 align-items-center">
                <div class="col-lg-4 d-flex align-items-center col-md-5 col-12">
                    <div class="w-100  border-color-primary d-flex rounded-5 gap-1  position-relative border border-2 overflow-hidden px-3 py-1">
                        <div class="d-flex justify-content-center align-items-center">
                            <svg width="30" height="30" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M15.7955 15.8111L21 21M18 10.5C18 14.6421 14.6421 18 10.5 18C6.35786 18 3 14.6421 3 10.5C3 6.35786 6.35786 3 10.5 3C14.6421 3 18 6.35786 18 10.5Z" stroke="#30A2FF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                        </div>
                        <input class="outline-none border-0 w-100 fs-5 p-1" type="text" placeholder="Search...">
                    </div>
                </div>
                {{-- <div class="col-lg-3 col-md-5 col-12 ca-port-option">
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
                </div> --}}
            </div>
        </div>
    </section>
    {{--  BLOG SEARCH SECTION ENDS HERE --}}


    {{-- GRID BLOGS SECTION STARTS HERE  --}}
    <section>
        <div class="container-fluid col-12 py-5">
            <div class="row justify-content-center  col-12 mx-auto gap-3">
                <article class="col-lg-3 col-md-5 col-12 border border-color-primary  shadow-lg  rounded-4 p-3">
                    <header class="position-relative flex flex-column gap-2">
                        {{-- posted date --}}
                        <span style="background: #525252ae;font-size: 14px" class="px-2 py-1 fw-bold rounded-2 text-white position-absolute top-0 end-0 mt-2 me-3 d-flex"> May 26, 2023</span>
                        {{-- img --}}
                        <a  href="{{ route('single_blog') }}">
                            <img class="lozad" data-src="{{ asset('assets/imgs/Google-Incorporates-Generative-AI-Into-Its-Search-Engine_1280x720-761x428.png') }}"
                                alt="blog-1">
                        </a>
                        {{-- title --}}
                        <h2 class="blg-cont-title fs-4 fw-bold">
                            <a href="{{ route('single_blog') }}">
                                Google Incorporates Generative AI Into Its Search Engine
                            </a>
                        </h2>
                    </header>
                 
                  
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

                    <div class="d-flex  mt-4">
                        <button class="lettalkbtn_hasarrow px-2 cta-btn-btn col-6  col-md-8  col-xl-6  d-flex justify-content-center align-items-center gap-2 py-2  rounded-5 text-uppercase " href="#">Read More 
                            <svg id="arrow" fill="#ffffff" height="15" width="15" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="-51.21 -51.21 614.51 614.51" xml:space="preserve" stroke="#ffffff" stroke-width="23.044230000000002"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <g> <g> <path d="M263.641,248.4L18.308,3.067c-4.16-4.053-10.987-3.947-15.04,0.32c-3.947,4.16-3.947,10.667,0,14.827l237.76,237.76 L3.268,493.733c-4.267,4.053-4.373,10.88-0.213,15.04c4.16,4.16,10.88,4.373,15.04,0.213c0.107-0.107,0.213-0.213,0.213-0.213 L263.641,263.44C267.801,259.28,267.801,252.56,263.641,248.4z"></path> <path d="M508.974,248.4L263.641,3.067c-4.267-4.053-10.987-3.947-15.04,0.213c-3.947,4.16-3.947,10.667,0,14.827l237.76,237.76 l-237.76,237.867c-4.267,4.053-4.373,10.88-0.213,15.04c4.16,4.16,10.88,4.373,15.04,0.213c0.107-0.107,0.213-0.213,0.213-0.213 L508.974,263.44C513.135,259.28,513.135,252.56,508.974,248.4z"></path> </g> </g> </g> </g></svg>
                    </div>
                </article>
               
                <article class="col-lg-3 col-md-5 col-12 border border-color-primary  shadow-lg  rounded-4 p-3">
                    <header class="position-relative flex flex-column gap-2">
                        {{-- posted date --}}
                        <span style="background: #525252ae;font-size: 14px" class="px-2 py-1 fw-bold rounded-2 text-white position-absolute top-0 end-0 mt-2 me-3 d-flex"> May 26, 2023</span>
                        {{-- img --}}
                        <a  href="{{ route('single_blog') }}">
                            <img class="lozad" data-src="{{ asset('assets/imgs/Google-Incorporates-Generative-AI-Into-Its-Search-Engine_1280x720-761x428.png') }}"
                                alt="blog-1">
                        </a>
                        {{-- title --}}
                        <h2 class="blg-cont-title fs-4 fw-bold">
                            <a href="{{ route('single_blog') }}">
                                Google Incorporates Generative AI Into Its Search Engine
                            </a>
                        </h2>
                    </header>
                 
                  
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

                    <div class="d-flex  mt-4">
                        <button class="lettalkbtn_hasarrow px-2 cta-btn-btn col-6  col-md-8  col-xl-6  d-flex justify-content-center align-items-center gap-2 py-2  rounded-5 text-uppercase " href="#">Read More 
                            <svg id="arrow" fill="#ffffff" height="15" width="15" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="-51.21 -51.21 614.51 614.51" xml:space="preserve" stroke="#ffffff" stroke-width="23.044230000000002"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <g> <g> <path d="M263.641,248.4L18.308,3.067c-4.16-4.053-10.987-3.947-15.04,0.32c-3.947,4.16-3.947,10.667,0,14.827l237.76,237.76 L3.268,493.733c-4.267,4.053-4.373,10.88-0.213,15.04c4.16,4.16,10.88,4.373,15.04,0.213c0.107-0.107,0.213-0.213,0.213-0.213 L263.641,263.44C267.801,259.28,267.801,252.56,263.641,248.4z"></path> <path d="M508.974,248.4L263.641,3.067c-4.267-4.053-10.987-3.947-15.04,0.213c-3.947,4.16-3.947,10.667,0,14.827l237.76,237.76 l-237.76,237.867c-4.267,4.053-4.373,10.88-0.213,15.04c4.16,4.16,10.88,4.373,15.04,0.213c0.107-0.107,0.213-0.213,0.213-0.213 L508.974,263.44C513.135,259.28,513.135,252.56,508.974,248.4z"></path> </g> </g> </g> </g></svg>
                    </div>
                </article>
               
                <article class="col-lg-3 col-md-5 col-12 border border-color-primary  shadow-lg  rounded-4 p-3">
                    <header class="position-relative flex flex-column gap-2">
                        {{-- posted date --}}
                        <span style="background: #525252ae;font-size: 14px" class="px-2 py-1 fw-bold rounded-2 text-white position-absolute top-0 end-0 mt-2 me-3 d-flex"> May 26, 2023</span>
                        {{-- img --}}
                        <a  href="{{ route('single_blog') }}">
                            <img class="lozad" data-src="{{ asset('assets/imgs/Google-Incorporates-Generative-AI-Into-Its-Search-Engine_1280x720-761x428.png') }}"
                                alt="blog-1">
                        </a>
                        {{-- title --}}
                        <h2 class="blg-cont-title fs-4 fw-bold">
                            <a href="{{ route('single_blog') }}">
                                Google Incorporates Generative AI Into Its Search Engine
                            </a>
                        </h2>
                    </header>
                 
                  
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

                    <div class="d-flex  mt-4">
                        <button class="lettalkbtn_hasarrow px-2 cta-btn-btn col-6  col-md-8  col-xl-6  d-flex justify-content-center align-items-center gap-2 py-2  rounded-5 text-uppercase " href="#">Read More 
                            <svg id="arrow" fill="#ffffff" height="15" width="15" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="-51.21 -51.21 614.51 614.51" xml:space="preserve" stroke="#ffffff" stroke-width="23.044230000000002"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <g> <g> <path d="M263.641,248.4L18.308,3.067c-4.16-4.053-10.987-3.947-15.04,0.32c-3.947,4.16-3.947,10.667,0,14.827l237.76,237.76 L3.268,493.733c-4.267,4.053-4.373,10.88-0.213,15.04c4.16,4.16,10.88,4.373,15.04,0.213c0.107-0.107,0.213-0.213,0.213-0.213 L263.641,263.44C267.801,259.28,267.801,252.56,263.641,248.4z"></path> <path d="M508.974,248.4L263.641,3.067c-4.267-4.053-10.987-3.947-15.04,0.213c-3.947,4.16-3.947,10.667,0,14.827l237.76,237.76 l-237.76,237.867c-4.267,4.053-4.373,10.88-0.213,15.04c4.16,4.16,10.88,4.373,15.04,0.213c0.107-0.107,0.213-0.213,0.213-0.213 L508.974,263.44C513.135,259.28,513.135,252.56,508.974,248.4z"></path> </g> </g> </g> </g></svg>
                    </div>
                </article>
               
            </div>
        </div>
    </section>

    {{-- GRID BLOGS SECTION ENDS HERE  --}}
@endsection
