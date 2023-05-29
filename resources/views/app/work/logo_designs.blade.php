@extends('layouts.index')

@section('content')
    {{-- TITLE BANNER STARTS HERE --}}
    <section class="con-ti-ba-section">
        <div class="container text-center py-4">
            <h2 class="fs-1 fw-bold custom-text">Logo Designs</h2>
            <p class="custom-text-2 fs-5">
                Logos that reflect your brand's personality
            </p>
            <div class="text-center py-4">

                <a class="lets-talk-btn px-4 py-3 fs-5 rounded-5" href="#">GET MY FREE PROPOSAL</a>
            </div>
        </div>
    </section>
    {{-- TITLE BANNER ENDS HERE --}}


    {{-- GRID GALLARY SECTION STARTS HERE --}}
    <section>
        <div class="container py-5">
            {{-- imgs --}}
            <div class="row col-lg-11 mx-auto gap-4 gap-md-0 pb-5">
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="case-study-thumbnail logo-design-hover-eff">
                        <a href="#" rel="bookmark" title="dock box">
                            <img class="portfolio-img" src="{{ asset('assets/imgs/DB-bg.jpg') }}"
                                alt="Image-3D-Thumbnail-01-2-1-1">

                            <div class="overlay">
                                <header>
                                    <img src="{{ asset('assets/imgs/DB-white.jpg') }}" alt="">
                                </header>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="case-study-thumbnail logo-design-hover-eff">
                        <a href="#" rel="bookmark" title="Geoforce">
                            <img class="portfolio-img" src="{{ asset('assets/imgs/KC-bg.jpg') }}"
                                alt="Image-3D-Thumbnail-01-2-1-1">

                            <div class="overlay">
                                <header>
                                    <img class="portfolio-img" src="{{ asset('assets/imgs/KC-white.jpg') }}"
                                        alt="Image-3D-Thumbnail-01-2-1-1">

                                </header>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="case-study-thumbnail logo-design-hover-eff">
                        <a href="#" rel="bookmark" title="Geoforce">
                            <img class="portfolio-img" src="{{ asset('assets/imgs/Van_BG.jpg') }}"
                                alt="Image-3D-Thumbnail-01-2-1-1">

                            <div class="overlay">
                                <header>
                                    <img class="portfolio-img" src="{{ asset('assets/imgs/Van_White.jpg') }}"
                                        alt="Image-3D-Thumbnail-01-2-1-1">
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
