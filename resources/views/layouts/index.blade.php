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
    border-top: 2px solid #30a2ff5c;
}
.wp-dg-ext-gird-comp .col-lg-4 {
    /* border-right: 1px solid #30a2ff5c; */
    border-left: 2px solid #30a2ff5c;
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
    #coolVideo{
        translate: -13vw;
        width: 1130px !important;
    }
    

}
#coolVideo poster {
    max-width :100%;
}
.bacsrpre-sp{
    background-position: center;
    background-size: 78%;
}
.max-mb-h-600px{
        max-height: 630px !important;
        background-size: 100% !important;
    }

.cool-video-banner{
  
  position: absolute;
  margin: auto;
  width: 100%;
  height: 100%;
  
  background: #fff;
  
  overflow: hidden;
  clip-path: 0 0;
  transform: translatez(0);
}

#coolVideo{

    width: 1295px;
  margin-right: 20px;
  

}
.text-capitalzed{
    text-transform: capitalize !important;
}
.border-1{
    border-color: #23bde748 !important; 
}

.exprer-box-ico{
    width: 65px;
    height: 65px;
    border-radius: 50%;
    background: tomato;
    display: flex;
    justify-content: center;
    align-items: center;
    border: 2px solid #0081f34f !important;
}

.wp-cril-ico-ic{
    position: absolute;
    top: -38px;
   
    width: 78px;
    height: 78px;
    border-radius: 50%;
    background: tomato;
    display: flex;
    justify-content: center;
    align-items: center;
    border: 2px solid #0081f34f !important;
}
.wp-cril-ico-ic svg{
    width: 65% !important;
}
.wp-cril-ico-ic img{
    width: 55% !important;
}
.exprer-box-ico svg{
    width: 58% !important;
    max-width: 100%  !important;
}
p{
    font-size: 17px;
}
.max-show-text-6{
    display: -webkit-box;
  -webkit-line-clamp: 6;
  -webkit-box-orient: vertical;
  overflow: hidden;
  text-overflow: ellipsis;
  
}
@media(min-width:1200px){
    .max-lg-ms-100px{
        margin-left: 100px !important; 
    }
    .mx-lg-bg-right{
        background-position: 35px;
    }
}
.bg-newblue {
  background-color: #23bce7 !important;
}
.colr-newblr{
color: #30a2ff !important;
}
.light-white{
    background-color: #f4f4f4;
}
@media(min-width:1200px){
    #coolVideo{

margin-right: 50px;


}
.mxw-100{
    max-width:  100%;
}

    
}


.footer-contact-container{
    background: #000000d1 !important;
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
    #30a2ff8c 0%,
    #30a2ff 0%,
    #30a2ff9e 67%,
    #30a2ff 100%
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


#coolVideo {
    opacity: 1;
    transition: opacity 0.5s;
}

#coolVideo.fade-out {
    opacity: 0;
}

.custom-text{
    color: #262626  !important;
}

.logo img {
  float: unset !important;
  margin-right: unset !important;
}

    </style>

{{-- popup styles --}}

<style>

.close_btn {
  background-color: transparent !important;
  border: 1px solid #30a2ff;
  color: #30a2ff !important;
}

    .pp-uap-bg{
                background-color: rgba(0, 0, 0, 0.9);
                z-index: 9999999999;
        }
        .br-s32-ds{
            width: 38%;
            margin: 0 auto;
            border: 2px solid tomato;
        }
        .cus-ba-shadow{
            -webkit-box-shadow: 0 5px 15px rgba(0, 0, 0, .5);
        box-shadow: 0 5px 15px rgba(0, 0, 0, .5);
        }
        .intial-anim{
            opacity: 0;
            height: 0px;
            width: 0px;
        }

        /* CSS for fade-out animation */
        .anime-fadeout {
            display: block;
            -webkit-animation: fadeOut 1s;
            animation: fadeOut 1s;
            animation-fill-mode: forwards;
        }

        @-webkit-keyframes fadeOut {
            0% { opacity: 1;width: 100%; height: 100%;  }
            99% { opacity: 0.01; width: 100%; height: 100%; }
            100% { opacity: 0; width: 0; height: 0; }
        }

        @keyframes fadeOut {
            0% { opacity: 1;width: 100%; height: 100%;  }
            99% { opacity: 0.01; width: 100%; height: 100%; }
            100% { opacity: 0; width: 0; height: 0; }
        }

        /* CSS for fade-in animation */
        .anime-fadein {
            display: block;
            -webkit-animation: fadeIn 1s;
            animation: fadeIn 1s;
            animation-fill-mode: forwards;
        }
        .slide-bottom {
                -webkit-animation: slide-bottom 0.5s cubic-bezier(0.250, 0.460, 0.450, 0.940) both;
                animation: slide-bottom 0.5s cubic-bezier(0.250, 0.460, 0.450, 0.940) both;
        }

        @-webkit-keyframes fadeIn {
            0% { opacity: 0; width: 0; height: 0; }
            1% { opacity: 0.01; width: 100%; height: 100%; }
            100% { opacity: 1; width: 100%; height: 100%; }
        }

        @keyframes fadeIn {
            0% { opacity: 0; width: 0; height: 0; }
            1% { opacity: 0.01;width: 100%; height: 100%;  }
            100% { opacity: 1; width: 100%; height: 100%; }
        }
        @-webkit-keyframes slide-bottom {
            0% {
                -webkit-transform: translateY(-100px);
                        transform: translateY(-100px);
            }
            100% {
                -webkit-transform: translateY(0px) !important;
                        transform: translateY(0px) !important;
            }
            }
        @keyframes slide-bottom {
            0% {
                -webkit-transform: translateY(-100px);
                        transform: translateY(-100px);
            }
            100% {
                -webkit-transform: translateY(0px) !important;
                        transform: translateY(0px) !important;
            }
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
    @include('app.static_components.popup')
    @include('layouts.newfooter')

    <div class="position-fixed w-100 h-100 bg-black  d-flex justify-content-center align-items-center top-0 d-none left-0" id="grow_modal"  style="z-index: 99999999">

        <div class="p-lg-5 py-4 px-3 col-md-9 col-lg-12 mx-auto position-relative">
            <div  class="position-relative overflow-hidden rounded-4 p-3 p-lg-0 col-9 col-sm-10 col-lg-8 mx-auto">
                    <span id="popup_xbtn" class="popup_xbtn"></span>
        
                
                <div class="">
                    <div class="py-4 text-center custom-text-white">
                        <p class="fs-1 pb-0 fw-bold">Let's have a conversation</p>
                      
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


        {{-- popup --}}

        <script>
                document.addEventListener("DOMContentLoaded", function () {
            // Function to show the popup
            function showPopup() {
                document.body.classList.add("overflow-hidden");
                document.getElementById("pg_popup").classList.add("anime-fadein");
                document.getElementById("pg-ma-modal").classList.add("slide-bottom");
            }

            // Function to close the popup
            document.getElementById("close_popup_pg").addEventListener("click", function () {
                document.body.classList.remove("overflow-hidden");
                document.getElementById("pg_popup").classList.remove("anime-fadein");
                document.getElementById("pg_popup").classList.add("anime-fadeout");
            });

            document.getElementById("yes_please").addEventListener("click", function () {
                document.getElementById("pg-ma-modal").classList.remove("slide-bottom");
                document.getElementById("pg-ma-modal").classList.add("anime-fadeout");
                document.getElementById("pg-ma-modal2").classList.remove("intial-anim");
                document.getElementById("pg-ma-modal").classList.add("d-none");
                document.getElementById("pg-ma-modal2").classList.add("slide-bottom");
            });

            document.addEventListener("mouseleave", function(event) {
            // Check if the mouse is leaving the document's boundaries
            if (event.clientY < 0 || event.clientX < 0 || event.clientX >= window.innerWidth || event.clientY >= window.innerHeight) {
                // Call your function here
            }
            });
     
            // Wait for 500 milliseconds and then show the popup
            // setTimeout(showPopup, 500);
         
            
// Define the function to be called when the mouse moves outside the browser window.

let isCursorOut = false;

// Attach the mouseout event listener to the document.
document.addEventListener("mouseout", mouseMoveOutside);

// Check if the mouse has moved outside the browser window.
function mouseMoveOutside(event) {
  event = event || window.event;
  if (event.relatedTarget === null && !isCursorOut) {
    showPopup();
    isCursorOut = true;
  }
}

// Function to show the popup on small devices after 800ms
function showPopupOnSmallDevice() {
  setTimeout(showPopup, 3500);
}

// Check the device width and decide which function to call
const screenWidth = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;

if (screenWidth <= 768) { // Change 768 to the appropriate breakpoint for small devices
  showPopupOnSmallDevice();
}


                })
</script>



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
