@extends('layouts.index')
@section('title')
{{ env("APP_NAME") }} | Home
@endsection

@section('meta')


<meta name="title" content="Home | {{ env("APP_NAME") }} ">
<meta name="description" content="Elevate your online presence with Whipp Digital's comprehensive services. From SEO transformation to social media management, we're your partner in navigating the digital landscape. Join us for transformative experiences and meaningful connections.">
<meta name="keywords" content="Comprehensive Services, Online Presence, SEO Transformation, Social Media Management, Digital Landscape, Transformative Experiences, Meaningful Connections">

<link rel="canonical" href="{{ url()->current() }}">

<meta property="og:site_name" content="Home | {{ env("APP_NAME") }}">
<meta property="og:title" content="Home | {{ env("APP_NAME") }}">
<meta property="og:description" content="Elevate your online presence with Whipp Digital's comprehensive services. From SEO transformation to social media management, we're your partner in navigating the digital landscape. Join us for transformative experiences and meaningful connections.">
<meta property="og:url" content="{{ url()->current() }}">
<meta property="og:type" content="website">
<meta property="og:image" content="{{ asset('assets/imgs/tech_whipp.png') }}">
<meta property="fb:admins" content="admin">
<meta name="twitter:title" content="{{ env("APP_NAME") }} | Home">
<meta name="twitter:description" content="Elevate your online presence with Whipp Digital's comprehensive services. From SEO transformation to social media management, we're your partner in navigating the digital landscape. Join us for transformative experiences and meaningful connections.">
<meta name="twitter:image" content="{{ asset('assets/imgs/tech_whipp.png') }}">
<meta name="twitter:url" content="{{ url()->current() }}">
<meta name="twitter:card" content="summary">

<meta itemprop="name" content="Home | {{ env("APP_NAME") }}">
<meta itemprop="url" content="{{ url()->current() }}">
<meta itemprop="thumbnailUrl" content="{{ asset('assets/imgs/tech_whipp.png') }}">
<meta itemprop="image" content="{{ asset('assets/imgs/tech_whipp.png') }}">
<link rel="image_src"   href="{{ asset('assets/imgs/tech_whipp.png') }}">


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






@section('content')
    <!-- MAIN SECTION STARTS HERE -->
    <section>
        <div role="main" class="topbannerF">
            <div class="topbannerF_wrapper position-relative">
             


                <video preload="auto" id="mainvideo" 
                data-poster="{{ asset('assets/imgs/thumb.webp') }}"  loop autoplay muted>
                    <source media="(orientation: landscape)"
                    src="{{ asset('assets/imgs/new_whippintro.mp4') }}"
                    sizes="(min-width: 60rem) 80vw,
                   (min-width: 40rem) 90vw,
                   100vw"
                        type="video/mp4">
                    <source media="(orientation: portrait)"
                        src="{{ asset('assets/imgs/new_whippintro.webm') }}"
                        sizes="(min-width: 60rem) 80vw,
                   (min-width: 40rem) 90vw,
                   100vw"
                        type="video/webm">
                    Your browser does not support the video tag.
                </video>



             
                <div class="topbannerF_bottom">
                    <div class="topbannerF_btnText px-3">
                        <h3 class="" >Ready to experience rapid growth? Let's go!</h3>
                        <button class="iwantgrow_btn topbanner_anotherside-link fs-5 mx-f-16px">I'm ready</button>
                    </div>
                </div>
            </div>
        </div>
    </section>



        {{-- design section --}}

        <section>
            <div class="position-relative d-flex justify-content-center align-items-center">
                
    
                    <div class="context row " style="z-index: 9999">
                        <div class="col-lg-9 mx-auto">
    
                            <h1>
                                <span>
                            <svg style="margin-bottom: 27px;"  fill="#fff" version="1.1" id="Layer_1"
                             xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" 
                             width="30" height="30" viewBox="0 0 70 70" enable-background="new 0 0 70 70" xml:space="preserve"
                              transform="rotate(0)" stroke="#fff"><g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                              <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                              <g id="SVGRepo_iconCarrier"> <g> 
                                <path d="M27.792,8.103v9.427c-5.957,1.364-8.811,5.091-9.185,12.032h9.185v22.336H7.813V33.531 C7.813,20.257,13.521,10.083,27.792,8.103 M27.792,4.103c-0.183,0-0.366,0.013-0.55,0.038C12.134,6.237,3.813,16.675,3.813,33.531 v18.366c0,2.209,1.791,4,4,4h19.979c2.209,0,4-1.791,4-4V29.562c0-2.209-1.791-4-4-4h-4.411c0.988-2.571,2.832-3.567,5.304-4.133 c1.818-0.417,3.107-2.034,3.107-3.899V8.103c0-1.156-0.501-2.257-1.373-3.017C29.687,4.448,28.751,4.103,27.792,4.103L27.792,4.103 z"></path> <path d="M62.187,18.103v9.427c-5.955,1.364-8.809,5.091-9.183,12.032h9.183v22.336H42.208V43.531 C42.208,30.257,47.917,20.083,62.187,18.103 M62.187,14.103c-0.183,0-0.366,0.013-0.55,0.038 c-15.108,2.097-23.429,12.534-23.429,29.391v18.366c0,2.209,1.791,4,4,4h19.979c2.209,0,4-1.791,4-4V39.562c0-2.209-1.791-4-4-4 h-4.409c0.988-2.571,2.831-3.567,5.303-4.133c1.817-0.417,3.106-2.034,3.106-3.899v-9.427c0-1.156-0.501-2.257-1.373-3.017 C64.081,14.448,63.146,14.103,62.187,14.103L62.187,14.103z"></path> <g> <path d="M24.583,45.565c-0.553,0-1-0.447-1-1V33.583h-4.654c-0.553,0-1-0.447-1-1s0.447-1,1-1h6c0.553,0,0.654,0.43,0.654,0.982 v12C25.583,45.118,25.136,45.565,24.583,45.565z"></path> </g> <g> <path d="M59.583,57.565c-0.553,0-1-0.447-1-1v-2c0-0.553,0.447-1,1-1s1,0.447,1,1v2C60.583,57.118,60.136,57.565,59.583,57.565z"></path> </g> <g> <path d="M59.583,51.565c-0.553,0-1-0.447-1-1v-6.982h-4.654c-0.553,0-1-0.447-1-1s0.447-1,1-1h6c0.553,0,0.654,0.43,0.654,0.982v8 C60.583,51.118,60.136,51.565,59.583,51.565z"></path> 
                                </g> </g> </g></svg>
                        </span>
                        68.7% of clicks for a given query go to the top 3 
                      
                        <span >
                            <br>positions on Google Search <svg style="margin-bottom: 23px;" width="30" height="30" fill="#fff" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="64px" height="64px" viewBox="0 0 70 70" enable-background="new 0 0 70 70" xml:space="preserve" transform="rotate(180)" stroke="#fff"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <path d="M27.792,8.103v9.427c-5.957,1.364-8.811,5.091-9.185,12.032h9.185v22.336H7.813V33.531 C7.813,20.257,13.521,10.083,27.792,8.103 M27.792,4.103c-0.183,0-0.366,0.013-0.55,0.038C12.134,6.237,3.813,16.675,3.813,33.531 v18.366c0,2.209,1.791,4,4,4h19.979c2.209,0,4-1.791,4-4V29.562c0-2.209-1.791-4-4-4h-4.411c0.988-2.571,2.832-3.567,5.304-4.133 c1.818-0.417,3.107-2.034,3.107-3.899V8.103c0-1.156-0.501-2.257-1.373-3.017C29.687,4.448,28.751,4.103,27.792,4.103L27.792,4.103 z"></path> <path d="M62.187,18.103v9.427c-5.955,1.364-8.809,5.091-9.183,12.032h9.183v22.336H42.208V43.531 C42.208,30.257,47.917,20.083,62.187,18.103 M62.187,14.103c-0.183,0-0.366,0.013-0.55,0.038 c-15.108,2.097-23.429,12.534-23.429,29.391v18.366c0,2.209,1.791,4,4,4h19.979c2.209,0,4-1.791,4-4V39.562c0-2.209-1.791-4-4-4 h-4.409c0.988-2.571,2.831-3.567,5.303-4.133c1.817-0.417,3.106-2.034,3.106-3.899v-9.427c0-1.156-0.501-2.257-1.373-3.017 C64.081,14.448,63.146,14.103,62.187,14.103L62.187,14.103z"></path> <g> <path d="M24.583,45.565c-0.553,0-1-0.447-1-1V33.583h-4.654c-0.553,0-1-0.447-1-1s0.447-1,1-1h6c0.553,0,0.654,0.43,0.654,0.982 v12C25.583,45.118,25.136,45.565,24.583,45.565z"></path> </g> <g> <path d="M59.583,57.565c-0.553,0-1-0.447-1-1v-2c0-0.553,0.447-1,1-1s1,0.447,1,1v2C60.583,57.118,60.136,57.565,59.583,57.565z"></path> </g> <g> <path d="M59.583,51.565c-0.553,0-1-0.447-1-1v-6.982h-4.654c-0.553,0-1-0.447-1-1s0.447-1,1-1h6c0.553,0,0.654,0.43,0.654,0.982v8 C60.583,51.118,60.136,51.565,59.583,51.565z"></path> </g> </g> </g></svg>
                        </span> 
                        </h1>
                        <br>
            
                     
                     
                    </div>
                </div>
            
       
            
            <div class="area" >
                        <ul class="circles">
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                        </ul>
                </div >
            </div>
        </section>
    
        {{-- design section ends here--}}



        <!-- TECH SEO SEARCH EXPERIENCE SECTION STARTS HERE -->
    <section id="videoSection" >
        <div class="container  custom-text pt-5 pt-md-0">
           
            <div class="d-flex flex-column flex-lg-row gap-3  justify-content-center py-2 pt-md-0">
                <div class="mx-auto mx-lg-0 col-12 px-2 px-md-0 col-md-10 col-lg-6 col-xl-6 d-flex align-items-end">
                    <div class="d-flex flex-column gap-3">
                        <div>
                            <h2 class=" fw-bold min-lg-text-nowrap position-relative z-9 py-2   font-42px " >
                                We Are Experts at 
                                
                                
                                <span class="animate-charcter" style="text-transform: capitalize">
                                    Grabbing Attention
                                    </span>
                                </h2>
                            </div>
                        <h3 class="fs-2 fw-medium pt-4" >
                            Our Data-Driven Strategies Convert
         
         
                         </h3>
                             <div class="pt-4 w-100   pb-4 justify-content-start align-items-center d-flex ">
                                 <span style="width: 28%;border-radius: 8px; display: inline-block;height: 3px;background-color: deepskyblue;"></span>
                             </div>
                        <p class="fs-4 z-9 position-relative" >
                            Ready to make your mark? Look no further for an all-inclusive <br class="d-none d-md-inline"> digital marketing service.                        </p>
                        <div class="d-flex  position-relative mx-t-10px pt-4 py-md-5 ">
                            <button class="iwantgrow_btn lettalkbtn_hasarrow px-3 cta-btn-btn col-8 col-sm-6 fs-5 col-md-8  col-xl-4  d-flex justify-content-center align-items-center gap-2 py-2  rounded-5 text-uppercase fw-bold">Let's Go
                                <svg id="arrow" fill="#ffffff" height="20" width="20" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="-51.21 -51.21 614.51 614.51" xml:space="preserve" stroke="#ffffff" stroke-width="23.044230000000002"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <g> <g> <path d="M263.641,248.4L18.308,3.067c-4.16-4.053-10.987-3.947-15.04,0.32c-3.947,4.16-3.947,10.667,0,14.827l237.76,237.76 L3.268,493.733c-4.267,4.053-4.373,10.88-0.213,15.04c4.16,4.16,10.88,4.373,15.04,0.213c0.107-0.107,0.213-0.213,0.213-0.213 L263.641,263.44C267.801,259.28,267.801,252.56,263.641,248.4z"></path> <path d="M508.974,248.4L263.641,3.067c-4.267-4.053-10.987-3.947-15.04,0.213c-3.947,4.16-3.947,10.667,0,14.827l237.76,237.76 l-237.76,237.867c-4.267,4.053-4.373,10.88-0.213,15.04c4.16,4.16,10.88,4.373,15.04,0.213c0.107-0.107,0.213-0.213,0.213-0.213 L508.974,263.44C513.135,259.28,513.135,252.56,508.974,248.4z"></path> </g> </g> </g> </g></svg>
                        </div>
                    </div>
                </div>
                <div
                data-background-image="{{asset('assets/imgs/smok.png')}}"
             
                    class=" mx-lg-bg-right  max-lg-ms-100px overflow-hidden  max-mb-h-600px bacsrpre-sp lozad py-2  mx-auto  col-12 px-md-0 col-md-10 col-lg-6 col-xl-5 d-flex flex-column justify-content-center align-items-center">
                    <div class="">

                        <div class="overflow-hidden">
                            <video   loop autoplay muted id="coolVideo"  class="cool-before-redner  mk-r--250px "
                  muted  >
                        <source media="(orientation: landscape)" class=""
                src="{{ asset('assets/imgs/cool_video.webm') }}"
                    sizes="(min-width: 60rem) 80vw,
               (min-width: 40rem) 90vw,
               100vw"
                    type="video/mp4">
                <source media="(orientation: portrait)" class=""
                    src="{{ asset('assets/imgs/cool_video.webm') }}"
                    sizes="(min-width: 60rem) 80vw,
               (min-width: 40rem) 90vw,
               100vw"
                    type="video/webm">
                Your browser does not support the video tag.
            </video>
                  
        </div>
                </div>
                </div>
            </div>
        </div>
    </section>











    <!-- TECH SEO SEARCH EXPERIENCE SECTION ENDS HERE -->


    <!-- MAIN SECTION ENDS HERE -->

    <!-- BECOME LEADER SECTION STARTS HERE -->
    {{-- <section class="become-leader-section bg-grad-box-balck">
        <div class="become-leader-section-container">
            <div class="become-leader-section-container-1">
                <h2 class="fs-1">How to become your category leader</h2>
                <p class="cust-me-text-para py-2">
                    Own your category, and blast off with hypergrowth. We’ve helped the
                    world’s best and biggest companies exceed their KPIs – and we can
                    help you do the same.
                </p>
            </div>
            <div class="become-leader-section-container-2" data-scroll="">
                <div class="video text-center">
                    <video autoplay="" muted="" loop="" playsinline=""
                        style="max-width: 100%; width: 700px; border-radius: 10px">
                        <source class="lozad" data-src="{{ asset('assets/imgs/{{ env("APP_NAME") }}-category-leader-web-1.mp4') }}" type="video/mp4" />
                    </video>
                </div>
            </div>
            <div class="become-leader-section-container-3">
                <p class="fs-2">Ready to experience hypergrowth? Let's talk!</p>
                <div class="iwantgrow_btn topbanner_anotherside-link col-12 col-lg-6 col-xl-3 mx-auto">
                    <div class="iwantgrow_btn new-btn-ac"><span>I WANT TO GROW</span></div>
                </div>
            </div>
        </div>
    </section>
    <!-- BECOME LEADER SECTION ENDS HERE -->

    <!-- MOBILE AGENCY STARTS HERE -->
    <section class="become-leader-section bg-black">
        <div class="become-leader-section-container">
            <div class="become-leader-section-container-1">
                <h2 class="fs-1">
                    Mobile-First Digital <br />
                    Marketing Agency
                </h2>
                <p class="cust-me-text-para py-2">
                    We help companies to scale and become category leaders.
                </p>
            </div>
            <div class="become-leader-section-container-2" data-scroll="">
                <div class="video text-center">
                    <video autoplay="" muted="" loop="" playsinline=""
                        style="max-width: 100%; width: 700px; border-radius: 10px">
                        <source class="lozad" data-src="{{ asset('assets/imgs/Infinty-Loop-Desktop-2.mp4') }}" type="video/mp4" />
                    </video>
                </div>
            </div>
            <div class="become-leader-section-container-3">
                <p class="fs-2">Ready to experience hypergrowth? Let's talk!</p>
                <div class="iwantgrow_btn topbanner_anotherside-link col-12 col-lg-6 col-xl-3 mx-auto">
                    <div class="iwantgrow_btn new-btn-ac"><span>I WANT TO GROW</span></div>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- MOBILE AGENCY ENDS HERE -->

    <!-- GROW BUSINESS BANNER STARTS HERE -->
    {{-- <section class=" bg-green-1">
        <div class="container py-5">
            <div class="text-center d-flex flex-column  h-100">
                <div class="text-white fs-1">
                    READY TO <strong class="white">GROW YOUR BUSINESS?</strong>
                    <p class="cust-me-text-para fw-normal">
                        Contact us to work with a results-driven digital marketing agency
                    </p>
                </div>
            </div>
            <div class="d-flex flex-column flex-md-row justify-content-center gap-3 align-items-center py-2">
                <a href="#" class="new-btn-banner"> GET FREE PROPOSAL </a>
                <p class="text-white m-0">OR</p>

                <a href="tel:1-866-908-4748" class="new-btn-banner">
                    1-866-908-4748
                </a>
            </div>
        </div>
    </section> --}}
    <!-- GROW BUSINESS BANNER ENDS HERE -->

    <!-- LET'S GOBANNER SECTION STARTS HERE -->
    {{-- <section>
        <div class="container py-5">
            <div class="text-center d-flex flex-column  h-100">
                <h3 class="fs-2">Choose {{ env("APP_NAME") }} and Improve Your Technical SEO</h3>
                <p class="pb-1">
                    Achieve Top Search Engine Rankings with Our Robust Technical SEO
                    Strategy
                </p>
                <a class="lets-talk-btn px-4 py-2 fs-5" href="#">LET'S TALK</a>
            </div>
        </div>
        <div class="px-3 text-center px-lg-5 pb-4">
            <img class="imporve-tech-seo-img" class="lozad" data-src="{{ asset('assets/imgs/awardimage2022-1-1.jpeg') }}" alt="" />
        </div>
    </section> --}}

    <!-- LET'S GOBANNER SECTION ENDS HERE -->

    <!-- WHY TECH SEO IMPORTANT SECTION STARTS HERE -->
    {{-- <section>
        <div class="container py-5 custom-text">
            <div class="d-flex flex-column-reverse flex-lg-row gap-3 py-4 justify-content-center">
                <div class="mx-auto mx-lg-0 col-12 px-2 px-md-0 col-md-10 col-lg-6 col-xl-5">
                    <div class="py-3 text-center">
                        <h3 class="d-none d-lg-block">
                            What is Technical SEO and Why is it Important?
                        </h3>
                    </div>
                    <div>
                        <p>
                            Technical SEO is the process of ensuring your website is
                            compatible with search engine guidelines so that it can be
                            crawled and indexed without any problems. The main goal of a
                            technical SEO audit is to assess your website’s current SEO and
                            determine which aspects you need to improve for a seamless
                            online experience
                        </p>
                        <p>
                            Over the years, user demands have dramatically changed and
                            search engines have become more sophisticated. According to
                            Statista, there are now approximately 3.5 billion smartphone
                            users across the globe. This massive surge in smartphone usage
                            has prompted Google to launch an algorithm update that places
                            more importance on site speed and mobile experience in ranking
                            web pages.
                        </p>
                        <p>
                            Today, websites with a poor structure, slow page load time and
                            wonky redirects can be penalized by Google. Without proper
                            intervention, these technical SEO issues may result in a steep
                            drop in search rankings and organic traffic. Given that
                            <strong class="text-black">
                                the top organic search results receive nearly 35 percent of
                                clicks,
                            </strong>
                            a decline in ranking could be detrimental for your business.
                        </p>
                    </div>
                </div>
                <div
                    class="mx-sm-auto mx-lg-0 col-11 px-2 px-md-0 col-md-10 col-lg-6 col-xl-5 d-flex flex-column justify-content-center align-items-center">
                    <h3 class="pb-5 text-center d-lg-none">
                        What is Technical SEO and Why is it Important?
                    </h3>
                    <img class="lozad" data-src="{{ asset('assets/imgs/technical-seo-banner.svg') }}" alt="" />
                </div>
            </div>
        </div>
    </section> --}}
    <!-- WHY TECH SEO IMPORTANT SECTION ENDS HERE -->


    <!-- DIGITAL EXPERTISE SECTION STARTS HERE -->
    <section class="pt-5 pb-5">
        <div class="pt-5">
            <div class="col-lg-10 mx-auto pb-5 ">
                <h3
                  class="custom-text font-42px text-center p-2 col-lg-10 mx-auto  mx-auto w-100 fw-bold">
                    Digital Marketing Expertise
                </h3>
            </div>
        </div>

        <div class="">
            <div class="container wp-dg-ext-gird-comp d-flex flex-column  flex-md-row px-4 px-md-0 mx-auto justify-content-between gap-5 col-lg-9 " style="max-width: 100%">
                <div class="w-100 mx-auto  py-4 p-md-2 p-xl-4 border border-1 shadow rounded-5 light-white">
                    <div class="d-flex flex-column gap-3 justify-content-center align-items-center h-100">
                        <div class="col-2 col-md-3">
                            <span class="exprer-box-ico shadow mx-auto">
                                <svg fill="#ffff" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="64px" height="64px" viewBox="0 0 399.997 399.997" xml:space="preserve" stroke="#ffff"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <g> <g> <path d="M366.684,24.971H33.316C14.945,24.971,0,39.917,0,58.288V275.56c0,18.371,14.945,33.317,33.316,33.317h107.412 l-20.387,44.955c-2.105,4.643-1.709,10.037,1.053,14.321c2.762,4.285,7.51,6.873,12.607,6.873h131.996c0.006,0,0.014,0,0.02,0 c8.285,0,15-6.715,15-15c0-2.493-0.605-4.848-1.686-6.916l-20.062-44.233h107.412c18.371,0,33.316-14.946,33.316-33.317V58.288 C400,39.917,385.055,24.971,366.684,24.971z M370,275.561c0,1.829-1.488,3.316-3.316,3.316H33.316 c-1.828,0-3.316-1.487-3.316-3.316V58.288c0-1.829,1.488-3.317,3.316-3.317h333.367c1.828,0,3.316,1.488,3.316,3.317L370,275.561 L370,275.561z"></path> <path d="M246.198,96.434c-1.057-1.056-2.921-0.9-4.166,0.344l-16.273,16.271c-1.247,1.247-1.4,3.116-0.348,4.171l23.103,23.103 c0.525,0.526,1.261,0.751,2.013,0.688c0.756-0.063,1.53-0.413,2.157-1.038l16.271-16.272c1.244-1.245,1.4-3.111,0.343-4.166 L246.198,96.434z"></path> <path d="M146.336,197.582c-0.684-0.684-1.748-0.882-2.791-0.523c-1.042,0.359-1.902,1.226-2.257,2.271l-11.118,32.934 c-0.353,1.037-0.148,2.089,0.532,2.768c0.512,0.517,1.24,0.759,2.011,0.693c0.248-0.021,0.503-0.073,0.756-0.16l32.934-11.12 c1.044-0.354,1.912-1.215,2.27-2.256c0.362-1.041,0.162-2.107-0.521-2.792L146.336,197.582z"></path> <path d="M229.504,182.228c1.451-0.662,2.51-1.965,2.859-3.519c0.35-1.555-0.047-3.185-1.071-4.405 c-1.92-2.283-3.929-4.604-5.997-6.941l18.078-18.077c0.596-0.597,0.972-1.375,1.033-2.157c0.065-0.779-0.185-1.505-0.689-2.01 l-23.104-23.101c-1.056-1.058-2.92-0.903-4.166,0.344l-17.63,17.633c-11.824-11.209-23.699-21.209-34.165-28.732 c-7.369-5.296-20.85-14.199-28.355-14.313c-1.37-0.024-2.695,0.512-3.668,1.479c-0.976,0.966-1.519,2.285-1.508,3.657 c0.039,5.114,4.528,14.341,12.639,25.977c7.72,11.075,18.326,23.802,30.426,36.563l-23,23.002 c-1.248,1.247-1.403,3.111-0.346,4.166l23.103,23.101c0.525,0.531,1.254,0.755,2.011,0.691c0.752-0.063,1.533-0.414,2.155-1.035 l23.446-23.447c2.047,1.811,4.077,3.571,6.079,5.268c0.929,0.787,2.097,1.209,3.296,1.209c0.271,0,0.543-0.022,0.815-0.065 c1.471-0.239,2.765-1.109,3.539-2.383c1.368-2.248,3.15-4.479,5.301-6.626C223.281,185.806,226.284,183.693,229.504,182.228z"></path> <path d="M242.292,186.495c-5.938,0-11.606,2.531-16.396,7.32c-5.748,5.748-8.257,11.777-7.257,17.438 c0.993,5.604,5.446,10.627,12.22,13.771c5.827,2.707,11.138,3.546,15.821,4.287c4.932,0.778,9.585,1.516,13.726,4.325 c0.857,0.585,1.859,0.882,2.864,0.882c0.706,0,1.415-0.146,2.079-0.444c1.613-0.719,2.74-2.225,2.977-3.977 c1.775-13.241-0.765-25.133-7.152-33.476C256.245,190.186,249.363,186.495,242.292,186.495z"></path> </g> </g> </g> </g></svg>
                            </span>
                        </div>

                        <div class="text-center d-flex flex-column  h-100">

                            <a href="{{route('custom_web_design')}}"
                              class="fs-4 text-center custom-text fw-bold">
                                Website Design & Development

                            </a>
                            <p class="mt-2 fw-semibold px-3 ps-md-0 max-show-text-6  ">
                                In a vast online landscape teeming with
                                countless websites, it is imperative that
                                your own site not only distinguishes itself but
                                also serves as a compelling reflection of your
                                identity, all the while playing a pivotal role
                                in fostering your organization's expansion.
                            </p>
                            <div class="d-flex  position-relative  pt-4 justify-content-between align-items-center  mt-auto">
                                <a href="{{route('custom_web_design')}}" class="lettalkbtn_hasarrow px-3 cta-btn-btn  mx-auto d-flex justify-content-center align-items-center gap-2 py-2  rounded-5 text-uppercase fw-bold">Read more
                                    <svg id="arrow" fill="#ffffff" height="20" width="20" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="-51.21 -51.21 614.51 614.51" xml:space="preserve" stroke="#ffffff" stroke-width="23.044230000000002"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <g> <g> <path d="M263.641,248.4L18.308,3.067c-4.16-4.053-10.987-3.947-15.04,0.32c-3.947,4.16-3.947,10.667,0,14.827l237.76,237.76 L3.268,493.733c-4.267,4.053-4.373,10.88-0.213,15.04c4.16,4.16,10.88,4.373,15.04,0.213c0.107-0.107,0.213-0.213,0.213-0.213 L263.641,263.44C267.801,259.28,267.801,252.56,263.641,248.4z"></path> <path d="M508.974,248.4L263.641,3.067c-4.267-4.053-10.987-3.947-15.04,0.213c-3.947,4.16-3.947,10.667,0,14.827l237.76,237.76 l-237.76,237.867c-4.267,4.053-4.373,10.88-0.213,15.04c4.16,4.16,10.88,4.373,15.04,0.213c0.107-0.107,0.213-0.213,0.213-0.213 L508.974,263.44C513.135,259.28,513.135,252.56,508.974,248.4z"></path> </g> </g> </g> </g></svg>
                                </a>
                            </div>

                        </div>
                    </div>
                </div>
                <div class=" w-100 p-2 py-4 p-md-3 p-xl-4 border border-1 shadow rounded-5 light-white">
                    <div class="d-flex flex-column gap-3 justify-content-center align-items-center h-100">
                        <div class="col-2 col-md-3">
                           <span class="exprer-box-ico shadow mx-auto">
                            <svg fill="#fff" height="64px" width="64px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                             xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512" xml:space="preserve" 
                             stroke="#fff"><g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                             <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                             <g id="SVGRepo_iconCarrier"> <g> <g style="stroke-width: 12px;"> <path d="M358.614,68.408H332.96c-12.075,0-22.184,8.565-24.579,19.938c-19.694,9.853-116.345,55.616-243.614,72.367 c-7.147,0.941-13.284,4.825-17.252,10.308H25.119C11.268,171.022,0,182.29,0,196.141v51.307c0,13.851,11.268,25.119,25.119,25.119 h22.398c3.967,5.483,10.105,9.368,17.251,10.308c1.279,0.169,2.549,0.346,3.823,0.521l39.388,141.798 c3.009,10.831,12.961,18.396,24.203,18.396h46.829c0.009,0,0.017,0.002,0.026,0.002c0.011,0,0.02-0.002,0.031-0.002h8.524 c4.427,0,8.017-3.589,8.017-8.017s-3.589-8.017-8.017-8.017h-2.457l-35.771-128.768c84.108,20.495,143.984,48.934,159.018,56.455 c2.394,11.373,12.504,19.938,24.579,19.938h25.653c13.851,0,25.119-11.268,25.119-25.119V93.527 C383.733,79.676,372.465,68.408,358.614,68.408z M42.756,256.533H25.119c-5.01,0-9.086-4.076-9.086-9.086v-51.307 c0-5.01,4.076-9.086,9.086-9.086h17.637V256.533z M168.493,427.556h-36.311c-4.066,0-7.665-2.736-8.753-6.654L85.945,285.971 c15.784,2.528,31.025,5.47,45.631,8.69L168.493,427.556z M367.699,350.062c0,5.01-4.076,9.086-9.086,9.086H332.96 c-5.01,0-9.086-4.076-9.086-9.086v-0.01c0-0.018,0-0.036,0-0.055V161.94c0-4.427-3.589-8.017-8.017-8.017 s-8.017,3.589-8.017,8.017v175.216c-31.563-14.988-123.577-54.724-240.981-70.177c-4.602-0.605-8.071-4.482-8.071-9.017v-72.335 c0-4.535,3.47-8.411,8.071-9.017c117.404-15.452,209.418-55.189,240.981-70.176v21.301c0,4.427,3.589,8.017,8.017,8.017 s8.017-3.589,8.017-8.017V93.583c0-0.01,0-0.02,0-0.03v-0.026c0-5.01,4.076-9.086,9.086-9.086h25.653 c5.01,0,9.086,4.076,9.086,9.086V350.062z"></path> </g> </g> <g> <g> <path d="M503.983,213.778h-85.512c-4.427,0-8.017,3.589-8.017,8.017c0,4.427,3.589,8.017,8.017,8.017h85.512 c4.427,0,8.017-3.589,8.017-8.017C512,217.367,508.411,213.778,503.983,213.778z"></path> </g> </g> <g> <g> <path d="M485.698,133.125c-1.744-4.07-6.457-5.954-10.526-4.21l-8.552,3.665c-4.069,1.744-5.955,6.457-4.21,10.526 c1.303,3.04,4.263,4.86,7.372,4.86c1.054,0,2.125-0.209,3.154-0.65l8.552-3.665C485.557,141.907,487.442,137.195,485.698,133.125z "></path> </g> </g> <g> <g> <path d="M451.493,147.784c-1.744-4.069-6.457-5.954-10.526-4.21l-25.653,10.995c-4.069,1.744-5.955,6.457-4.21,10.526 c1.303,3.039,4.263,4.86,7.372,4.86c1.054,0,2.125-0.209,3.154-0.65l25.653-10.995 C451.352,156.566,453.238,151.853,451.493,147.784z"></path> </g> </g> <g> <g> <path d="M481.487,299.937l-8.576-3.675c-4.069-1.745-8.782,0.141-10.526,4.21s0.141,8.782,4.21,10.526l8.576,3.675 c1.029,0.441,2.1,0.65,3.154,0.65c3.111,0,6.069-1.821,7.372-4.861C487.442,306.394,485.558,301.681,481.487,299.937z"></path> </g> </g> <g> <g> <path d="M447.271,285.273l-25.641-10.989c-4.069-1.743-8.783,0.141-10.526,4.21c-1.744,4.07,0.141,8.782,4.21,10.526 l25.641,10.989c1.029,0.441,2.1,0.65,3.154,0.65c3.111,0,6.069-1.821,7.372-4.86C453.226,291.73,451.34,287.017,447.271,285.273z"></path> </g> </g> </g></svg>
                           </span>

                        </div>

                        <div class="text-center d-flex flex-column  h-100">
                            <a href="{{route('social_media_advertising')}}"
                              class="fs-4 text-center custom-text fw-bold">
                                Social Media Marketing

                            </a>
                            <p class="mt-2 fw-semibold px-3 ps-md-0 max-show-text-6 ">
                                Encompassing a pivotal role in maintaining a
                                seamless connection with your audience, social
                                media marketing operates either in tandem with
                                your efforts or autonomously, actively engaging
                                and nurturing your social community.
                            </p>
                            <div class="d-flex  position-relative  pt-4 justify-content-between align-items-center  mt-auto">
                                <a href="{{route('social_media_advertising')}}" class="lettalkbtn_hasarrow px-3 cta-btn-btn  mx-auto d-flex justify-content-center align-items-center gap-2 py-2  rounded-5 text-uppercase fw-bold">Read more
                                    <svg id="arrow" fill="#ffffff" height="20" width="20" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="-51.21 -51.21 614.51 614.51" xml:space="preserve" stroke="#ffffff" stroke-width="23.044230000000002"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <g> <g> <path d="M263.641,248.4L18.308,3.067c-4.16-4.053-10.987-3.947-15.04,0.32c-3.947,4.16-3.947,10.667,0,14.827l237.76,237.76 L3.268,493.733c-4.267,4.053-4.373,10.88-0.213,15.04c4.16,4.16,10.88,4.373,15.04,0.213c0.107-0.107,0.213-0.213,0.213-0.213 L263.641,263.44C267.801,259.28,267.801,252.56,263.641,248.4z"></path> <path d="M508.974,248.4L263.641,3.067c-4.267-4.053-10.987-3.947-15.04,0.213c-3.947,4.16-3.947,10.667,0,14.827l237.76,237.76 l-237.76,237.867c-4.267,4.053-4.373,10.88-0.213,15.04c4.16,4.16,10.88,4.373,15.04,0.213c0.107-0.107,0.213-0.213,0.213-0.213 L508.974,263.44C513.135,259.28,513.135,252.56,508.974,248.4z"></path> </g> </g> </g> </g></svg>
                                </a>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="w-100 mx-auto  py-4 p-md-2 p-xl-4 border border-1 shadow rounded-5 light-white">
                    <div class="d-flex flex-column gap-3 justify-content-center align-items-center h-100">
                        <div class="col-2 col-md-3">
                            <span class="exprer-box-ico shadow mx-auto">
                                <svg width="64px" height="64px" viewBox="0 0 192 192" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="12" d="M95.958 22C121.031 42.867 149.785 42 158 42c-1.797 118.676-15 95-62.042 128C49 137 35.798 160.676 34 42c8.13 0 36.883.867 61.958-20Z"></path></g></svg>
                               </span>
                        </div>

                        <div class="text-center d-flex flex-column  h-100">

                            <a href="{{route('online_reputation_repair')}}"
                              class="fs-4 text-center custom-text fw-bold">
                                Reputation Management

                            </a>
                            <p class="mt-2 fw-semibold px-3 ps-md-0 max-show-text-6 ">
                                In the realm of the digital landscape, your
                                reputation reigns supreme. Our proficient team
                                of specialists is adept at safeguarding and
                                augmenting your online standing, yielding
                                substantial and enduring outcomes.
                            </p>
                            <div class="d-flex  position-relative  pt-4 justify-content-between align-items-center  mt-auto">
                                <a href="{{route('online_reputation_repair')}}" class="lettalkbtn_hasarrow px-3 cta-btn-btn  mx-auto d-flex justify-content-center align-items-center gap-2 py-2  rounded-5 text-uppercase fw-bold">Read more
                                    <svg id="arrow" fill="#ffffff" height="20" width="20" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="-51.21 -51.21 614.51 614.51" xml:space="preserve" stroke="#ffffff" stroke-width="23.044230000000002"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <g> <g> <path d="M263.641,248.4L18.308,3.067c-4.16-4.053-10.987-3.947-15.04,0.32c-3.947,4.16-3.947,10.667,0,14.827l237.76,237.76 L3.268,493.733c-4.267,4.053-4.373,10.88-0.213,15.04c4.16,4.16,10.88,4.373,15.04,0.213c0.107-0.107,0.213-0.213,0.213-0.213 L263.641,263.44C267.801,259.28,267.801,252.56,263.641,248.4z"></path> <path d="M508.974,248.4L263.641,3.067c-4.267-4.053-10.987-3.947-15.04,0.213c-3.947,4.16-3.947,10.667,0,14.827l237.76,237.76 l-237.76,237.867c-4.267,4.053-4.373,10.88-0.213,15.04c4.16,4.16,10.88,4.373,15.04,0.213c0.107-0.107,0.213-0.213,0.213-0.213 L508.974,263.44C513.135,259.28,513.135,252.56,508.974,248.4z"></path> </g> </g> </g> </g></svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="mt-5">
            <div class="container wp-dg-ext-gird-comp d-flex flex-column  flex-md-row px-4 px-md-0 mx-auto justify-content-between gap-5 col-lg-9 " style="max-width: 100%">
                <div class="w-100 mx-auto  py-4 p-md-2 p-xl-4 border border-1 shadow rounded-5 light-white">
                    <div class="d-flex flex-column gap-3 justify-content-center align-items-center h-100">
                        <div class="col-2 col-md-3">
                            <span class="exprer-box-ico shadow mx-auto">
                                <svg width="64px" height="64px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" stroke="#fff"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M22 5.15V8.85C22 11.1 21.1 12 18.85 12H16.15C13.9 12 13 11.1 13 8.85V5.15C13 2.9 13.9 2 16.15 2H18.85C21.1 2 22 2.9 22 5.15Z" fill="#fff"></path> <path d="M11 15.15V18.85C11 21.1 10.1 22 7.85 22H5.15C2.9 22 2 21.1 2 18.85V15.15C2 12.9 2.9 12 5.15 12H7.85C10.1 12 11 12.9 11 15.15Z" fill="#fff"></path> <path d="M14.7795 21.9995C14.5095 21.9995 14.2595 21.8495 14.1295 21.6195C13.9995 21.3795 13.9995 21.0995 14.1395 20.8595L15.1095 19.2395C15.3195 18.8795 15.7795 18.7695 16.1395 18.9795C16.4995 19.1895 16.6095 19.6495 16.3995 20.0095L16.2195 20.3095C18.6895 19.6695 20.5095 17.4295 20.5095 14.7695C20.5095 14.3595 20.8495 14.0195 21.2595 14.0195C21.6695 14.0195 21.9995 14.3595 21.9995 14.7795C21.9995 18.7595 18.7595 21.9995 14.7795 21.9995Z" fill="#fff"></path> <path d="M2.75 9.97C2.34 9.97 2 9.64 2 9.22C2 5.24 5.24 2 9.22 2C9.5 2 9.74 2.15 9.88 2.38C10.01 2.62 10.01 2.9 9.87 3.14L8.9 4.75C8.68 5.11 8.22 5.23 7.87 5.01C7.51 4.8 7.4 4.34 7.61 3.98L7.79 3.68C5.33 4.32 3.5 6.56 3.5 9.22C3.5 9.64 3.16 9.97 2.75 9.97Z" fill="#fff"></path> </g></svg>
                               </span>

                        </div>

                        <div class="text-center d-flex flex-column  h-100">

                            <a href="{{route('conversion_rate_optimization')}}"
                              class="fs-4 text-center custom-text fw-bold">
                              Conversion Optimization

                            </a>
                            <p class="mt-2 fw-semibold px-3 ps-md-0 max-show-text-6 ">
                                Transform a higher proportion of your website
                                visitors into valuable customers! Our adept
                                professionals employ cutting-edge Conversion
                                Optimization methodologies to elevate the rate
                                at which casual website browsers transition into
                                engaged and active users.
                            </p>
                            <div class="d-flex  position-relative  pt-4 justify-content-between align-items-center  mt-auto">
                                <a href="{{route('conversion_rate_optimization')}}" class="lettalkbtn_hasarrow px-3 cta-btn-btn  mx-auto d-flex justify-content-center align-items-center gap-2 py-2  rounded-5 text-uppercase fw-bold">Read more
                                    <svg id="arrow" fill="#ffffff" height="20" width="20" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="-51.21 -51.21 614.51 614.51" xml:space="preserve" stroke="#ffffff" stroke-width="23.044230000000002"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <g> <g> <path d="M263.641,248.4L18.308,3.067c-4.16-4.053-10.987-3.947-15.04,0.32c-3.947,4.16-3.947,10.667,0,14.827l237.76,237.76 L3.268,493.733c-4.267,4.053-4.373,10.88-0.213,15.04c4.16,4.16,10.88,4.373,15.04,0.213c0.107-0.107,0.213-0.213,0.213-0.213 L263.641,263.44C267.801,259.28,267.801,252.56,263.641,248.4z"></path> <path d="M508.974,248.4L263.641,3.067c-4.267-4.053-10.987-3.947-15.04,0.213c-3.947,4.16-3.947,10.667,0,14.827l237.76,237.76 l-237.76,237.867c-4.267,4.053-4.373,10.88-0.213,15.04c4.16,4.16,10.88,4.373,15.04,0.213c0.107-0.107,0.213-0.213,0.213-0.213 L508.974,263.44C513.135,259.28,513.135,252.56,508.974,248.4z"></path> </g> </g> </g> </g></svg>
                                </a>
                            </div>

                        </div>
                    </div>
                </div>
                <div class=" w-100 p-2 py-4 p-md-3 p-xl-4 border border-1 shadow rounded-5 light-white">
                    <div class="d-flex flex-column gap-3 justify-content-center align-items-center h-100">
                        <div class="col-2 col-md-3">
                            <span class="exprer-box-ico shadow mx-auto">
                                <svg width="64px" height="64px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" stroke="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M16 10L18.5768 8.45392C19.3699 7.97803 19.7665 7.74009 20.0928 7.77051C20.3773 7.79703 20.6369 7.944 20.806 8.17433C21 8.43848 21 8.90095 21 9.8259V14.1741C21 15.099 21 15.5615 20.806 15.8257C20.6369 16.056 20.3773 16.203 20.0928 16.2295C19.7665 16.2599 19.3699 16.022 18.5768 15.5461L16 14M6.2 18H12.8C13.9201 18 14.4802 18 14.908 17.782C15.2843 17.5903 15.5903 17.2843 15.782 16.908C16 16.4802 16 15.9201 16 14.8V9.2C16 8.0799 16 7.51984 15.782 7.09202C15.5903 6.71569 15.2843 6.40973 14.908 6.21799C14.4802 6 13.9201 6 12.8 6H6.2C5.0799 6 4.51984 6 4.09202 6.21799C3.71569 6.40973 3.40973 6.71569 3.21799 7.09202C3 7.51984 3 8.07989 3 9.2V14.8C3 15.9201 3 16.4802 3.21799 16.908C3.40973 17.2843 3.71569 17.5903 4.09202 17.782C4.51984 18 5.07989 18 6.2 18Z" stroke="#fff" stroke-width="1.704" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                            </span>

                        </div>

                        <div class="text-center d-flex flex-column  h-100">
                            <a href="{{route('conversion_rate_optimization')}}"
                            class="fs-4 text-center custom-text fw-bold">
                            Video Production 

                          </a>
                           
                            <p class="mt-2 fw-semibold px-3 ps-md-0 max-show-text-6 ">
                                No avenue holds greater potency for conveying
                                your message than the medium of video. Captivate
                                your audience by narrating your story and
                                disseminating your mission.
                            </p>
                            <div class="d-flex  position-relative  pt-4 justify-content-between align-items-center  mt-auto">
                                <a href="{{route('conversion_rate_optimization')}}" class="lettalkbtn_hasarrow px-3 cta-btn-btn  mx-auto d-flex justify-content-center align-items-center gap-2 py-2  rounded-5 text-uppercase fw-bold">Read more
                                    <svg id="arrow" fill="#ffffff" height="20" width="20" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="-51.21 -51.21 614.51 614.51" xml:space="preserve" stroke="#ffffff" stroke-width="23.044230000000002"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <g> <g> <path d="M263.641,248.4L18.308,3.067c-4.16-4.053-10.987-3.947-15.04,0.32c-3.947,4.16-3.947,10.667,0,14.827l237.76,237.76 L3.268,493.733c-4.267,4.053-4.373,10.88-0.213,15.04c4.16,4.16,10.88,4.373,15.04,0.213c0.107-0.107,0.213-0.213,0.213-0.213 L263.641,263.44C267.801,259.28,267.801,252.56,263.641,248.4z"></path> <path d="M508.974,248.4L263.641,3.067c-4.267-4.053-10.987-3.947-15.04,0.213c-3.947,4.16-3.947,10.667,0,14.827l237.76,237.76 l-237.76,237.867c-4.267,4.053-4.373,10.88-0.213,15.04c4.16,4.16,10.88,4.373,15.04,0.213c0.107-0.107,0.213-0.213,0.213-0.213 L508.974,263.44C513.135,259.28,513.135,252.56,508.974,248.4z"></path> </g> </g> </g> </g></svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-100 mx-auto  py-4 p-md-2 p-xl-4 border border-1 shadow rounded-5 light-white">
                    <div class="d-flex flex-column gap-3 justify-content-center align-items-center h-100">
                        <div class="col-2 col-md-3">
                            <span class="exprer-box-ico shadow mx-auto">
                                <svg width="64px" height="64px" viewBox="0 -1 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#000000" stroke="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <title>amazon [#160]</title> <desc>Created with Sketch.</desc> <defs> </defs> <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"> <g id="Dribbble-Light-Preview" transform="translate(-220.000000, -7479.000000)" fill="#fff"> <g id="icons" transform="translate(56.000000, 160.000000)"> <path d="M181.251105,7332.71631 C181.644105,7332.61435 182.555105,7332.451 182.942105,7332.53614 C183.487105,7332.58465 183.815105,7332.67473 183.924105,7332.8064 C184.155105,7333.14894 183.809105,7334.3498 183.651105,7334.74084 C183.512105,7335.08536 182.861105,7336.19019 182.524105,7336.19019 C182.421105,7336.19019 182.343105,7336.11495 182.396105,7335.97437 C183.633105,7333.09449 183.080105,7333.17072 181.251105,7333.32813 C181.015105,7333.35684 180.149105,7333.53009 180.251105,7333.32813 C180.251105,7333.08954 181.012105,7332.77769 181.251105,7332.71631 M172.633105,7327.47828 C172.633105,7327.94654 172.751105,7328.32175 172.987105,7328.60291 C173.663105,7329.40876 174.897105,7328.97712 175.415105,7328.01881 C175.700105,7327.52976 175.996105,7326.57442 175.996105,7325.33594 C174.996105,7325.33594 174.678105,7325.38445 174.315105,7325.48048 C173.248105,7325.78045 172.633105,7326.44671 172.633105,7327.47828 M169.506105,7327.83864 C169.506105,7326.15169 170.414105,7324.96965 171.815105,7324.38258 C173.052105,7323.86086 174.759105,7323.7183 175.996105,7323.64405 C175.996105,7322.16104 175.793105,7320.97999 174.233105,7320.97999 C173.732105,7320.97999 172.837105,7321.53537 172.633105,7322.46101 C172.584105,7322.70059 172.463105,7322.87285 172.269105,7322.90849 L170.178105,7322.67386 C169.925105,7322.61446 169.827105,7322.47586 169.887105,7322.23628 C170.309105,7320.05039 172.145105,7319.11683 174.233105,7319.00001 C175.233105,7319.00001 176.745105,7318.98714 177.924105,7320.06227 C179.198105,7321.3245 178.996105,7322.91443 178.996105,7327.02882 C178.996105,7328.01683 179.011105,7328.11187 179.687105,7328.98999 C179.823105,7329.19195 179.835105,7329.38401 179.637105,7329.53053 C178.631105,7330.39479 178.084105,7330.86206 177.999105,7330.93433 C177.853105,7331.04224 177.676105,7331.05412 177.470105,7330.96997 C176.575105,7330.21065 176.790105,7330.25619 176.233105,7329.56617 C175.104105,7330.78385 174.217105,7331.11451 172.706105,7331.11451 C170.910105,7331.11451 169.506105,7330.00473 169.506105,7327.83864 M164.324105,7332.94995 C167.354105,7334.69035 170.651105,7335.56055 174.215105,7335.56055 C176.590105,7335.56055 178.936105,7335.12199 181.251105,7334.24585 C181.602105,7334.10725 181.972105,7333.83698 182.187105,7334.13794 C182.290105,7334.28248 182.257105,7334.41415 182.087105,7334.53394 C179.844105,7336.13772 176.718105,7337 173.996105,7337 C170.145105,7337 166.719105,7335.5853 164.106105,7333.25586 C163.873105,7333.06479 164.059105,7332.78363 164.324105,7332.94995" id="amazon-[#160]"> </path> </g> </g> </g> </g></svg>
                               </span>
                        </div>

                        <div class="text-center d-flex flex-column  h-100">

                            <a href="{{route('amazon_marketing')}}"
                              class="fs-4 text-center custom-text fw-bold">
                              Amazon Marketing

                            </a>
                            <p class="mt-2 fw-semibold px-3 ps-md-0 max-show-text-6 ">
                                Getting your products found on Amazon can be challenging. The competition is fierce and the marketplace is massive. But we can help you rise above the noise and get your products in front of the right buyers. We'll do this by optimizing your product listings, running targeted advertising, and helping you build a strong brand presence. 
                            </p>
                            <div class="d-flex  position-relative  pt-4 justify-content-between align-items-center  mt-auto">
                                <a href="{{route('amazon_marketing')}}" class="lettalkbtn_hasarrow px-3 cta-btn-btn  mx-auto d-flex justify-content-center align-items-center gap-2 py-2  rounded-5 text-uppercase fw-bold">Read more
                                    <svg id="arrow" fill="#ffffff" height="20" width="20" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="-51.21 -51.21 614.51 614.51" xml:space="preserve" stroke="#ffffff" stroke-width="23.044230000000002"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <g> <g> <path d="M263.641,248.4L18.308,3.067c-4.16-4.053-10.987-3.947-15.04,0.32c-3.947,4.16-3.947,10.667,0,14.827l237.76,237.76 L3.268,493.733c-4.267,4.053-4.373,10.88-0.213,15.04c4.16,4.16,10.88,4.373,15.04,0.213c0.107-0.107,0.213-0.213,0.213-0.213 L263.641,263.44C267.801,259.28,267.801,252.56,263.641,248.4z"></path> <path d="M508.974,248.4L263.641,3.067c-4.267-4.053-10.987-3.947-15.04,0.213c-3.947,4.16-3.947,10.667,0,14.827l237.76,237.76 l-237.76,237.867c-4.267,4.053-4.373,10.88-0.213,15.04c4.16,4.16,10.88,4.373,15.04,0.213c0.107-0.107,0.213-0.213,0.213-0.213 L508.974,263.44C513.135,259.28,513.135,252.56,508.974,248.4z"></path> </g> </g> </g> </g></svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="my-5">
            <div class="container wp-dg-ext-gird-comp d-flex flex-column  flex-md-row px-4 px-md-0 mx-auto justify-content-between gap-5 col-lg-9 " style="max-width: 100%">
                <div class="w-100 mx-auto  py-4 p-md-2 p-xl-4 border border-1 shadow rounded-5 light-white">
                    <div class="d-flex flex-column gap-3 justify-content-center align-items-center h-100">
                        <div class="col-2 col-md-3">
                            <span class="exprer-box-ico shadow mx-auto">
                                <svg height="64px" width="64px" version="1.1" id="_x32_" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512" xml:space="preserve" fill="#000000" stroke="#000000" stroke-width="0.00512"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <style type="text/css"> .st0{fill:#fff;} </style> <g> <path class="st0" d="M435.244,391.19c32.805-41.18,52.518-93.432,52.503-150.118c0.015-66.486-27.029-126.93-70.608-170.464 C373.593,27.021,313.149-0.016,246.667,0C180.181-0.016,119.742,27.021,76.2,70.608C32.616,114.142,5.576,174.586,5.591,241.072 C5.576,307.55,32.616,367.994,76.2,411.536c43.542,43.587,103.982,70.624,170.468,70.608c50.948,0.016,98.312-15.91,137.281-42.94 L456.756,512l49.653-49.653L435.244,391.19z M378.508,372.916c-33.826,33.773-80.267,54.591-131.841,54.606 c-51.574-0.015-98.015-20.833-131.845-54.606c-33.784-33.834-54.595-80.271-54.61-131.844 c0.015-51.574,20.826-98.011,54.61-131.844c33.83-33.78,80.271-54.591,131.845-54.606c51.574,0.015,98.014,20.826,131.841,54.606 c33.791,33.833,54.602,80.271,54.617,131.844C433.11,292.646,412.299,339.082,378.508,372.916z"></path> <path class="st0" d="M155.926,235.105l-5.696-0.792c-14.558-2.058-19.782-7.117-19.782-14.555c0-8.389,6.012-14.402,16.932-14.402 c9.018,0,17.088,2.691,25.794,8.39c0.789,0.473,1.582,0.313,2.214-0.48l7.597-11.704c0.633-0.953,0.473-1.585-0.32-2.218 c-8.542-6.484-21.359-10.76-34.809-10.76c-22.156,0-36.398,12.977-36.398,32.44c0,17.877,11.712,27.852,32.44,30.694l5.696,0.792 c14.875,2.058,19.622,7.125,19.622,14.875c0,9.022-7.437,15.507-20.255,15.507c-12.024,0-22.312-5.852-29.273-11.392 c-0.632-0.632-1.581-0.632-2.214,0.16l-9.811,11.392c-0.632,0.792-0.316,1.737,0.316,2.378 c8.386,7.909,23.733,14.234,39.561,14.234c26.739,0,40.509-14.234,40.509-33.384C188.049,247.762,176.652,237.956,155.926,235.105z "></path> <path class="st0" d="M275.566,190.322h-67.408c-0.949,0-1.581,0.632-1.581,1.585v104.435c0,0.953,0.632,1.585,1.581,1.585h67.408 c0.953,0,1.585-0.632,1.585-1.585v-13.602c0-0.952-0.632-1.585-1.585-1.585h-49.368l-0.949-0.953V252.99l0.949-0.952h41.614 c0.953,0,1.586-0.633,1.586-1.586v-13.609c0-0.945-0.633-1.577-1.586-1.577h-41.614l-0.949-0.953v-26.266l0.949-0.945h49.368 c0.953,0,1.585-0.64,1.585-1.585v-13.61C277.151,190.954,276.519,190.322,275.566,190.322z"></path> <path class="st0" d="M334.448,188.584c-18.514,0-32.439,8.863-37.975,25.954c-2.218,6.645-2.85,12.658-2.85,29.589 c0,16.932,0.632,22.944,2.85,29.589c5.536,17.092,19.462,25.947,37.975,25.947c18.677,0,32.591-8.855,38.139-25.947 c2.21-6.645,2.85-12.657,2.85-29.589c0-16.932-0.64-22.944-2.85-29.589C367.039,197.447,353.124,188.584,334.448,188.584z M354.542,268.81c-3.003,8.702-9.327,14.082-20.095,14.082c-10.6,0-16.932-5.38-19.938-14.082 c-1.265-3.955-1.898-9.495-1.898-24.682c0-15.355,0.633-20.734,1.898-24.69c3.007-8.702,9.339-14.082,19.938-14.082 c10.768,0,17.092,5.38,20.095,14.082c1.265,3.955,1.904,9.335,1.904,24.69C356.447,259.315,355.807,264.854,354.542,268.81z"></path> </g> </g></svg>
                               </span>
                        </div>

                        <div class="text-center d-flex flex-column  h-100">

                            <a href="{{route('se_optimization')}}"
                              class="fs-4 text-center custom-text fw-bold">
                              Search Engine Optimization - SEO
                            </a>
                            <p class="mt-2 fw-semibold px-3 ps-md-0 max-show-text-6 ">
                                By conducting meticulous analysis of key words
                                and employing ethical strategies, we are
                                equipped
                                to assist you in attaining prominent positions
                                within the leading search platforms.
                            </p>
                            <div class="d-flex  position-relative  pt-4 justify-content-between align-items-center  mt-auto">
                                <a href="{{route('se_optimization')}}" class="lettalkbtn_hasarrow px-3 cta-btn-btn  mx-auto d-flex justify-content-center align-items-center gap-2 py-2  rounded-5 text-uppercase fw-bold">Read more
                                    <svg id="arrow" fill="#ffffff" height="20" width="20" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="-51.21 -51.21 614.51 614.51" xml:space="preserve" stroke="#ffffff" stroke-width="23.044230000000002"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <g> <g> <path d="M263.641,248.4L18.308,3.067c-4.16-4.053-10.987-3.947-15.04,0.32c-3.947,4.16-3.947,10.667,0,14.827l237.76,237.76 L3.268,493.733c-4.267,4.053-4.373,10.88-0.213,15.04c4.16,4.16,10.88,4.373,15.04,0.213c0.107-0.107,0.213-0.213,0.213-0.213 L263.641,263.44C267.801,259.28,267.801,252.56,263.641,248.4z"></path> <path d="M508.974,248.4L263.641,3.067c-4.267-4.053-10.987-3.947-15.04,0.213c-3.947,4.16-3.947,10.667,0,14.827l237.76,237.76 l-237.76,237.867c-4.267,4.053-4.373,10.88-0.213,15.04c4.16,4.16,10.88,4.373,15.04,0.213c0.107-0.107,0.213-0.213,0.213-0.213 L508.974,263.44C513.135,259.28,513.135,252.56,508.974,248.4z"></path> </g> </g> </g> </g></svg>
                                </a>
                            </div>

                        </div>
                    </div>
                </div>
                <div class=" w-100 p-2 py-4 p-md-3 p-xl-4 border border-1 shadow rounded-5 light-white">
                    <div class="d-flex flex-column gap-3 justify-content-center align-items-center h-100">
                        <div class="col-2 col-md-3">
                            <span class="exprer-box-ico shadow mx-auto">
                                <svg fill="#fff" height="64px" width="64px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 511.999 511.999" xml:space="preserve" stroke="#fff"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <g> <g> <path d="M282.701,417.258c-0.801-2.99-3.714-4.902-6.776-4.445C170.016,428.644,73.038,346.171,73.038,237.85 c0-97.522,79.341-176.863,176.863-176.863c119.226,0,205.029,116.522,168.471,230.64c-1.066,3.326,0.839,6.868,4.213,7.772 l40.109,10.746c2.065,0.554,4.067,1.261,5.994,2.108c3.338,1.466,7.227-0.243,8.311-3.724C524.864,154.762,409.031,0,249.901,0 C118.75,0,12.051,106.7,12.051,237.85c0,151.181,137.666,259.523,278.547,234.509c3.525-0.626,5.762-4.139,4.836-7.597 L282.701,417.258z"></path> <path d="M250.711,174.075c14.56,0,22.086,9.975,21.931,19.667c-0.165,10.324,8.224,18.729,18.54,18.593 c10.408-0.137,18.277-9.225,18.034-19.631c-0.588-25.217-17.769-46.391-41.02-53.038v-8.094c0-9.852-7.571-18.328-17.412-18.791 c-10.507-0.495-19.18,7.877-19.18,18.275v9.59c-24.297,8.159-41.532,30.828-41.025,57.321 c0.614,32.082,27.225,58.182,59.321,58.182c9.121,0,17.085,5.499,20.688,13.351c1.415,3.082,5.195,4.295,8.213,2.748 c6.565-3.364,13.878-4.925,21.133-4.623c4.337,0.18,7.397-4.196,5.95-8.289c-8.133-23.006-30.157-39.656-55.701-39.78 c-10.123-0.049-19.267-6.71-22.112-16.425C223.653,188.033,235.903,174.075,250.711,174.075z"></path> <path d="M263.83,356.481c1.258-1.482,1.638-3.521,1.136-5.399c-8.469-31.599-9.829-34.283-9.344-43.045 c0.179-3.251-2.239-6.412-6.531-6.412c-14.56,0-22.086-9.976-21.931-19.667c0.165-10.324-8.224-18.729-18.54-18.593 c-10.408,0.138-18.277,9.225-18.034,19.631c0.588,25.218,17.769,46.391,41.02,53.038v8.106 C231.605,361.61,252.802,369.473,263.83,356.481z"></path> <path d="M494.59,436.295l-50.98-50.993l20.976-20.983c9.937-9.943,5.389-26.967-8.206-30.608l-153.417-41.105 c-13.578-3.636-26.052,8.813-22.408,22.409c0.329,1.229,39.938,149.009,40.431,150.849c4.962,18.551,22.397,19.672,31.296,10.77 l20.977-20.977l50.984,50.983c7.145,7.146,18.73,7.144,25.874,0l44.472-44.472C501.734,455.024,501.736,443.442,494.59,436.295z"></path> </g> </g> </g> </g></svg>
                               </span>
                        </div>

                        <div class="text-center d-flex flex-column  h-100">
                            <a href="{{route('ppc_marketing')}}"
                              class="fs-4 text-center custom-text fw-bold">
                            Pay Per Click - PPC

                            </a>
                            <p class="mt-2 fw-semibold px-3 ps-md-0 max-show-text-6 ">
                                While search engine optimization (SEO) provides
                                sustained and gradual growth, there are
                                instances
                                when an instant surge is necessary.
                                {{ env("APP_NAME") }}'s pay-per-click (PPC)
                                campaign guarantees optimal utilization of your
                                funds, delivering immediate and impactful
                                results.
                            </p>
                            <div class="d-flex  position-relative  pt-4 justify-content-between align-items-center  mt-auto">
                                <a href="{{route('ppc_marketing')}}" class="lettalkbtn_hasarrow px-3 cta-btn-btn  mx-auto d-flex justify-content-center align-items-center gap-2 py-2  rounded-5 text-uppercase fw-bold">Read more
                                    <svg id="arrow" fill="#ffffff" height="20" width="20" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="-51.21 -51.21 614.51 614.51" xml:space="preserve" stroke="#ffffff" stroke-width="23.044230000000002"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <g> <g> <path d="M263.641,248.4L18.308,3.067c-4.16-4.053-10.987-3.947-15.04,0.32c-3.947,4.16-3.947,10.667,0,14.827l237.76,237.76 L3.268,493.733c-4.267,4.053-4.373,10.88-0.213,15.04c4.16,4.16,10.88,4.373,15.04,0.213c0.107-0.107,0.213-0.213,0.213-0.213 L263.641,263.44C267.801,259.28,267.801,252.56,263.641,248.4z"></path> <path d="M508.974,248.4L263.641,3.067c-4.267-4.053-10.987-3.947-15.04,0.213c-3.947,4.16-3.947,10.667,0,14.827l237.76,237.76 l-237.76,237.867c-4.267,4.053-4.373,10.88-0.213,15.04c4.16,4.16,10.88,4.373,15.04,0.213c0.107-0.107,0.213-0.213,0.213-0.213 L508.974,263.44C513.135,259.28,513.135,252.56,508.974,248.4z"></path> </g> </g> </g> </g></svg>
                                    </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-100 mx-auto  py-4 p-md-2 p-xl-4 border border-1 shadow rounded-5 light-white">
                    <div class="d-flex flex-column gap-3 justify-content-center align-items-center h-100">
                        <div class="col-2 col-md-3">
                            <span class="exprer-box-ico shadow mx-auto">
                                <svg width="64px" height="64px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" stroke="#fff"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M7 14H12.5M7 10H17M10 19H6.2C5.0799 19 4.51984 19 4.09202 18.782C3.71569 18.5903 3.40973 18.2843 3.21799 17.908C3 17.4802 3 16.9201 3 15.8V8.2C3 7.07989 3 6.51984 3.21799 6.09202C3.40973 5.71569 3.71569 5.40973 4.09202 5.21799C4.51984 5 5.0799 5 6.2 5H17.8C18.9201 5 19.4802 5 19.908 5.21799C20.2843 5.40973 20.5903 5.71569 20.782 6.09202C21 6.51984 21 7.0799 21 8.2V8.5M14 20L16.025 19.595C16.2015 19.5597 16.2898 19.542 16.3721 19.5097C16.4452 19.4811 16.5147 19.4439 16.579 19.399C16.6516 19.3484 16.7152 19.2848 16.8426 19.1574L21 15C21.5523 14.4477 21.5523 13.5523 21 13C20.4477 12.4477 19.5523 12.4477 19 13L14.8426 17.1574C14.7152 17.2848 14.6516 17.3484 14.601 17.421C14.5561 17.4853 14.5189 17.5548 14.4903 17.6279C14.458 17.7102 14.4403 17.7985 14.405 17.975L14 20Z" stroke="#fff" stroke-width="1.584" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                               </span>

                        </div>

                        <div class="text-center d-flex flex-column  h-100">

                            <a href="{{route('seo_content_writing')}}"
                              class="fs-4 text-center custom-text fw-bold">
                              Content Writing

                            </a>
                            <p class="mt-2 fw-semibold px-3 ps-md-0 max-show-text-6 ">
                                Our team of content creators is well-versed in
                                the intricacies of Search Engine Optimization
                                (SEO), meticulously crafting marketing copy that
                                not only imparts valuable information but also
                                captivates, effectively propelling your business
                                goals forward.
                            </p>
                            <div class="d-flex  position-relative  pt-4 justify-content-between align-items-center  mt-auto">
                                <a href="{{route('seo_content_writing')}}" class="lettalkbtn_hasarrow px-3 cta-btn-btn  mx-auto d-flex justify-content-center align-items-center gap-2 py-2  rounded-5 text-uppercase fw-bold">Read more
                                    <svg id="arrow" fill="#ffffff" height="20" width="20" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="-51.21 -51.21 614.51 614.51" xml:space="preserve" stroke="#ffffff" stroke-width="23.044230000000002"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <g> <g> <path d="M263.641,248.4L18.308,3.067c-4.16-4.053-10.987-3.947-15.04,0.32c-3.947,4.16-3.947,10.667,0,14.827l237.76,237.76 L3.268,493.733c-4.267,4.053-4.373,10.88-0.213,15.04c4.16,4.16,10.88,4.373,15.04,0.213c0.107-0.107,0.213-0.213,0.213-0.213 L263.641,263.44C267.801,259.28,267.801,252.56,263.641,248.4z"></path> <path d="M508.974,248.4L263.641,3.067c-4.267-4.053-10.987-3.947-15.04,0.213c-3.947,4.16-3.947,10.667,0,14.827l237.76,237.76 l-237.76,237.867c-4.267,4.053-4.373,10.88-0.213,15.04c4.16,4.16,10.88,4.373,15.04,0.213c0.107-0.107,0.213-0.213,0.213-0.213 L508.974,263.44C513.135,259.28,513.135,252.56,508.974,248.4z"></path> </g> </g> </g> </g>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- DIGITAL EXPERTISE SECTION ENDS HERE -->

    <section style=" background: rgb(48,174,255);
    background: linear-gradient(0deg, rgba(48,174,255,0.45989733784138653) 31%, rgba(255,255,255,1) 100%); ">
        <div  role="contentinfo"  class="container py-5 custom-text">
            <div class="col-lg-11 px-3 px-lg-0  mx-auto">

                <h2 class="max-he-mv text-md-center mb-4  p-2 font-40px w-100 mx-auto pb-0 fw-bold" >
                    
                    Why Choose 
                
                    

                            {{ env("APP_NAME") }} 
                
                    For Your
                    <br class="d-none d-md-inline">
                    <b>Digital Marketing Agency?</b>
                </h2>
              
                </div>
                <div class="px-md-3 px-3 align-items-center d-flex flex-column-reverse flex-lg-row gap-3 py-5 justify-content-center">
   
                <div class="mx-auto mx-lg-0 col-12 px-2 px-md-3 col-md-10 col-lg-6 col-xl-6 ">
                    <div class="pb-lg-3">
                        
                         
                    </div>
                    <div>
                        <p class="feture-pare fs-5">
                            Whipp Digital is a comprehensive digital marketing agency that has been offering a broad spectrum of services across various industries since 2005. Our suite of digital marketing solutions encompasses consulting and management for an array of online marketing strategies, such as search engine optimization (SEO), pay-per-click (PPC) advertising, Amazon store optimization, copywriting, conversion rate optimization (CRO), and more. Additionally, we provide specialized web design and development services tailored for both eCommerce and B2B enterprises. Don't settle for just any digital marketing agency; choose a partner you can rely on. 
                            </b>

                         </p>
                    </div>
                </div>
                <div
                class="mx-sm-auto mx-lg-0 col-12 px-2 px-md-0 col-md-10 col-lg-6 col-xl-6 d-flex flex-column justify-content-center align-items-center">
             
                <img width="800" class="lozad" data-src="{{ asset('assets/imgs/tech_whipp.png') }}" alt="" />
            </div>
            </div>
            <div class=" col-lg-12 mx-auto px-lg-0 px-3 d-flex gap-5 gap-md-3 flex-column flex-md-row">
                
                <div class="position-relative w-100 p-4 border border-1   d-flex flex-column gap-3  bg-white rounded-4 shadow mt-3 mt-md-0">
                    {{-- circle icons--}}
                    <span class="wp-cril-ico-ic">
                        <svg width="64px" height="64px" viewBox="0 0 64 64" xmlns="http://www.w3.org/2000/svg" stroke-width="3" stroke="#fff" fill="none"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><line x1="50.4" y1="24.38" x2="58.3" y2="23.14"></line><line x1="47.93" y1="17.11" x2="52.87" y2="14.2"></line><line x1="42.89" y1="11.73" x2="46.21" y2="4.51"></line><line x1="33.45" y1="10.69" x2="33.41" y2="4.96"></line><line x1="24.29" y1="12.09" x2="21.62" y2="4.51"></line><line x1="17.99" y1="17.03" x2="12.96" y2="14.29"></line><line x1="15.78" y1="23.97" x2="8.03" y2="22.66"></line><path d="M26.22,45.47c0-5.16-3.19-9.49-4.91-12.69A12.24,12.24,0,0,1,19.85,27c0-6.79,6.21-12.3,13-12.3"></path><path d="M39.48,45.47c0-5.16,3.19-9.49,4.91-12.69A12.24,12.24,0,0,0,45.85,27c0-6.79-6.21-12.3-13-12.3"></path><rect x="23.63" y="45.19" width="18.93" height="4.25" rx="2.12"></rect><rect x="24.79" y="49.43" width="16.61" height="4.25" rx="2.12"></rect><path d="M36.32,53.68v.84a3.23,3.23,0,1,1-6.44,0v-.84"></path><path d="M24.57,26.25a7.5,7.5,0,0,1,7.88-7.11"></path></g></svg>
                    </span>
                    <div class="ms-2 mt-4 pt-1">

                        <span class="w-100 fs-4 mx-auto fw-bold rounded-2 ">We Are Experts in Digital Marketing</span>
                        <p class="fs-5 mt-3">
                            Choosing a digital marketing agency that truly understands the nuances of digital marketing may seem like a given, but many firms fall short. Our methods have a proven track record of success.       
                        </p>
                    </div>
                                     
                </div>
                <div class="position-relative w-100 p-4 border border-1   d-flex flex-column gap-3  bg-white rounded-4 shadow mt-3 mt-md-0">
                    {{-- circle icons--}}
                    <span class="wp-cril-ico-ic">
<img src="{{asset('assets/imgs/output-onlinepngtools(2).png')}}" alt="">
                        {{-- <svg height="64px" width="64px" version="1.1" id="_x32_" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512" xml:space="preserve" fill="#000000" stroke="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <style type="text/css"> .st0{fill:#fff;} </style> <g> <path class="st0" d="M250.172,384.856c-11.713-2.187-20.767-10.655-28.256-17.651c-3.959-3.681-9.376-8.747-12.17-9.483 c-0.364-0.108-1.036-0.214-2.208-0.214c-3.68,0-8.875,1.194-13.899,2.336c-6.603,1.515-13.449,3.08-20.438,3.08 c-6.589,0-12.406-1.45-17.366-4.309c-1.565-0.915-3.016-1.929-4.33-3.008l-50.537,109.143l62.814-1.879l39.19,49.13l53.024-114.545 l5.846-12.599c-1.879,0.372-3.83,0.564-5.846,0.564C253.988,385.42,252.037,385.228,250.172,384.856z"></path> <path class="st0" d="M356.185,358.594c-4.959,2.88-10.805,4.33-17.365,4.33c0,0,0,0-0.022,0c-6.996,0-13.814-1.565-20.416-3.08 c-5.024-1.143-10.219-2.336-13.928-2.336c-1.144,0-1.837,0.107-2.208,0.214c-2.787,0.736-8.204,5.802-12.142,9.483 c-1.864,1.736-3.815,3.559-5.866,5.352l-19.881,42.934L309.028,512l39.211-49.13l62.815,1.879l-50.559-109.171 C359.172,356.686,357.743,357.679,356.185,358.594z"></path> <path class="st0" d="M256.004,81.194c-57.398,0-103.934,46.536-103.934,103.934c0,57.398,46.535,103.934,103.934,103.934 c57.397,0,103.933-46.536,103.933-103.934C359.937,127.73,313.401,81.194,256.004,81.194z"></path> <path class="st0" d="M413.955,227.462c3.852-14.4,27.177-26.72,27.177-42.334c0-15.607-23.325-27.927-27.177-42.326 c-3.98-14.9,9.94-37.225,2.402-50.259c-7.661-13.228-34.016-12.277-44.756-23.018c-10.741-10.72-9.784-37.089-23.018-44.756 c-13.028-7.532-35.36,6.388-50.252,2.408C283.952,23.34,271.611,0,255.996,0c-15.586,0-27.927,23.34-42.327,27.177 c-14.878,3.98-37.203-9.94-50.258-2.408c-13.206,7.668-12.278,34.036-22.997,44.756c-10.733,10.741-37.11,9.79-44.756,23.018 c-7.553,13.034,6.388,35.359,2.408,50.259c-3.859,14.399-27.198,26.719-27.198,42.326c0,15.614,23.339,27.934,27.198,42.334 c3.98,14.899-9.961,37.224-2.408,50.259c7.646,13.228,34.023,12.27,44.756,23.01c4.938,4.938,7.39,13.17,9.897,21.353 c2.123,6.974,4.288,13.92,8.012,18.794c1.429,1.887,3.101,3.466,5.088,4.61c13.034,7.539,35.38-6.382,50.258-2.401 c9.204,2.45,17.558,12.842,26.456,20.052c5.024,4.066,10.248,7.124,15.871,7.124c5.631,0,10.848-3.058,15.893-7.124 c8.732-7.06,16.936-17.194,25.897-19.88c0.172-0.064,0.372-0.129,0.544-0.171c14.892-3.981,37.224,9.94,50.252,2.401 c1.993-1.144,3.688-2.744,5.116-4.631c8.096-10.633,8.789-31.029,17.901-40.126c10.74-10.741,37.096-9.783,44.756-23.01 C423.895,264.686,409.974,242.361,413.955,227.462z M255.996,308.549c-2.401,0-4.78-0.064-7.139-0.214 c-29.692-1.686-56.562-13.856-76.957-32.894c-24.211-22.539-39.325-54.646-39.325-90.313c0-68.16,55.261-123.421,123.421-123.421 c68.167,0,123.421,55.262,123.421,123.421C379.417,253.295,324.163,308.549,255.996,308.549z"></path> </g> </g></svg> --}}
                    </span>
                    <div class="ms-2 mt-4 pt-1">

                        <span class="w-100 fs-4 mx-auto fw-bold rounded-2 ">We Operate with Integrity & Ethics</span>
                        <p class="fs-5 mt-3">
                            At Whipp Digital, we hold the principles of honesty, integrity, and client respect in high regard. We don't believe in offering services that you don't need or applying a one-size-fits-all strategy to our diverse clientele. 
                        </p>
                    </div>
                                     
                </div>
                <div class="position-relative w-100 p-4 border border-1   d-flex flex-column gap-3  bg-white rounded-4 shadow mt-3 mt-md-0">
                    {{-- circle icons--}}
                    <span class="wp-cril-ico-ic">
                        <svg width="66px" height="66px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M19 14C21.2091 14 23 16 23 17.5C23 18.3284 22.3284 19 21.5 19H21M17 11C18.6569 11 20 9.65685 20 8C20 6.34315 18.6569 5 17 5M5 14C2.79086 14 1 16 1 17.5C1 18.3284 1.67157 19 2.5 19H3M7 11C5.34315 11 4 9.65685 4 8C4 6.34315 5.34315 5 7 5M16.5 19H7.5C6.67157 19 6 18.3284 6 17.5C6 15 9 14 12 14C15 14 18 15 18 17.5C18 18.3284 17.3284 19 16.5 19ZM15 8C15 9.65685 13.6569 11 12 11C10.3431 11 9 9.65685 9 8C9 6.34315 10.3431 5 12 5C13.6569 5 15 6.34315 15 8Z" stroke="#fff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                    </span>
                    <div class="ms-2 mt-4 pt-1">

                        <span class="w-100 fs-4 mx-auto fw-bold rounded-2 ">We Prioritize Our Customers</span>
                        <p class="fs-5 mt-3">
                            While many agencies claim a customer-centric approach, few genuinely implement it. As a leading SEO agency, Whipp Digital stands out by actually putting our customers first. 
                        </p>
                    </div>
                                     
                </div>
                <div class="position-relative w-100 p-4 border border-1   d-flex flex-column gap-3  bg-white rounded-4 shadow mt-3 mt-md-0">
                    {{-- circle icons--}}
                    <span class="wp-cril-ico-ic">
                        <svg width="64px" height="64px" viewBox="0 0 64 64" data-name="Layer 1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" fill="#fff" stroke="#fff"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><defs><style>.cls-1{fill:#fff;}.cls-2{fill:#fffff;}</style></defs><title></title><path class="cls-1" d="M41.78,57.13a7.12,7.12,0,0,1-4.2-1.39l-4.32-3.16a3.12,3.12,0,0,0-3.7,0l-4.32,3.16a7.14,7.14,0,0,1-11.31-6.53l.58-5.32a3.11,3.11,0,0,0-1.85-3.2L7.77,38.53a7.13,7.13,0,0,1,0-13.06l4.89-2.16a3.11,3.11,0,0,0,1.85-3.2l-.58-5.32A7.14,7.14,0,0,1,25.24,8.26l4.32,3.16a3.12,3.12,0,0,0,3.7,0l4.32-3.16A7,7,0,0,1,43,7a7.25,7.25,0,0,1,4.75,3.13,2,2,0,1,1-3.34,2.2,3.23,3.23,0,0,0-2.12-1.39,3,3,0,0,0-2.37.57l-4.32,3.16a7.13,7.13,0,0,1-8.43,0l-4.31-3.16a3.13,3.13,0,0,0-5,2.87l.58,5.31A7.11,7.11,0,0,1,14.28,27l-4.9,2.16a3.14,3.14,0,0,0,0,5.74L14.28,37a7.11,7.11,0,0,1,4.21,7.3l-.58,5.31a3.13,3.13,0,0,0,5,2.87l4.31-3.16a7.13,7.13,0,0,1,8.43,0l4.32,3.16a3.13,3.13,0,0,0,5-2.87l-.58-5.31A7.1,7.1,0,0,1,48.54,37l4.9-2.16a3.14,3.14,0,0,0,0-5.74L50.78,28a2,2,0,1,1,1.61-3.66l2.66,1.17a7.13,7.13,0,0,1,0,13.06l-4.89,2.16a3.13,3.13,0,0,0-1.86,3.2l.58,5.32a7,7,0,0,1-3.52,6.95A7.17,7.17,0,0,1,41.78,57.13Z"></path><path class="cls-2" d="M31.64,39a2,2,0,0,1-1.42-.59l-8.61-8.61A2,2,0,1,1,24.44,27l7.2,7.2L57.08,8.72a2,2,0,0,1,2.82,2.83L33.05,38.4A2,2,0,0,1,31.64,39Z"></path></g></svg>
                    </span>
                    <div class="ms-2 mt-4 pt-1">

                        <span class="w-100 fs-4 mx-auto fw-bold rounded-2 ">We Deliver Proven Results</span>
                        <p class="fs-5 mt-3">
                            Why engage with an SEO firm that fails to deliver the outcomes you desire? Stop wasting valuable resources on a strategy that isn't yielding results. 
                        </p>
                    </div>
                                     
                </div>
               
            </div>
        </div>
    </section>



   


@endsection


@section('js')

<script>
// const video = document.getElementById("coolVideo");



// document.addEventListener("DOMContentLoaded", function () {
//    video.innerHTML = `
//    <source media="(orientation: landscape)" class=""
//                 src="{{ asset('assets/imgs/cool_video.webm') }}"
//                     sizes="(min-width: 60rem) 80vw,
//                (min-width: 40rem) 90vw,
//                100vw"
//                     type="video/mp4">
//                 <source media="(orientation: portrait)" class=""
//                     src="{{ asset('assets/imgs/cool_video.webm') }}"
//                     sizes="(min-width: 60rem) 80vw,
//                (min-width: 40rem) 90vw,
//                100vw"
//                     type="video/webm">
//    `
//    video.play();
// });
// video.addEventListener("ended", (event) => {
//     video.classList.add('fade-out')
//   console.log(
//     "Video stopped either because it has finished playing or no further data is available.",
//   );
// //   setTimeout(() => {
// //       video.play();
// //   }, 100);
//   setTimeout(() => {
//     video.play();
//       video.classList.remove('fade-out')
//   }, 400);
// });


</script>
    
@endsection

  