@extends('layouts.index')

@section('title')
     Website Hosting | Whippdigital 

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
          Website Hosting
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
              Website Hosting
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
                            class="breadcrumb_last" aria-current="page">Website Hosting</span></span></p>
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
                    Website Hosting



                    </h3>
                        <div class="pt-4 w-100   pb-4 justify-content-start align-items-center d-flex d-lg-none">
                        <span style="width: 28%;border-radius: 8px; display: inline-block;height: 3px;background-color: deepskyblue;"></span>
                    </div>
                    <img width="600" class="lozad" data-src="{{ asset('assets/imgs/whipp_images/web development/Website Hosting/v1/cloud-storage-cyberspace-protection-hosting-commun-2022-12-16-12-36-04-utc.jpg') }}" alt="" />
                </div>
                <div class="mx-auto mx-lg-0 col-12 px-2 px-md-0 col-md-10 col-lg-6 col-xl-5">
                    <div class="pb-lg-3">
                        <h3 class="d-none d-lg-block feture-head">
                        Website Hosting



                        </h3>
                               <div class="pt-4 pb-4 justify-content-start align-items-center d-none d-lg-flex">
                            <span style="width: 25%;border-radius: 8px; display: inline-block;height: 3px;background-color: deepskyblue;"></span>
                        </div>
                    </div>
                    <div>
                        <p class="feture-pare">
                            Understanding that a strong online presence begins with reliable hosting is crucial. Consider it your digital home's foundation—without it, even stunning designs falter. Our services assure lightning-fast load times, unbeatable uptime, and top-tier security. This guarantees seamless visitor experiences and peace of mind. Dive deeper and see how quality hosting transforms your online footprint. We don't just host; we nurture your site's digital heartbeat.

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
                            Domain Hosting




                        </h3>
                               <div class="pt-4 pb-4 justify-content-start align-items-center d-none d-lg-flex">
                            <span style="width: 25%;border-radius: 8px; display: inline-block;height: 3px;background-color: deepskyblue;"></span>
                        </div>
                    </div>
                    <div>
                        <p class="feture-pare">
                            Navigating the digital landscape can be perplexing, yet with our domain hosting services, you find a guiding star. Beyond securing a web address, it's about shaping a unique identity. Your domain acts as your digital address, enticing visitors with a glimpse of what's inside. We offer more than names; our suite of solutions spans intuitive domain management tools to expert naming guidance. This ensures your online identity harmonizes effortlessly with your brand. Partner with us to establish the foundation of your digital journey, one domain at a time.
                        </p>
                       
                    </div>
                </div>
                <div
                class="mx-sm-auto mx-lg-0 col-12 px-2 px-md-0 col-md-10 col-lg-6 col-xl-5 d-flex flex-column justify-content-center align-items-center">
                <h3 class=" d-lg-none feture-head">
                    Domain Hosting



                </h3>
                    <div class="pt-4 w-100   pb-4 justify-content-start align-items-center d-flex d-lg-none">
                        <span style="width: 28%;border-radius: 8px; display: inline-block;height: 3px;background-color: deepskyblue;"></span>
                    </div>
                <img width="600" class="lozad" data-src="{{ asset('assets/imgs/whipp_images/web development/Website Hosting/v1/wooden-mannequin-holding-wooden-cube-with-the-word-2023-03-11-04-57-01-utc.jpg') }}" alt="" />
            </div>
            </div>
        </div>
    </section>

    {{-- talk with one of our experts --}}
    <section style="background-color: #f3f3f3;">
        <div class="container py-4 ">
            <div class="col-lg-10 mx-auto">

                <div class="text-center">
                    <h3 class="feture-head mb-3">Empower Your Digital Realm: Hosting Excellence by Whipp Digital</h3>
                <p class="feture-pare">
                    Elevate your online presence with Whipp Digital's hosting solutions. Web hosting is the cornerstone of digital success. Imagine your site as a home—without a strong foundation, even the best designs falter. Our services promise rapid load times, unmatched uptime, and top-tier security. For domains, we're your guiding star. Your domain isn't just an address; it's your digital identity.                    <br>
                    <br>
                    We offer comprehensive solutions, aligning your online presence with your brand's essence. Cloud hosting is the future, offering flexibility and reliability. Imagine a network of interconnected servers, ensuring uptime and handling surges seamlessly. Shared hosting? It's your budget-friendly dive into digital waters. Resources shared, complexities eased. Whipp Digital nurtures your journey.
                </p>
            </div>
            <div class="d-flex  py-3">
                <button class="mx-auto  px-3 cta-btn-btn col-12 col-md-8 fw-bold col-xl-6  d-inline-block py-2 rounded-5 text-uppercase iwantgrow_btn " href="#">TALK WITH ONE OF OUR Website Hosting EXPERTS</button>
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
                     Cloud Web Hosting




                    </h3>
                        <div class="pt-4 w-100   pb-4 justify-content-start align-items-center d-flex d-lg-none">
                        <span style="width: 28%;border-radius: 8px; display: inline-block;height: 3px;background-color: deepskyblue;"></span>
                    </div>
                    <img width="600" class="lozad" data-src="{{ asset('assets/imgs/whipp_images/web development/Website Hosting/v1/electrician-doing-server-system-probing-2023-07-19-22-47-38-utc.jpg') }}" alt="" />
                </div>
                <div class="mx-auto mx-lg-0 col-12 px-2 px-md-0 col-md-10 col-lg-6 col-xl-5">
                    <div class="pb-lg-3">
                        <h3 class="d-none d-lg-block feture-head">
                         Cloud Web Hosting




                        </h3>
                               <div class="pt-4 pb-4 justify-content-start align-items-center d-none d-lg-flex">
                            <span style="width: 25%;border-radius: 8px; display: inline-block;height: 3px;background-color: deepskyblue;"></span>
                        </div>
                    </div>
                    <div>
                        <p class="feture-pare">
                            In the ever-evolving digital landscape, the cloud signifies more than a mere buzzword—it's the future of web hosting. Our cloud web hosting services harmonize flexibility, scalability, and reliability. Imagine this: your website isn't confined to a single server, but whippdigital on an interconnected network of virtual servers, tapping into a shared resource pool. This translates to exceptional uptime, rapid load times, and the capacity to gracefully handle unexpected surges. Why choose our cloud hosting? We're not just a service provider; we empower your digital vision. As your ambitions soar, your hosting environment rises to meet them. Embark on a limitless web hosting journey with us.

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
                          Shared Web Hosting





                        </h3>
                               <div class="pt-4 pb-4 justify-content-start align-items-center d-none d-lg-flex">
                            <span style="width: 25%;border-radius: 8px; display: inline-block;height: 3px;background-color: deepskyblue;"></span>
                        </div>
                    </div>
                    <div>
                        <p class="feture-pare">
                            Venturing into the vast online world? Shared web hosting serves as your diving board. Crafted for startups, budding entrepreneurs, and small businesses, our service delivers a robust online presence sans the hefty cost. Envision a digital apartment complex, where storage, bandwidth, and power are shared resources. This form of hosting offers high-performance benefits without the solitude of management. Where we shine? Our commitment to equity. Each "resident" receives their fair share, fortified by top-tier security and 24/7 support. Opt for shared hosting, choose wisely, and embark on an exciting digital journey with Whipp Digital as your reliable partner.
                        </p>
                       
                    </div>
                </div>
                <div
                class="mx-sm-auto mx-lg-0 col-12 px-2 px-md-0 col-md-10 col-lg-6 col-xl-5 d-flex flex-column justify-content-center align-items-center">
                <h3 class=" d-lg-none feture-head">
                  Shared Web Hosting




                </h3>
                    <div class="pt-4 w-100   pb-4 justify-content-start align-items-center d-flex d-lg-none">
                        <span style="width: 28%;border-radius: 8px; display: inline-block;height: 3px;background-color: deepskyblue;"></span>
                    </div>
                <img width="600" class="lozad" data-src="{{ asset('assets/imgs/whipp_images/web development/Website Hosting/v1/network-server-room-2021-08-26-15-56-15-utc.jpg') }}" alt="" />
            </div>
            </div>
        </div>
    </section>

@endsection
