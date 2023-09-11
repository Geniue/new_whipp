@extends('layouts.index')
@section('title')
Whippdigital | Home
@endsection

@section('meta')


<meta name="title" content="Home | Whippdigital ">
<meta name="description" content="Elevate your online presence with Whipp Digital's comprehensive services. From SEO transformation to social media management, we're your partner in navigating the digital landscape. Join us for transformative experiences and meaningful connections.">
<meta name="keywords" content="Comprehensive Services, Online Presence, SEO Transformation, Social Media Management, Digital Landscape, Transformative Experiences, Meaningful Connections">

<link rel="canonical" href="{{ url()->current() }}">

<meta property="og:site_name" content="Home | Whippdigital">
<meta property="og:title" content="Home | Whippdigital">
<meta property="og:description" content="Elevate your online presence with Whipp Digital's comprehensive services. From SEO transformation to social media management, we're your partner in navigating the digital landscape. Join us for transformative experiences and meaningful connections.">
<meta property="og:url" content="{{ url()->current() }}">
<meta property="og:type" content="website">
<meta property="og:image" content="{{ asset('assets/imgs/tech_whipp.png') }}">
<meta property="fb:admins" content="admin">
<meta name="twitter:title" content="Whippdigital | Home">
<meta name="twitter:description" content="Elevate your online presence with Whipp Digital's comprehensive services. From SEO transformation to social media management, we're your partner in navigating the digital landscape. Join us for transformative experiences and meaningful connections.">
<meta name="twitter:image" content="{{ asset('assets/imgs/tech_whipp.png') }}">
<meta name="twitter:url" content="{{ url()->current() }}">
<meta name="twitter:card" content="summary">

<meta itemprop="name" content="Home | Whippdigital">
<meta itemprop="url" content="{{ url()->current() }}">
<meta itemprop="thumbnailUrl" content="{{ asset('assets/imgs/tech_whipp.png') }}">
<meta itemprop="image" content="{{ asset('assets/imgs/tech_whipp.png') }}">
<link rel="image_src"   href="{{ asset('assets/imgs/tech_whipp.png') }}">


<meta name="abstract" content="Whippdigital">
<meta name="author" content="admin">
<meta name="classification" content="Blog">
<meta name="copyright" content="Whippdigital - All rights Reserved.">
<meta name="distribution" content="Global">
<meta name="language" content="en-GB">
<meta name="publisher" content="Whippdigital">
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
             


    <video preload="auto" id="mainvideo" disablePictureInPicture='true' class="lozad"
    data-poster="{{ asset('assets/imgs/thumb.webp') }}"  loop autoplay muted playsinline >
                <source media="(orientation: landscape)" class="lozad"
                data-src="{{ asset('assets/imgs/new_whippintro.mp4') }}"
                sizes="(min-width: 60rem) 80vw,
               (min-width: 40rem) 90vw,
               100vw"
                    type="video/mp4">
                <source media="(orientation: portrait)" class="lozad"
                    data-src="{{ asset('assets/imgs/new_whippintro.webm') }}"
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
             
                    class=" overflow-hidden  max-mb-h-600px bacsrpre-sp lozad py-2  mx-auto mx-lg-0 col-12 px-md-0 col-md-10 col-lg-6 col-xl-5 d-flex flex-column justify-content-center align-items-center">
                    <div class="">

                        <div class="overflow-hidden">
                            <video   preload="auto" id="coolVideo"  class="cool-before-redner  mk-r--250px "
                  muted  >
          
                Your browser does not support the video tag.
            </video>
                  
        </div>
                </div>
                </div>
            </div>
        </div>
    </section>








    <section style=" background: rgb(255,255,255);
    background: linear-gradient(180deg, rgba(255,255,255,1) 0%, rgba(0,176,235,0.5019141445640756) 50%, rgba(255,255,255,1) 100%); ">
        <div  role="contentinfo"  class="container py-5 custom-text">
            <div class="col-lg-11 px-3 px-lg-0  mx-auto">

                <h2 class="max-he-mv text-md-center mb-4  p-2 font-40px w-100 mx-auto pb-0 fw-bold" >
                    
                    Why Choose 
                
                    

                            WhippDigital 
                
                    For Your
                    <br class="d-none d-md-inline">
                    <b>Digital Marketing Agency?</b>
                </h2>
              
                </div>
                <div class="px-5 align-items-center d-flex flex-column-reverse flex-lg-row gap-3 py-5 justify-content-center">
   
                <div class="mx-auto mx-lg-0 col-12 px-2 px-md-3 col-md-10 col-lg-6 col-xl-6 ">
                    <div class="pb-lg-3">
                        <div class="">

                            <h3 class="d-none d-lg-block  fs-3 p-2   font-30px fw-bold">
                                What Makes us 
                               
                                <span style="color: #30a2ff !important;">
                                    Stand Out
                                </span>
                            </h3>
                        </div>
                               <div class="pt-4 pb-4 justify-content-start align-items-center d-none d-lg-flex">
                            <span style="width: 25%;border-radius: 8px; display: inline-block;height: 3px;background-color: deepskyblue;"></span>
                        </div>
                    </div>
                    <div>
                        <p class="feture-pare">
                            Whipp Digital is a comprehensive digital marketing agency that has been offering a broad spectrum of services across various industries since 2005. Our suite of digital marketing solutions encompasses consulting and management for an array of online marketing strategies, such as search engine optimization (SEO), pay-per-click (PPC) advertising, Amazon store optimization, copywriting, conversion rate optimization (CRO), and more. Additionally, we provide specialized web design and development services tailored for both eCommerce and B2B enterprises. Don't settle for just any digital marketing agency; choose a partner you can rely on. 
</b>

</p>
                    </div>
                </div>
                <div
                class="mx-sm-auto mx-lg-0 col-12 px-2 px-md-0 col-md-10 col-lg-6 col-xl-6 d-flex flex-column justify-content-center align-items-center">
                <div class="w-100">

                    <h3 class=" d-lg-none feture-head p-2 fw-bold  font-30px">
                        What Makes us
                        <br>
                     <span style="color: #30a2ff !important;">

                        Stand Out
                    </span>
                </h3>
            </div>
                    <div class="pt-4 w-100   pb-4 justify-content-start align-items-center d-flex d-lg-none">
                        <span style="width: 28%;border-radius: 8px; display: inline-block;height: 3px;background-color: deepskyblue;"></span>
                    </div>
                <img width="800" class="lozad" data-src="{{ asset('assets/imgs/tech_whipp.png') }}" alt="" />
            </div>
            </div>
            <div class="row col-lg-12 mx-auto px-lg-4">
                
                <div class="col-md-3 p-4 text-center col-12 d-flex flex-column gap-3 ">
                    <span class="p-1 px-3 px-md-2 w-100 fs-5  mx-auto   fw-bold  bg-newblue text-white rounded-2">We Are Experts in Digital Marketing</span>
                    <p class="">
                        Choosing a digital marketing agency that truly understands the nuances of digital marketing may seem like a given, but many firms fall short. Our methods have a proven track record of success.       
                    </p>
                                     
                </div>
                <div class="col-md-3 p-4 text-center col-12 d-flex flex-column gap-3">
                    <span class="p-1 px-3 px-md-2 w-100 fs-5  mx-auto   fw-bold  bg-newblue text-white
                     rounded-2">We Operate with Integrity & Ethics</span>
                    <p>
                        At Whipp Digital, we hold the principles of honesty, integrity, and client respect in high regard. We don't believe in offering services that you don't need or applying a one-size-fits-all strategy to our diverse clientele.                    </p>
                    
                </div>
            
                <div class="col-md-3 p-4 text-center col-12 d-flex flex-column gap-3">
                    <span class="p-1 px-3 px-md-2 w-100 fs-5  mx-auto   fw-bold  bg-newblue text-white rounded-2">We Prioritize Our Customers</span>
                    <p>
                        While many agencies claim a customer-centric approach, few genuinely implement it. As a leading SEO agency, Whipp Digital stands out by actually putting our customers first.           
                        
                    </p>
                        
                </div>
                <div class="col-md-3 p-4 text-center col-12 d-flex flex-column gap-3">
                    <span class="p-1 px-3 px-md-2 w-100 fs-5  mx-auto   fw-bold  bg-newblue text-white rounded-2">We Deliver Proven 
                        <br>
                        Results</span>
                    <p>
                        Why engage with an SEO firm that fails to deliver the outcomes you desire? Stop wasting valuable resources on a strategy that isn't yielding results.                    </p>
                    
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
                        <source class="lozad" data-src="{{ asset('assets/imgs/WHIPPDIGITAL-category-leader-web-1.mp4') }}" type="video/mp4" />
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
            <div class="text-center">
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
            <div class="text-center">
                <h3 class="fs-2">Choose Whippdigital and Improve Your Technical SEO</h3>
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
            <div class="container wp-dg-ext-gird-comp d-flex flex-column  flex-md-row px-3 px-md-0 mx-auto justify-content-between gap-5 col-lg-9 " style="max-width: 100%">
                <div class="w-100 p-2 py-4 p-md-2 p-xl-4 border border-2 rounded-3 light-white">
                    <div class="d-flex flex-column gap-2 gap-md-2 justify-content-center align-items-center">
                        <div class="col-2 col-md-3">
                            <img
                              data-src="{{asset('assets/imgs/icons/v1/web_design.png')}}"
                              width="68" class="lozad" alt="">

                        </div>

                        <div class="text-center">

                            <a href="{{route('custom_web_design')}}"
                              class="fs-5 text-center custom-text fw-bold">
                                Website Design & Development

                            </a>
                            <p class="mt-2">
                                In a vast online landscape teeming with
                                countless websites, it is imperative that
                                your own site not only distinguishes itself but
                                also serves as a compelling reflection of your
                                identity, all the while playing a pivotal role
                                in fostering your organization's expansion.
                            </p>


                        </div>
                    </div>
                </div>
                <div class=" w-100 p-2 py-4 p-md-3 p-xl-4 border border-2 rounded-3 light-white">
                    <div class="d-flex flex-column gap-2 gap-md-2 justify-content-center align-items-center">
                        <div class="col-2 col-md-3">
                            <img
                              data-src="{{asset('assets/imgs/icons/v1/social.png')}}"
                              width="68" class="lozad" alt="">

                        </div>

                        <div class="text-center">
                            <a href="{{route('social_media_advertising')}}"
                              class="fs-5 text-center custom-text fw-bold">
                                Social Media Marketing

                            </a>
                            <p class="mt-2">
                                Encompassing a pivotal role in maintaining a
                                seamless connection with your audience, social
                                media marketing operates either in tandem with
                                your efforts or autonomously, actively engaging
                                and nurturing your social community.
                            </p>

                        </div>
                    </div>
                </div>
                <div class="w-100 p-2 py-4 p-md-2 p-xl-4 border border-2 rounded-3 light-white">
                    <div class="d-flex flex-column gap-2 gap-md-2 justify-content-center align-items-center">
                        <div class="col-2 col-md-3">
                            <img
                              data-src="{{asset('assets/imgs/icons/v1/reputation.png')}}"
                              width="68" class="lozad" alt="">

                        </div>

                        <div class="text-center">

                            <a href="{{route('online_reputation_repair')}}"
                              class="fs-5 text-center custom-text fw-bold">
                                Reputation Management

                            </a>
                            <p class="mt-2">
                                In the realm of the digital landscape, your
                                reputation reigns supreme. Our proficient team
                                of specialists is adept at safeguarding and
                                augmenting your online standing, yielding
                                substantial and enduring outcomes.
                            </p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="mt-5">
            <div class="container wp-dg-ext-gird-comp d-flex flex-column  flex-md-row px-3 px-md-0 mx-auto justify-content-between gap-5 col-lg-9 " style="max-width: 100%">
                <div class="w-100 p-2 py-4 p-md-2 p-xl-4 border border-2 rounded-3 light-white">
                    <div class="d-flex flex-column gap-2 gap-md-2 justify-content-center align-items-center">
                        <div class="col-2 col-md-3">
                            <img
                            data-src="{{asset('assets/imgs/icons/v1/convertion.png')}}"
                            width="73" class="lozad" alt="">

                        </div>

                        <div class="text-center">

                            <a href="{{route('conversion_rate_optimization')}}"
                              class="fs-5 text-center custom-text fw-bold">
                              Conversion Optimization

                            </a>
                            <p class="mt-2">
                                Transform a higher proportion of your website
                                visitors into valuable customers! Our adept
                                professionals employ cutting-edge Conversion
                                Optimization methodologies to elevate the rate
                                at which casual website browsers transition into
                                engaged and active users.
                            </p>


                        </div>
                    </div>
                </div>
                <div class=" w-100 p-2 py-4 p-md-3 p-xl-4 border border-2 rounded-3 light-white">
                    <div class="d-flex flex-column gap-2 gap-md-2 justify-content-center align-items-center">
                        <div class="col-2 col-md-3">
                            <img
                            data-src="{{asset('assets/imgs/icons/v1/video.png')}}"
                            width="65" class="lozad" alt="">

                        </div>

                        <div class="text-center">
                            <a href="#"
                              class="fs-5 text-center custom-text fw-bold">
                              Video Production
                            </a>
                            <p class="mt-2">
                                No avenue holds greater potency for conveying
                                your message than the medium of video. Captivate
                                your audience by narrating your story and
                                disseminating your mission.
                            </p>

                        </div>
                    </div>
                </div>
                <div class="w-100 p-2 py-4 p-md-2 p-xl-4 border border-2 rounded-3 light-white">
                    <div class="d-flex flex-column gap-2 gap-md-2 justify-content-center align-items-center">
                        <div class="col-2 col-md-3">
                            <img
                            data-src="{{asset('assets/imgs/icons/v1/amazon.png')}}"
                            width="80" class="lozad" alt="">

                        </div>

                        <div class="text-center">

                            <a href="{{route('amazon_marketing')}}"
                              class="fs-5 text-center custom-text fw-bold">
                              Amazon Marketing

                            </a>
                            <p class="mt-2">
                                Getting your products found on Amazon can be challenging. The competition is fierce and the marketplace is massive. But we can help you rise above the noise and get your products in front of the right buyers. We'll do this by optimizing your product listings, running targeted advertising, and helping you build a strong brand presence. 
                            </p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="my-5">
            <div class="container wp-dg-ext-gird-comp d-flex flex-column  flex-md-row px-3 px-md-0 mx-auto justify-content-between gap-5 col-lg-9 " style="max-width: 100%">
                <div class="w-100 p-2 py-4 p-md-2 p-xl-4 border border-2 rounded-3 light-white">
                    <div class="d-flex flex-column gap-2 gap-md-2 justify-content-center align-items-center">
                        <div class="col-2 col-md-3">
                            <img
                            data-src="{{asset('assets/imgs/icons/v1/seo.png')}}"
                            width="68" class="lozad" alt="">

                        </div>

                        <div class="text-center">

                            <a href="{{route('se_optimization')}}"
                              class="fs-5 text-center custom-text fw-bold">
                              Search Engine Optimization - SEO
                            </a>
                            <p class="mt-2">
                                By conducting meticulous analysis of key words
                                and employing ethical strategies, we are
                                equipped
                                to assist you in attaining prominent positions
                                within the leading search platforms.
                            </p>


                        </div>
                    </div>
                </div>
                <div class=" w-100 p-2 py-4 p-md-3 p-xl-4 border border-2 rounded-3 light-white">
                    <div class="d-flex flex-column gap-2 gap-md-2 justify-content-center align-items-center">
                        <div class="col-2 col-md-3">
                            <img
                            data-src="{{asset('assets/imgs/icons/v1/ppc.png')}}"
                            width="72" class="lozad" alt="">
                        </div>

                        <div class="text-center">
                            <a href="{{route('ppc_marketing')}}"
                              class="fs-5 text-center custom-text fw-bold">
                            Pay Per Click - PPC

                            </a>
                            <p class="mt-2">
                                While search engine optimization (SEO) provides
                                sustained and gradual growth, there are
                                instances
                                when an instant surge is necessary.
                                Whippdigital's pay-per-click (PPC)
                                campaign guarantees optimal utilization of your
                                funds, delivering immediate and impactful
                                results.
                            </p>

                        </div>
                    </div>
                </div>
                <div class="w-100 p-2 py-4 p-md-2 p-xl-4 border border-2 rounded-3 light-white">
                    <div class="d-flex flex-column gap-2 gap-md-2 justify-content-center align-items-center">
                        <div class="col-2 col-md-3">
                            <img
                            data-src="{{asset('assets/imgs/icons/v1/content.png')}}"
                            width="65" class="lozad" alt="">

                        </div>

                        <div class="text-center">

                            <a href="{{route('seo_content_writing')}}"
                              class="fs-5 text-center custom-text fw-bold">
                              Content Writing

                            </a>
                            <p class="mt-2">
                                Our team of content creators is well-versed in
                                the intricacies of Search Engine Optimization
                                (SEO), meticulously crafting marketing copy that
                                not only imparts valuable information but also
                                captivates, effectively propelling your business
                                goals forward.
                            </p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- <div class="digital_expertise_border">
            <div class="container wp-dg-ext-gird-comp row mx-auto">
                <div class="col-md-6 col-12 col-lg-4 p-2 py-4 p-md-4 p-xl-5">
                    <div class="d-flex gap-3 gap-md-0">
                        <div class="col-2 col-md-3">
                            <img
                              data-src="{{asset('assets/imgs/icons/v1/convertion.png')}}"
                              width="73" class="lozad" alt="">

                        </div>

                        <div>

                            <a href="{{route('conversion_rate_optimization')}}"
                              class="fs-5 fw-medium custom-text">
                                CONVERSION OPTIMIZATION

                            </a>
                            <p>

                                Transform a higher proportion of your website
                                visitors into valuable customers! Our adept
                                professionals employ cutting-edge Conversion
                                Optimization methodologies to elevate the rate
                                at which casual website browsers transition into
                                engaged and active users.
                            </p>


                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-12 col-lg-4 p-2 py-4 p-md-4 p-xl-5">
                    <div class="d-flex gap-3 gap-md-0">
                        <div class="col-2 col-md-3">
                            <img
                              data-src="{{asset('assets/imgs/icons/v1/video.png')}}"
                              width="65" class="lozad" alt="">

                        </div>

                        <div>
                            <a href="#" class="fs-5 fw-medium custom-text">
                                VIDEO PRODUCTION

                            </a>
                            <p>
                                No avenue holds greater potency for conveying
                                your message than the medium of video. Captivate
                                your audience by narrating your story and
                                disseminating your mission.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-12 col-lg-4 p-2 py-4 p-md-4 p-xl-5">
                    <div class="d-flex gap-3 gap-md-0">
                        <div class="col-2 col-md-3">
                            <img
                              data-src="{{asset('assets/imgs/icons/v1/amazon.png')}}"
                              width="80" class="lozad" alt="">

                        </div>

                        <div>

                            <a href="{{route('amazon_marketing')}}"
                              class="fs-5 fw-medium custom-text">
                                AMAZON MARKETING

                            </a>
                            <p>
                                Getting your products found on Amazon can be
                                challenging. The competition is fierce and the
                                marketplace is massive. But we can help you rise
                                above the noise and get your products in front
                                of the right buyers. We'll do this by optimizing
                                your product listings, running targeted
                                advertising, and helping you build a strong
                                brand presence.
                            </p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="digital_expertise_border">
            <div class="container wp-dg-ext-gird-comp row mx-auto">
                <div class="col-md-6 col-12 col-lg-4 p-2 py-4 p-md-4 p-xl-5">
                    <div class="d-flex gap-3 gap-md-0">
                        <div class="col-2 col-md-3">
                            <img
                              data-src="{{asset('assets/imgs/icons/v1/seo.png')}}"
                              width="68" class="lozad" alt="">

                        </div>

                        <div>
                            <a href="{{route('se_optimization')}}"
                              class="fs-5 fw-medium custom-text">

                                SEARCH ENGINE OPTIMIZATION – SEO

                            </a>
                            <p>
                                By conducting meticulous analysis of keywords
                                and employing ethical strategies, we are
                                equipped
                                to assist you in attaining prominent positions
                                within the leading search platforms.
                            </p>

                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-12 col-lg-4 p-2 py-4 p-md-4 p-xl-5">
                    <div class="d-flex gap-3 gap-md-0">
                        <div class="col-2 col-md-3">
                            <img
                              data-src="{{asset('assets/imgs/icons/v1/ppc.png')}}"
                              width="72" class="lozad" alt="">

                        </div>

                        <div>
                            <a href="{{route('ppc_marketing')}}"
                              class="fs-5 fw-medium custom-text">
                                PAY PER CLICK – PPC

                            </a>
                            <p>
                                While search engine optimization (SEO) provides
                                sustained and gradual growth, there are
                                instances
                                when an instant surge is necessary.
                                Whippdigital's pay-per-click (PPC)
                                campaign guarantees optimal utilization of your
                                funds, delivering immediate and impactful
                                results.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-12 col-lg-4 p-2 py-4 p-md-4 p-xl-5">
                    <div class="d-flex gap-3 gap-md-0">
                        <div class="col-2 col-md-3">
                            <img
                              data-src="{{asset('assets/imgs/icons/v1/content.png')}}"
                              width="65" class="lozad" alt="">

                        </div>

                        <div>

                            <a href="{{route('seo_content_writing')}}"
                              class="fs-5 fw-medium custom-text">
                                CONTENT WRITING

                            </a>
                            <p>
                                Our team of content creators is well-versed in
                                the intricacies of Search Engine Optimization
                                (SEO), meticulously crafting marketing copy that
                                not only imparts valuable information but also
                                captivates, effectively propelling your business
                                goals forward.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
    </section>
    <!-- DIGITAL EXPERTISE SECTION ENDS HERE -->

   


@endsection


@section('js')

<script>
const video = document.getElementById("coolVideo");



document.addEventListener("DOMContentLoaded", function () {
   video.innerHTML = `
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
   `
   video.play();
});
video.addEventListener("ended", (event) => {
    video.classList.add('fade-out')
  console.log(
    "Video stopped either because it has finished playing or no further data is available.",
  );
//   setTimeout(() => {
//       video.play();
//   }, 100);
  setTimeout(() => {
    video.play();
      video.classList.remove('fade-out')
  }, 400);
});


</script>
    
@endsection
