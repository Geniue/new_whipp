@extends('layouts.index')

@section('content')
    {{-- TITLE BANNER STARTS HERE --}}
    <section class="con-ti-ba-section">
        <div class="container text-center py-4">
            <h2 class="fs-1 fw-bold custom-text">Web Designs</h2>
            <p class="custom-text-2 fs-5">
                Shiny, new, optimized websites completed by Thrive
            </p>
            <div class="text-center py-4">
                <a class="lets-talk-btn px-4 py-3 fs-5 rounded-5" href="#">GET MY FREE PROPOSAL</a>
            </div>
        </div>
    </section>
    {{-- TITLE BANNER ENDS HERE --}}

    {{-- FILTER WEBISTE SECTION STARTS HERE --}}
    <section>
        <div class="container-fulid p-4 ">
            <ul id="portfolio-cats"
                class="filter clearfix custom-portfolio-cats d-flex gap-3 justify-content-center flex-wrap">
                <li class="filter-link default-filter"><a href="#" class="" data-filter="*"><span>All</span></a>
                </li>
                <li class="filter-link"><a href="#" class="portfolio-category"
                        data-filter=".nutrition"><span>Nutrition</span></a></li>
                <li class="filter-link"><a href="#" class="portfolio-category"
                        data-filter=".business-by-trade"><span>Business by Trade</span></a></li>
                <li class="filter-link"><a href="#" class="portfolio-category"
                        data-filter=".finance-and-legal"><span>Finance and Legal</span></a></li>
                <li class="filter-link"><a href="#" class="portfolio-category"
                        data-filter=".healthcare"><span>Healthcare</span></a></li>
                <li class="filter-link"><a href="#" class="portfolio-category"
                        data-filter=".non-profit-designs"><span>Non-Profit Designs</span></a></li>
                <li class="filter-link"><a href="#" class="portfolio-category"
                        data-filter=".education"><span>Education</span></a></li>
                <li class="filter-link"><a href="#" class="portfolio-category"
                        data-filter=".technology"><span>Technology</span></a></li>
                <li class="filter-link"><a href="#" class="portfolio-category"
                        data-filter=".entertainment"><span>Entertainment</span></a></li>
            </ul>
        </div>
    </section>
    {{-- FILTER WEBISTE SECTION ENDS HERE --}}


    {{-- GRID GALLARY SECTION STARTS HERE --}}
    <section>
        <div class="container">
            {{-- imgs --}}
            <div class="row col-lg-11 mx-auto gap-4 gap-md-0 pb-5">
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="case-study-thumbnail border-hover-blog">
                        <a href="#" rel="bookmark" title="Geoforce">
                            <img class="portfolio-img" src="{{ asset('assets/imgs/Softroc-Thumbnail-330x240.png') }}"
                                alt="Image-3D-Thumbnail-01-2-1-1">
                        </a>
                        <p class="custom-text-2 fw-bold mb-0 py-2 text-center">
                            Towny
                        </p>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="case-study-thumbnail border-hover-blog">
                        <a href="#" rel="bookmark" title="Geoforce">
                            <img class="portfolio-img" src="{{ asset('assets/imgs/Rakkasan-Thumbnail-330x240.png') }}"
                                alt="Image-3D-Thumbnail-01-2-1-1">


                        </a>
                        <p class="custom-text-2 fw-bold mb-0 py-2 text-center">
                            The DriveWay Company
                        </p>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="case-study-thumbnail border-hover-blog">
                        <a href="#" rel="bookmark" title="Geoforce">
                            <img class="portfolio-img" src="{{ asset('assets/imgs/Joolala-Thumbnail-330x240.png') }}"
                                alt="Image-3D-Thumbnail-01-2-1-1">
                        </a>
                        <p class="custom-text-2 fw-bold mb-0 py-2 text-center">
                            Paddle candy
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </section>
    {{-- GRID GALLARY SECTION ENDS HERE --}}
@endsection
