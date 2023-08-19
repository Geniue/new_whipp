@extends('layouts.index')

@section('title')
<title> Social Media Advertising | Whippdigital </title>

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
          Social Media Advertising 
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
              Social Media Advertising 
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
                        Social Media Advertising with Whipp Digital

                    </h3>
                    <img width="450" src="{{ asset('assets/imgs/Group-166@2x-min.png') }}" alt="" />
                </div>
                <div class="mx-auto mx-lg-0 col-12 px-2 px-md-0 col-md-10 col-lg-6 col-xl-5">
                    <div class="pb-lg-3">
                        <h3 class="d-none d-lg-block feture-head">
                            Social Media Advertising with Whipp Digital

                        </h3>
                    </div>
                    <div>
                        <p class="feture-pare">
                            At Whipp Digital, we understand that today's online landscape is more than just clicks and views—it's about crafting meaningful connections. Social media advertising isn't just about broadcasting a message; it's an art of engaging with the right audience, at the right time, with the perfect content. Whether it's capturing fleeting attention spans with compelling visuals or leveraging intricate algorithms to place your brand in front of those who truly matter, our team is adept at creating campaigns that resonate. Dive into the dynamic world of social media with us, and discover the power of ads that don't just reach people, but touch their hearts. Join the revolution where advertising feels less like a sales pitch and more like a conversation. Welcome to Whipp Digital's approach to social media advertising.

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
                            Paid Social Media Advertising at Whipp Digital


                        </h3>
                    </div>
                    <div>
                        <p class="feture-pare">
                            Venture into the realm of paid social media advertising with Whipp Digital, where precision meets creativity. We don't just throw your budget into the vast ocean of social channels; we meticulously craft strategies that harness the unique strengths of each platform. Every penny you invest is directed towards reaching your target audience in the most impactful way. Leveraging the latest insights and advanced analytics, we create campaigns that do more than just gain impressions – they spark genuine interest and drive actions. In a digital space overflowing with content, let your brand be the one that doesn't just blend in but stands out vividly. Dive deeper with Whipp Digital and turn your paid advertisements into memorable experiences that usher in tangible results.
                        </p>
                       
                    </div>
                </div>
                <div
                class="mx-sm-auto mx-lg-0 col-11 px-2 px-md-0 col-md-10 col-lg-6 col-xl-5 d-flex flex-column justify-content-center align-items-center">
                <h3 class=" d-lg-none feture-head">
                    Paid Social Media Advertising at Whipp Digital

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
                       Advertising on Pinterest with Whipp Digital



                    </h3>
                    <img width="450" src="{{ asset('assets/imgs/Group-166@2x-min.png') }}" alt="" />
                </div>
                <div class="mx-auto mx-lg-0 col-12 px-2 px-md-0 col-md-10 col-lg-6 col-xl-5">
                    <div class="pb-lg-3">
                        <h3 class="d-none d-lg-block feture-head">
                           Advertising on Pinterest with Whipp Digital


                        </h3>
                    </div>
                    <div>
                        <p class="feture-pare">
                            Journey with Whipp Digital into the visual wonderland of Pinterest, where inspiration meets intent. Advertising on Pinterest is unlike any other platform; it’s where dreams begin and aspirations turn into actions. As users pin their desires and plan their futures, we position your brand at the crossroads of imagination and realization. Our expert team delves deep into the unique dynamics of Pinterest, crafting campaigns that don’t just fit the mold, but shatter it. We translate your brand story into captivating visuals and engaging narratives that resonate with pinners in search of their next big idea or purchase. With Whipp Digital by your side, make your brand the spark that ignites a pinner's passion and drives them to action. Step into the vibrant world of Pinterest advertising, and let's co-create magic, one pin at a time.

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
                         Paid Facebook Advertising with Whipp Digital





                        </h3>
                    </div>
                    <div>
                        <p class="feture-pare">
                            Step into the vast and ever-evolving universe of Facebook with Whipp Digital, your trusted guide in navigating the intricate nuances of paid advertising on this behemoth platform. Facebook isn't just another social media site; it's a tapestry of diverse audiences with distinct aspirations and behaviors. Paid Facebook advertising, when done right, can tap into this rich mosaic, creating bespoke conversations that captivate and convert. Our seasoned team, equipped with cutting-edge insights and tools, tailors each campaign to strike a chord with your target demographic. We delve beyond surface-level metrics, striving for meaningful engagements that bolster brand loyalty and drive conversions. With Whipp Digital, your investment in Facebook ads becomes more than a mere transaction—it becomes a transformative journey that fosters relationships and fuels growth. Discover the Whipp Digital difference and elevate your Facebook advertising game.

                        </p>
                       
                    </div>
                </div>
                <div
                class="mx-sm-auto mx-lg-0 col-11 px-2 px-md-0 col-md-10 col-lg-6 col-xl-5 d-flex flex-column justify-content-center align-items-center">
                <h3 class=" d-lg-none feture-head">
                   Paid Facebook Advertising with Whipp Digital


    

                </h3>
                <img width="450" src="{{ asset('assets/imgs/Group-166@2x-min.png') }}" alt="" />
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
                        Facebook Business Advertising with Whipp Digital


                    </h3>
                    <img width="450" src="{{ asset('assets/imgs/Group-166@2x-min.png') }}" alt="" />
                </div>
                <div class="mx-auto mx-lg-0 col-12 px-2 px-md-0 col-md-10 col-lg-6 col-xl-5">
                    <div class="pb-lg-3">
                        <h3 class="d-none d-lg-block feture-head">
                            Facebook Business Advertising with Whipp Digital

                        </h3>
                    </div>
                    <div>
                        <p class="feture-pare">
                            In the sprawling digital marketplace that is Facebook, Whipp Digital stands as your beacon, illuminating the path to strategic and impactful Facebook business advertising. The realm of business advertising on Facebook is not just about reaching vast numbers—it's about reaching the right ones. It's about understanding the heartbeat of your audience and weaving it into the fabric of your brand's narrative. Our team at Whipp Digital recognizes that every business has a unique voice, and our mission is to amplify that voice in the cacophony of online chatter. Through a blend of data-driven strategies and human-centric creativity, we craft campaigns that don't merely echo but resonate deeply with your desired audience. Step into the world of Facebook business advertising with Whipp Digital, and let's transform your brand's online presence from mere visibility to vibrant engagement.

                        </p>
                       
                    </div>
                </div>
                
            </div>
        </div>
    </section>
@endsection
