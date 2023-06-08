@extends('layouts.index')

@section('content')
    <!-- MAIN SECTION STARTS HERE -->
    <section>
        <div class="topbannerF">
            <div class="topbannerF_wrapper">
                <video autoplay="" muted="" loop="" id="myVideo" playsinline=""
                    aria-label="HomePage_Header_Texts Resize 1920 x 950" style="display: none">
                    <source src="{{ asset('assets/imgs/HomePage_Header_Texts-Resize-1920-x-950.mp4') }}" type="video/mp4" />
                </video>
                <video autoplay="" muted="" loop="" id="myVideoMobile" playsinline=""
                    aria-label="Header_Mobile">
                    <source src="{{ asset('assets/imgs/Header_Mobile.mp4') }}" type="video/mp4" />
                </video>
                <div class="topbannerF_bottom">
                    <div class="topbannerF_btnText px-3">
                        <h3 class="">Ready to experience hypergrowth? Let's talk!</h3>
                        <button class="topbanner_anotherside-link">I Want to grow</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- MAIN SECTION ENDS HERE -->

    <!-- BECOME LEADER SECTION STARTS HERE -->
    <section class="become-leader-section bg-grad-box-balck">
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
                        <source src="{{ asset('assets/imgs/MOBURST-category-leader-web-1.mp4') }}" type="video/mp4" />
                    </video>
                </div>
            </div>
            <div class="become-leader-section-container-3">
                <p class="fs-2">Ready to experience hypergrowth? Let's talk!</p>
                <div class="topbanner_anotherside-link col-12 col-lg-6 col-xl-3 mx-auto">
                    <a href="#" class="new-btn-ac"><span>I WANT TO GROW</span></a>
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
                        <source src="{{ asset('assets/imgs/Infinty-Loop-Desktop-2.mp4') }}" type="video/mp4" />
                    </video>
                </div>
            </div>
            <div class="become-leader-section-container-3">
                <p class="fs-2">Ready to experience hypergrowth? Let's talk!</p>
                <div class="topbanner_anotherside-link col-12 col-lg-6 col-xl-3 mx-auto">
                    <a href="#" class="new-btn-ac"><span>I WANT TO GROW</span></a>
                </div>
            </div>
        </div>
    </section>
    <!-- MOBILE AGENCY ENDS HERE -->

    <!-- GROW BUSINESS BANNER STARTS HERE -->
    <section class="busins_grow_custom bg-green-1">
        <div class="container py-5">
            <div class="busins_grow_hdng seo-custom-hng text-center">
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
    </section>
    <!-- GROW BUSINESS BANNER ENDS HERE -->

    <!-- LET'S TALK BANNER SECTION STARTS HERE -->
    <section>
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
            <img class="imporve-tech-seo-img" src="{{ asset('assets/imgs/awardimage2022-1-1.jpeg') }}" alt="" />
        </div>
    </section>
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
                    <img src="{{ asset('assets/imgs/technical-seo-banner.svg') }}" alt="" />
                </div>
            </div>
        </div>
    </section> --}}
    <!-- WHY TECH SEO IMPORTANT SECTION ENDS HERE -->

    <!-- TECH SEO SEARCH EXPERIENCE SECTION STARTS HERE -->
    {{-- <section>
        <div class="container py-5 custom-text">
            <h3 class="text-center pb-3 py-lg-4">
                Technical SEO: Your First Step in Creating a Better Search Experience
            </h3>
            <div class="d-flex flex-column-reverse flex-lg-row-reverse gap-3 py-4 justify-content-center">
                <div class="mx-auto mx-lg-0 col-12 px-2 px-md-0 col-md-10 col-lg-6 col-xl-5">
                    <div>
                        <p>
                            At the core of algorithm changes is one goal: to provide the
                            best user experience possible. To achieve this, you need to
                            understand carefully what is technical SEO, what it entails and
                            how you can leverage SEO technical audit to ensure your website
                            adheres to search engine guidelines and industry standards.
                        </p>
                        <p>
                            Technical on page SEO includes several components, such as site
                            speed, Accelerated Mobile Pages (AMP), robots exclusion standard
                            (robots.txt), XML sitemap status and content quality. These
                            factors are critical to your website’s online performance.
                            According to Google, a 10-second page load speed can result in a
                            <strong class="text-black">
                                123 percent increase in bounce rate.
                            </strong>
                            A one-second delay in mobile page loading time can lead to a
                            <strong class="text-black">
                                20 percent drop in conversion rate,
                            </strong>
                            an
                            <strong class="text-black">
                                11 percent decline in page views
                            </strong>
                            and a
                            <strong class="text-black">
                                16 percent decrease in customer satisfaction.
                            </strong>
                        </p>
                        <p>
                            Don’t wait until technical SEO issues cause adverse SEO
                            ramifications to your site. Invest in technical SEO for
                            eCommerce, WordPress and other content management systems (CMS)
                            now and save time and money later. Schedule a call with our
                            technical SEO consultants to find out more about technical SEO
                            for WordPress and its significance to your business.
                        </p>
                    </div>
                </div>
                <div
                    class="mx-sm-auto mx-lg-0 col-11 px-2 px-md-0 col-md-10 col-lg-6 col-xl-5 d-flex flex-column justify-content-center align-items-center">
                    <img src="{{ asset('assets/imgs/technical-seo-inner-image.svg') }}" alt="" />
                </div>
            </div>
        </div>
    </section> --}}
    <!-- TECH SEO SEARCH EXPERIENCE SECTION ENDS HERE -->

    <!-- DIGITAL EXPERTISE SECTION STARTS HERE -->
    <section class="py-4">
        <div class="py-5">
            <h3 class="custom-text fs-1 text-center">
                Our <strong> Digital Marketing Expertise </strong>
            </h3>
        </div>

        <div class="digital_expertise_border">
            <div class="container digital_expertise_content row mx-auto">
                <div class="col-md-6 col-12 col-lg-4 p-2 py-4 p-md-4 p-xl-5">
                    <div class="d-flex gap-1 gap-md-0">
                        <div class="col-2 col-md-3">
                            <img width="55" height="55" src="{{ asset('assets/imgs/info-box27.png') }}"
                                alt="" />
                        </div>

                        <div>
                            <p class="fs-5 fw-medium custom-text">
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
                            </p>
                            <p>
                                Through careful keyword research and white hat practices, we
                                can help you achieve high rankings in the major search
                                engines.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-12 col-lg-4 p-2 py-4 p-md-4 p-xl-5">
                    <div class="d-flex gap-1 gap-md-0">
                        <div class="col-2 col-md-3">
                            <img width="55" height="55" src="{{ asset('assets/imgs/info-box27.png') }}"
                                alt="" />
                        </div>

                        <div>
                            <p class="fs-5 fw-medium custom-text">
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
                            </p>
                            <p>
                                With millions of websites on the internet you want to be sure
                                your website stands out, represents you well, and most
                                importantly, helps your organization grow.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-12 col-lg-4 p-2 py-4 p-md-4 p-xl-5">
                    <div class="d-flex gap-1 gap-md-0">
                        <div class="col-2 col-md-3">
                            <img width="55" height="55" src="{{ asset('assets/imgs/info-box27.png') }}"
                                alt="" />
                        </div>

                        <div>
                            <p class="fs-5 fw-medium custom-text">
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
                            </p>
                            <p>
                                Social media marketing is a critical element in staying
                                connected with your audience. Working independently of, or
                                side-by-side with you, we help keep your social community
                                engaged.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="digital_expertise_border">
            <div class="container digital_expertise_content row mx-auto">
                <div class="col-md-6 col-12 col-lg-4 p-2 py-4 p-md-4 p-xl-5">
                    <div class="d-flex gap-1 gap-md-0">
                        <div class="col-2 col-md-3">
                            <img width="55" height="55" src="{{ asset('assets/imgs/info-box27.png') }}"
                                alt="" />
                        </div>

                        <div>
                            <p class="fs-5 fw-medium custom-text">
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
                            </p>
                            <p>
                                While SEO offers long-term growth, sometimes you need an
                                immediate boost. Thrive’s PPC campaign ensures that the money
                                you spend is put to the very best possible use.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-12 col-lg-4 p-2 py-4 p-md-4 p-xl-5">
                    <div class="d-flex gap-1 gap-md-0">
                        <div class="col-2 col-md-3">
                            <img width="55" height="55" src="{{ asset('assets/imgs/info-box27.png') }}"
                                alt="" />
                        </div>

                        <div>
                            <p class="fs-5 fw-medium custom-text">
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
                            </p>
                            <p>
                                There is no more powerful way to get your message across than
                                through video. Engage your audience by telling your story and
                                sharing your mission.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-12 col-lg-4 p-2 py-4 p-md-4 p-xl-5">
                    <div class="d-flex gap-1 gap-md-0">
                        <div class="col-2 col-md-3">
                            <img width="55" height="55" src="{{ asset('assets/imgs/info-box27.png') }}"
                                alt="" />
                        </div>

                        <div>
                            <p class="fs-5 fw-medium custom-text">
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
                            </p>
                            <p>
                                Our content writers know Search Engine Optimization and create
                                great marketing copy, designed to be informative and
                                compelling, pushing your business objectives.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="digital_expertise_border">
            <div class="container digital_expertise_content row mx-auto">
                <div class="col-md-6 col-12 col-lg-4 p-2 py-4 p-md-4 p-xl-5">
                    <div class="d-flex gap-1 gap-md-0">
                        <div class="col-2 col-md-3">
                            <img width="55" height="55" src="{{ asset('assets/imgs/info-box27.png') }}"
                                alt="" />
                        </div>

                        <div>
                            <p class="fs-5 fw-medium custom-text">
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
                            </p>
                            <p>
                                Your reputation is everything. Our team of experts can help
                                protect and enhance your reputation online for tangible,
                                long-term results.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-12 col-lg-4 p-2 py-4 p-md-4 p-xl-5">
                    <div class="d-flex gap-1 gap-md-0">
                        <div class="col-2 col-md-3">
                            <img width="55" height="55" src="{{ asset('assets/imgs/info-box27.png') }}"
                                alt="" />
                        </div>

                        <div>
                            <p class="fs-5 fw-medium custom-text">
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
                            </p>
                            <p>
                                Turn more site visitors into customers! Our experts utilize
                                the latest Conversion Optimization techniques to help increase
                                the percentage of passive website visitors into active users.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-12 col-lg-4 p-2 py-4 p-md-4 p-xl-5">
                    <div class="d-flex gap-1 gap-md-0">
                        <div class="col-2 col-md-3">
                            <img width="55" height="55" src="{{ asset('assets/imgs/info-box27.png') }}"
                                alt="" />
                        </div>

                        <div>
                            <p class="fs-5 fw-medium custom-text">
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
                            </p>
                            <p>
                                Getting found on Amazon is not easy! Competition is fierce and
                                thick. We'll help your products get found in this massive
                                marketplace.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- DIGITAL EXPERTISE SECTION ENDS HERE -->
@endsection
