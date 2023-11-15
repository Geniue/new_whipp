@extends('layouts.index')

@section('title')
    Social Media Reputation Management | {{ env("APP_NAME") }} 
@endsection


@section('meta')


<meta name="title" content="Social Media Reputation Management | {{ env("APP_NAME") }} ">
<meta name="description" content="Empower your brand's online presence with proactive reputation management. Craft your digital narrative, amplify positive feedback, and strategically position your brand for success. Safeguard your excellence with us.">
<meta name="keywords" content="Online Reputation Management, digital era, brand perception, proactive reputation management, positive feedback, cutting-edge tools, industry experience, authenticity, brand values, digital presence, excellence">

<link rel="canonical" href="{{ url()->current() }}">

<meta property="og:site_name" content="Social Media Reputation Management | {{ env("APP_NAME") }}">
<meta property="og:title" content="Social Media Reputation Management | {{ env("APP_NAME") }}">
<meta property="og:description" content="Empower your brand's online presence with proactive reputation management. Craft your digital narrative, amplify positive feedback, and strategically position your brand for success. Safeguard your excellence with us.">
<meta property="og:url" content="{{ url()->current() }}">
<meta property="og:type" content="website">
<meta property="og:image" content="{{ asset('assets/imgs/whipp_images/Online Reputation Management/Social Media Reputation Management/v1/notebook-written-build-trust-in-your-brand-2022-11-08-08-37-19-utc.jpg') }}">
<meta property="fb:admins" content="admin">
<meta name="twitter:title" content="Social Media Reputation Management | {{ env("APP_NAME") }} ">
<meta name="twitter:description" content="Empower your brand's online presence with proactive reputation management. Craft your digital narrative, amplify positive feedback, and strategically position your brand for success. Safeguard your excellence with us.">
<meta name="twitter:image" content="{{ asset('assets/imgs/whipp_images/Online Reputation Management/Social Media Reputation Management/v1/notebook-written-build-trust-in-your-brand-2022-11-08-08-37-19-utc.jpg') }}">
<meta name="twitter:url" content="{{ url()->current() }}">
<meta name="twitter:card" content="summary">

<meta itemprop="name" content="Social Media Reputation Management | {{ env("APP_NAME") }}">
<meta itemprop="url" content="{{ url()->current() }}">
<meta itemprop="thumbnailUrl" content="{{ asset('assets/imgs/whipp_images/Online Reputation Management/Social Media Reputation Management/v1/notebook-written-build-trust-in-your-brand-2022-11-08-08-37-19-utc.jpg') }}">
<meta itemprop="image" content="{{ asset('assets/imgs/whipp_images/Online Reputation Management/Social Media Reputation Management/v1/notebook-written-build-trust-in-your-brand-2022-11-08-08-37-19-utc.jpg') }}">
<link rel="image_src"   href="{{ asset('assets/imgs/whipp_images/Online Reputation Management/Social Media Reputation Management/v1/notebook-written-build-trust-in-your-brand-2022-11-08-08-37-19-utc.jpg') }}">


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
           Social Media Reputation Management
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
               Social Media Reputation Management
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
                            class="breadcrumb_last" aria-current="page">Social Media Reputation Management</span></span></p>
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
Empower Your Brand's Online Presence

</h3>
<div class="pt-4 w-100   pb-4 justify-content-start align-items-center d-flex d-lg-none">
    <span style="width: 28%;border-radius: 8px; display: inline-block;height: 3px;background-color: deepskyblue;"></span>
</div>
                    <img width="600" class="lozad" data-src="{{ asset('assets/imgs/whipp_images/Online Reputation Management/Social Media Reputation Management/v1/notebook-written-build-trust-in-your-brand-2022-11-08-08-37-19-utc.jpg') }}" alt="" />
                </div>
                <div class="mx-auto mx-lg-0 col-12 px-2 px-md-0 col-md-10 col-lg-6 col-xl-5">
                    <div class="pb-lg-3">
                        <h3 class="d-none d-lg-block feture-head">
    Empower Your Brand's Online Presence

</h3>
<div class="pt-4 pb-4 justify-content-start align-items-center d-none d-lg-flex">
    <span style="width: 25%;border-radius: 8px; display: inline-block;height: 3px;background-color: deepskyblue;"></span>
</div>
                    </div>
                    <div>
                        <p class="feture-pare">
                            In today's digital era, your online standing can either bolster your success or leave you vulnerable. Recognizing the power of every tweet, review, and comment to influence your brand's perception, we comprehend the importance of proactive reputation management. Our devoted team of online reputation managers goes beyond monitoring; they actively craft your digital narrative. Utilizing cutting-edge tools and extensive industry experience, we tirelessly amplify positive feedback, address concerns with finesse, and strategically position your brand. Allow us to safeguard your digital presence, ensuring authenticity aligns with your values and prowess. Your online reputation is more than positive—it's a reflection of your excellence.

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
                    Mastery in Social Media Reputation Management









                        </h3>
                        <div class="pt-4 pb-4 justify-content-start align-items-center d-none d-lg-flex">
                            <span style="width: 25%;border-radius: 8px; display: inline-block;height: 3px;background-color: deepskyblue;"></span>
                        </div>
                    </div>
                    <div>
                        
                        <p class="feture-pare">
                            Navigating the dynamic world of social media poses challenges for any brand. With each like, share, and comment, a narrative unfolds, molding your brand's credibility. Our focus goes beyond surface-level appearances. Our social media reputation management revolves around fostering authentic connections and preserving your brand's storyline. Acknowledging that every tweet and Instagram story holds the power to shape public perception, our skilled professionals delve into platform intricacies. We don't merely observe conversations; we guide them, morphing potential obstacles into engagement prospects. With us, you transcend social media participation; you attain mastery, constructing a reputation that echoes and persists.
                        </p>
                       
                    </div>
                </div>
                <div
                class="mx-sm-auto mx-lg-0 col-12 px-2 px-md-0 col-md-10 col-lg-6 col-xl-5 d-flex flex-column justify-content-center align-items-center">
                <h3 class=" d-lg-none feture-head">
            Mastery in Social Media Reputation Management








                </h3>
                <div class="pt-4 w-100   pb-4 justify-content-start align-items-center d-flex d-lg-none">
                    <span style="width: 28%;border-radius: 8px; display: inline-block;height: 3px;background-color: deepskyblue;"></span>
                </div>
                <img width="600" class="lozad" data-src="{{ asset('assets/imgs/whipp_images/Online Reputation Management/Social Media Reputation Management/v1/caucasian-people-happy-friendly-customer-repu-2022-11-16-17-05-44-utc.jpg') }}" alt="" />
            </div>
            </div>
        </div>
    </section>

    {{-- talk with one of our experts --}}
    <section style="background-color: #f3f3f3;">
        <div class="container py-4 ">
            <div class="col-lg-10 mx-auto">

                <div class="text-center">
                    <h3 class="feture-head mb-3">Secure Your Image with Whipp Digital's Reputation Guardians</h3>
                    <div class="pt-4 pb-4 justify-content-start align-items-center d-none d-lg-flex">
                        <span style="width: 25%;border-radius: 8px; display: inline-block;height: 3px;background-color: deepskyblue;"></span>
                    </div>
                <p class="feture-pare">
                    In the fast-paced digital landscape, trust is earned in mere seconds. With a staggering 85% of consumers trusting online reviews as much as personal recommendations, your reputation is paramount (BrightLocal, 2021). Enter Whipp Digital — not just observers but architects of your online identity.                    <br>
                    <br>
                    Our adept team orchestrates positive dialogues and artfully navigates pitfalls, ensuring your reputation aligns with your values. In this era where 87% of consumers research brands online before engaging (Retailing Today, 2021), let us sculpt your narrative, fortify trust, and be your shield in the digital arena. It's more than reputation management; it's reputation empowerment.                </p>
            </div>
            <div class="d-flex  py-3">
                <button class="mx-auto  px-3 cta-btn-btn col-12 col-md-7 fw-bold col-xl-5   d-inline-block py-2 rounded-5 text-uppercase iwantgrow_btn " href="#">TALK WITH ONE OF OUR <br> Social Media Reputation Management EXPERTS</button>
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
                  Elevate Your Brand's Image with Strategic Reputation Management








                    </h3>
                        <div class="pt-4 w-100   pb-4 justify-content-start align-items-center d-flex d-lg-none">
                        <span style="width: 28%;border-radius: 8px; display: inline-block;height: 3px;background-color: deepskyblue;"></span>
                    </div>
                    <img width="600" class="lozad" data-src="{{ asset('assets/imgs/whipp_images/Online Reputation Management/Social Media Reputation Management/v1/social-media-2022-11-08-07-16-59-utc.jpg') }}" alt="" />
                </div>
                <div class="mx-auto mx-lg-0 col-12 px-2 px-md-0 col-md-10 col-lg-6 col-xl-5">
                    <div class="pb-lg-3">
                        <h3 class="d-none d-lg-block feture-head">
                      Elevate Your Brand's Image with Strategic Reputation Management








                        </h3>
                        <div class="pt-4 pb-4 justify-content-start align-items-center d-none d-lg-flex">
                            <span style="width: 25%;border-radius: 8px; display: inline-block;height: 3px;background-color: deepskyblue;"></span>
                        </div>
                    </div>
                    <div>
                        <p class="feture-pare">
                            A brand transcends being a mere logo or catchy phrase; it represents a commitment, a heritage, and often, an emotion. In a world bustling with voices, safeguarding your brand's standing to resonate untarnished can seem like an uphill struggle. Introducing Whipp Digital's Brand Reputation Management. We're not just strategists; we're narrators, guardians, and champions of your brand's story. By merging analytics and intuition, we identify zones of risk and potential, sculpting perspectives with meticulous craftsmanship. Every interaction, from client feedback to media mentions, weaves into your brand's unfolding narrative. Allow Whipp Digital to craft your brand's finest chapters, weaving stories of trust, consistency, and distinction that leave an enduring impact.

                        </p>
                       
                    </div>
                </div>
                
            </div>
        </div>
    </section>


@endsection
