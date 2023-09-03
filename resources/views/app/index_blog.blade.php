@extends('layouts.index')
@section('title')
    Blogs | Whippdigital
@endsection

@section('meta')
    <link rel="canonical" href="{{ url()->current() }}">
    @if($blogs->previousPageUrl())
    <link rel="prev" href="{{ $blogs->previousPageUrl() }}">
    @endif
    @if($blogs->nextPageUrl())
    <link rel="next" href="{{ $blogs->nextPageUrl() }}">
    @endif

@endsection


@section("pageheading")
    <!-- BLOG TITLE BANNER SECTION STARTS HERE -->
    <section class="desk-con-ti-ba-section pb-4 d-none d-lg-block">
        <div class="container text-center py-4">
            <h2 class="fs-1 fw-bold custom-text text-ellipsis-4">Our Blog</h2>
            <p class="custom-text-2 fs-5 ">
                News From Whippdigital And Around The World Of Web Design
                And Online Marketing.
            </p>
        </div>
        <div class="text-center py-4">
            <button  class="iwantgrow_btn  lets-talk-btn col-5 col-md-4 col-lg-2 d-inline-block py-2 fs-5 rounded-5" >Let's Talk</button>
        </div>
    </section>
    <!-- BLOG TITLE BANNER SECTION ENDS HERE -->

@endsection


@section('content')
    <!-- blog section -->
    <section class="con-ti-ba-section pb-4 d-lg-none">
        <div class="container text-center py-4">
            <h2 class="fs-1 fw-bold custom-text text-ellipsis-4">Our Blog</h2>
            <p class="custom-text-2 fs-5 ">
                News From Whippdigital And Around The World Of Web Design
                And Online Marketing.
            </p>
            <div class="text-center py-4">
                <button  class="iwantgrow_btn  lets-talk-btn col-5 col-md-4 col-lg-2 d-inline-block py-2 fs-5 rounded-5" >Let's Talk</button>
            </div>
        </div>
        <div class="text-center py-4">

            <a class="lets-talk-btn col-5 col-md-4 col-lg-2 d-inline-block py-2 fs-5 rounded-5" href="#">Let's Talk</a>
        </div>
    </section>
    <!-- BLOG TITLE BANNER SECTION ENDS HERE -->

    {{-- JOIN OVER CTA SECTION STARTS HERE --}}
    {{-- @include('app.static_components.joinover_banner') --}}
    {{-- JOIN OVER CTA SECTION ENDS HERE --}}

    {{--  BLOG SEARCH SECTION STARTS HERE --}}
    <section class="border border-1 border-end">
        <div class="container border-b col-lg-11">
            <div class="row justify-content-between gap-4  py-4 align-items-center">
                <div class="col-lg-4 d-flex align-items-center col-md-5 col-12">
                    <div class="w-100  border-color-primary d-flex rounded-5 gap-1  position-relative border border-2 overflow-hidden px-3 py-1">
                        <div class="d-flex justify-content-center align-items-center">
                            <svg width="30" height="30" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M15.7955 15.8111L21 21M18 10.5C18 14.6421 14.6421 18 10.5 18C6.35786 18 3 14.6421 3 10.5C3 6.35786 6.35786 3 10.5 3C14.6421 3 18 6.35786 18 10.5Z" stroke="#30A2FF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                        </div>
                        <input class="outline-none border-0 w-100 fs-5 p-1" type="text" placeholder="Search...">
                    </div>
                </div>
                {{-- <div class="col-lg-3 col-md-5 col-12 ca-port-option">
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            All Industries
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Retail</a></li>
                            <li><a class="dropdown-item" href="#">Home</a></li>
                            <li><a class="dropdown-item" href="#">Technology</a></li>
                        </ul>
                    </div>
                </div> --}}
            </div>
        </div>
    </section>
    <section>
        <div  class="container-fluid col-12 py-5">
            <div id="blogs" class="row justify-content-center  col-12 mx-auto gap-3">
                @include('app.pagination.blogs.index')
            </div>
        </div>
    </section>
@endsection

@section('js')
    <script type="text/javascript">
        $(document).ready(function() {
            $(document).on('click', '.pagination a', function(event) {
                event.preventDefault();
                var containerH = $('#blogs').height();
                $.ajax({
                    url: $(this).attr('href'),
                    method: 'GET',
                    dataType: 'html',
                    beforeSend: function() {
                        // showLoader();
                        $('#blogs').height(containerH)
                    },
                    success: function(response) {

                        $('#blogs').html(response);
                    },
                    complete: function() {
                        // hideLoader();
                        var target = $("#st");
                        $('html, body').animate({
                            scrollTop: target.offset().top
                        }, 1000);
                        // Reload Lozad
                        const observer = lozad('.lozad', {
                            loaded: function(el) {
                                el.classList.add('fade-in');
                            }
                        });
                        observer.observe();

                        // Reload AOS
                        AOS.refresh();
                    }
                });
            });
        })
    </script>
@endsection
