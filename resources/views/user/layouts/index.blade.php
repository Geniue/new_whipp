<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <title>Customer Panel</title>
    <style>

        /* Set a fixed height and make it scrollable */
        main {
            height: calc(100vh - 56px); /* 100% viewport height minus the navbar height */
            position: relative; /* To position the footer at the bottom */

        }

        /* Footer styling */
        footer {
            /*position: absolute;*/
            bottom: 0;
            width: 100%;
            background-color: #f8f9fa;
        }
        /* Additional styling */
        .sidebar {
            min-height: 100vh;
            background-color: #343a40;
            padding-top: 20px;
        }

        .sidebar .nav-link {
            color: #adb5bd;
            border-radius: 8px;
            margin-bottom: 10px;
            transition: background-color 0.3s ease;
        }

        .sidebar .nav-link.active,
        .sidebar .nav-link:hover {
            color: #fff;
            background-color: rgba(255, 255, 255, 0.1);
        }

        .user-dropdown::after {
            display: none;
        }

        @media (max-width: 991.98px) {
            #desktop-sidebar {
                display: none;
            }
        }

        @media (min-width: 992px) {
            #mobile-sidebar {
                display: none;
            }
        }

        .bg-dark {
            background-color: #343a40 !important;
        }

        .btn-dark {
            background-color: #343a40 !important;
        }

        /* Responsive footer links */
        footer a {
            margin-right: 10px;  /* Spacing between inline links */
        }

        @media (max-width: 576px) {  /* Breakpoint for small devices */
            footer {
                padding: 10px 0;  /* Reduced padding on mobile */
            }

            footer a {
                display: block;  /* Stack links vertically on mobile */
                margin-bottom: 5px;  /* Spacing between stacked links */
                margin-right: 0;  /* Reset spacing for inline links */
            }

            .desktop-sp {
                display: none;
            }
        }
    </style>
    @yield('css')
</head>

<body class="bg-light" style="overflow: hidden;">
    @include('user.layouts.navbar')

    <div class="container-fluid">
        <div class="row">
            @include('user.layouts.sidebar')

            <!-- Main Content -->
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 py-4" style="overflow: scroll;">
                @yield('content')
                @include('user.layouts.footer')              
            </main>
            
        </div>
         
    </div>

    <!-- Bootstrap JS (Optional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script type="text/javascript">
        $(document).on("click", "#logout_a", function(e) {
            e.preventDefault();
            $("#logout-form").submit();
        })


        $(document).on("click", "#logout", function(e) {
            e.preventDefault();
            $("#submitlogout").click();
        })
    </script>
    @yield('js')
</body>

</html>
