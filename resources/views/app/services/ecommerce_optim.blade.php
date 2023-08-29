@extends('layouts.index')

@section('title')
<title> Ecommerce Optimization | Whippdigital </title>

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
            Ecommerce Optimization
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
                Ecommerce Optimization
            </h2>
              
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
        <div class="container py-1 custom-text">
            <div class="d-flex flex-column flex-lg-row gap-3 py-5 justify-content-center">
                <div
                    class="mx-sm-auto mx-lg-0 col-12 px-2 px-md-0 col-md-10 col-lg-6 col-xl-5 d-flex flex-column justify-content-center align-items-center">
                    <h3 class=" d-lg-none feture-head mb-2">
                        Ecommerce Optimization
                    </h3>
                    <img width="600" class="lozad" data-src="{{ asset('assets/imgs/whipp_images/Ecommerce/Ecommerce Optimization/v1/seo-search-engine-optimization-2022-11-01-00-05-21-utc.jpg') }}" alt="" />
                </div>
                <div class="mx-auto mx-lg-0 col-12 px-2 px-md-0 col-md-10 col-lg-6 col-xl-5">
                    <div class="pb-lg-3">
                        <h3 class="d-none d-lg-block feture-head">
                            Ecommerce Optimization
                        </h3>
                    </div>
                    <div>
                        <p class="feture-pare">
                            We Dive deep into the world of ecommerce optimization, where we fine-tune every pixel and parse every byte to ensure your digital storefront doesn’t just exist but thrives in this digital age. We understand that every click, every scroll, and every interaction is an opportunity to captivate your audience. With our insightful data-driven strategies, we optimize user experiences, streamline checkout processes, and cultivate engagement to transform casual browsers into loyal customers. 
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
                            
Ecommerce Conversion Rate Optimization

                        </h3>
                    </div>
                    <div>
                        <p class="feture-pare">
                            In the ever-evolving world of ecommerce, it's not just about driving traffic to your website; it's about converting that traffic into loyal customers. Ecommerce Conversion Rate Optimization (CRO) is a powerful tool that delves deep into the nuances of your online store, identifying areas of friction and uncovering opportunities to enhance the buyer journey. With our tailored strategies, we illuminate those key moments where potential customers decide to either proceed with a purchase or abandon their cart. By utilizing data-driven insights, A/B testing, and a touch of digital wizardry, we transform your online storefront into a high-converting machine. Dive deeper with Whipp Digital and discover how optimizing even the smallest details can lead to significant increases in sales and profitability.
    
                        </p>
                       
                    </div>
                </div>
                <div
                class="mx-sm-auto mx-lg-0 col-12 px-2 px-md-0 col-md-10 col-lg-6 col-xl-5 d-flex flex-column justify-content-center align-items-center">
                <h3 class=" d-lg-none feture-head">

                    Ecommerce Conversion Rate Optimization

                </h3>
                <img width="600" class="lozad" data-src="{{ asset('assets/imgs/whipp_images/Ecommerce/Ecommerce Optimization/v1/asian-seo-manager-writing-on-glass-with-illustrati-2022-12-16-17-11-33-utc.jpg') }}" alt="" />
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
        <div class="container py-1 custom-text">
            <div class="d-flex flex-column flex-lg-row gap-3 py-5 justify-content-center">
                <div
                    class="mx-sm-auto mx-lg-0 col-12 px-2 px-md-0 col-md-10 col-lg-6 col-xl-5 d-flex flex-column justify-content-center align-items-center">
                    <h3 class=" d-lg-none feture-head mb-2">
                        Shopify SEO Optimization

                    </h3>
                    <img width="600" class="lozad" data-src="{{ asset('assets/imgs/whipp_images/Ecommerce/Ecommerce Optimization/v1/magnifying-glass-and-gear-teeth-with-the-letters-s-2023-04-18-00-58-58-utc.jpg') }}" alt="" />
                </div>
                <div class="mx-auto mx-lg-0 col-12 px-2 px-md-0 col-md-10 col-lg-6 col-xl-5">
                    <div class="pb-lg-3">
                        <h3 class="d-none d-lg-block feture-head">
                            Shopify SEO Optimization
                        </h3>
                    </div>
                    <div>
                        <p class="feture-pare">
                            Having a visually appealing Shopify store is only half the battle. Driving organic traffic and turning casual browsers into loyal customers requires an in-depth approach to Shopify SEO optimization. Unlike other platforms, Shopify has its unique quirks and features that, when leveraged correctly, can propel your store to the top of search results. Our seasoned team dives deep into keyword research, site structure, content strategies, and technical SEO tailored specifically for Shopify. We don't just optimize; we strategize, ensuring that your store not only ranks higher but also captures the right audience, leading to increased sales and brand visibility. 
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
                            Ecommerce Content Optimization

                        </h3>
                    </div>
                    <div>
                        <p class="feture-pare">
                            The heart of a thriving e-commerce business is not just the products you sell, but how you present them. Ecommerce content optimization is about more than sprinkling in keywords; it's about crafting compelling, relevant, and searchable narratives around your products that resonate with your target audience. Think of it this way: your online store is your virtual showroom, and just as a physical store puts thought into window displays and product placements, your digital content needs to be meticulously curated to maximize visibility and conversions. With the ever-evolving algorithms of search engines and the diverse purchasing habits of consumers, it's essential to keep content fresh, optimized, and engaging.

                        </p>
                       
                    </div>
                </div>
                <div
                class="mx-sm-auto mx-lg-0 col-12 px-2 px-md-0 col-md-10 col-lg-6 col-xl-5 d-flex flex-column justify-content-center align-items-center">
                <h3 class=" d-lg-none feture-head">
                    Ecommerce Content Optimization

                </h3>
                <img width="600" class="lozad" data-src="{{ asset('assets/imgs/whipp_images/Ecommerce/Ecommerce Optimization/v1/web-optimization-concept-design-2021-08-26-22-30-02-utc.jpg') }}" alt="" />
            </div>
            </div>
        </div>
    </section>
 
@endsection
