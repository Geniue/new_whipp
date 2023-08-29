@extends('layouts.index')

@section('title')
<title> Custom Website Design | Whippdigital </title>

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
              Custom Website Design
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
                       Development of Ecommerce Websites



                    </h3>
                    <img width="600" class="lozad" data-src="{{ asset('assets/imgs/whipp_images/web development/Custom Website Design/v1/online-shopping-website-2021-08-26-22-39-43-utc.jpg') }}" alt="" />
                </div>
                <div class="mx-auto mx-lg-0 col-12 px-2 px-md-0 col-md-10 col-lg-6 col-xl-5">
                    <div class="pb-lg-3">
                        <h3 class="d-none d-lg-block feture-head">
                           Development of Ecommerce Websites



                        </h3>
                    </div>
                    <div>
                        <p class="feture-pare">
                            At Whipp Digital, we believe in weaving the digital fabric of your brand's dreams. With the surge in online shopping trends, having a robust ecommerce website isn't just an option – it's a necessity. Development of ecommerce websites is more than just aesthetics and functionality. It’s about understanding the heartbeat of your target audience and curating an experience that resonates with them. Our seasoned team fuses insightful market knowledge with state-of-the-art technology, ensuring that your ecommerce platform is not only visually engaging but also intuitively navigable and optimized for conversions. Dive into the digital realm with us, and watch your brand narrative evolve into a compelling online shopping odyssey. Let's craft your store's digital future, together.

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
                    </div>
                    <div>
                        <p class="feture-pare">
                            In today's hyper-digital landscape, a one-size-fits-all approach to websites just doesn't cut it. At Whipp Digital, we believe that every brand has a unique story to tell, and this narrative deserves a platform that's equally distinctive. Our custom website design service is not about crafting just another website; it’s about tailoring a digital experience that truly resonates with your audience. Drawing on a rich tapestry of design innovation, user experience insight, and cutting-edge technology, our team molds a digital presence that's not only visually captivating but also functionally seamless. Dive into a digital realm curated just for you, where every pixel is purposefully placed and every interaction is immersive. Elevate your online presence with Whipp Digital – where your vision meets our expertise.
                        </p>
                       
                    </div>
                </div>
                <div
                class="mx-sm-auto mx-lg-0 col-12 px-2 px-md-0 col-md-10 col-lg-6 col-xl-5 d-flex flex-column justify-content-center align-items-center">
                <h3 class=" d-lg-none feture-head">
                    Custom Website Design 


                </h3>
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
                       Ecommerce Portal Development




                    </h3>
                    <img width="600" class="lozad" data-src="{{ asset('assets/imgs/whipp_images/web development/Custom Website Design/v1/mobile-and-website-design-and-programing-developme-2021-09-03-01-35-59-utc.jpg') }}" alt="" />
                </div>
                <div class="mx-auto mx-lg-0 col-12 px-2 px-md-0 col-md-10 col-lg-6 col-xl-5">
                    <div class="pb-lg-3">
                        <h3 class="d-none d-lg-block feture-head">
                           Ecommerce Portal Development




                        </h3>
                    </div>
                    <div>
                        <p class="feture-pare">
                            Diving into the world of online retail? We specialize in crafting state-of-the-art ecommerce portal development solutions tailored for your unique business needs. We understand that a thriving ecommerce platform is about more than just a digital storefront—it's about creating seamless, intuitive, and engaging experiences for your customers. Leveraging the latest technological trends and insights, we strive to propel your brand to new heights by designing portals that not only look aesthetically pleasing but also function optimally. With an ever-evolving digital landscape, entrust your ecommerce vision to us, and together, let's transform every click into a memorable journey for your customers. Join us in shaping the future of online shopping.

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
                    </div>
                    <div>
                        <p class="feture-pare">
                            We understand that your small business is unique, with its own story, aspirations, and distinct character. That's why a one-size-fits-all website just won't cut it. Our dedicated team crafts custom websites tailored specifically to the needs and essence of small businesses like yours. Our goal? To amplify your voice, elevate your brand, and empower your online presence. In the digital age, a business's website often serves as its first impression, and we believe every small business deserves a digital footprint that's as original and vibrant as they are. Dive in with Whipp Digital, and let's create a custom online space that genuinely reflects the heart and soul of your business.
                        </p>
                       
                    </div>
                </div>
                <div
                class="mx-sm-auto mx-lg-0 col-12 px-2 px-md-0 col-md-10 col-lg-6 col-xl-5 d-flex flex-column justify-content-center align-items-center">
                <h3 class=" d-lg-none feture-head">
                    Custom Websites for Small Businesses



                </h3>
                <img width="600" class="lozad" data-src="{{ asset('assets/imgs/whipp_images/web development/Custom Website Design/v1/sales-development-2021-09-24-03-32-54-utc.jpg ') }}" alt="" />
            </div>
            </div>
        </div>
    </section>

@endsection
