@extends('layouts.index')

@section('title')
     Social Media Advertising | Whippdigital

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
         
                 <div class="text-center py-4">
                <button  class="iwantgrow_btn  lets-talk-btn col-5 col-md-4 col-lg-2 d-inline-block py-2 fs-5 rounded-5" >Let's Talk</button>
            </div>
        </div>
    </section>


    <div class="wp-brdcb">
        <div class="wrap">
            <div>
                <p id="breadcrumbs" class="fs-5"><span><span><a class="fw-medium custom-text-2" href="/">Home</a></span> » <span
                            class="breadcrumb_last" aria-current="page"> Social Media Advertising </span></span></p>
                            <div class="d-flex align-items-center mt-3">
                                <span class="w-100" style="height: 1px;
                                background: #b1b1b1;
                                margin-right: 5px;"></span>
                                <div class="d-flex align-items-center" style="gap: 10px">
                                    <div><img width="220" src="{{asset('assets/imgs/brea-rmro.png')}}" alt=""></div>
                                </div>
                                <span class="w-100" style="height: 1px;
                                background: #b1b1b1;
                                margin-left: 5px;"></span>
                            </div>
            </div>
        </div>
    </div>


    <!-- TRUSTED BY BANNER STARTS HERE -->
    @include('app.static_components.trusted_banner')
    <!-- TRUSTED BY BANNER ENDS HERE -->

    <!-- WHY SERVICE STARTS HERE -->
    <section class="border-bottom ">
        <div class="container py-1 custom-text">
            <div class="d-flex flex-column flex-lg-row gap-3 py-5 justify-content-center">
                <div
                    class="mx-sm-auto mx-lg-0 col-12 px-2 px-md-0 col-md-10 col-lg-6 col-xl-5 d-flex flex-column justify-content-center align-items-center">
                    <h3 class=" d-lg-none feture-head mb-0">
                      Social Media Advertising Redefined


                    </h3>
                        <div class="pt-4 w-100   pb-4 justify-content-start align-items-center d-flex d-lg-none">
                        <span style="width: 28%;border-radius: 8px; display: inline-block;height: 3px;background-color: deepskyblue;"></span>
                    </div>
                    <img width="600" class="lozad" data-src="{{ asset('assets/imgs/whipp_images/Social Media  Marketing/Social Media Advertising/v1/social-media-marketing-2022-11-01-00-05-34-utc.jpg') }}" alt="" />
                </div>
                <div class="mx-auto mx-lg-0 col-12 px-2 px-md-0 col-md-10 col-lg-6 col-xl-5">
                    <div class="pb-lg-3">
                        <h3 class="d-none d-lg-block feture-head">
                          Social Media Advertising Redefined


                        </h3>
                               <div class="pt-4 pb-4 justify-content-start align-items-center d-none d-lg-flex">
                            <span style="width: 25%;border-radius: 8px; display: inline-block;height: 3px;background-color: deepskyblue;"></span>
                        </div>
                    </div>
                    <div>
                        <p class="feture-pare">
                            Today's online landscape transcends clicks and views—it's about forging meaningful connections. Social media advertising is more than broadcasting; it's artful engagement with your ideal audience, right content, right time. Whether captivating fleeting attention spans with visuals or harnessing algorithms to reach those who matter, we craft resonant campaigns. Immerse in the dynamic social media realm and harness ads that not only reach but deeply resonate. Join a revolution where advertising is conversational, not merely a pitch. Experience social media advertising the Whipp Digital way.

                        </p>
                       
                    </div>
                </div>
                
            </div>
        </div>
    </section>
    <section>
        <div class="container py-1 custom-text">
            <div class="d-flex flex-column-reverse flex-lg-row gap-3 py-5 justify-content-center">
   
                <div class="mx-auto mx-lg-0 col-12 px-2 px-md-0 col-md-10 col-lg-6 col-xl-5">
                    <div class="pb-lg-3">
                        <h3 class="d-none d-lg-block feture-head">
                           Elevate Your Paid Social Media Advertising



                        </h3>
                               <div class="pt-4 pb-4 justify-content-start align-items-center d-none d-lg-flex">
                            <span style="width: 25%;border-radius: 8px; display: inline-block;height: 3px;background-color: deepskyblue;"></span>
                        </div>
                    </div>
                    <div>
                        <p class="feture-pare">
                            Embark on the realm of paid social media advertising alongside Whipp Digital, where precision marries creativity. We transcend the norm—strategies aren't cast blindly into the social ocean; they're tailored to each platform's distinct strengths. Your investment isn't squandered; it's channeled meticulously towards your target audience. Armed with cutting-edge insights, we shape campaigns that do more than gather impressions – they ignite genuine interest and drive action. Amidst digital content overflow, let your brand shine, not blend. Plunge deeper with Whipp Digital and transform paid ads into remarkable experiences that yield tangible outcomes.
                        </p>
                       
                    </div>
                </div>
                <div
                class="mx-sm-auto mx-lg-0 col-12 px-2 px-md-0 col-md-10 col-lg-6 col-xl-5 d-flex flex-column justify-content-center align-items-center">
                <h3 class=" d-lg-none feture-head">
                   Elevate Your Paid Social Media Advertising


                </h3>
                    <div class="pt-4 w-100   pb-4 justify-content-start align-items-center d-flex d-lg-none">
                        <span style="width: 28%;border-radius: 8px; display: inline-block;height: 3px;background-color: deepskyblue;"></span>
                    </div>
                <img width="600" class="lozad" data-src="{{ asset('assets/imgs/whipp_images/Social Media  Marketing/Social Media Advertising/v1/like-heart-symbol-on-dollar-2022-12-03-02-00-07-utc.jpg ') }}" alt="" />
            </div>
            </div>
        </div>
    </section>

    {{-- talk with one of our experts --}}
    <section style="background-color: #f3f3f3;">
        <div class="container py-4 ">
            <div class="col-lg-10 mx-auto">

                <div class="text-center">
                    <h3 class="feture-head mb-3">Unleash LinkedIn's Potential with Whipp Digital
                    </h3>
                <p class="feture-pare">
                    Embark on a journey of professional connections with Whipp Digital. LinkedIn isn't just a platform; it's a goldmine of opportunities. Did you know that LinkedIn generates 80% of B2B leads? Our expertise goes beyond routine posting – we sculpt narratives that resonate with decision-makers.                    <br>
                    <br>
                    From thought-provoking articles to eye-catching visuals, we craft content that sparks conversations and drives conversions. Partner with Whipp Digital to unlock LinkedIn's true potential. Let's create a narrative that turns connections into lucrative ventures. Dare to stand out in the corporate realm. Join us and redefine success on LinkedIn.
                </p>
            </div>
            <div class="d-flex  py-3">
                <button class="mx-auto  px-3 cta-btn-btn col-12 col-md-8  col-xl-6  d-inline-block py-2  rounded-5 text-uppercase fw-bold" href="#">TALK WITH ONE OF OUR Social Media Advertising EXPERTS</button>
            </div>
        </div>
        </div>
    </section>
    <section class="border-bottom ">
        <div class="container py-1 custom-text">
            <div class="d-flex flex-column flex-lg-row gap-3 py-5 justify-content-center">
                <div
                    class="mx-sm-auto mx-lg-0 col-12 px-2 px-md-0 col-md-10 col-lg-6 col-xl-5 d-flex flex-column justify-content-center align-items-center">
                    <h3 class=" d-lg-none feture-head mb-0">
                       Unlocking Pinterest's Potential with Whipp Digital




                    </h3>
                        <div class="pt-4 w-100   pb-4 justify-content-start align-items-center d-flex d-lg-none">
                        <span style="width: 28%;border-radius: 8px; display: inline-block;height: 3px;background-color: deepskyblue;"></span>
                    </div>
                    <img width="600" class="lozad" data-src="{{ asset('assets/imgs/whipp_images/Social Media  Marketing/Social Media Advertising/v1/cropped-view-of-female-hands-with-digital-tablet-w-2022-12-16-18-08-43-utc.jpg') }}" alt="" />
                </div>
                <div class="mx-auto mx-lg-0 col-12 px-2 px-md-0 col-md-10 col-lg-6 col-xl-5">
                    <div class="pb-lg-3">
                        <h3 class="d-none d-lg-block feture-head">
                           Unlocking Pinterest's Potential with Whipp Digital



                        </h3>
                               <div class="pt-4 pb-4 justify-content-start align-items-center d-none d-lg-flex">
                            <span style="width: 25%;border-radius: 8px; display: inline-block;height: 3px;background-color: deepskyblue;"></span>
                        </div>
                    </div>
                    <div>
                        <p class="feture-pare">
                            Embark on a journey into Pinterest's visual wonderland, guided by Whipp Digital, where inspiration converges with intent. Pinterest isn't just another platform; it's where dreams morph into actions. As users curate aspirations and plan for the future, we position your brand at the crossroads of imagination and realization. Our skilled team delves into Pinterest's unique dynamics, crafting campaigns that shatter molds. We translate your brand narrative into visuals and narratives that resonate with pinners seeking their next big idea or purchase. With Whipp Digital, become the spark igniting passions, driving actions. Step into Pinterest's vibrant advertising world and let's conjure magic, one pin at a time.

                        </p>
                       
                    </div>
                </div>
                
            </div>
        </div>
    </section>
    <section>
        <div class="container py-1 custom-text">
            <div class="d-flex flex-column-reverse flex-lg-row gap-3 py-5 justify-content-center">
   
                <div class="mx-auto mx-lg-0 col-12 px-2 px-md-0 col-md-10 col-lg-6 col-xl-5">
                    <div class="pb-lg-3">
                        <h3 class="d-none d-lg-block feture-head">
                         

Maximizing Your Facebook Advertising Potential






                        </h3>
                               <div class="pt-4 pb-4 justify-content-start align-items-center d-none d-lg-flex">
                            <span style="width: 25%;border-radius: 8px; display: inline-block;height: 3px;background-color: deepskyblue;"></span>
                        </div>
                    </div>
                    <div>
                        <p class="feture-pare">
                            Enter Facebook's ever-evolving universe guided by Whipp Digital, your companion in deciphering the intricacies of paid advertising on this expansive platform. Facebook isn't just another social site; it's a canvas painted with diverse audiences, each bearing unique aspirations and behaviors. Effective paid Facebook advertising taps into this mosaic, crafting tailored conversations that captivate and convert. Our experienced team, armed with cutting-edge insights and tools, customizes each campaign to resonate with your target demographic. We delve beyond surface metrics, striving for meaningful engagements fostering loyalty and driving conversions. With Whipp Digital, your investment in Facebook ads transforms into a journey nurturing relationships and fostering growth. Explore the Whipp Digital difference and elevate your Facebook advertising strategy.

                        </p>
                       
                    </div>
                </div>
                <div
                class="mx-sm-auto mx-lg-0 col-12 px-2 px-md-0 col-md-10 col-lg-6 col-xl-5 d-flex flex-column justify-content-center align-items-center">
                <h3 class=" d-lg-none feture-head">
                   

Maximizing Your Facebook Advertising Potential



    

                </h3>
                    <div class="pt-4 w-100   pb-4 justify-content-start align-items-center d-flex d-lg-none">
                        <span style="width: 28%;border-radius: 8px; display: inline-block;height: 3px;background-color: deepskyblue;"></span>
                    </div>
                <img width="600" class="lozad" data-src="{{ asset('assets/imgs/whipp_images/Social Media  Marketing/Social Media Advertising/v1/media-advert-2021-09-24-03-25-21-utc.jpg') }}" alt="" />
            </div>
            </div>
        </div>
    </section>
    
    <section class="border-bottom ">
        <div class="container py-1 custom-text">
            <div class="d-flex flex-column flex-lg-row gap-3 py-5 justify-content-center">
                <div
                    class="mx-sm-auto mx-lg-0 col-12 px-2 px-md-0 col-md-10 col-lg-6 col-xl-5 d-flex flex-column justify-content-center align-items-center">
                    <h3 class=" d-lg-none feture-head mb-0">
                       Strategic Facebook Business Advertising Unveiled



                    </h3>
                        <div class="pt-4 w-100   pb-4 justify-content-start align-items-center d-flex d-lg-none">
                        <span style="width: 28%;border-radius: 8px; display: inline-block;height: 3px;background-color: deepskyblue;"></span>
                    </div>
                    <img width="600" class="lozad" data-src="{{ asset('assets/imgs/whipp_images/Social Media  Marketing/Social Media Advertising/v1/young-asia-businesswoman-use-smart-phone-with-blan-2021-09-04-12-49-36-utc.jpg') }}" alt="" />
                </div>
                <div class="mx-auto mx-lg-0 col-12 px-2 px-md-0 col-md-10 col-lg-6 col-xl-5">
                    <div class="pb-lg-3">
                        <h3 class="d-none d-lg-block feture-head">
                           Strategic Facebook Business Advertising Unveiled


                        </h3>
                               <div class="pt-4 pb-4 justify-content-start align-items-center d-none d-lg-flex">
                            <span style="width: 25%;border-radius: 8px; display: inline-block;height: 3px;background-color: deepskyblue;"></span>
                        </div>
                    </div>
                    <div>
                        <p class="feture-pare">
                            Navigate the digital marketplace of Facebook with Whipp Digital as your guide, illuminating the path to impactful business advertising. This realm isn't solely about vast numbers; it's about reaching the right ones. It's the art of understanding your audience's heartbeat and weaving it into your brand's narrative. At Whipp Digital, we acknowledge every business's unique voice, endeavoring to amplify it amidst online noise. Through data-driven strategies and human-centric creativity, our campaigns transcend echo to deep resonance with your desired audience. Step into the realm of Facebook business advertising with us, transforming your brand's presence from visibility to vibrant engagement.

                        </p>
                       
                    </div>
                </div>
                
            </div>
        </div>
    </section>
@endsection
