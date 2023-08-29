@extends('layouts.index')

@section('content')
    <!-- CAREERS TITLE BANNER SECTION STARTS HERE -->
    <section class="con-ti-ba-section pb-4">
        <div class="container text-center py-4">
            <h2 class="fs-1 fw-bold custom-text text-ellipsis-4">CAREERS</h2>
            <p class="custom-text-2 fs-5 ">
                Amazing Opportunities Await You!
            </p>
        </div>
    </section>
    <!-- CAREERS TITLE BANNER SECTION ENDS HERE -->

    <section>
        <div class="container col-lg-8 mx-auto py-5">
            <p class="text-center">
                Thrive Internet Marketing Agency is an award-winning digital marketing company that offers a full spectrum
                of data-driven web marketing services. We develop growth-oriented online marketing campaigns that make a
                positive impact on businesses.
            </p>
            <div class="text-center py-4 d-flex flex-column flex-md-row gap-3  justify-content-center overflow-hidden">

                <a class="re-lets-talk-btn px-2 px-md-4 py-1 py-md-2 fs-5 rounded-5" href="#">BE PART OF SOMETHING
                    GREAT</a>
            </div>
            <div class="d-flex flex-column flex-md-row justify-content-between col-lg-8 mx-auto">
                <div class="gap-2 text-center d-flex flex-column justify-content-center align-items-center">
                    <img width="125" class="lozad" data-src="{{ asset('assets/imgs/icons/career-path-icon1.svg') }}" alt="">
                    <h3 class="mb-0 fs-6 fw-bold">Long-Term Career Paths</h3>

                </div>
                <div class=" gap-2 d-flex flex-column justify-content-center align-items-center text-center">
                    <img width="125" class="lozad" data-src="{{ asset('assets/imgs/icons/career-path-icon2.svg') }}" alt="">
                    <h3 class="mb-0 fs-6 fw-bold">People-Oriented Leadership</h3>
                </div>
                <div class=" gap-2 d-flex flex-column justify-content-center align-items-center text-center">
                    <img width="125" class="lozad" data-src="{{ asset('assets/imgs/icons/career-path-icon3.svg') }}" alt="">
                    <h3 class="mb-0 fs-6 fw-bold">Positive Work Culture</h3>
                </div>
            </div>

        </div>
    </section>

    {{-- WHY WHIPP SECTION STARTS HERE --}}
    <section class="py-5 overflow-hidden">
        <div class="cotainer-fulid py-4 wp-wy-carr-container position-relative row ">
            <div class="col-10  col-md-8 mx-auto text-white  position-relative z-3 gap-4">
                <div class="text-center">
                    <img class="lozad" data-src="{{ asset('assets/imgs/Group-5648.png') }}" alt="">
                </div>
                <div class="text-center pt-4">
                    <h3 class="fs-3 fw-bold">
                        Why Whipp Digital?
                    </h3>
                    <p class="fs-6">
                        Driving Individual and Business Transformations Since 2005
                    </p>
                    <p>Thrive Internet Marketing Agency is a recognized leader in the digital marketing realm. For more than
                        17 years, we have actively built and sustained our commitment to improving the lives of our
                        employees, partner agencies and local communities through our people-centric company programs and
                        services.</p>
                    <p>If you’re passionate about doing your best work and helping others, we’d love to meet you.</p>
                </div>
                <div class="text-center py-4 d-flex flex-column flex-md-row gap-3  justify-content-center overflow-hidden">

                    <a class="lets-talk-btn px-2 px-md-4 py-1 py-md-2 fs-5 rounded-5 lets-talk-btn-bg-white"
                        href="#">LEARN MORE ABOUT
                        US</a>
                </div>
            </div>
        </div>
    </section>
    {{-- WHY WHIPP SECTION ENDS HERE --}}


    {{-- AWARD SECTION STARTS HERE --}}
    <section class="py-5">
        <div class="container py-4 custom-text col-lg-9 mx-auto custom-bg-1 rounded-4">
            <div class="d-flex flex-column flex-lg-row gap-3 py-4 justify-content-center align-items-center">
                <div
                    class="mx-sm-auto mx-lg-0 col-11 px-2 px-md-0 col-md-10 col-lg-6 col-xl-5 d-flex flex-column justify-content-center align-items-center">
                    <img class="lozad" data-src="{{ asset('assets/imgs/award-white.png') }}" alt="Internet Marketing Services">
                </div>
                <div
                    class="mx-auto mx-lg-0 col-12 px-2 px-md-0 col-md-10 col-lg-6 col-xl-5 d-flex flex-column justify-content-center">
                    <div class="">
                        <h2 class="fs-2 fw-bold py-3 text-center text-md-start">
                            Inc. 5000 Fastest-Growing Company 6 Years in a Row!
                        </h2>
                        <p>
                            Thrive is proud to rank among the <strong> <a href="#">
                                    Inc. 5000 fastest-growing companies in the United States
                                </a>
                            </strong>
                            for
                            six consecutive years. Since the Inc. 5000 List started in 1982, only 4 percent of companies
                            have made the list five times! But our commitment to success doesn’t stop here. We continuously
                            invest in our employees to ensure personal and operational excellence.
                        </p>

                    </div>
                </div>

            </div>
            <div class="text-center py-4 d-flex flex-column flex-md-row gap-3  justify-content-center overflow-hidden">

                <a class="lets-talk-btn px-2 px-md-4 py-1 py-md-2 fs-5 rounded-5 lets-talk-btn-bg-white" href="#">VIEW
                    ALL OUR AWARDS</a>
            </div>
        </div>
    </section>
    {{-- AWARD SECTION ENDS HERE --}}


    {{-- AVAILABLE JOBS SECTION STARTS HERE --}}
    <section class="pb-5">
        <div class="container col-lg-10 mx-auto row justify-content-center pt-5">
            <div class="text-center col-12 pb-5 pb-md-0 col-md-5  col-lg-3 d-flex gap-4 flex-column ">
                <div class="text-center">
                    <a href="#">
                        <img class="lozad" data-src="{{ asset('assets/imgs/icons/we-agency-5.svg') }}" alt="">
                    </a>
                    <a href="#" class="ser-gri-link text-decoration-none fs-5 fw-bold">Social Media Marketing</a>
                </div>
            </div>

            <div class="text-center col-12 pb-5 pb-md-0 col-md-5  col-lg-3 d-flex gap-4 flex-column ">
                <div class="text-center">
                    <a href="#">
                        <img class="lozad" data-src="{{ asset('assets/imgs/icons/we-agency-1.svg') }}" alt="">
                    </a>
                    <a href="#" class="ser-gri-link text-decoration-none fs-5 fw-bold">Digital Marketing</a>
                </div>
            </div>
            <div class="text-center col-12 pb-5 pb-md-0 col-md-5  col-lg-3 d-flex gap-4 flex-column ">
                <div class="text-center">
                    <a href="#">
                        <img class="lozad" data-src="{{ asset('assets/imgs/icons/we-agency-7.svg') }}" alt="">
                    </a>
                    <a href="#" class="ser-gri-link text-decoration-none fs-5 fw-bold">eCommerce Marketing</a>
                </div>
            </div>
            <div class="text-center col-12 pb-5 pb-md-0 col-md-5  col-lg-3 d-flex gap-4 flex-column ">
                <div class="text-center">
                    <a href="#">
                        <img class="lozad" data-src="{{ asset('assets/imgs/icons/amazon-we-icon.svg') }}" alt="">
                    </a>
                    <a href="#" class="ser-gri-link text-decoration-none fs-5 fw-bold">Amazon Marketing</a>
                </div>
            </div>
        </div>
        <div class="container col-lg-9 mx-auto row justify-content-center">
            <div class="text-center col-12 pb-5 pb-md-0 col-md-5  col-lg-3 d-flex gap-4 flex-column ">
                <div class="text-center">
                    <a href="#">
                        <img class="lozad" data-src="{{ asset('assets/imgs/icons/we-agency-6.svg') }}" alt="">
                    </a>
                    <a href="#" class="ser-gri-link text-decoration-none fs-5 fw-bold">Online Reputation
                        Management</a>
                </div>
            </div>
            <div class="text-center col-12 pb-5 pb-md-0 col-md-5  col-lg-3 d-flex gap-4 flex-column ">
                <div class="text-center">
                    <a href="#">
                        <img class="lozad" data-src="{{ asset('assets/imgs/icons/we-agency-2.svg') }}" alt="">
                    </a>
                    <a href="#" class="ser-gri-link text-decoration-none fs-5 fw-bold">Search Engine Optimization
                        (SEO)</a>
                </div>
                <div class="text-center col-12 pb-5 pb-md-0 col-md-5  col-lg-3 d-flex gap-4 flex-column ">
                    <div class="text-center">
                        <a href="#">
                            <img class="lozad" data-src="{{ asset('assets/imgs/icons/we-agency-3.svg') }}" alt="">
                        </a>
                        <a href="#" class="ser-gri-link text-decoration-none fs-5 fw-bold">Pay-Per-Click (PPC)
                            Marketing</a>
                    </div>
                </div>
                <div class="text-center col-12 pb-5 pb-md-0 col-md-5  col-lg-3 d-flex gap-4 flex-column ">
                    <div class="text-center">
                        <a href="#">

                            <img class="lozad" data-src="{{ asset('assets/imgs/icons/we-agency-4.svg') }}" alt="">
                        </a>
                        <a href="#" class="ser-gri-link text-decoration-none fs-5 fw-bold">Web Design and
                            Development</a>
                    </div>
                </div>
            </div>

    </section>
    {{-- AVAILABLE JOBS SECTION  ENDS HERE --}}
@endsection
