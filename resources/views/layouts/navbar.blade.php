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
                <ul class="wd-nav-links d-flex align-items-center gap-4">
                    <li class="nav-menu-child">
                        <div class="service-has-expand wd-nav-link position-relative">
                            <a href="{{ route('services') }}">
                                <span class="wd-nav-text"> services </span>
                            </a>
                        </div>
                        <ul class="sevice-hover-expand main-service-hover-cen tri-ico">
                                <li class="row">
                                    <ul class="col-3">

                                        <li class="menu-item-has-children hover-ver2 menu-item-has-children-main-head ">
                                            <a href="{{ route('service', ['slug' => 'digital-marketing']) }}">
                                                <i class="seoicon-search"></i>
                                                Digital Marketing
                                            </a>
                                        </li>
            
                                        <li class="hover-ver2 sub-menu-hover">
                                            <a href="{{  route('service', ['slug' => 'search-engine-optimization'])  }}"><i class="seoicon-button"></i>
                                                Search Engine Optimization (SEO)
                                            </a>
                                        </li>
                                        <li class="hover-ver2 sub-menu-hover">
                                            <a href="{{  route('service', ['slug' => 'local-seo'])  }}"><i class="seoicon-mail-send"></i>
                                               Local SEO
                                            </a>
                                        </li>
                                        <li class="hover-ver2 sub-menu-hover">
                                            <a href="{{  route('service', ['slug' => 'technical-seo'])  }}"><i class="seoicon-chat-comment"></i>
                                                Technical SEO
                                            </a>
                                        </li>
            
                                        <li class="menu-item-has-children hover-ver2 sub-menu-hover">
                                            <a href="{{  route('service', ['slug' => 'digital-marketing-strategy'])  }}">
                                                <i class="seoicon-pie-graph-split"></i>
                                                Digital Marketing Strategy
                                            </a>
                                        </li>   
                                        <li class="menu-item-has-children hover-ver2 sub-menu-hover">
                                            <a href="{{  route('service', ['slug' => 'pay-per-click-marketing'])  }}">
                                                <i class="seoicon-pie-graph-split"></i>
                                                Pay Per Click (PPC) Marketing
                                            </a>
                                        </li>   
                                        <li class="menu-item-has-children hover-ver2 sub-menu-hover">
                                            <a href="{{  route('service', ['slug' => 'link-building-services'])  }}">
                                                <i class="seoicon-pie-graph-split"></i>
                                                Link Building Services
                                            </a>
                                        </li>   
                                        <li class="menu-item-has-children hover-ver2 sub-menu-hover">
                                            <a href="{{  route('service', ['slug' => 'haro-link-building'])  }}">
                                                <i class="seoicon-pie-graph-split"></i>
                                                HARO Link Building
                                            </a>
                                        </li>   
                                        <li class="menu-item-has-children hover-ver2 sub-menu-hover">
                                            <a href="{{  route('service', ['slug' => 'google-analytics-service'])  }}">
                                                <i class="seoicon-pie-graph-split"></i>
                                               Google Analytics Service
                                            </a>
                                        </li>   
                                        <li class="menu-item-has-children hover-ver2 sub-menu-hover">
                                            <a href="{{  route('service', ['slug' => 'conversion-rate-optimization-services'])  }}">
                                                <i class="seoicon-pie-graph-split"></i>
                                               Conversion Rate Optimization Services
                                            </a>
                                        </li>   
                                        <li class="menu-item-has-children hover-ver2 sub-menu-hover">
                                            <a href="{{  route('service', ['slug' => 'white-label-services'])  }}">
                                                <i class="seoicon-pie-graph-split"></i>
                                                White Label Services
                                            </a>
                                        </li>   
                                        <li class="menu-item-has-children hover-ver2 sub-menu-hover">
                                            <a href="{{  route('service', ['slug' => 'franchise-seo'])  }}">
                                                <i class="seoicon-pie-graph-split"></i>
                                                Franchise SEO
                                            </a>
                                        </li>   
                                        <li class="menu-item-has-children hover-ver2 sub-menu-hover">
                                            <a href="{{  route('service', ['slug' => 'search-engine-marketing'])  }}">
                                                <i class="seoicon-pie-graph-split"></i>
                                                Search Engine Marketing (SEM)
                                            </a>
                                        </li>   
                                    </ul>
                                    <ul class="col-3">

                                        <li class="menu-item-has-children hover-ver2 menu-item-has-children-main-head">
                                            <a href="{{  route('service', ['slug' => 'web-design'])  }}">
                                                <i class="seoicon-search"></i>
                                                Web Design
                                            </a>
                                        </li>
            
                                        <li class="hover-ver2 sub-menu-hover">
                                            <a href="{{  route('service', ['slug' => 'custom-website-design'])  }}"><i class="seoicon-button"></i>
                                                Custom Website Design
                                            </a>
                                        </li>
                                        <li class="hover-ver2 sub-menu-hover">
                                            <a href="{{  route('service', ['slug' => 'wordpress-website-design'])  }}"><i class="seoicon-mail-send"></i>
                                                Wordpress Website Design
                                            </a>
                                        </li>
                                        <li class="hover-ver2 sub-menu-hover">
                                            <a href="{{  route('service', ['slug' => 'ecommerce-web-design'])  }}"><i class="seoicon-chat-comment"></i>
                                                eCommerce Web Design
                                            </a>
                                        </li>
            
                                        <li class="menu-item-has-children hover-ver2 sub-menu-hover">
                                            <a href="{{  route('service', ['slug' => 'ada-compliance-services'])  }}">
                                                <i class="seoicon-pie-graph-split"></i>
                                                ADA Compliance Services
                                            </a>
                                        </li>   
            
                                        <li class="menu-item-has-children hover-ver2 sub-menu-hover">
                                            <a href="{{  route('service', ['slug' => 'video-production'])  }}">
                                                <i class="seoicon-pie-graph-split"></i>
                                                Video Production
                                            </a>
                                        </li>   
            
                                        <li class="menu-item-has-children hover-ver2 sub-menu-hover">
                                            <a href="{{  route('service', ['slug' => 'product-photography-services'])  }}">
                                                <i class="seoicon-pie-graph-split"></i>
                                                Product Photography Services
                                            </a>
                                        </li>   
            
                                        <li class="menu-item-has-children hover-ver2 sub-menu-hover">
                                            <a href="{{  route('service', ['slug' => 'drone-video-and-photography-services'])  }}">
                                                <i class="seoicon-pie-graph-split"></i>
                                                Drone Video and Photography Services
                                            </a>
                                        </li>   
            
                                        <li class="menu-item-has-children hover-ver2 sub-menu-hover">
                                            <a href="{{  route('service', ['slug' => 'email-marketing-services'])  }}">
                                                <i class="seoicon-pie-graph-split"></i>
                                                Email Marketing Services
                                            </a>
                                        </li>   
            
                                        <li class="menu-item-has-children hover-ver2 sub-menu-hover">
                                            <a href="{{  route('service', ['slug' => 'sms-marketing-services'])  }}">
                                                <i class="seoicon-pie-graph-split"></i>
                                                SMS Marketing Services
                                            </a>
                                        </li>   
                                        <li class="menu-item-has-children hover-ver2 sub-menu-hover">
                                            <a href="{{  route('service', ['slug' => 'website-hosting'])  }}">
                                                <i class="seoicon-pie-graph-split"></i>
                                              Website Hosting
                                            </a>
                                        </li>   
                                        <li class="menu-item-has-children hover-ver2 sub-menu-hover">
                                            <a href="{{  route('service', ['slug' => 'seo-content-writing-services'])  }}">
                                                <i class="seoicon-pie-graph-split"></i>
                                                SEO Content Writing Services
                                            </a>
                                        </li>   
                                    </ul>
                                    <ul class="col-3">

                                        <li class="menu-item-has-children hover-ver2  menu-item-has-children-main-head">
                                            <a href="{{  route('service', ['slug' => 'social-media-marketing'])  }}">
                                                <i class="seoicon-search"></i>
                                                Social Media Marketing
                                            </a>
                                        </li>
            
                                        <li class="hover-ver2 sub-menu-hover">
                                            <a href="{{  route('service', ['slug' => 'social-media-management'])  }}"><i class="seoicon-button"></i>
                                                Social Media Management
                                            </a>
                                        </li>
                                        <li class="hover-ver2 sub-menu-hover">
                                            <a href="{{  route('service', ['slug' => 'social-media-advertising'])  }}"><i class="seoicon-mail-send"></i>
                                                Social Media Advertising
                                            </a>
                                        </li>
                                        <li class="hover-ver2 sub-menu-hover">
                                            <a href="{{  route('service', ['slug' => 'social-media-brand-management'])  }}"><i class="seoicon-chat-comment"></i>
                                                Social Media Brand Management
                                            </a>
                                        </li>
            
                                        <li class="menu-item-has-children hover-ver2 menu-item-has-children-main-head">
                                            <a href="{{  route('service', ['slug' => 'reputation-management'])  }}">
                                                <i class="seoicon-pie-graph-split"></i>
                                                Reputation Management
                                            </a>
                                        </li> 
                                        <li class="hover-ver2 sub-menu-hover">
                                            <a href="{{  route('service', ['slug' => 'reputation-management-software'])  }}"><i class="seoicon-chat-comment"></i>
                                                Reputation Management Software
                                            </a>
                                        </li>
                                        <li class="hover-ver2 sub-menu-hover">
                                            <a href="{{  route('service', ['slug' => 'online-reputation-repair'])  }}"><i class="seoicon-chat-comment"></i>
                                                Online Reputation Repair
                                            </a>
                                        </li>
                                        <li class="hover-ver2 sub-menu-hover">
                                            <a href="{{  route('service', ['slug' => 'franchise-reputation-management'])  }}"><i class="seoicon-chat-comment"></i>
                                                Franchise Reputation Management
                                            </a>
                                        </li>  
                                        <li class="hover-ver2 sub-menu-hover">
                                            <a href="{{  route('service', ['slug' => 'social-media-reputation-management'])  }}"><i class="seoicon-chat-comment"></i>
                                                Social Media Reputation Management
                                            </a>
                                        </li>  
                                    </ul>
                                    <ul class="col-3">

                                        <li class="menu-item-has-children hover-ver2 menu-item-has-children-main-head">
                                            <a href="{{  route('service', ['slug' => 'ecommerce-marketing'])  }}">
                                                <i class="seoicon-search"></i>
                                                eCommerce Marketing
                                            </a>
                                        </li>
            
                                        <li class="hover-ver2 sub-menu-hover">
                                            <a href="{{  route('service', ['slug' => 'ecommerce-optimization'])  }}"><i class="seoicon-button"></i>
                                                eCommerce Optimization
                                            </a>
                                        </li>
                                        <li class="hover-ver2 sub-menu-hover">
                                            <a href="{{  route('service', ['slug' => 'ecommerce-seo'])  }}"><i class="seoicon-mail-send"></i>
                                                eCommerce SEO
                                            </a>
                                        </li>
                                        <li class="hover-ver2 sub-menu-hover">
                                            <a href="{{  route('service', ['slug' => 'ecommerce-ppc'])  }}"><i class="seoicon-chat-comment"></i>
                                                eCommerce PPC
                                            </a>
                                        </li>
            
                                        <li class="menu-item-has-children hover-ver2 sub-menu-hover">
                                            <a href="{{  route('service', ['slug' => 'ecommerce-web-design'])  }}">
                                                <i class="seoicon-pie-graph-split"></i>
                                                eCommerce Web Design
                                            </a>
                                        </li>   
                                        <li class="menu-item-has-children hover-ver2 sub-menu-hover">
                                            <a href="{{  route('service', ['slug' => 'shopify-seo'])  }}">
                                                <i class="seoicon-pie-graph-split"></i>
                                                Shopify SEO
                                            </a>
                                        </li>   
                                        <li class="menu-item-has-children hover-ver2 sub-menu-hover">
                                            <a href="{{  route('service', ['slug' => 'walmart-marketplace'])  }}">
                                                <i class="seoicon-pie-graph-split"></i>
                                                Walmart Marketplace
                                            </a>
                                        </li>   
                                        <li class="menu-item-has-children hover-ver2 sub-menu-hover">
                                            <a href="{{  route('service', ['slug' => 'target-plus-marketplace'])  }}">
                                                <i class="seoicon-pie-graph-split"></i>
                                                Target Plus Marketplace
                                            </a>
                                        </li>   
                                        <li class="menu-item-has-children hover-ver2 menu-item-has-children-main-head">
                                            <a href="{{  route('service', ['slug' => 'amazon-marketing'])  }}">
                                                <i class="seoicon-pie-graph-split"></i>
                                                Amazon Marketing
                                            </a>
                                        </li>   
                                        <li class="menu-item-has-children hover-ver2 sub-menu-hover">
                                            <a href="{{  route('service', ['slug' => 'amazon-seo'])  }}">
                                                <i class="seoicon-pie-graph-split"></i>
                                                Amazon SEO
                                            </a>
                                        </li>   
                                        <li class="menu-item-has-children hover-ver2 sub-menu-hover">
                                            <a href="{{  route('service', ['slug' => 'amazon-adverstising-ppc'])  }}">
                                                <i class="seoicon-pie-graph-split"></i>
                                                Amazon Adverstising/PPC
                                            </a>
                                        </li>   
                                        <li class="menu-item-has-children hover-ver2 sub-menu-hover">
                                            <a href="{{  route('service', ['slug' => 'amazon-storefront-branding'])  }}">
                                                <i class="seoicon-pie-graph-split"></i>
                                                Amazon Storefront & Branding
                                            </a>
                                        </li>   
                                        <li class="menu-item-has-children hover-ver2 sub-menu-hover">
                                            <a href="{{  route('service', ['slug' => 'amazon-seller-consulting'])  }}">
                                                <i class="seoicon-pie-graph-split"></i>
                                                Amazon Seller Consulting
                                            </a>
                                        </li>   
                                        <li class="menu-item-has-children hover-ver2 sub-menu-hover">
                                            <a href="{{  route('service', ['slug' => 'amazon-posts-management'])  }}">
                                                <i class="seoicon-pie-graph-split"></i>
                                                Amazon Posts Management
                                            </a>
                                        </li>   
                                        <li class="menu-item-has-children hover-ver2 sub-menu-hover">
                                            <a href="{{  route('service', ['slug' => 'amazon-dsp-advertising-management'])  }}">
                                                <i class="seoicon-pie-graph-split"></i>
                                                Amazon DSP Advertising Management
                                            </a>
                                        </li>   
                                    </ul>
                         
                                </li>
                                {{-- <li class="col-4">
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
        
                                    <li class="menu-item-has-children hover-ver2 sub-menu-hover">
                                        <a href="{{ route('service01') }}">
                                            <i class="seoicon-pie-graph-split"></i>
                                            Content Marketing
                                        </a>
                                    </li>
                                </li> --}}
                          
                        </ul>
                    </li>
                    <li class="nav-menu-child">
                        <div class="service-has-expand wd-nav-link position-relative">
                            <a href="{{ route('services') }}">
                                <span class="wd-nav-text"> work </span>
                            </a>
                        </div>
                        <ul class="sevice-hover-expand tri-ico">
                            {{-- <li class="hover-ver2 sub-menu-hover">
                                <a href="{{ route('case-studies') }}"><i class="seoicon-button"></i>
                                    Case Studies
                                </a>
                            </li> --}}
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
                            {{-- <li class="hover-ver2 sub-menu-hover">
                                <a href="{{ route('video') }}"><i class="seoicon-chat-comment"></i>
                                    Videos
                                </a>
                            </li> --}}
                        </ul>
                    </li>
                    {{-- <li class="nav-menu-child">
                        <div class="wd-nav-link position-relative">
                            <a href="{{ route('about-us') }}">
                                <span class=""> about </span>
                            </a>
                        </div>
                    </li> --}}
                    <li class="nav-menu-child">
                        <div class="service-has-expand wd-nav-link position-relative">
                            <a href="{{ route('blog') }}">
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
            <div class="d-flex gap-2 ps-4 ">
                <a href="tel:909-434-4334" class="">
                    <img width="40" class="ek-phone-img"
                        src="{{ asset('assets/imgs/custom-phone-icon-svg-new.svg') }}" alt="" />
                </a>
                <a href="tel:909-434-4334" class="fs-4 wd-num-phone nav-phone-num-text" style="color: #fff">
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
   
</div>
@yield("pageheading")
    <!-- toggle on mobile -->
    <div class="mobile-toggle-menu">
        <ul class="mobile-toggle-menu-lists">
            <li class="expand-serivce-area-mob">
                <span class="custom-arrow sub-menu-service-btn" id="myitem1"></span>

                <a href="{{ route('services') }}" class="mob-service-link-aco"> Serivces </a>

                <ul data-id="myitem1" class="service-mob-menu">

                    <li class="menu-item-has-children hover-ver2 mov-main-service-head">
                        <a href="{{ route('service', ['slug' => 'digital-marketing']) }}">
                            <i class="seoicon-search"></i>
                            Digital Marketing
                        </a>
                    </li>

                    <li class="hover-ver2">
                        <a href="{{ route('service', ['slug' => 'search-engine-optimization']) }}"><i class="seoicon-button"></i>
                           Search Engine Optimization (SEO)
                        </a>
                    </li>
                    <li class="hover-ver2">
                        <a href="{{ route('service', ['slug' => 'local-seo']) }}"><i class="seoicon-mail-send"></i>
                            Local SEO
                        </a>
                    </li>
                    <li class="hover-ver2">
                        <a href="{{ route('service', ['slug' => 'technical-seO']) }}"><i class="seoicon-chat-comment"></i>
                            Technical SEO
                        </a>
                    </li>

                    <li class="menu-item-has-children hover-ver2">
                        <a href="{{ route('service', ['slug' => 'digital-marketing-strategy']) }}">
                            <i class="seoicon-pie-graph-split"></i>
                            Digital Marketing Strategy
                        </a>
                    </li>
                    <li class="menu-item-has-children hover-ver2">
                        <a href="{{ route('service', ['slug' => 'pay-per-click-marketing']) }}">
                            <i class="seoicon-pie-graph-split"></i>
                          Pay Per Click (PPC) Marketing
                        </a>
                    </li>
                    <li class="menu-item-has-children hover-ver2">
                        <a href="{{ route('service', ['slug' => 'link-building-services']) }}">
                            <i class="seoicon-pie-graph-split"></i>
                            Link Building Services
                        </a>
                    </li>
                    <li class="menu-item-has-children hover-ver2">
                        <a href="{{ route('service', ['slug' => 'haro-link-building']) }}">
                            <i class="seoicon-pie-graph-split"></i>
                            HARO Link Building
                        </a>
                    </li>
                    <li class="menu-item-has-children hover-ver2">
                        <a href="{{ route('service', ['slug' => 'google-analytics-service']) }}">
                            <i class="seoicon-pie-graph-split"></i>
                         Google Analytics Service
                        </a>
                    </li>
                    <li class="menu-item-has-children hover-ver2">
                        <a href="{{ route('service', ['slug' => 'conversion-rate-optimization-services']) }}">
                            <i class="seoicon-pie-graph-split"></i>
                            Conversion Rate Optimization Services
                        </a>
                    </li>
                    <li class="menu-item-has-children hover-ver2">
                        <a href="{{ route('service', ['slug' => 'white-label_services']) }}">
                            <i class="seoicon-pie-graph-split"></i>
                            White Label Services
                        </a>
                    </li>
                    <li class="menu-item-has-children hover-ver2">
                        <a href="{{ route('service', ['slug' => 'franchise-seo']) }}">
                            <i class="seoicon-pie-graph-split"></i>
                            Franchise SEO
                        </a>
                    </li>
                    <li class="menu-item-has-children hover-ver2">
                        <a href="{{ route('service', ['slug' => 'search-engine-marketing']) }}">
                            <i class="seoicon-pie-graph-split"></i>
                            Search Engine Marketing (SEM)
                        </a>
                    </li>
                    <li class="menu-item-has-children hover-ver2 mov-main-service-head">
                        <a href="{{ route('service', ['slug' => 'web-design']) }}">
                            <i class="seoicon-pie-graph-split"></i>
                            Web Design
                        </a>
                    </li>
                    <li class="menu-item-has-children hover-ver2">
                        <a href="{{ route('service', ['slug' => 'wordpress-website-design']) }}">
                            <i class="seoicon-pie-graph-split"></i>
                            WordPress Website Design
                        </a>
                    </li>
                    <li class="menu-item-has-children hover-ver2">
                        <a href="{{ route('service', ['slug' => 'ecommerce-web-design']) }}">
                            <i class="seoicon-pie-graph-split"></i>
                            eCommerce Web Design
                        </a>
                    </li>
                    <li class="menu-item-has-children hover-ver2">
                        <a href="{{ route('service', ['slug' => 'ada-compliance-services']) }}">
                            <i class="seoicon-pie-graph-split"></i>
                            ADA Compliance Services
                        </a>
                    </li>
                    <li class="menu-item-has-children hover-ver2">
                        <a href="{{ route('service', ['slug' => 'video-production']) }}">
                            <i class="seoicon-pie-graph-split"></i>
                            Video Production
                        </a>
                    </li>
                    <li class="menu-item-has-children hover-ver2">
                        <a href="{{ route('service', ['slug' => 'product-photography-services']) }}">
                            <i class="seoicon-pie-graph-split"></i>
                            Product Photography Services
                        </a>
                    </li>
                    <li class="menu-item-has-children hover-ver2">
                        <a href="{{ route('service', ['slug' => 'drone-video-and-photography-services']) }}">
                            <i class="seoicon-pie-graph-split"></i>
                            Drone Video and Photography Services
                        </a>
                    </li>
                    <li class="menu-item-has-children hover-ver2">
                        <a href="{{ route('service', ['slug' => 'email-marketing-services']) }}">
                            <i class="seoicon-pie-graph-split"></i>
                            Email Marketing Services
                        </a>
                    </li>
                    <li class="menu-item-has-children hover-ver2">
                        <a href="{{ route('service', ['slug' => 'sms-marketing-services']) }}">
                            <i class="seoicon-pie-graph-split"></i>
                            SMS Marketing Services
                        </a>
                    </li>
                    <li class="menu-item-has-children hover-ver2">
                        <a href="{{ route('service', ['slug' => 'website-hosting']) }}">
                            <i class="seoicon-pie-graph-split"></i>
                            Website Hosting
                        </a>
                    </li>
                    <li class="menu-item-has-children hover-ver2">
                        <a href="{{ route('service', ['slug' => 'seo-content-writing-services']) }}">
                            <i class="seoicon-pie-graph-split"></i>
                            SEO Content Writing Services
                        </a>
                    </li>
                    <li class="menu-item-has-children hover-ver2 mov-main-service-head">
                        <a href="{{ route('service', ['slug' => 'social-media-marketing']) }}">
                            <i class="seoicon-pie-graph-split"></i>
                            Social Media Marketing
                        </a>
                    </li>
                    <li class="menu-item-has-children hover-ver2">
                        <a href="{{ route('service', ['slug' => 'social-media-management']) }}">
                            <i class="seoicon-pie-graph-split"></i>
                            Social Media Management
                        </a>
                    </li>
                    <li class="menu-item-has-children hover-ver2">
                        <a href="{{ route('service', ['slug' => 'social-media-advertising']) }}">
                            <i class="seoicon-pie-graph-split"></i>
                            Social Media Advertising
                        </a>
                    </li>
                    <li class="menu-item-has-children hover-ver2">
                        <a href="{{ route('service', ['slug' => 'social-media-brand-management']) }}">
                            <i class="seoicon-pie-graph-split"></i>
                            Social Media Brand Management
                        </a>
                    </li>
                    <li class="menu-item-has-children hover-ver2 mov-main-service-head">
                        <a href="{{ route('service', ['slug' => 'reputation-management']) }}">
                            <i class="seoicon-pie-graph-split"></i>
                            Reputation Management
                        </a>
                    </li>
                    <li class="menu-item-has-children hover-ver2">
                        <a href="{{ route('service', ['slug' => 'reputation-management-software']) }}">
                            <i class="seoicon-pie-graph-split"></i>
                            Reputation Management Software
                        </a>
                    </li>
                    <li class="menu-item-has-children hover-ver2">
                        <a href="{{ route('service', ['slug' => 'online-reputation-repair']) }}">
                            <i class="seoicon-pie-graph-split"></i>
                            Online Reputation Repair
                        </a>
                    </li>
                    <li class="menu-item-has-children hover-ver2">
                        <a href="{{ route('service', ['slug' => 'franchise-reputation-management']) }}">
                            <i class="seoicon-pie-graph-split"></i>
                            Franchise Reputation Management
                        </a>
                    </li>
                    <li class="menu-item-has-children hover-ver2">
                        <a href="{{ route('service', ['slug' => 'social-media-reputation-management']) }}">
                            <i class="seoicon-pie-graph-split"></i>
                            Social Media Reputation Management
                        </a>
                    </li>
                    <li class="menu-item-has-children hover-ver2 mov-main-service-head">
                        <a href="{{ route('service', ['slug' => 'ecommerce-marketing']) }}">
                            <i class="seoicon-pie-graph-split"></i>
                            eCommerce Marketing
                        </a>
                    </li>
                    <li class="menu-item-has-children hover-ver2">
                        <a href="{{ route('service', ['slug' => 'ecommerce-optimization']) }}">
                            <i class="seoicon-pie-graph-split"></i>
                            eCommerce Optimization
                        </a>
                    </li>
                    <li class="menu-item-has-children hover-ver2">
                        <a href="{{ route('service', ['slug' => 'ecommerce-seo']) }}">
                            <i class="seoicon-pie-graph-split"></i>
                            eCommerce SEO
                        </a>
                    </li>
                    <li class="menu-item-has-children hover-ver2">
                        <a href="{{ route('service', ['slug' => 'ecommerce-ppc']) }}">
                            <i class="seoicon-pie-graph-split"></i>
                            eCommerce PPC
                        </a>
                    </li>
                    <li class="menu-item-has-children hover-ver2">
                        <a href="{{ route('service', ['slug' => 'shopify-web-design']) }}">
                            <i class="seoicon-pie-graph-split"></i>
                            Shopify Web Design
                        </a>
                    </li>
                    <li class="menu-item-has-children hover-ver2">
                        <a href="{{ route('service', ['slug' => 'shopify-seo']) }}">
                            <i class="seoicon-pie-graph-split"></i>
                            Shopify SEO
                        </a>
                    </li>
                    <li class="menu-item-has-children hover-ver2">
                        <a href="{{ route('service', ['slug' => 'walmart-marketplace']) }}">
                            <i class="seoicon-pie-graph-split"></i>
                            Walmart Marketplace
                        </a>
                    </li>
                    <li class="menu-item-has-children hover-ver2">
                        <a href="{{ route('service', ['slug' => 'target-plus-marketplace']) }}">
                            <i class="seoicon-pie-graph-split"></i>
                                Target Plus Marketplace
                        </a>
                    </li>
                    <li class="menu-item-has-children hover-ver2 mov-main-service-head">
                        <a href="{{ route('service', ['slug' => 'amazon-marketing']) }}">
                            <i class="seoicon-pie-graph-split"></i>
                                Amazon Marketing
                        </a>
                    </li>
                    <li class="menu-item-has-children hover-ver2">
                        <a href="{{ route('service', ['slug' => 'amazon-seo']) }}">
                            <i class="seoicon-pie-graph-split"></i>
                            Amazon SEO
                        </a>
                    </li>
                    <li class="menu-item-has-children hover-ver2">
                        <a href="{{ route('service', ['slug' => 'amazon-advertising-ppc']) }}">
                            <i class="seoicon-pie-graph-split"></i>
                            Amazon Advertising/PPC
                        </a>
                    </li>
                    <li class="menu-item-has-children hover-ver2">
                        <a href="{{ route('service', ['slug' => 'amazon-storefront-branding']) }}">
                            <i class="seoicon-pie-graph-split"></i>
                            Amazon Storefront & Branding
                        </a>
                    </li>
                    <li class="menu-item-has-children hover-ver2">
                        <a href="{{ route('service', ['slug' => 'amazon-seller-consulting']) }}">
                            <i class="seoicon-pie-graph-split"></i>
                            Amazon Seller Consulting
                        </a>
                    </li>
                    <li class="menu-item-has-children hover-ver2">
                        <a href="{{ route('service', ['slug' => 'amazon-posts-management']) }}">
                            <i class="seoicon-pie-graph-split"></i>
                            Amazon Posts Management
                        </a>
                    </li>
                    <li class="menu-item-has-children hover-ver2">
                        <a href="{{ route('service', ['slug' => 'amazon-dsp-adverstising-management']) }}">
                            <i class="seoicon-pie-graph-split"></i>
                                Amazon DSP Adverstising Management
                        </a>
                    </li>
                </ul>
            </li>
            <li class="expand-serivce-area-mob">
                <span class="custom-arrow sub-menu-service-btn" id="myitem2"></span>

                <a href="{{ route('services') }}" class="mob-service-link-aco"> Work </a>

                <ul data-id="myitem2" class="service-mob-menu">
                    {{-- <li class="hover-ver2 ">
                        <a href="{{ route('case-studies') }}"><i class="seoicon-button"></i>
                            Case Studies
                        </a>
                    </li> --}}
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
                    {{-- <li class="hover-ver2">
                        <a href="{{ route('video') }}"><i class="seoicon-chat-comment"></i>
                            Videos
                        </a>
                    </li> --}}
                </ul>
            </li>
            {{-- <li>
                <a href="{{ route('about-us') }}"> about </a>
            </li> --}}
            <li class="expand-serivce-area-mob">


                <a href="{{ route('blog') }}" class="mob-service-link-aco"> Blog </a>


            </li>
            </li>
            <li><a href="{{ route('faqs') }}"> FAQ's </a></li>
            <li><a href="{{ route('contact') }}"> contact </a></li>
        </ul>
    </div>
</header>
<!-- NAVBAR SECTION ENDS HERE -->
