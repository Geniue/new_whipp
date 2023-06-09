<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="robots" content="noindex,nofollow,nocrawl">
    <title>Whippdigital template</title>



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
            background: #8ab7c787;
        }

        .sub-menu-hover>a::after {
            position: absolute;
            content: '';
            top: 18px;
            left: -10px;
            line-height: 1;
            -webkit-font-smoothing: antialiased;
            border-left: solid 8px var(--btn-hover-color);
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

<body>
    @include('layouts.navbar')
    @yield('content')


    {{-- CONTACT US BANNER STARTS HERE --}}
    @include('app.static_components.contactus_banner')
    {{-- CONTACT US BANNER ENDS HERE --}}
    @include('layouts.footer')




    {{-- JS SECTION --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.min.js"
        integrity="sha512-3dZ9wIrMMij8rOH7X3kLfXAzwtcHpuYpEgQg1OA4QAob1e81H8ntUQmQm3pBudqIoySO5j0tHN4ENzA6+n2r4w=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="{{ asset('js/main.js') }}"></script>

    @yield('js')
</body>

</html>
