@extends('layouts.index')

@section('content')
    <!-- SERIVCES TITLE BANNER SECTION STARTS HERE -->
    <section class="con-ti-ba-section">
        <div class="container text-center py-4">
            <h2 class="fs-1 fw-bold custom-text">Thrive Locations</h2>
            <div class="text-center py-4">

                <a class="lets-talk-btn px-2 px-md-4 py-1 py-md-3 fs-5 rounded-5" href="#">GET MY FREE PROPOSAL</a>
            </div>
        </div>
    </section>
    <!-- SERIVCES TITLE BANNER SECTION ENDS HERE -->

    {{-- SERVICE LOCATIONS STARTS HERE --}}
    <section class="">
        <div class="container py-4 col-lx-5 col-lg-6 mx-auto border-bottom">
            <h3 class="custom-text fw-bold text-center text-lg-start">
                Headquarters
            </h3>
            <div class="row py-4 gap-5 gap-lg-0">
                <div class="col-lg-6 text-center text-lg-start">
                    <img src="{{ asset('assets/imgs/thrive-logo-color-print-260x141.png') }}" alt="">
                </div>
                <div class="col-lg-6 wp-con-map-address text-center text-lg-start">
                    <p>Thrive Internet Marketing Agency</p>
                    <p>
                        <strong> <a href="tel:908-3434-345" class="custom-text-2">
                                908-3434-345</a></strong>
                    </p>
                    <p>
                        4600 Park Springs Blvd
                    </p>
                    <p>
                        Suite 100
                    </p>
                    <p>
                        Arlington, TX 76017
                    </p>
                </div>
            </div>
        </div>
        <div class="container py-4 col-lx-5 col-lg-6 mx-auto border-bottom">
            <h3 class="custom-text-2 fw-bold text-center text-lg-start">
                Atlanta, Georgia
            </h3>
            <div class="row py-4 gap-5 gap-lg-0">
                <div class="col-lg-6 text-center text-lg-start">
                    <img src="{{ asset('assets/imgs/atlanta-dwt-626x162-panorama.jpg') }}" alt="">
                </div>
                <div class="col-lg-6 wp-con-map-address text-center text-lg-start">

                    <p>
                        <strong> <a href="tel:908-3434-345" class="custom-text-2">
                                908-3434-345</a></strong>
                    </p>
                    <p>
                        260 Peachtree St NW
                    </p>
                    <p>
                        Ste 2200
                    </p>
                    <p>
                        Arlington, TX 76017
                    </p>
                </div>
            </div>
        </div>
    </section>
    {{-- SERVICE LOCATIONS ENDS HERE --}}
@endsection
