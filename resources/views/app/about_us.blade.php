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
@endsection
