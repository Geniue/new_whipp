<!DOCTYPE html>
<html lang="en">

    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="robots" content="noindex,nofollow,nocrawl">
        <link rel="shortcut" type="image/png" href="{{asset('assets/imgs/logos/site_icon_128x128.png')}}">
        <link rel="icon" type="image/png" href="{{asset('assets/imgs/logos/site_icon_128x128.png')}}">
        
        @yield('title')



    {{-- CSS SECTION  --}}

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css"
        integrity="sha512-t4GWSVZO1eC8BM339Xd7Uphw5s17a86tIZIj8qRxhnKub6WoyhnrxeCIMeAqBPgdZGlCcG2PrZjMc+Wr78+5Xg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('css/main.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/utiles.css') }}" />
    {{-- navbar styles --}}
    <style>
        :root {
            --primary-color: #2596be;
            --btn-bg-color: #30A2FF;
            --btn-hover-color: #3bd4ff;
            --border-color: #98EECC;
            --special-color-2: #537FE7;
            --special-color: #213555;
        }

        .bg-custom-1234 {
            background: var(--special-color);
        }

        .ek-phone-img {
            filter: invert(53%) sepia(54%) saturate(542%) hue-rotate(150deg) brightness(85%) contrast(105%);
        }

        .footer-bg-color {
            background: var(--special-color)
        }

        .mainwhipplogo {
            width: 200px
        }

        .sub-menu-hover {
            position: relative;
        }

        .nav-phone-num-text {
            width: 160px;
        }

        .line-heig-40 {
            line-height: 40px !important;
        }

        .sub-menu-hover>a {
            display: inline-block;
            width: 100%;
            height: 100%;
            padding: 10px 14px 10px 18px;
            position: relative;
            -webkit-transition: all .4s ease;
            -moz-transition: all .4s ease;
            transition: all .4s ease;
        }

        .sub-menu-hover>a:hover {
        margin-left: 16px;
        background: #5a5346;
        }

        .sub-menu-hover>a::after {
        position: absolute;
        content: '';
        top: 18px;
        left: -10px;
        line-height: 1;
        -webkit-font-smoothing: antialiased;
        border-left: solid 8px #db7803;
        border-bottom: solid 6px transparent;
        border-top: solid 6px transparent;
        width: 8px;
        height: 8px;
        content: "";
        opacity: 0;
        visibility: hidden;
        -webkit-transition: all .4s ease;
        -moz-transition: all .4s ease;
        transition: all .4s ease;
        }

        .sub-menu-hover:hover>a::after {
            opacity: 1;
            left: 6px;
            visibility: visible;
        }

        @media (max-width:662px) {
            .mainwhipplogo {
                width: 180px
            }
        }

        @media (min-width:1266px) {
            .ek-phone-img {
                width: 50px;
            }

        }
    </style>

    @yield('css')

</head>

<body class="">
    @include('layouts.navbar')
    @yield('content')


    {{-- CONTACT US BANNER STARTS HERE --}}
    @include('app.static_components.contactus_banner')
    {{-- CONTACT US BANNER ENDS HERE --}}
    @include('layouts.newfooter')

    <div class="position-fixed w-100 h-100 bg-black  d-flex justify-content-center align-items-center top-0 d-none left-0" id="grow_modal"  style="z-index: 99999999">

        <div class="p-lg-5 py-4 px-3 col-md-9 col-lg-12 mx-auto position-relative">
            <div  class="position-relative overflow-hidden rounded-4 p-3 p-lg-0 col-12 col-md-10 col-lg-8 mx-auto">
                    <span id="popup_xbtn" class="popup_xbtn"></span>
        
                
                <div class="">
                    <div class="py-4 text-center custom-text-white">
                        <p class="fs-1 pb-0">Let's talk</p>
                        <p class="custom-color-123">Ready to experience hypergrowth?</p>
                    </div>
                </div>
                {{-- form --}}
                <form action="" class=" custom-text-white">
                    <div class="row">
                        <div class="col-12 col-lg-6 p-lg-5">
                            <div class="position-relative overflow-hidden mb-2 mb-lg-4">
                                <input name="yourname-footer" placeholder="Your name*" class="custom-text-white custom-color-123-placeholder fs-4 bg-transprent w-100 py-1 rounded-3 footer-email-input" type="text">
                                <svg class="wav-anime" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
                                    <path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"></path>
                                </svg>
                            </div>
                            <div class="position-relative overflow-hidden  mb-2 mb-lg-4 pt-1">
                                <input class="custom-text-white fs-4 bg-transprent w-100 py-1 rounded-3 footer-email-input custom-color-123-placeholder" type="email" placeholder="Your Email address*">
                                <svg class="wav-anime" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
                                    <path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"></path>
                                </svg>
                            </div>
                            <div class="position-relative overflow-hidden  my-lg-4">
                                <input class="custom-text-white fs-4 bg-transprent w-100 py-1 rounded-3 footer-email-input custom-color-123-placeholder" type="number" placeholder="Your Phone number*">
                                <svg class="wav-anime" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
                                    <path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"></path>
                                </svg>
                            </div>
                        
                        </div>
                        <div class="col-12 col-lg-6 p-3 d-flex flex-column ">
                            <label for="project_description" class="pb-3 fs-5 fw-medium custom-color-123">Please Describe Project</label>
                            <textarea name="project_description" class="custom-text-white footer-oranization_goal_message modal-oranization_goal_message" id="" cols="30" rows="7"></textarea>
                        </div>
                        <div class="text-center p-2 my-3">
                            <button type="submit" class="footer-form-submit-orign px-5 py-2">SUBMIT</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>



    {{-- modal --}}
    <script >
        document.querySelectorAll('.iwantgrow_btn').forEach((btn)=>{
            btn.addEventListener('click',(e)=>{
                document.getElementById('grow_modal').classList.remove("d-none")
                document.getElementById('grow_modal').classList.add("show_popup")
                document.body.style="overflow:hidden;"
            })
        })
        document.getElementById("popup_xbtn").addEventListener("click",()=>{
            document.getElementById('grow_modal').classList.add("hide_popup")
            setTimeout(() => {
                document.getElementById('grow_modal').classList.add("d-none")
                document.getElementById('grow_modal').classList.remove("hide_popup")
            }, 180);
            document.body.style="overflow:auto;"
        })
    </script>



    {{-- JS SECTION --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.min.js"
        integrity="sha512-3dZ9wIrMMij8rOH7X3kLfXAzwtcHpuYpEgQg1OA4QAob1e81H8ntUQmQm3pBudqIoySO5j0tHN4ENzA6+n2r4w=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="{{ asset('js/main.js') }}"></script>

    @yield('js')
</body>

</html>
