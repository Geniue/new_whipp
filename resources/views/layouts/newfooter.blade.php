<div class="footer-container">
    {{-- contact us form --}}
    @if (!request()->routeIs('contact'))
    <div style="background-color: #5c5c5c !important;" class="p-lg-5 py-4 px-3 col-md-9 col-lg-12 mx-auto ">
        <div >

        <div class="box  bg-light col-12 col-md-10 col-lg-8 mx-auto ">
        <div   class="footer-contact-container position-relative  p-3 p-lg-0 ">

            

        <div class="">
            <div class="py-4 text-center">
                <p class="fs-1 pb-0 fw-bold">Let's have a conversation</p>
                <p class="custom-color-123 fs-5">Learn how to explode your growth today</p>
            </div>
        </div>
        {{-- form --}}
        <form  action="{{route('letstalk_form')}}" method="POST" class="w-100 custom-text-white p-lg-5 p-3 rounded-3">
      @csrf
            <div class="row">
                <div class="col-12 col-lg-6 p-3">
                    <div class="anim-for-inp-comp">
                        <input type="text"  aria-label="name" name="name" autocomplete="off" required />
                        <label for="name" class="anime-label-wrap">
                          <span class="anime-label-text">
                            Your Name
                          </span>
                        </label>
                      </div>
                    <div class="anim-for-inp-comp mt-3">
                        <input type="text"  aria-label="email" name="email" autocomplete="off" required />
                        <label for="email" class="anime-label-wrap">
                          <span class="anime-label-text">
                            Your Email Address
                          </span>
                        </label>
                      </div>
                      <div class="anim-for-inp-comp mt-3">
                        <input type="phone" name="phone"  aria-label="phone" autocomplete="off" required />
                        <label for="phone" class="anime-label-wrap">
                          <span class="anime-label-text">
                            Your Phone Number
                          </span>
                        </label>
                      </div>             
                </div>
                <div class="col-12 col-lg-6 p-3 d-flex flex-column ">
                    <label for="message_" class="pb-3 fs-5 fw-medium " style="color: #c4c4c4">Please Describe Project</label>
                    <textarea  aria-label="message" name="message_" class="custom-text-white footer-oranization_goal_message text-white fs-5" id="" cols="30" rows="7"></textarea>
                </div>
                <input type="hidden"  aria-label="current page" name="user_specific_service" value="{{$lastSegment}}">
                <div class="text-center p-2 my-3">
                    <button class="mx-auto  px-3 cta-btn-btn col-10 col-md-4  col-xl-3  d-inline-block py-2 fs-5 rounded-5" href="#" aria-label="submit">SUBMIT</button>
                </div>
          
            </div>
        </form>
        <div class="left-right-anime"></div>
        </div>
         </div>
    </div>
</div>

    @endif
<footer data-background-image="{{asset('assets/imgs/blue-mosaic-tile-pattern-background-in-technology-2022-12-16-04-28-39-utc1-min.webp')}}" class="lozad pt-5 px-4  footer-conat-conta">
    {{-- footer logos and links --}}
    <div class="d-flex pb-5 flex-column flex-md-row gap-2">
        {{-- sitelog --}}
        <div class="mb-4 mb-md-0 mx-auto">
            <img width="280" class="lozad" data-src="{{asset("assets/imgs/icons/whipplogo_white_1.webp")}}" alt="whipp digital">
        </div>
        {{-- location --}}
        {{-- <div class="mb-4 mb-md-0 d-flex flex-column flex-md-row footer-loc-wrapper gap-3 w-100 justify-content-around">
            <div class="d-flex footer-loc-det flex-md-column flex-xl-row gap-3">
                <span class="footer-loc-font">NYC</span>
                <div>
                    <p>     
                        149 5th Avenue, New
                        <br>
                        York
                    </p>
                    <a href="tel:909-434-4334">909-434-4334</a>
                </div>
            </div>
            <div class="d-flex footer-loc-det flex-md-column flex-xl-row gap-3">
                <span class="footer-loc-font">SFO</span>
                <div>
                    <p>     
                        600 California
                        <br>
                        Street
                    </p>
                    <a href="tel:909-434-4334">909-434-4334</a>
                </div>
            </div>
            <div class="d-flex footer-loc-det flex-md-column flex-xl-row gap-3">
                <span class="footer-loc-font">LDN</span>
                <div>
                    <p>     
                        7 Bell Yard
                        <br>
                        York
                    </p>
                    <a href="tel:909-434-4334">909-434-4334</a>
                </div>
            </div>
        </div> --}}

        {{-- links --}}
        <div>

        </div>
    </div>
    {{-- Links --}}
    <div class="col row  gap-lg-0 d-flex footer-con-links px-1 flex-grow-1 ">
        <div class="col-12  col-lg-2 px-0">
        <ul class=" d-flex flex-column gap-3 custom-boder-right px-3">
            <li >
                <p class="wd-footer-header mb-0" >
                    Digital Marketing 
                </p>
            </li>
            <li >
                <a href="{{route('digital_marketing_strategy')}}">
                    Digital Marketing Strategy
                </a>
            </li>
            <li >
                <a href="{{route('ppc_marketing')}}">
                    Pay-Per-Click Marketing
                </a>
            </li>
        
            <li >
                <a href="{{route('local_seo')}}">
                    Local SEO
                </a>
            </li>
            <li >
                <a href="{{route('franchise_seo')}}">
            
                    Franchise SEO

                </a>
            </li>
            <li >
                <a href="{{route('se_optimization')}}">                  
                    Search Engine Optimization
                </a>
            </li>
            
            </ul>
        </div>
        <div class="col-12  col-lg-2 px-0">  

            <ul class=" d-flex flex-column gap-3 custom-boder-right px-3">
                <li>
                    <p class="wd-footer-header mb-0" >
                        Ecommerce 
                    </p>
                </li>
                <li >
                    <a href="{{route('ecommerce_optim')}}">
                        Ecommerce Optimization
                    </a>
                </li>
                <li >
                    <a href="{{route('ecommerce_ppc_man')}}">
                        Ecommerce PPC
                    </a>
                </li>
                <li >
                    <a href="{{route('ecommerce_seo')}}">
                        Ecommerce SEO
                    </a>
                </li>
                <li >
                    <a href="{{route('ecommerce_web_design')}}">
                        Ecommerce Website Design
                    </a>
                </li>
                <li >
                    <a href="{{route('shopify_seo')}}">
                        Shopify SEO
                    </a>
                </li>
            </ul>
        </div>
        <div class="col-12  col-lg-2 px-0">
            <ul class=" d-flex flex-column gap-3 custom-boder-right px-3">
                <li>
                    <p class="wd-footer-header mb-0" >
                        
                        Web Design / Development
                    </p>
                </li>

                <li>
                    <a href="{{route('custom_web_design')}}">
                        Custom Website Design 
                    </a>
                </li>
                <li>
                    <a href="{{route('website_hosting')}}">
                        Website Hosting 
                    </a>
                </li>
                <li>
                    <a href="{{route('email_marketing')}}">
                        E-Mail Marketing Services
                    </a>
                </li>
                <li>
                    <a href="{{route('seo_content_writing')}}">
                        SEO Content Writing Serivces </a>
                </li>
</ul>
        </div>
        <div class="col-12  col-lg-2 px-0">
            <ul class=" d-flex flex-column gap-3 custom-boder-right px-3">
                <li>
                    <p class="wd-footer-header mb-0">
                        Virtual Assistant Service
                    </p>
                </li>

                <li >
                    <a href="{{route('rev_assistant')}}">
                        Real Estate Virtual Assistant 
                    </a>
                </li>
         
                <li >
                    <a href="{{route('vp_assistant')}}">
                        Virtual Personal Assistant  
                    </a>
                </li>
                
                <li >
                    <p class="wd-footer-header mb-0">
                        Social Media Marketing
                    </p>
                </li>
              
         
                <li >
                    <a href="{{route('social_media_advertising')}}">
                        Social Media Advertising 
                    </a>
                </li>
         
                <li >
                    <a href="{{route('smb_management')}}">
                        Social Media Brand Management
                    </a>
                </li>
         
            </ul>
        </div>
        <div class="col-12  col-lg-2 px-0">
            <ul class=" d-flex flex-column gap-3 custom-boder-right px-3">


                <li>
                    <p  class="wd-footer-header mb-0" >
                        Amazon Marketing
                    </p>
                </li>
              
                <li>
                    <a href="{{  route("amazon_marketing") }}">
                        Amazon Marketing
                    </a>
                </li>
              
                <li>
                    <a href="{{  route("amazon_seller_consulting") }}">
                        Amazon Seller Consulting
                    </a>
                </li>


                <li>
                    <p class="wd-footer-header mb-0" >           
                        Reputation Management
                    </p>
                </li>
                <li>
                    <a href="{{route('online_reputation_repair')}}">
                        Online Reputation Repair
                    </a>
                </li>
         
                <li>
                    <a href="{{route('franchise_reputation_man')}}">
                        
                        Franchise Reputation Management
                    </a>
                </li>
         
              
               
            </ul>
        </div >
        <div class="col-12  col-lg-2 pt-2 pt-lg-0">

            <div class=" col-9 col-md-5 col-lg-auto d-flex flex-column gap-2  ">
                <p class="fs-5 fw-bold mb-0">CONTACT</p>
                {{-- form --}}
                {{-- <form class="d-flex flex-column gap-3 gap-lg-2">
                    <div class="position-relative overflow-hidden">
                        <input class="bg-transprent w-100 py-1 rounded-3 footer-email-input custom-text-white" type="text" placeholder="Your Email address">
                        <svg class="wav-anime" width="300%" height="100%" viewBox="0 0 1200 60" preserveAspectRatio="none">
                            <path d="M0,56.5c0,0,298.666,0,399.333,0C448.336,56.5,513.994,46,597,46c77.327,0,135,10.5,200.999,10.5c95.996,0,402.001,0,402.001,0"></path>
                        </svg>
                    </div>
                    <div class="footer-form-sub-btn">
                        <button class="" type="submit">SUBSCRIBE</button>
                    </div>
                </form> --}}
            <a href="mailto:support@whippdigital.com" class="">support@whippdigital.com</a>
            <a href="tel:212-951-0651 " class="">212-951-0651 </a>
            <div class="d-flex align-items-center mt-2">
                <div class="footer-loc-soc-link ms-1 d-flex gap-3 gap-lg-2 gap-xl-3 ">
                    <a aria-label="fb" href="#">
                        <svg width="30" height="30" viewBox="0 0 26 26" xmlns="http://www.w3.org/2000/svg">
                            <g fill="none" fill-rule="evenodd">
                            <path id="fb" d="M25 13c0 6.628-5.372 12-12 12S1 19.628 1 13 6.372 1 13 1s12 5.372 12 12z" stroke="#FFF" stroke-width="1.978"></path>
                            <path d="M8.46 16.243h2.594v8.585c.636.104 1.282.172 1.946.172.664 0 1.31-.068 1.946-.172v-8.585h2.351a.648.648 0 0 0 .644-.567l.243-1.946a.654.654 0 0 0-.157-.51.645.645 0 0 0-.486-.22h-2.595v-2.27a1.3 1.3 0 0 1 1.297-1.298h1.298a.648.648 0 0 0 .648-.648v-2.19a.648.648 0 0 0-.59-.646c-.038-.002-.953-.083-2.11-.083-2.861 0-4.435 1.698-4.435 4.779V13H8.46a.648.648 0 0 0-.648.649v1.946c0 .36.291.648.648.648z" fill="#FFF" fill-rule="nonzero"></path>
                            </g>
                            </svg>
                        </a>
                        <a  aria-label="twitter" href="#">
                            <svg width="30" height="28" viewBox="0 0 28 24" xmlns="http://www.w3.org/2000/svg">
                                <g fill="none" fill-rule="evenodd">
                                <path  d="M27.812 3.17a.676.676 0 0 0-.758-.14l-.11.049a9.136 9.136 0 0 1-.278.125c.27-.426.487-.88.635-1.352a.65.65 0 0 0-.226-.713.672.672 0 0 0-.756-.043c-1.049.628-2.038 1.018-3.117 1.23l-.523.088c1.404 1.016 2.32 2.65 2.32 4.497 0 .085-.005.172-.005.257l.099-.08c2.083-1.711 2.805-3.11 2.836-3.165a.647.647 0 0 0-.117-.752z" fill="#FFF" fill-rule="nonzero"></path>
                                <path id="twitter"  d="M19.333 1.33c-3.13 0-5.667 2.498-5.667 5.581v.985C5.54 7.468 3.333 1.986 3.333 1.986s-1 1.313-1 3.283C2.333 8.553 5 9.866 5 9.866c-2 0-3.333-.657-3.333-.657S2 12.821 6.333 14.463l-2.666.657S5 17.418 9 18.403c0 0-2.334 1.97-8 1.97C1 20.373 3.333 23 9.666 23 20.666 23 25 12.821 25 6.911c0-3.083-2.536-5.582-5.666-5.582z" stroke="#FFF" stroke-width="1.978" stroke-linejoin="round"></path>
                                </g>
                            </svg>
                        </a>
                    <a  aria-label="insta" href="#">
                        <svg width="30" height="30" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0">
                            </g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier"> <path  id="insta" d="M16.19 2H7.81C4.17 2 2 4.17 2 7.81V16.18C2 19.83 4.17 22 7.81 22H16.18C19.82 22 21.99 19.83 21.99 16.19V7.81C22 4.17 19.83 2 16.19 2ZM12 15.88C9.86 15.88 8.12 14.14 8.12 12C8.12 9.86 9.86 8.12 12 8.12C14.14 8.12 15.88 9.86 15.88 12C15.88 14.14 14.14 15.88 12 15.88ZM17.92 6.88C17.87 7 17.8 7.11 17.71 7.21C17.61 7.3 17.5 7.37 17.38 7.42C17.26 7.47 17.13 7.5 17 7.5C16.73 7.5 16.48 7.4 16.29 7.21C16.2 7.11 16.13 7 16.08 6.88C16.03 6.76 16 6.63 16 6.5C16 6.37 16.03 6.24 16.08 6.12C16.13 5.99 16.2 5.89 16.29 5.79C16.52 5.56 16.87 5.45 17.19 5.52C17.26 5.53 17.32 5.55 17.38 5.58C17.44 5.6 17.5 5.63 17.56 5.67C17.61 5.7 17.66 5.75 17.71 5.79C17.8 5.89 17.87 5.99 17.92 6.12C17.97 6.24 18 6.37 18 6.5C18 6.63 17.97 6.76 17.92 6.88Z" fill="#ffffff"></path> </g></svg>
                    </a>
                    <a  aria-label="linkedin" href="#">
                        <svg width="30" height="30" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <g fill="none" fill-rule="evenodd">
                            <path id="linkedin" d="M20.333 23H3.667A2.665 2.665 0 0 1 1 20.333V3.667A2.665 2.665 0 0 1 3.667 1h16.666A2.665 2.665 0 0 1 23 3.667v16.666A2.665 2.665 0 0 1 20.333 23z" stroke="#FFF" stroke-width="1.978"></path>
                            <path d="M8 6.333C8 7.253 7.253 8 6.333 8c-.919 0-1.666-.747-1.666-1.667 0-.919.747-1.666 1.666-1.666.92 0 1.667.747 1.667 1.666zM7.333 19.333h-2a.665.665 0 0 1-.666-.666V10c0-.37.297-.667.666-.667h2c.37 0 .667.297.667.667v8.667c0 .37-.297.666-.667.666zM15.333 9.333a3.98 3.98 0 0 0-2.666 1.026V10A.665.665 0 0 0 12 9.333h-2a.665.665 0 0 0-.667.667v8.667c0 .37.297.666.667.666h2c.37 0 .667-.297.667-.666v-5c0-.92.747-1.667 1.666-1.667.92 0 1.667.747 1.667 1.667v5c0 .37.297.666.667.666h2c.37 0 .666-.297.666-.666v-5.334c0-2.205-1.794-4-4-4z" fill="#FFF" fill-rule="nonzero"></path>
                            </g>
                            </svg>
                    </a>
                </div>
            </div>
            </div>
        </div>
    </div>
    {{-- footer bar --}}
    <div class="custom-boder-top custom-mx-lg-border-top-0 mt-4 mt-lg-0 py-3  ">
        <div class="d-none d-lg-flex footer-bar-desk-links">
            <p>© All Rights Reserved</p>
            <div class="d-flex gap-3 ms-auto">
                <a href="#" class="custom-boder-right">Privacy Policy</a>
                <a href="#" class="">Terms Of Serivce</a>
            </div>
        </div>
        <div class="d-lg-none">
            <div class="d-flex gap-3  pb-3 fs-14px">
                <a href="#"  class="custom-boder-right">Privacy Policy</a>
                <a href="#" class="custom-boder-right">Terms Of Serivce</a>

            </div>
            <div class="custom-boder-top py-3">
                <p class="text-center fs-14px">
                    © All Rights Reserved
                </p>
            </div>
        </div>
    </div>
</footer>
</div>