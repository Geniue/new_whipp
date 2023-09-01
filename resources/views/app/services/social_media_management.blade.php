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
                        Social Media Management



                    </h3>
                        <div class="pt-4 w-100   pb-4 justify-content-start align-items-center d-flex d-lg-none">
                        <span style="width: 28%;border-radius: 8px; display: inline-block;height: 3px;background-color: deepskyblue;"></span>
                    </div>
                    <img width="600" class="lozad" data-src="{{ asset('assets/imgs/whipp_images/Social Media  Marketing/Social Media Management/v1/social-media-marketing-2022-12-15-21-32-50-utc.jpg') }}" alt="" />
                </div>
                <div class="mx-auto mx-lg-0 col-12 px-2 px-md-0 col-md-10 col-lg-6 col-xl-5">
                    <div class="pb-lg-3">
                        <h3 class="d-none d-lg-block feture-head">
                            Social Media Management



                        </h3>
                               <div class="pt-4 pb-4 justify-content-start align-items-center d-none d-lg-flex">
                            <span style="width: 25%;border-radius: 8px; display: inline-block;height: 3px;background-color: deepskyblue;"></span>
                        </div>
                    </div>
                    <div>
                        <p class="feture-pare">
                            Navigating the ever-evolving social media landscape can challenge any business. We specialize in cutting-edge management, ensuring your brand thrives in today's digital age. We craft narratives, spark genuine engagement, and convert followers into advocates. With shifting algorithms and trends, our hands-on approach keeps your brand's voice consistent, yet adaptable. Dive into the digital realm with us, and watch your online community flourish.

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
                            Snapchat Ads Mastery



                        </h3>
                               <div class="pt-4 pb-4 justify-content-start align-items-center d-none d-lg-flex">
                            <span style="width: 25%;border-radius: 8px; display: inline-block;height: 3px;background-color: deepskyblue;"></span>
                        </div>
                    </div>
                    <div>
                        <p class="feture-pare">
                            Marrying Snapchat's unique storytelling power requires both artistry and science, a fusion we excel at. In a diversified digital landscape, Snapchat Ads Manager is pivotal to engage vibrant, authentic connections with younger demographics. Our seasoned team dives deep, understanding user nuances and ad platform potential. With ever-evolving features, a guiding hand is crucial—knowing when to leverage AR lenses, create compelling story ads, and analyze results for refinement. Embark on a journey with us to craft Snapchat campaigns that leave an indelible mark on your audience, forging connections beyond views.
                        </p>
                       
                    </div>
                </div>
                <div
                class="mx-sm-auto mx-lg-0 col-12 px-2 px-md-0 col-md-10 col-lg-6 col-xl-5 d-flex flex-column justify-content-center align-items-center">
                <h3 class=" d-lg-none feture-head">
                    Snapchat Ads Mastery


                </h3>
                    <div class="pt-4 w-100   pb-4 justify-content-start align-items-center d-flex d-lg-none">
                        <span style="width: 28%;border-radius: 8px; display: inline-block;height: 3px;background-color: deepskyblue;"></span>
                    </div>
                <img width="600" class="lozad" data-src="{{ asset('assets/imgs/whipp_images/Social Media  Marketing/Social Media Management/v1/social-media-addiction-2021-09-24-02-56-43-utc.jpg') }}" alt="" />
            </div>
            </div>
        </div>
    </section>

    {{-- talk with one of our experts --}}
    <section style="background-color: #f3f3f3;">
        <div class="container py-4 ">
            <div class="col-lg-10 mx-auto">

                <div class="text-center">
                    <h3 class="feture-head mb-3">LinkedIn Lead Generation by Whipp Digital
                    </h3>
                <p class="feture-pare">
                    Elevate your B2B outreach with our LinkedIn Lead Generation expertise. In a landscape where 80% of B2B leads come from LinkedIn, crafting meaningful connections is imperative. Whipp Digital’s strategists harness data-driven insights to curate compelling content and nurture relationships. We don't just connect; we convert. Our success stories boast an average 35% increase in lead-to-conversion rates.                     <br>
                    <br>
                    Partner with us to unlock LinkedIn's potential, ensuring your brand resonates within professional networks. Don’t settle for just networking; choose Whipp Digital to optimize your B2B presence and tap into the world's most powerful platform for business connections.
                </p>
            </div>
            <div class="d-flex  py-3">
                <button class="mx-auto  px-3 cta-btn-btn col-12 col-md-8  col-xl-6  d-inline-block py-2  rounded-5 text-uppercase fw-bold" href="#">TALK WITH ONE OF OUR Social Media Management EXPERTS</button>
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
                       Crafting Your Social Narrative




                    </h3>
                        <div class="pt-4 w-100   pb-4 justify-content-start align-items-center d-flex d-lg-none">
                        <span style="width: 28%;border-radius: 8px; display: inline-block;height: 3px;background-color: deepskyblue;"></span>
                    </div>
                    <img width="600" class="lozad" data-src="{{ asset('assets/imgs/whipp_images/Social Media  Marketing/Social Media Management/v1/marketing-product-manager-2021-08-29-18-05-21-utc.jpg') }}" alt="" />
                </div>
                <div class="mx-auto mx-lg-0 col-12 px-2 px-md-0 col-md-10 col-lg-6 col-xl-5">
                    <div class="pb-lg-3">
                        <h3 class="d-none d-lg-block feture-head">
                           Crafting Your Social Narrative



                        </h3>
                               <div class="pt-4 pb-4 justify-content-start align-items-center d-none d-lg-flex">
                            <span style="width: 25%;border-radius: 8px; display: inline-block;height: 3px;background-color: deepskyblue;"></span>
                        </div>
                    </div>
                    <div>
                        <p class="feture-pare">
                            The realm of social media is a vast, intricate landscape teeming with potential. Its true power unfurls when guided by skilled hands. Introducing the Social Media Marketing Manager, where our expertise transcends platform mechanics. We empathize with online community heartbeats, predict trend flows, and curate resonating content. A brand's online persona is a potent asset, cultivated and nurtured to amplify its impact. With seasoned social media marketing managers, you're not just gaining a service; you're partnering with digital narrators, weaving your brand's tale in a world shaped by stories. Dive in and co-author your brand's captivating next chapter.

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
                   Mastering Social Media Engagement







                        </h3>
                               <div class="pt-4 pb-4 justify-content-start align-items-center d-none d-lg-flex">
                            <span style="width: 25%;border-radius: 8px; display: inline-block;height: 3px;background-color: deepskyblue;"></span>
                        </div>
                    </div>
                    <div>
                        <p class="feture-pare">
                            In the digital age, a brand's social media approach can define fleeting recognition or lasting impact. Our handling approach transcends mere postings and reactions. We embrace the nuanced dance of online engagement, recognizing platform rhythms and unique audience tempos. Amid the vast social realm, our dedicated team becomes your compass, guiding through conversation intricacies, feedback loops, and trends. Attentiveness and agility are our cornerstones in this space. With our expert touch, your brand doesn't merely exist online; it pulsates, breathes, and flourishes in the vibrant social media world.

                        </p>
                       
                    </div>
                </div>
                <div
                class="mx-sm-auto mx-lg-0 col-12 px-2 px-md-0 col-md-10 col-lg-6 col-xl-5 d-flex flex-column justify-content-center align-items-center">
                <h3 class=" d-lg-none feture-head">
             Mastering Social Media Engagement




    

                </h3>
                    <div class="pt-4 w-100   pb-4 justify-content-start align-items-center d-flex d-lg-none">
                        <span style="width: 28%;border-radius: 8px; display: inline-block;height: 3px;background-color: deepskyblue;"></span>
                    </div>
                <img width="600" class="lozad" data-src="{{ asset('assets/imgs/whipp_images/Social Media  Marketing/Social Media Management/v1/marketing-product-manager-2021-08-29-18-05-21-utc.jpg') }}" alt="" />
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
                       Elevate Your Instagram Strategy




                    </h3>
                        <div class="pt-4 w-100   pb-4 justify-content-start align-items-center d-flex d-lg-none">
                        <span style="width: 28%;border-radius: 8px; display: inline-block;height: 3px;background-color: deepskyblue;"></span>
                    </div>
                    <img width="600" class="lozad" data-src="{{ asset('assets/imgs/whipp_images/Social Media  Marketing/Social Media Management/v1/young-man-in-city-taking-photo-on-digital-camera-t-2021-12-09-17-02-03-utc.jpg ') }}" alt="" />
                </div>
                <div class="mx-auto mx-lg-0 col-12 px-2 px-md-0 col-md-10 col-lg-6 col-xl-5">
                    <div class="pb-lg-3">
                        <h3 class="d-none d-lg-block feture-head">
                           Elevate Your Instagram Strategy



                        </h3>
                               <div class="pt-4 pb-4 justify-content-start align-items-center d-none d-lg-flex">
                            <span style="width: 25%;border-radius: 8px; display: inline-block;height: 3px;background-color: deepskyblue;"></span>
                        </div>
                    </div>
                    <div>
                        <p class="feture-pare">
                            Instagram's visual allure and expansive user base offer a canvas for brands to shine. Yet, true magic transcends mere presence—it's about brilliant distinction. Our Instagram ads expertise reaches beyond placements. We delve into aesthetics and analytics, crafting campaigns that capture attention, evoke emotions, and drive actions. Amid shifting algorithms and discerning audiences, a partner who pivots with precision and creativity is essential. Choosing us means embracing a symphony of art and science, weaving visual storytelling with data-driven strategy. Let's transform your brand's Instagram journey from a post into an unforgettable experience.

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
                    Safeguarding Your Online Reputation







                        </h3>
                               <div class="pt-4 pb-4 justify-content-start align-items-center d-none d-lg-flex">
                            <span style="width: 25%;border-radius: 8px; display: inline-block;height: 3px;background-color: deepskyblue;"></span>
                        </div>
                    </div>
                    <div>
                        <p class="feture-pare">
                            Within the digital expanse, a brand's reputation is sculpted not solely by its voice, but by the resonating chatter of the online community. Our team of online reputation managers grasps this intricate dance of perception. In a world where opinions crystallize as swiftly as tweets, proactive image stewardship is paramount. Our experts move beyond monitoring mentions and feedback; they engage, respond, and mold narratives, transforming challenges into opportunities for connection and growth. Each comment, review, or mention becomes a chance to elevate your brand's legacy. With our guidance, navigate the digital seas confidently, ensuring your reputation gleams as authentically as the values you embrace.

                        </p>
                       
                    </div>
                </div>
                <div
                class="mx-sm-auto mx-lg-0 col-12 px-2 px-md-0 col-md-10 col-lg-6 col-xl-5 d-flex flex-column justify-content-center align-items-center">
                <h3 class=" d-lg-none feture-head">
              Safeguarding Your Online Reputation




    

                </h3>
                    <div class="pt-4 w-100   pb-4 justify-content-start align-items-center d-flex d-lg-none">
                        <span style="width: 28%;border-radius: 8px; display: inline-block;height: 3px;background-color: deepskyblue;"></span>
                    </div>
                <img width="600" class="lozad" data-src="{{ asset('assets/imgs/whipp_images/Social Media  Marketing/Social Media Management/v1/manager-looking-at-many-different-cv-resume-and-ch-2021-12-14-19-30-12-utc.jpeg') }}" alt="" />
            </div>
            </div>
        </div>
    </section>
    
@endsection
