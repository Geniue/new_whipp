<div id="pg_popup" class="position-fixed  left-0 top-0 d-flex justify-content-center align-items-center pp-uap-bg intial-anim">
    <div class="container row p-0 m-0 px-md-4">
        <div class="col-lg-7 col-md-9 col-xl-6 mx-auto p-0 ">
            <div id="pg-ma-modal" class="bg-white cus-ba-shadow p-5 mx-auto rounded-1 col-11 col-md-12">

                <div class="text-center d-flex flex-column gap-4">
                    <p class="fs-3 colr-newblr mb-0">
                        <strong>
                            Wait Before you go..
                        </strong>
                    </p>
                    <div class="br-s32-ds"></div>
                    <strong>
                        <p class="fs-4 text-green-1 mb-0">Sign up for coupons and seasonal deals on your next cleanings!</p>
                    </strong>
                     <div class="d-flex flex-column flex-md-row gap-3  justify-content-center py-2">
                        <a href="#" id="yes_please" class="w-100 px-4 shadow lettalkbtn_hasarrow px-3 cta-btn-btn  mx-auto d-flex justify-content-center align-items-center gap-2 py-2   rounded-5 text-uppercase fw-bold">Yes, Sign me up</a>
                        
                        <a href="#" id="close_popup_pg" class="w-100 px-4 shadow lettalkbtn_hasarrow px-2 cta-btn-btn  mx-auto d-flex justify-content-center align-items-center gap-2 py-2   rounded-5 text-uppercase fw-bold close_btn">No, I don't like to save!</a>
                        

                     </div>
                </div>
            </div>
            <div id="pg-ma-modal2" class="bg-white cus-ba-shadow p-4 p-lg-5 mx-auto rounded-1 intial-anim col-11 col-md-12">

                <div class="text-center d-flex flex-column gap-3">
                    <p class="fs-3 text-blue mb-0 colr-newblr">
                            <strong>
                                Great!
                            </strong>
                    </p>
                    <div class="br-s32-ds"></div>
                    <strong>
                        <p class="fs-4 text-green-1 mb-0">Where Should we sign up you for coupons and seasonal deals on your next cleanings?</p>
                    </strong>
                     <form action="#" method="POST" class="d-flex flex-column gap-3 gap-md-3  justify-content-center col-lg-10 mx-lg-auto py-3">
                        @csrf
                       
                        <div class="anim-for-inp-comp mt-3">
                            <input  aria-label="email" style="color: #373737 !important" type="text" name="email" autocomplete="off" required />
                            <label for="email" class="anime-label-wrap" >
                              <span class="anime-label-text" style="color: #373737 !important">
                                Your Email Address
                              </span>
                            </label>
                          </div>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" value=""  id="defaultCheck1" required>
                          <label class="form-check-label fs-5" for="defaultCheck1">
                            I agree to receive marketing SMS from WhippDigital, LLC
                          </label>
                        </div>

                        <button  id="close_popup_pg_2nd" id="yes_please" class="w-100 px-4 fs-5 shadow lettalkbtn_hasarrow px-3 cta-btn-btn  mx-auto d-flex justify-content-center align-items-center gap-2 py-2   rounded-5 text-uppercase fw-bold">Get My Coupon</button>


                     </form>
                </div>
            </div>
        </div>
    </div>
</div>