<!-- NAVBAR SECTION STARTS HERE -->
<header class="py-1 py-xl-3 position-sticky top-0 shadow " style="z-index: 99999;background-color:#ffff">
    <nav class="wd-nav-section-container mx-auto d-flex align-items-center justify-content-between">
        <!-- logo -->
        <div class="d-flex">
            <div class="logo">
                <a href="/" class="main-logo">
                    <img src="{{ asset('assets/imgs/icons/whipplogo.jpeg') }}" class="mainwhipplogo" alt="">
                </a>
            </div>
        </div>

        <!-- links & contact -->
        <div class="wd-menu-li-row d-flex align-items-center ">
            <!-- links -->
            <div class="wd-menu-li-co justify-content-center align-items-center ">
                <ul class="wd-nav-links d-flex align-items-center gap-4">
                    <li class="nav-menu-child">
                        <div class="service-has-expand wd-nav-link position-relative">
                            <a href="{{ route('services') }}">
                                <span class="wd-nav-text"> services </span>
                            </a>
                        </div>
                        <ul class="sevice-hover-expand tri-ico">
                            <li class="megamenu-item-info">
                                <h5 class="megamenu-item-info-title">List of Services</h5>
                            </li>

                            <li class="menu-item-has-children hover-ver2 sub-menu-hover">
                                <a href="{{ route('service01') }}">
                                    <i class="seoicon-search"></i>
                                    Search Engine Optimization
                                </a>
                            </li>

                            <li class="hover-ver2 sub-menu-hover">
                                <a href="{{ route('service01') }}"><i class="seoicon-button"></i>
                                    SEM/PPC
                                </a>
                            </li>
                            <li class="hover-ver2 sub-menu-hover">
                                <a href="{{ route('service01') }}"><i class="seoicon-mail-send"></i>
                                    Email Marketing
                                </a>
                            </li>
                            <li class="hover-ver2 sub-menu-hover">
                                <a href="{{ route('service01') }}"><i class="seoicon-chat-comment"></i>
                                    Social Ads
                                </a>
                            </li>

                            <li class="mb-2 menu-item-has-children hover-ver2 sub-menu-hover">
                                <a href="{{ route('service01') }}">
                                    <i class="seoicon-pie-graph-split"></i>
                                    Content Marketing
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-menu-child">
                        <div class="service-has-expand wd-nav-link position-relative">
                            <a href="{{ route('services') }}">
                                <span class="wd-nav-text"> work </span>
                            </a>
                        </div>
                        <ul class="sevice-hover-expand tri-ico">
                            <li class="hover-ver2 sub-menu-hover">
                                <a href="{{ route('case-studies') }}"><i class="seoicon-button"></i>
                                    Case Studies
                                </a>
                            </li>
                            <li class="hover-ver2 sub-menu-hover">
                                <a href="{{ route('web-designs') }}"><i class="seoicon-button"></i>
                                    Web Designs
                                </a>
                            </li>
                            <li class="hover-ver2 sub-menu-hover">
                                <a href="{{ route('logo-designs') }}"><i class="seoicon-mail-send"></i>
                                    Logo Designs
                                </a>
                            </li>
                            <li class="hover-ver2 sub-menu-hover mb-2">
                                <a href="{{ route('video') }}"><i class="seoicon-chat-comment"></i>
                                    Videos
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-menu-child">
                        <div class="wd-nav-link position-relative">
                            <a href="{{ route('about-us') }}">
                                <span class=""> about </span>
                            </a>
                        </div>
                    </li>
                    <li class="nav-menu-child">
                        <div class="service-has-expand wd-nav-link position-relative">
                            <a href="{{ route('services') }}">
                                <span class=""> Blog </span>
                            </a>
                        </div>
                    </li>
                    <li class="nav-menu-child">
                        <div class="wd-nav-link position-relative">
                            <a href="{{ route('faqs') }}">
                                <span class=""> FAQ's </span>
                            </a>
                        </div>
                    </li>
                    <li class="nav-menu-child">
                        <div class="wd-nav-link position-relative">
                            <a href="{{ route('contact') }}">
                                <span class=""> contact</span>
                            </a>
                        </div>
                    </li>
                </ul>
            </div>
            <!-- contact -->
            <div class="d-flex gap-3 ps-4 ">
                <a href="tel:909-434-4334" class="">
                    <img width="38" src="{{ asset('assets/imgs/custom-phone-icon-svg-new.svg') }}"
                        alt="" />
                </a>
                <a href="tel:909-434-4334" class="fs-4 wd-num-phone" style="color: #2f2c2c">
                    909-434-4334
                </a>
                <a href="javascript:void(0)" id="menu-icon-trigger" class="menu-icon-trigger toggle-menu-mob showhide">
                    <span id="menu-icon-wrapper" class="menu-icon-wrapper" style="visibility: visible">
                        <svg width="1000px" height="1000px">
                            <path id="pathD"
                                d="M 300 400 L 700 400 C 900 400 900 750 600 850 A 400 400 0 0 1 200 200 L 800 800"
                                style="
                  stroke-dashoffset: 5803.15;
                  stroke-dasharray: 2901.57, 2981.57, 240;
                ">
                            </path>
                            <path id="pathE" d="M 300 500 L 700 500"
                                style="
                  stroke-dashoffset: 800;
                  stroke-dasharray: 400, 480, 240;
                ">
                            </path>
                            <path id="pathF"
                                d="M 700 600 L 300 600 C 100 600 100 200 400 150 A 400 380 0 1 1 200 800 L 800 200"
                                style="
                  stroke-dashoffset: 6993.11;
                  stroke-dasharray: 3496.56, 3576.56, 240;
                ">
                            </path>
                        </svg>
                    </span>
                </a>
            </div>
        </div>
    </nav>
    <!-- toggle on mobile -->
    <div class="mobile-toggle-menu">
        <ul class="mobile-toggle-menu-lists">
            <li class="expand-serivce-area-mob">
                <span class="custom-arrow sub-menu-service-btn" id="myitem1"></span>

                <a href="{{ route('services') }}" class="mob-service-link-aco"> Serivces </a>

                <ul data-id="myitem1" class="service-mob-menu">

                    <li class="menu-item-has-children hover-ver2">
                        <a href="{{ route('service01') }}">
                            <i class="seoicon-search"></i>
                            Search Engine Optimization
                        </a>
                    </li>

                    <li class="hover-ver2">
                        <a href="{{ route('service01') }}"><i class="seoicon-button"></i>
                            SEM/PPC
                        </a>
                    </li>
                    <li class="hover-ver2">
                        <a href="{{ route('service01') }}"><i class="seoicon-mail-send"></i>
                            Email Marketing
                        </a>
                    </li>
                    <li class="hover-ver2">
                        <a href="{{ route('service01') }}"><i class="seoicon-chat-comment"></i>
                            Social Ads
                        </a>
                    </li>

                    <li class="menu-item-has-children hover-ver2">
                        <a href="{{ route('service01') }}">
                            <i class="seoicon-pie-graph-split"></i>
                            Content Marketing
                        </a>
                    </li>
                </ul>
            </li>
            <li class="expand-serivce-area-mob">
                <span class="custom-arrow sub-menu-service-btn" id="myitem2"></span>

                <a href="{{ route('services') }}" class="mob-service-link-aco"> Work </a>

                <ul data-id="myitem2" class="service-mob-menu">
                    <li class="hover-ver2 ">
                        <a href="{{ route('case-studies') }}"><i class="seoicon-button"></i>
                            Case Studies
                        </a>
                    </li>
                    <li class="hover-ver2">
                        <a href="{{ route('web-designs') }}"><i class="seoicon-button"></i>
                            Web Designs
                        </a>
                    </li>
                    <li class="hover-ver2">
                        <a href="{{ route('logo-designs') }}"><i class="seoicon-mail-send"></i>
                            Logo Designs
                        </a>
                    </li>
                    <li class="hover-ver2">
                        <a href="{{ route('video') }}"><i class="seoicon-chat-comment"></i>
                            Videos
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="{{ route('about-us') }}"> about </a>
            </li>
            <li class="expand-serivce-area-mob">


                <a href="#" class="mob-service-link-aco"> Blog </a>


            </li>
            </li>
            <li><a href="{{ route('faqs') }}"> FAQ's </a></li>
            <li><a href="{{ route('contact') }}"> contact </a></li>
        </ul>
    </div>
</header>
<!-- NAVBAR SECTION ENDS HERE -->
