@extends('layouts.index')

@section('content')
    <section>
        <div class="container col-lg-8 mx-auto py-5">
            <p class="text-center">
                Thrive Internet Marketing Agency is an award-winning digital marketing company that offers a full spectrum
                of data-driven web marketing services. We develop growth-oriented online marketing campaigns that make a
                positive impact on businesses.
            </p>
            <div class="d-flex flex-column flex-md-row justify-content-between col-lg-8 mx-auto">
                <div class="gap-2 text-center d-flex flex-column justify-content-center align-items-center">
                    <img width="125" src="{{ asset('assets/imgs/icons/we-image1.svg') }}" alt="">
                    <h3 class="mb-0">OPTIMIZE</h3>
                    <p>Marketing Processes</p>
                </div>
                <div class=" gap-2 d-flex flex-column justify-content-center align-items-center text-center">
                    <img width="125" src="{{ asset('assets/imgs/icons/we-image2.svg') }}" alt="">
                    <h3 class="mb-0">GENERATE</h3>
                    <p>Targeted Results</p>
                </div>
                <div class=" gap-2 d-flex flex-column justify-content-center align-items-center text-center">
                    <img width="125" src="{{ asset('assets/imgs/icons/we-image1.svg') }}" alt="">
                    <h3 class="mb-0">GROW</h3>
                    <p>Your Brand Online</p>
                </div>
            </div>
            <div class="text-center py-4 d-flex flex-column flex-md-row gap-3  justify-content-center overflow-hidden">
                <a class="lets-talk-btn px-2 px-md-4 py-1 py-md-2 fs-5 rounded-5" href="#">STRATEGY-FIRST AGENCY</a>
                <a class="re-lets-talk-btn px-2 px-md-4 py-1 py-md-2 fs-5 rounded-5" href="#">GET MY FREE PROPOSAL</a>
            </div>
        </div>
    </section>
    <!-- TRUSTED BY BANNER STARTS HERE -->
    @include('app.static_components.trusted_banner')
    <!-- TRUSTED BY BANNER ENDS HERE -->

    <section>
        <div class="container pt-5 custom-text">
            <div class="d-flex flex-column-reverse flex-lg-row gap-3 py-4 justify-content-center">
                <div class="mx-auto mx-lg-0 col-12 px-2 px-md-0 col-md-10 col-lg-6 col-xl-5">
                    <div>
                        <h3>We’re All About
                            Relationships and Results</h3>
                        <p>
                            Established in 2005, Thrive is committed to helping businesses across industries augment their
                            marketing efforts and gain a competitive edge through comprehensive digital marketing solutions.
                        </p>
                        <p>
                            What started as a one-man shop has blossomed into a full-service digital marketing agency that
                            serves thousands of companies worldwide. Today, we have <strong>
                                thousands of active clients
                            </strong>
                            from
                            Germany, Hong Kong and the United States who have entrusted their digital success to our team.
                            We work with businesses of all sizes – from startups to large franchises – in most industries
                            and niches.
                        </p>
                        <p>As we grow, we continue to improve our processes and invest in state-of-the-art tools and
                            resources to provide our digital marketing partners with top-notch services</p>
                    </div>
                </div>
                <div
                    class="mx-sm-auto mx-lg-0 col-11 px-2 px-md-0 col-md-10 col-lg-6 col-xl-5 d-flex flex-column justify-content-center align-items-center">
                    <img src="{{ asset('assets/imgs/updated-results-desk-image.svg') }}" alt="SEO Company" width="506"
                        height="281">
                </div>
            </div>
            <div class="text-center py-4 d-flex flex-column flex-md-row gap-3  justify-content-center overflow-hidden">
                <a class="lets-talk-btn px-2 px-md-4 py-1 py-md-2 fs-5 rounded-5" href="#">OUR PORTFOLIO</a>
                <a class="re-lets-talk-btn px-2 px-md-4 py-1 py-md-2 fs-5 rounded-5" href="#">CLENT SUCCESS
                    STORIES</a>
            </div>
        </div>
    </section>


    <section class="position-relative my-5 py-4">
        <div class="container-fuild wd-green-wrapper py-5  overflow-hidden">
            <div class=" row ab-sev-n-img px-4 gap-4">
                {{-- img --}}
                <div class="col-12 col-lg-6">
                    <img class="dig-ab-img" src="{{ asset('assets/imgs/DSC03177.png') }}" alt="Thrive Team">
                </div>
                {{-- content --}}
                <div class="ab-sev-n-content  col-12 col-lg-5">
                    <h3 class="text-center text-lg-start">We Are Digital Marketing Experts</h3>
                    <p>Thrive boasts a unique, close-knit team with experts in all facets of web marketing: strategic,
                        creative and technical.</p>
                    <p>As a recognized leader in digital marketing, Thrive has more than 220 employees across 34 states and
                        located in 10 different countries. We work closely together to ensure smooth campaign development
                        and execution for all of our clients.</p>
                    <p>From the United States and South Africa to the Philippines and India, our digital marketing
                        professionals from all over the world offer unique skill sets and years of industry expertise. In
                        every project we handle, you can trust us to deliver custom web solutions that meet your long-term
                        strategic goals.</p>
                </div>
            </div>

        </div>
    </section>

    <div class="container text-center pb-5">
        <h3>
            We’re a Results-Driven Digital Marketing Agency
        </h3>
        <p>At Thrive, we take a strategy-first approach to show you real results. Our digital marketing team goes
            above and beyond to ensure our web marketing campaigns do not just drum up new business for our clients
            but also support sustainable success.
        </p>
    </div>

    {{-- SERVICES GRID SECTION STARTS HERE --}}
    <section class="pb-5">
        <div class="container col-lg-10 mx-auto row justify-content-center pt-5">
            <div class="text-center col-12 pb-5 pb-md-0 col-md-5  col-lg-3 d-flex gap-4 flex-column ">
                <div class="text-center">
                    <img src="{{ asset('assets/imgs/icons/we-agency-5.svg') }}" alt="">
                    <a href="#" class="ser-gri-link fs-5 fw-bold">Social Media Marketing</a>
                </div>
                <p>Bring your brand closer to your target audience and gain better customer engagement with social media
                    marketing. </p>
            </div>

            <div class="text-center col-12 pb-5 pb-md-0 col-md-5  col-lg-3 d-flex gap-4 flex-column ">
                <div class="text-center">
                    <img src="{{ asset('assets/imgs/icons/we-agency-1.svg') }}" alt="">
                    <a href="#" class="ser-gri-link fs-5 fw-bold">Digital Marketing</a>
                </div>
                <p>Gain complete control of your digital real estate with holistic online marketing services tailored to
                    your brand</p>
            </div>
            <div class="text-center col-12 pb-5 pb-md-0 col-md-5  col-lg-3 d-flex gap-4 flex-column ">
                <div class="text-center">
                    <img src="{{ asset('assets/imgs/icons/we-agency-7.svg') }}" alt="">
                    <a href="#" class="ser-gri-link fs-5 fw-bold">eCommerce Marketing</a>
                </div>
                <p>Facilitate a smooth buying process for your customers and reduce operational costs with strategic
                    eCommerce marketing solutions. </p>
            </div>
            <div class="text-center col-12 pb-5 pb-md-0 col-md-5  col-lg-3 d-flex gap-4 flex-column ">
                <div class="text-center">
                    <img src="{{ asset('assets/imgs/icons/amazon-we-icon.svg') }}" alt="">
                    <a href="#" class="ser-gri-link fs-5 fw-bold">Amazon Marketing</a>
                </div>
                <p>We help you optimize your Amazon product listings and improve your pricing strategy to increase your
                    Amazon sales.</p>
            </div>
        </div>
        <div class="container col-lg-9 mx-auto row justify-content-center">
            <div class="text-center col-12 pb-5 pb-md-0 col-md-5  col-lg-3 d-flex gap-4 flex-column ">
                <div class="text-center">
                    <img src="{{ asset('assets/imgs/icons/we-agency-6.svg') }}" alt="">
                    <a href="#" class="ser-gri-link fs-5 fw-bold">Online Reputation Management</a>
                </div>
                <p>What does your reputation say about your brand? Build and maintain your desired brand image to attract
                    more business. </p>
            </div>
            <div class="text-center col-12 pb-5 pb-md-0 col-md-5  col-lg-3 d-flex gap-4 flex-column ">
                <div class="text-center">
                    <img src="{{ asset('assets/imgs/icons/we-agency-2.svg') }}" alt="">
                    <a href="#" class="ser-gri-link fs-5 fw-bold">Search Engine Optimization (SEO)</a>
                </div>
                <p>Get white-hat SEO solutions that improve your organic search rankings and increase brand recognition.</p>
            </div>
            <div class="text-center col-12 pb-5 pb-md-0 col-md-5  col-lg-3 d-flex gap-4 flex-column ">
                <div class="text-center">
                    <img src="{{ asset('assets/imgs/icons/we-agency-3.svg') }}" alt="">
                    <a href="#" class="ser-gri-link fs-5 fw-bold">Pay-Per-Click (PPC) Marketing</a>
                </div>
                <p>Position your brand in front of the right people at the right time and platform with a targeted paid ads
                    campaign. </p>
            </div>
            <div class="text-center col-12 pb-5 pb-md-0 col-md-5  col-lg-3 d-flex gap-4 flex-column ">
                <div class="text-center">
                    <img src="{{ asset('assets/imgs/icons/we-agency-4.svg') }}" alt="">
                    <a href="#" class="ser-gri-link fs-5 fw-bold">Web Design and Development</a>
                </div>
                <p>Improve your website accessibility and attract lifetime clients to your business.</p>
            </div>
        </div>

    </section>
    {{-- SERVICES GRID SECTION ENDS HERE --}}




    {{-- TREE SECTION STARTS HERE --}}
    <section class="d-none d-lg-block">
        <div class="container">
            <div class="p-2 w-auto mx-auto ">

                <div class="bg-tree-container mx-auto position-relative w-100">
                    <div style="z-index: -999;"
                        class="p-4 align-items-center position-absolute custom-bg-1 rounded-5 top-0 d-flex justify-content-between w-100">

                        <div class=" col-3">


                            <h3 class="custom-text-2 fw-bold">
                                Thrive’s Core Values
                            </h3>
                            <p>Throughout the years, we stay committed to the ideas that founded our success:</p>

                        </div>
                        <div class="top-0 ">
                            <img width="348" src="{{ asset('assets/imgs/growth-mission-img.svg') }}" alt="">
                        </div>
                    </div>
                    <div class="position-absolute tree-grow-con">

                        <div class="row">
                            <div class="col-6 d-flex flex-column gap-4">
                                <div class="tree-com-left-side-pare">

                                    <div class="tree-com-left-side position-relative">
                                        <div class="tree-com-sub p-3">
                                            <div class="col-10 ms-auto tree-com-sub-content">

                                                <h6 class="text-end fw-bold custom-text fs-3 z-index-for-text">
                                                    Gratitude
                                                </h6>
                                                <p class="text-end">
                                                    We lead with an attitude of thankfulness and humility and find ways to
                                                    express
                                                    our gratitude to those around us every day. We embrace giving back,
                                                    impacting
                                                    the world for a greater good.
                                                </p>
                                            </div>
                                            <div class="tree-circle-box gra-box"> G</div>
                                        </div>
                                    </div>
                                </div>

                                <div class="tree-com-left-side-pare">

                                    <div class="tree-com-left-side position-relative">
                                        <div class="tree-com-sub p-3">
                                            <div class="col-10 ms-auto tree-com-sub-content">

                                                <h6 class="text-end fw-bold custom-text fs-3 z-index-for-text">
                                                    Ownership
                                                </h6>
                                                <p class="text-end">
                                                    We take personal responsibility for our actions and commit to
                                                    responsible stewardship over company and client resources. We apologize
                                                    when we make mistakes and work to make things right. We can do hard
                                                    things.
                                                </p>
                                            </div>
                                            <div class="tree-circle-box own-box">O</div>
                                        </div>
                                    </div>
                                </div>

                                <div class="tree-com-left-side-pare">

                                    <div class="tree-com-left-side position-relative">
                                        <div class="tree-com-sub p-3">
                                            <div class="col-10 ms-auto tree-com-sub-content">

                                                <h6 class="text-end fw-bold custom-text fs-3 z-index-for-text">
                                                    Think Bigger
                                                </h6>
                                                <p class="text-end">
                                                    We strive for continuous improvement and believe that better never
                                                    stops! We don’t take the easy way out. We embrace change, adapt and
                                                    overcome.
                                                </p>
                                            </div>
                                            <div class="tree-circle-box thi-box"> T</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 tree-com-right-side-gran-pare d-flex flex-column gap-4">
                                <div class="tree-com-right-side-pare">

                                    <div class="tree-com-right-side position-relative">
                                        <div class="tree-com-sub p-3">
                                            <div class="tree-circle-box res-box">R</div>
                                            <div class="col-10 ms-auto tree-com-sub-content">

                                                <h6 class="text-start fw-bold custom-text fs-3 z-index-for-text">
                                                    Respect
                                                </h6>
                                                <p class="text-start">
                                                    We operate with positive assumptions and give the benefit of the doubt,
                                                    choosing to see the best in ourselves and others. We will respect others
                                                    at all times and refrain from gossip or reacting with anger.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="tree-com-right-side-pare">

                                    <div class="tree-com-right-side position-relative">
                                        <div class="tree-com-sub p-3">
                                            <div class="tree-circle-box wor-box">W</div>
                                            <div class="col-10 ms-auto tree-com-sub-content">

                                                <h6 class="text-start fw-bold custom-text fs-3 z-index-for-text">
                                                    Work Ethic
                                                </h6>
                                                <p class="text-start">
                                                    We give our best effort and have high-performance expectations. We are
                                                    organized, proactive and work with a sense of urgency. We emphasize a
                                                    work-life balance where we work hard during business hours but
                                                    prioritize our time off for our own well-being.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="tree-com-right-side-pare">

                                    <div class="tree-com-right-side position-relative">
                                        <div class="tree-com-sub p-3">
                                            <div class="tree-circle-box hon-box">H</div>
                                            <div class="col-10 ms-auto tree-com-sub-content">

                                                <h6 class="text-start fw-bold custom-text fs-3 z-index-for-text">
                                                    Honesty
                                                </h6>
                                                <p class="text-start">
                                                    We seek to build trust and mutual respect by acting with integrity and
                                                    doing the right thing no matter how difficult.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- TREE SECTION ENDS HERE --}}












    {{-- OUR HISTORY SECTION STARTS HERE --}}
    <section class="py-5">
        <div class="pt-5 container-fuild wp-our-his-cotainer">
            <div class="wp-our-his-content-cotainer  mx-auto row gap-4 justify-content-center">
                <div class=" col-lg-5 d-flex flex-column justify-content-center p-3 ">
                    <p class="fw-bold fs-4">Our History</p>
                    <p>Thrive Internet Marketing Agency is the brainchild of Matt Bowman, Thrive’s president and founder.
                        Bowman grew up in an entrepreneurial family and was inspired to continue his grandparents’ legacy of
                        running a business. He saw how his grandparents took care of their customers and employees and gave
                        back to the community and wanted to adopt this culture.
                    </p>
                    <p>In 2005, Bowman ventured into digital marketing and established MLB Web Design (now called Thrive).
                        Don't think baseball with the original name. MLB are are the initials of Bowman's full name. The
                        team started expanding as the company grew in its early years and in 2012, MLB Web Design was
                        renamed Thrive Internet Marketing Agency.</p>
                    <p>What started as a small team has now grown into a full-service digital marketing company with more
                        than 220 employees across the globe. Thrive now has employees in 34 U.S. states.</p>
                </div>
                <div class="col-lg-6">
                    <img class="hs-photo-img" width="943" height="790"
                        src="{{ asset('assets/imgs/about-weare-image-new.png') }}">
                </div>
            </div>
            <div class="wp-his-main-con pt-5 mt-4 col-lg-12 justify-content-center mx-auto row position-relative z-3">
                <div class="col-8 col-sm-7 col-md-2">
                    <div class="wp-ws-his-pre">
                        <span class="wp-hs-nu">
                            2005
                        </span>
                        <p>
                            Matt Bowman became a fifth-generation business owner by starting MLB Web Design.
                        </p>
                    </div>
                </div>
                <div class="col-8 col-sm-7 col-md-2">
                    <div class="wp-ws-his-pre">
                        <span class="wp-hs-nu">
                            2012
                        </span>
                        <p>
                            In 2012, MLB Web Design rebranded to Thrive Internet Marketing Agency. </p>
                    </div>
                </div>
                <div class="col-8 col-sm-7 col-md-2">
                    <div class="wp-ws-his-pre ">
                        <span class="wp-hs-nu">
                            2016
                        </span>
                        <p>
                            Matt Bowman partnered with Kurt Knapton, a strategic investor, to support Thrive’s growth. </p>
                    </div>
                </div>
                <div class="col-8 col-sm-7 col-md-2">
                    <div class="wp-ws-his-pre">
                        <span class="wp-hs-nu">
                            2020
                        </span>
                        <p>
                            Thrive reached 15 years in business, establishing itself as one of the nation’s leading internet
                            marketing agencies </p>
                    </div>
                </div>
                <div class="col-8 col-sm-7 col-md-2">
                    <div class="wp-ws-his-pre wp-ws-his-pre-last">
                        <span class="wp-hs-nu">
                            2021
                        </span>
                        <p>
                            For the fifth consecutive year, Thrive was named to the Inc. 5000 list of fastest-growing
                            companies in America. </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- OUR HISTORY SECTION ENDS HERE --}}


    {{-- WHY WHIPP SECTION STARTS HERE --}}
    <section class="py-5 overflow-hidden">
        <div class="cotainer-fulid py-4 wp-wy-carr-container position-relative row ">
            <div class="col-10  col-md-8 mx-auto text-white  position-relative z-3 gap-4">
                <div class="text-center">
                    <img src="{{ asset('assets/imgs/Group-5648.png') }}" alt="">
                </div>
                <div class="text-center pt-4">
                    <h3 class="fs-3 fw-bold">
                        Why Whipp Digital?
                    </h3>
                    <p class="fs-6">
                        Driving Individual and Business Transformations Since 2005
                    </p>
                    <p>Thrive Internet Marketing Agency is a recognized leader in the digital marketing realm. For more than
                        17 years, we have actively built and sustained our commitment to improving the lives of our
                        employees, partner agencies and local communities through our people-centric company programs and
                        services.</p>
                    <p>If you’re passionate about doing your best work and helping others, we’d love to meet you.</p>
                </div>
                <div class="text-center py-4 d-flex flex-column flex-md-row gap-3  justify-content-center overflow-hidden">

                    <a class="lets-talk-btn px-2 px-md-4 py-1 py-md-2 fs-5 rounded-5 lets-talk-btn-bg-white"
                        href="#">LEARN MORE ABOUT
                        US</a>
                </div>
            </div>
        </div>
    </section>
    {{-- WHY WHIPP SECTION ENDS HERE --}}



    {{-- AWARD SECTION STARTS HERE --}}
    <section class="py-5">
        <div class="container py-4 custom-text col-lg-9 mx-auto custom-bg-1 rounded-4">
            <div class="d-flex flex-column flex-lg-row gap-3 py-4 justify-content-center align-items-center">
                <div
                    class="mx-sm-auto mx-lg-0 col-11 px-2 px-md-0 col-md-10 col-lg-6 col-xl-5 d-flex flex-column justify-content-center align-items-center">
                    <img src="{{ asset('assets/imgs/award-white.png') }}" alt="Internet Marketing Services">
                </div>
                <div
                    class="mx-auto mx-lg-0 col-12 px-2 px-md-0 col-md-10 col-lg-6 col-xl-5 d-flex flex-column justify-content-center">
                    <div class="">
                        <h2 class="fs-2 fw-bold py-3 text-center text-md-start">
                            Inc. 5000 Fastest-Growing Company 6 Years in a Row!
                        </h2>
                        <p>
                            Thrive is proud to rank among the <strong> <a href="#">
                                    Inc. 5000 fastest-growing companies in the United States
                                </a>
                            </strong>
                            for
                            six consecutive years. Since the Inc. 5000 List started in 1982, only 4 percent of companies
                            have made the list five times! But our commitment to success doesn’t stop here. We continuously
                            invest in our employees to ensure personal and operational excellence.
                        </p>

                    </div>
                </div>

            </div>
            <div class="text-center py-4 d-flex flex-column flex-md-row gap-3  justify-content-center overflow-hidden">

                <a class="lets-talk-btn px-2 px-md-4 py-1 py-md-2 fs-5 rounded-5 lets-talk-btn-bg-white"
                    href="#">VIEW
                    ALL OUR AWARDS</a>
            </div>
        </div>
    </section>
    {{-- AWARD SECTION ENDS HERE --}}
@endsection
