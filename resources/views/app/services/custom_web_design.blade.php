@extends('layouts.index')

@section('title')
Custom Website Design | {{ env("APP_NAME") }} 

@endsection

@section('meta')


<meta name="title" content="Custom Website Design | {{ env("APP_NAME") }}  ">
<meta name="description" content="Build a compelling ecommerce website that turns visitors into customers. Blend market intelligence and cutting-edge technology for an engaging shopping experience. Shape the digital future of your store with us.">
<meta name="keywords" content="ecommerce website, online shopping, market intelligence, cutting-edge technology, brand narrative, digital journey, engaging shopping experience, ecommerce platform">

<link rel="canonical" href="{{ url()->current() }}">

<meta property="og:site_name" content="Custom Website Design | {{ env("APP_NAME") }} ">
<meta property="og:title" content="Custom Website Design | {{ env("APP_NAME") }} ">
<meta property="og:description" content="Build a compelling ecommerce website that turns visitors into customers. Blend market intelligence and cutting-edge technology for an engaging shopping experience. Shape the digital future of your store with us.">
<meta property="og:url" content="{{ url()->current() }}">
<meta property="og:type" content="website">
<meta property="og:image" content="{{ asset('assets/imgs/whipp_images/web development/Custom Website Design/v1/online-shopping-website-2021-08-26-22-39-43-utc.jpg') }}">
<meta property="fb:admins" content="admin">
<meta name="twitter:title" content="Custom Website Design | {{ env("APP_NAME") }} ">
<meta name="twitter:description" content="Build a compelling ecommerce website that turns visitors into customers. Blend market intelligence and cutting-edge technology for an engaging shopping experience. Shape the digital future of your store with us.">
<meta name="twitter:image"  content="{{ asset('assets/imgs/whipp_images/web development/Custom Website Design/v1/online-shopping-website-2021-08-26-22-39-43-utc.jpg') }}">
<meta name="twitter:url" content="{{ url()->current() }}">
<meta name="twitter:card" content="summary">

<meta itemprop="name" content="Custom Website Design | {{ env("APP_NAME") }} ">
<meta itemprop="url" content="{{ url()->current() }}">
<meta itemprop="thumbnailUrl" content="{{ asset('assets/imgs/whipp_images/web development/Custom Website Design/v1/online-shopping-website-2021-08-26-22-39-43-utc.jpg') }}">
<meta itemprop="image" content="{{ asset('assets/imgs/whipp_images/web development/Custom Website Design/v1/online-shopping-website-2021-08-26-22-39-43-utc.jpg') }}">
<link rel="image_src"   href="{{ asset('assets/imgs/whipp_images/web development/Custom Website Design/v1/online-shopping-website-2021-08-26-22-39-43-utc.jpg') }}">


<meta name="abstract" content="{{ env("APP_NAME") }}">
<meta name="author" content="admin">
<meta name="classification" content="Blog">
<meta name="copyright" content="{{ env("APP_NAME") }} - All rights Reserved.">
<meta name="distribution" content="Global">
<meta name="language" content="en-GB">
<meta name="publisher" content="{{ env("APP_NAME") }}">
<meta name="rating" content="General">
<meta name="resource-type" content="Document">
<meta name="revisit-after" content="3">
<meta name="subject" content="Blog">
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
          Custom Website Design
        </h2>
         
        <div class="text-center py-4">
            <button  class="iwantgrow_btn lets-talk-btn col-5 col-md-4 col-lg-2 d-inline-block py-2 fs-5 rounded-5" href="#">Let's Go</button>
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
              Custom Website Design
            </h2>
              
                 <div class="text-center py-4">
                <button  class="iwantgrow_btn  lets-talk-btn col-5 col-md-4 col-lg-2 d-inline-block py-2 fs-5 rounded-5" >Let's Go</button>
            </div>
        </div>
    </section>



    <div class="wp-brdcb">
        <div class="wrap">
            <div>
                <p id="breadcrumbs" class="fs-5"><span><span><a class="fw-medium custom-text-2" href="/">Home</a></span> » <span
                            class="breadcrumb_last" aria-current="page"> Custom Website Design</span></span></p>
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
    <section class="border-bottom">
        <div class="container py-1 custom-text">
            <div class="d-flex flex-column flex-lg-row gap-3 py-5 justify-content-center">
                <div
                    class="mx-sm-auto mx-lg-0 col-12 px-2 px-md-0 col-md-10 col-lg-6 col-xl-5 d-flex flex-column justify-content-center align-items-center">
                    <h3 class=" d-lg-none feture-head mb-0">
                       Development of Ecommerce Websites



                    </h3>
                        <div class="pt-4 w-100   pb-4 justify-content-start align-items-center d-flex d-lg-none">
                        <span style="width: 28%;border-radius: 8px; display: inline-block;height: 3px;background-color: deepskyblue;"></span>
                    </div>
                    <img width="600" class="lozad" data-src="{{ asset('assets/imgs/whipp_images/web development/Custom Website Design/v1/online-shopping-website-2021-08-26-22-39-43-utc.jpg') }}" alt="" />
                </div>
                <div class="mx-auto mx-lg-0 col-12 px-2 px-md-0 col-md-10 col-lg-6 col-xl-5">
                    <div class="pb-lg-3">
                        <h3 class="d-none d-lg-block feture-head">
                           Development of Ecommerce Websites



                        </h3>
                              <div class="pt-4 pb-4 justify-content-start align-items-center d-none d-lg-flex">
                            <span style="width: 25%;border-radius: 8px; display: inline-block;height: 3px;background-color: deepskyblue;"></span>
                        </div>
                    </div>
                    <div>
                        <p class="feture-pare">
                            In the rapidly evolving landscape of online shopping, a robust ecommerce website is no longer optional but a necessity. Creating such a site involves more than just aesthetic appeal and functional features. It's about deeply understanding the needs and desires of your target audience and crafting an experience that resonates with them. With a blend of market intelligence and cutting-edge technology, your ecommerce platform can be both visually compelling and intuitively navigable, optimized for turning visitors into customers. Embark on this digital journey to see your brand narrative transform into an engaging online shopping experience. Together, let's shape the digital future of your store.

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
                            Custom Website Design 



                        </h3>
                              <div class="pt-4 pb-4 justify-content-start align-items-center d-none d-lg-flex">
                            <span style="width: 25%;border-radius: 8px; display: inline-block;height: 3px;background-color: deepskyblue;"></span>
                        </div>
                    </div>
                    <div>
                        <p class="feture-pare">
                            In the modern digital world, the cookie-cutter approach to websites falls short of expectations. Crafting a website is not merely about putting together a digital façade; it's about creating a unique digital experience that resonates deeply with your audience. Utilizing a blend of innovative design, user experience expertise, and state-of-the-art technology, the end result is a digital presence that is visually stunning and functionally seamless. Step into a tailor-made digital realm, where each pixel serves a purpose and every interaction adds value. Elevate your brand by crafting an online presence that’s a true reflection of your vision.
                        </p>
                       
                    </div>
                </div>
                <div
                class="mx-sm-auto mx-lg-0 col-12 px-2 px-md-0 col-md-10 col-lg-6 col-xl-5 d-flex flex-column justify-content-center align-items-center">
                <h3 class=" d-lg-none feture-head">
                    Custom Website Design 


                </h3>
                    <div class="pt-4 w-100   pb-4 justify-content-start align-items-center d-flex d-lg-none">
                        <span style="width: 28%;border-radius: 8px; display: inline-block;height: 3px;background-color: deepskyblue;"></span>
                    </div>
                <img width="600" class="lozad" data-src="{{ asset('assets/imgs/whipp_images/web development/Custom Website Design/v1/developing-programmer-development-website-2023-08-17-19-40-02-utc.jpg') }}" alt="" />
            </div>
            </div>
        </div>
    </section>

    {{-- talk with one of our experts --}}
    <section style="background-color: #f3f3f3;">
        <div class="container py-4 ">
            <div class="col-lg-10 mx-auto">

                <div class="text-center">
                    <h3 class="feture-head mb-3">The Overlooked Importance of User Experience in Ecommerce
                    </h3>
                <p class="feture-pare">
                    In the hyper-competitive world of ecommerce, it's not enough to simply have an online presence. According to a study by Forrester Research, a well-designed user interface can increase a website's conversion rate by up to 200%, and a better UX design could yield conversion rates up to 400%.                    <br>
                    <br>
                    Your ecommerce platform needs to be more than just functional; it needs to provide an intuitive and engaging user experience that guides your customers effortlessly from browsing to checkout. The quality of this experience can be the difference between a one-time visitor and a loyal customer. Don't let poor UX be the bottleneck in your ecommerce success. Invest in a platform designed with the user in mind.
                </p>
            </div>
            <div class="d-flex  py-3">
                <button class="mx-auto  px-3 cta-btn-btn col-12 col-md-7 fw-bold col-xl-5   d-inline-block py-2 rounded-5 text-uppercase iwantgrow_btn " href="#">TALK WITH ONE OF OUR  <br> Custom Website Design EXPERTS</button>
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
                       Ecommerce Portal Development




                    </h3>
                        <div class="pt-4 w-100   pb-4 justify-content-start align-items-center d-flex d-lg-none">
                        <span style="width: 28%;border-radius: 8px; display: inline-block;height: 3px;background-color: deepskyblue;"></span>
                    </div>
                    <img width="600" class="lozad" data-src="{{ asset('assets/imgs/whipp_images/web development/Custom Website Design/v1/mobile-and-website-design-and-programing-developme-2021-09-03-01-35-59-utc.jpg') }}" alt="" />
                </div>
                <div class="mx-auto mx-lg-0 col-12 px-2 px-md-0 col-md-10 col-lg-6 col-xl-5">
                    <div class="pb-lg-3">
                        <h3 class="d-none d-lg-block feture-head">
                           Ecommerce Portal Development




                        </h3>
                              <div class="pt-4 pb-4 justify-content-start align-items-center d-none d-lg-flex">
                            <span style="width: 25%;border-radius: 8px; display: inline-block;height: 3px;background-color: deepskyblue;"></span>
                        </div>
                    </div>
                    <div>
                        <p class="feture-pare">
                            Ready to make your mark in online retail? Specializing in state-of-the-art ecommerce portal solutions, we focus on meeting your unique business needs. A successful ecommerce platform transcends being merely a digital storefront; it's about crafting seamless, intuitive, and engaging customer experiences. By harnessing the latest technological innovations, the aim is to elevate your brand through portals that are both visually compelling and functionally robust. In a landscape that constantly shifts with digital trends, trust in a vision that transforms every customer click into a memorable journey. Let's collaboratively shape the future of online shopping.

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
                            Custom Websites for Small Businesses




                        </h3>
                              <div class="pt-4 pb-4 justify-content-start align-items-center d-none d-lg-flex">
                            <span style="width: 25%;border-radius: 8px; display: inline-block;height: 3px;background-color: deepskyblue;"></span>
                        </div>
                    </div>
                    <div>
                        <p class="feture-pare">
                            Recognizing the unique character and aspirations of your small business, a generic website simply won't do justice to your brand. Tailoring digital solutions specifically to the nuances of small businesses, the aim is to amplify your voice, elevate your identity, and empower your online presence. In an era where a website often serves as the first touchpoint for potential customers, it's crucial that your digital footprint is as unique and vibrant as your business itself. Take the plunge into a customized online environment that authentically reflects the essence of what your business stands for.
                        </p>
                       
                    </div>
                </div>
                <div
                class="mx-sm-auto mx-lg-0 col-12 px-2 px-md-0 col-md-10 col-lg-6 col-xl-5 d-flex flex-column justify-content-center align-items-center">
                <h3 class=" d-lg-none feture-head">
                    Custom Websites for Small Businesses



                </h3>
                    <div class="pt-4 w-100   pb-4 justify-content-start align-items-center d-flex d-lg-none">
                        <span style="width: 28%;border-radius: 8px; display: inline-block;height: 3px;background-color: deepskyblue;"></span>
                    </div>
                <img width="600" class="lozad" data-src="{{ asset('assets/imgs/whipp_images/web development/Custom Website Design/v1/sales-development-2021-09-24-03-32-54-utc.jpg ') }}" alt="" />
            </div>
            </div>
        </div>
    </section>

@endsection
