@extends('layouts.index')

@section('title')
<title> Social Media Management | Whippdigital </title>

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
          Social Media Management 
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
              Social Media Management 
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
                        Social Media Management at Whipp Digital


                    </h3>
                    <img width="600" src="{{ asset('assets/imgs/whipp_images/Social Media  Marketing/Social Media Management/v1/social-media-marketing-2022-12-15-21-32-50-utc.jpg') }}" alt="" />
                </div>
                <div class="mx-auto mx-lg-0 col-12 px-2 px-md-0 col-md-10 col-lg-6 col-xl-5">
                    <div class="pb-lg-3">
                        <h3 class="d-none d-lg-block feture-head">
                            Social Media Management at Whipp Digital


                        </h3>
                    </div>
                    <div>
                        <p class="feture-pare">
                            Navigating the ever-evolving landscape of social media can be a challenging endeavor for any business. At Whipp Digital, we specialize in cutting-edge social media management, ensuring your brand not only resonates but thrives in today's digital age. Our team understands that it's not just about posting regular updates; it's about crafting a narrative, sparking genuine engagement, and converting casual followers into passionate brand advocates. With algorithms shifting and trends changing at lightning speed, our hands-on approach ensures your brand's voice remains consistent, yet adaptable. Dive into the vast potential of the digital realm with Whipp Digital at your side, and watch your online community flourish.

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
                            Snapchat Ads Manager at Whipp Digital



                        </h3>
                    </div>
                    <div>
                        <p class="feture-pare">
                            Harnessing the unique storytelling power of Snapchat is both an art and a science, and Whipp Digital is your master artist-meets-scientist. As the digital realm diversifies, Snapchat Ads Manager emerges as a pivotal tool for businesses to engage younger demographics with vibrancy and authenticity. Our seasoned team at Whipp Digital doesn’t just “do” Snapchat; we immerse ourselves in its world, understanding the nuanced language of its users and the potential of its ad platform. With features constantly evolving, it's crucial to have a guiding hand that knows when to utilize AR lenses, how to create compelling story ads, and most importantly, how to analyze the results for continual refinement. Journey with Whipp Digital, and let's craft Snapchat campaigns that don't just get views but leave an indelible mark on your audience.
                        </p>
                       
                    </div>
                </div>
                <div
                class="mx-sm-auto mx-lg-0 col-12 px-2 px-md-0 col-md-10 col-lg-6 col-xl-5 d-flex flex-column justify-content-center align-items-center">
                <h3 class=" d-lg-none feture-head">
                    Snapchat Ads Manager at Whipp Digital


                </h3>
                <img width="600" src="{{ asset('assets/imgs/whipp_images/Social Media  Marketing/Social Media Management/v1/social-media-addiction-2021-09-24-02-56-43-utc.jpg') }}" alt="" />
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
                       Social Media Marketing Manager at Whipp Digital



                    </h3>
                    <img width="600" src="{{ asset('assets/imgs/whipp_images/Social Media  Marketing/Social Media Management/v1/marketing-product-manager-2021-08-29-18-05-21-utc.jpg') }}" alt="" />
                </div>
                <div class="mx-auto mx-lg-0 col-12 px-2 px-md-0 col-md-10 col-lg-6 col-xl-5">
                    <div class="pb-lg-3">
                        <h3 class="d-none d-lg-block feture-head">
                           Social Media Marketing Manager at Whipp Digital


                        </h3>
                    </div>
                    <div>
                        <p class="feture-pare">
                            The realm of social media is vast, intricate, and brimming with potential; but only when navigated by skilled hands does its true power unfurl. Enter the Social Media Marketing Manager at Whipp Digital. Our expertise is more than just understanding the mechanics of platforms; it's about empathizing with the heartbeat of online communities, predicting the ebb and flow of trends, and curating content that resonates. A brand's online persona can be its most potent asset, and our mission is to cultivate, nurture, and amplify that persona to the world. With Whipp Digital's seasoned social media marketing managers, you're not just gaining a service; you're partnering with digital narrators who weave your brand's tale in a world where stories shape perceptions. Dive in, and let's co-author your brand's next captivating chapter.

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
                     Social Media Handling at Whipp Digital






                        </h3>
                    </div>
                    <div>
                        <p class="feture-pare">
                            In the digital age, the way a brand handles its social media can make all the difference between fleeting recognition and lasting impact. At Whipp Digital, our approach to social media handling goes beyond mere postings and reactions. We embrace the nuanced dance of online engagement, understanding that each platform has its rhythm, each audience its unique tempo. While the vastness of the social realm can be daunting, our dedicated team acts as your compass, guiding you through the intricacies of online conversations, feedback loops, and content trends. We believe that in this space, attentiveness and agility are key. With Whipp Digital's expert touch, your brand won't just exist online; it will pulse, breathe, and flourish in the vibrant world of social media.

                        </p>
                       
                    </div>
                </div>
                <div
                class="mx-sm-auto mx-lg-0 col-12 px-2 px-md-0 col-md-10 col-lg-6 col-xl-5 d-flex flex-column justify-content-center align-items-center">
                <h3 class=" d-lg-none feture-head">
               Social Media Handling at Whipp Digital



    

                </h3>
                <img width="600" src="{{ asset('assets/imgs/whipp_images/Social Media  Marketing/Social Media Management/v1/marketing-product-manager-2021-08-29-18-05-21-utc.jpg') }}" alt="" />
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
                        Manage Instagram Ads with Whipp Digital



                    </h3>
                    <img width="600" src="{{ asset('assets/imgs/whipp_images/Social Media  Marketing/Social Media Management/v1/young-man-in-city-taking-photo-on-digital-camera-t-2021-12-09-17-02-03-utc.jpg ') }}" alt="" />
                </div>
                <div class="mx-auto mx-lg-0 col-12 px-2 px-md-0 col-md-10 col-lg-6 col-xl-5">
                    <div class="pb-lg-3">
                        <h3 class="d-none d-lg-block feture-head">
                            Manage Instagram Ads with Whipp Digital


                        </h3>
                    </div>
                    <div>
                        <p class="feture-pare">
                            Instagram, with its visual allure and vast user base, presents a tapestry of opportunities for brands to shine. Yet, the magic lies not just in being present, but in standing out brilliantly. Whipp Digital's expertise in managing Instagram ads goes far beyond mere placements. We delve deep into the aesthetics and analytics, crafting campaigns that don’t just capture attention, but evoke emotions and drive actions. With algorithms in constant flux and audiences becoming ever more discerning, it's essential to have a partner who can pivot with precision and creativity. When you choose Whipp Digital to manage your Instagram ads, you're choosing a symphony of art and science, a blend of visual storytelling and data-driven strategy. Let's transform your brand's Instagram journey from just another post to an unforgettable experience.

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
                     Online Reputation Managers at Whipp Digital






                        </h3>
                    </div>
                    <div>
                        <p class="feture-pare">
                            In the vast expanse of the digital realm, a brand's reputation isn't just built on what it says, but also on the echoing chatter of the online community. Whipp Digital's team of online reputation managers understand this delicate dance of perception. We know that in a world where opinions form at the speed of a tweet, proactive stewardship of your brand's image is paramount. Our experts don't just monitor mentions and feedback; they engage, respond, and shape narratives, turning potential challenges into opportunities for connection and growth. Every comment, review, or mention is a chance to enhance your brand's legacy, and with Whipp Digital by your side, you can navigate the digital seas with confidence, ensuring your reputation shines as authentically and brilliantly as the values you uphold.

                        </p>
                       
                    </div>
                </div>
                <div
                class="mx-sm-auto mx-lg-0 col-12 px-2 px-md-0 col-md-10 col-lg-6 col-xl-5 d-flex flex-column justify-content-center align-items-center">
                <h3 class=" d-lg-none feture-head">
               Online Reputation Managers at Whipp Digital



    

                </h3>
                <img width="600" src="{{ asset('assets/imgs/whipp_images/Social Media  Marketing/Social Media Management/v1/manager-looking-at-many-different-cv-resume-and-ch-2021-12-14-19-30-12-utc.jpeg') }}" alt="" />
            </div>
            </div>
        </div>
    </section>
    
@endsection
