<!-- NAVBAR SECTION STARTS HERE -->
<header class="py-1 py-xl-3 shadow blue-box-bg-navbar  position-relative" style="z-index: 99999;">
    <div class="position-relative">
    <nav class="wd-nav-section-container mx-auto d-flex align-items-center justify-content-between ">

        <!-- logo -->
        <div class="d-flex">
            <div class="logo">
                <a href="/" class="main-logo">
                    <img src="{{ asset('assets/imgs/icons/whipplogo_white.png') }}" class="mainwhipplogo" alt="">
                </a>
            </div>
        </div>

        <!-- links & contact -->
        <div class="wd-menu-li-row d-flex align-items-center ">
            <!-- links -->
            <div class="wd-menu-li-co justify-content-center align-items-center ">
                <ul class="wd-nav-links d-flex align-items-center gap-5">
           
                    {{-- <li class="nav-menu-child">
                        <div class="wd-nav-link position-relative">
                            <a href="{{ route('about-us') }}">
                                <span class=""> about </span>
                            </a>
                        </div>
                    </li> --}}
                    <li class="nav-menu-child">
                        <div class="wd-nav-link position-relative">
                            <a href="{{ route('faqs') }}">
                                <span class=""> FAQ's </span>
                            </a>
                        </div>
                    </li>
                    <li class="nav-menu-child ms-2">
                        <div class="wd-nav-link position-relative">
                            <a href="{{ route('contact') }}">
                                <span class=""> contact</span>
                            </a>
                        </div>
                    </li>
                </ul>
            </div>
            <!-- contact -->
            <div class="d-flex gap-2 ps-4 ">
                <a href="tel:212-951-0651" class="">
                    <img width="40" class="ek-phone-img"
                        src="{{ asset('assets/imgs/custom-phone-icon-svg-new.svg') }}" alt="" />
                </a>
                <a href="tel:212-951-0651" class="fs-4 wd-num-phone nav-phone-num-text" style="color: #fff">
                    212-951-0651
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
   
</div>
@yield("pageheading")
    <!-- toggle on mobile -->
    <div class="mobile-toggle-menu">
        <ul class="mobile-toggle-menu-lists">
            {{-- <li>
                <a href="{{ route('about-us') }}"> about </a>
            </li> --}}
            {{-- <li class="expand-serivce-area-mob">


                <a href="{{ route('blog') }}" class="mob-service-link-aco"> Blog </a>


            </li> --}}
            </li>
            <li><a href="{{ route('faqs') }}"> FAQ's </a></li>
            <li><a href="{{ route('contact') }}"> contact </a></li>
        </ul>
    </div>
</header>
<!-- NAVBAR SECTION ENDS HERE -->
