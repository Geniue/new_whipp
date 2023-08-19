<!DOCTYPE html>
<html lang="en">

    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
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
        /* Firefox */
        .wd-nav-link > a:after{
            background: #fff !important;
        }
        .wd-nav-links{
            justify-content: start !important; 
        }
        .custom-boder-left{
            border-left: 1px solid #e1e1e17d;
        }
        @media (max-width:992px){
                .custom-boder-left{
                    border-left:none;
                }
                
        }
        input[type=number] {
        -moz-appearance: textfield;
        }
        @media(max-width:992px){
            .blue-box-bg-navbar{
                position: sticky !important;
                top: 0 !important;
            }

            .footer-oranization_goal_message{
                height: 120px !important;
            }

        }
        .footer-form-submit-orign {
            background-color: #3bd4ff;
            border-radius: 7px;
            border-top-right-radius: 0;
            box-shadow: 0 5px 9px 0 rgba(59, 212, 255,.3);
            color: #000;
            transition: .4s;
            font-weight: 600;
        }
        /* Chrome, Safari, Edge, Opera */
        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
        -webkit-appearance: none;
        margin: 0;
        }
        /* lets talk button */
        .lets-talk-btn{
            border: none !important; 
            border-radius: 7px;
            border-top-right-radius: 0;
            box-shadow: 0 5px 9px 0 rgba(59, 212, 255,.3);
            color: #000;
            border: 1px solid #5a5346
            transition: .4s;
            font-weight: 600;
    
        }
        .lets-talk-btn:hover{
        background-color: black !important;
        color: #fff !important;
        }
        /* /lets talk button */

        .cta-btn-btn{
          
          border-radius: 7px;
          border-top-right-radius: 0;
          box-shadow: 0 5px 9px 0 rgba(59, 212, 255,.3);
          color: #fff;
       background-color: #30A2FF;
          transition: .4s;
          font-weight: 600;
          border: 1px solid transparent;
          
      }
      .cta-btn-btn:hover{
          background-color: transparent !important;
          border: 1px solid #30A2FF;
      color: #30A2FF !important;
      }

        /* new form animations */
        .anim-for-inp-comp {
            position: relative;
            height: 60px;
            overflow: hidden;
            }

            .anim-for-inp-comp input {
            width: 100%;
            height: 100%;
            color: #92989e;
            padding-top: 20px;
            border: none;
            font-size: 22px;
            background-color:transparent;
            }
            .footer-oranization_goal_message{
                color: #92989e !important;
            }
            .anim-for-inp-comp label {
            position: absolute;
            bottom: 0px;
            left: 0px;
            width: 100%;
            height: 100%;
            pointer-events: none;
            border-bottom: 1px solid #92989e;
            }
            .anim-for-inp-comp label::after {
            content: "";
            position: absolute;
            bottom: -1px;
            left: 0px;
            width: 100%;
            height: 100%;
            border-bottom: 3px solid #92989e;
            transform: translateX(-100%);
            transition: all 0.3s ease;
            }

            .anime-label-text {
            font-size: 22px;
            color: #92989e;
            position: absolute;
            bottom: 0px;
            left: 0px;
            padding-bottom: 5px;
            transition: all 0.3s ease;
            }
            .anim-for-inp-comp input:focus {
            outline: none;
            }
            .anim-for-inp-comp input:focus + .anime-label-wrap .anime-label-text,
            .anim-for-inp-comp input:valid + .anime-label-wrap .anime-label-text {
            transform: translateY(-150%);
            font-size: 14px;
            left: 0px;
            color: #92989e;
            font-weight: 600;
            }
            .anim-for-inp-comp input:focus + .anime-label-wrap::after,
            .anim-for-inp-comp input:valid + .anime-label-wrap::after {
            transform: translateX(0%);
            }


        /*  /new form animations */
        
        /* footer contact form border animation */
        
            @property --angle {
            syntax: '<angle>';
            initial-value: 90deg;
            inherits: true;
            }

            @property --gradX {
            syntax: '<percentage>';
            initial-value: 50%;
            inherits: true;
            }

            @property --gradY {
            syntax: '<percentage>';
            initial-value: 0%;
            inherits: true;
            }

    
            p {
                margin: 0;
            }

            :root {
                --d: 2500ms;
                --angle: 90deg;
                --gradX: 100%;
                --gradY: 50%;
                --c1: #3bd4ff;
                --c2: rgba(168, 239, 255, 0.1);
            }

            .box {
                border: 0.10rem solid;
                border-image: conic-gradient(from var(--angle), var(--c2), var(--c1) 0.1turn, var(--c1) 0.15turn, var(--c2) 0.25turn) 30;
                animation: borderRotate var(--d) linear infinite forwards;
            }

            .box:nth-child(2) {
                border-image: radial-gradient(ellipse at var(--gradX) var(--gradY), var(--c1), var(--c1) 10%, var(--c2) 40%) 30;
                animation: borderRadial var(--d) linear infinite forwards;
            }

            @keyframes borderRotate {
                100% {
                    --angle: 420deg;
                }
            }

            @keyframes borderRadial {
                20% {
                    --gradX: 100%;
                    --gradY: 50%;
                }
                40% {
                    --gradX: 100%;
                    --gradY: 100%;
                }
                60% {
                    --gradX: 50%;
                    --gradY: 100%;
                }
                80% {
                    --gradX: 0%;
                    --gradY: 50%;
                }
                100% {
                    --gradX: 50%;
                    --gradY: 0%;
                }
            }
        /* /footer contact form border animation */

        .menu-icon-wrapper svg path {
            stroke: #fff !important;
            }
        
        .blue-box-bg-navbar{
            background: url('{{asset("assets/imgs/blue-mosaic-tile-pattern-background-in-technology-2022-12-16-04-28-39-utc.jpg")}}')  repeat ;
            background-size: cover;
            background-position:100% 67%; 
        }
        .desk-con-ti-ba-section  h2{
            color: #fbfbfb !important
        }
        .desk-con-ti-ba-section p{
            color: #c7c7c7 !important
        }
        
        .wd-nav-link > a {
            color: #fff !important;
                }
        .wd-nav-text{
            color: #fff ;
        }
        .main-service-hover-cen .menu-item-has-children-main-head >a:hover {
            background-color: #5a5346;
        }
        .sevice-hover-expand.main-service-hover-cen.tri-ico{
            left: 272px;
            width: 1100px !important;
        
        }
        .main-service-hover-cen .menu-item-has-children-main-head > a{
            text-transform: uppercase !important;
            font-weight: 700;
        }
        .service-mob-menu .mov-main-service-head {
            font-weight: 700;
            text-transform: uppercase;
        }
        .sub-menu-hover>a::after {
            border-left: solid 8px #3bd4ff !important;
        }
        .service-mob-menu{
            background-color: #443f35 !important;
        }
        ..sub-menu-hover>a:hover {
            margin-left: 16px;
            background: #5a5346;
            }
        .sevice-hover-expand {
            width: 300px;
            z-index: 9999;
            height: auto;
            background-color: #443f35;
            border-radius: 6px;
            position: absolute;
            list-style: none;
            padding: 0;
            margin: 13px 0 0 0 !important;
            max-height: 0;
            transition: max-height 0.4s ease-out;
            overflow: hidden;
        }
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
        .wp-brdcb:before{
            border-top: 15px solid #3bd4ff !important;
        }
        .height-41px{
            height: 41px !important;
        }
        .wd-nav-link > a:after {
        height: 3px;
        margin: 4px 0 !important;
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
                            <div class="anim-for-inp-comp mt-2">
                                <input type="text" name="username" autocomplete="off" required />
                                <label for="username" class="anime-label-wrap">
                                <span class="anime-label-text">
                                    Your name
                                </span>
                                </label>
                            </div>
                            <div class="anim-for-inp-comp mt-3">
                                <input type="email" name="email" autocomplete="off" required />
                                <label for="email" class="anime-label-wrap">
                                <span class="anime-label-text">
                                    Your Email address
                                </span>
                                </label>
                            </div>
                            <div class="anim-for-inp-comp mt-3">
                                <input type="number" name="phone" autocomplete="off" required />
                                <label for="phone" class="anime-label-wrap">
                                <span class="anime-label-text">
                                    Your Phone Number
                                </span>
                                </label>
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
