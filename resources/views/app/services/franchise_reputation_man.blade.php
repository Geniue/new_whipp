@extends('layouts.index')

@section('title')
<title> Franchise Reputation Management | Whippdigital </title>

@endsection

@section('css')
<style>
    .feture-pare {
        line-height: 25px;
        font-weight: 600;
        color: #7c7c7c;
    }

    .feture-head {
        font-size: 40px;
        font-weight: bold;
        line-height: 46px;
        color: #49453b;
    }

    @media (max-width:786px) {
        .feture-head {
            font-size: 30px !important;
            font-weight: bold;
            line-height: 38px;
        }
    }
</style>
@endsection

@section('pageheading')
<!-- SERIVCES TITLE BANNER SECTION STARTS HERE -->
<section class="desk-con-ti-ba-section d-none d-lg-block">
    <div class="container text-center py-4">
        <h2 class="fs-1 fw-bold custom-text" style="text-transform: capitalize">
            Franchise Reputation Management
        </h2>
        <p class="custom-text-2 fs-5">
            Create a Strong Digital Foundation and Rank High on Search Results
        </p>
        <div class="text-center py-4">
            <button class="iwantgrow_btn lets-talk-btn col-5 col-md-4 col-lg-2 d-inline-block py-2 fs-5 rounded-5" href="#">Let's Talk</button>
        </div>
    </div>
</section>
<!-- SERIVCES TITLE BANNER SECTION ENDS HERE -->

@endsection

@section('content')
<!-- SERIVCES TITLE BANNER SECTION STARTS HERE -->
<section class="con-ti-ba-section d-lg-none">
    <div class="container text-center py-4">
        <h2 class="fs-1 fw-bold custom-text" style="text-transform: capitalize">
            Franchise Reputation Management
        </h2>
        <p class="custom-text-2 fs-5">
            Create a Strong Digital Foundation and Rank High on Search Results
        </p>
        <div class="text-center py-4">
            <button class="iwantgrow_btn  lets-talk-btn col-5 col-md-4 col-lg-2 d-inline-block py-2 fs-5 rounded-5">Let's Talk</button>
        </div>
    </div>
</section>


<!-- TRUSTED BY BANNER STARTS HERE -->
@include('app.static_components.trusted_banner')
<!-- TRUSTED BY BANNER ENDS HERE -->

<!-- WHY SERVICE STARTS HERE -->
<section class="border ">
    <div class="container py-5 custom-text">
        <div class="d-flex flex-column flex-lg-row gap-3 pt-5 justify-content-center">
            <div class="mx-sm-auto mx-lg-0 col-11 px-2 px-md-0 col-md-10 col-lg-6 col-xl-5 d-flex flex-column justify-content-center align-items-center">
                <h3 class=" d-lg-none feture-head mb-2">

Franchise Reputation Management at Whipp Digital

                </h3>
                <img width="450" src="{{ asset('assets/imgs/Group-166@2x-min.png') }}" alt="" />
            </div>
            <div class="mx-auto mx-lg-0 col-12 px-2 px-md-0 col-md-10 col-lg-6 col-xl-5">
                <div class="pb-lg-3">
                    <h3 class="d-none d-lg-block feture-head">

    Franchise Reputation Management at Whipp Digital

                    </h3>
                </div>
                <div>
                    <p class="feture-pare">
                        In the digital age, reputation isn’t just about word-of-mouth or a storefront sign; it's intricately woven through every 
                        online interaction, review, and social media mention. At Whipp Digital, we understand that franchises face unique challenges
                         in this arena. It’s not just one reputation you're managing, but many, across diverse locations and cultures.
                          Our franchise reputation management service delves deep into the digital ecosystem to ensure consistency, address concerns swiftly,
                           and promote the positive experiences that define your brand. 

                    </p>

                </div>
            </div>
        </div>
<div class="col-lg-10 px-md-3 px-2  mx-auto">

    <p class="feture-pare">By leveraging cutting-edge tools and insightful analytics,
        we tailor strategies for each franchise location while maintaining the cohesive brand image you've worked so hard to build.
        Partner with us, and let's ensure every franchisee benefits from an impeccable online reputation.</p>
    </div>
    </div>
</section>

{{-- talk with one of our experts --}}
<section style="background-color: #f3f3f3;">
    <div class="container py-4 ">
        <div class="col-lg-10 mx-auto">

            <div class="text-center">
                <h3 class="feture-head mb-3">How we Keep You Updated</h3>
                <p class="feture-pare">
                    As part of our Amazon marketing agency plan, we provide you with a complete picture of how we’ll execute your successful advertising campaign both weekly and monthly. We establish month-to-month growth percentage goals and thoroughly explain our strategy each step of the way. We also make calculated adjustments month to month to ensure we maximize ROI. Weekly and monthly reports are sent to you to keep you regularly updated.
                    <br>
                    <br>
                    Following a successful Amazon sponsored products campaign is a crucial step for any prosperous Amazon seller. Ultimately, it is one of the most important steps in determining whether you thrive or not on Amazon.
                </p>
            </div>
            <div class="d-flex  py-3">
                <button class="mx-auto  px-3 cta-btn-btn col-12 col-md-8  col-xl-6  d-inline-block py-2 fs-5 rounded-5" href="#">TALK WITH ONE OF OUR AMAZON EXPERTS</button>
            </div>
        </div>
    </div>
</section>

@endsection