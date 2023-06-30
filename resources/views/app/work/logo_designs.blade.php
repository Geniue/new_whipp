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
                    <div class="case-study-thumbnail d-flex logo-design-hover-eff">
                        <a  rel="bookmark" title="dock box" class="">
                            <img class="portfolio-img" src="{{ asset('assets/imgs/logos/bg/CarCrak-Auto-Locksmith22.png') }}"
                                alt="Image-3D-Thumbnail-01-2-1-1">

                            <div class="overlay">
                                <header>
                                    <img src="{{ asset('assets/imgs/logos/CarCrak-Auto-Locksmith22.png') }}" alt="">
                                </header>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="case-study-thumbnail d-flex logo-design-hover-eff">
                        <a  rel="bookmark" title="Geoforce" class="">
                            <img class="portfolio-img" src="{{ asset('assets/imgs/logos/bg/Ozi foundation Logo2.png') }}"
                                alt="Image-3D-Thumbnail-01-2-1-1">

                            <div class="overlay">
                                <header>
                                    <img class="portfolio-img" src="{{ asset('assets/imgs/logos/Ozi foundation Logo2.png') }}"
                                        alt="Image-3D-Thumbnail-01-2-1-1">

                                </header>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="case-study-thumbnail d-flex logo-design-hover-eff">
                        <a  rel="bookmark" title="Geoforce" class="">
                            <img class="portfolio-img" src="{{ asset('assets/imgs/logos/bg/panoreal.png') }}"
                                alt="Image-3D-Thumbnail-01-2-1-1">

                            <div class="overlay">
                                <header>
                                    <img class="portfolio-img" src="{{ asset('assets/imgs/logos/panoreal.png') }}"
                                        alt="Image-3D-Thumbnail-01-2-1-1">
                                </header>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 mt-4">
                    <div class="case-study-thumbnail d-flex logo-design-hover-eff">
                        <a  rel="bookmark" title="Geoforce" class="">
                            <img class="portfolio-img" src="{{ asset('assets/imgs/logos/bg/pritinegreencleaning.png') }}"
                                alt="Image-3D-Thumbnail-01-2-1-1">

                            <div class="overlay">
                                <header>
                                    <img class="portfolio-img" src="{{ asset('assets/imgs/logos/pritinegreencleaning.png') }}"
                                        alt="Image-3D-Thumbnail-01-2-1-1">
                                </header>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 mt-4">
                    <div class="case-study-thumbnail d-flex logo-design-hover-eff">
                        <a  rel="bookmark" title="Geoforce" class="">
                            <img class="portfolio-img" src="{{ asset('assets/imgs/logos/bg/RC-Logo.png') }}"
                                alt="Image-3D-Thumbnail-01-2-1-1">

                            <div class="overlay">
                                <header>
                                    <img class="portfolio-img" src="{{ asset('assets/imgs/logos/RC-Logo.png') }}"
                                        alt="Image-3D-Thumbnail-01-2-1-1">
                                </header>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 mt-4">
                    <div class="case-study-thumbnail d-flex logo-design-hover-eff">
                        <a  rel="bookmark" title="Geoforce" class="">
                            <img class="portfolio-img" src="{{ asset('assets/imgs/logos/bg/luxnests.png') }}"
                                alt="Image-3D-Thumbnail-01-2-1-1">

                            <div class="overlay">
                                <header>
                                    <img class="portfolio-img" src="{{ asset('assets/imgs/logos/luxnests.png') }}"
                                        alt="Image-3D-Thumbnail-01-2-1-1">
                                </header>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 mt-4">
                    <div class="case-study-thumbnail d-flex logo-design-hover-eff">
                        <a  rel="bookmark" title="Geoforce" class="">
                            <img class="portfolio-img" src="{{ asset('assets/imgs/logos/bg/zingdial.png') }}"
                                alt="Image-3D-Thumbnail-01-2-1-1">

                            <div class="overlay">
                                <header>
                                    <img class="portfolio-img" src="{{ asset('assets/imgs/logos/zingdial.png') }}"
                                        alt="Image-3D-Thumbnail-01-2-1-1">
                                </header>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 mt-4">
                    <div class="case-study-thumbnail d-flex logo-design-hover-eff">
                        <a  rel="bookmark" title="Geoforce" class="">
                            <img class="portfolio-img" src="{{ asset('assets/imgs/logos/bg/surivial_bugout_gear.png') }}"
                                alt="Image-3D-Thumbnail-01-2-1-1">

                            <div class="overlay">
                                <header>
                                    <img class="portfolio-img" src="{{ asset('assets/imgs/logos/surivial_bugout_gear.png') }}"
                                        alt="Image-3D-Thumbnail-01-2-1-1">
                                </header>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 mt-4">
                    <div class="case-study-thumbnail d-flex logo-design-hover-eff">
                        <a  rel="bookmark" title="Geoforce" class="">
                            <img class="portfolio-img" src="{{ asset('assets/imgs/logos/bg/emmonsfinancial.png') }}"
                                alt="Image-3D-Thumbnail-01-2-1-1">

                            <div class="overlay">
                                <header>
                                    <img class="portfolio-img" src="{{ asset('assets/imgs/logos/emmonsfinancial.png') }}"
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
