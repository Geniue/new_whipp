@extends('layouts.index')

@section('title')
<title> Website Hosting | Whippdigital </title>

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
              Website Hosting
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
                    class="mx-sm-auto mx-lg-0 col-12 px-2 px-md-0 col-md-10 col-lg-6 col-xl-5 d-flex flex-column justify-content-center align-items-center">
                    <h3 class=" d-lg-none feture-head mb-2">
                      Website Hosting with Whipp Digital




                    </h3>
                    <img width="600" src="{{ asset('assets/imgs/whipp_images/web development/Website Hosting/v1/cloud-storage-cyberspace-protection-hosting-commun-2022-12-16-12-36-04-utc.jpg') }}" alt="" />
                </div>
                <div class="mx-auto mx-lg-0 col-12 px-2 px-md-0 col-md-10 col-lg-6 col-xl-5">
                    <div class="pb-lg-3">
                        <h3 class="d-none d-lg-block feture-head">
                          Website Hosting with Whipp Digital




                        </h3>
                    </div>
                    <div>
                        <p class="feture-pare">
                            At Whipp Digital, we understand that a strong online presence begins with reliable and efficient website hosting. But what does that really mean for you? Think of website hosting as the foundation of your digital home—without a secure and robust foundation, even the most stunning designs can falter. Our hosting services guarantee lightning-fast load times, unbeatable uptime, and top-tier security features. This ensures not only a seamless experience for your visitors but also peace of mind for you. Dive deeper with us and discover how investing in quality hosting can transform your online footprint. Because with Whipp Digital, we don't just host your website; we nurture its digital heartbeat.

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
                            Domain Hosting at Whipp Digital




                        </h3>
                    </div>
                    <div>
                        <p class="feture-pare">
                            Navigating the digital realm can be a maze, but with Whipp Digital's domain hosting services, you've got a guiding star. Domain hosting is much more than just securing a web address—it's about carving out a unique identity in the vast digital landscape. Think of your domain as the address plate on your home, inviting guests with a promise of what's inside. At Whipp Digital, we provide not just domain names, but a comprehensive suite of domain hosting solutions. From intuitive domain management tools to expert guidance on choosing the right name, our approach ensures that your online identity aligns seamlessly with your brand's voice and values. Partner with us and let's lay down the foundation of your digital journey, one domain at a time.
                        </p>
                       
                    </div>
                </div>
                <div
                class="mx-sm-auto mx-lg-0 col-12 px-2 px-md-0 col-md-10 col-lg-6 col-xl-5 d-flex flex-column justify-content-center align-items-center">
                <h3 class=" d-lg-none feture-head">
                    Domain Hosting at Whipp Digital



                </h3>
                <img width="600" src="{{ asset('assets/imgs/whipp_images/web development/Website Hosting/v1/wooden-mannequin-holding-wooden-cube-with-the-word-2023-03-11-04-57-01-utc.jpg') }}" alt="" />
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
                    class="mx-sm-auto mx-lg-0 col-12 px-2 px-md-0 col-md-10 col-lg-6 col-xl-5 d-flex flex-column justify-content-center align-items-center">
                    <h3 class=" d-lg-none feture-head mb-2">
                        Cloud Web Hosting with Whipp Digital




                    </h3>
                    <img width="600" src="{{ asset('assets/imgs/whipp_images/web development/Website Hosting/v1/electrician-doing-server-system-probing-2023-07-19-22-47-38-utc.jpg') }}" alt="" />
                </div>
                <div class="mx-auto mx-lg-0 col-12 px-2 px-md-0 col-md-10 col-lg-6 col-xl-5">
                    <div class="pb-lg-3">
                        <h3 class="d-none d-lg-block feture-head">
                            Cloud Web Hosting with Whipp Digital




                        </h3>
                    </div>
                    <div>
                        <p class="feture-pare">
                            In the ever-evolving realm of digital, the cloud is more than just a buzzword—it's the future of web hosting. Whipp Digital's cloud web hosting services offer a symphony of flexibility, scalability, and reliability. Picture this: instead of relying on a single server, your website lives on a network of interconnected virtual servers, drawing resources from a pool of shared power. This means unparalleled uptime, swift load times, and the ability to handle unexpected traffic surges with grace. But why choose Whipp Digital's cloud hosting? Our team doesn't just provide a service; we empower your digital vision, ensuring that as your ambitions soar, your hosting environment rises to meet them. Journey into the cloud with us, and experience web hosting that's as limitless as your dreams.

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
                           Shared Web Hosting at Whipp Digital





                        </h3>
                    </div>
                    <div>
                        <p class="feture-pare">
                            Dipping your toes into the vast ocean of the online world? Shared web hosting might be your perfect diving board. At Whipp Digital, our shared web hosting service is crafted for budding entrepreneurs, startups, and small businesses aiming for a robust online presence without the hefty price tag. Imagine living in a grand digital apartment complex, where resources like storage, bandwidth, and processing power are shared among residents. That's shared hosting, and with it, you get the benefits of a high-performance platform without the complexities of managing it alone. But here's where Whipp Digital stands out: our commitment to ensuring each "resident" gets their fair share, bolstered by top-notch security measures and 24/7 expert support. Choose shared, choose smart, and let Whipp Digital be your trusted partner in this exhilarating digital voyage.
                        </p>
                       
                    </div>
                </div>
                <div
                class="mx-sm-auto mx-lg-0 col-12 px-2 px-md-0 col-md-10 col-lg-6 col-xl-5 d-flex flex-column justify-content-center align-items-center">
                <h3 class=" d-lg-none feture-head">
                   Shared Web Hosting at Whipp Digital




                </h3>
                <img width="600" src="{{ asset('assets/imgs/whipp_images/web development/Website Hosting/v1/network-server-room-2021-08-26-15-56-15-utc.jpg') }}" alt="" />
            </div>
            </div>
        </div>
    </section>

@endsection
