@extends('layouts.index')

@section('title')
<title> Amazon Seller Consulting | Whippdigital </title>

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
            Amazon Seller Consulting
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
                Amazon Seller Consulting
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
                            class="breadcrumb_last" aria-current="page"> Amazon Seller Consulting</span></span></p>
                <div class="d-flex align-items-center mt-3">
                    <span class="w-100" style="height: 1px;
                    background: #b1b1b1;
                    margin-right: 12px;"></span>
                    <div class="d-flex align-items-center" style="gap: 10px">
                        <span class="ren-tign-clip"></span>
                        <span class="ren-tign-clip" style="background-color: #0e2332;"></span>
                        <span class="ren-tign-clip" ></span>
                    </div>
                    <span class="w-100" style="height: 1px;
                    background: #b1b1b1;
                    margin-left: 12px;"></span>
                </div>
            </div>
        </div>
    </div>
    <!-- TRUSTED BY BANNER STARTS HERE -->
    @include('app.static_components.trusted_banner')
    <!-- TRUSTED BY BANNER ENDS HERE -->

    <!-- WHY SERVICE STARTS HERE -->
    <section class="border-bottom">
        <div class="container py-1 custom-text">
            <div class="d-flex flex-column flex-lg-row gap-3 py-5 justify-content-center">
                <div
                    class="mx-sm-auto mx-lg-0 col-12 px-2 px-md-0 col-md-10 col-lg-6 col-xl-5 d-flex flex-column justify-content-center align-items-center">
                    <h3 class=" d-lg-none feture-head mb-0">
                        Amazon Seller Consulting
                    </h3>
                        <div class="pt-4 w-100   pb-4 justify-content-start align-items-center d-flex d-lg-none">
                        <span style="width: 28%;border-radius: 8px; display: inline-block;height: 3px;background-color: deepskyblue;"></span>
                    </div>
                    <img width="600"  class="lozad" data-src="{{ asset('assets/imgs/whipp_images/Amazon Marketing/Amazon Seller Consulting/v1/business-finance-accounting-investment-consultin-2023-05-09-16-41-13-utc.jpg') }}" alt="" />
                </div>
                <div class="mx-auto mx-lg-0 col-12 px-2 px-md-0 col-md-10 col-lg-6 col-xl-5">
                    <div class="pb-lg-3">
                        <h3 class="d-none d-lg-block feture-head">
                            Amazon Seller Consulting
                        </h3>
                              <div class="pt-4 pb-4 justify-content-start align-items-center d-none d-lg-flex">
                            <span style="width: 25%;border-radius: 8px; display: inline-block;height: 3px;background-color: deepskyblue;"></span>
                        </div>
                    </div>
                    <div>
                        <p class="feture-pare">
                            Navigating the expansive Amazon marketplace can be a challenge for sellers, whether newcomers or seasoned pros. This service aims to demystify this e-commerce giant for you. Seasoned experts, equipped with the latest insights and industry trends, will guide you in optimizing your product listings, enhancing your brand presence, and understanding the complexities of Amazon's algorithm. Whether launching a new product or looking to elevate your existing sales, tailored strategies are designed to help you leverage the platform to its fullest potential. Dive in, and let's transform your Amazon journey from overwhelming to outstanding.
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
                            Amazon Listing Consultant
                        </h3>
                              <div class="pt-4 pb-4 justify-content-start align-items-center d-none d-lg-flex">
                            <span style="width: 25%;border-radius: 8px; display: inline-block;height: 3px;background-color: deepskyblue;"></span>
                        </div>
                    </div>
                    <div>
                        <p class="feture-pare">
                            Crafting the perfect product listing on Amazon involves more than just adding images and descriptions; it's a nuanced blend of art and science. This service ensures your product not only survives but thrives amidst the vast Amazon marketplace. Armed with expertise in keyword optimization, high-quality imagery, and compelling content creation, this approach guarantees that your listings are tailored to both attract buyers and rank well in Amazon's search algorithms. Tapping into this reservoir of knowledge means transforming from just another seller into a standout brand on Amazon. Dive in and let's craft listings that don't just catch the eye, but also drive conversions.
                        </p>
                       
                    </div>
                </div>
                <div
                class="mx-sm-auto mx-lg-0 col-12 px-2 px-md-0 col-md-10 col-lg-6 col-xl-5 d-flex flex-column justify-content-center align-items-center">
                <h3 class=" d-lg-none feture-head">
                    Amazon Listing Consultant
                </h3>
                    <div class="pt-4 w-100   pb-4 justify-content-start align-items-center d-flex d-lg-none">
                        <span style="width: 28%;border-radius: 8px; display: inline-block;height: 3px;background-color: deepskyblue;"></span>
                    </div>
                <img width="600"  class="lozad" data-src="{{ asset('assets/imgs/whipp_images/Amazon Marketing/Amazon Seller Consulting/v1/medical-prescription-2021-08-26-15-34-39-utc.jpg') }}" alt="" />
            </div>
            </div>
        </div>
    </section>

    {{-- talk with one of our experts --}}
    <section style="background-color: #f3f3f3;">
        <div class="container py-4 ">
            <div class="col-lg-10 mx-auto">

                <div class="text-center">
                    <h3 class="feture-head mb-3">Unlock the Potential of Your Amazon Journey with Data-Driven Insight</h3>
                <p class="feture-pare">
                    Did you know that there are over 2.5 million active sellers on Amazon, and yet, only around 10% of them make over $100,000 in annual sales? The Amazon marketplace isn't just crowded; it's fiercely competitive.                    
                    This isn't a space where you can simply list your product and hope for the best. Success on Amazon requires a sophisticated understanding of ever-changing algorithms, buyer behaviors, and competitive strategies.                 </p>
            </div>
            <div class="d-flex  py-3">
                <button class="mx-auto  px-3 cta-btn-btn col-12 col-md-8  col-xl-6  d-inline-block py-2  rounded-5 text-uppercase fw-bold" href="#">TALK WITH ONE OF OUR  Amazon Seller Consulting EXPERTS</button>
            </div>
        </div>
        </div>
    </section>
    <section class="border-bottom">
        <div class="container py-1 custom-text">
            <div class="d-flex flex-column flex-lg-row gap-3 py-5 justify-content-center">
                <div
                    class="mx-sm-auto mx-lg-0 col-12 px-2 px-md-0 col-md-10 col-lg-6 col-xl-5 d-flex flex-column justify-content-center align-items-center">
                    <h3 class=" d-lg-none feture-head mb-0">
                        Amazon Suspension Consulting

                    </h3>
                        <div class="pt-4 w-100   pb-4 justify-content-start align-items-center d-flex d-lg-none">
                        <span style="width: 28%;border-radius: 8px; display: inline-block;height: 3px;background-color: deepskyblue;"></span>
                    </div>
                    <img width="600"  class="lozad" data-src="{{ asset('assets/imgs/whipp_images/Amazon Marketing/Amazon Seller Consulting/v1/office-hands-laptop-and-business-people-teamwork-2023-03-29-21-34-32-utc.jpg') }}" alt="" />
                </div>
                <div class="mx-auto mx-lg-0 col-12 px-2 px-md-0 col-md-10 col-lg-6 col-xl-5">
                    <div class="pb-lg-3">
                        <h3 class="d-none d-lg-block feture-head">
                            Amazon Suspension Consulting
                        </h3>
                              <div class="pt-4 pb-4 justify-content-start align-items-center d-none d-lg-flex">
                            <span style="width: 25%;border-radius: 8px; display: inline-block;height: 3px;background-color: deepskyblue;"></span>
                        </div>
                    </div>
                    <div>
                        <p class="feture-pare">
                            Dealing with unexpected suspensions on Amazon adds another layer of complexity to an already challenging marketplace. This service specializes in understanding the intricacies of Amazon's policies and the numerous reasons an account might face suspension. Whether you're a beginner caught unaware or an experienced seller looking for guidance, expertise is on hand to help you restore your selling privileges quickly. More than just resolving issues, this service acts as your advocate in the complicated realm of Amazon e-commerce. Alongside assistance in reinstating your account, you gain invaluable insights to prevent future pitfalls. Move forward with confidence, diving deep into Amazon's framework.
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
                            Amazon Product Consulting

                        </h3>
                              <div class="pt-4 pb-4 justify-content-start align-items-center d-none d-lg-flex">
                            <span style="width: 25%;border-radius: 8px; display: inline-block;height: 3px;background-color: deepskyblue;"></span>
                        </div>
                    </div>
                    <div>
                        <p class="feture-pare">
                            Mastering the intricate ecosystem of Amazon is a formidable challenge for brands and entrepreneurs. This service offers a unique blend of expertise, experience, and a human touch to help you conquer this digital retail titan. Whether launching a new product, refining existing listings, or strategizing to boost sales and reviews, you'll find customized solutions to fit your needs. Going beyond algorithms and analytics, the focus here is also on the nuances of buyer behavior and the ever-changing landscape of the Amazon marketplace. Transform complexities into opportunities and place your product in its deserved spotlight. The goal is to make your Amazon journey not merely successful, but also insightful and empowering.
                        </p>
                       
                    </div>
                </div>
                <div
                class="mx-sm-auto mx-lg-0 col-12 px-2 px-md-0 col-md-10 col-lg-6 col-xl-5 d-flex flex-column justify-content-center align-items-center">
                <h3 class=" d-lg-none feture-head">
                    Amazon Product Consulting

                </h3>
                    <div class="pt-4 w-100   pb-4 justify-content-start align-items-center d-flex d-lg-none">
                        <span style="width: 28%;border-radius: 8px; display: inline-block;height: 3px;background-color: deepskyblue;"></span>
                    </div>
                <img width="600"  class="lozad" data-src="{{ asset('assets/imgs/whipp_images/Amazon Marketing/Amazon Seller Consulting/v1/podium-products-to-simulate-the-factory-system-2022-12-16-11-54-19-utc.jpg') }}" alt="" />
            </div>
            </div>
        </div>
    </section>
    <section class="">
        <div class="container py-1 custom-text">
            <div class="d-flex flex-column flex-lg-row gap-3 py-5 justify-content-center">
                <div
                    class="mx-sm-auto mx-lg-0 col-12 px-2 px-md-0 col-md-10 col-lg-6 col-xl-5 d-flex flex-column justify-content-center align-items-center">
                    <h3 class=" d-lg-none feture-head mb-0">
                        Amazon Brand Consulting

                    </h3>
                        <div class="pt-4 w-100   pb-4 justify-content-start align-items-center d-flex d-lg-none">
                        <span style="width: 28%;border-radius: 8px; display: inline-block;height: 3px;background-color: deepskyblue;"></span>
                    </div>
                    <img width="600"  class="lozad" data-src="{{ asset('assets/imgs/whipp_images/Amazon Marketing/Amazon Seller Consulting/v1/real-estate-insurance-agents-are-using-tablet-to-r-2021-08-27-16-15-41-utc.jpg') }}" alt="" />
                </div>
                <div class="mx-auto mx-lg-0 col-12 px-2 px-md-0 col-md-10 col-lg-6 col-xl-5">
                    <div class="pb-lg-3">
                        <h3 class="d-none d-lg-block feture-head">
                            Amazon Brand Consulting
                        </h3>
                              <div class="pt-4 pb-4 justify-content-start align-items-center d-none d-lg-flex">
                            <span style="width: 25%;border-radius: 8px; display: inline-block;height: 3px;background-color: deepskyblue;"></span>
                        </div>
                    </div>
                    <div>
                        <p class="feture-pare">
                            Thriving on the world's largest e-commerce platform demands more than just a good product; it calls for a comprehensive brand strategy. This service goes beyond mere navigation of Amazon's intricate landscape, focusing also on algorithm intricacies, enhanced brand content, and effective PPC strategies. Dedicated to ensuring your products not only reach but resonate with their target audience, this approach incorporates the latest industry insights and expertise. It has helped numerous brands scale operations, improve visibility, and boost sales. The complexities of Amazon are simplified, enabling a partnership where insight meets action and your brand's full potential is realized.
                        </p>
                       
                    </div>
                </div>
                
            </div>
        </div>
    </section>

@endsection
