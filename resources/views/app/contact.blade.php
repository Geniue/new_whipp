@extends('layouts.index')

@section('content')
    <!-- CONTACT TITLE BANNER SECTION STARTS HERE -->
    <section class="con-ti-ba-section">
        <div class="container text-center py-4">
            <h2 class="fs-1 fw-bold custom-text">Contact</h2>
            <p class="custom-text-2 fs-5">
                Fill out the form below to get your Free Proposal.
            </p>
        </div>
    </section>
    <!-- CONTACT TITLE BANNER SECTION ENDS HERE -->

    <!-- CONTACT FORM SECTION STARTS HERE -->
    <section>
        <div class="container py-5">
            <div class="row gap-5 gap-lg-0 justify-content-center">
                <!-- contact form -->
                <div class="col-lg-8 px-4">
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
                                        class="gform-field-label gform-field-label--type-inline">Pay Per Click (PPC)</label>
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
                <!-- contact details -->
                <div class="col-lg-3 text-center">
                    <div class="fl-rich-text custom-text">
                        <p style="margin-top: 10px">
                            <strong>Main Phone: </strong><a title="Call Now" href="tel:1-866-908-4748"
                                data-ctm-watch-id="9" data-ctm-tracked="1">(866) 908-4748</a>
                        </p>
                        <p>
                            <strong>Headquarters:</strong><br />
                            4604 Park Springs Blvd<br />
                            Suite 140<br />
                            Arlington, TX 76017<br />
                            <a title="Call Now" href="tel:+18779599892" data-ctm-watch-id="3" data-ctm-tracked="1"
                                data-observe="1" data-observer-id="0">(877) 959-9892</a>
                        </p>
                        <p>
                            <strong>Office Hours:</strong><br />
                            Mon-Fri, 8:30am - 5:30pm CT
                        </p>
                        <p>
                            <img decoding="async" loading="lazy" class="alignnone size-full wp-image-58657"
                                src="https://thriveagency.com/files/clutch-top-seo-2022-231x250-1.png"
                                alt="Top SEO Companies Thrive Agency" width="231" height="250"
                                srcset="
                https://thriveagency.com/files/clutch-top-seo-2022-231x250-1.png         231w,
                https://thriveagency.com/files/clutch-top-seo-2022-231x250-1-172x186.png 172w,
                https://thriveagency.com/files/clutch-top-seo-2022-231x250-1-139x150.png 139w,
                https://thriveagency.com/files/clutch-top-seo-2022-231x250-1-150x162.png 150w
              "
                                sizes="(max-width: 231px) 100vw, 231px" />
                        </p>
                        <p>
                            <img decoding="async" loading="lazy" class="size-full wp-image-47117 alignnone"
                                src="https://thriveagency.com/files/IFA-Logo-placement.png"
                                alt="International Franchise Association" width="184" height="110"
                                srcset="
                https://thriveagency.com/files/IFA-Logo-placement.png        184w,
                https://thriveagency.com/files/IFA-Logo-placement-125x75.png 125w,
                https://thriveagency.com/files/IFA-Logo-placement-75x45.png   75w,
                https://thriveagency.com/files/IFA-Logo-placement-150x90.png 150w
              "
                                sizes="(max-width: 184px) 100vw, 184px" />
                        </p>
                        <p>
                            <img decoding="async" loading="lazy" class="alignnone wp-image-43644 size-full"
                                src="https://thriveagency.com/files/featured-in-1.png"
                                alt="Featured In Forbes, Huffington Post, yahoo!, Inc., Moz, Search Engine Journal, Fast Company, Medium"
                                width="266" height="269"
                                srcset="
                https://thriveagency.com/files/featured-in-1.png         266w,
                https://thriveagency.com/files/featured-in-1-247x250.png 247w,
                https://thriveagency.com/files/featured-in-1-227x230.png 227w,
                https://thriveagency.com/files/featured-in-1-125x125.png 125w,
                https://thriveagency.com/files/featured-in-1-75x75.png    75w,
                https://thriveagency.com/files/featured-in-1-184x186.png 184w,
                https://thriveagency.com/files/featured-in-1-148x150.png 148w,
                https://thriveagency.com/files/featured-in-1-45x45.png    45w,
                https://thriveagency.com/files/featured-in-1-96x96.png    96w,
                https://thriveagency.com/files/featured-in-1-150x152.png 150w
              "
                                sizes="(max-width: 266px) 100vw, 266px" />
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- CONTACT FORM SECTION ENDS HERE -->
@endsection
