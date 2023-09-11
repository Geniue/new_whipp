@extends('layouts.index')




@section('title')
    FAQ's | Whippdigital  
@endsection

@section('meta')


<meta name="title" content="FAQ's | Whippdigital ">
<meta name="description" content="Elevate your online presence with Whipp Digital's comprehensive services. From SEO transformation to social media management, we're your partner in navigating the digital landscape. Join us for transformative experiences and meaningful connections.">
<meta name="keywords" content="Comprehensive Services, Online Presence, SEO Transformation, Social Media Management, Digital Landscape, Transformative Experiences, Meaningful Connections">

<link rel="canonical" href="{{ url()->current() }}">

<meta property="og:site_name" content="FAQ's | Whippdigital">
<meta property="og:title" content="FAQ's | Whippdigital">
<meta property="og:description" content="Elevate your online presence with Whipp Digital's comprehensive services. From SEO transformation to social media management, we're your partner in navigating the digital landscape. Join us for transformative experiences and meaningful connections.">
<meta property="og:url" content="{{ url()->current() }}">
<meta property="og:type" content="website">
<meta property="og:image" content="{{ asset('assets/imgs/tech_whipp.png') }}">
<meta property="fb:admins" content="admin">
<meta name="twitter:title" content="Whippdigital | Home">
<meta name="twitter:description"
    content="Elevate your online presence with Whipp Digital's comprehensive services. From SEO transformation to social media management, we're your partner in navigating the digital landscape. Join us for transformative experiences and meaningful connections.">
<meta name="twitter:image"
    content="{{ asset('assets/imgs/tech_whipp.png') }}">
<meta name="twitter:url" content="{{ url()->current() }}">
<meta name="twitter:card" content="summary">

<meta itemprop="name" content="FAQ's | Whippdigital">
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





@section('pageheading')
    <!-- CONTACT TITLE BANNER SECTION STARTS HERE -->
    <section class="desk-con-ti-ba-section d-none d-lg-block">
        <div class="container text-center py-4">
            <h2 class="fs-1 fw-bold custom-text">FAQ'S</h2>
            <p class="custom-text-2 fs-5">
                Frequently asked questions
            </p>
            <div class="text-center py-4">
                <button  class="iwantgrow_btn  lets-talk-btn col-5 col-md-4 col-lg-2 d-inline-block py-2 fs-5 rounded-5" >Let's Go</button>
            </div>
        </div>
    </section>
    <!-- CONTACT TITLE BANNER SECTION ENDS HERE -->
@endsection
@section('content')
    <!-- BLOG TITLE BANNER SECTION STARTS HERE -->
    <section class="con-ti-ba-section pb-4 d-lg-none">
        <div class="container text-center py-4">
            <h2 class="fs-1 fw-bold custom-text text-ellipsis-4">FAQ'S</h2>
            <p class="custom-text-2 fs-5 ">
                Frequently asked questions
            </p>
        </div>
        <div class="text-center py-4">
            <button  class="iwantgrow_btn  lets-talk-btn col-5 col-md-4 col-lg-2 d-inline-block py-2 fs-5 rounded-5" >Let's Go</button>
        </div>
    </section>
    <!-- BLOG TITLE BANNER SECTION ENDS HERE -->


    <!-- SERVICES FAQ'S SECTION STARTS HERE -->
    <section>
        <div class="container py-5">
            <div class="text-center py-4">
                <h2 class="fs-2 fw-bold custom-text-1">
                    Whipp Digital FAQs
                </h2>
            </div>
            <!-- accordion -->
            <div>
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                <span>

                                    WHAT IS DIGITAL MARKETING?
                                </span>
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Digital marketing encompasses all aspects and activities of
                                marketing an organization, business, or brand across digital
                                channels on the internet. Digital marketing strategies and
                                tactics are crafted to target specific online audiences across
                                a variety of internet-connected devices. Digital marketing
                                includes optimization across search engines (the likes of
                                Google and Bing), visibility and engagement on social media
                                platforms, email marketing communications, website design and
                                development and integrated applications to connect and engage
                                with prospects and customers.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                <span>

                                    WHAT DOES A DIGITAL MARKETER DO?
                                </span>
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                A digital marketer is a marketing specialist who understands
                                how to develop and deploy effective marketing strategies
                                online. A digital marketer understands connecting with an
                                online audience. They can ensure your brand engages with your
                                consumer from the first point of contact through after-sales
                                service.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                <span>

                                    WOULD MY BUSINESS BENEFIT FROM DIGITAL MARKETING?
                                </span>
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Every single brand has to have an online representation of the
                                business. However, your digital footprint won't have any
                                impact if you don't market it successfully. Every business
                                would benefit from an ongoing, comprehensive digital marketing
                                strategy and the support of an expert marketing team.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                <span>
                                    HOW COST-EFFECTIVE IS DIGITAL MARKETING COMPARED WITH
                                    TRADITIONAL MARKETING?
                                </span>
                            </button>
                        </h2>
                        <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Digital marketing is cost-effective in that you can get your
                                message directly in front of your ideal audience. Consider
                                that traditional marketing casts a wide net across the general
                                public. In contrast, digital marketing takes a targeted
                                approach and engages the consumer with the right message at
                                the right time. You can measure your digital marketing efforts
                                and the costs involved quite easily and mitigate unnecessary
                                spending. This is far more difficult with traditional
                                marketing campaigns. What's more, the costs involved with
                                hiring a digital marketing agency are dependent on the project
                                scope.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                <span>

                                    HOW DO YOY IDENTIFY A SUCCESSFUL DIGITAL MARKETING COMPANY?
                                </span>
                            </button>
                        </h2>
                        <div id="collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Look for a company that takes the time to assess your current
                                and future marketing needs. A digital marketing agency worth
                                its salt won’t promise immediate results because digital
                                strategies take time to yield results. But it will boast a
                                team of experts able to identify needs and gaps in your
                                current strategy. What’s more, they will work with you to
                                establish outcomes, align with your goals and offer
                                consistent, transparent reporting. Be cautious about companies
                                offering a quick fix. Choose an agency with proven successes,
                                client testimonials and case studies and outstanding reviews
                                across their services.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- SERVICES FAQ'S SECTION ENDS HERE -->
@endsection
