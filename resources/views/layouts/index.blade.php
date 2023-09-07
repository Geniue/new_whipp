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
background-repeat: repeat;
    background-size: cover;
    background-position: 100% 67%;
}
.ek-phone-img{
    width: 42px;
    margin-right: 0px;
}
@media (min-width:1240px){
    .mainwhipplogo{
        width: 230px;
        max-width: unset !important;
    }
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

    background-repeat: no-repeat;
    background-size: contain;
    
}
.swal-overlay.swal-overlay--show-modal{
 z-index: 99999 !important;
}
.footer-loc-soc-link a:hover #insta {
    transition: unset !important;
}


.font-42px{
    font-size: 42px !important;
}
.font-40px{
    font-size: 40px !important;
}
.font-30px{
    font-size: 30px !important;
}



@media (max-width:300px){
    .mx-f-16px{
        font-size: 15px !important;
    }
    .font-42px{
    font-size: 28px !important;
}
.font-40px{
    font-size: 28px !important;
}
.font-30px{
    font-size: 28px !important;
}
}

/* new section */

.context {
    width: 100%;
    position: absolute;
 
    
}

.context h1{
    text-align: center;
    color: #fff;
    font-size: 50px;
}


.area{
    background: #30a2ffe8;  
    background: -webkit-linear-gradient(to left, #8f94fb, #4e54c8);  
    width: 100%;
    height:550px;
    
   
}

@media(min-width:1090px){
    .mk-r--250px{
        margin-right: -200px;
    }
}



/* css for digital expertise start */
.digital_expertise_border {
    border-top: 1px solid #30a2ff5c;
}
.wp-dg-ext-gird-comp .col-lg-4 {
    /* border-right: 1px solid #30a2ff5c; */
    border-left: 1px solid #30a2ff5c;
    position: relative;
}
.wp-dg-ext-gird-comp .col-lg-4:nth-child(3n + 1) {
    border-left: 0;
}

@media screen and (max-width: 992px) {
    .wp-dg-ext-gird-comp .col-lg-4:last-child {
        border-right: 1px solid #30a2ff5c;
    }
    .wp-dg-ext-gird-comp .col-lg-4:not(:first-child) {
        border-right: 1px solid #30a2ff5c;
    }
    .wp-dg-ext-gird-comp .col-lg-4:nth-child(2) {
        border-bottom: 1px solid #30a2ff5c;
    }
}
@media screen and (max-width: 768px) {
    .wp-dg-ext-gird-comp .col-lg-4 {
        border-right: 0 !important;
        border-left: 0;
    }
    .wp-dg-ext-gird-comp .col-lg-4:first-child {
        border-bottom: 1px solid #30a2ff5c;
    }
    .mx-t-20px{
        top: 10px !important;
    }
}




.footer-contact-container{
    background: #000000 !important;
}

.circles{
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    overflow: hidden;
}

.circles li{
    position: absolute;
    display: block;
    list-style: none;
    width: 20px;
    height: 20px;
    background: rgba(255, 255, 255, 0.2);
    animation: animate 25s linear infinite;
    bottom: -150px;
    
}

.circles li:nth-child(1){
    left: 25%;
    width: 80px;
    height: 80px;
    animation-delay: 0s;
}


.circles li:nth-child(2){
    left: 10%;
    width: 20px;
    height: 20px;
    animation-delay: 2s;
    animation-duration: 12s;
}

.circles li:nth-child(3){
    left: 70%;
    width: 20px;
    height: 20px;
    animation-delay: 4s;
}

.circles li:nth-child(4){
    left: 40%;
    width: 60px;
    height: 60px;
    animation-delay: 0s;
    animation-duration: 18s;
}

.circles li:nth-child(5){
    left: 65%;
    width: 20px;
    height: 20px;
    animation-delay: 0s;
}

.circles li:nth-child(6){
    left: 75%;
    width: 110px;
    height: 110px;
    animation-delay: 3s;
}

.circles li:nth-child(7){
    left: 35%;
    width: 150px;
    height: 150px;
    animation-delay: 7s;
}

.circles li:nth-child(8){
    left: 50%;
    width: 25px;
    height: 25px;
    animation-delay: 15s;
    animation-duration: 45s;
}

.circles li:nth-child(9){
    left: 20%;
    width: 15px;
    height: 15px;
    animation-delay: 2s;
    animation-duration: 35s;
}

.circles li:nth-child(10){
    left: 85%;
    width: 150px;
    height: 150px;
    animation-delay: 0s;
    animation-duration: 11s;
}



@keyframes animate {

    0%{
        transform: translateY(0) rotate(0deg);
        opacity: 1;
        border-radius: 0;
    }

    100%{
        transform: translateY(-1000px) rotate(720deg);
        opacity: 0;
        border-radius: 50%;
    }

}

/* /new secton */




.animate-charcter
{
   text-transform: uppercase;
  background-image: linear-gradient(
    -225deg,
    #94a7c9 0%,
    #3e4756 0%,
    #94a7c9 67%,
    #3e4756 100%
  );
  background-size: auto auto;
  background-clip: border-box;
  background-size: 200% auto;
  color: #fff;
  background-clip: text;
  text-fill-color: transparent;
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  animation: textclip 2s linear infinite;
  display: inline-block;
     
}

@keyframes textclip {
  to {
    background-position: 200% center;
  }
}




.logo img {
  float: unset !important;
  margin-right: unset !important;
}

    </style>
    @yield('css')

</head>


@php
$segments = explode('/', request()->path());

// Check if the last segment is empty (i.e., the URL is "/")
if (empty(end($segments))) {
    $lastSegment = 'home page';
} else {
    $lastSegment = end($segments);
}
@endphp
{{-- @dd($lastSegment) --}}


<body class="">
    @include('layouts.navbar')
    @yield('content')




    {{-- CONTACT US BANNER STARTS HERE --}}
    @include('app.static_components.contactus_banner')
    {{-- CONTACT US BANNER ENDS HERE --}}
    @include('layouts.newfooter')

    <div class="position-fixed w-100 h-100 bg-black  d-flex justify-content-center align-items-center top-0 d-none left-0" id="grow_modal"  style="z-index: 99999999">

        <div class="p-lg-5 py-4 px-3 col-md-9 col-lg-12 mx-auto position-relative">
            <div  class="position-relative overflow-hidden rounded-4 p-3 p-lg-0 col-9 col-sm-10 col-lg-8 mx-auto">
                    <span id="popup_xbtn" class="popup_xbtn"></span>
        
                
                <div class="">
                    <div class="py-4 text-center custom-text-white">
                        <p class="fs-1 pb-0 fw-bold">Let's have a conversation</p>
                        <p class="custom-color-123 fs-5">Learn how to explode your growth today</p>
                    </div>
                </div>
                {{-- form --}}
                <form action="{{route('letstalk_form')}}" method="POST" class=" custom-text-white ">
                    @csrf
                    <div class="row">
                        <div class="col-12 col-lg-6 p-lg-5">
                            <div class="anim-for-inp-comp">
                                <input  aria-label="name" type="text" name="name" autocomplete="off" required />
                                <label for="name" class="anime-label-wrap">
                                  <span class="anime-label-text">
                                    Your Name
                                  </span>
                                </label>
                              </div>
                            <div class="anim-for-inp-comp mt-3">
                                <input  aria-label="email" type="text" name="email" autocomplete="off" required />
                                <label for="email" class="anime-label-wrap">
                                  <span class="anime-label-text">
                                    Your Email Address
                                  </span>
                                </label>
                              </div>
                              <div class="anim-for-inp-comp mt-3">
                                <input  aria-label="phone" name="phone" autocomplete="off" required />
                                <label for="phone" class="anime-label-wrap">
                                  <span class="anime-label-text">
                                    Your Phone Number
                                  </span>
                                </label>
                              </div> 
                              {{-- to get the service page title from url  --}}
                              <input  aria-label="current page" type="hidden" name="user_specific_service" value="{{$lastSegment}}">
                        
                        </div>
                        <div class="col-12 col-lg-6 p-3 d-flex flex-column ">
                            <label for="message_" class="pb-3 fs-5 fw-medium custom-color-123">Please Describe Project</label>
                            <textarea  aria-label="message" name="message_" class="custom-text-white footer-oranization_goal_message modal-oranization_goal_message text-white fs-5" id="" cols="30" rows="7"></textarea>
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

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer" type="67e05d953e68514bd24df7ee-text/javascript"></script>


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

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script type="text/javascript">
    function showAlert(title /*, text*/ ) {
        let error = "{!! implode(' ', $errors->all()) !!}";
        swal({
            title: title,
            text: "{!! implode(' ', $errors->all()) !!}",
            icon: "error"
        });


        if (error == "You need to provide your correct phone number for coupons And seasonal deals.") {
            document.cookie = "newUser= ; expires = Thu, 01 Jan 1970 00:00:00 GMT"
        }
    }

    function toggleSlide(elementSelector, height) {
        const element = $(elementSelector);

        if (element.height() === 50) {
            element.animate({
                height: height
            });
        } else {
            element.animate({
                height: 50
            });
        }
    }


</script>

@if ($errors->any())
    <script type="text/javascript">
        showAlert("Error");
    </script>
@endif

<script type="text/javascript">
    function showAlertSuccess(title) {
        swal({
            title: title,
            text: "{{ session()->get('message') }}",
            icon: "success"
        });
    }
</script>
@if (session()->has('message'))
    <script type="text/javascript">
        showAlertSuccess("Success");
    </script>

   
@endif

@yield('js')

</body>

</html>
