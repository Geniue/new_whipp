@extends('layouts.index')

@section('content')
    {{-- MAIN DIGITAL MARKETING AGENCY SECTION STARTS HERE --}}

    <section>
        <div class="container pb-5">
            <div class="row gap-3">
                {{-- content --}}
                <div class="col-lg-6 p-5">
                    {{--  title --}}
                    <div class="text-center text-capitalize">
                        <h2 class="custom-text-2 fs-2 fw-bold">
                            ARLINGTON
                            DIGITAL MARKETING AGENCY
                        </h2>
                        <p class="fs-5">
                            Amplify Your Business
                            With Growth-Focused Digital Solutions
                        </p>
                    </div>
                    {{-- img & description --}}
                    <div class="d-flex flex-column ">
                        <div class="">
                            <img class="lozad" data-src="{{ asset('assets/imgs/Arlington-Digital-Marketing_1200.jpg') }}" alt="">
                        </div>
                        <div class="age-con-des-k">
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Officia tempore voluptas a
                                repellendus, impedit facere magni aspernatur voluptates iste nesciunt aut, sequi, nemo
                                ipsum? Mollitia pariatur quaerat quis earum ducimus quas corporis exercitationem libero
                                perspiciatis?</p>
                        </div>
                    </div>

                </div>
                <div class="age-form-container col-lg-5 p-4">
                    <div class="age-form-head-con  ">

                        <div class="py-2 fs-3 bg-custom-3 fw-bold text-center text-white mb-0">
                            <h3>GET MY FREE PROPOSAL</h3>
                        </div>
                        <form action="" class="px-4 py-2 age-cont-ma-form d-flex flex-column gap-3">
                            <p class="pt-1 text-center custom-text">We just need a little info to <strong><a href="/"
                                        class="custom-text-2">get
                                        started</a></strong></p>
                            <input type="text" placeholder="Select the services you need" class="w-100">
                            <input type="text" class="w-100" placeholder="Website Address? (if you have one)">
                            <textarea name="" id="" cols="30" rows="10" placeholder="Tell us about your business"
                                class="w-100"></textarea>
                            <button type="submit" class="age-con-for-get-btn">GET STARTED </button>
                            <p class="text-center custom-text">In a hurry? Give us a call now at <strong><a
                                        href="tel:930-34-3434" class="custom-text-2">930-34-3434</a></strong>
                            </p>
                        </form>
                        <div class="py-2">
                            <p class="fw-bold fs-3 custom-text text-center">HOW IT
                                <span class="custom-text-2">
                                    WORKS
                                </span>
                            </p>
                            <div class="how-it-works-cont d-flex">
                                <div class="steps column-1"><span class="number">1</span><br>
                                    <span class="text line">Complete Form</span>
                                </div>
                                <div class="steps column-2"><span class="number">2</span><br>
                                    <span class="text line">Free Consultation</span>
                                </div>
                                <div class="steps column-3"><span class="number">3</span><br>
                                    <span class="text">Get Proposal</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- cta for free proposal --}}
            </div>
        </div>
    </section>

    {{-- MAIN DIGITAL MARKETING AGENCY SECTION ENDS HERE --}}

    <!-- TRUSTED BY BANNER STARTS HERE -->
    @include('app.static_components.trusted_banner')
    <!-- TRUSTED BY BANNER ENDS HERE -->

    {{-- OUR CLIENTS GET RESULT SECTION STARTS HERE --}}
    <section>
        <div class="container py-4 ">
            <div class="text-center">
                <h2 class="fw-bold fs-1 custom-text-2 py-2">
                    <span class="custom-text">
                        Our Arlington Digital Marketing
                    </span>
                    Clients Get Results
                </h2>
            </div>
            <div class="row col-lg-10 mx-auto">
                <div class="col-lg-6 p-3">
                    {{-- img --}}
                    <div class="text-center text-lg-start">

                        <img class="lozad" data-src="{{ asset('assets/imgs/Arlington-Digital-Marketing_1200.jpg') }}" alt="">

                    </div>
                    {{-- result --}}
                    <div class="some-big-gne-quote fs-5 fw-bold w-100 mt-1 text-center">
                        <p class="mb-0 py-1">
                            "The results speak for themselves"
                        </p>
                    </div>
                    <div class="row">
                        <div class="col text-center custom-text border-right">
                            <div class="wp-res-per fw-bold">
                                +800%
                            </div>
                            <span class="font-18 text-center">
                                Organic Traffic
                            </span>
                        </div>
                        <div class="col text-center custom-text">
                            <div class="wp-res-per fw-bold">
                                +640%
                            </div>
                            <span class="font-18 text-center">
                                Conversion Rate
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 p-3">
                    {{-- img --}}
                    <div class="text-center text-lg-start">

                        <img class="lozad" data-src="{{ asset('assets/imgs/Arlington-Digital-Marketing_1200.jpg') }}" alt="">

                    </div>
                    {{-- result --}}
                    <div class="some-big-gne-quote fs-5 fw-bold w-100 mt-1 text-center">
                        <p class="mb-0 py-1">
                            "Thrive goes above and beyond"
                        </p>
                    </div>
                    <div class="row">
                        <div class="col text-center custom-text border-right">
                            <div class="wp-res-per fw-bold">
                                +664%
                            </div>
                            <span class="font-18 text-center">
                                Organic Traffic
                            </span>
                        </div>
                        <div class="col text-center custom-text">
                            <div class="wp-res-per fw-bold">
                                +360%
                            </div>
                            <span class="font-18 text-center">
                                Online Leads
                            </span>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    {{-- OUR CLIENTS GET RESULT SECTION ENDS HERE --}}


    {{-- DON'T TAKE WORDS SECTION STARTS HERE --}}
    <section class="border-top">
        <div class="container py-5">
            <div class="text-center">
                <h2 class="fw-bold fs-1 custom-text-2 py-2">
                    <span class="custom-text">
                        But Don't Take
                    </span>
                    Our Word For It
                </h2>
            </div>
            <div class="col-lg-10 mx-auto row justify-content-center pt-5">
                <div class="text-center col-12 pb-5 pb-md-0 col-md-5  col-lg-4 d-flex  flex-column ">
                    <div class="text-center ">
                        <img class="lozad" data-src="{{ asset('assets/imgs/icons/we-agency-1.svg') }}" alt="">
                        <p class="ser-gri-link fs-5 custom-text  fw-bold underline-none mb-0">Marci Wiersma</p>
                        <p class="mb-0 ">Broker - About Roatan Real Estate</p>
                        <p class="some-big-gne-quote fw-bold mb-0 mt-1">
                            “They do everything they say...no BS”
                        </p>
                    </div>
                    <p>“Thrive is a much-needed blessing and exceeded our expectations in every way. They are honest,
                        straightforward, they take care of ALL your needs quickly, they are reliable, you can count on them
                        and most of all, they do everything they say they will do, no BS.”</p>
                </div>
                <div class="text-center col-12 pb-5 pb-md-0 col-md-5  col-lg-4 d-flex  flex-column ">
                    <div class="text-center">
                        <img class="lozad" data-src="{{ asset('assets/imgs/icons/we-agency-7.svg') }}" alt="">
                        <p class="mb-0 ser-gri-link fs-5 fw-bold underline-none custom-text">Whitney Wells Lewis</p>
                        <p class="mb-0">Practice Manager - PARC Urology</p>
                        <p class="some-big-gne-quote fw-bold  mt-1">
                            “These guys are incredible”
                        </p>
                    </div>
                    <p>“These guys are incredible. They've helped us to grow our business and now the biggest problem we
                        seem to come across is having too much business - which is the ideal problem to have. We are right
                        where we wanted to be and Thrive made that possible. Thanks guys!”</p>
                </div>
                <div class="text-center col-12 pb-5 pb-md-0 col-md-5  col-lg-4 d-flex  flex-column ">
                    <div class="text-center">
                        <img class="lozad" data-src="{{ asset('assets/imgs/icons/amazon-we-icon.svg') }}" alt="">
                        <p class="mb-0 ser-gri-link fs-5 fw-bold underline-none custom-text">Chad Montgomery</p>
                        <p class="mb-0">CEO - Accurate Leak and Line</p>
                        <p class="some-big-gne-quote fw-bold  mt-1">
                            “Unrivaled customer support”
                        </p>
                    </div>
                    <p>“Working with the Thrive team has been a most pleasant experience! Their dedication and passion for
                        what they do is exemplified by their unrivaled customer support and attentiveness to the specific
                        needs of our business. We look forward to a long-lasting and prosperous relationship!”</p>
                </div>
            </div>
        </div>
    </section>
    {{-- DON'T TAKE WORDS SECTION ENDS HERE --}}




    {{-- SERVICES GRID SECTION STARTS HERE --}}
    <section class="p-5">
        <div class="container col-lg-10 mx-auto row justify-content-center pt-5">
            <div class="text-center col-12 pb-5 pb-md-0 col-md-5  col-lg-4 d-flex  flex-column ">
                <div class="text-center">
                    <img class="lozad" data-src="{{ asset('assets/imgs/icons/we-agency-1.svg') }}" alt="">
                    <p class="ser-gri-link fs-5 fw-bold underline-none">We Value Ethics and Integrity</p>
                </div>
                <p>Our culture and work ethic are the biggest factors for Thrive’s success and growth over the years. At
                    Thrive, we are extremely focused on our client’s needs and work with a client-first attitude. We do our
                    best to provide honest and ethical services to our clients while continuing to meet the business needs
                    and goals. We make sure everyone on our team understands and respects the goals and interests of our
                    clients. Thrive teams focus on creating solid, results-oriented digital marketing solutions to help our
                    clients’ businesses achieve their sales and marketing goals.</p>
            </div>
            <div class="text-center col-12 pb-5 pb-md-0 col-md-5  col-lg-4 d-flex  flex-column ">
                <div class="text-center">
                    <img class="lozad" data-src="{{ asset('assets/imgs/icons/we-agency-7.svg') }}" alt="">
                    <p class="ser-gri-link fs-5 fw-bold underline-none">Proven Track Record
                    </p>
                </div>
                <p>Why throw away your hard-earned money and efforts on solutions that don’t deliver results? When you
                    partner with Thrive, you’re choosing an agency with a proven track record of success. Your business will
                    gain a competitive advantage through the work we do for and with you. We have helped thousands of
                    clients grow their leads, increase conversions and positively impact profits by boosting their digital
                    presence. Our digital marketing experts in Arlington use proven, data-driven solutions and follow the
                    latest online trends to enhance our methods. We’ve been in the industry since 2005 and it is our mandate
                    to bring out the best in every brand. </p>
            </div>
            <div class="text-center col-12 pb-5 pb-md-0 col-md-5  col-lg-4 d-flex  flex-column ">
                <div class="text-center">
                    <img class="lozad" data-src="{{ asset('assets/imgs/icons/amazon-we-icon.svg') }}" alt="">
                    <p class="ser-gri-link fs-5 fw-bold underline-none">Digital Marketing Experts</p>
                </div>
                <p>Thrive Internet Marketing Agency has a proactive team of digital marketing professionals who are experts
                    in their field. From our diligent account managers and brand strategists to our SEO professionals, PPC
                    specialists and social media consultants, our team is dedicated to providing high-quality projects to
                    our clients. At Thrive, we don’t just focus on initial results but rather on continuous impact - our
                    team goes beyond the clients’ expectations by always seeking out growth opportunities for the brand and
                    the business.p>
            </div>
        </div>
        <div class="container col-lg-10 mx-auto row justify-content-center pt-5">
            <div class="text-center col-12 pb-5 pb-md-0 col-md-5  col-lg-4 d-flex  flex-column ">
                <div class="text-center">
                    <img class="lozad" data-src="{{ asset('assets/imgs/icons/we-agency-1.svg') }}" alt="">
                    <p class="ser-gri-link fs-5 fw-bold underline-none">Complete Reporting</p>
                </div>
                <p>We believe clients deserve to know the progress of their campaigns and measure the efforts. This is why
                    Thrive puts together customized reports to make sure our clients understand the results of our efforts
                    and methodologies. We also provide an easy-access online portal so you can obtain reports anytime you
                    need it. As such, our clients can ask about their campaigns, for deeper insight into the impact of our
                    strategies. The client portal covers all current information and details regarding the outcomes and
                    successes of their campaigns</p>
            </div>
            <div class="text-center col-12 pb-5 pb-md-0 col-md-5  col-lg-4 d-flex  flex-column ">
                <div class="text-center">
                    <img class="lozad" data-src="{{ asset('assets/imgs/icons/we-agency-7.svg') }}" alt="">
                    <p class="ser-gri-link fs-5 fw-bold underline-none">Prompt Delivery
                    </p>
                </div>
                <p>We understand how delays can put your business operations at risk and lost time is never won back again.
                    This is why our Arlington digital marketing team takes the time to assess your requirements and then
                    provide you with a realistic set of deadlines. Our team will do their very best to keep to the deadline
                    and comply with all aspects of our agreement. Thrive also assigns a dedicated project manager to keep
                    you in the loop with each and every update. Our team is always ready to communicate any progress
                    concerning your campaigns. </p>
            </div>
            <div class="text-center col-12 pb-5 pb-md-0 col-md-5  col-lg-4 d-flex  flex-column ">
                <div class="text-center">
                    <img class="lozad" data-src="{{ asset('assets/imgs/icons/amazon-we-icon.svg') }}" alt="">
                    <p class="ser-gri-link fs-5 fw-bold underline-none">Tailored Solutions</p>
                </div>
                <p>At Thrive, we believe every business is unique with specific requirements to reach the business goals. In
                    line with this, our Arlington digital marketing experts will take the time to understand your business
                    needs and map out ways to achieve your goals. They make sure every solution is aligned with the bigger
                    picture so you can be guaranteed of success.</p>
            </div>
        </div>

    </section>
    {{-- SERVICES GRID SECTION ENDS HERE --}}


    {{-- READY TO GROW BANNER STARTS HERE --}}
    <section class="bg-green-1">
        <div class="container py-5">
            <div class="text-center text-white text-capitalize col-lg-8 mx-auto">
                <h2 class=" fs-1 fw-bold">
                    Ready to Grow Your Business With
                    Arlington Digital Marketing Services?
                </h2>
                <p class="fs-5">
                    Click the button below for a free proposal
                </p>
            </div>
            <div class="text-center col-lg-3  col-md-8 mx-auto">
                <a href="#" class="">
                    <button type="submit" class="ps-2 pe-4 fs-5 py-2 age-con-for-get-btn rea-gro-ban-btn">GET FREE
                        PROPOSAL
                    </button>
                </a>
            </div>
        </div>
    </section>
    {{-- READY TO GROW BANNER ENDS HERE --}}



    {{-- GET FREE PROPOSAL SECTION STARTS HERE --}}
    <section>
        <div class="container pb-5">

            <div class="text-center">
                <h2 class="fw-bold fs-1 custom-text-2 py-5">
                    <span class="custom-text">
                        Get My
                    </span>
                    FREE Digital Marketing Proposal
                </h2>
            </div>
            <!-- contact form -->
            <div class="col-lg-11 mx-auto px-4">
                <form class="wp-contact-form custom-bg-1 rounded-2 p-3 d-flex flex-column gap-4" action="/">
                    <!-- first name and last name -->
                    <div>
                        <p>Name </p>
                        <div class="d-flex flex-column flex-lg-row justify-content-between m-0 gap-3 w-100">
                            <div class="d-flex flex-column col d-block">
                                <input id="input_15_1_3" class="col" />
                                <label for="input_15_1_3" class="">First</label>
                            </div>
                            <div class="d-flex flex-column col d-block">
                                <input id="input_15_1_4" class="col" />
                                <label for="input_15_1_4" class="">Last</label>
                            </div>
                        </div>
                    </div>
                    <!-- email and phone -->
                    <div class="d-flex flex-column flex-lg-row gap-3">
                        <div class="col">
                            <p>Email Adress <span class="required-ico"> * </span></p>
                            <input type="text" class="w-100" />
                        </div>
                        <div class="col">
                            <p>Phone <span class="required-ico"> * </span></p>
                            <input type="text" class="w-100" />
                        </div>
                    </div>

                    <!-- Company/Orgainzation and website -->
                    <div class="d-flex flex-column flex-lg-row gap-3">
                        <div class="col">
                            <p>Company/Organization</p>
                            <input type="text" class="w-100" />
                        </div>
                        <div class="col">
                            <p>Website</p>
                            <input type="text" class="w-100" />
                        </div>
                    </div>

                    <!-- what serivces provide you? -->
                    <div>
                        <p>
                            What services can we provide you?
                            <span class="required-ico"> * </span>
                        </p>
                        <ul class="gfield_checkbox row" id="input_15_8">
                            <li class="col-12 col-sm-6 col-lg-4 gchoice gchoice_15_8_1">
                                <input class="gfield-choice-input" name="input_8.1" type="checkbox"
                                    value="Optimization (SEO)" id="choice_15_8_1" tabindex="107" />
                                <label for="choice_15_8_1" id="label_15_8_1"
                                    class="gform-field-label gform-field-label--type-inline">Optimization (SEO)</label>
                            </li>
                            <li class="col-12 col-sm-6 col-lg-4 gchoice gchoice_15_8_2">
                                <input class="gfield-choice-input" name="input_8.2" type="checkbox"
                                    value="Pay Per Click (PPC)" id="choice_15_8_2" tabindex="108" />
                                <label for="choice_15_8_2" id="label_15_8_2"
                                    class="gform-field-label gform-field-label--type-inline">Pay Per Click
                                    (PPC)</label>
                            </li>
                            <li class="col-12 col-sm-6 col-lg-4 gchoice gchoice_15_8_3">
                                <input class="gfield-choice-input" name="input_8.3" type="checkbox" value="Social Media"
                                    id="choice_15_8_3" tabindex="109" />
                                <label for="choice_15_8_3" id="label_15_8_3"
                                    class="gform-field-label gform-field-label--type-inline">Social Media</label>
                            </li>
                            <li class="col-12 col-sm-6 col-lg-4 gchoice gchoice_15_8_4">
                                <input class="gfield-choice-input" name="input_8.4" type="checkbox" value="Web Design"
                                    id="choice_15_8_4" tabindex="110" />
                                <label for="choice_15_8_4" id="label_15_8_4"
                                    class="gform-field-label gform-field-label--type-inline">Web Design</label>
                            </li>
                            <li class="col-12 col-sm-6 col-lg-4 gchoice gchoice_15_8_5">
                                <input class="gfield-choice-input" name="input_8.5" type="checkbox"
                                    value="eCommerce Optimization" id="choice_15_8_5" tabindex="111" />
                                <label for="choice_15_8_5" id="label_15_8_5"
                                    class="gform-field-label gform-field-label--type-inline">eCommerce
                                    Optimization</label>
                            </li>
                            <li class="col-12 col-sm-6 col-lg-4 gchoice gchoice_15_8_6">
                                <input class="gfield-choice-input" name="input_8.6" type="checkbox"
                                    value="Conversion Rate Optimization (CRO)" id="choice_15_8_6" tabindex="112" />
                                <label for="choice_15_8_6" id="label_15_8_6"
                                    class="gform-field-label gform-field-label--type-inline">Conversion Rate
                                    Optimization (CRO)</label>
                            </li>
                            <li class="col-12 col-sm-6 col-lg-4 gchoice gchoice_15_8_7">
                                <input class="gfield-choice-input" name="input_8.7" type="checkbox"
                                    value="Reputation / Reviews Management" id="choice_15_8_7" tabindex="113" />
                                <label for="choice_15_8_7" id="label_15_8_7"
                                    class="gform-field-label gform-field-label--type-inline">Reputation / Reviews
                                    Management</label>
                            </li>
                            <li class="col-12 col-sm-6 col-lg-4 gchoice gchoice_15_8_8">
                                <input class="gfield-choice-input" name="input_8.8" type="checkbox"
                                    value="Content Writing" id="choice_15_8_8" tabindex="114" />
                                <label for="choice_15_8_8" id="label_15_8_8"
                                    class="gform-field-label gform-field-label--type-inline">Content Writing</label>
                            </li>
                            <li class="col-12 col-sm-6 col-lg-4 gchoice gchoice_15_8_9">
                                <input class="gfield-choice-input" name="input_8.9" type="checkbox"
                                    value="Photography / Video" id="choice_15_8_9" tabindex="115" />
                                <label for="choice_15_8_9" id="label_15_8_9"
                                    class="gform-field-label gform-field-label--type-inline">Photography /
                                    Video</label>
                            </li>
                            <li class="col-12 col-sm-6 col-lg-4 gchoice gchoice_15_8_11">
                                <input class="gfield-choice-input" name="input_8.11" type="checkbox"
                                    value="Web Hosting / Maintenance" id="choice_15_8_11" tabindex="116" />
                                <label for="choice_15_8_11" id="label_15_8_11"
                                    class="gform-field-label gform-field-label--type-inline">Web Hosting /
                                    Maintenance</label>
                            </li>
                            <li class="col-12 col-sm-6 col-lg-4 gchoice gchoice_15_8_12">
                                <input class="gfield-choice-input" name="input_8.12" type="checkbox"
                                    value="Amazon Marketing" id="choice_15_8_12" tabindex="117" />
                                <label for="choice_15_8_12" id="label_15_8_12"
                                    class="gform-field-label gform-field-label--type-inline">Amazon Marketing</label>
                            </li>
                            <li class="col-12 col-sm-6 col-lg-4 gchoice gchoice_15_8_13">
                                <input class="gfield-choice-input" name="input_8.13" type="checkbox"
                                    value="Email Marketing" id="choice_15_8_13" tabindex="118" />
                                <label for="choice_15_8_13" id="label_15_8_13"
                                    class="gform-field-label gform-field-label--type-inline">Email Marketing</label>
                            </li>
                            <li class="col-12 col-sm-6 col-lg-4 gchoice gchoice_15_8_14">
                                <input class="gfield-choice-input" name="input_8.14" type="checkbox"
                                    value="ADA Compliance" id="choice_15_8_14" tabindex="119" />
                                <label for="choice_15_8_14" id="label_15_8_14"
                                    class="gform-field-label gform-field-label--type-inline">ADA Compliance</label>
                            </li>
                            <li class="col-12 col-sm-6 col-lg-4 gchoice gchoice_15_8_15">
                                <input class="gfield-choice-input" name="input_8.15" type="checkbox"
                                    value="Link Building" id="choice_15_8_15" tabindex="120" />
                                <label for="choice_15_8_15" id="label_15_8_15"
                                    class="gform-field-label gform-field-label--type-inline">Link Building</label>
                            </li>
                            <li class="col-12 col-sm-6 col-lg-4 gchoice gchoice_15_8_16">
                                <input class="gfield-choice-input" name="input_8.16" type="checkbox"
                                    value="Search Engine Marketing" id="choice_15_8_16" tabindex="121" />
                                <label for="choice_15_8_16" id="label_15_8_16"
                                    class="gform-field-label gform-field-label--type-inline">Search Engine
                                    Marketing</label>
                            </li>
                        </ul>
                    </div>

                    <!-- message -->
                    <div>
                        <p>Message</p>
                        <textarea class="gform-textarea" name="" id="" cols="30" rows="10"></textarea>
                        <div class="gchoice gchoice_15_35_1 py-2">
                            <input class="gfield-choice-input" name="input_35.1" type="checkbox"
                                value="Were you referred to Thrive?" id="choice_15_35_1" tabindex="126" />
                            <label for="choice_15_35_1" id="label_15_35_1" class="ms-1">Were you referred to
                                Thrive?</label>
                        </div>
                    </div>

                    <!-- join email list -->
                    <div>
                        <p>Join our email list?</p>
                        <ul class="gfield_radio" id="input_15_14">
                            <li class="gchoice gchoice_15_14_0">
                                <input name="input_14" type="radio" value="Yes, Please!" id="choice_15_14_0"
                                    tabindex="128" />
                                <label for="choice_15_14_0" id="label_15_14_0"
                                    class="gform-field-label gform-field-label--type-inline">Yes, Please!</label>
                            </li>
                            <li class="gchoice gchoice_15_14_1">
                                <input name="input_14" type="radio" value="Not yet, thanks" checked="checked"
                                    id="choice_15_14_1" tabindex="129" />
                                <label for="choice_15_14_1" id="label_15_14_1"
                                    class="gform-field-label gform-field-label--type-inline">Not yet, thanks</label>
                            </li>
                        </ul>
                    </div>
                    <p class="fw-normal">
                        Join our mailing list to get our blog updates. You can
                        unsubscribe at any time. We respect your privacy and will never
                        share your information.
                    </p>
                    <div>
                        <button class="gform-submit-btn" type="submit">submit</button>
                    </div>
                </form>

            </div>
        </div>
    </section>
    {{-- GET FREE PROPOSAL SECTION ENDS HERE --}}




    {{-- TOP DIGITAL NAME SECTION STARTS HERE  --}}

    <section class="border-top">
        <div class="container py-5 d-flex flex-column gap-5">
            <div class="d-flex flex-column flex-md-row gap-5 col-lg-11 mx-auto">
                {{-- img --}}
                <div class="px-5">
                    <img width="660"
                        class="lozad" data-src="{{ asset('assets/imgs/Top-Digital-Marketing-Agencies-2021-by-Clutch.png') }}"
                        alt="">
                </div>
                <div class="px-3">
                    <h2 class="fs-1 custom-text">
                        Thrive Named <span class="custom-text-2">
                            2021 Top Digital Marketing Agency
                        </span>
                        in Arlington by Clutch

                    </h2>
                    <p>
                        Clutch, a leading B2B market research and reviews company, named Thrive a 2021 top agency in
                        Arlington in the following categories:
                    </p>
                    <ul class="list-style-none">
                        <li>Digital Marketing Agency</li>
                        <li>SEO Agency</li>
                        <li>PPC Agency</li>
                        <li>Social Media Agency</li>
                        <li>Web Design Agency</li>
                    </ul>
                    <p>
                        Agencies are chosen for this distinction based off of several factors, including overall market
                        presence and, most importantly, client feedback. Thrive has a 5.0 rating on Clutch. Check out the
                        <a href="#" class="custom-text-2">

                            reviews.
                        </a>
                    </p>
                </div>
            </div>
            <div class="d-flex flex-column flex-md-row gap-5 col-lg-11 mx-auto">
                {{-- img --}}
                <div class="px-5">
                    <img width="660"
                        class="lozad" data-src="{{ asset('assets/imgs/Thrive-National-Excellence-Awards-2021-in-United-States.png') }}"
                        alt="">
                </div>
                <div class="px-3">
                    <h2 class="fs-1 custom-text">

                        Thrive Named <span class="custom-text-2"> 2021 National Excellence Award Winner </span> in
                        Arlington by UpCity

                    </h2>
                    <p>
                        Clutch, a leading B2B market research and reviews company, named Thrive a 2021 top agency in
                        Arlington in the following categories:
                    </p>
                    <p>
                        “The strength of our marketplace is built on the credibility of truly excellent providers like
                        Thrive Internet Marketing,” said Dan Olson, CEO of UpCity. “We are pleased to honor Thrive with a
                        National Excellence Award in Arlington.”
                    </p>
                    <p>
                        Thrive has a 5.0 rating on UpCity. Check out the
                        <a href="#" class="custom-text-2">

                            reviews.
                        </a>
                    </p>
                </div>
            </div>
            <div class=" text-center pb-2">
                <img class="imporve-tech-seo-img" class="lozad" data-src="{{ asset('assets/imgs/awardimage2022-1-1.jpeg') }}"
                    alt="">
            </div>
        </div>
    </section>
    {{-- TOP DIGITAL NAME SECTION ENDS HERE  --}}





    {{-- ADDRESS SECTION STARTS HERE --}}
    <section class="py-5 border-top border-bottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <img class="lozad" data-src="{{ asset('assets/imgs/Arlington-office-location.png') }}" alt="">
                </div>
                <div class="col-lg-4 wp-con-map-address">
                    <div class="">
                        <a href="/" class="main-logo">
                            <svg xmlns="http://www.w3.org/2000/svg" width="612" height="356"
                                viewBox="0 212.5 612 356">
                                <path
                                    d="M30.728 461.596H12.906V431.7H31v-38.8h32.76v38.8h18.084v29.885H63.75v82.308H30.728v-82.308zm71.038 82.307h32.76v-51.375c0-5.242 0-8.918.262-10.753a26.32 26.32 0 0 1 .787-7.083 18.63 18.63 0 0 1 1.048-4.455 17.47 17.47 0 0 1 1.572-3.146c.982-1.437 2.125-2.755 3.407-3.932a36.81 36.81 0 0 1 4.717-3.145 29.07 29.07 0 0 1 5.773-1.835 28.53 28.53 0 0 1 6.814-.786 30.91 30.91 0 0 1 9.173 1.311c1.85.692 3.48 1.87 4.717 3.407 1.048 1.572 2.125 4.193 2.883 8.125.893 5.284 1.332 10.635 1.3 15.994v57.665h32.768v-66.838c0-3.407 0-7.6-.262-12.318-.136-2.82-.487-5.627-1.048-8.394a40.52 40.52 0 0 0-1.834-6.028c-.688-1.884-1.66-3.652-2.883-5.24a29.18 29.18 0 0 0-6.297-7.34 41.95 41.95 0 0 0-8.387-5.241 62.14 62.14 0 0 0-9.959-3.152 53.91 53.91 0 0 0-11.532-1.048c-4.57.083-9.126.52-13.628 1.3a56.21 56.21 0 0 0-11.8 3.938 48.18 48.18 0 0 0-9.96 6.814v-73.915h-31.45V543.9h1.047zM262.97 431.448H230.2v112.455h32.767V494.1c0-4.455.262-9.704.787-15.47a38.25 38.25 0 0 1 3.669-13.891c2.36-4.718 6.814-6.814 12.842-6.814 3.93 0 6.814.524 8.9 1.835 2.125 1.048 4.456 2.883 7.338 4.958l12.58-28.566c-7.083-3.9-14.436-6.015-21.76-6.015h-2.883c-8.648.787-15.725 3.938-21.5 9.967v-8.656zm163.56 124.25l4.193-8.387 53.996-108.778 3.407-6.56H451.95l-1.3 2.9-22.277 51.376-1.572 4.25-.262-.786-1.3-3.407-22.284-51.638-1.3-2.946h-36.168l3.146 6.56L422.6 547.06l3.933 8.648zm93.387-84.927c1.4-3.4 3.56-6.442 6.3-8.9 3.67-3.146 8.9-4.455 15.725-4.455 4.698-.036 9.348.947 13.628 2.883 3.932 2.125 6.814 5.503 8.387 10.483h-44.03zm79.156 25.167v-9.173c.097-7.905-1.04-15.777-3.365-23.333a50.6 50.6 0 0 0-11.794-19.656c-10.242-10.483-24.14-15.76-41.96-15.76-17.035 0-31.167 5.773-42.203 17.043s-16.5 25.685-16.5 42.988c0 18.084 5.24 32.5 15.987 43.506 10.483 11.015 24.904 16.52 42.727 16.52 12.317 0 23.063-2.62 32.505-8.132 4.8-2.792 9.144-6.33 12.843-10.483a69.02 69.02 0 0 0 6.027-7.6 79.03 79.03 0 0 0 4.959-8.387l-26.995-14.415c-5.77 12.84-14.684 19.392-26.74 19.656h-.524c-15.725 0-24.636-7.6-26.732-22.54h81.798l-.022-.233zM369.65 381.4c-17.304-1.3-31.98 18.87-31.98 18.87s-4.718-17.822-35.65-25.954c12.587 4.193 18.877 41.155 18.877 41.155V543.9h32.76V418.345c.5-6.3 2.884-30.664 15.994-36.954z"
                                    fill="#443f35"></path>
                                <path
                                    d="M379.086 301.965s9.697 22.54 2.358 42.5-28.836 29.615-28.836 29.615-9.697-22.54-2.358-42.458 28.836-29.657 28.836-29.657zm50.064-25.685s3.932 21.25-6.027 37.478c-9.967 15.994-29.885 20.712-29.885 20.712s-3.932-21.25 6.028-37.485c9.96-15.987 29.884-20.705 29.884-20.705zm-66.058-36.174s9.966 19.394 5.24 37.485c-4.717 18.346-22.54 28.588-22.54 28.588s-9.96-19.394-5.24-37.485c4.98-18.104 22.54-28.588 22.54-28.588zm-128.96 57.142s20.967-5.242 37.747 3.67 22.54 28.574 22.54 28.574-20.967 5.242-37.747-3.67c-16.5-8.918-22.54-28.574-22.54-28.574zM393.5 256.094s5.767 13.628 1.835 25.953c-4.193 12.318-16.773 18.346-16.773 18.346s-5.766-13.628-1.834-25.946c4.192-12.063 16.772-18.353 16.772-18.353zm-126.076 8.648s14.415 2.125 22.54 12.042c8.125 9.697 6.814 23.587 6.814 23.587s-14.415-2.125-22.54-12.042-6.814-23.587-6.814-23.587zm41.41-27.782s15.47 10.22 19.664 25.946-4.96 30.67-4.96 30.67-15.5-10.22-19.663-25.954c-3.953-15.462 4.958-30.663 4.958-30.663zm141.284 95.152s-4.193 24.083-23.85 35.905c-19.4 11.8-46.92 7.083-46.92 7.083s4.193-24.083 23.85-35.905c19.678-12.063 46.92-7.083 46.92-7.083zm-31.72 66.576s-14.167 8.9-27.78 5.503-22.015-17.82-22.015-17.82 14.167-8.918 27.78-5.504S418.4 398.69 418.4 398.69zM308.3 289.647s24.38 13.366 31.166 38-6.3 50.844-6.3 50.844S308.786 365.135 302 340.5c-6.814-24.4 6.3-50.85 6.3-50.85zm-82.816 56.355s24.083-12.58 46.92-6.552 35.643 28.333 35.643 28.333-24.083 12.587-46.913 6.552-35.65-28.333-35.65-28.333zm28.808 50.328s10.5-14.676 25.954-17.035c15.463-2.125 29.615 9.173 29.615 9.173s-10.483 14.677-25.946 17.035c-15.457 2.097-29.623-9.173-29.623-9.173z"
                                    fill="#6a8237"></path>
                            </svg>
                        </a>
                    </div>
                    <p>Thrive Internet Marketing Agency</p>
                    <p>
                        <strong> <a href="tel:908-3434-345" class="custom-text-2">
                                908-3434-345</a></strong>
                    </p>
                    <p>
                        4600 Park Springs Blvd
                    </p>
                    <p>
                        Suite 100
                    </p>
                    <p>
                        Arlington, TX 76017
                    </p>
                </div>
            </div>
        </div>
    </section>
    {{-- ADDRESS SECTION ENDS HERE --}}
@endsection
