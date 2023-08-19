@extends('layouts.index')

@section('title')
<title> E-Mail Marketing Serivces  | Whippdigital </title>

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
          E-Mail Marketing Serivces
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
              E-Mail Marketing Serivces
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
                     E-Mail Advertising with Whipp Digital





                    </h3>
                    <img width="450" src="{{ asset('assets/imgs/Group-166@2x-min.png') }}" alt="" />
                </div>
                <div class="mx-auto mx-lg-0 col-12 px-2 px-md-0 col-md-10 col-lg-6 col-xl-5">
                    <div class="pb-lg-3">
                        <h3 class="d-none d-lg-block feture-head">
                         E-Mail Advertising with Whipp Digital





                        </h3>
                    </div>
                    <div>
                        <p class="feture-pare">
                            In today's fast-paced digital landscape, e-mail remains an incredibly potent channel for meaningful connections. At Whipp Digital, we recognize that e-mail advertising isn't just about sending messages—it's about weaving a narrative, igniting conversations, and fostering genuine relationships with your audience. Drawing from our rich expertise and cutting-edge tools, we craft campaigns that are not only visually captivating but also deeply personalized. By harnessing the true essence of your brand, we turn every e-mail sent into an opportunity for engagement. Dive into the world of e-mail advertising with us, and discover the profound impact it can have on your brand's narrative and bottom line.

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
                         Whipp Digital Email Marketing Services





                        </h3>
                    </div>
                    <div>
                        <p class="feture-pare">
                            At Whipp Digital, we understand that in today's dynamic digital landscape, email remains one of the most powerful and direct channels of communication with your audience. Our tailor-made email marketing services are not just about sending out messages; they're about crafting compelling narratives that resonate with your target audience. Drawing from rich analytics and informed strategies, we design campaigns that captivate, convert, and create loyal brand advocates. Whether you're looking to nurture leads, drive sales, or strengthen customer relationships, our expertise ensures that every email is a valuable touchpoint, turning your subscribers into lifelong customers. Dive in with Whipp Digital, and let's transform your inbox interactions into tangible results.
                        </p>
                       
                    </div>
                </div>
                <div
                class="mx-sm-auto mx-lg-0 col-11 px-2 px-md-0 col-md-10 col-lg-6 col-xl-5 d-flex flex-column justify-content-center align-items-center">
                <h3 class=" d-lg-none feture-head">
                 Whipp Digital Email Marketing Services




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
                        Whipp Digital: Your Premier Email Marketing Agency





                    </h3>
                    <img width="450" src="{{ asset('assets/imgs/Group-166@2x-min.png') }}" alt="" />
                </div>
                <div class="mx-auto mx-lg-0 col-12 px-2 px-md-0 col-md-10 col-lg-6 col-xl-5">
                    <div class="pb-lg-3">
                        <h3 class="d-none d-lg-block feture-head">
                            Whipp Digital: Your Premier Email Marketing Agency





                        </h3>
                    </div>
                    <div>
                        <p class="feture-pare">
                            At Whipp Digital, we don't just send emails; we craft experiences. Recognized as a leading email marketing agency, we've mastered the art of connecting with audiences in the most personal digital space - their inbox. Email marketing is more than just hitting "send"; it's about understanding your audience, crafting compelling content, and optimizing for conversions. Every click tells a story, and with our data-driven strategies, cutting-edge designs, and insightful analytics, we ensure that the narrative leads to your brand's growth. Dive deep with Whipp Digital, and discover the difference between sending emails and fostering genuine, impactful connections.

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
                           Direct Email Marketing with Whipp Digital






                        </h3>
                    </div>
                    <div>
                        <p class="feture-pare">
                            At Whipp Digital, we believe that direct email marketing is more than just sending out messages—it's about forging genuine connections. In the era of fleeting digital impressions, a well-crafted email can create an intimate conversation between your brand and its audience. We harness the power of personalization, data-driven insights, and captivating designs to ensure that every email strikes the right chord. Whether you're looking to nurture leads, announce a new product, or foster customer loyalty, our direct email marketing campaigns are tailored to resonate, engage, and drive action. Dive into the world of email with Whipp Digital, where every click opens a new chapter of customer engagement.
                        </p>
                       
                    </div>
                </div>
                <div
                class="mx-sm-auto mx-lg-0 col-11 px-2 px-md-0 col-md-10 col-lg-6 col-xl-5 d-flex flex-column justify-content-center align-items-center">
                <h3 class=" d-lg-none feture-head">
                   Direct Email Marketing with Whipp Digital





                </h3>
                <img width="450" src="{{ asset('assets/imgs/Group-166@2x-min.png') }}" alt="" />
            </div>
            </div>
        </div>
    </section>

@endsection
