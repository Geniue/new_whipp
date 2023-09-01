@extends('layouts.index')

@section('title')
<title> Social Media Brand Management    | Whippdigital </title>

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
          Social Media Brand Management
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
              Social Media Brand Management
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
                    <h3 class=" d-lg-none feture-head mb-0">
                     Revolutionizing Social Media Brand Management



                    </h3>
                        <div class="pt-4 w-100   pb-4 justify-content-start align-items-center d-flex d-lg-none">
                        <span style="width: 28%;border-radius: 8px; display: inline-block;height: 3px;background-color: deepskyblue;"></span>
                    </div>
                    <img width="600" class="lozad" data-src="{{ asset('assets/imgs/whipp_images/Social Media  Marketing/Social Media Brand Management/v1/reputation-management-2022-11-01-00-05-44-utc.jpg') }}" alt="" />
                </div>
                <div class="mx-auto mx-lg-0 col-12 px-2 px-md-0 col-md-10 col-lg-6 col-xl-5">
                    <div class="pb-lg-3">
                        <h3 class="d-none d-lg-block feture-head">
                         Revolutionizing Social Media Brand Management



                        </h3>
                               <div class="pt-4 pb-4 justify-content-start align-items-center d-none d-lg-flex">
                            <span style="width: 25%;border-radius: 8px; display: inline-block;height: 3px;background-color: deepskyblue;"></span>
                        </div>
                    </div>
                    <div>
                        <p class="feture-pare">
                            In today's digital era, a strong social media presence is indispensable, paralleling real-world reputation. We specialize in crafting dynamic brand narratives that deeply resonate. By harnessing the latest tools and trends, our team delves into your business's core values, aligning every post, comment, and interaction with your brand's voice. Amid the ever-evolving digital landscape, our adaptive strategies ensure your brand remains not just relevant, but truly distinctive. Whether you're a startup or an enterprise, our tailored social media management offers transformative insights. Immerse yourself in the digital realm, and watch your brand story unfold with unprecedented impact.

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
                            Elevating Brand & Reputation Management



                        </h3>
                               <div class="pt-4 pb-4 justify-content-start align-items-center d-none d-lg-flex">
                            <span style="width: 25%;border-radius: 8px; display: inline-block;height: 3px;background-color: deepskyblue;"></span>
                        </div>
                    </div>
                    <div>
                        <p class="feture-pare">
                            In a landscape where a solitary online review can uplift or mar your brand's image, our expertise in brand and reputation management becomes your essential companion. We see your brand as more than a logo; it's an embodiment of trust, perceptions, and expectations from your audience. Our adept team crafts strategic blueprints tailored for your brand, emphasizing both proactive and reactive measures. Beyond shaping positive narratives, we deftly navigate and mitigate potential threats to your brand's integrity. By blending digital tools with human insights, we ensure your reputation remains robust amidst the unpredictable digital realm. With our support, witness your brand's reputation ascend to unprecedented heights, always anchored in trust and credibility.
                        </p>
                       
                    </div>
                </div>
                <div
                class="mx-sm-auto mx-lg-0 col-12 px-2 px-md-0 col-md-10 col-lg-6 col-xl-5 d-flex flex-column justify-content-center align-items-center">
                <h3 class=" d-lg-none feture-head">
                    Elevating Brand & Reputation Management


                </h3>
                    <div class="pt-4 w-100   pb-4 justify-content-start align-items-center d-flex d-lg-none">
                        <span style="width: 28%;border-radius: 8px; display: inline-block;height: 3px;background-color: deepskyblue;"></span>
                    </div>
                <img width="600" class="lozad" data-src="{{ asset('assets/imgs/whipp_images/Social Media  Marketing/Social Media Brand Management/v1/social-media-influencer-holding-like-2022-02-02-04-49-27-utc.jpg') }}" alt="" />
            </div>
            </div>
        </div>
    </section>

    {{-- talk with one of our experts --}}
    <section style="background-color: #f3f3f3;">
        <div class="container py-4 ">
            <div class="col-lg-10 mx-auto">

                <div class="text-center">
                    <h3 class="feture-head mb-3">Maximize Your Digital Influence</h3>
                <p class="feture-pare">
                    Harness the power of social media! In today's digital landscape, your brand's online presence is pivotal, shaping perceptions. At Whipp Digital, we sculpt captivating brand stories that resonate deeply. Our adept team wields cutting-edge tools, aligning each interaction with your brand's essence. As the digital realm evolves, we adapt to ensure your brand doesn't just survive but thrives.                    <br>
                    <br>
                    Whether you're a startup or an enterprise, our tailored approach transforms your online identity. Dive into the digital sphere with Whipp Whether you're a startup or an enterprise, our tailored approach transforms your online identity. Dive into the digital sphere with Whipp Digital and see your brand narrative unfurl like never before. Take control of your digital destiny!

                </p>
            </div>
            <div class="d-flex  py-3">
                <button class="mx-auto  px-3 cta-btn-btn col-12 col-md-8  col-xl-6  d-inline-block py-2  rounded-5 text-uppercase fw-bold" href="#">TALK WITH ONE OF OUR Social Media Brand Management EXPERTS</button>
            </div>
        </div>
        </div>
    </section>
@endsection
