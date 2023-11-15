@extends('layouts.index')


@section('title')
    Contact Us | {{ env("APP_NAME") }}  
@endsection

@section('meta')


<meta name="title" content="Contact Us | {{ env("APP_NAME") }}   ">
<meta name="description" content="Elevate your online presence with Whipp Digital's comprehensive services. From SEO transformation to social media management, we're your partner in navigating the digital landscape. Join us for transformative experiences and meaningful connections.">
<meta name="keywords" content="Comprehensive Services, Online Presence, SEO Transformation, Social Media Management, Digital Landscape, Transformative Experiences, Meaningful Connections">

<link rel="canonical" href="{{ url()->current() }}">

<meta property="og:site_name" content="Contact Us | {{ env("APP_NAME") }}  ">
<meta property="og:title" content="Contact Us | {{ env("APP_NAME") }}  ">
<meta property="og:description" content="Elevate your online presence with Whipp Digital's comprehensive services. From SEO transformation to social media management, we're your partner in navigating the digital landscape. Join us for transformative experiences and meaningful connections.">
<meta property="og:url" content="{{ url()->current() }}">
<meta property="og:type" content="website">
<meta property="og:image" content="{{ asset('assets/imgs/tech_whipp.png') }}">
<meta property="fb:admins" content="admin">
<meta name="twitter:title" content="{{ env("APP_NAME") }} | Home">
<meta name="twitter:description"
    content="Elevate your online presence with Whipp Digital's comprehensive services. From SEO transformation to social media management, we're your partner in navigating the digital landscape. Join us for transformative experiences and meaningful connections.">
<meta name="twitter:image"
    content="{{ asset('assets/imgs/tech_whipp.png') }}">
<meta name="twitter:url" content="{{ url()->current() }}">
<meta name="twitter:card" content="summary">

<meta itemprop="name" content="Contact Us | {{ env("APP_NAME") }}  ">
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




@section('css')
<style>

    #map {
        height: 200px;
        width: 200px;
    }
 
    </style>
    
@endsection

@section('pageheading')
    <!-- CONTACT TITLE BANNER SECTION STARTS HERE -->
    <section class="desk-con-ti-ba-section d-none d-lg-block">
        <div class="container text-center py-4">
            <h2 class="fs-1 fw-bold custom-text">Contact</h2>
           
        </div>
    </section>
    <!-- CONTACT TITLE BANNER SECTION ENDS HERE -->
@endsection
@section('content')
    <!-- CONTACT TITLE BANNER SECTION STARTS HERE -->
    <section class="con-ti-ba-section d-lg-none">
        <div class="container text-center py-4">
            <h2 class="fs-1 fw-bold custom-text">Contact</h2>
            
        </div>
    </section>
    <!-- CONTACT TITLE BANNER SECTION ENDS HERE -->
    {{-- breadcrump  --}}
    <div class="wp-brdcb">
        <div class="wrap">
            <div>
                <p id="breadcrumbs" class="fs-5"><span><span><a class="fw-medium custom-text-2" href="/">Home</a></span> » <span
                            class="breadcrumb_last" aria-current="page">Contact</span></span></p>
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


    <!-- CONTACT FORM SECTION STARTS HERE -->
    <section>
        <div class="container py-5">
            <div class="row gap-5 gap-lg-0 justify-content-center">
                <div class="col-lg-8 px-4">
                <p class="custom-text-2 fs-4 py-3">
                    Fill out this form and we will contact you shortly!
                </p>
                <!-- contact form -->
                    <form class="wp-contact-form custom-bg-1 rounded-2 p-3 d-flex flex-column gap-4" action="{{ route('submit_contact_us') }}" method="POST">
                        @csrf
                        <!-- first name and last name -->
                        <div>
                            <p>Name </p>
                            <div class="d-flex flex-column flex-lg-row justify-content-between m-0 gap-3 w-100">
                                <div class="d-flex flex-column col d-block">
                                    <input id="name_first" name="firstname" class="w-100 height-41px line-heig-40"  value="{{ old('firstname') }}"/>
                                    <label for="name_first" class="">First</label>
                                </div>
                                <div class="d-flex flex-column col d-block">
                                    <input id="name_last" name="lastname" class="w-100 line-heig-40 height-41px"  value="{{ old('lastname') }}"/>
                                    <label for="name_last" class=" ">Last</label>
                                </div>
                            </div>
                        </div>
                        <!-- email and phone -->
                        <div class="d-flex flex-column flex-lg-row gap-3">
                            <div class="col">
                                <p>Email Adress <span class="required-ico"> * </span></p>
                                <input name="email" type="text" class="w-100"  value="{{ old('email') }}"/>
                            </div>
                            <div class="col">
                                <p>Phone <span class="required-ico"> * </span></p>
                                <input name="phone" type="text" class="w-100" value="{{ old('phone') }}"/>
                            </div>
                        </div>

                        <!-- Company/Orgainzation and website -->
                        <div class="d-flex flex-column flex-lg-row gap-3">
                            <div class="col">
                                <p>Company/Organization</p>
                                <input name="company" type="text" class="w-100" value="{{ old('company') }}"/>
                            </div>
                            <div class="col">
                                <p>Website</p>
                                <input name="website" type="text" class="w-100" value="{{ old('website') }}"/>
                            </div>
                        </div>

                        <!-- what serivces provide you? -->
                        <div>
                            <p>
                                What services can we provide you?
                                <span class="required-ico"> * </span>
                            </p>
                            <ul class="gfield_checkbox row" id="input_15_8">
                            @foreach(['Optimization (SEO)', 'Pay Per Click (PPC)', 'Social Media', 'Web Design', 'eCommerce Optimization', 'Conversion Rate Optimization (CRO)', 'Reputation / Reviews Management', 'Content Writing', 'Photography / Video', 'Web Hosting / Maintenance', 'Amazon Marketing', 'Email Marketing', 'ADA Compliance', 'Link Building', 'Search Engine Marketing'] as $index => $service)
                                <li class="col-12 col-sm-6 col-lg-4 gchoice gchoice_15_8_{{ $index + 1 }}">
                                    <input class="gfield-choice-input" name="services[]" type="checkbox" value="{{ $service }}" id="choice_15_8_{{ $index + 1 }}" tabindex="{{ 107 + $index }}" {{ in_array($service, old('services', [])) ? 'checked' : '' }} />
                                    <label for="choice_15_8_{{ $index + 1 }}" id="label_15_8_{{ $index + 1 }}" class="gform-field-label gform-field-label--type-inline">{{ $service }}</label>
                                </li>
                            @endforeach
                            </ul>

                        </div>

                        <!-- message -->
                        <div>
                            <p>Message</p>
                            <textarea class="gform-textarea" name="message_" id="" cols="30" rows="10">{{old('message_')}}</textarea>
                            {{-- <div class="gchoice gchoice_15_35_1 py-2">
                                <input class="gfield-choice-input" name="input_35.1" type="checkbox"
                                    value="Were you referred to {{ env("APP_NAME") }}?" id="choice_15_35_1" tabindex="126" />
                                <label for="choice_15_35_1" id="label_15_35_1" class="ms-1">Were you referred to
                                    {{ env("APP_NAME") }}?</label>
                            </div> --}}
                        </div>

                        <!-- join email list -->
                        <div>
                            <p>Join our email list?</p>
                            <ul class="gfield_radio" id="input_15_14">
                                <li class="gchoice gchoice_15_14_0">
                                    <input name="wantemaillist" type="radio" value="Yes, Please!" id="choice_15_14_0" {{old('wantemaillist') === 'Yes, Please!' ? 'checked' : ''}}
                                        tabindex="128" />
                                    <label for="choice_15_14_0" id="label_15_14_0"
                                        class="gform-field-label gform-field-label--type-inline">Yes, Please!</label>
                                </li>
                                <li class="gchoice gchoice_15_14_1">
                                    <input name="wantemaillist" type="radio" value="Not yet, thanks" {{old('wantemaillist') === 'Not yet, thanks' ? 'checked' : ''}}
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
                    <div class="custom-text fs-6">
                        <p class="fs-4 fw-semibold " style="color: #213555">Contact Info</p>
                       
                        <p style="margin-top: 10px">
                            <a title="Call Now" class="fs-5 fw-semibold" href="tel:1-212-951-0651">(212) 951-0651 </a>
                        </p>
                        <p style="margin-top: 6px">
                            <a title="Mail Now" class="fs-5 fw-semibold" href="mailto:support@{{ env("APP_NAME") }}.com">support@{{ env("APP_NAME") }}.com</a>
                        </p>
          
                        <p style="margin-top: 6px" class="fs-5">
                            <strong>Office Hours:</strong>
                    <br>
                            7 days, 9am - 9pm EST
                        </p>
                        <div class="border-top mt-3">

                            <strong>Address:</strong>

                            <div id="map" class="mx-auto mt-3 overflow-hidden">
                                <div class="imapgoogle">
                                    <iframe id="working" class="lozad hello" data-src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3023.9018809213894!2d-74.00421302441326!3d40.720176437115796!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c2598a30e83e23%3A0xf52f5c97442929e1!2s46%20Howard%20St%206th%20fl%2C%20New%20York%2C%20NY%2010013%2C%20United%20States!5e0!3m2!1sen!2seg!4v1694394445709!5m2!1sen!2seg&parameters&disableDefaultUI=true" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"  referrerpolicy="no-referrer-when-downgrade">
                                        <p>This is some additional content below the map.</p>
                                    </iframe>
                                  
                                    </iframe>
                                </div>
                            </div>

        
                            <a target="_blank" href="https://goo.gl/maps/cWYhgMfHtZoW2fDw9"  class="fs-5">
                               
                              46 Howard St 6th fl,
                                    <br>
                                    New York, NY 10013
                                    
                                </a>
                            </div>


                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="red-container"></div>


    <!-- CONTACT FORM SECTION ENDS HERE -->
@endsection


