<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="robots" content="noindex,nofollow,nocrawl">
    <title>Whippdigital template</title>



    {{-- CSS SECTION  --}}

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous" />
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

        .footer-bg-color {
            background: var(--special-color)
        }

        .mainwhipplogo {
            width: 200px
        }

        .sub-menu-hover {
            position: relative;
        }

        .sub-menu-hover>a::after {
            content: "";
            display: block;
            width: 0%;
            height: 2px;
            background: var(--primary-color);
            margin: auto;
            left: 0;
            right: 0;
            position: absolute;
            -webkit-transition: all 0.4s ease-in-out;
            -moz-transition: all 0.4s ease-in-out;
            -o-transition: all 0.4s ease-in-out;
            -ms-transition: all 0.4s ease-in-out;
            bottom: 0;
        }

        .sub-menu-hover:hover>a::after {
            width: 100%;
        }

        @media (max-width:662px) {
            .mainwhipplogo {
                width: 180px
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
    <script src="{{ asset('js/main.js') }}"></script>

    @yield('js')
</body>

</html>
