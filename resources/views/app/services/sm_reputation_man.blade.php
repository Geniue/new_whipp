@extends('layouts.index')

@section('title')
<title>Franchise Reputation Management | Whippdigital </title>

@endsection

@section('css')
<style>
    .feture-pare{
        line-height: 25px;
        font-weight: 600;
        color: #7c7c7c;
    }
    .feture-head{
        font-size: 40px;
        font-weight: bold;
        line-height: 46px;
        color: #49453b;
    }
    @media (max-width:786px){
        .feture-head{
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
            <button  class="iwantgrow_btn lets-talk-btn col-5 col-md-4 col-lg-2 d-inline-block py-2 fs-5 rounded-5" href="#">Let's Talk</button>
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
                <button  class="iwantgrow_btn  lets-talk-btn col-5 col-md-4 col-lg-2 d-inline-block py-2 fs-5 rounded-5" >Let's Talk</button>
            </div>
        </div>
    </section>


    <!-- TRUSTED BY BANNER STARTS HERE -->
    @include('app.static_components.trusted_banner')
    <!-- TRUSTED BY BANNER ENDS HERE -->

    <!-- WHY SERVICE STARTS HERE -->
    <section class="border ">
        <div class="container py-5 custom-text">
            <div class="d-flex flex-column flex-lg-row gap-3 py-5 justify-content-center">
                <div
                    class="mx-sm-auto mx-lg-0 col-11 px-2 px-md-0 col-md-10 col-lg-6 col-xl-5 d-flex flex-column justify-content-center align-items-center">
                    <h3 class=" d-lg-none feture-head mb-2">
Online Reputation Managers at Whipp Digital
</h3>
                    <img width="450" src="{{ asset('assets/imgs/Group-166@2x-min.png') }}" alt="" />
                </div>
                <div class="mx-auto mx-lg-0 col-12 px-2 px-md-0 col-md-10 col-lg-6 col-xl-5">
                    <div class="pb-lg-3">
                        <h3 class="d-none d-lg-block feture-head">
    Online Reputation Managers at Whipp Digital
</h3>
                    </div>
                    <div>
                        <p class="feture-pare">
                            In today's digital age, your online reputation can be your strongest asset or your most significant vulnerability. At Whipp Digital, we understand that every tweet, review, or comment can shape the perception of your brand in the blink of an eye. Our team of dedicated online reputation managers doesn’t just monitor what's being said about you—they actively engage in sculpting your digital narrative. Leveraging state-of-the-art tools and years of industry experience, we work tirelessly to amplify positive feedback, address concerns with tact, and strategically position your brand in the best possible light. Let us be the guardians of your digital footprint, ensuring that your online presence is not just positive but genuinely representative of the values and excellence you bring to the table.

                        </p>
                       
                    </div>
                </div>
                
            </div>
        </div>
    </section>
    <section>
        <div class="container py-5 custom-text">
            <div class="d-flex flex-column-reverse flex-lg-row gap-3 py-5 justify-content-center">
   
                <div class="mx-auto mx-lg-0 col-12 px-2 px-md-0 col-md-10 col-lg-6 col-xl-5">
                    <div class="pb-lg-3">
                        <h3 class="d-none d-lg-block feture-head">
                     Social Media Reputation Management at Whipp Digital








                        </h3>
                    </div>
                    <div>
                        <p class="feture-pare">
                            Navigating the tumultuous seas of social media can be a daunting task for any brand. With every like, share, and comment, a story unfolds, influencing your brand's image and credibility. At Whipp Digital, we’re not just about keeping up appearances. Our social media reputation management is about crafting genuine connections and safeguarding your brand's narrative. Recognizing that every tweet or Instagram story can ripple into broader public perception, our seasoned experts dive deep into the nuances of each platform. We not only monitor conversations but actively steer them, transforming potential pitfalls into opportunities for engagement. With Whipp Digital by your side, you're not just in the social media game; you're mastering it, building a reputation that resonates and endures.
                        </p>
                       
                    </div>
                </div>
                <div
                class="mx-sm-auto mx-lg-0 col-11 px-2 px-md-0 col-md-10 col-lg-6 col-xl-5 d-flex flex-column justify-content-center align-items-center">
                <h3 class=" d-lg-none feture-head">
             Social Media Reputation Management at Whipp Digital







                </h3>
                <img width="450" src="{{ asset('assets/imgs/Group-166@2x-min.png') }}" alt="" />
            </div>
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
    <section class="border ">
        <div class="container py-5 custom-text">
            <div class="d-flex flex-column flex-lg-row gap-3 py-5 justify-content-center">
                <div
                    class="mx-sm-auto mx-lg-0 col-11 px-2 px-md-0 col-md-10 col-lg-6 col-xl-5 d-flex flex-column justify-content-center align-items-center">
                    <h3 class=" d-lg-none feture-head mb-2">
                    Brand Reputation Management at Whipp Digital







                    </h3>
                    <img width="450" src="{{ asset('assets/imgs/Group-166@2x-min.png') }}" alt="" />
                </div>
                <div class="mx-auto mx-lg-0 col-12 px-2 px-md-0 col-md-10 col-lg-6 col-xl-5">
                    <div class="pb-lg-3">
                        <h3 class="d-none d-lg-block feture-head">
                        Brand Reputation Management at Whipp Digital







                        </h3>
                    </div>
                    <div>
                        <p class="feture-pare">
                            A brand is more than just a logo or a catchy slogan; it's a promise, a legacy, and often, an emotion. In a world teeming with voices, ensuring your brand's reputation remains untarnished and resonant can feel like an uphill battle. Enter Whipp Digital's Brand Reputation Management. We're not just strategists; we're storytellers, guardians, and advocates of your brand's narrative. Harnessing a fusion of analytics and intuition, we pinpoint areas of potential risk and opportunity, sculpting perceptions with a craftsman's precision. We believe that every touchpoint, from customer reviews to press mentions, is a chapter in your brand's unfolding story. Let Whipp Digital be the authors of your brand's best chapters, weaving tales of trust, reliability, and excellence that leave a lasting impression.

                        </p>
                       
                    </div>
                </div>
                
            </div>
        </div>
    </section>


@endsection
