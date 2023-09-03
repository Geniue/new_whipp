<!DOCTYPE html>
<html lang="en">

    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <link rel="shortcut" type="image/png" href="{{asset('assets/imgs/logos/site_icon_128x128.png')}}">
        <link rel="icon" type="image/png" href="{{asset('assets/imgs/logos/site_icon_128x128.png')}}">
        
        <title>
            @yield('title')
        </title>

        {{-- meta data --}}
        @yield('meta')


    {{-- CSS SECTION  --}}

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css"
        integrity="sha512-t4GWSVZO1eC8BM339Xd7Uphw5s17a86tIZIj8qRxhnKub6WoyhnrxeCIMeAqBPgdZGlCcG2PrZjMc+Wr78+5Xg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('css/main.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/utiles.css') }}" />
    {{-- navbar styles --}}
    <link rel="stylesheet" href="{{asset('css/new.css')}}">
    <style>
        .blue-box-bg-navbar {
    background: url('{{asset("assets/imgs/blue-mosaic-tile-pattern-background-in-technology-2022-12-16-04-28-39-utc.jpg")}}')
        repeat;
    background-size: cover;
    background-position: 100% 67%;
}
.ek-phone-img{
    width: 40px;
    margin-right: 7px;
}
.mainwhipplogo{
    width: 100%;
}
.wd-pg-link{
    border-radius: 50%;
    background-color: deepskyblue;
    width: 38px !important;
    height: 38px !important;
    display: grid;
    overflow: hidden;
    justify-content: center;
    align-items: center;
}
.wd-pg-link:hover{
    background-color: #fff;
}
.wd-pg-link :hover .icon{
    fill: deepskyblue;
}
.page-link{
    width: 38px;
    height: 38px;
    border-radius: 50%;
    display: flex;
    justify-content: center;
    align-items: center;
    font-size: 18px !important;
}
.page-link.active{
    background-color: deepskyblue !important;
    border: none !important;
}
.disabled{
    pointer-events: none;
    
    background: #dfdedeee !important;
}
.bacsrpre-sp{
    background: url('{{asset('assets/imgs/backspread.png')}}');
    background-repeat: no-repeat;
    background-size: contain;
    
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
                        <p class="fs-1 pb-0 fw-bold">Let's talk</p>
                        <p class="custom-color-123 fs-5">Ready to experience hypergrowth?</p>
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



@yield('js')

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

    {{-- lazy loading packages --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lozad.js/1.16.0/lozad.min.js"
        integrity="sha512-21jyjW5+RJGAZ563i/Ug7e0AUkY7QiZ53LA4DWE5eNu5hvjW6KUf9LqquJ/ziLKWhecyvvojG7StycLj7bT39Q=="
        crossorigin="anonymous" referrerpolicy="no-referrer" defer></script>


<script>
    document.addEventListener("DOMContentLoaded", async function() {
        

        const observer = await lozad('.lozad', {
            rootMargin: '100px 0px', // Apply a 100px margin around the viewport
    threshold: 0.1, // Load images when they are 10% visible
    loaded: function(el) {
        // Add a class to mark the image as loaded
        el.classList.add('loaded');
    }
});
observer.observe();

    });
</script>

   
</body>

</html>
