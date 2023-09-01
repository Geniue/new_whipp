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
    <div class="container py-1 custom-text">
        <div class="d-flex flex-column flex-lg-row gap-3 py-5 justify-content-center">
            <div class="mx-sm-auto mx-lg-0 col-12 px-2 px-md-0 col-md-10 col-lg-6 col-xl-5 d-flex flex-column justify-content-center align-items-center">
                <h3 class=" d-lg-none feture-head mb-0">

Elevate Franchise Trust with Advanced Reputation Management


                </h3>
                <div class="pt-4 w-100   pb-4 justify-content-start align-items-center d-flex d-lg-none">
                    <span style="width: 28%;border-radius: 8px; display: inline-block;height: 3px;background-color: deepskyblue;"></span>
                </div>
                <img width="600" class="lozad" data-src="{{ asset('assets/imgs/whipp_images/Online Reputation Management/Franchise Reputation Management/happy-smile-face-emotion-and-correct-icons-on-back-2023-08-05-03-46-47-utc(1)(1).jpg') }}" alt="" />
            </div>
            <div class="mx-auto mx-lg-0 col-12 px-2 px-md-0 col-md-10 col-lg-6 col-xl-5">
                <div class="pb-lg-3">
                    <h3 class="d-none d-lg-block feture-head">

    Elevate Franchise Trust with Advanced Reputation Management


                    </h3>
                    <div class="pt-4 pb-4 justify-content-start align-items-center d-none d-lg-flex">
                        <span style="width: 25%;border-radius: 8px; display: inline-block;height: 3px;background-color: deepskyblue;"></span>
                    </div>
                </div>
                <div>
                    <p class="feture-pare">
                        In the modern era, reputation extends beyond word-of-mouth and physical signage. It's interwoven within digital interactions, reviews, and social media mentions. Franchises confront distinct challenges, managing multiple reputations across diverse locations. Our franchise reputation management delves deep into the digital ecosystem for consistency, swift issue resolution, and promotion of defining positive experiences. By utilizing cutting-edge tools and insightful analytics, we customize strategies per franchise location while upholding the hard-forged brand image. Collaborate with us to secure impeccable online reputations for each franchisee. Statistics: Over 90% of consumers place trust in online reviews; our approach ensures a unified brand voice, enhancing credibility across the franchise network.


                    </p>

                </div>
            </div>
        </div>
    </div>
</section>

{{-- talk with one of our experts --}}
<section style="background-color: #f3f3f3;">
    <div class="container py-4 ">
        <div class="col-lg-10 mx-auto">

            <div class="text-center">
                <h3 class="feture-head mb-3"> Elevate Franchise Trust with Advanced Reputation Management
                </h3>
                <p class="feture-pare">
                    In the modern era, reputation intertwines with every online interaction. Franchises tackle unique challenges, overseeing multiple reputations across diverse locations. At Whipp Digital, our franchise reputation management penetrates the digital realm, ensuring coherence, prompt issue resolution, and amplification of positive experiences.                    <br>
                    <br>
                    Armed with cutting-edge tools and analytics, we customize strategies for each franchise, safeguarding the unified brand you've painstakingly crafted. Partner with us to secure impeccable online reputations for every franchisee. Statistics: Over 90% of consumers trust online reviews; our approach guarantees a unified brand voice while enhancing credibility across your franchise network.
                </p>
            </div>
            <div class="d-flex  py-3">
                <button class="mx-auto  px-3 cta-btn-btn col-12 col-md-8  col-xl-6  d-inline-block py-2  rounded-5 text-uppercase fw-bold" href="#">TALK WITH ONE OF OUR  Franchise Reputation Management EXPERTS</button>
            </div>
        </div>
    </div>
</section>

@endsection