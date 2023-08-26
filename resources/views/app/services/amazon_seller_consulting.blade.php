@extends('layouts.index')

@section('title')
<title> Amazon Seller Consulting | Whippdigital </title>

@endsection

@section('css')
<style>
    .feture-pare{
        line-height: 25px;
        font-weight: 600;
        color: #7c7c7c;
    }
    .feture-head{
        font-size: 40px;
        font-weight: bold;
        line-height: 46px;
        color: #49453b;
    }
    @media (max-width:786px){
        .feture-head{
        font-size: 30px !important;
        font-weight: bold;
        line-height: 38px;
    }
    }
</style>
@endsection

@section('pageheading')
 <!-- SERIVCES TITLE BANNER SECTION STARTS HERE -->
 <section class="desk-con-ti-ba-section d-none d-lg-block">
    <div class="container text-center py-4">
        <h2 class="fs-1 fw-bold custom-text" style="text-transform: capitalize">
            Amazon Seller Consulting
        </h2>
        <p class="custom-text-2 fs-5">
            Create a Strong Digital Foundation and Rank High on Search Results
        </p>
        <div class="text-center py-4">
            <button  class="iwantgrow_btn lets-talk-btn col-5 col-md-4 col-lg-2 d-inline-block py-2 fs-5 rounded-5" href="#">Let's Talk</button>
        </div>
    </div>
</section>
<!-- SERIVCES TITLE BANNER SECTION ENDS HERE -->

@endsection

@section('content')
    <!-- SERIVCES TITLE BANNER SECTION STARTS HERE -->
    <section class="con-ti-ba-section d-lg-none">
        <div class="container text-center py-4">
            <h2 class="fs-1 fw-bold custom-text" style="text-transform: capitalize">
                Amazon Seller Consulting
            </h2>
            <p class="custom-text-2 fs-5">
                Create a Strong Digital Foundation and Rank High on Search Results
            </p>
                 <div class="text-center py-4">
                <button  class="iwantgrow_btn  lets-talk-btn col-5 col-md-4 col-lg-2 d-inline-block py-2 fs-5 rounded-5" >Let's Talk</button>
            </div>
        </div>
    </section>


    <!-- TRUSTED BY BANNER STARTS HERE -->
    @include('app.static_components.trusted_banner')
    <!-- TRUSTED BY BANNER ENDS HERE -->

    <!-- WHY SERVICE STARTS HERE -->
    <section class="border ">
        <div class="container py-5 custom-text">
            <div class="d-flex flex-column flex-lg-row gap-3 py-5 justify-content-center">
                <div
                    class="mx-sm-auto mx-lg-0 col-12 px-2 px-md-0 col-md-10 col-lg-6 col-xl-5 d-flex flex-column justify-content-center align-items-center">
                    <h3 class=" d-lg-none feture-head mb-2">
                        Amazon Seller Consulting
                    </h3>
                    <img width="600" src="{{ asset('assets/imgs/whipp_images/Amazon Marketing/Amazon Seller Consulting/v1/business-finance-accounting-investment-consultin-2023-05-09-16-41-13-utc.jpg') }}" alt="" />
                </div>
                <div class="mx-auto mx-lg-0 col-12 px-2 px-md-0 col-md-10 col-lg-6 col-xl-5">
                    <div class="pb-lg-3">
                        <h3 class="d-none d-lg-block feture-head">
                            Amazon Seller Consulting
                        </h3>
                    </div>
                    <div>
                        <p class="feture-pare">
                            Navigating the vast world of Amazon can be daunting for sellers, both new and experienced. At Whipp Digital, our Amazon Seller Consulting service is designed to demystify this e-commerce giant for you. Our seasoned experts, equipped with the latest insights and industry trends, will guide you in optimizing your product listings, enhancing your brand presence, and understanding the intricacies of Amazon's algorithm. Whether you're just launching a product or looking to boost your existing sales, our tailored strategies will ensure you leverage Amazon's platform to its fullest potential. Dive in with Whipp Digital, and let's transform your Amazon journey from overwhelming to outstanding.
                        </p>
                       
                    </div>
                </div>
                
            </div>
        </div>
    </section>
    <section>
        <div class="container py-5 custom-text">
            <div class="d-flex flex-column-reverse flex-lg-row gap-3 py-5 justify-content-center">
   
                <div class="mx-auto mx-lg-0 col-12 px-2 px-md-0 col-md-10 col-lg-6 col-xl-5">
                    <div class="pb-lg-3">
                        <h3 class="d-none d-lg-block feture-head">
                            Amazon Listing Consultant
                        </h3>
                    </div>
                    <div>
                        <p class="feture-pare">
                            Perfecting your product listing on Amazon isn't merely about adding images and descriptions; it's an art and science combined. At Whipp Digital, our Amazon Listing Consultants bring forth this blend, ensuring your product doesn't just exist, but thrives amidst the vast Amazon marketplace. With an acute understanding of keyword optimization, high-quality imagery, and impactful content creation, our experts ensure your listings are both compelling to buyers and optimized for Amazon's search algorithms. Tapping into our deep knowledge pool means not just being another seller, but becoming a standout brand on Amazon. With Whipp Digital by your side, let's craft listings that not only captivate but convert!
                        </p>
                       
                    </div>
                </div>
                <div
                class="mx-sm-auto mx-lg-0 col-12 px-2 px-md-0 col-md-10 col-lg-6 col-xl-5 d-flex flex-column justify-content-center align-items-center">
                <h3 class=" d-lg-none feture-head">
                    Amazon Listing Consultant
                </h3>
                <img width="600" src="{{ asset('assets/imgs/whipp_images/Amazon Marketing/Amazon Seller Consulting/v1/medical-prescription-2021-08-26-15-34-39-utc.jpg') }}" alt="" />
            </div>
            </div>
        </div>
    </section>

    {{-- talk with one of our experts --}}
    <section style="background-color: #f3f3f3;">
        <div class="container py-4 ">
            <div class="col-lg-10 mx-auto">

                <div class="text-center">
                    <h3 class="feture-head mb-3">How we Keep You Updated</h3>
                <p class="feture-pare">
                    As part of our Amazon marketing agency plan, we provide you with a complete picture of how we’ll execute your successful advertising campaign both weekly and monthly. We establish month-to-month growth percentage goals and thoroughly explain our strategy each step of the way. We also make calculated adjustments month to month to ensure we maximize ROI. Weekly and monthly reports are sent to you to keep you regularly updated.
                    <br>
                    <br>
                    Following a successful Amazon sponsored products campaign is a crucial step for any prosperous Amazon seller. Ultimately, it is one of the most important steps in determining whether you thrive or not on Amazon.
                </p>
            </div>
            <div class="d-flex  py-3">
                <button class="mx-auto  px-3 cta-btn-btn col-12 col-md-8  col-xl-6  d-inline-block py-2 fs-5 rounded-5" href="#">TALK WITH ONE OF OUR AMAZON EXPERTS</button>
            </div>
        </div>
        </div>
    </section>
    <section class="border ">
        <div class="container py-5 custom-text">
            <div class="d-flex flex-column flex-lg-row gap-3 py-5 justify-content-center">
                <div
                    class="mx-sm-auto mx-lg-0 col-12 px-2 px-md-0 col-md-10 col-lg-6 col-xl-5 d-flex flex-column justify-content-center align-items-center">
                    <h3 class=" d-lg-none feture-head mb-2">
                        Amazon Suspension Consulting

                    </h3>
                    <img width="600" src="{{ asset('assets/imgs/whipp_images/Amazon Marketing/Amazon Seller Consulting/v1/office-hands-laptop-and-business-people-teamwork-2023-03-29-21-34-32-utc.jpg') }}" alt="" />
                </div>
                <div class="mx-auto mx-lg-0 col-12 px-2 px-md-0 col-md-10 col-lg-6 col-xl-5">
                    <div class="pb-lg-3">
                        <h3 class="d-none d-lg-block feture-head">
                            Amazon Suspension Consulting
                        </h3>
                    </div>
                    <div>
                        <p class="feture-pare">
                            Navigating the complexities of the Amazon marketplace can be challenging, especially when faced with unexpected suspensions. At Whipp Digital, our Amazon suspension consultants understand the intricacies of Amazon's policies and the myriad reasons an account might be suspended. Whether you're a novice seller caught off-guard or a seasoned merchant seeking clarity, our team is equipped with the insights and experience to help you restore your seller status promptly. We're more than just problem solvers; we're your advocates in the expansive world of Amazon e-commerce. By partnering with us, you don’t only get assistance in reinstating your account but also gain a wealth of knowledge to prevent future hiccups. Dive into the depths of Amazon's framework with confidence, knowing Whipp Digital has your back.
                        </p>
                       
                    </div>
                </div>
                
            </div>
        </div>
    </section>
    <section>
        <div class="container py-5 custom-text">
            <div class="d-flex flex-column-reverse flex-lg-row gap-3 py-5 justify-content-center">
   
                <div class="mx-auto mx-lg-0 col-12 px-2 px-md-0 col-md-10 col-lg-6 col-xl-5">
                    <div class="pb-lg-3">
                        <h3 class="d-none d-lg-block feture-head">
                            Amazon Product Consulting

                        </h3>
                    </div>
                    <div>
                        <p class="feture-pare">
                            Navigating the vast ecosystem of Amazon can be a daunting task for brands and entrepreneurs alike. At Whipp Digital, our Amazon Product Consultants bring a blend of expertise, experience, and human touch to help you master this digital retail behemoth. Whether you're launching a new product, optimizing existing listings, or seeking strategies to amplify sales and reviews, our consultants stand by your side. Beyond just algorithms and analytics, we understand the nuances of buyer behavior and the ever-evolving dynamics of the Amazon marketplace. Partner with us to turn complexities into opportunities and put your product in the spotlight where it truly belongs. Together, let's make your Amazon journey not just successful but also insightful and empowering.
                        </p>
                       
                    </div>
                </div>
                <div
                class="mx-sm-auto mx-lg-0 col-12 px-2 px-md-0 col-md-10 col-lg-6 col-xl-5 d-flex flex-column justify-content-center align-items-center">
                <h3 class=" d-lg-none feture-head">
                    Amazon Product Consulting

                </h3>
                <img width="600" src="{{ asset('assets/imgs/whipp_images/Amazon Marketing/Amazon Seller Consulting/v1/podium-products-to-simulate-the-factory-system-2022-12-16-11-54-19-utc.jpg') }}" alt="" />
            </div>
            </div>
        </div>
    </section>
    <section class="border ">
        <div class="container py-5 custom-text">
            <div class="d-flex flex-column flex-lg-row gap-3 py-5 justify-content-center">
                <div
                    class="mx-sm-auto mx-lg-0 col-12 px-2 px-md-0 col-md-10 col-lg-6 col-xl-5 d-flex flex-column justify-content-center align-items-center">
                    <h3 class=" d-lg-none feture-head mb-2">
                        Amazon Brand Consulting

                    </h3>
                    <img width="600" src="{{ asset('assets/imgs/whipp_images/Amazon Marketing/Amazon Seller Consulting/v1/real-estate-insurance-agents-are-using-tablet-to-r-2021-08-27-16-15-41-utc.jpg') }}" alt="" />
                </div>
                <div class="mx-auto mx-lg-0 col-12 px-2 px-md-0 col-md-10 col-lg-6 col-xl-5">
                    <div class="pb-lg-3">
                        <h3 class="d-none d-lg-block feture-head">
                            Amazon Brand Consulting
                        </h3>
                    </div>
                    <div>
                        <p class="feture-pare">
                            At Whipp Digital, our Amazon Brand Consultants aren’t just well-versed in the vast landscape of Amazon; they’re passionate about transforming your brand's presence on the world's largest e-commerce platform. Navigating the intricate nuances of Amazon can be a daunting task, especially when understanding algorithm intricacies, enhanced brand content, and effective PPC strategies. Our team is dedicated to ensuring your products not only reach their target audience but also resonate with them. Leveraging the latest insights and industry expertise, we’ve assisted countless brands in scaling their operations, improving visibility, and amplifying sales. With Whipp Digital by your side, consider the complexities of Amazon demystified. Dive into a partnership where insight meets action, and where your brand's potential is unlocked.
                        </p>
                       
                    </div>
                </div>
                
            </div>
        </div>
    </section>

@endsection
