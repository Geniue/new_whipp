@extends('layouts.index')
@section('title')
<title>Whippdigital | Home</title>
@endsection
@section('content')
    <!-- MAIN SECTION STARTS HERE -->
    <section>
        <div class="topbannerF">
            <div class="topbannerF_wrapper">
                <video autoplay="" muted="" loop="" class="lozad" id="myVideo" playsinline=""
                    aria-label="HomePage_Header_Texts Resize 1920 x 950" style="display: none">
                    <source class="lozad" data-src="{{ asset('assets/imgs/new_whippintro.mp4') }}" type="video/mp4" />
                </video>
                <video autoplay="" muted="" loop="" id="myVideoMobile" playsinline=""
                    aria-label="Header_Mobile">
                    <source class="lozad" data-src="{{ asset('assets/imgs/new_whippintro.mp4') }}" type="video/mp4" />
                </video>
                <div class="topbannerF_bottom">
                    <div class="topbannerF_btnText px-3">
                        <h3 class="">Eager for a taste of hypergrowth? Let's Connect!?</h3>
                        <button class="iwantgrow_btn topbanner_anotherside-link">I Want to grow</button>
                    </div>
                </div>
            </div>
        </div>
    </section>


        <!-- TECH SEO SEARCH EXPERIENCE SECTION STARTS HERE -->
    <section>
        <div class="container py-5 custom-text">
           
            <div class="d-flex flex-column flex-lg-row gap-3 py-4 justify-content-center">
                <div class="mx-auto mx-lg-0 col-12 px-2 px-md-0 col-md-10 col-lg-6 col-xl-5 d-flex align-items-center">
                    <div>

                        <h2 class="fs-1 fw-bold">
                            The Last Digital Marketing 
                            <br>
                            Agency You’ll Ever Need.
                        </h2>
                        <h3 class="fs-2 fw-medium pt-4">
                            Get marketing that drives results
         
         
                         </h3>
                             <div class="pt-4 w-100   pb-4 justify-content-start align-items-center d-flex ">
                                 <span style="width: 28%;border-radius: 8px; display: inline-block;height: 3px;background-color: deepskyblue;"></span>
                             </div>
                        <p class="fs-4">
                            Ready to level up your strategy? We’re here to help. For 10 years we’ve provided full-service digital marketing expertise.
                        </p>
                        <div class="d-flex  py-4">
                            <button class=" iwantgrow_btn lettalkbtn_hasarrow px-3 cta-btn-btn col-6 fs-5 col-md-8  col-xl-6  d-flex justify-content-center align-items-center gap-2 py-2  rounded-5 text-uppercase fw-bold" href="#">Let's talk 
                                <svg id="arrow" fill="#ffffff" height="20" width="20" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="-51.21 -51.21 614.51 614.51" xml:space="preserve" stroke="#ffffff" stroke-width="23.044230000000002"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <g> <g> <path d="M263.641,248.4L18.308,3.067c-4.16-4.053-10.987-3.947-15.04,0.32c-3.947,4.16-3.947,10.667,0,14.827l237.76,237.76 L3.268,493.733c-4.267,4.053-4.373,10.88-0.213,15.04c4.16,4.16,10.88,4.373,15.04,0.213c0.107-0.107,0.213-0.213,0.213-0.213 L263.641,263.44C267.801,259.28,267.801,252.56,263.641,248.4z"></path> <path d="M508.974,248.4L263.641,3.067c-4.267-4.053-10.987-3.947-15.04,0.213c-3.947,4.16-3.947,10.667,0,14.827l237.76,237.76 l-237.76,237.867c-4.267,4.053-4.373,10.88-0.213,15.04c4.16,4.16,10.88,4.373,15.04,0.213c0.107-0.107,0.213-0.213,0.213-0.213 L508.974,263.44C513.135,259.28,513.135,252.56,508.974,248.4z"></path> </g> </g> </g> </g></svg>
                        </div>
                    </div>
                </div>
                <div
                    class="mx-sm-auto mx-lg-0 col-11 px-2 px-md-0 col-md-10 col-lg-6 col-xl-5 d-flex flex-column justify-content-center align-items-center">
                    <img class="lozad" data-src="{{ asset('assets/imgs/JUMP_image.webp') }}" alt="" />
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
                        <source class="lozad" data-src="{{ asset('assets/imgs/MOBURST-category-leader-web-1.mp4') }}" type="video/mp4" />
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

    <!-- LET'S TALK BANNER SECTION STARTS HERE -->
    {{-- <section>
        <div class="container py-5">
            <div class="text-center">
                <h3 class="fs-2">Choose Thrive and Improve Your Technical SEO</h3>
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

    <!-- LET'S TALK BANNER SECTION ENDS HERE -->

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
    <section class="py-5">
        <div class="py-5">
            <h3 class="custom-text fs-1 text-center">
                Expertise in  <strong> Digital Marketing Expertise </strong>
            </h3>
        </div>

        <div class="digital_expertise_border">
            <div class="container wp-dg-ext-gird-comp row mx-auto">
                <div class="col-md-6 col-12 col-lg-4 p-2 py-4 p-md-4 p-xl-5">
                    <div class="d-flex gap-3 gap-md-0">
                        <div class="col-2 col-md-3">
                            <svg fill="#30A2FF" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="60" height="60" viewBox="0 0 399.997 399.997" xml:space="preserve"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <g> <g> <path d="M366.684,24.971H33.316C14.945,24.971,0,39.917,0,58.288V275.56c0,18.371,14.945,33.317,33.316,33.317h107.412 l-20.387,44.955c-2.105,4.643-1.709,10.037,1.053,14.321c2.762,4.285,7.51,6.873,12.607,6.873h131.996c0.006,0,0.014,0,0.02,0 c8.285,0,15-6.715,15-15c0-2.493-0.605-4.848-1.686-6.916l-20.062-44.233h107.412c18.371,0,33.316-14.946,33.316-33.317V58.288 C400,39.917,385.055,24.971,366.684,24.971z M370,275.561c0,1.829-1.488,3.316-3.316,3.316H33.316 c-1.828,0-3.316-1.487-3.316-3.316V58.288c0-1.829,1.488-3.317,3.316-3.317h333.367c1.828,0,3.316,1.488,3.316,3.317L370,275.561 L370,275.561z"></path> <path d="M246.198,96.434c-1.057-1.056-2.921-0.9-4.166,0.344l-16.273,16.271c-1.247,1.247-1.4,3.116-0.348,4.171l23.103,23.103 c0.525,0.526,1.261,0.751,2.013,0.688c0.756-0.063,1.53-0.413,2.157-1.038l16.271-16.272c1.244-1.245,1.4-3.111,0.343-4.166 L246.198,96.434z"></path> <path d="M146.336,197.582c-0.684-0.684-1.748-0.882-2.791-0.523c-1.042,0.359-1.902,1.226-2.257,2.271l-11.118,32.934 c-0.353,1.037-0.148,2.089,0.532,2.768c0.512,0.517,1.24,0.759,2.011,0.693c0.248-0.021,0.503-0.073,0.756-0.16l32.934-11.12 c1.044-0.354,1.912-1.215,2.27-2.256c0.362-1.041,0.162-2.107-0.521-2.792L146.336,197.582z"></path> <path d="M229.504,182.228c1.451-0.662,2.51-1.965,2.859-3.519c0.35-1.555-0.047-3.185-1.071-4.405 c-1.92-2.283-3.929-4.604-5.997-6.941l18.078-18.077c0.596-0.597,0.972-1.375,1.033-2.157c0.065-0.779-0.185-1.505-0.689-2.01 l-23.104-23.101c-1.056-1.058-2.92-0.903-4.166,0.344l-17.63,17.633c-11.824-11.209-23.699-21.209-34.165-28.732 c-7.369-5.296-20.85-14.199-28.355-14.313c-1.37-0.024-2.695,0.512-3.668,1.479c-0.976,0.966-1.519,2.285-1.508,3.657 c0.039,5.114,4.528,14.341,12.639,25.977c7.72,11.075,18.326,23.802,30.426,36.563l-23,23.002 c-1.248,1.247-1.403,3.111-0.346,4.166l23.103,23.101c0.525,0.531,1.254,0.755,2.011,0.691c0.752-0.063,1.533-0.414,2.155-1.035 l23.446-23.447c2.047,1.811,4.077,3.571,6.079,5.268c0.929,0.787,2.097,1.209,3.296,1.209c0.271,0,0.543-0.022,0.815-0.065 c1.471-0.239,2.765-1.109,3.539-2.383c1.368-2.248,3.15-4.479,5.301-6.626C223.281,185.806,226.284,183.693,229.504,182.228z"></path> <path d="M242.292,186.495c-5.938,0-11.606,2.531-16.396,7.32c-5.748,5.748-8.257,11.777-7.257,17.438 c0.993,5.604,5.446,10.627,12.22,13.771c5.827,2.707,11.138,3.546,15.821,4.287c4.932,0.778,9.585,1.516,13.726,4.325 c0.857,0.585,1.859,0.882,2.864,0.882c0.706,0,1.415-0.146,2.079-0.444c1.613-0.719,2.74-2.225,2.977-3.977 c1.775-13.241-0.765-25.133-7.152-33.476C256.245,190.186,249.363,186.495,242.292,186.495z"></path> </g> </g> </g> </g></svg>
                        </div>

                        <div>

                            <a href="{{route('custom_web_design')}}" class="fs-5 fw-medium custom-text">
                                WEBSITE DESIGN & DEVELOPMENT
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    version="1.1" id="Layer_1" x="0px" y="0px"
                                    viewBox="0 0 492.004 492.004"
                                    style="
                  margin-bottom: 3px;
                  transform: scale(1.2);
                  enable-background: new 0 0 492.004 492.004; /* stroke: blanchedalmond; */
                "
                                    xml:space="preserve" width="13px" height="13px">
                                    <g>
                                        <g>
                                            <g>
                                                <path
                                                    d="M382.678,226.804L163.73,7.86C158.666,2.792,151.906,0,144.698,0s-13.968,2.792-19.032,7.86l-16.124,16.12    c-10.492,10.504-10.492,27.576,0,38.064L293.398,245.9l-184.06,184.06c-5.064,5.068-7.86,11.824-7.86,19.028    c0,7.212,2.796,13.968,7.86,19.04l16.124,16.116c5.068,5.068,11.824,7.86,19.032,7.86s13.968-2.792,19.032-7.86L382.678,265    c5.076-5.084,7.864-11.872,7.848-19.088C390.542,238.668,387.754,231.884,382.678,226.804z"
                                                    data-original="#000000" class="active-path" data-old_color="#000000"
                                                    fill="#576C2C"></path>
                                            </g>
                                        </g>
                                    </g>
                                </svg>
                            </a>
                            <p>
                                In a vast online landscape teeming with countless websites, it is imperative that 
                                your own site not only distinguishes itself but also serves as a compelling reflection of your identity, all the while playing a pivotal role in fostering your organization's expansion.
                            </p>

                         

                          
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-12 col-lg-4 p-2 py-4 p-md-4 p-xl-5">
                    <div class="d-flex gap-3 gap-md-0">
                        <div class="col-2 col-md-3">
                         <svg version="1.1" id="_x32_" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="50" height="50" viewBox="0 0 512 512" xml:space="preserve" fill="#000000" stroke="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <style type="text/css">  .st0{fill:#30A2FF;}  </style> <g> <path class="st0" d="M278.172,297.375l-51.203,51.188c0.016,0.594,0.031,1.188,0.031,1.781c0,8.406-1.594,16.781-4.766,24.625 c-3.203,7.813-7.922,15.156-14.375,21.563l-33.672,33.719c-6.453,6.438-13.766,11.156-21.609,14.344 c-7.859,3.188-16.219,4.781-24.609,4.781c-8.375,0-16.75-1.594-24.594-4.75c-7.844-3.219-15.156-7.938-21.625-14.375 c-6.438-6.438-11.156-13.75-14.344-21.594s-4.781-16.219-4.781-24.625c0-8.375,1.594-16.75,4.781-24.594 s7.906-15.156,14.344-21.625l33.719-33.688c6.438-6.406,13.734-11.156,21.594-14.344c7.828-3.188,16.219-4.781,24.594-4.781 c0.594,0,1.188,0.031,1.766,0.063l51.203-51.234c-1.594-0.734-3.203-1.422-4.844-2.078c-15.422-6.25-31.781-9.375-48.125-9.375 s-32.719,3.125-48.125,9.375c-15.422,6.25-29.906,15.688-42.359,28.094l-33.688,33.719c-12.438,12.406-21.859,26.906-28.109,42.344 S0,367.688,0,384.031s3.125,32.719,9.375,48.156c6.25,15.406,15.672,29.906,28.109,42.313 c12.422,12.469,26.922,21.906,42.344,28.125c15.438,6.281,31.797,9.375,48.141,9.375c16.359,0,32.719-3.094,48.141-9.375 c15.422-6.219,29.922-15.656,42.344-28.125l33.703-33.656c12.422-12.469,21.844-26.938,28.109-42.344 c6.266-15.469,9.359-31.813,9.375-48.156c-0.016-16.313-3.109-32.688-9.375-48.156 C279.594,300.594,278.891,298.969,278.172,297.375z"></path> <path class="st0" d="M502.625,79.844c-6.25-15.438-15.672-29.938-28.109-42.359c-12.422-12.422-26.922-21.859-42.359-28.109 C416.734,3.125,400.375,0,384.031,0s-32.719,3.125-48.141,9.375s-29.922,15.688-42.344,28.109l-33.703,33.703 C247.422,83.594,238,98.094,231.734,113.531c-6.266,15.406-9.359,31.781-9.359,48.141c0,16.344,3.094,32.703,9.359,48.141 c0.672,1.625,1.359,3.219,2.094,4.828l51.203-51.203c-0.016-0.578-0.031-1.156-0.031-1.766c0-8.391,1.594-16.781,4.781-24.609 c3.188-7.844,7.906-15.156,14.359-21.625l33.672-33.688c6.453-6.406,13.766-11.141,21.625-14.344 c7.813-3.156,16.203-4.781,24.594-4.781c8.406,0,16.75,1.625,24.625,4.781c7.813,3.203,15.141,7.938,21.594,14.344 c6.438,6.469,11.156,13.781,14.344,21.625c3.156,7.844,4.781,16.219,4.781,24.594c0,8.391-1.625,16.75-4.781,24.625 c-3.188,7.844-7.906,15.156-14.344,21.594l-33.688,33.688c-6.438,6.438-13.766,11.156-21.625,14.344 c-7.828,3.188-16.203,4.781-24.594,4.781c-0.594,0-1.188-0.016-1.766-0.031l-51.203,51.219c1.594,0.719,3.203,1.422,4.813,2.063 c15.453,6.281,31.813,9.406,48.156,9.406s32.719-3.125,48.125-9.406c15.422-6.25,29.906-15.672,42.359-28.094l33.688-33.703 c12.438-12.422,21.859-26.922,28.109-42.359c6.25-15.406,9.375-31.781,9.375-48.125S508.875,95.25,502.625,79.844z"></path> <path class="st0" d="M160.219,351.781c12.234,12.25,32.063,12.25,44.281,0L351.781,204.5c12.219-12.219,12.25-32.031,0-44.281 c-12.234-12.219-32.063-12.219-44.281,0L160.219,307.531C148,319.75,148,339.563,160.219,351.781z"></path> </g> </g></svg>
                        </div>

                        <div>
                            <a href="{{route('social_media_advertising')}}" class="fs-5 fw-medium custom-text">
                                SOCIAL MEDIA MARKETING 
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    version="1.1" id="Layer_1" x="0px" y="0px"
                                    viewBox="0 0 492.004 492.004"
                                    style="
                  margin-bottom: 3px;
                  transform: scale(1.2);
                  enable-background: new 0 0 492.004 492.004; /* stroke: blanchedalmond; */
                "
                                    xml:space="preserve" width="13px" height="13px">
                                    <g>
                                        <g>
                                            <g>
                                                <path
                                                    d="M382.678,226.804L163.73,7.86C158.666,2.792,151.906,0,144.698,0s-13.968,2.792-19.032,7.86l-16.124,16.12    c-10.492,10.504-10.492,27.576,0,38.064L293.398,245.9l-184.06,184.06c-5.064,5.068-7.86,11.824-7.86,19.028    c0,7.212,2.796,13.968,7.86,19.04l16.124,16.116c5.068,5.068,11.824,7.86,19.032,7.86s13.968-2.792,19.032-7.86L382.678,265    c5.076-5.084,7.864-11.872,7.848-19.088C390.542,238.668,387.754,231.884,382.678,226.804z"
                                                    data-original="#000000" class="active-path" data-old_color="#000000"
                                                    fill="#576C2C"></path>
                                            </g>
                                        </g>
                                    </g>
                                </svg>
                            </a>
                            <p>
                                Encompassing a pivotal role in maintaining a seamless connection with your audience, social media marketing operates either in tandem with your efforts or autonomously, actively engaging and nurturing your social community.
                            </p>
                          
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-12 col-lg-4 p-2 py-4 p-md-4 p-xl-5">
                    <div class="d-flex gap-3 gap-md-0">
                        <div class="col-2 col-md-3">
                            <svg height="60" width="60" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 16.555 16.555" xml:space="preserve" fill="#30A2FF" stroke="#30A2FF" stroke-width="0.00016555"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <g> <path style="fill:#30A2FF;" d="M6.409,7.421c0.034,0.207,0.114,0.337,0.193,0.42C6.789,9.084,7.83,10.24,8.781,10.24 c1.11,0,2.12-1.25,2.314-2.397c0.08-0.082,0.16-0.213,0.195-0.422c0.063-0.233,0.146-0.639,0.002-0.828 c-0.007-0.01-0.017-0.019-0.022-0.028c0.133-0.489,0.303-1.501-0.303-2.19C10.912,4.306,10.572,3.9,9.846,3.686L9.5,3.566 C8.928,3.39,8.568,3.35,8.553,3.349c-0.026-0.002-0.053,0-0.078,0.006C8.454,3.361,8.387,3.379,8.334,3.372 c-0.137-0.02-0.342,0.05-0.378,0.064C7.909,3.455,6.802,3.898,6.466,4.93C6.435,5.013,6.3,5.452,6.479,6.527 c-0.027,0.018-0.05,0.041-0.071,0.067C6.264,6.783,6.345,7.188,6.409,7.421z"></path> <path style="fill:#30A2FF;" d="M12.33,10.637c0,0-0.045-0.015-0.114-0.037c-0.478-0.224-0.929-0.367-0.929-0.367 c-0.098-0.033-0.182-0.067-0.26-0.103c-0.322-0.159-0.592-0.34-0.648-0.51c0,0,0.188,1.81-1.395,1.851l-0.219-0.01 c-1.433-0.127-1.528-1.845-1.528-1.845c-0.15,0.471-1.952,1.019-1.952,1.019c-0.536,0.204-0.762,0.514-0.762,0.514 c-0.792,1.176-0.885,3.789-0.885,3.789c0.01,0.598,0.268,0.66,0.268,0.66c1.821,0.812,4.679,0.955,4.679,0.955 c0.154,0.004,0.298-0.004,0.441-0.013l0.003,0.015c0,0,2.858-0.145,4.679-0.957c0,0,0.258-0.063,0.269-0.658 c0,0-0.094-2.614-0.886-3.789C13.092,11.148,12.865,10.841,12.33,10.637z"></path> <path style="fill:#30A2FF;" d="M10.316,9.698c0.021-0.026,0.041-0.052,0.063-0.078c-0.004-0.017-0.005-0.026-0.005-0.026 C10.356,9.632,10.336,9.661,10.316,9.698z"></path> <path style="fill:#30A2FF;" d="M7.246,9.614L7.241,9.595L7.237,9.616c0.001-0.004,0.004-0.009,0.006-0.011 C7.243,9.605,7.244,9.607,7.246,9.614z"></path> <path style="fill:#30A2FF;" d="M8.732,0C4.436,0,0.94,3.496,0.94,7.792c0,0.849,0.148,1.692,0.417,2.492l-0.702-0.157 c-0.277-0.065-0.55,0.111-0.612,0.388c-0.062,0.275,0.111,0.549,0.388,0.611l2.332,0.523c0.038,0.008,0.075,0.012,0.112,0.012 c0.234,0,0.446-0.162,0.5-0.399l0.499-2.221c0.062-0.276-0.112-0.55-0.387-0.612C3.208,8.368,2.937,8.54,2.875,8.816L2.706,9.571 C2.537,8.998,2.441,8.404,2.441,7.792c0-3.47,2.823-6.292,6.292-6.292s6.292,2.823,6.292,6.292c0,1.047-0.262,2.082-0.758,2.992 l1.318,0.717c0.614-1.131,0.939-2.412,0.939-3.709C16.524,3.496,13.028,0,8.732,0z"></path> </g> </g> </g></svg>
                        </div>

                        <div>

                            <a href="{{route('online_reputation_repair')}}" class="fs-5 fw-medium custom-text">
                                REPUTATION MANAGEMENT
<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    version="1.1" id="Layer_1" x="0px" y="0px"
                                    viewBox="0 0 492.004 492.004"
                                    style="
                  margin-bottom: 3px;
                  transform: scale(1.2);
                  enable-background: new 0 0 492.004 492.004; /* stroke: blanchedalmond; */
                "
                                    xml:space="preserve" width="13px" height="13px">
                                    <g>
                                        <g>
                                            <g>
                                                <path
                                                    d="M382.678,226.804L163.73,7.86C158.666,2.792,151.906,0,144.698,0s-13.968,2.792-19.032,7.86l-16.124,16.12    c-10.492,10.504-10.492,27.576,0,38.064L293.398,245.9l-184.06,184.06c-5.064,5.068-7.86,11.824-7.86,19.028    c0,7.212,2.796,13.968,7.86,19.04l16.124,16.116c5.068,5.068,11.824,7.86,19.032,7.86s13.968-2.792,19.032-7.86L382.678,265    c5.076-5.084,7.864-11.872,7.848-19.088C390.542,238.668,387.754,231.884,382.678,226.804z"
                                                    data-original="#000000" class="active-path" data-old_color="#000000"
                                                    fill="#576C2C"></path>
                                            </g>
                                        </g>
                                    </g>
                                </svg>
                            </a>
                            <p>
                                In the realm of the digital landscape, your reputation reigns supreme. Our proficient team of specialists is adept at safeguarding and augmenting your online standing, yielding substantial and enduring outcomes.
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
                            <svg fill="#30A2FF" width="60" height="60" viewBox="0 0 24 24" role="img" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path d="M12 .037C5.373.037 0 5.394 0 12c0 6.606 5.373 11.963 12 11.963 6.628 0 12-5.357 12-11.963C24 5.394 18.627.037 12 .037zm-.541 4.8c1.91-.13 3.876.395 5.432 1.934 1.426 1.437 2.51 3.44 2.488 5.317h2.133l-4.444 4.963-4.445-4.963h2.313c-.001-1.724-.427-2.742-1.78-4.076-1.325-1.336-2.667-2.11-4.978-2.303a9.245 9.245 0 0 1 3.281-.871zM6.934 6.95l4.445 4.963H9.066c0 1.724.426 2.742 1.778 4.076 1.326 1.336 2.667 2.112 4.978 2.305-2.684 1.268-6.22 1.398-8.71-1.064-1.427-1.437-2.512-3.44-2.489-5.317H2.488L6.934 6.95z"></path></g></svg>
                        </div>

                        <div>

                            <a href="{{route('conversion_rate_optimization')}}" class="fs-5 fw-medium custom-text">
                                CONVERSION OPTIMIZATION
<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    version="1.1" id="Layer_1" x="0px" y="0px"
                                    viewBox="0 0 492.004 492.004"
                                    style="
                  margin-bottom: 3px;
                  transform: scale(1.2);
                  enable-background: new 0 0 492.004 492.004; /* stroke: blanchedalmond; */
                "
                                    xml:space="preserve" width="13px" height="13px">
                                    <g>
                                        <g>
                                            <g>
                                                <path
                                                    d="M382.678,226.804L163.73,7.86C158.666,2.792,151.906,0,144.698,0s-13.968,2.792-19.032,7.86l-16.124,16.12    c-10.492,10.504-10.492,27.576,0,38.064L293.398,245.9l-184.06,184.06c-5.064,5.068-7.86,11.824-7.86,19.028    c0,7.212,2.796,13.968,7.86,19.04l16.124,16.116c5.068,5.068,11.824,7.86,19.032,7.86s13.968-2.792,19.032-7.86L382.678,265    c5.076-5.084,7.864-11.872,7.848-19.088C390.542,238.668,387.754,231.884,382.678,226.804z"
                                                    data-original="#000000" class="active-path" data-old_color="#000000"
                                                    fill="#576C2C"></path>
                                            </g>
                                        </g>
                                    </g>
                                </svg>
                            </a>
                            <p>
                       
                                Transform a higher proportion of your website visitors into valuable customers! Our adept professionals employ cutting-edge Conversion Optimization methodologies to elevate the rate at which casual website browsers transition into engaged and active users.
                            </p>
                            
                           
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-12 col-lg-4 p-2 py-4 p-md-4 p-xl-5">
                    <div class="d-flex gap-3 gap-md-0">
                        <div class="col-2 col-md-3">
                           <svg width="62" height="62" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path fill-rule="evenodd" clip-rule="evenodd" d="M4.76447 3.12199C5.63151 3.04859 6.56082 3 7.5 3C8.43918 3 9.36849 3.04859 10.2355 3.12199C11.2796 3.21037 11.9553 3.27008 12.472 3.39203C12.9425 3.50304 13.2048 3.64976 13.4306 3.88086C13.4553 3.90618 13.4902 3.94414 13.5133 3.97092C13.7126 4.20149 13.8435 4.4887 13.918 5.03283C13.9978 5.6156 14 6.37644 14 7.52493C14 8.66026 13.9978 9.41019 13.9181 9.98538C13.8439 10.5206 13.7137 10.8061 13.5125 11.0387C13.4896 11.0651 13.4541 11.1038 13.4296 11.1287C13.2009 11.3625 12.9406 11.5076 12.4818 11.6164C11.9752 11.7365 11.3143 11.7942 10.2878 11.8797C9.41948 11.9521 8.47566 12 7.5 12C6.52434 12 5.58052 11.9521 4.7122 11.8797C3.68572 11.7942 3.02477 11.7365 2.51816 11.6164C2.05936 11.5076 1.7991 11.3625 1.57037 11.1287C1.54593 11.1038 1.51035 11.0651 1.48748 11.0387C1.28628 10.8061 1.15612 10.5206 1.08193 9.98538C1.00221 9.41019 1 8.66026 1 7.52493C1 6.37644 1.00216 5.6156 1.082 5.03283C1.15654 4.4887 1.28744 4.20149 1.48666 3.97092C1.5098 3.94414 1.54468 3.90618 1.56942 3.88086C1.7952 3.64976 2.05752 3.50304 2.52796 3.39203C3.04473 3.27008 3.7204 3.21037 4.76447 3.12199ZM0 7.52493C0 5.28296 0 4.16198 0.729985 3.31713C0.766457 3.27491 0.815139 3.22194 0.854123 3.18204C1.63439 2.38339 2.64963 2.29744 4.68012 2.12555C5.56923 2.05028 6.52724 2 7.5 2C8.47276 2 9.43077 2.05028 10.3199 2.12555C12.3504 2.29744 13.3656 2.38339 14.1459 3.18204C14.1849 3.22194 14.2335 3.27491 14.27 3.31713C15 4.16198 15 5.28296 15 7.52493C15 9.74012 15 10.8477 14.2688 11.6929C14.2326 11.7348 14.1832 11.7885 14.1444 11.8281C13.3629 12.6269 12.3655 12.71 10.3709 12.8763C9.47971 12.9505 8.50782 13 7.5 13C6.49218 13 5.52028 12.9505 4.62915 12.8763C2.63446 12.71 1.63712 12.6269 0.855558 11.8281C0.816844 11.7885 0.767442 11.7348 0.731221 11.6929C0 10.8477 0 9.74012 0 7.52493ZM5.25 5.38264C5.25 5.20225 5.43522 5.08124 5.60041 5.15369L10.428 7.27105C10.6274 7.35853 10.6274 7.64147 10.428 7.72895L5.60041 9.84631C5.43522 9.91876 5.25 9.79775 5.25 9.61736V5.38264Z" fill="#30A2FF"></path> </g></svg>
                        </div>

                        <div>
                            <a href="#" class="fs-5 fw-medium custom-text">
                              VIDEO PRODUCTION
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    version="1.1" id="Layer_1" x="0px" y="0px"
                                    viewBox="0 0 492.004 492.004"
                                    style="
                  margin-bottom: 3px;
                  transform: scale(1.2);
                  enable-background: new 0 0 492.004 492.004; /* stroke: blanchedalmond; */
                "
                                    xml:space="preserve" width="13px" height="13px">
                                    <g>
                                        <g>
                                            <g>
                                                <path
                                                    d="M382.678,226.804L163.73,7.86C158.666,2.792,151.906,0,144.698,0s-13.968,2.792-19.032,7.86l-16.124,16.12    c-10.492,10.504-10.492,27.576,0,38.064L293.398,245.9l-184.06,184.06c-5.064,5.068-7.86,11.824-7.86,19.028    c0,7.212,2.796,13.968,7.86,19.04l16.124,16.116c5.068,5.068,11.824,7.86,19.032,7.86s13.968-2.792,19.032-7.86L382.678,265    c5.076-5.084,7.864-11.872,7.848-19.088C390.542,238.668,387.754,231.884,382.678,226.804z"
                                                    data-original="#000000" class="active-path" data-old_color="#000000"
                                                    fill="#576C2C"></path>
                                            </g>
                                        </g>
                                    </g>
                                </svg>
                            </a>
                            <p>
                                No avenue holds greater potency for conveying your message than the medium of video. Captivate your audience by narrating your story and disseminating your mission.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-12 col-lg-4 p-2 py-4 p-md-4 p-xl-5">
                    <div class="d-flex gap-3 gap-md-0">
                        <div class="col-2 col-md-3">
                            <svg width="65" height="65" viewBox="0 0 32 32" id="OBJECT" xmlns="http://www.w3.org/2000/svg" fill="#30A2FF" stroke="#30A2FF"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><defs><style>.cls-1{fill:#ffffff;}</style></defs><title></title><path d="M30.87,26l-10-17.32a1,1,0,0,0-.61-.47,1,1,0,0,0-.76.1l-6.06,3.5a1,1,0,0,0-.37,1.37l10,17.32a1,1,0,0,0,.87.5h0a1,1,0,0,0,.86-.5l1.74-3,3.46,0a1,1,0,0,0,.87-.5A1,1,0,0,0,30.87,26Z"></path><path d="M18.56,11.81,12.5,8.31a1.05,1.05,0,0,0-.76-.1,1,1,0,0,0-.61.47L1.13,26a1,1,0,0,0,0,1,1,1,0,0,0,.87.5l3.46,0,1.74,3a1,1,0,0,0,.86.5h0a1,1,0,0,0,.87-.5l10-17.32A1,1,0,0,0,18.56,11.81Z"></path><circle class="cls-1" cx="16" cy="13" r="12"></circle><path d="M23,10.33a1,1,0,0,0-.8-.68l-3.63-.53L16.9,5.81a1,1,0,0,0-1.8,0L13.48,9.12l-3.63.53a1,1,0,0,0-.55,1.71l2.63,2.58-.62,3.64a1,1,0,0,0,.4,1,1,1,0,0,0,1,.07L16,16.92l3.24,1.71a1,1,0,0,0,.47.12,1,1,0,0,0,.58-.19,1,1,0,0,0,.4-1l-.62-3.64,2.63-2.58A1,1,0,0,0,23,10.33Z"></path></g></svg>
                        </div>

                        <div>

                            <a  href="{{route('amazon_marketing')}}" class="fs-5 fw-medium custom-text">
                                AMAZON MARKETING
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    version="1.1" id="Layer_1" x="0px" y="0px"
                                    viewBox="0 0 492.004 492.004"
                                    style="
                  margin-bottom: 3px;
                  transform: scale(1.2);
                  enable-background: new 0 0 492.004 492.004; /* stroke: blanchedalmond; */
                "
                                    xml:space="preserve" width="13px" height="13px">
                                    <g>
                                        <g>
                                            <g>
                                                <path
                                                    d="M382.678,226.804L163.73,7.86C158.666,2.792,151.906,0,144.698,0s-13.968,2.792-19.032,7.86l-16.124,16.12    c-10.492,10.504-10.492,27.576,0,38.064L293.398,245.9l-184.06,184.06c-5.064,5.068-7.86,11.824-7.86,19.028    c0,7.212,2.796,13.968,7.86,19.04l16.124,16.116c5.068,5.068,11.824,7.86,19.032,7.86s13.968-2.792,19.032-7.86L382.678,265    c5.076-5.084,7.864-11.872,7.848-19.088C390.542,238.668,387.754,231.884,382.678,226.804z"
                                                    data-original="#000000" class="active-path" data-old_color="#000000"
                                                    fill="#576C2C"></path>
                                            </g>
                                        </g>
                                    </g>
                                </svg>
                            </a>
                            <p>
                                Getting your products found on Amazon can be challenging. The competition is fierce and the marketplace is massive. But we can help you rise above the noise and get your products in front of the right buyers. We'll do this by optimizing your product listings, running targeted advertising, and helping you build a strong brand presence.
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
                            <svg fill="#30A2FF" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="75" height="75" viewBox="0 0 64.325 64.324" xml:space="preserve"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <path d="M5.865,34.72c-1.906,0-3.754-0.614-4.957-1.231L0,37.184c1.114,0.616,3.344,1.202,5.602,1.202 c5.426,0,7.977-2.815,7.977-6.129c0-2.786-1.643-4.604-5.132-5.895c-2.552-0.969-3.666-1.525-3.666-2.786 c0-1.027,0.938-1.907,2.874-1.907s3.344,0.558,4.135,0.939l0.998-3.607c-1.174-0.528-2.816-0.997-5.045-0.997 c-4.663,0-7.479,2.58-7.479,5.953c0,2.874,2.141,4.692,5.426,5.836c2.375,0.851,3.314,1.555,3.314,2.785 C9.004,33.869,7.918,34.72,5.865,34.72z"></path> <polygon points="29.211,34.427 21.088,34.427 21.088,29.735 28.36,29.735 28.36,26.098 21.088,26.098 21.088,21.992 28.801,21.992 28.801,18.326 16.6,18.326 16.6,38.093 29.211,38.093 "></polygon> <path d="M44.326,39.593c2.775,0,5.318-0.999,7.298-2.653l3.937,3.674c-0.006,0.41,0.143,0.816,0.465,1.117l5.777,5.394 c0.289,0.27,0.655,0.403,1.022,0.403c0.401,0,0.802-0.16,1.097-0.478c0.565-0.604,0.532-1.556-0.072-2.12l-5.777-5.393 c-0.322-0.301-0.74-0.42-1.146-0.387l-3.885-3.625c1.671-1.983,2.684-4.541,2.684-7.332c0-6.285-5.112-11.397-11.397-11.397 S32.929,21.91,32.929,28.194C32.928,34.48,38.041,39.593,44.326,39.593z"></path> </g> </g></svg>
                        </div>

                        <div>
                            <a href="{{route('se_optimization')}}" class="fs-5 fw-medium custom-text">
                                
                                SEARCH ENGINE OPTIMIZATION – SEO
                                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                    version="1.1" id="Layer_1" x="0px" y="0px"
                                                                    viewBox="0 0 492.004 492.004"
                                                                    style="
                                                  margin-bottom: 3px;
                                                  transform: scale(1.2);
                                                  enable-background: new 0 0 492.004 492.004; /* stroke: blanchedalmond; */
                                                "
                                                                    xml:space="preserve" width="13px" height="13px">
                                                                    <g>
                                                                        <g>
                                                                            <g>
                                                                                <path
                                                                                    d="M382.678,226.804L163.73,7.86C158.666,2.792,151.906,0,144.698,0s-13.968,2.792-19.032,7.86l-16.124,16.12    c-10.492,10.504-10.492,27.576,0,38.064L293.398,245.9l-184.06,184.06c-5.064,5.068-7.86,11.824-7.86,19.028    c0,7.212,2.796,13.968,7.86,19.04l16.124,16.116c5.068,5.068,11.824,7.86,19.032,7.86s13.968-2.792,19.032-7.86L382.678,265    c5.076-5.084,7.864-11.872,7.848-19.088C390.542,238.668,387.754,231.884,382.678,226.804z"
                                                                                    data-original="#000000" class="active-path" data-old_color="#000000"
                                                                                    fill="#576C2C"></path>
                                                                            </g>
                                                                        </g>
                                                                    </g>
                                                                </svg>
                                                            </a>
                                                            <p>
                                                                By conducting meticulous analysis of keywords and employing ethical strategies, we are equipped 
                                                                to assist you in attaining prominent positions within the leading search platforms.
                                                            </p>
                           
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-12 col-lg-4 p-2 py-4 p-md-4 p-xl-5">
                    <div class="d-flex gap-3 gap-md-0">
                        <div class="col-2 col-md-3">
                           <svg fill="#30A2FF" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 491.52 491.52" xml:space="preserve" width="58" height="58"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <g> <path d="M0,311.204v51.007c0,5.232,4.241,9.473,9.471,9.473h472.578c5.231,0,9.471-4.241,9.471-9.473v-51.007H0z M245.76,355.059 c-7.519,0-13.617-6.094-13.617-13.615c0-7.52,6.097-13.618,13.617-13.618c7.521,0,13.618,6.098,13.618,13.618 C259.378,348.965,253.281,355.059,245.76,355.059z"></path> </g> </g> <g> <g> <rect x="150.07" y="387.532" width="191.39" height="36.31"></rect> </g> </g> <g> <g> <rect x="129.13" y="439.702" width="233.22" height="32.968"></rect> </g> </g> <g> <g> <path d="M191.74,114.46c-37.781,0-68.516,30.736-68.516,68.516c0,37.78,30.735,68.516,68.516,68.516 c37.78,0,68.519-30.736,68.519-68.516C260.259,145.196,229.521,114.46,191.74,114.46z M191.74,235.636 c-29.037,0-52.661-23.62-52.661-52.66c0-29.04,23.624-52.66,52.661-52.66c29.04,0,52.664,23.621,52.664,52.66 C244.404,212.016,220.78,235.636,191.74,235.636z"></path> </g> </g> <g> <g> <path d="M212.71,183.61c-3.528-2.997-9.045-5.391-16.557-7.153h-0.296V158.04c5.028,0.718,9.7,2.614,14.009,5.685l6.371-9.019 c-6.402-4.37-13.197-6.826-20.38-7.343v-5h-6.271v4.895c-6.334,0.329-11.482,2.291-15.432,5.884 c-3.951,3.588-5.928,8.214-5.928,13.858c0,5.654,1.718,9.921,5.146,12.79c3.429,2.88,8.83,5.191,16.214,6.953v19.009 c-5.811-0.909-11.462-3.755-16.951-8.524l-7.152,8.524c7.121,6.212,15.154,9.768,24.104,10.684v7.154h6.271v-7.056 c6.662-0.328,12.016-2.289,16.067-5.878c4.05-3.596,6.076-8.243,6.076-13.961C218.001,190.979,216.238,186.616,212.71,183.61z M189.586,174.696c-3.66-1.173-6.139-2.4-7.447-3.676c-1.308-1.275-1.958-2.997-1.958-5.189c0-2.187,0.833-4.018,2.495-5.488 c1.667-1.467,3.972-2.335,6.91-2.599V174.696z M203.305,203.304c-1.829,1.508-4.313,2.418-7.447,2.744V188.41 c3.919,1.18,6.598,2.44,8.033,3.771c1.435,1.339,2.156,3.159,2.156,5.438C206.047,199.908,205.131,201.806,203.305,203.304z"></path> </g> </g> <g> <g> <path d="M482.049,18.85H9.471C4.241,18.85,0,23.088,0,28.319V295.35h28.083V63.835c0-8.942,7.181-16.211,16.011-16.211h403.335 c8.83,0,16.011,7.269,16.011,16.211V295.35h28.08V28.319C491.52,23.088,487.28,18.85,482.049,18.85z"></path> </g> </g> <g> <g> <path d="M447.429,63.48H44.094l-0.15,231.871h403.635L447.429,63.48z M191.743,271.76c-49.034,0-88.787-39.75-88.787-88.785 c0-49.035,39.752-88.785,88.787-88.785c41.244,0,75.818,28.165,85.796,66.281l2.375,32.607 C274.892,237.348,237.356,271.76,191.743,271.76z M376.53,280.102l-32.777-32.777l-14.521,28.208l-42.158-100.836l100.838,42.156 l-28.209,14.52l32.777,32.778L376.53,280.102z"></path> </g> </g> </g></svg>
                        </div>

                        <div>
                            <a  href="{{route('ppc_marketing')}}" class="fs-5 fw-medium custom-text">
                                PAY PER CLICK – PPC
                                 <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                     version="1.1" id="Layer_1" x="0px" y="0px"
                                     viewBox="0 0 492.004 492.004"
                                     style="
                   margin-bottom: 3px;
                   transform: scale(1.2);
                   enable-background: new 0 0 492.004 492.004; /* stroke: blanchedalmond; */
                 "
                                     xml:space="preserve" width="13px" height="13px">
                                     <g>
                                         <g>
                                             <g>
                                                 <path
                                                     d="M382.678,226.804L163.73,7.86C158.666,2.792,151.906,0,144.698,0s-13.968,2.792-19.032,7.86l-16.124,16.12    c-10.492,10.504-10.492,27.576,0,38.064L293.398,245.9l-184.06,184.06c-5.064,5.068-7.86,11.824-7.86,19.028    c0,7.212,2.796,13.968,7.86,19.04l16.124,16.116c5.068,5.068,11.824,7.86,19.032,7.86s13.968-2.792,19.032-7.86L382.678,265    c5.076-5.084,7.864-11.872,7.848-19.088C390.542,238.668,387.754,231.884,382.678,226.804z"
                                                     data-original="#000000" class="active-path" data-old_color="#000000"
                                                     fill="#576C2C"></path>
                                             </g>
                                         </g>
                                     </g>
                                 </svg>
                             </a>
                             <p>
                                 While search engine optimization (SEO) provides sustained and gradual growth, there are instances 
                                 when an instant surge is necessary. Thrive's pay-per-click (PPC)
                                  campaign guarantees optimal utilization of your funds, delivering immediate and impactful results.
                             </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-12 col-lg-4 p-2 py-4 p-md-4 p-xl-5">
                    <div class="d-flex gap-3 gap-md-0">
                        <div class="col-2 col-md-3">
                            <svg fill="#30A2FF" width="60" height="60" viewBox="0 0 256 256" id="Flat" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M216,40H40A16.01833,16.01833,0,0,0,24,56V200a16.01833,16.01833,0,0,0,16,16H216a16.01833,16.01833,0,0,0,16-16V56A16.01833,16.01833,0,0,0,216,40ZM180,168H76a8,8,0,0,1,0-16H180a8,8,0,0,1,0,16Zm0-32H76a8,8,0,0,1,0-16H180a8,8,0,0,1,0,16Zm0-32H76a8,8,0,0,1,0-16H180a8,8,0,0,1,0,16Z"></path> </g></svg>
                        </div>

                        <div>

                       <a href="{{route('seo_content_writing')}}" class="fs-5 fw-medium custom-text">
                                CONTENT WRITING
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    version="1.1" id="Layer_1" x="0px" y="0px"
                                    viewBox="0 0 492.004 492.004"
                                    style="
                  margin-bottom: 3px;
                  transform: scale(1.2);
                  enable-background: new 0 0 492.004 492.004; /* stroke: blanchedalmond; */
                "
                                    xml:space="preserve" width="13px" height="13px">
                                    <g>
                                        <g>
                                            <g>
                                                <path
                                                    d="M382.678,226.804L163.73,7.86C158.666,2.792,151.906,0,144.698,0s-13.968,2.792-19.032,7.86l-16.124,16.12    c-10.492,10.504-10.492,27.576,0,38.064L293.398,245.9l-184.06,184.06c-5.064,5.068-7.86,11.824-7.86,19.028    c0,7.212,2.796,13.968,7.86,19.04l16.124,16.116c5.068,5.068,11.824,7.86,19.032,7.86s13.968-2.792,19.032-7.86L382.678,265    c5.076-5.084,7.864-11.872,7.848-19.088C390.542,238.668,387.754,231.884,382.678,226.804z"
                                                    data-original="#000000" class="active-path" data-old_color="#000000"
                                                    fill="#576C2C"></path>
                                            </g>
                                        </g>
                                    </g>
                                </svg>
                            </a>
                            <p>
                                Our team of content creators is well-versed in the intricacies of Search Engine Optimization (SEO), meticulously crafting marketing copy that not only imparts valuable information but also captivates, effectively propelling your business goals forward.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- DIGITAL EXPERTISE SECTION ENDS HERE -->

    <section>
        <div class="container py-5 custom-text">
            <div class="col-lg-10 px-3 px-lg-0  mx-auto">

                <h2 class="fs-1 text-center mb-3">
                    
                    Why Choose WhippDigital For Your
                    <br>
<b>
    Digital Marketing Agency?
</b>

</h2>
<p class="mt-2">Thrive is a full-service digital marketing agency. We’ve been providing a wide range of services to clients of all industries since 2005. Our digital marketing services include consulting and management options for a variety of online marketing tactics including search engine optimization (SEO), pay-per-click (PPC) ads, Amazon store optimization, copywriting, conversion rate optimization (CRO), and more. We also offer expert web design and development services for both eCommerce and B2B companies. Don’t just partner with any digital marketing agency; work with a company you can trust.</p>
</div>
            <div class="d-flex flex-column-reverse flex-lg-row gap-3 py-5 justify-content-center">
   
                <div class="mx-auto mx-lg-0 col-12 px-2 px-md-0 col-md-10 col-lg-6 col-xl-5">
                    <div class="pb-lg-3">
                        <h3 class="d-none d-lg-block feture-head">
                            Meet our team of digital marketing experts


                        </h3>
                               <div class="pt-4 pb-4 justify-content-start align-items-center d-none d-lg-flex">
                            <span style="width: 25%;border-radius: 8px; display: inline-block;height: 3px;background-color: deepskyblue;"></span>
                        </div>
                    </div>
                    <div>
                        <p class="feture-pare">
                            You might have a website, but it isn’t doing your business much good if it isn’t being picked up by the search engines. To make sure customers find your site online, we can take your online presence to the next level — your website design, copywriting, keywords, social media presence and more. Working with us, you get the most from your return on marketing investment.
<b>

    Here are some reasons why:
</b>

</p>
                    </div>
                </div>
                <div
                class="mx-sm-auto mx-lg-0 col-12 px-2 px-md-0 col-md-10 col-lg-6 col-xl-5 d-flex flex-column justify-content-center align-items-center">
                <h3 class=" d-lg-none feture-head">
                    Meet our team of digital marketing experts


                </h3>
                    <div class="pt-4 w-100   pb-4 justify-content-start align-items-center d-flex d-lg-none">
                        <span style="width: 28%;border-radius: 8px; display: inline-block;height: 3px;background-color: deepskyblue;"></span>
                    </div>
                <img width="600" class="lozad" data-src="{{ asset('assets/imgs/whipp_images/Social Media  Marketing/Social Media Advertising/v1/like-heart-symbol-on-dollar-2022-12-03-02-00-07-utc.jpg ') }}" alt="" />
            </div>
            </div>
            <div class="row col-lg-12 mx-auto">
                <div class="col-md-3 p-4 text-center col-12 d-flex flex-column gap-3">
                    <span class="p-1 px-3 px-md-2 w-fit fs-5  mx-auto   fw-bold  bg-newblue text-white rounded-2">We Have Proven Results</span>
                    <p>
                        Why would you work with an SEO services firm that doesn’t provide you with the results you are looking for? Stop throwing away your hard-earned money on a strategy that isn’t converting. 
                    </p>
                    <a class="fw-bold" href="#">Read More +</a>
                </div>
                <div class="col-md-3 p-4 text-center col-12 d-flex flex-column gap-3">
                    <span class="p-1 px-3 px-md-2 w-fit fs-5  mx-auto   fw-bold  bg-newblue text-white rounded-2">We Know Digital Marketing</span>
                    <p>
                        Working with an digital marketing company that actually knows digital marketing seems obvious, but unfortunately, many firms fail to deliver positive results. Our strategies are proven to work.                     </p>
                    <a class="fw-bold" href="#">Read More +</a>
                </div>
                <div class="col-md-3 p-4 text-center col-12 d-flex flex-column gap-3">
                    <span class="p-1 px-3 px-md-2 w-fit fs-5  mx-auto   fw-bold  bg-newblue text-white
                     rounded-2">We Are Honest & Ethical</span>
                    <p>
                        At Thrive, we believe in honesty, integrity, and respecting our clients. We don’t believe in “selling” a service that you don’t need or applying a one-size-fits-all approach to each client. 
                    </p>
                    <a class="fw-bold" href="#">Read More +</a>
                </div>
            
                <div class="col-md-3 p-4 text-center col-12 d-flex flex-column gap-3">
                    <span class="p-1 px-3 px-md-2 w-fit fs-5  mx-auto   fw-bold  bg-newblue text-white rounded-2">We Put Customers First</span>
                    <p>
                        Maintaining a customer-centric focus is a priority for many marketing agencies, however, few actually follow through. As a SEO Agency, Thrive is different.                     </p>
                    <a class="fw-bold" href="#">Read More +</a>
                </div>
            </div>
        </div>
    </section>





@endsection