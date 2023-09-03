@extends('layouts.index')

@section('title')
     Amazon Marketing | Whippdigital 

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
            Amazon Marketing
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
               Amazon Marketing
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
                            class="breadcrumb_last" aria-current="page">Amazon Marketing</span></span></p>
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
                        Your Premier Amazon PPC Agency
                    </h3>
                    <div class="pt-4 w-100   pb-4 justify-content-start align-items-center d-flex d-lg-none">
                        <span style="width: 28%;border-radius: 8px; display: inline-block;height: 3px;background-color: deepskyblue;"></span>
                    </div>
                    <img width="600" class="lozad" data-src="{{ asset('assets/imgs/whipp_images/Amazon Marketing/Amazon Marketing/v1/marketing-agency-85-2022-10-26-06-14-31-utc.jpg') }}" alt="" />
                </div>
                <div class="mx-auto mx-lg-0 col-12 px-2 px-md-0 col-md-10 col-lg-6 col-xl-5">
                    <div class="pb-lg-3">
                        <h3 class="d-none d-lg-block feture-head">
                            Your Premier
                        
                             Amazon PPC Agency
                        </h3>
                        <div class="pt-4 pb-4 justify-content-start align-items-center d-none d-lg-flex">
                            <span style="width: 25%;border-radius: 8px; display: inline-block;height: 3px;background-color: deepskyblue;"></span>
                        </div>
                    </div>
                    <div>
                        <p class="feture-pare">
                            Understanding the intricacies of Amazon PPC is just the tip of the iceberg. Meticulously crafted and optimized campaigns can propel brands into Amazon's limelight. Pay-per-click advertising on Amazon goes beyond merely showcasing your products to potential customers; it's about crafting an experience that resonates with their needs and desires. Leveraging data-driven strategies, in-depth knowledge of Amazon's algorithm, and a team of passionate PPC experts, the goal is to ensure your products don't merely appear but truly stand out amidst a sea of competitors.

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
                            Pioneers in Amazon FBA Marketing
                        </h3>
                        <div class="pt-4 pb-4 justify-content-start align-items-center d-none d-lg-flex">
                            <span style="width: 25%;border-radius: 8px; display: inline-block;height: 3px;background-color: deepskyblue;"></span>
                        </div>
                    </div>
                    <div>
                        <p class="feture-pare">
                            Setting out on an Amazon FBA venture can be thrilling, yet even top-quality products can vanish in the marketplace without an effective marketing strategy. Specialization in Amazon FBA marketing entails understanding the unique challenges and opportunities presented by Fulfillment by Amazon. It's not just about navigating the complexities of FBA; it involves crafting compelling narratives for your products, optimizing listings for peak visibility, and launching strategic advertising campaigns to boost sales. Utilizing data analytics and keenly observing consumer trends, the aim is to ensure your FBA business doesn't merely survive but whippdigitals and leaves a lasting impact.

                        </p>
                       
                    </div>
                </div>
                <div
                class="mx-sm-auto mx-lg-0 col-12 px-2 px-md-0 col-md-10 col-lg-6 col-xl-5 d-flex flex-column justify-content-center align-items-center">
                <h3 class=" d-lg-none feture-head">
                    Pioneers in Amazon FBA Marketing
                </h3>
                <div class="pt-4 w-100   pb-4 justify-content-start align-items-center d-flex d-lg-none">
                    <span style="width: 28%;border-radius: 8px; display: inline-block;height: 3px;background-color: deepskyblue;"></span>
                </div>
                <img width="600" class="lozad" data-src="{{ asset('assets/imgs/whipp_images/Amazon Marketing/Amazon Marketing/v1/affiliate-2022-11-12-01-39-05-utc.jpg') }}" alt="" />
            </div>
            </div>
        </div>
    </section>

    {{-- talk with one of our experts --}}
    <section style="background-color: #f3f3f3;">
        <div class="container py-4 ">
            <div class="col-lg-10 mx-auto">

                <div class="text-center">
                    <h3 class="feture-head mb-3">Don't Let Your Brand Become a Needle in Amazon's Haystack</h3>
                <p class="feture-pare">
                    Statistics indicate that as of 2021, Amazon boasted over 3.4 million active sellers globally. While this makes Amazon a land of boundless opportunity, it's also a marketplace where your products could easily be overshadowed. 
                    More alarmingly, only 10% of Amazon sellers make over $100,000 in sales. 
                    It's not enough to just exist on Amazon; your brand needs to resonate, stand out, and, most importantly, sell.
                    <br>
                    <br>
                    Success is determined not just by the quality of your product, but by how strategically you position it. Mastering Amazon PPC and FBA marketing, while also leveraging the power of social media, isn't just an option—it's a necessity. Don't become a mere statistic; let's redefine what success looks like for your brand.
                </p>
            </div>
            <div class="d-flex  py-3">
                <button class="mx-auto  px-3 cta-btn-btn col-12 col-md-8 fw-bold col-xl-6  d-inline-block py-2 rounded-5 text-uppercase fw-bold iwantgrow_btn" >TALK WITH ONE OF OUR Amazon Marketing EXPERTS</button>
            </div>
        </div>
        </div>
    </section>
    <section class="border ">
        <div class="container py-1 custom-text">
            <div class="d-flex flex-column flex-lg-row gap-3 py-5 justify-content-center">
                <div
                    class="mx-sm-auto mx-lg-0 col-12 px-2 px-md-0 col-md-10 col-lg-6 col-xl-5 d-flex flex-column justify-content-center align-items-center">
                    <h3 class=" d-lg-none feture-head mb-0">
                        The Nexus of Amazon and Social Media Marketing
                    </h3>
                    <div class="pt-4 w-100   pb-4 justify-content-start align-items-center d-flex d-lg-none">
                        <span style="width: 28%;border-radius: 8px; display: inline-block;height: 3px;background-color: deepskyblue;"></span>
                    </div>
                    <img width="600" class="lozad" data-src="{{ asset('assets/imgs/whipp_images/Amazon Marketing/Amazon Marketing/v1/social-media-marketing-words-on-wooden-blocks-2022-12-16-11-13-15-utc.jpg') }}" alt="" />
                </div>
                <div class="mx-auto mx-lg-0 col-12 px-2 px-md-0 col-md-10 col-lg-6 col-xl-5">
                    <div class="pb-lg-3">
                        <h3 class="d-none d-lg-block feture-head">
                            The Nexus of Amazon and Social Media Marketing
                        </h3>
                        <div class="pt-4 pb-4 justify-content-start align-items-center d-none d-lg-flex">
                            <span style="width: 25%;border-radius: 8px; display: inline-block;height: 3px;background-color: deepskyblue;"></span>
                        </div>
                        
                    </div>
                    <div>
                        <p class="feture-pare">
                            In the current digital landscape, fusing Amazon with social media is not just beneficial—it's crucial. Mastering the art of Amazon social media marketing allows for the creation of synergies that amplify brand visibility like never before. Although Amazon serves as a massive sales platform, products gain real traction when integrated strategically with social media. This methodology combines impactful storytelling with the kinetic energy of platforms such as Instagram, Facebook, and TikTok, channeling targeted traffic directly to your Amazon listings. By capitalizing on the virality of social media and Amazon's trustworthiness, a comprehensive marketing strategy can be formed—one that not only draws attention but also converts. This makes your Amazon journey a narrative that resonates across the social sphere, inspiring conversations and sparking sales.

                        </p>
                       
                    </div>
                </div>
                
            </div>
        </div>
    </section>

 
@endsection
