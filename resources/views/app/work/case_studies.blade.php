@extends('layouts.index')

@section('content')
    {{-- TITLE BANNER STARTS HERE --}}
    <section class="con-ti-ba-section">
        <div class="container text-center py-4">
            <h2 class="fs-1 fw-bold custom-text">Case Studies</h2>
            <p class="custom-text-2 fs-5">
                Team up with Whippdigital - the next amazing case study could be yours!
            </p>
            <div class="text-center py-4">
                <a class="lets-talk-btn px-4 py-3 fs-5 rounded-5" href="#">GET MY FREE PROPOSAL</a>
            </div>
        </div>
    </section>
    {{-- breadcrump  --}}
    <div class="wp-brdcb">
        <div class="wrap d-none">
            <div>
                <p id="breadcrumbs"><span><span><a class="fw-medium custom-text-2" href="/">Home</a></span> » <span
                            class="breadcrumb_last" aria-current="page">Contact</span></span></p>
            </div>
        </div>
    </div>


    {{-- TITLE BANNER ENDS HERE --}}
    <section>
        <div class="container py-5">
            <div class="text-center">
                <p class="pb-3">We bring innovative thinking, adaptive methodology, strong ethics and years of expertise
                    to
                    the SEO and web design industry. Our team has won awards for our web design expertise and accolades for
                    our effective SEO strategies. Our clients know that when they give us a call, we'll pick up the phone
                    and provide them with the time and information they want. Our comprehensive approach to online marketing
                    and web design results in a strong and lucrative online presence for each of our clients. Click any
                    project below to see the results!</p>

            </div>
            <div class="px-3 text-center px-lg-2 pb-4">
                <img class="imporve-tech-seo-img lozad lozad" data-src="{{('assets/imgs/awardimage2022-1-1.jpeg')}}"
                    alt="">
            </div>
            <p class="text-center">View all of our <a href="#">
                    awards & recognition
                </a>
            </p>
        </div>
    </section>

    {{-- GRID GALLARY SECTION STARTS HERE --}}
    <section>
        <div class="container">
            {{-- options --}}
            <div class="row col-lg-11 mx-auto ca-port-option py-4 gap-column-3    gap-lg-0  row-gap-3 ">
                <div class="col-12 col-md-6 col-lg-3">
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
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            All Serivces
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            All Statuses
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            All Audiences
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            {{-- imgs --}}
            <div class="row col-lg-11 mx-auto gap-4 gap-md-0 pb-5">
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="case-study-thumbnail">
                        <a href="#" rel="bookmark" title="Geoforce">
                            <img class="portfolio-img lozad" data-src="{{ asset('assets/imgs/Image-3D-Thumbnail-01-2-1-1.png') }}"
                                alt="Image-3D-Thumbnail-01-2-1-1">

                            <div class="overlay">
                                <header>
                                    <h3 class="post-title">Geoforce</h3>
                                </header>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="case-study-thumbnail">
                        <a href="#" rel="bookmark" title="Geoforce">
                            <img class="portfolio-img lozad" data-src="{{ asset('assets/imgs/Image-3D-Thumbnail-01-2-1-1.png') }}"
                                alt="Image-3D-Thumbnail-01-2-1-1">

                            <div class="overlay">
                                <header>
                                    <h3 class="post-title">Geoforce</h3>
                                </header>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="case-study-thumbnail">
                        <a href="#" rel="bookmark" title="Geoforce">
                            <img class="portfolio-img lozad" data-src="{{ asset('assets/imgs/Image-3D-Thumbnail-01-2-1-1.png') }}"
                                alt="Image-3D-Thumbnail-01-2-1-1">

                            <div class="overlay">
                                <header>
                                    <h3 class="post-title">Geoforce</h3>
                                </header>
                            </div>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </section>
    {{-- GRID GALLARY SECTION ENDS HERE --}}
@endsection
