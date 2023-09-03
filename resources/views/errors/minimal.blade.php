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
    </style>
    @yield('css')

</head>

<body class="">
    @if (!request()->routeIs('privacy'))
    @include('layouts.navbar')
    @endif
    
    
    <div class="container error">
    <h1 class="error">@yield('code')</h1>
    <p class="error">@yield('message')</p>
    <ul class="error">
      <li class="error">Go back to the <a href="/">homepage</a></li>
    </ul>
    </div>
    @if (!request()->routeIs('privacy'))
    @include('layouts.footer')
    @endif
    
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
